```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Riwayat Pengajuan - Inventaris Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
        crossorigin="anonymous"></script>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #f5f6fa;
        }

        #layoutSidenav {
            display: flex;
            flex: 1;
        }

        #layoutSidenav_content {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        main {
            flex: 1;
        }

        footer {
            margin-top: auto;
        }

        .card-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .table th {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body class="sb-nav-fixed">

    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <a class="navbar-brand ps-3" href="#">
            INVENTARIS BARANG
        </a>

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
            id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search..." />
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown">

                    <i class="fas fa-user fa-fw"></i>

                </a>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                Logout
                            </button>
                        </form>
                    </li>

                </ul>

            </li>
        </ul>

    </nav>

    <div id="layoutSidenav">

        <!-- Sidebar -->
        <div id="layoutSidenav_nav">

            <nav class="sb-sidenav accordion sb-sidenav-dark"
                id="sidenavAccordion">

                <div class="sb-sidenav-menu">

                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">
                            Core
                        </div>

                        <a class="nav-link"
                            href="{{ route('atasan.dashboard') }}">

                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>

                            Dashboard

                        </a>

                        <div class="sb-sidenav-menu-heading">
                            Menu
                        </div>

                        <a class="nav-link"
                            href="{{ route('atasan.laporan') }}">

                            <div class="sb-nav-link-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>

                            Laporan Barang

                        </a>

                        <a class="nav-link active"
                            href="{{ route('pengajuann.riwayat') }}">

                            <div class="sb-nav-link-icon">
                                <i class="fas fa-box"></i>
                            </div>

                            Riwayat Pengajuan

                        </a>

                    </div>

                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Atasan
                </div>

            </nav>

        </div>

        <!-- Content -->
        <div id="layoutSidenav_content">

            <main>

                <div class="container-fluid px-4">

                    <h1 class="mt-4">
                        Riwayat Pengajuan
                    </h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">
                            Riwayat Pengajuan
                        </li>
                    </ol>

                    <div class="card card-custom mb-4">

                        <div class="card-header">
                            <i class="fas fa-history me-1"></i>
                            Data Riwayat Pengajuan
                        </div>

                        <div class="card-body">

                            <table class="table table-bordered table-hover">

                                <thead>

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

                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $item->nama_barang }}</td>

                                        <td>{{ $item->jumlah }}</td>

                                        <td>{{ $item->keterangan }}</td>

                                        <td>

                                            @if($item->status == 'Disetujui')
                                                <span class="badge bg-success">
                                                    {{ $item->status }}
                                                </span>
                                            @elseif($item->status == 'Ditolak')
                                                <span class="badge bg-danger">
                                                    {{ $item->status }}
                                                </span>
                                            @else
                                                <span class="badge bg-warning text-dark">
                                                    {{ $item->status }}
                                                </span>
                                            @endif

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

                            <div class="mt-3 text-secondary">
                                Total Data : {{ $pengajuan->count() }} Pengajuan
                            </div>

                        </div>

                    </div>

                </div>

            </main>

            <footer class="py-4 bg-light mt-auto">

                <div class="container-fluid px-4">

                    <div class="d-flex align-items-center justify-content-between small">

                        <div class="text-muted">
                            Copyright &copy; INVENTARIS BARANG 2026
                        </div>

                    </div>

                </div>

            </footer>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
