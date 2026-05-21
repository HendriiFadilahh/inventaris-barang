<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan', function (Blueprint $table) {

            $table->id();
            $table->string('nama_barang');
            $table->integer('jumlah');
            $table->text('keterangan')->nullable();

            $table->enum(
                'status',
                ['Pending','Disetujui','Ditolak']
            )->default('Pending');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan');
    }
};