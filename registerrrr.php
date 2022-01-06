<?php
session_start();
require 'functions.php';

var_dump(mysqli_query($conn, "SELECT * FROM user"));

// if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
//   header("location:index.php");
// }

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    header("Location: index.php");
  } else {
    mysqli_error($conn);
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">

    <body class="antialiased border-top-wide border-primary d-flex flex-column">
      <div class="page page-center">
        <div class="container-tight py-4">
          <div class="text-center mb-4">
            <a href="."><img src="./static/logo.svg" height="36" alt=""></a>
          </div>
          <form class="card card-md" action="." method="POST">
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
        </div>
      </div>
    </body>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>