<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiSerahTerima;
use App\Models\PengajuanBarang;

class TransaksiSerahTerimaController extends Controller
{
    public function index()
    {
        $transaksi = TransaksiSerahTerima::all();

        return view('serah_terima.index', compact('transaksi'));
    }

    public function create()
    {
        $pengajuan = PengajuanBarang::all();

        return view('serah_terima.create', compact('pengajuan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pengajuan' => 'required',
            'penerima' => 'required',
            'tanggal' => 'required'
        ]);

        TransaksiSerahTerima::create($request->all());

        $pengajuan = PengajuanBarang::find($request->id_pengajuan);
        $pengajuan->status = 'selesai';
        $pengajuan->save();

        return redirect('/serah-terima')
            ->with('success', 'Serah terima berhasil');
    }

    public function destroy($id)
    {
        $transaksi = TransaksiSerahTerima::findOrFail($id);

        $transaksi->delete();

        return redirect('/serah-terima')
            ->with('success', 'Data berhasil dihapus');
    }
}