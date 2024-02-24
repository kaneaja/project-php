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
    <div class="container">
        <div class="content">
            <div class="card mt-5 mb-5">
                <div class="row">
                <?php
                    include '../../koneksi/koneksi.php';

                    if (isset($_GET['idbuku'])){
                        $idbuku = $_GET['idbuku'];
                    }else{
                        
                    }
                        $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$idbuku' ");
                        $result = mysqli_fetch_array($query);
                ?>
                    <div class="col">
                        <div class="card-body">
                            <h1 class="text-center">FORM PINJAM BUKU</h1>
                            <form method="POST" action="t_pinjam.php" class="login-form" >
                                <div class="form-group mt-5">
                                    <input type="text" name="idbuku" class="form-control" value="<?php echo $result['idbuku'];?>" required>
                                    <label for="">IDbuku</label>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="text" name="UserID" class="form-control" required>
                                    <label>IDuser</label>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="text" name="Nama" class="form-control" required>
                                    <label for="">Nama</label>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mt-2">
                                            <input type="date" name="TanggalPeminjaman" class="form-control" required>
                                            <label for="">Tanggal Pinjam</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mt-2">
                                            <input type="date" name="TanggalPengembalian" class="form-control" required>
                                            <label for="">Tanggal Pengembalian</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <select name="StatusPeminjaman" class="form-select" aria-required="isii">
                                        <option selected disabled>select level</option>
                                        <option value="dipinjam">pinjam</option>
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
                                            <a class="btn btn-warning" href="../buku.php">kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>