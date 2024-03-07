<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\Codeqr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Jalankan task setiap hari jam 00:00
        $schedule->call(function () {
            // Memanggil GenerateQRCode service
            $generator = app()->make('App\Services\GenerateQRCode');

            // Generate QR code dengan karakter acak
            $qrCodeContent = 'ptpersadadatamultimedia-' . Str::random(10) . '-' . Carbon::now()->format('Ymd');

            // Panggil service untuk membuat QR code dan hapus file QR code lama jika ada
            $generator->generate($qrCodeContent);

            // Tampilkan pesan log bahwa QR code baru telah dibuat
            Log::info('QR code baru telah dibuat.');
        })->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
