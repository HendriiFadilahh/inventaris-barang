@extends('layouts.app')

@section('content')

<h2>Tambah Pengajuan Barang</h2>

<form action="/pengajuan" method="POST">

    @csrf

    <label>Barang</label>

    <select name="id_barang">

        @foreach($barang as $b)

        <option value="{{ $b->id_barang }}">
            {{ $b->nama_barang }}
        </option>

        @endforeach

    </select>

    <label>User</label>

    <select name="id_user">

        @foreach($users as $u)

        <option value="{{ $u->id_user }}">
            {{ $u->nama }}
        </option>

        @endforeach

    </select>

    <label>Jumlah</label>
    <input type="number" name="jumlah">

    <label>Tanggal Pengajuan</label>
    <input type="date" name="tanggal_pengajuan">

    <label>Keterangan</label>
    <input type="text" name="keterangan">

    <button type="submit">
        Simpan
    </button>

</form>

@endsection