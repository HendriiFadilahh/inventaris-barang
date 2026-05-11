@extends('layouts.app')

@section('content')

<h2>Edit Barang</h2>

<form action="/barang/{{ $barang->id_barang }}"
      method="POST">

    @csrf
    @method('PUT')

    <label>Kode Barang</label>
    <input type="text"
           name="kode_barang"
           value="{{ $barang->kode_barang }}">

    <label>Nama Barang</label>
    <input type="text"
           name="nama_barang"
           value="{{ $barang->nama_barang }}">

    <label>Stok</label>
    <input type="number"
           name="stok"
           value="{{ $barang->stok }}">

    <label>Satuan</label>
    <input type="text"
           name="satuan"
           value="{{ $barang->satuan }}">

    <label>Kategori</label>
    <input type="text"
           name="kategori"
           value="{{ $barang->kategori }}">

    <button type="submit">
        Update
    </button>

</form>

@endsection