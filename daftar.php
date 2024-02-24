<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Library</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="card mt-5 mb-5">
          <div class="row">
            <div class="col-sm-6 text-center">
              <img src="assets/img/login-bro.png" width="500">
            </div>
            <div class="col-sm-6">
              <div class="card-body">
                <h1 class="text-center">ONIGIRI DIGITAL LIBRARY</h1>
                <h1 class="text-center">LOGIN</h1>
                <form method="post" action="proses_daftar.php" class="login-form" >
                  <div class="form-group mt-5">
                    <input type="text" name="username" class="form-control" required>
                    <label for="">Username</label>
                  </div>
                  <div class="form-group mt-2">
                    <input type="password" name="password" class="form-control" required>
                    <label>Password</label>
                  </div>
                  <div class="form-group mt-2">
                    <input type="text" name="Email" class="form-control" required>
                    <label for="">Email</label>
                  </div>
                  <div class="form-group mt-2">
                    <input type="text" name="NamaLengkap" class="form-control" required>
                    <label for="">Nama Lengkap</label>
                  </div>
                  <div class="form-group mt-2">
                    <input type="text" name="Alamat" class="form-control" required>
                    <label for="">Alamat</label>
                  </div>
                  <div class="form-group mt-2">
                    <select name="Level" class="form-select">
                      <option selected disabled>select level</option>
                      <option value="admin">admin</option>
                      <option value="petugas">petugas</option>
                      <option value="anggota">anggota</option>
                    </select>
                  </div>
                  <div class="form mt-3">
                    <button type="submit" class="btn btn-primary">DAFTAR</button>
                  </div>
                  <div class="form mt-3">
                    <label>Sudah punya akun? Silahkan klik tombol berikut:</label>
                    <a href="index.php" class="btn btn-warning btn-sm">login</a>
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