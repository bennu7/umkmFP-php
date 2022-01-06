<?php
require 'functions.php';

// var_dump(mysqli_query($conn, "SELECT * FROM user"));



if (isset($_POST['register'])) {
  echo "sudah di press";
  echo "<br>";

  $name = strtolower(stripslashes($_POST["nama"]));
  $email = strtolower(stripslashes($_POST["email"]));
  $username = strtolower(stripslashes($_POST["username"]));
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  $password2 = mysqli_real_escape_string($conn, $_POST["password2"]);

  // mnemeriksa duplikat username
  $resultUsername = mysqli_query($conn, "SELECT username FROM user WHERE 
                    username = '$username'
                    ");
  if (mysqli_fetch_assoc($resultUsername)) {
    echo "<script>
            alert('username telah ada. silahkan gunakan username lainnya');
        </script>";
    return false;
  }


  // memeriksa konfirmasi password
  if ($password !== $password2) {
    echo "<script>
                alert('konfirmasi password tidak sama');
                </script>";
    return false;
  }

  // enkripsi password terlebih dahulu jika ingin ditambahkan
  $password = password_hash($password, PASSWORD_DEFAULT);
  // $password = md5($password);=> kurang aman




  $query = "INSERT INTO user (email, name, username, password)
    VALUES ('$email', '$name', '$username', '$password')";
  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    // header("Location: login.php");
  }
}

var_dump(mysqli_affected_rows($conn));




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
    // var base_url = 'https://umkm.test/'
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
  <script>
    $('#myModal').on('shown.bs.modal', function() {
      $('#myInput').trigger('focus')
    })
  </script>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
  <header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-xl">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
        <a href="http://umkm.test">
          <img src="http://umkm.test/dist/img/logo/Insel (3).png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </h1> -->
    </div>
  </header>
  <div class="page page-center">
    <div class="container-tight py-4">
      <div class="text-center mb-4">
        <a href="."><img src="./static/logo.svg" height="36" alt=""></a>
      </div>
      <form method="POST" class="card card-md" action="">
        <div class="card-body">
          <h2 class="card-title text-center mb-4">Create Account</h2>
          <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input type="text" class="form-control" placeholder="masukkan nama..." id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label class="form-label" for="email">Alamat Email</label>
            <input type="email" class="form-control" placeholder="masukkan email..." id="email" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input type="text" class="form-control" placeholder="username..." id="username" name="username">
          </div>
          <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-flat">
              <input type="password" class="form-control" placeholder="masukkan password..." autocomplete="off" id="password" name="password">
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
          <div class="mb-3">
            <label class="form-label" id="password2">Ulangi Password</label>
            <div class="input-group input-group-flat">
              <input type="password" class="form-control" placeholder="ulangi password..." autocomplete="off" id="password2" name="password2">
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
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100" name="register">Buat Akun Baru</button>
          </div>
        </div>
      </form>
      <div class="text-center text-muted mt-3">
        Sudah memiliki akun? <a href="login.php" tabindex="-1">Masuk</a>
      </div>
    </div>
  </div>



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