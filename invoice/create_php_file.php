<?php
// Ambil data dari formulir
$data = $_POST['data'];

// Buat file PHP baru dengan data yang diterima
$file_content = "<?php echo 'Data yang diterima: ' . \$data; ?>";
$file_name = 'new_file.php'; // Nama file PHP baru
$file_path = '../invoice/' . $file_name; // Sesuaikan dengan path proyek Anda

// Tulis data ke file
file_put_contents($file_path, $file_content);

// Beri respon ke JavaScript
echo 'File PHP baru berhasil dibuat: ' . $file_name;
?>