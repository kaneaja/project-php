<?php
  include 'header.php';
  session_start();

  if($_SESSION['Level']==""){
    header("location:../index.php");
  }
?>

  <div class="container card">
    <div class="content">
      <div class="left-content">
        <h3>selamat datang</h3>
        <h5>dihalaman perpustakaan digitalibary</h5>
        <h6>
              <span class="multi-text blue-span"></span>
        </h6>


      </div>
      <div class="right-content">
        <img src="../assets/img/login-bro.png" width="400" alt="">
      </div>
    </div>
  </div>

  <?php
  include 'footer.php';
?>