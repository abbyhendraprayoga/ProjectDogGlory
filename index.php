<?php
session_start();
if ($_SESSION['userid'] == false) {
    header("location: sign/login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dog Glory</title>
    <link rel="icon" href="assets/icon/acyorganitation.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<style>

</style>

<body>
    <div>
        <!-- NAVBAR -->
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
                            <a class="nav-link" href="adminpanel/dashboard.php"> <i class="far fa-chart-bar"> </i> Dashboard</a>
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
                            <a class="nav-link" href="invoice/invoice.php"> <i class="fas fa-search"> </i> Check Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sign/logout.php"
                                onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- NAVBAR END -->
        <!-- CONTENT 1 -->

</body>
<script src="js/dropdown.js"></script>

</html>