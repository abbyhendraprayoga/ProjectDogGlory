<?php
// Konfigurasi koneksi database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dogglory";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Proses form Sign Up
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array(); // Menyimpan pesan error

    // Memeriksa jika semua field telah diisi
    if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        $errors[] = "Mohon isi semua field pada form pendaftaran.";
    } else {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        // $gender = $_POST["gender"];

        // Menyiapkan pernyataan SQL
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            ?>
            <!DOCTYPE html>
            <html>

            <head>
                <title>Pendaftaran Berhasil • Acikkoyak</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="../css/sign.css">
                <link rel="icon" href="../assets/icon/acyorganitation.png" type="image/x-icon">
                <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
            </head>

            <body>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-6">
                            <div class="signup-container">
                                <img src="../assets/icon/acyorganitation.png" alt="Logo" class="logo">
                                <div class="success-message">
                                    <h2>Pendaftaran Berhasil!</h2>
                                    <p>Anda telah berhasil mendaftar. Silakan <a href="login.php">Masuk</a> dengan akun yang sudah
                                        dibuat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </body>

            </html>

            <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Menampilkan pesan error jika ada
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

// Menutup koneksi database
$conn->close();
?>