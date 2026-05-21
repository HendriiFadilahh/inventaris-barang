<?php

namespace App\Http\Controllers\atasan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengajuan;

class RiwayatController extends Controller
{
    public function index()
    {
        $pengajuan =
        Pengajuan::latest()->get();
        return view('atasan.riwayat', compact('pengajuan'));
    }
}
