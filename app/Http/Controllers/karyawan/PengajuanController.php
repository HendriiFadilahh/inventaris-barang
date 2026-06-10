<?php

namespace App\Http\Controllers\karyawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengajuanBarang;
use App\Models\Barang;

class PengajuanController extends Controller
{
    // Form Pengajuan Barang
    public function index()
    {
        $barang = Barang::all();
        return view('karyawan.pengajuan', compact('barang'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('karyawan.pengajuan', compact('barang'));
    }

    // Simpan Pengajuan
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|integer|min:1',
            'keterangan' => 'nullable'
        ]);

        PengajuanBarang::create([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'status' => 'Pending' // lebih cocok untuk approval
        ]);

        return redirect()
            ->route('pengajuan.riwayat')
            ->with('success', 'Pengajuan barang berhasil dikirim.');
    }

    // Riwayat Pengajuan
    public function lihatRiwayat()
    {
        $pengajuan = PengajuanBarang::latest()->get();
        return view('karyawan.riwayat', compact('pengajuan'));
    }

    // =========================
    // APPROVAL ATASAN
    // =========================

    public function approve($id)
    {
        $pengajuan = PengajuanBarang::findOrFail($id);
        $pengajuan->status = 'Disetujui';
        $pengajuan->save();

        return back()->with('success', 'Pengajuan disetujui');
    }

    public function reject($id)
    {
        $pengajuan = PengajuanBarang::findOrFail($id);
        $pengajuan->status = 'Ditolak';
        $pengajuan->save();

        return back()->with('success', 'Pengajuan ditolak');
    }
}