<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>

  <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>

```
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
```

</head>

<body class="sb-nav-fixed">

<!-- Navbar -->

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

```
<a class="navbar-brand ps-3" href="#">
    INVENTARIS BARANG
</a>

<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
    id="sidebarToggle">
    <i class="fas fa-bars"></i>
</button>

<ul class="navbar-nav ms-auto me-3">
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
```

</nav>

<div id="layoutSidenav">

```
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

            <h2 class="mt-4">Edit Supplier</h2>

            <div class="card shadow">

                <div class="card-header bg-warning text-dark">
                    <i class="fas fa-edit me-2"></i>
                    Form Edit Supplier
                </div>

                <div class="card-body">

                    <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Kode Supplier</label>
                                <input type="text"
                                       name="kode_supplier"
                                       value="{{ $supplier->kode_supplier }}"
                                       class="form-control"
                                       required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Supplier</label>
                                <input type="text"
                                       name="nama_supplier"
                                       value="{{ $supplier->nama_supplier }}"
                                       class="form-control"
                                       required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Telepon</label>
                                <input type="text"
                                       name="telepon"
                                       value="{{ $supplier->telepon }}"
                                       class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email"
                                       name="email"
                                       value="{{ $supplier->email }}"
                                       class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat"
                                          class="form-control"
                                          rows="3">{{ $supplier->alamat }}</textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status</label>

                                <select name="is_active" class="form-select">

                                    <option value="1" {{ $supplier->is_active == 1 ? 'selected' : '' }}>
                                        Aktif
                                    </option>

                                    <option value="0" {{ $supplier->is_active == 0 ? 'selected' : '' }}>
                                        Nonaktif
                                    </option>

                                </select>

                            </div>

                        </div>

                        <hr>

                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-save"></i>
                            Update
                        </button>

                        <a href="{{ route('admin.supplier') }}"
                           class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Kembali
                        </a>

                    </form>

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
```

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
