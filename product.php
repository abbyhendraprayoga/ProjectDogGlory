<?php
session_start();
if ($_SESSION['userid'] == false) {
    header("location: sign/login.php");
}
require "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dog Glory</title>
    <link rel="icon" href="assets/icon/acyorganitation.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/product.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>

<body>
    <div>
        <!-- NAVBAR -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/icon/acyorganitation.png" alt="Acikkoyak Logo" class="logo" width="40" height="40">
                    <i>Acikkoyak</i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <i class="far fa-chart-bar"> </i> Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"> <i class="fas fa-shopping-cart"> </i>
                                Explore
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="product.php">Product</a>
                                <a class="dropdown-item" href="#">Profile</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <i class="fas fa-search"> </i> Check Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sign/logout.php"
                                onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- NAVBAR END -->
        <!-- HEADER CONTENT -->
        <div class="content">
            <h1>Product DogGlory</h1>
        </div>
        <!-- CONTEN 1 -->
        <div class="container mt-3">
            <div class="row">

                <!-- JOKI -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark shadow h-100 rounded-card1">
                        <a href="#">
                            <img src="https://vygaming.id/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F89a7617d-2f9d-4e12-82d3-93e9cb2d6c95.webp&w=1920&q=75"
                                class="card-img-top rounded-img-buy p-0 m-0"
                                alt="mobile-legends-mlbb-proses-otomatis-icon">
                        </a>
                        <div class="card-body py-md-0 pb-3 d-none d-lg-block text-center">
                            <small class="text-sm">Joki Mobile Legends</small><br>
                        </div>
                        <div class="card-body p-1 py-md-0 d-lg-none text-center">
                            <div class="row h-100" style="font-size: 12px;">
                                <div class="col-hp">
                                    <small>Joki Mobile Legends</small><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark shadow h-100 rounded-card1">
                        <a href="product/topupml.php">
                            <img src="https://vygaming.id/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F89a7617d-2f9d-4e12-82d3-93e9cb2d6c95.webp&w=1920&q=75 "
                                class="card-img-top rounded-img-buy p-0 m-0"
                                alt="mobile-legends-mlbb-proses-otomatis-icon">
                        </a>
                        <div class="card-body py-md-0 pb-3 d-none d-lg-block text-center">
                            <small class="text-sm">Top Up Mobile Legends</small><br>
                        </div>
                        <div class="card-body p-1 py-md-0 d-lg-none text-center">
                            <div class="row h-100" style="font-size: 12px;">
                                <div class="col-hp">
                                    <small>Top Up Mobile Legends</small><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FF -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark shadow h-100 rounded-card1">
                        <a href="jokidg.html">
                            <img src="https://ourastore.com/assets/img/1689522040ff max.jpg"
                                class="card-img-top rounded-img-buy p-0 m-0"
                                alt="mobile-legends-mlbb-proses-otomatis-icon">
                        </a>
                        <div class="card-body py-md-0 pb-3 d-none d-lg-block text-center">
                            <small class="text-sm">Top Up Free Fire</small><br>
                        </div>
                        <div class="card-body p-1 py-md-0 d-lg-none text-center">
                            <div class="row h-100" style="font-size: 12px;">
                                <div class="col-hp">
                                    <small>Top Up Free Fire</small><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- VALORANT -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark shadow h-100 rounded-card1">
                        <a href="jokidg.html">
                            <img src="https://ourastore.com/assets/img/1671685069ezgif.com-gif-maker (48).jpg"
                                class="card-img-top rounded-img-buy p-0 m-0"
                                alt="mobile-legends-mlbb-proses-otomatis-icon">
                        </a>
                        <div class="card-body py-md-0 pb-3 d-none d-lg-block text-center">
                            <small class="text-sm">Top Up Valorant</small><br>
                        </div>
                        <div class="card-body p-1 py-md-0 d-lg-none text-center">
                            <div class="row h-100" style="font-size: 12px;">
                                <div class="col-hp">
                                    <small>Top Up Valorant</small><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- CONTEN 1 END -->

        <!-- FOOTER -->
        <div class="container-footer">

        </div>

        <!-- FOOTER END -->

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>