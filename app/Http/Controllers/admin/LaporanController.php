<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanBarang;
use App\Models\Pengajuan;

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

        return view('admin.laporan', compact('laporan'));
    }

    public function setuju($id)
    {
        $laporan = LaporanBarang::findOrFail($id);

        // Update laporan
        $laporan->update([
            'status' => 'Disetujui'
        ]);

        // Update tabel pengajuan
        Pengajuan::where(
            'nama_barang',
            $laporan->nama_barang
        )->update([
            'status' => 'Disetujui'
        ]);

        return back()
            ->with(
                'success',
                'Laporan disetujui'
            );
    }

    public function tolak($id)
    {
        $laporan = LaporanBarang::findOrFail($id);

        // Update laporan
        $laporan->update([
            'status' => 'Ditolak'
        ]);

        // Update tabel pengajuan
        Pengajuan::where(
            'nama_barang',
            $laporan->nama_barang
        )->update([
            'status' => 'Ditolak'
        ]);

        return back()
            ->with(
                'success',
                'Laporan ditolak'
            );
    }
}