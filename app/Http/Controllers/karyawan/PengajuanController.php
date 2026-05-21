<?php

namespace App\Http\Controllers\karyawan;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function create()
    {
        return view('pengajuan.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nama_barang' => 'required',

            'jumlah' => 'required|numeric',

            'keterangan' => 'nullable',

        ]);

        Pengajuan::create([

            'nama_barang' => $request->nama_barang,

            'jumlah' => $request->jumlah,

            'keterangan' => $request->keterangan,

            'status' => 'Pending',

        ]);

        return redirect()
            ->route('pengajuan.riwayat')
            ->with(
                'success',
                'Pengajuan berhasil dibuat'
            );
    }

    public function riwayat()
    {
        $pengajuan =
        Pengajuan::latest()->get();

        return view(
            'karyawan.pengajuan',
            compact('pengajuan')
        );
    }

    public function lihatRiwayat()
    {
        $pengajuan =
           Pengajuan::latest()->get();

        return view(
            'karyawan.riwayat', compact('pengajuan')
        );
    }
}
