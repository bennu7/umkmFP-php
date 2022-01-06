<?php
require 'functions.php';
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
// var_dump($_SESSION['login']);

$produks = query("SELECT * FROM men");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>UMKM | Men</title>
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

<body>

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
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="woman.php">Wanita</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="man.php">pria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aksesoris</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
            <div class="navbar-nav flex-row order-md-last">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://waskita.test">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="10" cy="10" r="7" />
                                    <line x1="21" y1="21" x2="15" y2="15" />
                                </svg>
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://waskita.test/Form-Laporan-dan-Masukan.html">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/world -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="9" />
                                    <line x1="3.6" y1="9" x2="20.4" y2="9" />
                                    <line x1="3.6" y1="15" x2="20.4" y2="15" />
                                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item" id='dosen-area'>
                        <a class="nav-link" href="http://waskita.test/dosen">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/basket -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="7 10 12 4 17 10" />
                                    <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z" />
                                    <circle cx="12" cy="15" r="2" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="nav-item d-none d-md-flex me-3">
                    <div class="btn-list">
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="7" r="4" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                        </span>
                        <div class="d-none d-xl-block ps-2">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="https://umkm.test/profile.php" class="dropdown-item">Profil dan Akun</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Kotak Pesan</a>
                        <a href="http://umkm.test/landing.php" class="dropdown-item">Login</a>
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
    </header>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards mt-4">
            </div>
            <div class="row row-card mt-4">
                <div class="col-md-12">
                    <div class="mr-3">
                        <div class="card-header">
                            <h3 class="card-title">
                                MEN
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="container-xl">
                                <div class="row row-cards">
                                    <?php
                                    foreach ($produks as $produk) :
                                    ?>

                                        <div class="col-sm-6 col-lg-4">
                                            <div class="card card-sm">
                                                <!-- <a href="#" class="d-block"><img src="https://asset-a.grid.id/crop/0x0:0x0/360x240/photo/2020/04/09/663219154.png" class="card-img-top"></a> -->
                                                <a href="#" class="d-block"><img src="images/<?= $produk['image'] ?>" class="card-img-top"></a>
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div><?= $produk["name"] ?></div>
                                                            <div class="text-muted"><?= $produk["price"] ?></div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="#" class="text-muted">
                                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                                </svg>
                                                                5.0
                                                            </a>
                                                            <a href="#" class="ms-3 text-muted">
                                                                terjual 120
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach ?>

                                </div>
                                <div class="row row-cards mt-3">
                                    <div class="card-header" style="text-align: center;">Voucher Discount</div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card card-sm">
                                            <a href="detail-item.php" class="d-block"><img src="https://cms-assets.tutsplus.com/cdn-cgi/image/width=630/uploads/users/23/posts/28611/image/how-to-set-discount-pricing-right.jpg" class="card-img-top"></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card card-sm">
                                            <a href="detail-item.php" class="d-block"><img src="https://cms-assets.tutsplus.com/cdn-cgi/image/width=630/uploads/users/23/posts/28611/image/how-to-set-discount-pricing-right.jpg" class="card-img-top"></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card card-sm">
                                            <a href="detail-item.php" class="d-block"><img src="https://cms-assets.tutsplus.com/cdn-cgi/image/width=630/uploads/users/23/posts/28611/image/how-to-set-discount-pricing-right.jpg" class="card-img-top"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("layout/footer.php") ?>