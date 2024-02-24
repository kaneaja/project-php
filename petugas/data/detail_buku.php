<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Library</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/anggota.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php
  session_start();

  if($_SESSION['Level']==""){
    header("location:../../index.php");
  }
?>


    <div class="container detail" style="margin-top: 5rem;">
        <div class="card"> 
            <div class="row m-4">
              <?php
                  include '../../koneksi/koneksi.php';

                  if (isset($_GET['idbuku'])){
                    $idbuku = $_GET['idbuku'];
                  }else{
                    die('data erorr');
                  }
                  $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$idbuku' ");
                  $result = mysqli_fetch_array($query);
              ?>
              <div class="col text-center" >
                <img src="<?php echo"../assets/Sampul/$result[Foto]"?>" height="500" alt="">
              </div>
              <div class="col" style="margin-top: 5rem;">
                    <h2>detail buku</h2>
                  <a href="../buku.php" class="btn btn-danger">Kembali</a><hr>
                    <table>
                          <tr>
                            <td><h5>ID Buku</h5></td>
                            <td><h5>: <?php echo $result['idbuku'];?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Judul Buku</h5></td>
                            <td><h5>: <?php echo $result['Judul'];?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Penulis</h5></td>
                            <td><h5>: <?php echo $result['Penulis'];?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Penerbit</h5></td>
                            <td><h5>: <?php echo $result['Penerbit'];?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Tahun Terbit</h5></td>
                            <td><h5>: <?php echo $result['TahunTerbit'];?></h5></td>
                          </tr>
                    </table>
                        <a href="" class="btn btn-success my-3">Baca Sekarang</a>
              </div>
              </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>