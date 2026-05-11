@extends('layouts.app')

@section('content')

<h2>Barang Masuk</h2>

<a href="/barang-masuk/create">
    Tambah Barang Masuk
</a>

<table>

    <tr>
        <th>No</th>
        <th>ID Barang</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Supplier</th>
    </tr>

    @foreach($barangMasuk as $bm)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $bm->id_barang }}</td>
        <td>{{ $bm->jumlah }}</td>
        <td>{{ $bm->tanggal }}</td>
        <td>{{ $bm->supplier }}</td>
    </tr>

    @endforeach

</table>

@endsection