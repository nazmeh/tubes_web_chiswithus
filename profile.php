<?php include "koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Profile</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand fs-4 text-white" href="#"><img src="assets/logo.svg" alt=""></a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse d-flex justify-content-between"
                    id="navbarNav">
                    <ul class="navbar-nav flex-grow-1 justify-content-center">
                        <li class="nav-item">
                            <a
                                class="nav-link text-white"
                                aria-current="page"
                                href="index.html"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-white"
                                href="reservation.html"
                                >Reservation</a
                            >
                        </li>
                    </ul>
                    <div class="d-flex">
                        <div class="dropdown">
                            <button
                                class="dropdown bg-transparent border-0"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="assets/profile.svg" alt="" />
                                <img src="assets/panahprofile.svg" alt="" />
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        ><img
                                            class="me-3"
                                            src="assets/iconprofile.svg"
                                            alt="" />Profile</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        ><img
                                            class="me-3"
                                            src="assets/iconactivity.svg"
                                            alt="" />Activy</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.html"
                                        ><img
                                            class="me-3"
                                            src="assets/iconlogout.svg"
                                            alt="" />Logout</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section style="height: 110vh">
            <div
                class="jumbotron jumbotron-fluid"
                style="
                    background-image: url(assets/bgprofile.jpg);
                    height: 320px;
                    background-repeat: no-repeat;
                    background-size: cover;
                ">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <img src="assets/fotoprofile.jpg" alt="" />
                        </div>
                        <div
                            class="col-2 align-items-end d-flex justify-content-end">
                            <button
                                type="submit"
                                class="btn btn-warning w-30 rounded-5 border-1"
                                style="
                                    background-color: #fff;
                                    border-color: #c37b52;
                                    color: #000;
                                ">
                                Edit Profile
                            </button>
                        </div>
                    </div>
                    <div
                        class="row d-flex justify-content-center"
                        style="margin-top: 80px">
                        <form class="w-80">
                            <div class="mb-3">
                                <label
                                    for="exampleInputName"
                                    class="form-label opacity-75"
                                    >Full Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control border-dark-subtle"
                                    id="exampleInputName" />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label opacity-75"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="form-control border-dark-subtle"
                                    id="exampleInputEmail1" />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleInputNumber"
                                    class="form-label opacity-75"
                                    >Phone Number</label
                                >
                                <input
                                    type="text"
                                    class="form-control border-dark-subtle"
                                    id="exampleInputNumber" />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleInputPassword"
                                    class="form-label opacity-75"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    class="form-control border-dark-subtle"
                                    id="exampleInputPassword" />
                            </div>
                            <button
                                type="submit"
                                class="btn btn-warning w-30 rounded-5 mb-5 mt-3 border-0"
                                style="
                                    background-color: #c37b52;
                                    border: none;
                                    color: white;
                                ">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 border-top border-1 border-dark">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-flex my-auto">
                        <p class="m-0">2023 © All Right Reserved</p>
                    </div>
                    <div class="col-6 d-flex justify-content-end gap-3">
                        <img src="assets/Group 68.svg" alt="" />
                        <img src="assets/Group 69.svg" alt="" />
                        <img src="assets/Group 70.svg" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js "
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN "
            crossorigin="anonymous "></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
        <script src="main.js"></script>
    </body>
</html>
