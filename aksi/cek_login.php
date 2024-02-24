<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['Level'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$password' and Level='$level'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['Level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['Level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../admin/index_adm.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['Level']=="petugas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['Level'] = "petugas";
		// alihkan ke halaman dashboard pegawai
		header("location:../petugas/index_pts.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['Level']=="anggota"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['Level'] = "anggota";
		// alihkan ke halaman dashboard pengurus
		header("location:../anggota/index_angt.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:../index.php?pesan=gagal");
	}	
}else{
	header("location:../index.php?pesan=gagal");
}
 
?>