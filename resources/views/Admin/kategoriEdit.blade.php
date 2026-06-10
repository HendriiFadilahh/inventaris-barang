<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Kategori Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        body{
            background-color:#f4f6f9;
        }

        .card{
            border:none;
            border-radius:15px;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
        }

        .card-header{
            background:#ffc107;
            color:#000;
            font-size:20px;
            font-weight:600;
        }

        .form-control,
        .form-select{
            border-radius:10px;
        }

        .btn{
            border-radius:10px;
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
                <input class="form-control" type="text" placeholder="Search for..." />
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

            <nav class="sb-sidenav accordion sb-sidenav-dark">

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

                        <a class="nav-link active" href="{{ route('admin.kategori') }}">
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

                <div class="container-fluid px-4">

                    <h1 class="mt-4">Edit Kategori Barang</h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">
                            Master Data
                        </li>
                        <li class="breadcrumb-item active">
                            Edit Kategori
                        </li>
                    </ol>

                    <div class="row justify-content-center">

                        <div class="col-lg-8">

                            <div class="card">

                                <div class="card-header">
                                    Edit Kategori Barang
                                </div>

                                <div class="card-body">

                                    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">

                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3">

                                            <label class="form-label">
                                                Kode Kategori
                                            </label>

                                            <input
                                                type="text"
                                                name="kode_kategori"
                                                value="{{ $kategori->kode_kategori }}"
                                                class="form-control"
                                                required>

                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label">
                                                Nama Kategori
                                            </label>

                                            <input
                                                type="text"
                                                name="nama_kategori"
                                                value="{{ $kategori->nama_kategori }}"
                                                class="form-control"
                                                required>

                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label">
                                                Deskripsi
                                            </label>

                                            <textarea
                                                name="deskripsi"
                                                rows="4"
                                                class="form-control">{{ $kategori->deskripsi }}</textarea>

                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label">
                                                Status
                                            </label>

                                            <select name="is_active" class="form-select">

                                                <option value="1"
                                                    {{ $kategori->is_active == 1 ? 'selected' : '' }}>
                                                    Aktif
                                                </option>

                                                <option value="0"
                                                    {{ $kategori->is_active == 0 ? 'selected' : '' }}>
                                                    Nonaktif
                                                </option>

                                            </select>

                                        </div>

                                        <button
                                            type="submit"
                                            class="btn btn-warning">

                                            <i class="fas fa-save"></i>
                                            Update

                                        </button>

                                        <a href="{{ route('admin.kategori') }}"
                                            class="btn btn-secondary">

                                            <i class="fas fa-arrow-left"></i>
                                            Kembali

                                        </a>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </main>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>