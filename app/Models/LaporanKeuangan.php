<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanKeuangan extends Model
{
    protected $table = 'laporan_keuangan';

    protected $primaryKey = 'id_keuangan';

    protected $fillable = [
        'id_barang',
        'jumlah',
        'total',
        'tanggal',
        'keterangan',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
