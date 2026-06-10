<?php

namespace App\Http\Controllers\atasan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengajuanBarang;

class RiwayatController extends Controller
{
    public function index()
    {
        $pengajuan = PengajuanBarang::latest()->get();

        return view('atasan.riwayat', compact('pengajuan'));
    }
}