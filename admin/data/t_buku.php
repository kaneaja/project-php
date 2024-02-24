<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$Judul      = $_POST['Judul'];
$Penulis    = $_POST['Penulis'];
$Penerbit   = $_POST['Penerbit'];
$TahunTerbit= $_POST['TahunTerbit'];
$Foto       = $_FILES['Foto']['name'];
$file_tmp   = $_FILES ['Foto']['tmp_name'];
$ekstensi =  array('png','jpg','jpeg','gif');

 
// menginput data ke database
move_uploaded_file($file_tmp, '../assets/Sampul/' .$Foto);

mysqli_query ($koneksi,"INSERT into buku values('', '$Judul','$Penulis','$Penerbit','$TahunTerbit','$Foto')");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
 
?>