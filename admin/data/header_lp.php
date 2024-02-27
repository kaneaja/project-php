<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
</head>
<body>
        <div class="wrapper">
            <aside id="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="../index_pts.php">DIGITAL LIBRARY</a>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="../index_adm.php" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../buku.php" class="sidebar-link">
                            <i class="lni lni-agenda"></i>
                            <span>Data Buku</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../anggota.php" class="sidebar-link">
                            <i class="bi bi-people"></i>
                            <span>Data anggota</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../peminjam.php" class="sidebar-link">
                            <i class="lni lni-popup"></i>
                            <span>Data peminjam</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                    <a href="../laporan.php" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-collection"></i>
                        <span>Laporan</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="laporan_dp.php" class="sidebar-link"><i class="bi bi-files"></i>Laporan peminjam</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="laporan_db.php" class="sidebar-link"><i class="bi bi-files"></i>Laporan Buku</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="laporan_da.php" class="sidebar-link"><i class="bi bi-files"></i>Laporan anggota</a>
                        </li>
                    </ul>
                </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="../../logout.php" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </aside>
            <div class="main p-3">
                
