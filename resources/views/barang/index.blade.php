@extends('layouts.app')

@section('content')

<h2>Data Barang</h2>

<a href="/barang/create">Tambah Barang</a>

<table>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Satuan</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>

    @foreach($barang as $b)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $b->kode_barang }}</td>
        <td>{{ $b->nama_barang }}</td>
        <td>{{ $b->stok }}</td>
        <td>{{ $b->satuan }}</td>
        <td>{{ $b->kategori }}</td>
        <td>

            <a href="/barang/{{ $b->id_barang }}/edit">
                Edit
            </a>

            <form action="/barang/{{ $b->id_barang }}"
                  method="POST"
                  style="display:inline">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>

            </form>

        </td>
    </tr>
    @endforeach

</table>

@endsection