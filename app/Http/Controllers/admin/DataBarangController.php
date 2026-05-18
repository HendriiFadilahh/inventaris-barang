<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBarangController extends Controller
{
    /**
     * Menampilkan semua data barang
     */
    public function index()
    {
        $barang = Barang::all();

        return view('Admin.dataBarang', compact('barang'));
    }

    /**
     * Menampilkan form tambah barang
     */
    public function create()
    {
        return view('Admin.barangCreate');
    }

    /**
     * Menyimpan data barang
     */
    public function store(Request $request)
    {
        $dataBarang = $request->validate([
            'nama_barang' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
             'kategori' => 'required',
            'kode_barang' => 'required|numeric',
        ]);

        Barang::create($dataBarang);

        return redirect()->route('admin.dataBarang')
                         ->with('success', 'Data barang berhasil ditambahkan');
    }

    /**
     * Menampilkan form edit barang
     */
    public function edit($id){
    $barang = Barang::findOrfail($id);
    return view('Admin.barangEdit', compact('barang'));
    }

public function update(Request $request, $id)
{
    $barang = Barang::findOrFail($id);

    $barang->update([
        'nama_barang' => $request->nama_barang,
        'stok' => $request->stok,
        'harga' => $request->harga,
    ]);

    return redirect()->route('barang.index')
                     ->with('success', 'Data berhasil diupdate');
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
