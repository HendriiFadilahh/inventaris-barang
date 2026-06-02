<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laporan Keuangan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        html, body{
            height:100%;
        }

        body{
            display:flex;
            flex-direction:column;
            background:#f4f6f9;
        }

        #layoutSidenav{
            display:flex;
            flex:1;
        }

        #layoutSidenav_content{
            display:flex;
            flex-direction:column;
            flex:1;
        }

        main{
            flex:1;
        }

        footer{
            margin-top:auto;
        }

        .table-container{
            background:#fff;
            padding:20px;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,.1);
        }

        .card-info{
            border:none;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,.1);
        }

        .table th{
            text-align:center;
            vertical-align:middle;
        }

        .table td{
            vertical-align:middle;
        }
    </style>
</head>

<body class="sb-nav-fixed">

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <a class="navbar-brand ps-3" href="#">
        INVENTARIS BARANG
    </a>

    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0">
        <i class="fas fa-bars"></i>
    </button>

    <form class="d-none d-md-inline-block form-inline ms-auto me-3">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search...">
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
                        <button class="dropdown-item">
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

        <nav class="sb-sidenav accordion sb-sidenav-dark bg-dark">

            <div class="sb-sidenav-menu">

                <div class="nav">

                    <div class="sb-sidenav-menu-heading">
                        Core
                    </div>

                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        Laporan Keuangan
                    </a>

                    <div class="sb-sidenav-menu-heading">
                        Menu
                    </div>

                    <a class="nav-link active"
                       href="{{ route('keuangan.laporankeuangan') }}">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        Laporan Keuangan
                    </a>

                </div>

            </div>

            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Keuangan
            </div>

        </nav>

    </div>

    <!-- Content -->
    <div id="layoutSidenav_content">

        <main>

            <div class="container-fluid px-4">

                <h1 class="mt-4">
                    Laporan Keuangan
                </h1>

                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">
                        Data Laporan Keuangan
                    </li>
                </ol>

                <!-- Table -->
                <div class="table-container">

                    <div class="d-flex justify-content-between mb-3">

                        <h4>Data Laporan Keuangan</h4>

                    </div>

                    <table class="table table-bordered table-striped">

                        <thead class="table-dark">

                            <tr>
                                <th>No</th>
                                <th>ID Keuangan</th>
                                <th>ID Barang</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                            </tr>

                        </thead>

                        <tbody>

                        @forelse($laporan as $item)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $item->id_keuangan }}</td>

                                <td>{{ $item->id_barang }}</td>

                                <td>{{ $item->jumlah }}</td>

                                <td>
                                    Rp {{ number_format($item->total,0,',','.') }}
                                </td>

                                <td>
                                    {{ date('d-m-Y', strtotime($item->tanggal)) }}
                                </td>

                                <td>
                                    {{ $item->keterangan }}
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center">
                                    Data laporan keuangan belum tersedia
                                </td>
                            </tr>

                        @endforelse

                        </tbody>

                    </table>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>