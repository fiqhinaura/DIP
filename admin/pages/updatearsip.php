<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_arsip = $_POST['id_arsip'];
$nama_cst = $_POST['nama_cst'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$metode = $_POST['metode'];
$status = $_POST['status'];
 
// update data ke database
mysqli_query($koneksi,"update arsip set id_arsip='$id_arsip', nama_cst='$nama_cst', checkin='$checkin', checkout='$checkout', metode='$metode', status='$status' where id_arsip='$id_arsip'");
 
// mengalihkan halaman kembali ke index.php
header("location:arsip.php");
 
?>