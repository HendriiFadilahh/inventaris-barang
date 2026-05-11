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
        Schema::create('transaksi_serah_terima', function (Blueprint $table) {
            $table->id('id_serah');

    $table->unsignedBigInteger('id_pengajuan');

    $table->string('penerima',100);
    $table->date('tanggal');
    $table->string('keterangan',200)->nullable();

    $table->foreign('id_pengajuan')
        ->references('id_pengajuan')
        ->on('pengajuan_barang');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_serah_terima');
    }
};
