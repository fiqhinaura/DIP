<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_bayar = $_GET['id_bayar'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from bayar where id_bayar='$id_bayar'");
 
// mengalihkan halaman kembali ke index.php
header("location:billing.php");
 
?>