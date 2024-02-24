<?php
  include 'header.php';
  session_start();

  if($_SESSION['Level']==""){
    header("location:../index.php");
  }
?>
    <main class="mt-1 ">
      <?php
      include '../koneksi/koneksi.php';

      $buku = mysqli_query($koneksi, "SELECT * FROM buku");
      $user = mysqli_query($koneksi, "SELECT * FROM user");
      $peminjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");

      $b = mysqli_num_rows($buku);
      $u = mysqli_num_rows($user);
      $p = mysqli_num_rows($peminjaman);
      ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4 class="my-2">Dashboard - Admin</h4>
          </div>
        </div>
        <div class="row justify-content-center ">
          <div class="col-6 col-md-3 mb-5 pb-1">
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-3">
                <h3>Data Buku</h>
                <h1><?php echo $b;?></h1>
              </div>
              <a href="buku.php" class="card-footer btn d-flex bg-dark ">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-5 pb-1">
            <div class="card text-dark h-100">
              <div class="card-body bg-warning py-3">
                <h2>Data Anggota</h2>
                <h1><?php echo $u;?></h1>
              </div>
              <a href="anggota.php" class="card-footer btn d-flex bg-dark text-white">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-5 pb-1">
            <div class="card bg-success text-white ">
              <div class="card-body py-3">
                <h2>Data Peminjam</h2>
                <h1><?php echo $p;?></h1>
              </div>
              <a href="peminjam.php" class="card-footer btn d-flex bg-dark">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-5 pb-1">
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-3">
                <h2>Data Laporan</h2>
                <h1>21</h1>
              </div>
              <a href="laporan.php" class="card-footer btn d-flex bg-dark">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container card">
        <div class="content">
          <div class="left-content">
            <h3>selamat datang</h3>
            <h5>dihalaman perpustakaan digitalibary</h5>
            <h6>
                  <span class="multi-text blue-span"></span>
            </h6>
          </div>
          <div class="right-content">
            <img src="../assets/img/login-bro.png" width="300" alt="">
          </div>
        </div>
      </div>
    </main>


  <?php
  include 'footer.php';
?>