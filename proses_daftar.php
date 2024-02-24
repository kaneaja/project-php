<?php 
// koneksi database
include '../digitalibary/koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$Level = $_POST['Level'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into user (username, password, Email, NamaLengkap, Alamat, Level)
                    values('$username','$password','$Email','$NamaLengkap','$Alamat','$Level')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>