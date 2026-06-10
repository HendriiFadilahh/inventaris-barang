<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SatuanBarang;
use Illuminate\Http\Request;

class SatuanBarangController extends Controller
{
    public function index()
    {
        $satuan = SatuanBarang::all();

        return view('admin.satuanbarang', compact('satuan'));
    }

    public function create()
    {
        return view('admin.satuanCreate');
    }

    public function store(Request $request)
    {
        SatuanBarang::create([
            'kode_satuan' => $request->kode_satuan,
            'nama_satuan' => $request->nama_satuan,
            'keterangan' => $request->keterangan,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.satuan')
            ->with('success','Data berhasil ditambah');
    }

    public function edit($id)
    {
        $satuan = SatuanBarang::findOrFail($id);

        return view('admin.satuanEdit', compact('satuan'));
    }

    public function update(Request $request,$id)
    {
        $satuan = SatuanBarang::findOrFail($id);

        $satuan->update([
            'kode_satuan' => $request->kode_satuan,
            'nama_satuan' => $request->nama_satuan,
            'keterangan' => $request->keterangan,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.satuan')
            ->with('success','Data berhasil diubah');
    }

    public function destroy($id)
    {
        SatuanBarang::findOrFail($id)->delete();

        return redirect()->route('admin.satuan')
            ->with('success','Data berhasil dihapus');
    }
}


