<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_bayar = $_POST['id_bayar'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$metode = $_POST['metode'];
$total = $_POST['total'];
 
// update data ke database
mysqli_query($koneksi,"update bayar set id_bayar='$id_bayar', nama='$nama', email='$email', metode='$metode', total='$total' where id_bayar='$id_bayar'");
 
// mengalihkan halaman kembali ke index.php
header("location:billing.php");
 
?>