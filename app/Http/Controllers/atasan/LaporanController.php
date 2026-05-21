<?php

namespace App\Http\Controllers\atasan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanBarang;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = LaporanBarang::query();

        // Filter tanggal
        if ($request->tanggal_awal && $request->tanggal_akhir) {

            $query->whereBetween('tanggal', [
                $request->tanggal_awal,
                $request->tanggal_akhir
            ]);
        }

        $laporan = $query->get();

        return view('atasan.laporan', compact('laporan'));
    }
}