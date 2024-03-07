<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\GenerateQRCode;

class QRCodeController extends Controller
{
    public function index()
    {
        return view('absensi_admin.index', [
            'absensi' => Absensi::whereDate('created_at', Carbon::today())->get()
        ]);
    }

    public function qrcode(GenerateQRCode $generator)
    {
        // Generate QR code content dengan karakter acak
        $qrCodeContent = 'ptpersadadatamultimedia-' . Str::random(10) . '-' . Carbon::now()->format('Ymd');

        // Panggil service untuk membuat QR code
        $qrCodePath = $generator->generate($qrCodeContent);

        // Tampilkan QR code pada view
        return view('absensi_admin.qrcode', ['qrCodePath' => $qrCodePath]);
        // return view('absensi_admin.qrcode');
    }
}
