<?php include "koneksi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Payment</title>
</head>

<body style="background-color: #fff">
    <nav class="navbar navbar-expand-lg fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand fs-4 text-white" href="#"><img src="assets/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav flex-grow-1 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="index.html">Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.html"
                                >About</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
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
                                    <a class="dropdown-item" href="profile.html"
                                        ><img
                                            class="me-3"
                                            src="assets/iconprofile.svg"
                                            alt="" />Profile</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="activity.html"
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

        <div style="height: 64px"></div>

        <section>
            <div class="container">
                <p class="fw-bold d-flex justify-content-center mt-5 fs-4">
                    FINISH YOUR PAYMENT
                </p>
                <div
                    class="d-flex justify-content-center mb-3"
                    style="font-size: smaller">
                    <img
                        src="assets/choosepayment2.svg"
                        alt=""
                        width="12px" />CHOOSE PAYMENT >
                    <img
                        class="ms-3"
                        src="assets/paynow2.svg"
                        alt=""
                        width="12px" />PAY NOW
                </div>
                <div
                    class="grid d-flex gap-3 text-center d-flex justify-content-center">
                    <div
                        class="g-col-2 shadow px-5 py-3 rounded-3"
                        style="background-color: #fff">
                        <p>PLEASE COMPLATE THE PAYMENT</p>
                        <div
                            class="border rounded-2"
                            style="background-color: #fec84b">
                            <p>Pay Before 17th May 2023, 10.16 WITA</p>
                        </div>
                        <div class="p-5">
                            <img src="assets/bca.jpg" alt="" width="160px" />
                            <p class="mt-3">
                                3928285942916170
                                <img
                                    src="assets/salin.svg"
                                    alt=""
                                    height="16px" />
                            </p>
                            <p class="mt-5">AMOUNT TO BE PAID</p>
                            <p class="fw-bold">Rp 81.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <button
                        type="submit"
                        class="btn rounded mb-5 mt-3 border-0"
                        style="
                            background-color: #c37b52;
                            border: none;
                            color: white;
                        ">
                        Place Order
                    </button>
                </div>
                <ul>
                    <li>
                        Please confirm your reservation and get a payment code
                        after clicking the place order button
                    </li>
                </ul>
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
        <script>
            $(window).scroll(function () {
                $("nav").toggleClass("scrolled", $(this).scrollTop() > 200);
            });

            $(window).scroll(function () {
                $("a").toggleClass("scrolled", $(this).scrollTop() > 200);
            });

            $(window).scroll(function () {
                $(".btn").toggleClass("scrolled", $(this).scrollTop() > 200);
            });
        </script>
        <script src="main.js"></script>
    </body>
</html>