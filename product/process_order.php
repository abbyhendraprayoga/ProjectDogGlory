<?php
session_start();
if ($_SESSION['userid'] == false) {
    header("location: ../sign/login.php");
}
require "../koneksi.php";

try {
    if (!isset($_SESSION['userid'])) {
        throw new Exception("User belum login.");
    }

    // Ambil userid dari sesi
    $userid = $_SESSION['userid'];

    $query_username = "SELECT username FROM users WHERE userid = ?";
    $stmt_username = $conn->prepare($query_username);
    $stmt_username->bind_param("i", $userid);
    $stmt_username->execute();
    $stmt_username->bind_result($username);

    // Ambil hasil query
    $stmt_username->fetch();

    // Tutup statement
    $stmt_username->close();

    // Insert data ke tabel orders
    $ign = ($_POST["ign"]);
    $idgame = ($_POST["idgame"]);
    $server = ($_POST["server"]);
    $item = ($_POST["selectedItems"]);
    $nominal = ($_POST["selectedPrice"]);
    $payment = ($_POST["selectedPayments"]);
    $telp = ($_POST["telp"]);
    $kdpemesanan = generateOrderCode();

    $query_insert = "INSERT INTO orders (userid, username, ign, idgame, server, item, nominal, payment, telp, kdpemesanan) 
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($query_insert);
    $stmt_insert->bind_param("isssssssss", $userid, $username, $ign,  $idgame, $server, $item, $nominal, $payment, $telp, $kdpemesanan);
    $stmt_insert->execute();

    $stmt_insert->close();

    $conn->close();

    // Buat file PHP baru
    $file_name = $kdpemesanan . '.php';
    $file_path = '../invoice/' . $file_name; // Sesuaikan dengan path proyek Anda
    $invoice_file = '../invoice/invoice.php';

    // Tulis data dari formulir ke dalam file PHP baru
    $file_content = "<?php\n";
    $file_content .= "\$kdpemesanan = \"$kdpemesanan\";\n";
    $file_content .= "\$ign = \"$ign\";\n";
    $file_content .= "\$idgame = \"$idgame\";\n";
    $file_content .= "\$server = \"$server\";\n";
    $file_content .= "\$ign = \"$ign\";\n";
    $file_content .= "\$item = \"$item\";\n";
    $file_content .= "\$nominal = \"$nominal\";\n";
    $file_content .= "\$payment = \"$payment\";\n";
    $file_content .= "\$telp = \"$telp\";\n";
    $file_content .= "?>\n";
    $file_content .= file_get_contents($invoice_file);

    file_put_contents($file_path, $file_content);

    header("Location: ../invoice/$file_name");
    exit();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

function generateOrderCode()
{
    $prefix = "DG-";
    $suffix = rand(10000, 99999);
    $orderCode = $prefix . $suffix;
    return $orderCode;
}
?>
