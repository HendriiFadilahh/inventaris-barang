<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SatuanBarang extends Model
{
    protected $table = 'satuan_barang';

    protected $fillable = [
        'kode_satuan',
        'nama_satuan',
        'keterangan',
        'is_active'
    ];
}