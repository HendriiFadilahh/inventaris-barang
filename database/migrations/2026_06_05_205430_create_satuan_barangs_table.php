public function up(): void
{
    Schema::create('satuan_barang', function (Blueprint $table) {

        $table->id();

        $table->string('kode_satuan');
        $table->string('nama_satuan');
        $table->text('keterangan')->nullable();
        $table->boolean('is_active')->default(1);

        $table->timestamps();
    });
}