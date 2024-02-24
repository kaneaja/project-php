<?php
  include 'header.php';
  session_start();

  if($_SESSION['Level']==""){
    header("location:../index.php");
  }
?>

    <main class="mt-5 pt-3">
        <div class="row card">
            <h2>data Peminjam</h2>
            <div class="col">
                <div class="table-responsive">
                    <table class="table my-3">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID Peminjam</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Status Peminjam</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <?php
                            include '../koneksi/koneksi.php';

                            $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                            while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tbody class="table-success">
                            <tr>
                                <th scope="row"><?php echo $d['PeminjamanID'];?></th>
                                <td><?php echo $d['Nama'];?></td>
                                <td><?php echo $d['StatusPeminjaman'];?></td>
                                <td>
                                    <a href="data/detail_peminjaman.php?idp=<?php echo $d['PeminjamanID'];?>" class="btn btn-primary text-white">Detail</a>
                                    <a href="#" class="btn btn-success text-white">Ubah</a>
                                    <a href="#" class="btn btn-danger text-white">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </main>


  <?php
  include 'footer.php';
?>