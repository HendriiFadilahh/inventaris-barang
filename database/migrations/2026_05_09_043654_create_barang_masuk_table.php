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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id('id_masuk');

    $table->unsignedBigInteger('id_barang');
    $table->unsignedBigInteger('id_user');

    $table->integer('jumlah');
    $table->date('tanggal');
    $table->string('supplier',100);

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
        Schema::dropIfExists('barang_masuk');
    }
};
