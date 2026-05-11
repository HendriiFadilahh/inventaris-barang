<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanBarang;
use App\Models\Barang;
use App\Models\User;

class PengajuanBarangController extends Controller
{
    public function index()
    {
        $pengajuan = PengajuanBarang::all();

        return view('pengajuan.index', compact('pengajuan'));
    }

    public function create()
    {
        $barang = Barang::all();
        $users = User::all();

        return view('pengajuan.create', compact('barang', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'id_user' => 'required',
            'jumlah' => 'required|integer',
            'tanggal_pengajuan' => 'required'
        ]);

        PengajuanBarang::create([
            'id_barang' => $request->id_barang,
            'id_user' => $request->id_user,
            'jumlah' => $request->jumlah,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'status' => 'pending',
            'keterangan' => $request->keterangan
        ]);

        return redirect('/pengajuan')
            ->with('success', 'Pengajuan berhasil dibuat');
    }

    public function show($id)
    {
        $pengajuan = PengajuanBarang::findOrFail($id);

        return view('pengajuan.show', compact('pengajuan'));
    }

    public function edit($id)
    {
        $pengajuan = PengajuanBarang::findOrFail($id);

        return view('pengajuan.edit', compact('pengajuan'));
    }

    public function update(Request $request, $id)
    {
        $pengajuan = PengajuanBarang::findOrFail($id);

        $pengajuan->update([
            'status' => $request->status,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/pengajuan')
            ->with('success', 'Status pengajuan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pengajuan->delete();

        return redirect('/pengajuan')
            ->with('success', 'Data pengajuan berhasil dihapus');
    }
}