<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Menampilkan semua data barang
     */
    public function index()
    {
        $barang = Barang::all();

        return view('admin.dataBarang', compact('barang'));
    }

    /**
     * Menampilkan form tambah barang
     */
    public function create()
    {
        return view('admin.barangCreate');
    }

    /**
     * Menyimpan data barang
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'harga' => $request->harga,
        ]);

        return redirect()->route('admin.dataBarang')
                         ->with('success', 'Data barang berhasil ditambahkan');
    }

    /**
     * Menampilkan form edit barang
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);

        return view('admin.barangEdit', compact('barang'));
    }

    /**
     * Update data barang
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $barang = Barang::findOrFail($id);

        $barang->update([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'harga' => $request->harga,
        ]);

        return redirect()->route('admin.dataBarang')
                         ->with('success', 'Data barang berhasil diupdate');
    }

    /**
     * Hapus data barang
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);

        $barang->delete();

        return redirect()->route('admin.dataBarang')
                         ->with('success', 'Data barang berhasil dihapus');
    }

}
