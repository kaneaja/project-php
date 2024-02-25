<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$idp = $_GET['idp'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE from peminjaman where PeminjamanID='$idp'");
 
// mengalihkan halaman kembali ke index.php
header("location:../peminjam.php");
 
?>