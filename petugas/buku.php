<?php
  include 'header.php';
  session_start();

  if($_SESSION['Level']==""){
    header("location:../index.php");
  }
?>

    <main class="mt-5 pt-3">
        <div class="row card">
            <h2>data buku</h2>
            <div class="coll">
                <a href="data/tambah_buku.php" class="btn btn-dark">tambah buku</a>
                <div class="table-responsive">
                    <table class="table my-3 aling-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Buku ID</th>
                                <th scope="col">Judul buku</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <?php
                            include '../koneksi/koneksi.php';

                            $data = mysqli_query($koneksi, "SELECT * FROM buku");
                            while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tbody class="table-success">
                            <tr>
                                <th scope="row"><?php echo $d['idbuku'];?></th>
                                <td><?php echo $d['Judul'];?></td>
                                <td>
                                    <a href="data/detail_buku.php?idbuku=<?php echo $d['idbuku'];?>" class="btn btn-primary text-white">Detail</a>
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