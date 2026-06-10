<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class DashboardController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        $labels = $barang->pluck('nama_barang');
        $stok = $barang->pluck('stok');

        $totalBarang = $barang->count();

        return view('admin.index', compact(
            'labels',
            'stok',
            'totalBarang'
        ));
    }
}