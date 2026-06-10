<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboard;
use App\Http\Controllers\admin\DataBarangController;
use App\Http\Controllers\admin\KategoriBarangController;
use App\Http\Controllers\admin\LaporanController as AdminLaporan;
use App\Http\Controllers\atasan\DashboardController as AtasanDashboard;
use App\Http\Controllers\atasan\PengajuannController;
use App\Http\Controllers\atasan\RiwayatController;
use App\Http\Controllers\atasan\LaporanController as AtasanLaporan;
use App\Http\Controllers\karyawan\DashboardController as KaryawanDashboard;
use App\Http\Controllers\karyawan\PengajuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SatuanBarangController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\KeuanganDashboard;

Route::get('/keuangan/dashboard', [KeuanganDashboard::class, 'index'])
    ->name('keuangan.dashboard');
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

Route::get('/admin/kategori-barang', [KategoriBarangController::class, 'index']) ->name('admin.kategori');
Route::get('/admin/kategori-barang/create', [KategoriBarangController::class, 'create'])->name('kategori.create');
Route::post('/admin/kategori-barang/store', [KategoriBarangController::class, 'store'])->name('kategori.store');
Route::get('/admin/kategori-barang/edit/{id}', [KategoriBarangController::class, 'edit'])->name('kategori.edit');
Route::post('/admin/kategori-barang/update/{id}', [KategoriBarangController::class, 'update'])->name('kategori.update');
Route::delete('/admin/kategori-barang/destroy/{id}', [KategoriBarangController::class, 'destroy']) ->name('kategori.destroy');
Route::resource('kategori', KategoriBarangController::class);

Route::get('/pengajuan', [PengajuanController::class, 'create'])
    ->name('pengajuan.create');

Route::post('/pengajuan', [PengajuanController::class, 'store'])
    ->name('pengajuan.store');

Route::get('/riwayat-pengajuan', [PengajuanController::class, 'lihatRiwayat'])
    ->name('pengajuan.riwayat');

Route::get('/pengajuann', [PengajuannController::class, 'createe'])
    ->name('pengajuann.createe');

Route::post('/pengajuann', [PengajuannController::class, 'storee'])
    ->name('pengajuann.storee');

Route::get('/atasan/riwayat-pengajuann', [RiwayatController::class, 'index'])
    ->name('pengajuann.riwayat');

Route::get('/atasan/laporan-barang', [AtasanLaporan::class, 'index'])
    ->name('atasan.laporan');


Route::get('/pengajuan', [PengajuanController::class, 'index'])
    ->name('pengajuan.index');

Route::post('/pengajuan', [PengajuanController::class, 'store'])
    ->name('pengajuan.store');

Route::get('/riwayat-pengajuan', [PengajuanController::class, 'lihatRiwayat'])
    ->name('pengajuan.riwayat');

Route::get('/karyawan/katalog', [KatalogBarangController::class, 'index'])
    ->name('karyawan.katalog');


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

Route::get('/admin/kategori-barang', [KategoriBarangController::class, 'index'])
    ->name('admin.kategori');

Route::get('/admin/kategori-barang/create', [KategoriBarangController::class, 'create'])
    ->name('kategori.create');

Route::post('/admin/kategori-barang/store', [KategoriBarangController::class, 'store'])
    ->name('kategori.store');

Route::get('/admin/kategori-barang/edit/{id}', [KategoriBarangController::class, 'edit'])
    ->name('kategori.edit');

Route::post('/admin/kategori-barang/update/{id}', [KategoriBarangController::class, 'update'])
    ->name('kategori.update');

Route::delete('/admin/kategori-barang/destroy/{id}', [KategoriBarangController::class, 'destroy'])
    ->name('kategori.destroy');

Route::get('/admin/satuan-barang', [SatuanBarangController::class, 'index'])->name('admin.satuan');

Route::get('/admin/satuan-barang/create', [SatuanBarangController::class, 'create'])->name('satuan.create');

Route::post('/admin/satuan-barang/store', [SatuanBarangController::class, 'store'])->name('satuan.store');

Route::get('/admin/satuan-barang/edit/{id}', [SatuanBarangController::class, 'edit'])->name('satuan.edit');

Route::post('/admin/satuan-barang/update/{id}', [SatuanBarangController::class, 'update'])->name('satuan.update');

Route::delete('/admin/satuan-barang/destroy/{id}', [SatuanBarangController::class, 'destroy'])->name('satuan.destroy');

Route::get('/admin/satuan-barang/edit/{id}', [SatuanBarangController::class, 'edit'])
    ->name('satuan.edit');

Route::post('/admin/satuan-barang/update/{id}', [SatuanBarangController::class, 'update'])
    ->name('satuan.update');

Route::delete('/admin/satuan-barang/destroy/{id}', [SatuanBarangController::class, 'destroy'])
    ->name('satuan.destroy');

Route::get('/admin/supplier', [SupplierController::class, 'index'])->name('admin.supplier');

Route::get('/admin/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');

Route::post('/admin/supplier/store', [SupplierController::class, 'store'])->name('supplier.store');

Route::get('/admin/supplier/edit/{id}', [SupplierController::class, 'edit'])->name('supplier.edit');

Route::post('/admin/supplier/update/{id}', [SupplierController::class, 'update'])->name('supplier.update');

Route::delete('/admin/supplier/destroy/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');

use App\Http\Controllers\karyawan\KatalogBarangController;

Route::get('/karyawan/katalog', [KatalogBarangController::class, 'index'])
    ->name('karyawan.katalog');

Route::get('/pengajuan/create', [PengajuanController::class, 'create'])
    ->name('pengajuan.create');

Route::get('/pengajuan', [PengajuanController::class, 'index'])
    ->name('pengajuan.index');

Route::post('/pengajuan', [PengajuanController::class, 'store'])
    ->name('pengajuan.store');

Route::get('/riwayat-pengajuan', [PengajuanController::class, 'lihatRiwayat'])
    ->name('pengajuan.riwayat');


Route::prefix('pengajuan')->group(function () {

    // halaman utama pengajuan (form/list)
    Route::get('/', [PengajuanController::class, 'index'])
        ->name('pengajuan.index');

    // form create pengajuan
    Route::get('/create', [PengajuanController::class, 'create'])
        ->name('pengajuan.create');

    // simpan pengajuan
    Route::post('/', [PengajuanController::class, 'store'])
        ->name('pengajuan.store');

    // riwayat pengajuan
    Route::get('/riwayat', [PengajuanController::class, 'lihatRiwayat'])
        ->name('pengajuan.riwayat');

        Route::post('/pengajuan/{id}/approve', [PengajuanController::class, 'approve'])
    ->name('pengajuan.approve');

Route::post('/pengajuan/{id}/reject', [PengajuanController::class, 'reject'])
    ->name('pengajuan.reject');
Route::get('/atasan/persetujuan', [PengajuanController::class, 'approvalPage'])
    ->name('atasan.persetujuan');

Route::post('/pengajuan/{id}/approve', [PengajuanController::class, 'approve'])
    ->name('pengajuan.approve');

Route::post('/pengajuan/{id}/reject', [PengajuanController::class, 'reject'])
    ->name('pengajuan.reject');
});
