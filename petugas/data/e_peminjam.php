<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$UserID= $_POST['UserID'];
$idbuku= $_POST['idbuku'];
$Nama= $_POST['Nama'];
$TanggalPeminjaman= $_POST['TanggalPeminjaman'];
$TanggalPengembalian= $_POST['TanggalPengembalian'];
$StatusPeminjaman= $_POST['StatusPeminjaman'];
$idp= $_POST['PeminjamanID'];

mysqli_query ($koneksi,"UPDATE peminjaman set UserID='$UserID', idbuku='$idbuku', Nama='$Nama', TanggalPeminjaman='$TanggalPeminjaman', 
TanggalPengembalian='$TanggalPengembalian', StatusPeminjaman='$StatusPeminjaman' WHERE PeminjamanID='$idp'");
 
// mengalihkan halaman kembali ke index.php
header("location:../peminjam.php");
 
?>