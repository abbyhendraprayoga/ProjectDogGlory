<?php
session_start();
if ($_SESSION['userid'] == false) {
    header("location: ../sign/login.php");
}
require "../koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dog Glory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/icon/acyorganitation.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/preview.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div>
        <!-- NAVBAR -->
        <header>
            <?php require '../navbar.php' ?>
            <!-- NAVBAR END -->
            <div class="row">
                <!-- CONTENT 1 -->
                <div class="col-lg-4 mt-2 mb-2 info-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-white shadow">
                                <div class="card-body">
                                    <img src="https://ourastore.com/assets/img/1671684964ezgif.com-gif-maker (23).jpg"
                                        alt="" class="shadow rounded bg-dark mx-auto mb-2 d-lg-block d-none"
                                        width="150">
                                    <div class="row">
                                        <div class="col">
                                            <h3>Top Up Mobile Legends</h3>
                                            <div class="strip-primary"></div><br>
                                            <img src="https://ourastore.com/assets/img/1671684964ezgif.com-gif-maker (23).jpg"
                                                alt=""
                                                class="shadow rounded bg-dark float-start mt-2 me-2 mb-0 d-lg-none d-block"
                                                width="45">
                                            <div class="rounded-xl bg-secondary-500 shadow-2xl dark:bg-secondary-700">
                                                <div
                                                    class="prose prose-sm appearance-none px-4 py-2 pb-8 text-xs text-text-color sm:px-6">
                                                    <div>
                                                        <p>Top up ML diamond Mobile Legends harga paling murah. Cara
                                                            topup MLBB termurah :</p>
                                                        <ol>
                                                            <li>Masukkan ID & server</li>
                                                            <li>Pilih Nominal</li>
                                                            <li>Masukkan jumlah</li>
                                                            <li>Pilih Pembayaran</li>
                                                            <li>Masukkan No WhatsApp</li>
                                                            <li>Klik Order Now & lakukan Pembayaran lalu Kirim Bukti
                                                                Pembayaran</li>
                                                            <li>Tunggu Admin Memverifikasi Pembayaran dan Diamond Akan
                                                                dikirim Admin</li>
                                                        </ol>
                                                        <p style="text-align: center;"><strong><span
                                                                    style="color: rgb(230, 126, 35);">OPEN 24
                                                                    JAM</span></strong></p>
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

                <!-- CONTENT 2 -->
                <div style="width: 50%; height: 100%;" class="col-lg-8 mt-2 mb-2 data-container d-flex">
                    <div class="row">
                        <div class="col">
                            <div class="card bg-white shadow">
                                <div class="card-header">
                                    <h5 class="card-title">Masukkan Data Akun Kamu</h5>
                                </div>
                                <div class="card-body">
                                    <form action="process_order.php" method="POST" id="topupform">
                                        <div id="userData">
                                            <div class="row row-cols row-cols-md">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <label for="idgame">ID</label>
                                                        <input class="form-control" placeholder="Masukkan ID"
                                                            type="text" name="idgame" id="idgame" style="height: 3rem;"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <label for="server">SERVER</label>
                                                        <input class="form-control" placeholder="Masukkan SERVER"
                                                            type="text" name="server" id="server" style="height: 3rem;"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3">
                                                        <label for="ign">IGN</label>
                                                        <input class="form-control" placeholder="Masukkan In Game Name"
                                                            type="text" name="ign" id="ign" style="height: 3rem;"
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span>
                                            <i>Untuk menemukan ID & Server akun Anda, klik avatar Anda di pojok kiri
                                                atas
                                                layar dan buka tab Info Umum.
                                                Contoh: 12345678 (9864), maka ID adalah 12345678 dan Server adalah
                                                9864
                                            </i>
                                        </span>
                                </div>
                            </div>
                            <div style="margin-top: 20px;" class="card bg-white shadow">
                                <div class="card-header">
                                    <h5 class="card-title">Pilih Nominal yang Ingin Kamu Beli</h5>
                                </div>
                                <div class="card-body">
                                    <h5>✨Diamonds</h5>
                                    <div id="tempatNominal">
                                        <div class="row row-cols-2">
                                            <?php
                                            $topupdm = [
                                                [
                                                    'name' => '1x Weekly Diamond Pass',
                                                    'price' => '27500',
                                                    'image' => 'https://www.vygaming.id/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F2e15f8f5-48a9-4e7f-8547-9db7f68924a5.png&w=640&q=75',
                                                ],
                                                ['name' => '5 (5+0) Diamonds', 'price' => '1431', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '10 (9+1) Diamonds', 'price' => '2860', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '12 (11+1) Diamonds', 'price' => '3337', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '14 (13+1) Diamonds', 'price' => '3813', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '15 (15+0) Diamonds', 'price' => '4292', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '18 (17+1) Diamonds', 'price' => '4767', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '19 (17+2) Diamonds', 'price' => '5244', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '28 (25+3) Diamonds', 'price' => '7626', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '36 (33+3) Diamonds', 'price' => '9533', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '44 (40+4 )Diamonds', 'price' => '11439', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '46 (42+4) Diamonds', 'price' => '12393', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '59 (53+6) Diamonds', 'price' => '15251', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '74 (67+7) Diamonds', 'price' => '19064', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '85 (77+8) Diamonds', 'price' => '21924', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '88 (80+8) Diamonds', 'price' => '22877', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '110 (100+10) Diamonds', 'price' => '28597', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '113 (102+11) Diamonds', 'price' => '29550', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '148 (134+14) Diamonds', 'price' => '38128', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '170 (154+16) Diamonds', 'price' => '43846', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '176 (160+16) Diamonds', 'price' => '45754', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '222 (200+22) Diamonds', 'price' => '57190', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '240 (217+23) Diamonds', 'price' => '61956', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '241 (218+23) Diamonds', 'price' => '62434', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '277 (250+27) Diamonds', 'price' => '71487', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '284 (257+27) Diamonds', 'price' => '73394', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '296 (256+40) Diamonds', 'price' => '76253', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '305 (276+29) Diamonds', 'price' => '79113', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '370 (333+37) Diamonds', 'price' => '95316', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '384 (346+38) Diamonds', 'price' => '99129', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '406 (366+40) Diamonds', 'price' => '104848', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '408 (367+41) Diamonds', 'price' => '108848', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '518 (467+51) Diamonds', 'price' => '133443', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '554 (500+54) Diamonds', 'price' => '142973', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '568 (503+65) Diamonds', 'price' => '148973', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                                ['name' => '716 (637+79) Diamonds', 'price' => '181101', 'image' => 'https://www.ourastore.com/_next/image?url=https%3A%2F%2Fcdn.bangjeff.com%2Fc899cd64-bfde-430f-ad34-8f28ae241558.png&w=640&q=75'],
                                            ];

                                            foreach ($topupdm as $topup) {
                                                ?>
                                                <div class="col-lg-4 mt-3">
                                                    <div class="list-group shadow h-100">
                                                        <input type="radio" name="nominalOptions" class="nominal-radio"
                                                            id="nominal-<?php echo $topup["name"]; ?>"
                                                            value="<?php echo $topup["name"]; ?>" data-type="diamond"
                                                            required>
                                                        <label for="nominal-<?php echo $topup["name"]; ?>"
                                                            class="list-group-item h-100">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="row">
                                                                        <div class="col name-prod">
                                                                            <?php echo $topup["name"]; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        Rp.
                                                                        <div class="col nominal-price">
                                                                            <?php echo $topup["price"]; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-1 m-auto">
                                                                    <img src="<?php echo $topup["image"]; ?>" width="40"
                                                                        style="top: 20%; right: 5%; position: absolute;"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <input type="text" name="selectedItems" id="selectedItems" required=""
                                                hidden>
                                            <input type="text" name="selectedPrice" id="selectedPrice" required=""
                                                hidden>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col">
                                <div style="margin-top: 20px;" class="card bg-white shadow">
                                    <div class="card-header">
                                        <h5 class="card-title">Pilih Metode Pembayaran</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="area-list-payment-method">
                                            <?php
                                            $paymentMethods = [
                                                // [
                                                //     'id' => 'BRI',
                                                //     'name' => 'Bank Transfer',
                                                //     'platform' => 'BRI',
                                                //     'image' => '../assets/payment/BRI.png',
                                                //     'description' => 'Dicek Setiap 3 Menit',
                                                // ],
                                                [
                                                    'id' => 'SHOPEEPAY',
                                                    'name' => 'E-Wallet',
                                                    'platform' => 'SHOPEEPAY',
                                                    'image' => '../assets/payment/Shopeepay.png',
                                                    'description' => 'Dicek Otomatis',
                                                ],
                                                // [
                                                //     'id' => 'COD',
                                                //     'name' => 'Other',
                                                //     'platform' => 'Cash On Delivery (COD)',
                                                //     'image' => '../assets/payment/Shopeepay.png',
                                                //     'description' => 'Khusus Daerah SMKN2TABANAN',
                                                // ],
                                            
                                            ];

                                            foreach ($paymentMethods as $method) {
                                                ?>
                                                <div style="width : 65rem;" class="child-box payment-drawwer shadow">
                                                    <div class="header short-payment-support-info-head"
                                                        onclick="openPaymentDrawer(this)">
                                                        <div class="left">
                                                            <b>
                                                                <i class="fas fa-university"></i>
                                                                <?php echo $method['name']; ?>
                                                            </b>
                                                        </div>
                                                        <div class="right"></div>
                                                    </div>
                                                    <div class="button-action-payment" style="display: none ">
                                                        <div class="row row-cols-2 row-cols-md-3 p-1" style="height: 8rem;">
                                                            <div class="col-lg-4 p-1 tfbank" id="paymentitems">
                                                                <div class="list-group h-100 shadow h-100">
                                                                    <input type="radio" name="paymentMethod"
                                                                        id="paymentMethod-<?php echo $method['id']; ?>"
                                                                        value="<?php echo $method['id']; ?>" data-fee="0"
                                                                        data-fee-percent="0" required>
                                                                    <label for="paymentMethod-<?php echo $method['id']; ?>"
                                                                        class="list-group-item h-100">
                                                                        <div class="info-top">
                                                                            <div>
                                                                                <img src="<?php echo $method['image']; ?>"
                                                                                    height="20px">
                                                                            </div>
                                                                            <div class="info-bottom"
                                                                                style="font-size: 18px">
                                                                                <div class="col payment-platform">
                                                                                    <?php echo $method['platform']; ?>
                                                                                </div>
                                                                            </div>
                                                                            <div style="font-size: 18px">
                                                                                <?php echo $method['description']; ?>
                                                                            </div>
                                                                            <span id="selectedNominal"
                                                                                style="font-size: 18px">Rp 0</span>
                                                                            <!-- Added span element for displaying the selected nominal -->
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <input type="text" name="selectedPayments" id="selectedPayments" required=""
                                                hidden>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 20px;" class="card bg-white shadow">
                                <div class="card-header">
                                    <h5 class="card-title">Detail Kontak Anda</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <label for="whatsapp">No. WhatsApp</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <img class="input-group-text"
                                                        src="https://purecatamphetamine.github.io/country-flag-icons/3x2/ID.svg"
                                                        alt="Indonesia" style="height: 3rem;">
                                                    </img>
                                                </div>
                                                <input class="form-control" placeholder="Masukkan Nomor WhatsApp"
                                                    type="text" name="telp" id="telp" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 20px;" class="card bg-white shadow">

                                <div class="d-flex">
                                    <button type="button" class="btn btn-primary btn-order flex-fill gap-2"
                                        id="checkoutButton" data-toggle="modal" data-target="#checkoutModal">
                                        <span>Pesan Sekarang!</span>
                                    </button>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center align-items-center">
                    <h5 class="modal-title text-center font-weight-bold" id="checkoutModalLabel"><b>Buat Pesanan</b>
                    </h5>
                </div>
                <div class="modal-body">
                    <table class="table profile-info">
                        <tbody style="font-size: 20px;">
                            <tr>
                                <td class="profile-info-label">Username</td>
                                <td id="ignValue" style="text-align: right; font-weight: bold;"></td>
                            </tr>
                            <tr>
                                <td class="profile-info-label">ID</td>
                                <td id="idValue" style="text-align: right; font-weight: bold;"></td>
                            </tr>
                            <tr>
                                <td class="profile-info-label">Server</td>
                                <td id="idServerValue" style="text-align: right; font-weight: bold;"></td>
                            </tr>
                            <tr>
                                <td class="profile-info-label">Item</td>
                                <td id="itemValue" style="text-align: right; font-weight: bold;"></td>
                            </tr>
                            <tr>
                                <td>Product</td>
                                <td id="productValue" style="text-align: right; font-weight: bold;">Mobile Legends</td>
                            </tr>
                            <tr>
                                <td class="profile-info-label">Payments</td>
                                <td id="paymentsValue" style="text-align: right; font-weight: bold;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        id="closeModalBtn">Close</button>
                    <button id="submitFormBtn" type="button" class="btn btn-primary" data-dismiss="modal">Buat
                        Pesanan!</button>
                </div>
            </div>
        </div>
    </div>






    <!-- FOOTER -->
    <div class="container-footer">

    </div>

    <!-- FOOTER END -->

    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/dropdown.js"></script>
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            var submitFormBtn = document.getElementById('submitFormBtn');
            var myForm = document.getElementById('topupform');

            submitFormBtn.addEventListener('click', function () {
                // Ambil data dari formulir
                var formData = new FormData(myForm);
                myForm.submit();

                // Kirim data ke server menggunakan Ajax
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            // Tanggapan dari server
                            console.log(xhr.responseText);
                        } else {
                            // Tanggapan error dari server
                            console.error('Error:', xhr.status);
                        }
                    }
                };
                xhr.open('POST', '../invoice/process_order.php'); // Ganti dengan URL file PHP yang akan membuat file PHP baru
                xhr.send(formData);
            });
        });

        $(document).ready(function () {
            // Listen for changes in the radio button selection
            $('.nominal-radio').change(function () {
                // Retrieve the selected radio button's value
                var selectedNominal = $(this).val();

                // Retrieve the corresponding price using the class 'nominal-price'
                var selectedPrice = $(this).siblings('label').find('.nominal-price').text().trim();


                // Update the hidden input field with the selected price
                $('#selectedItems').val(selectedNominal);
                $('#selectedPrice').val(selectedPrice);


                // Log the values (you can replace this with your desired logic)
                console.log("Selected Nominal: " + selectedNominal);
                console.log("Selected Price: " + selectedPrice);
            });
        });

        // function pwEye(icon) {
        //     var passwordField = document.getElementById("Password");
        //     if (passwordField.type === "password") {
        //         passwordField.type = "text";
        //         icon.classList.remove("fa-eye-slash");
        //         icon.classList.add("fa-eye");
        //     } else {
        //         passwordField.type = "password";
        //         icon.classList.remove("fa-eye");
        //         icon.classList.add("fa-eye-slash");
        //     }
        // }

        const checkboxes = document.querySelectorAll('input[type="checkbox"][name="nominal-checkbox"]');

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', function () {
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== this) {
                        otherCheckbox.checked = false;
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#autoModal').modal('show');
            $('#closeButton').click(function () {
                $('#autoModal').modal('hide');
            });

            $('#closeSpan').click(function () {
                $('#autoModal').modal('hide');
            });
        });

        let openedPaymentDrawer = null;

        function openPaymentDrawer(element) {
            const paymentDrawer = element.nextElementSibling;
            if (paymentDrawer) {
                const buttonActionPayment = paymentDrawer.querySelector('.button-action-payment');
                if (openedPaymentDrawer !== paymentDrawer) {
                    // Tutup laci yang terbuka sebelumnya, jika ada
                    if (openedPaymentDrawer) {
                        openedPaymentDrawer.style.display = 'none';
                        const prevButtonActionPayment = openedPaymentDrawer.querySelector('.button-action-payment');
                        if (prevButtonActionPayment) {
                            prevButtonActionPayment.style.display = 'none';
                        }
                    }

                    paymentDrawer.style.display = 'block';
                    if (buttonActionPayment) {
                        buttonActionPayment.style.display = 'block';
                    }
                    openedPaymentDrawer = paymentDrawer; // Menyimpan referensi ke laci yang terbuka
                } else {
                    // Laci yang sama diklik lagi, tutup
                    paymentDrawer.style.display = 'none';
                    if (buttonActionPayment) {
                        buttonActionPayment.style.display = 'none';
                    }
                    openedPaymentDrawer = null; // Menandakan bahwa laci sudah ditutup
                }
            }
        }

        // Ambil semua elemen radio dengan class nominal-radio
        var radios = document.querySelectorAll('.nominal-radio');

        // Loop melalui setiap radio button
        radios.forEach(function (radio) {
            // Tambahkan event listener untuk setiap radio button
            radio.addEventListener('change', function () {
                // Jika radio button dipilih
                if (this.checked) {
                    // Dapatkan nilai harga dari radio button yang dipilih
                    var price = this.getAttribute('data-price');
                    // Setel nilai dari input tersembunyi selectedPrice dengan nilai harga yang dipilih
                    document.getElementById('selectedPrice').value = price;
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            // Get all radio buttons with the name 'nominalOptions'
            var nominalRadioButtons = document.querySelectorAll('input[name="nominalOptions"]');

            // Get the payment drawer element
            var paymentDrawer = document.querySelector('.child-box.payment-drawwer');

            // Function to format number as Rupiah
            function formatRupiah(amount) {
                var numberString = amount.toString();
                var formattedNumber = numberString.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                return 'Rp ' + formattedNumber;
            }

            // Add event listener to each radio button
            nominalRadioButtons.forEach(function (radioButton) {
                radioButton.addEventListener('change', function () {
                    // Get the selected nominal price
                    var selectedNominal = this.parentElement.querySelector('.nominal-price').innerText;

                    // Remove dots and convert to integer
                    var nominalValue = parseInt(selectedNominal.replace(/\./g, ''));

                    // Format the nominal value as Rupiah
                    var formattedNominal = formatRupiah(nominalValue);

                    // Display the selected nominal price in the #selectedNominal element
                    document.getElementById('selectedNominal').innerText = formattedNominal;

                    // Enable the payment drawer
                    paymentDrawer.classList.remove('disabled');
                });
            });
        });

        $(document).ready(function () {
            // Tambahkan event listener untuk perubahan pada radio button dengan nama "paymentMethod"
            $('input[name="paymentMethod"]').change(function () {
                // Ambil nilai platform dari radio button yang dicheck
                var platform = $(this).siblings('label').find('.payment-platform').text().trim();

                $('#selectedPayments').val(platform);

                // Lakukan apa pun yang Anda inginkan dengan nilai platform
                console.log(platform);

                // Anda dapat menetapkan nilai platform ke elemen tertentu jika diperlukan
                // $('#selectedPlatform').val(platform);
            });
        });


        const form = document.getElementById('topupform');
        const checkoutButton = document.getElementById('checkoutButton');

        form.addEventListener('keyup', function () {

            const idgameInput = document.getElementById('idgame');
            const serverInput = document.getElementById('server');
            const itemsInput = document.getElementById('selectedItems');
            const paymentInput = document.getElementById('selectedPayments');
            const telpInput = document.getElementById('telp');
            const idgameValue = idgameInput.value.trim();
            const serverValue = serverInput.value.trim();
            const itemsValue = itemsInput.value.trim();
            const paymentValue = paymentInput.value.trim();
            const telpValue = telpInput.value.trim();

            checkoutButton.disabled = idgameValue === '' || serverValue === '' || itemsValue === '' || paymentValue === '' || telpValue === '';
        });


        $(document).ready(function () {
            // Membuat fungsi untuk menangani perubahan input
            function updateValues() {
                var ign = $('#ign').val();
                var idgame = $('#idgame').val();
                var server = $('#server').val();
                var item = $('#selectedItems').val();
                var payments = $('#selectedPayments').val();

                $('#ignValue').text(ign);
                $('#idValue').text(idgame);
                $('#idServerValue').text(server);
                $('#itemValue').text(item);
                $('#paymentsValue').text(payments);

                console.log(idgame);
            }

            // Menjalankan fungsi ketika ada perubahan pada input
            $('#ign, #idgame, #server, #selectedItems, #selectedPayments').on('change', function () {
                updateValues();
            });

            // Panggil fungsi pertama kali untuk menginisialisasi nilai
            updateValues();
        });




    </script>
</body>

</html>