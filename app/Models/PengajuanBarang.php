<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanBarang extends Model
{
    use HasFactory;

    protected $table = 'pengajuan'; // sesuaikan nama tabel kamu

    protected $fillable = [
        'nama_barang',
        'jumlah',
        'keterangan',
        'status'
    ];
}