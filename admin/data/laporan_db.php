<?php
  include 'header_lp.php';
  session_start();

  if($_SESSION['Level']==""){
    header("location:../../index.php");
  }
?>

    <main class="mt-2 pt-3">
        <div class="container">
            <h2>Laporan Data Buku</h2>
            <h4>Data Ini Merupakan Data Keseluruhan Buku Digital Library</h4>
            <div class="row card mt-3">
                <div class="coll">
                    <div class="table-responsive">
                        <table class="table my-3 aling-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Buku ID</th>
                                    <th scope="col">Judul buku</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">TahunTerbit</th>
                                </tr>
                            </thead>
                            <?php
                                include '../../koneksi/koneksi.php';
    
                                $data = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($d = mysqli_fetch_array($data)) {
                            ?>
                            <tbody class="table-success">
                                <tr>
                                    <th scope="row"><?php echo $d['idbuku'];?></th>
                                    <td><?php echo $d['Judul'];?></td>
                                    <td><?php echo $d['Penulis'];?></td>
                                    <td><?php echo $d['Penerbit'];?></td>
                                    <td><?php echo $d['TahunTerbit'];?></td>
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