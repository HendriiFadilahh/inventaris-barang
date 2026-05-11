<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanKeuangan;
use App\Models\Barang;

class LaporanKeuanganController extends Controller
{
    public function index()
    {
        $laporan = LaporanKeuangan::all();

        return view('laporan_keuangan.index', compact('laporan'));
    }

    public function create()
    {
        $barang = Barang::all();

        return view('laporan_keuangan.create', compact('barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'jumlah' => 'required',
            'total' => 'required',
            'tanggal' => 'required'
        ]);

        LaporanKeuangan::create($request->all());

        return redirect('/laporan-keuangan')
            ->with('success', 'Laporan keuangan berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $laporan = LaporanKeuangan::findOrFail($id);

        $laporan->delete();

        return redirect('/laporan-keuangan')
            ->with('success', 'Data berhasil dihapus');
    }
}