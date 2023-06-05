<?php include "../koneksi.php";?>
<!doctype html>
<html lang="en">
  <head>
    <title> Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="">
        <div class="container">
            <a class="navbar-brand fs-4 text-white" href="#"><img src="assets/logo.svg" alt=""></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
        </div>
    </nav>
     <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-12" >
                                    <h4 class="page-title mb-1">Daftar Invoice Menunggu Diverifikasi</h4>
                                    <ol class="breadcrumb m-10">
                                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                                    <li class="breadcrumb-item active">Pesanan</li>
                                    </ol>
                                </div>
                            </div>
           
                            <div class="page-content-wrapper">
                        <div class="container-fluid">
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatable-buttons" class="table myTablesss table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Bukti Bayar</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                                 
                                                <tr>
                                                    <td> 1.</td>
                                                    <td> 1</td>
                                                    <td>Fairuz</td>
                                                    <td>fairuz@gmail.com</td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> valid </td>
                                                    <td> edit hpus</td>
                                                </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <?php if (!isset($_SESSION['user_is_logged_in']) || $_SESSION['user_is_logged_in'] !== true) { ?>
                                <a href="login_admin.php" role="button" class="btn btn-primary">Logout</a>
                                <?php } ?>
                        </div>
                        <!-- end container-fluid -->
                    </div> 
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content --> 
