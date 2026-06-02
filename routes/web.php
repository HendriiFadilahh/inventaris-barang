<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboard;
use App\Http\Controllers\admin\DataBarangController;
use App\Http\Controllers\admin\LaporanController as AdminLaporan;
use App\Http\Controllers\atasan\DashboardController as AtasanDashboard;
use App\Http\Controllers\atasan\PengajuannController;
use App\Http\Controllers\atasan\RiwayatController;
use App\Http\Controllers\atasan\LaporanController as AtasanLaporan;
use App\Http\Controllers\karyawan\DashboardController as KaryawanDashboard;
use App\Http\Controllers\karyawan\PengajuanController;
use App\Http\Controllers\keuangan\DashboardController as KeuanganDashboard;
use App\Http\Controllers\keuangan\LaporanKeuanganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
Route::get('/admin/data-barang/create', [DataBarangController::class, 'create'])->name('barang.create');
Route::post('/admin/data-barang/store', [DataBarangController::class, 'store'])->name('barang.store');
Route::get('/admin/data-barang/edit/{id}', [DataBarangController::class, 'edit'])->name('barang.edit');
Route::post('/admin/data-barang/update/{id}', [DataBarangController::class, 'update'])->name('barang.update');
Route::delete('/admin/data-barang/destroy/{id}', [DataBarangController::class, 'destroy'])->name('barang.destroy');
Route::resource('barang', DataBarangController::class);
Route::get('/admin/laporan-barang', [AdminLaporan::class, 'index'])->name('admin.laporan');

Route::get('/pengajuan',[PengajuanController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan',[PengajuanController::class, 'store'])->name('pengajuan.store');
Route::get('/riwayat-pengajuan/lihat-riwayat',[PengajuanController::class, 'lihatRiwayat'])->name('pengajuan.lihat-riwayat');
Route::get('/riwayat-pengajuan', [PengajuanController::class, 'riwayat'])->name('pengajuan.riwayat');

Route::get('/pengajuann',[PengajuannController::class, 'createe'])->name('pengajuann.createe');
Route::post('/pengajuann',[PengajuannController::class, 'storee'])->name('pengajuann.storee');
Route::get('/riwayat-pengajuann/lihat-riwayatt',[PengajuannController::class, 'lihatRiwayatt'])->name('pengajuann.lihat-riwayatt');
Route::get('/atasan/riwayat-pengajuann', [RiwayatController::class, 'index'])->name('pengajuann.riwayat');
Route::get('/atasan/laporan-barang', [AtasanLaporan::class, 'index'])->name('atasan.laporan');


Route::put('/laporan/{id}/setuju',
[AdminLaporan::class,'setuju'])
->name('laporan.setuju');

Route::put('/laporan/{id}/tolak',
[AdminLaporan::class,'tolak'])
->name('laporan.tolak');

Route::delete(
    '/riwayat/{id}',
    [RiwayatController::class,'hapus']
)->name('riwayat.hapus');


Route::get('/keuangan/laporan-keuangan', [LaporanKeuanganController::class, 'index'])->name('keuangan.laporankeuangan');