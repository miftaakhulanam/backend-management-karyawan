<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\Komplain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KomplainStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();

        return view('komplain.index', [
            'komplain' => Komplain::where('user_id', $user_id)
                ->where(function ($query) {
                    $query->where('status', 'Belum selesai')
                        ->orWhere('status', 'Tertunda');
                })
                ->orderBy('created_at', 'desc')
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Komplain $komplain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komplain $komplain)
    {
        return view('komplain.edit', [
            'komplain' => $komplain,
            'user' => User::all(),
            'customer' => Customer::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Komplain $komplain)
    {
        $rules = [
            'user_id' => 'required',
            'customer_id' => 'required',
            'pesan' => 'required|max:255',
            'status' => 'required',
            'photo' => 'image|file|max:1024'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('photo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('photo-komplain');
        }

        Komplain::where('id', $komplain->id)
            ->update($validatedData);

        toast('Berhasil diperbarui', 'success');
        return redirect('/komplain-staff');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komplain $komplain)
    {
        if ($komplain->photo) {
            Storage::delete($komplain->photo);
        }

        Komplain::where('id', $komplain->id)->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/komplain-staff');
    }
}
