<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id_cst = $_POST ['id_cst'];
$nama_cst = $_POST ['nama_cst'];
$email_cst = $_POST ['email_cst'];
$nohp_cst = $_POST ['nohp_cst'];

//menginput data ke database
mysqli_query($koneksi,"insert into customer values('$id_cst','$nama_cst','$email_cst','$nohp_cst')");

// //mengalihkan halaman kembali ke index.php
header("location:pengguna.php");
?>