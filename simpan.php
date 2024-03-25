<?php
// Panggil koneksi dan fungsi simpan dari database.php
require_once 'database.php';

// Buat objek database
$db = new database();

// Pastikan data nama telah dikirim dari formulir
if(isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    // Panggil metode simpan() untuk menyimpan data
    $db->simpan($nama,$umur,$alamat);

    // Redirect kembali ke halaman form.php setelah penyimpanan
    header("Location: form.php");
    exit;
} else {
    // Jika data tidak dikirim, redirect kembali ke halaman form.php
    header("Location: form.php");
    exit;
}
?>
