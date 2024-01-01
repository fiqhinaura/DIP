<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_arsip = $_GET['id_arsip'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from arsip where id_arsip='$id_arsip'");
 
// mengalihkan halaman kembali ke index.php
header("location:arsip.php");
 
?>