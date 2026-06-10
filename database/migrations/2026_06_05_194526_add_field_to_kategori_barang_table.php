<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('kategori_barang', function (Blueprint $table) {
            $table->string('kode_kategori');
            $table->text('deskripsi')->nullable();
            $table->boolean('is_active')->default(1);
        });
    }

    public function down(): void
    {
        Schema::table('kategori_barang', function (Blueprint $table) {
            $table->dropColumn([
                'kode_kategori',
                'deskripsi',
                'is_active'
            ]);
        });
    }
};