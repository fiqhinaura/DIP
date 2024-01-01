<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_cst = $_POST['id_cst'];
$nama_cst = $_POST['nama_cst'];
$email_cst = $_POST['email_cst'];
$nohp_cst = $_POST['nohp_cst'];
 
// update data ke database
mysqli_query($koneksi,"update customer set id_cst='$id_cst', nama_cst='$nama_cst', email_cst='$email_cst', nohp_cst='$nohp_cst' where id_cst='$id_cst'");
 
// mengalihkan halaman kembali ke index.php
header("location:pengguna.php");
 
?>