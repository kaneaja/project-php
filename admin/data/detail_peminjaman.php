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


    <div class="container detail mt-3" >
        <div class="card"> 
            <div class="row m-4">
              <?php
                  include '../../koneksi/koneksi.php';

                  if (isset($_GET['idp'])){
                    $idp = $_GET['idp'];
                  }else{
                    die('data erorr');
                  }
                  $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE PeminjamanID='$idp' ");
                  $result = mysqli_fetch_array($query);
              ?>
              <div class="col mt-2">
                    <h2>detail peminjaman</h2>
                  <a href="../peminjam.php" class="btn btn-danger">Kembali</a><hr>
                    <table>
                          <tr>
                            <td><h5>ID peminjam</h5></td>
                            <td><h5>: <?php echo $result['PeminjamanID'];?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>UserID</h5></td>
                            <td><h5>: <?php echo $result['UserID'];?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Nama Peminjam</h5></td>
                            <td><h5>: <?php echo $result['Nama'];?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Tanggal Peminjaman</h5></td>
                            <td><h5>: <?php echo $result['TanggalPeminjaman'];?></h5></td>
                          </tr>
                          <tr>
                            <td><h5> Tanggal Pengembalian</h5></td>
                            <td><h5>: <?php echo $result['TanggalPengembalian'];?></h5></td>
                          </tr>
                          <tr>
                            <td><h5>Status Peminjaman </h5></td>
                            <td class="bg-dark text-white"><h5>: <?php echo $result['StatusPeminjaman'];?></h5></td>
                          </tr>
                    </table>
              </div>
              </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>