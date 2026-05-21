<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Pengajuan Barang - Inventaris Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        html,
        body {
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

    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <a class="navbar-brand ps-3" href="#">
            INVENTARIS BARANG
        </a>

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Search -->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." />

                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>

        <!-- User -->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown">

                    <i class="fas fa-user fa-fw"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Activity Log</a></li>

                    <li>
                        <hr class="dropdown-divider" />
                    </li>

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

    <!-- Layout -->
    <div id="layoutSidenav">

        <!-- Sidebar -->
        <div id="layoutSidenav_nav">

            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

                <div class="sb-sidenav-menu">

                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Core</div>

                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Pengajuan Barang
                        </a>

                        <div class="sb-sidenav-menu-heading">Menu</div>


                        <a class="nav-link" href="{{ route('pengajuan.riwayat') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-arrow-down"></i>
                            </div>
                            Pengajuan Barang
                        </a>

                        <a class="nav-link" href="{{ route('pengajuan.lihat-riwayat') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-arrow-up"></i>
                            </div>
                            Riwayat Pengajuan
                        </a>

                    </div>

                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Karyawan
                </div>

            </nav>

        </div>

        <!-- Content -->
        <div id="layoutSidenav_content">

            <main>

                <div class="container-fluid px-4">

                    <h1 class="mt-4">Pengajuan Barang</h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">
                            Pengajuan Barang
                        </li>
                    </ol>

                    <div class="container mt-5">

                        <div class="card shadow">

                            <div class="card-header bg-primary text-white">

                                <h4 class="mb-0">
                                    Form Pengajuan Barang
                                </h4>

                            </div>

                            <div class="card-body">

                                @if ($errors->any())

                                    <div class="alert alert-danger">

                                        <ul class="mb-0">

                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach

                                        </ul>

                                    </div>

                                @endif

                                <form action="{{ route('pengajuan.store') }}" method="POST">

                                    @csrf

                                    <!-- Nama Barang -->
                                    <div class="mb-3">

                                        <label class="form-label">
                                            Nama Barang
                                        </label>

                                        <input type="text" name="nama_barang" class="form-control"
                                            placeholder="Masukkan nama barang" required>

                                    </div>

                                    <!-- Jumlah -->
                                    <div class="mb-3">

                                        <label class="form-label">
                                            Jumlah
                                        </label>

                                        <input type="number" name="jumlah" class="form-control"
                                            placeholder="Masukkan jumlah barang" required>

                                    </div>

                                    <!-- Keterangan -->
                                    <div class="mb-3">

                                        <label class="form-label">
                                            Keterangan
                                        </label>

                                        <textarea name="keterangan" rows="4" class="form-control" placeholder="Masukkan keterangan">
                    </textarea>

                                    </div>

                                    <!-- Button -->
                                    <button type="submit" class="btn btn-primary">

                                        Ajukan Barang

                                    </button>

                                

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </main>

            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto">

                <div class="container-fluid px-4">

                    <div class="d-flex align-items-center justify-content-between small">

                        <div class="text-muted">
                            Copyright &copy; INVENTARIS BARANG 2026
                        </div>

                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>

                    </div>

                </div>

            </footer>

        </div>

    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
