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
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into peminjaman (UserID, idbuku, Nama, TanggalPeminjaman, TanggalPengembalian, StatusPeminjaman)
                    values('$UserID','$idbuku','$Nama','$TanggalPeminjaman','$TanggalPengembalian','$StatusPeminjaman')");
 
// mengalihkan halaman kembali ke index.php
header("location:../peminjam.php");
 
?>