<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengaturan.index', [
            'paket' => Paket::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengaturan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:20',
        ]);

        Paket::create($validatedData);
        toast('Berhasil ditambahkan', 'success');
        return redirect('/pengaturan/paket');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $paket)
    {
        return view('pengaturan.edit', [
            'paket' => $paket
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paket $paket)
    {
        $rules = [
            'nama' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        Paket::where('id', $paket->id)
            ->update($validatedData);

        toast('Berhasil diperbarui', 'success');
        return redirect('/pengaturan/paket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $paket)
    {
        Paket::where('id', $paket->id)->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/pengaturan/paket');
    }
}
