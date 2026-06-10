<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Inventaris Barang</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #0b1220;
            color: white;
            overflow-x: hidden;
        }

        /* NAVBAR */
        .navbar {
            background: rgba(10, 15, 30, 0.8);
            backdrop-filter: blur(10px);
        }

        /* HERO */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            background: radial-gradient(circle at top, #1d4ed8, #0b1220 60%);
            position: relative;
        }

        .hero h1 {
            font-size: 3.2rem;
            font-weight: 700;
        }

        .hero p {
            color: #cbd5e1;
        }

        .btn-custom {
            border-radius: 50px;
            padding: 12px 28px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            transform: scale(1.08);
        }

        /* CARD */
        .card-box {
            background: #111827;
            border-radius: 15px;
            padding: 25px;
            transition: 0.3s;
            height: 100%;
        }

        .card-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
        }

        section {
            padding: 80px 0;
        }

        /* ICON */
        .icon {
            font-size: 40px;
            color: #38bdf8;
        }

        /* FOOTER */
        footer {
            background: #050814;
            padding: 25px;
            text-align: center;
            color: #94a3b8;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-box-seam"></i> Inventaris Barang
        </a>

        <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm rounded-pill">
            Login
        </a>
    </div>
</nav>

<!-- HERO -->
<header class="hero">
    <div class="container">
        <h1 data-aos="fade-down">Sistem Inventaris Barang Modern</h1>
        <p class="mt-3" data-aos="fade-up">
            Kelola barang, stok, dan pengajuan dengan lebih cepat, rapi, dan terstruktur
        </p>

        <div class="mt-4" data-aos="zoom-in">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-custom">
                Mulai Sekarang
            </a>
            <a href="#fitur" class="btn btn-outline-light btn-lg btn-custom">
                Lihat Fitur
            </a>
        </div>
    </div>
</header>

<!-- FITUR -->
<section id="fitur">
    <div class="container-fluid px-5 text-center">
        <h2 class="mb-5" data-aos="fade-up">Fitur Sistem</h2>

        <div class="row g-4">

            <div class="col-md-4" data-aos="fade-up">
                <a class="nav-link" href="{{ route('pengajuan.create') }}">
                    <div class="card-box">
                        <i class="bi bi-cart-plus icon"></i>
                        <h4 class="mt-3">Pengajuan Barang</h4>
                        <p>User dapat mengajukan permintaan barang dengan cepat dan mudah.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                 <a class="nav-link" href="{{ route('admin.dataBarang') }}">
                <div class="card-box">
                    <i class="bi bi-boxes icon"></i>
                    <h4 class="mt-3">Manajemen Stok</h4>
                    <p>Monitoring stok barang secara real-time dan terupdate.</p>
                </div>
            </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" href="{{ route('admin.laporan') }}">
                <div class="card-box">
                    <i class="bi bi-graph-up-arrow icon"></i>
                    <h4 class="mt-3">Laporan Data</h4>
                    <p>Rekap data barang dan pengajuan dalam bentuk laporan lengkap.</p>
                </div>
                </a>
            </div>
            
        </div>
    </div>
</section>

<!-- STATISTIK -->
<section style="background:#0f172a;">
    <div class="container-fluid px-5 text-center">
        <h2 data-aos="fade-up">Kenapa Sistem Ini?</h2>

        <div class="row mt-5">

            <div class="col-md-3" data-aos="zoom-in">
                <h1 class="text-info">100%</h1>
                <p>Digitalisasi</p>
            </div>

            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                <h1 class="text-success">Realtime</h1>
                <p>Update Data</p>
            </div>

            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                <h1 class="text-warning">Aman</h1>
                <p>Laravel Security</p>
            </div>

            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <h1 class="text-danger">Cepat</h1>
                <p>Lightweight System</p>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="text-center">
    <div class="container">
        <h2 data-aos="fade-up">Siap Kelola Inventaris Lebih Mudah?</h2>
        <p data-aos="fade-up" class="text-secondary">Login sekarang dan mulai gunakan sistem</p>

        <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-custom mt-3" data-aos="zoom-in">
            Login Sekarang
        </a>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <p>&copy; 2026 Sistem Inventaris Barang | Laravel App</p>
</footer>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 900,
        once: true
    });
</script>

</body>
</html>