<?php
  include 'header_lp.php';
  session_start();

  if($_SESSION['Level']==""){
    header("location:../index.php");
  }
?>

    <main class="mt-2 pt-3">
        <div class="container">
            <h2>Laporan Data Buku</h2>
            <h4>Data Ini Merupakan Data Keseluruhan Member Digital Library</h4>
            <div class="row card mt-3">
                <div class="coll">
                <div class="table-responsive">
                    <table class="table my-3">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID Peminjam</th>
                                <th scope="col">ID User</th>
                                <th scope="col">ID buku</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Tanggal Peminjaman</th>
                                <th scope="col">Tanggal Pengembalian</th>
                                <th scope="col">Status Peminjam</th>
                            </tr>
                        </thead>
                        <?php
                            include '../../koneksi/koneksi.php';

                            $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                            while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tbody class="table-success">
                            <tr>
                                <th scope="row"><?php echo $d['PeminjamanID'];?></th>
                                <td><?php echo $d['UserID'];?></td>
                                <td><?php echo $d['idbuku'];?></td>
                                <td><?php echo $d['Nama'];?></td>
                                <td><?php echo $d['TanggalPeminjaman'];?></td>
                                <td><?php echo $d['TanggalPengembalian'];?></td>
                                <td><?php echo $d['StatusPeminjaman'];?></td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                </div>
                </div>
            </div>    
        </div>
    </main>


  <?php
  include 'footer_lp.php';
?>