<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['kode_barang', 'nama_barang', 'stok', 'satuan', 'kategori', 'harga'])]
class Barang extends Model
{
    protected $primaryKey = 'id_barang';

    protected $table = 'barang';

    
}

