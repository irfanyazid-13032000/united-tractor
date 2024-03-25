<?php
// Panggil koneksi dan fungsi simpan dari database.php
require_once 'database.php';

// Buat objek database
$db = new database();

// Pastikan data nama telah dikirim dari formulir
if(isset($_POST['nama'])) {
    $nama = $_POST['nama'];

    // Panggil metode simpan() untuk menyimpan data
    $db->simpan($nama);

    // Redirect kembali ke halaman form.php setelah penyimpanan
    header("Location: form.php");
    exit;
} else {
    // Jika data tidak dikirim, redirect kembali ke halaman form.php
    header("Location: form.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Data Mahasiswa</h1>
    <form action="simpan.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama">

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat">


        <label for="umur">Umur:</label><br>
        <input type="text" id="umur" name="umur">


        <input type="submit" value="Simpan">
    </form>
</body>
</html>
