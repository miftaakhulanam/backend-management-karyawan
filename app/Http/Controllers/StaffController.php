<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('staff.index', [
            'user' => User::whereIn('is_admin', ['Admin', 'Staff'])
                ->orderBy('is_admin', 'asc')
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required',
            'jabatan' => 'required',
            'phone' => 'max:20',
            'alamat' => 'max:255',
            'photo_profil' => 'image|file|max:1024'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->photo_profil) {
            $validatedData['photo_profil'] = $request->file('photo_profil')->store('profil-images');
        }

        User::create($validatedData);
        toast('Berhasil ditambahkan', 'success');
        return redirect('/staff');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $staff)
    {
        return view('staff.show', [
            'user' => $staff
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $staff)
    {
        return view('staff.edit', [
            'user' => $staff
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $staff)
    {
        $rules = [
            'name' => 'required|min:3|max:255',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required',
            'jabatan' => 'required',
            'phone' => 'max:20',
            'alamat' => 'max:255',
            'photo_profil' => 'image|file|max:1024'
        ];

        if ($request->email != $staff->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate($rules);

        if ($request->password != $staff->password) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        if ($request->file('photo_profil')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo_profil'] = $request->file('photo_profil')->store('profil-images');
        }

        User::where('id', $staff->id)
            ->update($validatedData);

        toast('Berhasil diperbarui', 'success');
        return redirect('/staff');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $staff)
    {
        if ($staff->photo_profil) {
            Storage::delete($staff->photo_profil);
        }

        User::where('id', $staff->id)->delete();
        toast('Berhasil dihapus', 'success');
        return redirect('/staff');
    }
}
