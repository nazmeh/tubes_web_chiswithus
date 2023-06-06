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
    <main>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fa fa-arrow-right" id="open"></i>
        </label>
        <div class="sidebar">
            <div class="top">
                <a>
                    <img src="assets/logo.svg" alt=""/>
                </a>
            </div>  
            <ul>
                <li><a class="#" href="#"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a class="#" href="#"><i class="fa fa-shopping-basket"></i> Table Pesanan</a></li>
                <li><a class="#" href="#"><i class="fa fa-shopping-bag"></i> Table Pelanggan</a></li>
            </ul>
        </div>
        <section>
            <h1>Selamat Datang Admin Chis With Us</h1>
        </section>
    </main>
</body>
</html>
