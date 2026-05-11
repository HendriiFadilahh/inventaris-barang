<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Login Inventaris Barang</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- CSS LANGSUNG DI SINI -->
    <style>

        body{
            background-color: #0d6efd;
            font-family: Arial, sans-serif;
        }

        .card{
            border-radius: 15px;
            overflow: hidden;
        }

        .card-header{
            background-color: white;
        }

        .card-header h3{
            font-weight: bold;
        }

        .btn-primary{
            width: 100%;
            border-radius: 10px;
        }

        .form-control{
            border-radius: 10px;
        }

        .card-footer{
            background-color: white;
        }

        a{
            text-decoration: none;
        }

        a:hover{
            text-decoration: underline;
        }

    </style>

</head>

<body>

    <div id="layoutAuthentication">

        <div id="layoutAuthentication_content">

            <main>

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-5">
<div class="close-btn" 
 style="
    position:absolute;
    top:10px;
    left:10px;
    width:30px;
    height:30px;
    border:none;
    border-radius:50%;
    background:black;
    color:white;
    cursor:pointer;"
    
> <a href="{{route('landing')}}"><-</a>
</div>
                            <div class="card shadow-lg border-0 mt-5">

                                <div class="card-header">
                                    <h3 class="text-center my-4">
                                        Login Inventaris Barang
                                    </h3>
                                </div>

                                <div class="card-body">

                                    <form action="dashboard.index" method="POST">

                                        <!-- EMAIL -->
                                        <div class="form-floating mb-3">
                                            <input 
                                                class="form-control"
                                                id="inputEmail"
                                                type="email"
                                                name="email"
                                                placeholder="name@example.com"
                                                required
                                            />

                                            <label for="inputEmail">
                                                Email Address
                                            </label>
                                        </div>

                                        <!-- PASSWORD -->
                                        <div class="form-floating mb-3">

                                            <input 
                                                class="form-control"
                                                id="inputPassword"
                                                type="password"
                                                name="password"
                                                placeholder="Password"
                                                required
                                            />

                                            <label for="inputPassword">
                                                Password
                                            </label>

                                        </div>

                                        <!-- CHECKBOX -->
                                        <div class="form-check mb-3">

                                            <input 
                                                class="form-check-input"
                                                id="rememberPasswordCheck"
                                                type="checkbox"
                                            />

                                            <label 
                                                class="form-check-label"
                                                for="rememberPasswordCheck"
                                            >
                                                Remember Password
                                            </label>

                                        </div>

                                        <!-- BUTTON -->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                            <a class="small" href="#">
                                                Forgot Password?
                                            </a>

                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>
                                        </div>

                                    </form>

                                </div>

                                <div class="card-footer text-center py-3">

                                    <div class="small">

                                        <a href="{{route('login.register')}}">
                                            Need an account? Sign up!
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </main>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>