<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Login Inventaris Barang</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Lottie Animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;

            /* futuristic gradient */
            background: linear-gradient(-45deg, #0f172a, #1e3a8a, #0ea5e9, #22c55e);
            background-size: 400% 400%;
            animation: bgMove 10s ease infinite;
        }

        @keyframes bgMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* floating particles */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 1px, transparent 1px);
            background-size: 40px 40px;
            animation: moveDots 6s linear infinite;
            opacity: 0.4;
        }

        @keyframes moveDots {
            from { transform: translateY(0); }
            to { transform: translateY(-40px); }
        }

        /* CARD */
        .login-card {
            width: 450px;
            padding: 30px;
            border-radius: 22px;

            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border: 1px solid rgba(255, 255, 255, 0.25);

            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);

            animation: fadeInUp 1s ease;
            position: relative;
            z-index: 2;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .title {
            color: white;
            text-align: center;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
        }

        .btn-login {
            width: 100%;
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
            transition: 0.3s;
            background: linear-gradient(90deg, #0ea5e9, #22c55e);
            border: none;
        }

        .btn-login:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(14,165,233,0.6);
        }

        label {
            font-size: 14px;
        }

        .text-small {
            font-size: 13px;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            font-size: 20px;
            z-index: 3;
        }

        /* ROBOT */
        .robot {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
            filter: drop-shadow(0 0 15px rgba(0,255,255,0.6));
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }

        .subtitle {
            text-align: center;
            color: rgba(255,255,255,0.8);
            font-size: 13px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<!-- BACK -->
<a href="{{ route('landing') }}" class="back-btn">
    <i class="fas fa-arrow-left"></i>
</a>

<!-- LOGIN CARD -->
<div class="login-card">

    <!-- ROBOT ANIMATION -->
    <div class="robot">
        <lottie-player
            src="https://assets10.lottiefiles.com/packages/lf20_jcikwtux.json"
            background="transparent"
            speed="1"
            style="width: 140px; height: 140px;"
            loop
            autoplay>
        </lottie-player>
    </div>

    <h3 class="title">Login Inventaris Barang</h3>
    <div class="subtitle">AI Robot siap membantu manajemen barang 🚀</div>

    <form action="{{ route('authenticate') }}" method="POST">
        @csrf

        <!-- EMAIL -->
        <div class="mb-3">
            <label class="text-white">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
        </div>

        <!-- PASSWORD -->
        <div class="mb-3">
            <label class="text-white">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <!-- REMEMBER -->
        <div class="form-check mb-3 text-white text-small">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Remember me</label>
        </div>

        <!-- BUTTON -->
        <button type="submit" class="btn btn-login">
            Login
        </button>

        <div class="text-center mt-3 text-small">
            <a href="#">Lupa password?</a>
        </div>

        <div class="text-center mt-2 text-small">
            <a href="{{ route('register') }}">Belum punya akun? Register</a>
        </div>

    </form>

</div>

</body>
</html>