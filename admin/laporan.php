<?php
  include 'header.php';
  session_start();

  if($_SESSION['Level']==""){
    header("location:../index.php");
  }
?>
    <main class="mt-1 ">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <h4 class="my-2">Dashboard - Laporan</h4>
            </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-1">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body py-5">
                            <h2>Laporan Data Buku</h2>
                        </div>
                        <a href="data/laporan_db.php" class="card-footer btn d-flex bg-dark ">
                            View Details
                            <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-1">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body py-5">
                            <h2>Laporan Data Anggota</h2>
                        </div>
                        <a href="data/laporan_da.php" class="card-footer btn d-flex bg-dark text-white">
                            View Details
                            <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-1">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body py-5">
                            <h2>Laporan Peminjam</h2>
                        </div>
                        <a href="data/laporan_dp.php" class="card-footer btn d-flex bg-dark">
                            View Details
                            <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>


  <?php
  include 'footer.php';
?>