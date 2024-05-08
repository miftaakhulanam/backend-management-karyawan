<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KomplainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\AdminKomplainController;
use App\Http\Controllers\KomplainStaffController;
use App\Http\Controllers\AdminMonitoringController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['super.admin'])->group(function () {
    Route::get('/admin-absensi', [QRCodeController::class, 'index']);
    Route::get('/admin-absensi/rekap', [QRCodeController::class, 'rekap']);
    Route::get('/admin-absensi/qrcode', [QRCodeController::class, 'qrcode']);
    Route::resource('monitoring-admin', AdminMonitoringController::class)->parameters(['monitoring-admin' => 'task']);
    Route::resource('/komplain-admin', AdminKomplainController::class)->parameters(['komplain-admin' => 'komplain']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/notifikasi', [NotifikasiController::class, 'index']);
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/absensi', [AbsensiController::class, 'index']);
    Route::get('/absensi-scan', [AbsensiController::class, 'scan']);
    Route::post('/absensi/store', [AbsensiController::class, 'store']);
    Route::get('/absensi/success', [AbsensiController::class, 'success']);
    Route::resource('/profile', ProfileController::class)->parameters(['profile' => 'user']);
    Route::resource('/staff', StaffController::class);
    Route::resource('/customer', CustomerController::class);
});

Route::middleware(['admin'])->group(function () {
    Route::resource('/monitoring', MonitoringController::class)->parameters(['monitoring' => 'task']);
    Route::resource('/komplain', KomplainController::class);
});

Route::middleware(['staff'])->group(function () {
    Route::resource('/tugas', TaskController::class)->parameters(['tugas' => 'task']);
    Route::resource('/komplain-staff', KomplainStaffController::class)->parameters(['komplain-staff' => 'komplain']);
});

Route::resource('/pengaturan/paket', PengaturanController::class)->parameters(['pengaturan' => 'paket'])->middleware(['auth']);

Route::get('/api/kecamatan-by-kota', [ApiController::class, 'kecamatanByKota']);
Route::get('/api/desa-by-kecamatan', [ApiController::class, 'desaByKecamatan']);

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
