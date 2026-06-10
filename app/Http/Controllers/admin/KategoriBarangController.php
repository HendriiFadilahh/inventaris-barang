<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $kategori = KategoriBarang::all();

        return view('admin.kategoribarang', compact('kategori'));
    }

    public function create()
    {
        return view('admin.kategoriCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_kategori' => 'required',
            'nama_kategori' => 'required',
        ]);

        KategoriBarang::create([
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori,
            'deskripsi'     => $request->deskripsi,
            'is_active'     => $request->is_active,
        ]);

        return redirect()->route('admin.kategori')
            ->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kategori = KategoriBarang::findOrFail($id);

        return view('admin.kategoriEdit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriBarang::findOrFail($id);

        $kategori->update([
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori,
            'deskripsi'     => $request->deskripsi,
            'is_active'     => $request->is_active,
        ]);

        return redirect()->route('admin.kategori')
            ->with('success', 'Kategori berhasil diubah');
    }

    public function destroy($id)
    {
        KategoriBarang::findOrFail($id)->delete();

        return redirect()->route('admin.kategori')
            ->with('success', 'Kategori berhasil dihapus');
    }
}