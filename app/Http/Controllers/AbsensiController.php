<?php

namespace App\Http\Controllers;

use App\Models\Codeqr;
use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('absensi.absensi');
    }

    public function scan()
    {
        return view('absensi.scan_absensi');
    }

    public function store(Request $request)
    {
        // Cek apakah user sudah absen pada hari ini
        $existingAbsensi = Absensi::whereDate('created_at', today())
            ->where('user_id', auth()->user()->id)
            ->exists();

        $codeqr = Codeqr::first();

        // Periksa apakah kode ada dan cocok dengan nilai yang diterima dari permintaan
        if ($codeqr && Hash::check($request->kode, $codeqr->kode)) {
            $dataAbsensi['user_id'] = auth()->user()->id;

            if ($existingAbsensi) {
                // Jika sudah absen, tampilkan pesan bahwa user sudah absen
                toast('Anda sudah absen!', 'info');
                return redirect('/absensi-scan');
            }

            Absensi::create($dataAbsensi);
            toast('Absensi berhasil', 'success');
            return redirect('/absensi/success');
        } else {
            // Kode tidak cocok, tampilkan pesan kesalahan
            toast('Kode QR anda salah!', 'error');
            return redirect('/absensi-scan');
        }
    }

    public function success()
    {
        return view('absensi.scan_success');
    }
}
