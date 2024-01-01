<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_reservasi = $_POST['id_reservasi'];
$nama = $_POST['nama'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$jenis = $_POST['jenis'];
 
// update data ke database
mysqli_query($koneksi,"update reservasi_admin set id_reservasi='$id_reservasi', nama='$nama', checkin='$checkin', checkout='$checkout', jenis='$jenis' where id_reservasi='$id_reservasi'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>