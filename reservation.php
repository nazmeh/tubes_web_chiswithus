<?php 
session_start();
if(!isset($_SESSION ["login"])){
    header("Location: login.php");
    exit;
}
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
        <title>Reservation</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand fs-4 text-white" href="#"
                    ><img src="assets/logo.svg" alt=""
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
                            <a class="nav-link text-white" href="about.php"
                                >About</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
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
                                    <a class="dropdown-item" href="activity.php"
                                        ><img
                                            class="me-3"
                                            src="assets/iconactivity.svg"
                                            alt="" />Activy</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="logout.php"
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

        <section
            id="Home"
            style="background-image: url(assets/bgreservasi.png)">
            <div class="container" style="padding-top: 10rem">
                <div class="row py-5 flex-nowrap overflow-auto">
                    <div class="col-2 px-3">
                        <div
                            class="border px-3 py-4 rounded-3 position-relative"
                            style="background-color: #e8d0bd">
                            <button class="position-absolute today">
                                TODAY
                            </button>
                            <p class="mb-2" style="font-size: 24px">Sun</p>
                            <h3
                                class="mb-3"
                                style="font-weight: bold; font-size: 24px">
                                23
                            </h3>
                            <div class="row mx-auto gy-3">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault1"
                                        value="S"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault1">
                                        11.00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault2"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault2">
                                        11:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault3"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault3">
                                        12.30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault4"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault4">
                                        13.00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault5"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault5">
                                        13:30 PM
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 px-3">
                        <div
                            class="border px-3 py-4 rounded-3 position-relative"
                            style="background-color: #e8d0bd">
                            <p class="mb-2" style="font-size: 24px">Mon</p>
                            <h3
                                class="mb-3"
                                style="font-weight: bold; font-size: 24px">
                                24
                            </h3>
                            <div class="row mx-auto gy-3">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault6"
                                        value="S"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault6">
                                        11.00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault7"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault7">
                                        11:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault8"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault8">
                                        12:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault9"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault9">
                                        13:00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault10"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault10">
                                        13:30 PM
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 px-3">
                        <div
                            class="border px-3 py-4 rounded-3 position-relative"
                            style="background-color: #e8d0bd">
                            <p class="mb-2" style="font-size: 24px">Tue</p>
                            <h3
                                class="mb-3"
                                style="font-weight: bold; font-size: 24px">
                                25
                            </h3>
                            <div class="row mx-auto gy-3">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault11"
                                        value="S"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault11">
                                        11.00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault12"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault12">
                                        11:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault13"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault13">
                                        12:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault14"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault14">
                                        13:00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault15"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault15">
                                        13:30 PM
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 px-3">
                        <div
                            class="border px-3 py-4 rounded-3 position-relative"
                            style="background-color: #e8d0bd">
                            <p class="mb-2" style="font-size: 24px">Wed</p>
                            <h3
                                class="mb-3"
                                style="font-weight: bold; font-size: 24px">
                                26
                            </h3>
                            <div class="row mx-auto gy-3">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault16"
                                        value="S"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault16">
                                        11.00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault17"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault17">
                                        11:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault18"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault18">
                                        12:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault19"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault19">
                                        13:00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault20"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault20">
                                        13:30 PM
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 px-3">
                        <div
                            class="border px-3 py-4 rounded-3 position-relative"
                            style="background-color: #e8d0bd">
                            <p class="mb-2" style="font-size: 24px">Thu</p>
                            <h3
                                class="mb-3"
                                style="font-weight: bold; font-size: 24px">
                                27
                            </h3>
                            <div class="row mx-auto gy-3">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault21"
                                        value="S"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault21">
                                        11.00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault22"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault22">
                                        11:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault23"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault23">
                                        12:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault24"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault24">
                                        13:00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault25"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault25">
                                        13:30 PM
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 px-3">
                        <div
                            class="border px-3 py-4 rounded-3 position-relative"
                            style="background-color: #e8d0bd">
                            <p class="mb-2" style="font-size: 24px">Fri</p>
                            <h3
                                class="mb-3"
                                style="font-weight: bold; font-size: 24px">
                                28
                            </h3>
                            <div class="row mx-auto gy-3">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault26"
                                        value="S"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault26">
                                        11.00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault27"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault27">
                                        11:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault28"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault28">
                                        12:30 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault29"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault29">
                                        13:00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="radioReservation"
                                        id="flexRadioDefault30"
                                        value="M"
                                        onchange="toggleLabelClass(this)" />
                                    <label
                                        class="form-check-label timeReservation d-flex align-items-center justify-content-center"
                                        for="flexRadioDefault30">
                                        13:30 PM
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row d-flex justify-content-center" style="margin-top: 60px">
            <form class="w-80" action="tes.php" method="POST">
                <p
                    class="fw-semibold"
                    style="text-align: center; font-size: 16px">
                    CONFIRM BOOKING
                </p>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label opacity-75"
                        >Name</label
                    >
                    <input
                        type="text"
                        name="name"
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
                        name="email"
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
                        name="phone"
                        class="form-control border-dark-subtle"
                        id="exampleInputNumber" />
                </div>
                <div class="mb-3">
                    <label
                        for="exampleInputInstagram"
                        class="form-label opacity-75"
                        >Instagram Account</label
                    >
                    <input
                        type="text"
                        name="instagram"
                        class="form-control border-dark-subtle"
                        id="exampleInputInstagram" />
                </div>
                <div class="mb-3">
                    <label
                        for="exampleInputNumber"
                        class="form-label opacity-75"
                        >Number of People</label
                    >
                    <input
                        type="number"
                        max="9"
                        min="1"
                        name="numOfPeople"
                        class="form-control border-dark-subtle"
                        id="exampleInputNumber" />
                </div>
                <div class="mb-3">
                    <label
                        for="exampleInputPassword"
                        class="form-label opacity-75 border-dark-subtle"
                        >Background</label
                    >
                    <select
                        class="form-select form-control border-dark-subtle"
                        id="inputGroupSelect01"
                        name="background">
                        <option selected>Choose</option>
                        <option value="1">Blue</option>
                        <option value="2">Brown</option>
                        <option value="3">White</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label
                        for="exampleInputPassword"
                        class="form-label opacity-75"
                        >Paket</label
                    >
                    <select
                        class="form-select form-control border-dark-subtle"
                        id="inputGroupSelect01"
                        name="paket">
                        <option selected>Choose</option>
                        <option value="1">Weekdays</option>
                        <option value="2">Weekend</option>
                        <option value="3">Promo</option>
                    </select>
                </div>
                <button
                    type="submit"
                    name="konfirm"
                    class="btn btn-warning w-30 rounded-5 mb-5 mt-3 border-0"
                    style="
                        background-color: #c37b52;
                        border: none;
                        color: white;
                        font-size: 12px;
                    ">
                    Confirm Booking
                </button>
            </form>
        </div>

        <!-- footer -->
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