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

    public function rekap()
    {
        $startDate = Carbon::now()->subDays(30)->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        return view('absensi_admin.rekap', [
            'absensi' => Absensi::whereBetween('created_at', [$startDate, $endDate])->get()
        ]);
    }

    public function qrcode(GenerateQRCode $generator)
    {
        $qrCodeContent = 'ptpersadadatamultimedia-' . Str::random(10) . '-' . Carbon::now()->format('Ymd');

        $qrCodePath = $generator->generate($qrCodeContent);

        return view('absensi_admin.qrcode', ['qrCodePath' => $qrCodePath]);
    }
}
