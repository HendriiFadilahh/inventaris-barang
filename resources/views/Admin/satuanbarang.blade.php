<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Data Satuan Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #f4f6f9;
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

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
        }

        .card-header {
            background: #0d6efd;
            color: white;
            font-weight: 600;
        }

        .badge {
            padding: 8px 12px;
            border-radius: 20px;
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

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search..." />
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>

        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"
                    href="#"
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

            <nav class="sb-sidenav accordion sb-sidenav-dark">

                <div class="sb-sidenav-menu">

                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">
                            Core
                        </div>

                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">
                            Menu
                        </div>

                        <a class="nav-link" href="{{ route('admin.dataBarang') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-box"></i>
                            </div>
                            Data Barang
                        </a>

                        <a class="nav-link" href="{{ route('admin.laporan') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            Laporan Barang
                        </a>

                        <a class="nav-link active" href="{{ route('admin.satuan') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            Satuan Barang
                        </a>

                        <a class="nav-link" href="{{ route('admin.supplier') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            Supplier
                        </a>

                        <a class="nav-link" href="{{ route('admin.kategori') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tags"></i>
                            </div>
                            Kategori Barang
                        </a>

                    </div>

                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>

            </nav>

        </div>

        <!-- Content -->
        <div id="layoutSidenav_content">

            <main>

                <div class="container-fluid px-4 mt-4">

                    <h2 class="mb-4">Data Satuan Barang</h2>

                    <div class="card">

                        <div class="card-header d-flex justify-content-between align-items-center">

                            <span>Data Satuan Barang</span>

                            <a href="{{ route('satuan.create') }}"
                                class="btn btn-light btn-sm">

                                + Tambah Satuan

                            </a>

                        </div>

                        <div class="card-body">

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="table-responsive">

                                <table class="table table-bordered table-hover">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Satuan</th>
                                            <th>Nama Satuan</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th width="180">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @forelse($satuan as $item)

                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->kode_satuan }}</td>
                                            <td>{{ $item->nama_satuan }}</td>
                                            <td>{{ $item->keterangan }}</td>

                                            <td>
                                                @if($item->is_active)
                                                    <span class="badge bg-success">
                                                        Aktif
                                                    </span>
                                                @else
                                                    <span class="badge bg-danger">
                                                        Nonaktif
                                                    </span>
                                                @endif
                                            </td>

                                            <td>

                                                <a href="{{ route('satuan.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    Edit
                                                </a>

                                                <form action="{{ route('satuan.destroy', $item->id) }}"
                                                    method="POST"
                                                    class="d-inline">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                                                        Hapus

                                                    </button>

                                                </form>

                                            </td>

                                        </tr>

                                        @empty

                                        <tr>
                                            <td colspan="6" class="text-center">
                                                Belum ada data satuan barang
                                            </td>
                                        </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </main>

            <footer class="py-4 bg-light mt-auto">

                <div class="container-fluid px-4">

                    <div class="d-flex justify-content-between small">

                        <div class="text-muted">
                            Copyright &copy; INVENTARIS BARANG 2026
                        </div>

                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms & Conditions</a>
                        </div>

                    </div>

                </div>

            </footer>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>