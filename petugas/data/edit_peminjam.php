<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Library</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    session_start();

    if($_SESSION['Level']==""){
      header("location:../../index.php");
    }?>
    <div class="container">
        <div class="content">
            <div class="card mt-5 mb-5">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <h1 class="text-center">FORM EDIT PEMINJAM</h1>
                            <?php
                                include '../../koneksi/koneksi.php';
                                
                                $idp = $_GET['idp'];
                                $data = mysqli_query($koneksi,"SELECT * from peminjaman where PeminjamanID='$idp'");
                                while($d = mysqli_fetch_array($data)){
                            ?>
                            <form method="POST" action="e_peminjam.php" class="login-form" >
                                <div class="form-group mt-2">
                                    <input type="text" name="PeminjamanID" value="<?php echo $d ['PeminjamanID'];?>" class="form-control" required>
                                    <label for="">PeminjamanID</label>
                                </div>
                                <div class="form-group mt-5">
                                    <input type="text" name="idbuku" value="<?php echo $d ['idbuku'];?>" class="form-control" required>
                                    <label for="">IDbuku</label>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="text" name="UserID" value="<?php echo $d ['UserID'];?>" class="form-control" required>
                                    <label>IDuser</label>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="text" name="Nama" value="<?php echo $d ['Nama'];?>" class="form-control" required>
                                    <label for="">Nama</label>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mt-2">
                                            <input type="date" name="TanggalPeminjaman" value="<?php echo $d ['TanggalPeminjaman'];?>" class="form-control" required>
                                            <label for="">Tanggal Pinjam</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mt-2">
                                            <input type="date" name="TanggalPengembalian" value="<?php echo $d ['TanggalPengembalian'];?>" class="form-control" required>
                                            <label for="">Tanggal Pengembalian</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <select name="StatusPeminjaman" value="<?php echo $d ['StatusPeminjaman'];?>" class="form-select" aria-required="isii">
                                        <option selected disabled>select level</option>
                                        <option value="dipinjam">dipinjam</option>
                                        <option value="proses">proses</option>
                                        <option value="dikembalikan">dikembalikan</option>
                                        <option value="telat">telat</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form mt-3">
                                            <button type="submit" class="btn btn-primary">Pinjam</button>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mt-3">
                                            <a class="btn btn-warning" href="../peminjam.php">kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>