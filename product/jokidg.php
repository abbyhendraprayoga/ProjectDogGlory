<?php
require "../session.php";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.php">
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
                            <a class="dropdown-item" href="../product.php">Product</a>
                            <a class="dropdown-item" href="#">Profile</a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="fas fa-search"> </i> Check Invoice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../sign/logout.php"
                            onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
        <!-- NAVBAR END -->
        <!-- Modal -->
        <div class="modal fade" id="autoModal" tabindex="-1" role="dialog" aria-labelledby="autoModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="autoModalLabel">PERHATIKAN!</h5>
                        <button type="button" class="close" id="closeSpan" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body auto-modal">
                        <b><span style="color:black;background:yellow">
                                SEBELUM ORDER JOKI HARAP PERHATIKAN
                            </span></b>
                        <p
                            style="font-size: 17px; color: black; margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                            <span>
                                <br>- PASTIKAN AKUN KALIAN BISA LOGIN / COBA DULU SENDIRI EMAIL PASS NYA BIAR GA
                                RIBET<br>
                            </span>
                            <span>
                                - MATIKAN CENTANG VERIFY / VERIFIKASI AKUN DI PENGATURAN<br>
                                - Matikan Verifikasi Akun untuk mempermudah penjoki login<br>
                                - Jika login tanpa izin, proses joki akan dibatalkan dan uang akan hangus<br>
                                - Dimohon menunggu sesuai estimasi dan jangan spam admin<br>
                                - Jika ada problem saat login akun, admin akan segera menghubungi<br>
                                - Jika menemukan adanya penjoki yang menawarkan jasa joki di luar instagram resmi
                                @dogglory atau nomor WA RESMI dog glory silahkan dilaporkan untuk menghindari penipuan
                                dan costumer akan mendapatkan jasa joki gratis<br>
                                - Waspada penipuan, admin tidak akan meminta pembayaran/pengisian data apapun melalui
                                whatsapp. Semua proses transaksi hanya melalui website dogglory.com</span>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeButton" class="btn btn-primary fadeIn">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- CONTENT 1 -->
            <div class="col-lg-4 mt-2 mb-2 info-container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-white shadow">
                            <div class="card-body">
                                <img src="https://ourastore.com/assets/img/1671684964ezgif.com-gif-maker (23).jpg"
                                    alt="" class="shadow rounded bg-dark mx-auto mb-2 d-lg-block d-none" width="150">
                                <div class="row">
                                    <div class="col">
                                        <h3>Joki Rank Eceran</h3>
                                        <div class="strip-primary"></div><br>
                                        <img src="https://ourastore.com/assets/img/1671684964ezgif.com-gif-maker (23).jpg"
                                            alt=""
                                            class="shadow rounded bg-dark float-start mt-2 me-2 mb-0 d-lg-none d-block"
                                            width="45">
                                        <div class="rounded-xl bg-secondary-500 shadow-2xl dark:bg-secondary-700">
                                            <div
                                                class="prose prose-sm appearance-none px-4 py-2 pb-8 text-xs text-text-color sm:px-6">
                                                <div>
                                                    <p>Top up ML diamond Mobile Legends harga paling murah. Cara topup
                                                        MLBB termurah :</p>
                                                    <ol>
                                                        <li>Lengkapi Data Joki dengan Teliti</li>
                                                        <li>Pilih Paket Joki</li>
                                                        <li>Pilih Metode Pembayaran</li>
                                                        <li>Tulis nomor WhatsApp yg benar!</li>
                                                        <li>Klik ORDER NOW & lakukan Pembayaran</li>
                                                        <li>Admin akan menginformasikan melalui Whatsapp saat jokian
                                                            dikerjakan/selesai</li>
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
                                <h5 class="card-title">Lengkapi Data</h5>
                            </div>
                            <div class="card-body">
                                <div id="userData">
                                    <div class="row row-cols row-cols-md">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Email">Email</label>
                                                <input class="form-control" placeholder="Masukkan Email" type="text"
                                                    name="Email" id="Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Password">Password</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" name="Password" id="Password"
                                                        class="form-control" placeholder="Masukkan Password"
                                                        required="">
                                                    <span class="input-group-text">
                                                        <i class="far fa-eye-slash" id="togglePassword"
                                                            style="cursor: pointer"
                                                            onclick="if (!window.__cfRLUnblockHandlers) return false; pwEye(this);"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Login">Login</label>
                                                <select name="Login" id="Login" class="form-select">
                                                    <option value="-">Login Via</option>
                                                    <option value="Moonton">Moonton (Rekomendasi)</option>
                                                    <option value="VK">VK</option>
                                                    <option value="Tiktok">Tiktok</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Nickname">Nickname</label>
                                                <input class="form-control" placeholder="Masukkan Nickname" type="text"
                                                    name="Nickname" id="Nickname" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Request">Request</label>
                                                <input class="form-control"
                                                    placeholder="Min Request 3 Hero (Diusahakan)" type="text"
                                                    name="Request" id="Request" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Catatan">Catatan</label>
                                                <input class="form-control" placeholder="Catatan untuk Penjoki"
                                                    type="text" name="Catatan" id="Catatan" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#petunjukModal">Petunjuk</button>
                            </div>
                        </div>
                        <div style="margin-top: 20px;" class="card bg-white shadow">
                            <div class="card-header">
                                <h5 class="card-title">Pilih Nominal</h5>
                            </div>
                            <div class="card-body">
                                <div id="tempatNominal">
                                    <div class="row row-cols-2">
                                        <?php
                                        $nominals = [
                                            [
                                                'name' => 'Master/Bintang',
                                                'price' => 'Rp 4.000',
                                                'image' => '../assets/ranks/Master.png',
                                            ],
                                            [
                                                'name' => 'Grandmaster/Bintang',
                                                'price' => 'Rp 5.000',
                                                'image' => '../assets/ranks/Grandmaster.png',
                                            ],
                                            [
                                                'name' => 'Epic/Bintang',
                                                'price' => 'Rp 7.000',
                                                'image' => '../assets/ranks/Epic.png',
                                            ],
                                            [
                                                'name' => 'Legend/Bintang',
                                                'price' => 'Rp 8.000',
                                                'image' => '../assets/ranks/Legend.png',
                                            ],
                                            [
                                                'name' => 'Mythic/Bintang',
                                                'price' => 'Rp 18.000',
                                                'image' => '../assets/ranks/Mythic.png',
                                            ],
                                            [
                                                'name' => 'Mythic Honor/Bintang',
                                                'price' => 'Rp 20.000',
                                                'image' => '../assets/ranks/Mythical_Honor.png',
                                            ],
                                            [
                                                'name' => 'Mythic Glory/Bintang',
                                                'price' => 'Rp 25.000',
                                                'image' => '../assets/ranks/Mythical_Glory.png',
                                            ],
                                            [
                                                'name' => 'Mythic Immortal/Bintang',
                                                'price' => 'Rp 30.000',
                                                'image' => '../assets/ranks/Mythical_Immortal.png',
                                            ],
                                        ];

                                        foreach ($nominals as $nominal) {
                                            ?>
                                            <div class="col-lg-4 mt-3">
                                                <div class="list-group shadow h-100">
                                                    <input type="radio" name="nominalOptions"
                                                        id="nominal-<?php echo $nominal["name"]; ?>"
                                                        value="<?php echo $nominal["name"]; ?>" data-type="diamond">
                                                    <label for="nominal-<?php echo $nominal["name"]; ?>"
                                                        class="list-group-item h-100">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col name-prod">
                                                                        <?php echo $nominal["name"]; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col nominal-price">
                                                                        <?php echo $nominal["price"]; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-1 m-auto">
                                                                <img src="<?php echo $nominal["image"]; ?>" width="40"
                                                                    style="top: 20%; right: 5%; position: absolute;" alt="">
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 20px;" class="card bg-white shadow">
                            <div class="card-header">
                                <h5 class="card-title">Masukkan Jumlah Bintang</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="number" name="qty" id="qty" class="form-control" value="1"
                                                required="" min="1"
                                                oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                                            <label for="qty">Minimal Order 3 Bintang, Jika Kurang Uang dianggap
                                                Hangus</label>
                                        </div>
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
                                            [
                                                'id' => 'BPAYMO-bri',
                                                'name' => 'Bank Transfer',
                                                'platform' => 'BRI',
                                                'image' => '../assets/payment/BRI.png',
                                                'description' => 'Dicek Setiap 3 Menit',
                                            ],
                                            [
                                                'id' => 'faspay-ShopeePay',
                                                'name' => 'E-Wallet',
                                                'platform' => 'ShopeePay',
                                                'image' => '../assets/payment/Shopeepay.png',
                                                'description' => 'Dicek Otomatis',
                                            ],
                                        
                                        ];

                                        foreach ($paymentMethods as $method) {
                                            ?>
                                            <div style="width : 60rem;" class="child-box payment-drawwer shadow">
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
                                                <div class="button-action-payment" style="display: none;">
                                                    <div class="row row-cols-2 row-cols-md-3 p-1">
                                                        <div class="col-lg-4 p-1 tfbank" id="paymentitems">
                                                            <div class="list-group1 h-100">
                                                                <input type="radio" name="paymentMethod"
                                                                    id="paymentMethod-<?php echo $method['id']; ?>"
                                                                    value="<?php echo $method['id']; ?>" data-fee="0"
                                                                    data-fee-percent="0">
                                                                <label for="paymentMethod-<?php echo $method['id']; ?>"
                                                                    class="list-group-item h-100">
                                                                    <div class="info-top">
                                                                        <div>
                                                                            <img src="<?php echo $method['image']; ?>"
                                                                                height="10px">
                                                                        </div>
                                                                        <b class="d-lg-none d-md-none" id="payment"
                                                                            style="font-size: 9.94px;"></b>
                                                                        <b class="d-none d-md-block" id="payment"
                                                                            style="font-size: 11px;"></b>
                                                                    </div>
                                                                    <div class="info-bottom">
                                                                        <?php echo $method['platform']; ?>
                                                                        <div class="dg-dicek">
                                                                            <?php echo $method['description']; ?>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script>
        function pwEye(icon) {
            var passwordField = document.getElementById("Password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                passwordField.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        }

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

        let openedPaymentDrawer = null; // Menyimpan referensi ke laci pembayaran yang terbuka

        function openPaymentDrawer(element) {
            const paymentDrawer = element.nextElementSibling;
            if (paymentDrawer) {
                const buttonActionPayment = paymentDrawer.querySelector('.button-action-payment');
                if (paymentDrawer.style.display === 'block') {
                    paymentDrawer.style.display = 'none';
                    if (buttonActionPayment) {
                        buttonActionPayment.style.display = 'none';
                    }
                    openedPaymentDrawer = null; // Menandakan bahwa laci sudah ditutup
                } else {
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
                }
            }
        }
    </script>
</body>

</html>