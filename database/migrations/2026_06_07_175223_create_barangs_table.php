<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
  $table->id();
    $table->string('kode')->unique();
    $table->string('nama_barang');
    $table->string('merk');
    $table->string('kategori');
    $table->string('tipe');
    $table->integer('stok');
    $table->string('satuan');
    $table->string('kondisi');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
