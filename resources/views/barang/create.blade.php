@extends('layouts.app')

@section('content')

<h2>Tambah Barang</h2>

<form action="/barang" method="POST">

    @csrf

    <label>Kode Barang</label>
    <input type="text" name="kode_barang">

    <label>Nama Barang</label>
    <input type="text" name="nama_barang">

    <label>Stok</label>
    <input type="number" name="stok">

    <label>Satuan</label>
    <input type="text" name="satuan">

    <label>Kategori</label>
    <input type="text" name="kategori">

    <button type="submit">
        Simpan
    </button>

</form>

@endsection