<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Riwayat Pengajuan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <h2>Riwayat Pengajuan Barang</h2>

        </a>

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th>No</th>

                    <th>Nama Barang</th>

                    <th>Jumlah</th>

                    <th>Keterangan</th>

                    <th>Status</th>

                    <th>Tanggal</th>

                </tr>

            </thead>

            <tbody>

                @forelse($pengajuan as $item)
                    <tr>

                        <td>

                            {{ $loop->iteration }}

                        </td>

                        <td>

                            {{ $item->nama_barang }}

                        </td>

                        <td>

                            {{ $item->jumlah }}

                        </td>

                        <td>

                            {{ $item->keterangan }}

                        </td>

                        <td>

                            {{ $item->status }}

                        </td>

                        <td>

                            {{ $item->created_at->format('d-m-Y') }}

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center">

                            Belum ada pengajuan

                        </td>

                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

</body>

</html>
