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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin-absensi', [QRCodeController::class, 'index'])->middleware(['super.admin']);
Route::get('/admin-absensi/qrcode', [QRCodeController::class, 'qrcode'])->middleware(['super.admin']);

Route::get('/absensi', [AbsensiController::class, 'index'])->middleware(['auth']);
Route::get('/absensi-scan', [AbsensiController::class, 'scan'])->middleware(['auth']);
Route::post('/absensi/store', [AbsensiController::class, 'store'])->middleware(['auth']);
Route::get('/absensi/success', [AbsensiController::class, 'success'])->middleware(['auth']);

Route::resource('/monitoring', MonitoringController::class)->parameters(['monitoring' => 'task'])->middleware(['admin']);

Route::resource('/staff', StaffController::class)->middleware('admin');

Route::resource('/komplain', KomplainController::class)->middleware('auth');

Route::resource('/profile', ProfileController::class)->parameters(['profile' => 'user'])->middleware('auth');

Route::resource('/tugas', TaskController::class)->parameters(['tugas' => 'task'])->middleware(['staff']);

Route::resource('/customer', CustomerController::class)->middleware('staff');

Route::get('/api/kecamatan-by-kota', [ApiController::class, 'kecamatanByKota']);
Route::get('/api/desa-by-kecamatan', [ApiController::class, 'desaByKecamatan']);
