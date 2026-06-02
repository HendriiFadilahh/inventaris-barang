<?php

namespace App\Http\Controllers\keuangan;

use App\Http\Controllers\Controller;
use App\Models\LaporanKeuangan;

class LaporanKeuanganController extends Controller
{
    public function index()
    {
        $laporan = LaporanKeuangan::with('barang')->get();

        $totalKeuangan = LaporanKeuangan::sum('total');

        return view('keuangan.laporankeuangan', compact(
            'laporan',
            'totalKeuangan'
        ));
    }
}
