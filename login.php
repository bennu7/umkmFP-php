<?php
require 'env.php';
session_start();
// $id = 0;



if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    $id = "SELECT id FROM user WHERE username = '$username'";
    $resultId = mysqli_query($conn, $id);
    $hasilId = mysqli_fetch_assoc($resultId);
    $_SESSION["id"] = $hasilId;


    if (mysqli_num_rows($result) === 1) {
        // mengambil password dari database yang telah di hash
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            print("Sukses");
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}



// var_dump($hasilId);
// var_dump($resultId);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>UMKM</title>
    <!-- CSS files -->
    <link href="https://umkm.test/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="https://umkm.test/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="https://umkm.test/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="https://umkm.test/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="https://umkm.test/dist/css/demo.min.css" rel="stylesheet" />
    <link rel="icon" href="amikom_icon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="amikom_icon.ico" type="image/x-icon" />
    <script>
        var base_url = 'https://umkm.test/'
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/tabler.min.js"></script>
    <script src="js/mazer.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#load-header").load(base_url + "layout/header.php");
            $("#load-footer").load(base_url + "layout/navbar.php");
        });
    </script>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href="http://umkm.test">
                    <img src="http://umkm.test/dist/img/logo/Insel (3).png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                </a>
            </h1>
        </div>
    </header>
    <div class="page page-center">
        <div class="container-tight py-4">
            <!-- <div class="text-center mb-4">
                <a href="."><img src="http://umkm.test/dist/img/logo/Insel (3).png" height="36" alt=""></a>
            </div> -->
            <form class="card card-md" action="" method="POST" autocomplete="off">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Masuk ke akun anda</h2>
                    <span>
                        <?php if (isset($_GET['error'])) {
                            echo "<p class='error' style='background: #E57676; color:#FFFFFF;'>";
                            echo $_GET['error'];
                        } ?>
                    </span>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="username..." name="username">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                                <a href="./forgot-password.html">Saya lupa password</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="password..." autocomplete="off" name="password">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">Remember me on this device</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100" name="login">Sign in</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Tidak memiliki akun? <a href="http://umkm.test/register.php" tabindex="-1">Daftar</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <footer class="footer footer-transparent d-print-none">
        <div class="container">
            <div class="row text-center align-items-center flex-row-reverse">
                <div class="col-lg-auto ms-lg-auto">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                            Kelompok lemon
                            <svg xmlns="https://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                            - 19 Informatika 08
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                            Copyright &copy; 2021
                            All rights reserved.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>