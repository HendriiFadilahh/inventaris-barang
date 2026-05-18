<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanBarang extends Model
{
    protected $table = 'laporan_barang';

    protected $fillable = [
        'tanggal',
        'nama_barang',
        'jenis',
        'jumlah',
        'status'
    ];
}