<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PengajuanBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\TransaksiSerahTerimaController;
use App\Http\Controllers\LaporanKeuanganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function() {
    return view('landing');
})->name('landing');



Route::prefix('login')->group(function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('login.login');
    Route::get('/register', [LoginController::class, 'showRegister'])->name('login.register');
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
});


// Route::get('/', function () {
//     return view('login.login');
// });

// Route::get('/register', function () {
//     return view('login.register');
// });

Route::get('/dashboard', function () {
    return view('dashboard.index');
});


Route::resource('barang', BarangController::class);

Route::resource('pengajuan', PengajuanBarangController::class);

Route::resource('barang-masuk', BarangMasukController::class);

Route::resource('serah-terima', TransaksiSerahTerimaController::class);

Route::resource('laporan-keuangan', LaporanKeuanganController::class);
