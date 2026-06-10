<?php

namespace App\Http\Controllers\karyawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class DashboardController extends Controller
{
    public function index()
    {
        return view('karyawan.index');
    }
}

{
    $barang = Barang::all();
    return view('karyawan.katalog', compact('barang'));
}