<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>

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
            <input class="form-control"
                   type="text"
                   placeholder="Search..." />

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

        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

            <div class="sb-sidenav-menu">

                <div class="nav">

                    <div class="sb-sidenav-menu-heading">
                        Core
                    </div>

                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">
                        Menu
                    </div>

                    <a class="nav-link active" href="{{ route('barang.index') }}">
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
<a class="nav-link" href="{{ route('admin.satuan') }}">
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
                                <i class="fas fa-arrow-up"></i>
                            </div>
                            Kategori Barang
                        </a>

                </div>

            </div>

            <div class="sb-sidenav-footer">
                <div class="small">
                    Logged in as:
                </div>
                Admin
            </div>

        </nav>

    </div>

    <!-- Content -->
    <div id="layoutSidenav_content">

        <main>

            <div class="container-fluid px-4 mt-4">

                <h2 class="mb-4">Edit Barang</h2>

                <div class="card">

                    <div class="card-body">

                        <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">
                                    Nama Barang
                                </label>

                                <input type="text"
                                       name="nama_barang"
                                       class="form-control"
                                       value="{{ $barang->nama_barang }}"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Stok
                                </label>

                                <input type="number"
                                       name="stok"
                                       class="form-control"
                                       value="{{ $barang->stok }}"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Harga
                                </label>

                                <input type="number"
                                       name="harga"
                                       class="form-control"
                                       value="{{ $barang->harga }}"
                                       required>
                            </div>

                            <button type="submit" class="btn btn-success">
                                Update
                            </button>

                            <a href="{{ route('barang.index') }}"
                               class="btn btn-secondary">
                                Kembali
                            </a>

                        </form>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>