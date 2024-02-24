<?php
  include 'header.php';
  session_start();

  if($_SESSION['Level']==""){
    header("location:../index.php");
  }
?>
<div class="container" style="margin-top: 2rem;">
<div class="row grid gap-3">
<h4>DAFTAR BUKU</h4>

    <?php 
    include '../koneksi/koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM buku Order by idbuku asc" );

    while ($d = mysqli_fetch_array($data)){

    ?>
    
        <div class="card p-2 g-col-6" style="width: 14rem;">
        <img src="<?php echo"../petugas/assets/Sampul/$d[Foto]"?>" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $d['Judul']?></h5>
                <h6>Tahun Terbit : <?php echo $d['TahunTerbit']?></h6>
                <a href="data/detail.php?idbuku=<?php echo $d['idbuku'];?>" class="btn btn-warning">Detail</a>
                <a href="data/pinjam_buku.php?idbuku=<?php echo $d['idbuku'];?>" class="btn btn-primary">pinjam</a>
              </div>
        </div>
        <?php
          }
          ?>
    </div>
</div>


  <?php
  include 'footer.php';
?>