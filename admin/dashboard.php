<?php include "../koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="../fontawesome/css/all.min.css"></script>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
    <div class="sidebar">
            <div class="top">
                <img src="../assets/logo.svg" alt="">
            </div>  
            <ul>
                <li><a class="#" href="#">Dashboard</a></li>
                <li><a class="#" href="tabel_pesanan.php">Tabel Pesanan</a></li>
                <li><a class="#" href="#">Tabel Pelanggan</a></li>
                
                <?php if (!isset($_SESSION['user_is_logged_in']) || $_SESSION['user_is_logged_in'] !== true) { ?>
                    <li><a class="#" href="login_admin.php">Logout</a></li>
                    <?php } ?>
            </ul>
        </div>
        <div class="content">
            <nav class="">
                <div class="container">
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation"></button>
                </div>
            </nav>
        <section>
            <h1 style="padding:none">Welcome to Chis With Us!</h1>
        </section>
</body>
</html>
