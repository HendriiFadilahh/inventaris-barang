@extends('layouts.user')

@section('content')

<div class="container-fluid">

    <h2 class="fw-bold mb-4">Katalog Barang</h2>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form method="GET">
                <div class="row mb-3">
                    <div class="col-md-4 ms-auto">
                        <input type="text"
                            name="search"
                            class="form-control"
                            placeholder="Cari Barang..."
                            value="{{ request('search') }}">
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Kategori</th>
                            <th>Tipe</th>
                            <th>Stok Tersedia</th>
                            <th>Kondisi</th>
                            <th>Tanggal Kadaluarsa</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($barangs as $barang)

                        <tr>

                            <td>
                                @if($barang->gambar)
                                <img src="{{ asset('storage/'.$barang->gambar) }}"
                                    width="50"
                                    height="50"
                                    class="rounded-circle">
                                @else
                                <img src="https://via.placeholder.com/50"
                                    class="rounded-circle">
                                @endif
                            </td>

                            <td>{{ $barang->kode }}</td>

                            <td>{{ $barang->nama_barang }}</td>

                            <td>{{ $barang->merk }}</td>

                            <td>
                                <span class="badge bg-primary">
                                    {{ $barang->kategori }}
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-success">
                                    {{ $barang->tipe }}
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-info">
                                    {{ $barang->stok }}
                                    {{ $barang->satuan }}
                                </span>
                            </td>

                            <td>
                                <span class="badge bg-success">
                                    {{ $barang->kondisi }}
                                </span>
                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="9" class="text-center">
                                Data tidak ditemukan
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>
            </div>

            <div class="mt-3">
                {{ $barangs->links() }}
            </div>

        </div>
    </div>

</div>

@endsection