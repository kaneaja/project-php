<?php
  include 'header.php';
  session_start();

  if($_SESSION['Level']==""){
    header("location:../index.php");
  }
?>

    <main class="mt-5 pt-3">
        <div class="row card">
            <h2>data anggota</h2>
            <div class="coll">
            <a href="data/tambah_pts.php" class="btn btn-outline-success">tambah buku</a>
                <table class="table my-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">NamaLengkap</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                        include '../koneksi/koneksi.php';

                        $data = mysqli_query($koneksi, "SELECT * FROM user");
                        while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tbody class="table-success">
                        <tr>
                            <th scope="row"><?php echo $d['UserID']?></th>
                            <td><?php echo $d['NamaLengkap']?></td>
                            <td><?php echo $d['Alamat']?></td>
                            <td>
                                <a href="data/detail_anggota.php?UserID=<?php echo $d['UserID'];?>" class="btn btn-outline-dark">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </main>


  <?php
  include 'footer.php';
?>