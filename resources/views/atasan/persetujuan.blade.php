<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persetujuan Pengajuan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .table th {
            background: #f1f1f1;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <h3 class="mb-4">Persetujuan Pengajuan Barang</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">

        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($pengajuan as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->keterangan }}</td>

                        <td>
                            @if($item->status == 'Menunggu')
                                <span class="badge bg-warning text-dark">
                                    {{ $item->status }}
                                </span>
                            @elseif($item->status == 'Disetujui')
                                <span class="badge bg-success">
                                    {{ $item->status }}
                                </span>
                            @else
                                <span class="badge bg-danger">
                                    {{ $item->status }}
                                </span>
                            @endif
                        </td>

                        <td>

                            @if($item->status == 'Menunggu')

                                <form action="{{ route('pengajuan.approve', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-success btn-sm"
                                        onclick="return confirm('Setujui pengajuan ini?')">
                                        Setujui
                                    </button>
                                </form>

                                <form action="{{ route('pengajuan.reject', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Tolak pengajuan ini?')">
                                        Tolak
                                    </button>
                                </form>

                            @else
                                <span class="text-muted">Sudah diproses</span>
                            @endif

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="6" class="text-center">
                            Tidak ada data pengajuan
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>