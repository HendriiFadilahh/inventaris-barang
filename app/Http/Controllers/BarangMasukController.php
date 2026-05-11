<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\User;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangMasuk = BarangMasuk::all();

        return view('barang_masuk.index', compact('barangMasuk'));
    }

    public function create()
    {
        $barang = Barang::all();
        $users = User::all();

        return view('barang_masuk.create', compact('barang', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'supplier' => 'required',
            'id_user' => 'required'
        ]);

        BarangMasuk::create($request->all());

        $barang = Barang::find($request->id_barang);
        $barang->stok += $request->jumlah;
        $barang->save();

        return redirect('/barang-masuk')
            ->with('success', 'Barang masuk berhasil ditambahkan');
    }

    public function show($id)
    {
        $barangMasuk = BarangMasuk::findOrFail($id);

        return view('barang_masuk.show', compact('barangMasuk'));
    }

    public function destroy($id)
    {
        $barangMasuk = BarangMasuk::findOrFail($id);

        $barangMasuk->delete();

        return redirect('/barang-masuk')
            ->with('success', 'Data berhasil dihapus');
    }
}