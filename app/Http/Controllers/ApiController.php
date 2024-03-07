<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Desa;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function kecamatanByKota(Request $request)
    {
        $kecamatan = Kecamatan::where('kota_id', $request->kota_id)->get();
        return response()->json($kecamatan);
    }

    public function desaByKecamatan(Request $request)
    {
        $desa = Desa::where('kecamatan_id', $request->kecamatan_id)->get();
        return response()->json($desa);
    }
}
