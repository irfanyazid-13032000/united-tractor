<?php
// Panggil koneksi dan fungsi hapus dari database.php
require_once 'database.php';

// Buat objek database
$db = new database();

// Periksa apakah ada parameter ID yang dikirimkan
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Panggil metode hapus() untuk menghapus data
    $db->hapus($id);

    // Redirect kembali ke halaman tampil.php setelah penghapusan
    header("Location: tampil.php");
    exit;
} else {
    // Jika tidak ada parameter ID, redirect kembali ke halaman tampil.php
    header("Location: tampil.php");
    exit;
}
?>
