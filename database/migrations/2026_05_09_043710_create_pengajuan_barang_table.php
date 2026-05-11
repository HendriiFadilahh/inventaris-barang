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
        Schema::create('pengajuan_barang', function (Blueprint $table) {
    $table->id('id_pengajuan');

    $table->unsignedBigInteger('id_barang');
    $table->unsignedBigInteger('id_user');

    $table->integer('jumlah');
    $table->date('tanggal_pengajuan');

    $table->enum('status',[
        'pending',
        'disetujui',
        'ditolak',
        'diproses',
        'selesai'
    ]);

    $table->string('keterangan',200)->nullable();

    $table->foreign('id_barang')
        ->references('id_barang')
        ->on('barang');

    $table->foreign('id_user')
        ->references('id_user')
        ->on('users');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_barang');
    }
};
