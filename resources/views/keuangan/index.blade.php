<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard - Inventaris Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

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

    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <a class="navbar-brand ps-3" href="#">
            INVENTARIS BARANG
        </a>

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
            id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Search -->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control"
                    type="text"
                    placeholder="Search for..." />

                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>

        <!-- User -->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle"
                    id="navbarDropdown"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown">

                    <i class="fas fa-user fa-fw"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Activity Log</a></li>

                    <li><hr class="dropdown-divider" /></li>

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
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">Menu</div>

                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-box"></i>
                            </div>
                            Transaksi
                        </a>

                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-arrow-down"></i>
                            </div>
                            Pengeluaran
                        </a>

                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-arrow-up"></i>
                            </div>
                            Laporan Keuangan
                        </a>

                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-file"></i>
                            </div>
                            Anggaran
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

                    <h1 class="mt-4">Dashboard</h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">
                            Dashboard
                        </li>
                    </ol>

                    <div class="row">

                        <!-- Card 1 -->
                        <div class="col-xl-3 col-md-6">

                            <div class="card bg-primary text-white mb-4">

                                <div class="card-body">
                                    TOTAL BARANG
                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">

                                    <a class="small text-white stretched-link" href="#">
                                        View Details
                                    </a>

                                    <div class="small text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Card 2 -->
                        <div class="col-xl-3 col-md-6">

                            <div class="card bg-warning text-white mb-4">

                                <div class="card-body">
                                    BARANG MASUK
                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">

                                    <a class="small text-white stretched-link" href="#">
                                        View Details
                                    </a>

                                    <div class="small text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Card 3 -->
                        <div class="col-xl-3 col-md-6">

                            <div class="card bg-success text-white mb-4">

                                <div class="card-body">
                                    BARANG KELUAR
                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">

                                    <a class="small text-white stretched-link" href="#">
                                        View Details
                                    </a>

                                    <div class="small text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Card 4 -->
                        <div class="col-xl-3 col-md-6">

                            <div class="card bg-danger text-white mb-4">

                                <div class="card-body">
                                    STOK MENIPIS
                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">

                                    <a class="small text-white stretched-link" href="#">
                                        View Details
                                    </a>

                                    <div class="small text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>

                                </div>

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