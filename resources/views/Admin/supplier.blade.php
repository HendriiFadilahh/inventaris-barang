<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Data Supplier</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
                    id="navbarDropdown"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown">

                    <i class="fas fa-user fa-fw"></i>

                </a>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li><a class="dropdown-item" href="#">Settings</a></li>

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

                        <a class="nav-link active" href="{{ route('admin.supplier') }}">
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

                <div class="container-fluid px-4">

                    <h2 class="mt-4">Data Supplier</h2>

                    <div class="card mb-4">

                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

                            <span>
                                <i class="fas fa-truck me-2"></i>
                                Data Supplier
                            </span>

                            <a href="{{ route('supplier.create') }}"
                               class="btn btn-light btn-sm">

                                <i class="fas fa-plus"></i>
                                Tambah Supplier

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

                                    <thead class="table-dark">

                                        <tr>
                                            <th>No</th>
                                            <th>Kode Supplier</th>
                                            <th>Nama Supplier</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th width="180">Aksi</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        @forelse($supplier as $item)

                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->kode_supplier }}</td>
                                            <td>{{ $item->nama_supplier }}</td>
                                            <td>{{ $item->telepon }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->alamat }}</td>

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

                                                <a href="{{ route('supplier.edit', $item->id) }}"
                                                   class="btn btn-warning btn-sm">

                                                    <i class="fas fa-edit"></i>
                                                    Edit

                                                </a>

                                                <form action="{{ route('supplier.destroy', $item->id) }}"
                                                      method="POST"
                                                      class="d-inline">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Yakin hapus supplier ini?')">

                                                        <i class="fas fa-trash"></i>
                                                        Hapus

                                                    </button>

                                                </form>

                                            </td>

                                        </tr>

                                        @empty

                                        <tr>
                                            <td colspan="8" class="text-center">
                                                Belum ada data supplier
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>