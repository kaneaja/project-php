<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link rel="stylesheet" href="style.css">
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
                        <a href="index_pts.php">DIGITAL LIBRARY</a>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="index_pts.php" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="buku.php" class="sidebar-link">
                            <i class="lni lni-agenda"></i>
                            <span>Data Buku</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="anggota.php" class="sidebar-link">
                            <i class="bi bi-people"></i>
                            <span>Data anggota</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="peminjam.php" class="sidebar-link">
                            <i class="lni lni-popup"></i>
                            <span>Data peminjam</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="../logout.php" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </aside>
            <div class="main p-3">
                
