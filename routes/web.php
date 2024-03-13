<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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
use App\Http\Controllers\PengaturanController;

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
    Route::get('/admin-absensi/qrcode', [QRCodeController::class, 'qrcode']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/absensi', [AbsensiController::class, 'index']);
    Route::get('/absensi-scan', [AbsensiController::class, 'scan']);
    Route::post('/absensi/store', [AbsensiController::class, 'store']);
    Route::get('/absensi/success', [AbsensiController::class, 'success']);
    Route::resource('/komplain', KomplainController::class);
    Route::resource('/profile', ProfileController::class)->parameters(['profile' => 'user']);
});

Route::middleware(['admin'])->group(function () {
    Route::resource('/monitoring', MonitoringController::class)->parameters(['monitoring' => 'task']);
    Route::resource('/staff', StaffController::class);
});

Route::middleware(['staff'])->group(function () {
    Route::resource('/tugas', TaskController::class)->parameters(['tugas' => 'task']);
    Route::resource('/customer', CustomerController::class);
});

Route::resource('/pengaturan/paket', PengaturanController::class)->parameters(['pengaturan' => 'paket'])->middleware(['auth']);

Route::get('/api/kecamatan-by-kota', [ApiController::class, 'kecamatanByKota']);
Route::get('/api/desa-by-kecamatan', [ApiController::class, 'desaByKecamatan']);
