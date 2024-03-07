<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class DashboardController extends Controller
{
    public function index()
    {
        // menampilkan tanggal bulan & tahun
        $now = Carbon::now();
        $formattedDate = $now->translatedFormat('l j M Y');

        // menampilkan lokasi

        return view('index', [
            'formattedDate' => $formattedDate,
        ]);
    }
}
