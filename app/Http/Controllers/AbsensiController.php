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
        $existingAbsensi = Absensi::whereDate('created_at', today())
            ->where('user_id', auth()->user()->id)
            ->exists();

        $codeqr = Codeqr::first();

        if ($codeqr && Hash::check($request->kode, $codeqr->kode)) {
            $dataAbsensi['user_id'] = auth()->user()->id;

            if ($existingAbsensi) {
                toast('Anda sudah absen!', 'info');
                return redirect('/absensi-scan');
            }

            Absensi::create($dataAbsensi);
            toast('Absensi berhasil', 'success');
            return redirect('/absensi/success');
        } else {
            toast('Kode QR anda salah!', 'error');
            return redirect('/absensi-scan');
        }
    }

    public function success()
    {
        return view('absensi.scan_success');
    }
}
