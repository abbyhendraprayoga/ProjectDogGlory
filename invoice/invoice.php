
<!DOCTYPE html>
<html>

<head>
    <title>Dog Glory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/icon/acyorganitation.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/invoice.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<style>

</style>

<body>
    <div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../index.php">
                <img src="../assets/icon/acyorganitation.png" alt="Acikkoyak Logo" class="logo" width="40" height="40">
                <i>Acikkoyak</i>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../adminpanel/dashboard.php"> <i class="far fa-chart-bar"> </i>
                            Dashboard</a>
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
        <!-- NAVBAR END -->
        <!-- CONTENT 1 -->
        <div class="container">
            <div
                class="row flex-column-reverse flex-md-row gap-0 gap-md-8 justify-content-between items-start align-items-md-end">
                <div class="col-md-8">
                    <h5 class="text-base font-semibold text-text-color " style="font-size: 20px;">Terima Kasih!</h5>
                    <h1 class="mt-2 text-4xl font-bold tracking-tight text-text-color"><b>Harap lengkapi pembayaran.</b>
                    </h1>
                    <p class="mt-2 text-base text-text-color invoice">Pesanan kamu <span id="invoiceNumber"
                            class="font-bold text-text-color"><b>
                                <?php echo $kdpemesanan; ?>
                            </b></span> menunggu pembayaran
                        sebelum di proses.</p>
                </div>
                <div class="col-md-8" style="margin-bottom: 10px;">
                    <span>Pesanan ini akan kedaluwarsa pada</span>
                </div>
            </div>
            <div>
                <span class="timestamp text-bg-danger p-2 shadow"
                    style="width : 20.1rem; height : 1rem; box-sizing: border-box; border-radius: 5px; text-align: center; font-size : 14px;"
                    id="hitung-mundur"></span>
            </div>
            <hr>
            <table>
                <tr>
                    <td width="170px">
                        <img src="https://vygaming.id/_next/image?url=https%3A%2F%2Fclient-cdn.bangjeff.com%2F89a7617d-2f9d-4e12-82d3-93e9cb2d6c95.webp&w=1920&q=75"
                            alt="" width="145px" height="210px" style="border-radius : 10px;">
                    </td>
                    <td>
                        <table>
                            <tr>
                                <th width="600px">Mobile Legends</th>
                                <th width="600px">Metode Pembayaran</th>
                            </tr>
                            <tr style="font-size : 14px;">
                                <td>
                                    <?php echo $item; ?>
                                </td>
                                <td>
                                    <?php echo $payment; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><br></td>
                                <td>
                                    <hr>
                                </td>
                            </tr>
                            <tr style="font-size : 14px;">
                                <td><b>Nickname:</b>
                                    <?php echo $ign; ?>
                                </td>
                                <td><b>Kode Pemesanan:</b>
                                    <?php echo $kdpemesanan; ?>
                                </td>
                            </tr>
                            <tr style="font-size : 14px;">
                                <td><b>ID:</b>
                                    <?php echo $idgame; ?>
                                </td>
                                <td><b>Status Transaksi:</b>
                                    <?php echo $status; ?>
                                </td>
                            </tr>
                            <tr style="font-size : 14px;">
                                <td><b>Server:</b>
                                    <?php echo $server; ?>
                                </td>
                                <td><b>Status Pembayaran:</b>
                                    <?php echo $statuspay; ?>
                                </td>
                            </tr>
                            <tr style="font-size : 14px;">
                                <td><br></td>
                                <td><b>Pesan:</b>
                                    <?php echo $pesan; ?>
                                </td>
                            </tr>
                            <tr style="font-size : 14px;">
                                <td><br></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p class="d-inline-flex gap-1" style="margin-top: 20px;">
                <button class="btn btn-secondary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"
                    style="width: 42rem; height: auto; text-align: left; font-weight: bold;">
                    <table>
                        <tr>
                            <td width="650px">Rincian pembayaran</td>
                            <td style="text-align: right;"><i class='fas fa-angle-down'></i></td>
                        </tr>
                    </table>
                </button>
                <a target="_blank" href="https://shopee.co.id"><button class="btn btn-primary" type="button"
                        style="width: 25rem; height: auto; margin-left: 55px; font-weight: bold;">
                        Klik disini untuk melakukan pembayaran <i class='fas fa-money-bill-wave'
                            style='font-size:13px'></i>
                    </button></a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body" style="width: 42rem; height: auto; margin-bottom: 20px;">
                    <table>
                        <tr style="font-size : 15px; color: black;">
                            <td width="560px">Harga</td>
                            <td style="text-align: right;">Rp
                                <?php echo $nominal; ?>
                            </td>
                        </tr>
                        <tr style="font-size : 15px; color: black;">
                            <td>Jumlah</td>
                            <td style="text-align: right;">1 qty</td>
                        </tr>
                        <tr style="font-size : 15px; color: black;">
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
                        <tr style="font-size : 15px; color: black;">
                            <td>Subtotal</td>
                            <td style="text-align: right;">Rp
                                <?php echo $nominal; ?>
                            </td>
                        </tr>
                        <tr style="font-size : 15px; color: black;">
                            <td>Kode Unik</td>
                            <td style="text-align: right;">Rp 76</td>
                        </tr>
                        <tr style="font-size : 15px; color: black;">
                            <td>Biaya</td>
                            <td style="text-align: right;">Rp 40</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div style="margin-bottom: 20px;">
                <table>
                    <tr style="font-size : 25px; color: black; font-weight:bold;">
                        <td width="500px">Total Pembayaran</td>
                        <td><input type="text" value="Rp <?php echo $nominal ?>" name="totalHarga" id="totalHarga"
                                style="width: 170px; border-radius: 10px; cursor: pointer; font-weight:bold; text-align: center;"
                                readonly></td>
                    </tr>
                </table>
            </div>
            <div class="alert alert-warning" style="width: 670px;">
                <div>
                    <ol>
                        <li>Klik tombol lanjutkan pembayaran</li>
                        <li>Anda akan dipindah ke Halaman SHOPEE</li>
                        <li>Pastikan saldo anda cukup</li>
                        <li>Pastikan akun shopee anda sudah premium</li>
                        <li>Pilih transfer lalu pilih kontak dan masukan nomor 082145533726</li>
                        <li>Masukan nominal sesuai dengan Total Pembayaran</li>
                        <li>Tunggu admin memverifikasi pembayaran dan diamond akan
                            dikirim admin</li>
                    </ol>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../js/dropdown.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Tentukan waktu sekarang
            var sekarang = new Date().getTime();

            // Tentukan waktu 1 jam dari sekarang
            var satuJamKemudian = new Date(sekarang);
            satuJamKemudian.setHours(satuJamKemudian.getHours() + 1);

            // Update hitung mundur setiap 1 detik
            var x = setInterval(function () {
                // Dapatkan waktu saat ini
                var sekarang = new Date().getTime();

                // Hitung selisih waktu antara waktu sekarang dan waktu 1 jam kemudian
                var selisih = satuJamKemudian - sekarang;

                // Hitung mundur hari, jam, menit, dan detik
                var jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
                var detik = Math.floor((selisih % (1000 * 60)) / 1000);

                // Tampilkan hitung mundur dalam elemen dengan id "hitung-mundur"
                document.getElementById("hitung-mundur").innerHTML = "" + jam + " hours, " + menit + " minutes, " + detik + " seconds left";

                // Jika waktu telah berakhir, tampilkan pesan
                if (selisih < 0) {
                    clearInterval(x);
                    document.getElementById("hitung-mundur").innerHTML = "Waktu telah berakhir!";
                }
            }, 1000); // Update setiap 1 detik
        </script>

</body>

</html>