<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id_reservasi = isset($_POST['id_reservasi']) ? $_POST['id_reservasi'] : '';
$nama_cst = isset($_POST['nama_cst']) ? $_POST['nama_cst'] : '';
$no_cst = isset($_POST['no_cst']) ? $_POST['no_cst'] : '';
$email_cst = isset($_POST['email_cst']) ? $_POST['email_cst'] : '';
$checkin = isset($_POST['checkin']) ? $_POST['checkin'] : '';
$checkout = isset($_POST['checkout']) ? $_POST['checkout'] : '';

$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
$bayar = isset($_POST['bayar']) ? $_POST['bayar'] : '';
$metode = isset($_POST['metode']) ? $_POST['metode'] : '';
$query = "INSERT INTO reservasi VALUES ('$id_reservasi', '$nama_cst', '$no_cst', '$email_cst', '$checkin', '$checkout', '$jenis', '$bayar', '$metode')";
mysqli_query($koneksi, $query);

// mengalihkan halaman kembali ke tabel reservasi
header("location:reservation.php");


?>
