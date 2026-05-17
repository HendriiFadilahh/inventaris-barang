<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Data Barang</h2>

    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">
        Tambah Barang
    </a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        

        @foreach($barang as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->stok }}</td>
            <td>Rp. {{ number_format($item->harga) }}</td>
            <td>

                <a href="{{ route('barang.edit', $item->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('barang.destroy', $item->id) }}"
                      method="POST"
                      style="display:inline-block">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>
        </tr>
        @endforeach

    </table>

</div>

</body>
</html>