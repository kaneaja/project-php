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
            <h4>Data Ini Merupakan Data Keseluruhan Member Digital Library</h4>
            <div class="row card mt-3">
            <div class="coll">
                <table class="table my-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Email</th>
                            <th scope="col">NamaLengkap</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Level</th>
                        </tr>
                    </thead>
                    <?php
                        include '../../koneksi/koneksi.php';

                        $data = mysqli_query($koneksi, "SELECT * FROM user");
                        while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tbody class="table-success">
                        <tr>
                            <th scope="row"><?php echo $d['UserID']?></th>
                            <td><?php echo $d['username']?></td>
                            <td><?php echo $d['password']?></td>
                            <td><?php echo $d['Email']?></td>
                            <td><?php echo $d['NamaLengkap']?></td>
                            <td><?php echo $d['Alamat']?></td>
                            <td><?php echo $d['NamaLengkap']?></td>
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
  include 'footer_lp.php';
?>