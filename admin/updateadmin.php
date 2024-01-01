<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
 
// update data ke database
mysqli_query($koneksi,"update admin set username='$username', email='$email', firstname='$firstname', lastname='$lastname' where username='$username'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>