<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style_admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .content {
            margin-left: 260px; /* Menyesuaikan dengan lebar sidebar */
            width: calc(100% - 260px); /* Menyesuaikan dengan lebar sidebar */
        }
        @media (max-width: 768px) {
            .content {
                margin-left: 0;
                width: 100%;
            }
        }
        .table-responsive {
            overflow-x: auto;
            padding: 15px;
        }
        .table {
            width: 100%;
        }
    </style>
</head>
<body>
    <main>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fa fa-burger fa-lg"></i>
            <i class="fa fa-arrow-right" id="open"></i>
        </label>
        <div class="sidebar">
            <div class="top">
                <img src="../assets/logo.svg" alt="">
            </div>  
            <ul>
                <li><a class="#" href="#"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a class="#" href="#"><i class="fa fa-shopping-basket"></i> Table Pesanan</a></li>
                <li><a class="#" href="#"><i class="fa fa-shopping-bag"></i> Table Pelanggan</a></li>
                
                <?php if (!isset($_SESSION['user_is_logged_in']) || $_SESSION['user_is_logged_in'] !== true) { ?>
                    <li><a class="#" href="login_admin.php"><i class="fa fa-shopping-bag"></i> Logout</a></li>
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
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title mb-2 mt-4" style="">Daftar Invoice Menunggu Diverifikasi</h4>
                            <ol class="breadcrumb m-10">
                                <li class="breadcrumb-item"><a href="">Admin</a></li>
                                <li class="breadcrumb-item active">Pesanan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>bukti bayar</th>
                        <th>status</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>RES123</td>
                        <td>Nazmi</td>
                        <td>nazmi@gmail.com</td>
                        <td>file.jpg</td>
                        <td>valid</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img style="width:16px;" src="../assets/pen-solid.svg">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Valid</a>
                                    <a class="dropdown-item" href="#">Tidak Valid</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>RES456</td>
                        <td>Fairuz</td>
                        <td>fairuz@gmail.com</td>
                        <td>file.jpg</td>
                        <td>valid</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img style="width:16px;" src="../assets/pen-solid.svg">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#">Valid</a>
                                    <a class="dropdown-item" href="#">Tidak Valid</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- end content -->
    </main>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIyTWPoqL+o3EhF6HA6tu4gU2tYn2Aiz+dJZI2B2" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();

        // Kode untuk menangani pemilihan item dropdown
        $('.dropdown-menu .dropdown-item').on('click', function() {
            var status = $(this).text();
            $(this).closest('td').prev().text(status);
        });
    });
</script>
</body>
</html>
