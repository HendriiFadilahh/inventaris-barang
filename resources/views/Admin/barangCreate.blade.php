<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Tambah Barang</h2>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control">
        </div>

 <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>

        <div class="mb-3">
            <label>kategori</label>
            <input type="text" name="kategori" class="form-control">
        </div>

        <div class="mb-3">
            <label>Kode Barang</label>
            <input type="number" name="kode_barang" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="/admin/data-barang" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>