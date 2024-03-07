<?php

namespace App\Services;

use App\Models\Codeqr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerateQRCode
{
    public function generate($content)
    {
        // Path untuk menyimpan QR code
        $path = public_path('storage/qrcodes/qrcode.svg');

        // Logika untuk menghapus file QR code lama jika ada
        if (File::exists($path)) {
            File::delete($path);
        }

        // Memeriksa apakah ada entri di tabel codeqr
        if (Codeqr::count() > 0) {
            // Jika ada entri, hapus semua isi tabel codeqr
            Codeqr::truncate();
        }

        // Generate QR code
        QrCode::size(300)->generate($content, $path);

        // Simpan data QR code ke dalam tabel codeqr
        $dataQrcode['kode'] = Hash::make($content);
        Codeqr::create($dataQrcode);

        return $path;
    }
}
