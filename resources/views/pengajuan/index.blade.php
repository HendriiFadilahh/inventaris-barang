@extends('layouts.app')

@section('content')

<h2>Data Pengajuan Barang</h2>

<a href="/pengajuan/create">
    Tambah Pengajuan
</a>

<table>

    <tr>
        <th>No</th>
        <th>ID Barang</th>
        <th>ID User</th>
        <th>Jumlah</th>
        <th>Status</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>

    @foreach($pengajuan as $p)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->id_barang }}</td>
        <td>{{ $p->id_user }}</td>
        <td>{{ $p->jumlah }}</td>
        <td>{{ $p->status }}</td>
        <td>{{ $p->tanggal_pengajuan }}</td>

        <td>

            <a href="/pengajuan/{{ $p->id_pengajuan }}/edit">
                Edit
            </a>

            <form action="/pengajuan/{{ $p->id_pengajuan }}"
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