<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id_arsip = $_POST ['id_arsip'];
$nama_cst = $_POST ['nama_cst'];
$checkin = $_POST ['checkin'];
$checkout = $_POST ['checkout'];
$metode = $_POST ['metode'];
$status = $_POST ['status'];

//menginput data ke database
mysqli_query($koneksi,"insert into arsip values('$id_arsip','$nama_cst','$checkin','$checkout','$metode','$status')");

// //mengalihkan halaman kembali ke index.php
header("location:arsip.php");
?>