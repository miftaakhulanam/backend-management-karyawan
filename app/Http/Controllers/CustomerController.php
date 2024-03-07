<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kota;
use App\Models\User;
use App\Models\Customer;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pelanggan.index', [
            'customer' => Customer::orderBy('created_at', 'desc')->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create', [
            'kota' => Kota::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'id_customer' => 'required|min:3|max:20|unique:customers',
            'username' => 'required|min:3|max:255|unique:customers',
            'nik' => 'required|digits:16|unique:customers',
            'phone' => 'required|max:20',
            'wifi_password' => '',
            'koordinat' => '',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'photo_ktp' => 'image|file|max:2048',
            'photo_rumah' => 'image|file|max:2048'
        ]);

        if ($request->photo_ktp) {
            $validatedData['photo_ktp'] = $request->file('photo_ktp')->store('ktp-customer');
        }

        if ($request->photo_rumah) {
            $validatedData['photo_rumah'] = $request->file('photo_rumah')->store('rumah-customer');
        }

        Customer::create($validatedData);
        toast('Berhasil ditambahkan', 'success');
        return redirect('/customer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('pelanggan.show', [
            'customer' => $customer,
            'kota' => Kota::where('id', $customer->kota)->value('nama'),
            'kecamatan' => Kecamatan::where('id', $customer->kecamatan)->value('nama'),
            'desa' => Desa::where('id', $customer->desa)->value('nama')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('pelanggan.edit', [
            'customer' => $customer,
            'kota' => Kota::all(),
            'kecamatan' => Kecamatan::all(),
            'desa' => Desa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $rules = [
            'name' => 'required|min:3|max:255',
            'phone' => 'required|max:20',
            'wifi_password' => '',
            'koordinat' => '',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'photo_ktp' => 'image|file|max:2048',
            'photo_rumah' => 'image|file|max:2048'
        ];

        if ($request->id_customer != $customer->id_customer) {
            $rules['id_customer'] = 'required|min:3|max:20|unique:customers';
        }

        if ($request->username != $customer->username) {
            $rules['username'] = 'required|min:3|max:255|unique:customers';
        }

        if ($request->nik != $customer->nik) {
            $rules['nik'] = 'required|digits:16|unique:customers';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('photo_ktp')) {
            if ($request->oldKtp) {
                Storage::delete($request->oldKtp);
            }
            $validatedData['photo_ktp'] = $request->file('photo_ktp')->store('ktp-customer');
        }

        if ($request->file('photo_rumah')) {
            if ($request->oldRumah) {
                Storage::delete($request->oldRumah);
            }
            $validatedData['photo_rumah'] = $request->file('photo_rumah')->store('rumah-customer');
        }

        Customer::where('id', $customer->id)
            ->update($validatedData);
        toast('Berhasil diperbarui', 'success');
        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        if ($customer->photo_ktp) {
            Storage::delete($customer->photo_ktp);
        }

        if ($customer->photo_rumah) {
            Storage::delete($customer->photo_rumah);
        }

        Customer::where('id', $customer->id)->delete();
        toast('Berhasil dihapus', 'success');
        return redirect('/customer');
    }
}
