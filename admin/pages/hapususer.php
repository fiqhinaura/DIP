<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_cst = $_GET['id_cst'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from customer where id_cst='$id_cst'");
 
// mengalihkan halaman kembali ke index.php
header("location:pengguna.php");
 
?>