<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$idbuku = $_GET['idbuku'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from BUKU where idbuku='$idbuku'");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
 
?>