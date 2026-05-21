<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

    protected $fillable = [
        'nama_barang',
        'jumlah',
        'keterangan',
        'status'
    ];
}