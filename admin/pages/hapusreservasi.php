<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_reservasi = $_GET['id_reservasi'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from reservasi_admin where id_reservasi='$id_reservasi'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>