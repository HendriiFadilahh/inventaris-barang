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
        Schema::create('laporan_keuangan', function (Blueprint $table) {
            $table->id('id_keuangan');

    $table->unsignedBigInteger('id_barang');

    $table->integer('jumlah');
    $table->bigInteger('total');
    $table->date('tanggal');
    $table->string('keterangan',200)->nullable();

    $table->foreign('id_barang')
        ->references('id_barang')
        ->on('barang');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_keuangan');
    }
};
