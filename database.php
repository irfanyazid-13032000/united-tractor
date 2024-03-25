<?php 
class database{
  var $host = "localhost";
  var $username = "root";
  var $pass = "iyacorp123";
  var $db = "db_akademik";

  function __construct(){
   // Menggunakan mysqli untuk koneksi ke database
   $this->conn = new mysqli($this->host, $this->username, $this->pass, $this->db);
   // Check koneksi
   if ($this->conn->connect_error) {
     die("Koneksi database gagal: " . $this->conn->connect_error);
   }
  }


  function tampil(){
    $data = array(); // Inisialisasi array untuk menampung data

    // Query untuk mengambil data dari tabel mahasiswa
    $sql = "SELECT * FROM mahasiswa"; // Ganti 'mahasiswa' dengan nama tabel yang sesuai
    $result = $this->conn->query($sql);

    if ($result->num_rows > 0) {
        // Memasukkan setiap baris data ke dalam array
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data; // Mengembalikan array data
}


function simpan($nama, $umur, $alamat){
  // Escape input untuk mencegah serangan SQL Injection
  $nama = $this->conn->real_escape_string($nama);
  $umur = $this->conn->real_escape_string($umur);
  $alamat = $this->conn->real_escape_string($alamat);

  // Query untuk menyimpan data ke dalam tabel
  $sql = "INSERT INTO nama_tabel (nama, umur, alamat) VALUES ('$nama', '$umur', '$alamat')"; // Ganti 'nama_tabel' dengan nama tabel yang sesuai
  if ($this->conn->query($sql) === TRUE) {
      echo "Data berhasil disimpan";
  } else {
      echo "Error: " . $sql . "<br>" . $this->conn->error;
  }
}


  function hapus($id){
    // Query untuk menghapus data dari tabel berdasarkan ID
    $sql = "DELETE FROM mahasiswa WHERE id = $id"; // Ganti 'nama_tabel' dengan nama tabel yang sesuai
    if ($this->conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
}


}



?>