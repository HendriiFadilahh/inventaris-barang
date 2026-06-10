<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
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
    </style>
</head>

<body class="sb-nav-fixed">

<!-- NAVBAR (SAMA PERSIS PENGAJUAN) -->
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <a class="navbar-brand ps-3" href="#">
        INVENTARIS BARANG
    </a>

    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- SEARCH -->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search..." />
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>

    <!-- USER -->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fas fa-user fa-fw"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-end">

                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Activity Log</a></li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item">Logout</button>
                    </form>
                </li>

            </ul>

        </li>
    </ul>

</nav>

<div id="layoutSidenav">

    <!-- SIDEBAR (SAMA PERSIS PENGAJUAN) -->
    <div id="layoutSidenav_nav">

        <nav class="sb-sidenav accordion sb-sidenav-dark">

            <div class="sb-sidenav-menu">
                <div class="nav">
                     <div class="sb-sidenav-menu-heading">Core</div>
                     
<a class="nav-link" href="{{ route('karyawan.dashboard') }}">
    <div class="sb-nav-link-icon">
        <i class="fas fa-tachometer-alt"></i>
    </div>
    Dashboard
</a>

                    <div class="sb-sidenav-menu-heading">Menu</div>

                    <a class="nav-link" href="{{ route('pengajuan.create') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-arrow-down"></i></div>
                        Pengajuan Barang
                    </a>

                    <a class="nav-link" href="{{ route('pengajuan.riwayat') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-arrow-up"></i></div>
                        Riwayat Pengajuan
                    </a>

                    <a class="nav-link active" href="{{ route('karyawan.katalog') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Katalog Barang
                    </a>

                </div>
            </div>

            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Karyawan
            </div>

        </nav>

    </div>

    <!-- CONTENT -->
    <div id="layoutSidenav_content">

        <main>

            <div class="container-fluid px-4">

                <h1 class="mt-4">Katalog Barang</h1>

                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Katalog Barang</li>
                </ol>

                <div class="card shadow">

                    <div class="card-header bg-primary text-white">
                        Data Katalog Barang
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered table-striped">

                            <thead class="table-black">
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($barang as $item)
                                <tr>
                                    <td>{{ $item->kode_barang }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>Rp {{ number_format($item->harga,0,',','.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>