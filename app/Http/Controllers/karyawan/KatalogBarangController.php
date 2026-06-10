<?php

namespace App\Http\Controllers\karyawan;

use App\Http\Controllers\Controller;
use App\Models\Barang;

class KatalogBarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        return view('karyawan.katalog', compact('barang'));
    }
}