<?php
include "koneksi.php";
?>

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
        <title>About</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand fs-4 text-white" href="#"
                    ><img src="" alt=""
                /></a>
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
                                href="home.php"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#"
                                >About</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-white"
                                href="reservation.php"
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
                                    <a class="dropdown-item" href="profile.php"
                                        ><img
                                            class="me-3"
                                            src="assets/iconprofile.svg"
                                            alt="" />Profile</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="activity.php"
                                        ><img
                                            class="me-3"
                                            src="assets/iconactivity.svg"
                                            alt="" />Activy</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" action href="logout.php"
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

        <section id="about" class="">
            <div class="row" style="height: 100vh">
                <div class="col-6 h-100"></div>
                <div
                    class="col-6 h-100"
                    style="background-color: #f5f3eb"></div>
            </div>
            <div class="container" style="margin-top: -100vh">
                <div class="row" style="height: 100vh; padding-top: 5rem">
                    <div
                        class="col-6 justify-content-center d-flex flex-column h-100">
                        <div>
                            <h1
                                class="text-black fw-bold"
                                style="font-size: 72px">
                                Our <br />
                                Story
                            </h1>
                            <p><img src="assets/lineabout.svg" alt="" /></p>
                        </div>
                        <p style="font-size: 16px">
                            Snap is the first unique photo studio that is
                            present in Lombok that applies the concept of a self
                            photo studio. In addition, you will also get various
                            conveniences for taking pictures at Snap,
                            you can make reservations anytime and anywhere, can
                            make payments using various methods and can
                            reschedule easily and quickly.
                        </p>
                    </div>
                    <div
                        class="col-6 justify-content-center d-flex align-items-center">
                        <img src="assets/about.png" alt="" class="" />
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h1
                    class="fw-semibold d-flex justify-content-end py-5"
                    style="font-size: 60px">
                    Contact
                </h1>
                <div class="row bg-cream p-5 row-gap-5">
                    <div class="col-4 d-flex">
                        <img src="assets/whatsapp.svg" alt="" />
                        <div
                            class="justify-content-center d-flex flex-column ms-3 gap-1">
                            <p class="m-0 fw-bold" style="font-size: 16px">
                                Whatsapp
                            </p>
                            <p class="m-0" style="font-size: 16px">
                                +6281775284771
                            </p>
                        </div>
                    </div>
                    <div class="col-4 d-flex">
                        <img src="assets/call.svg" alt="" />
                        <div
                            class="justify-content-center d-flex flex-column ms-3 gap-1">
                            <p class="m-0 fw-bold" style="font-size: 16px">
                                Phone Number
                            </p>
                            <p class="m-0" style="font-size: 16px">
                                (0247) 54 7777
                            </p>
                        </div>
                    </div>
                    <div class="col-4 d-flex">
                        <img src="assets/email.svg" alt="" />
                        <div
                            class="justify-content-center d-flex flex-column ms-3 gap-1">
                            <p class="m-0 fw-bold" style="font-size: 16px">
                                Email
                            </p>
                            <p class="m-0" style="font-size: 16px">
                                snapstudio@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <img src="assets/facebook.svg" alt="" />
                        <div
                            class="justify-content-center d-flex flex-column ms-3 gap-1">
                            <p class="m-0 fw-bold" style="font-size: 16px">
                                Facebook
                            </p>
                            <p class="m-0" style="font-size: 16px">
                                snap studio
                            </p>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <img src="assets/instagram.svg" alt="" />
                        <div
                            class="justify-content-center d-flex flex-column ms-3 gap-1">
                            <p class="m-0 fw-bold" style="font-size: 16px">
                                Instagram
                            </p>
                            <p class="m-0" style="font-size: 16px">
                                @snapstudio
                            </p>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <img src="assets/tiktok.svg" alt="" />
                        <div
                            class="justify-content-center d-flex flex-column ms-3 gap-1">
                            <p class="m-0 fw-bold" style="font-size: 16px">
                                Tiktok
                            </p>
                            <p class="m-0" style="font-size: 16px">
                                @snapstudio
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Location">
            <div class="container py-5">
                <h1 class="fw-semibold py-5" style="font-size: 56px">
                    Location
                </h1>
                <div class="row">
                    <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.568748994352!2d116.0556349!3d-8.5034358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc21be817f579%3A0x2e3a6d88898a0830!2sJl.%20Teratai%20No.24%2C%20Batu%20Layar%2C%20Kec.%20Batu%20Layar%2C%20Kabupaten%20Lombok%20Barat%2C%20Nusa%20Tenggara%20Bar.%2083355!5e0!3m2!1sen!2sid!4v1684312806565!5m2!1sen!2sid"
                        height="640px"
                        width="1320px"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                        <div class="py-3 d-flex" style="font-size: 16px">
                        <img src="assets/location.svg" alt="" />
                        <p class="ms-2 align-items-center my-auto">
                        Jl. Teratai No.24, BTN Greenvalley, Senggigi, Kec. 
                        Batu Layar, Kab. Lombok Barat, Nusa Tenggara Barat.
                        </p>
                    </div>
                        <div class="py-3 d-flex" style="font-size: 16px">
                            <img src="assets/time.svg" alt="" />
                            <p class="ms-2 align-items-center my-auto">
                                Open 10.00 AM - 21.00 PM
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 border-top border-1 border-dark">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-flex my-auto">
                        <p class="m-0">2024 © All Right Reserved</p>
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
