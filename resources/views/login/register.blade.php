<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Register Inventaris Barang</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>

        body{
            background-color: #0d6efd;
            font-family: Arial, sans-serif;
        }

        .card{
            border-radius: 20px;
            overflow: hidden;
        }

        .card-header{
            background-color: white;
        }

        .card-header h3{
            font-weight: bold;
        }

        .form-control{
            border-radius: 10px;
        }

        .btn-primary{
            border-radius: 10px;
            padding: 10px;
            font-weight: bold;
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

        .close-btn{
            position:absolute;
            top:10px;
            left:10px;
            width:35px;
            height:35px;
            border-radius:50%;
            background:black;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            text-decoration:none;
            font-size:18px;
            font-weight:bold;
        }

    </style>

</head>

<body>

    <div id="layoutAuthentication">

        <div id="layoutAuthentication_content">

            <main>

                <div class="container">

                    <!-- Tombol Back -->
                    <a href="{{ route('landing') }}" class="close-btn">
                        ←
                    </a>

                    <div class="row justify-content-center">

                        <div class="col-lg-7">

                            <div class="card shadow-lg border-0 mt-5">

                                <div class="card-header">
                                    <h3 class="text-center my-4">
                                        Create Account
                                    </h3>
                                </div>

                                <div class="card-body">

                                    <!-- FORM -->
                                    <form action="{{ route('login.register') }}" method="POST">
                                        @csrf

                                        <!-- NAMA -->
                                        <div class="row mb-3">

                                            <div class="col-md-6">

                                                <div class="form-floating mb-3 mb-md-0">

                                                    <input 
                                                        class="form-control"
                                                        id="inputFirstName"
                                                        type="text"
                                                        name="first_name"
                                                        placeholder="Enter your first name"
                                                        required
                                                    />

                                                    <label for="inputFirstName">
                                                        First Name
                                                    </label>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-floating">

                                                    <input 
                                                        class="form-control"
                                                        id="inputLastName"
                                                        type="text"
                                                        name="last_name"
                                                        placeholder="Enter your last name"
                                                        required
                                                    />

                                                    <label for="inputLastName">
                                                        Last Name
                                                    </label>

                                                </div>

                                            </div>

                                        </div>

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
                                        <div class="row mb-3">

                                            <div class="col-md-6">

                                                <div class="form-floating mb-3 mb-md-0">

                                                    <input 
                                                        class="form-control"
                                                        id="inputPassword"
                                                        type="password"
                                                        name="password"
                                                        placeholder="Create a password"
                                                        required
                                                    />

                                                    <label for="inputPassword">
                                                        Password
                                                    </label>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-floating mb-3 mb-md-0">

                                                    <input 
                                                        class="form-control"
                                                        id="inputPasswordConfirm"
                                                        type="password"
                                                        name="confirm_password"
                                                        placeholder="Confirm password"
                                                        required
                                                    />

                                                    <label for="inputPasswordConfirm">
                                                        Confirm Password
                                                    </label>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- BUTTON -->
                                        <div class="mt-4 mb-0">

                                            <div class="d-grid">

                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Create Account
                                                </button>

                                            </div>

                                        </div>

                                    </form>

                                </div>

                                <div class="card-footer text-center py-3">

                                    <div class="small">

                                        <a href="{{ route('login.login') }}">
                                            Have an account? Go to login
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