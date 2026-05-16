<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\BarangController;
// use App\Http\Controllers\PengajuanBarangController;
// use App\Http\Controllers\BarangMasukController;
// use App\Http\Controllers\TransaksiSerahTerimaController;
// use App\Http\Controllers\LaporanKeuanganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\DashboardController as AdminDashboard;
use App\Http\Controllers\atasan\DashboardController as AtasanDashboard;
use App\Http\Controllers\karyawan\DashboardController as KaryawanDashboard;
use App\Http\Controllers\keuangan\DashboardController as KeuanganDashboard;
use App\Http\Controllers\admin\TransaksiController;
use App\Http\Controllers\admin\LaporanController;
use App\Http\Controllers\admin\DataBarangController; 


Route::get('/', function() {
    return view('landing');
})->name('landing');



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
Route::get('/atasan/dashboard', [AtasanDashboard::class, 'index'])->name('atasan.dashboard');
Route::get('/karyawan/dashboard', [KaryawanDashboard::class, 'index'])->name('karyawan.dashboard');
Route::get('/keuangan/dashboard', [KeuanganDashboard::class, 'index'])->name('keuangan.dashboard');




Route::get('/admin/data-barang', [DataBarangController::class, 'index'])->name('admin.dataBarang');
Route::get('/admin/data-barang/create', [DataBarangController::class, 'create'])->name('admin.dataBarang.create');
Route::post('/admin/data-barang', [DataBarangController::class, 'store'])->name('admin.dataBarang.store');               