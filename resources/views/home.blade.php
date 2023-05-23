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
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/style1.css" />
        <title>Home</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand fs-4 text-white" href="#"><img src="/assets/logo.svg" alt=""></a>
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
                                class="nav-link active text-white"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('home.about')}}"
                                >About</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-white"
                                href="reservation.html"
                                >Reservation</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="{{route('login.login')}}"
                            ><button
                                type="button"
                                class="btn btn-primary bg-transparent border-0 text-white">
                                Login
                            </button>
                        </a>
                        <a href="{{route('register.register')}}"
                            ><button
                                type="button"
                                class="btn btn-primary rounded-0 border-0 bg-white bg-opacity-10 ms-4 text-white">
                                Register
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <section
            id="Home"
            style="
                background-image: url(/./assets/studiohome.jpg);
                height: 100vh;
                background-size: cover;
                background-repeat: no-repeat;
            ">
            <div
                class="container h-100 d-flex align-items-center justify-content-between">
                <div>
                    <h1 class="text-white fw-bold" style="font-size: 72px">
                        Do You Want <br />
                        To Take a Photo ?
                    </h1>
                    <p class="text-white" style="font-size: 12px">
                        Buy your ticket without having come to the studio!
                        <br />
                        Enjoy the photos in our studio!
                    </p>
                </div>
                <p class="text-white" style="transform: rotate(-90deg)">
                    <img
                        src="/assets/Union.svg"
                        alt=""
                        style="transform: rotate(90deg)"
                        class="me-3" />
                    scroll down to read more
                </p>
            </div>
        </section>

        <section
            id="Gallery"
            style="background-image: url(/assets/half.svg); height: 320px">
            <div class="container py-5">
                <div class="row pt-80">
                    <div class="col-md-6">
                        <p class="fw-medium" style="font-size: 16px">01</p>
                        <h1 class="fw-semibold" style="font-size: 56px">
                            Gallery
                        </h1>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end my-auto">
                        <div class="d-flex align-items-center gap-3">
                            <button class="nofocus" onclick="scrollr()">
                                <span
                                    ><img src="/assets/Group 24.svg" alt=" "
                                /></span>
                            </button>
                            <button class="nofocus" onclick="scrolll()">
                                <span
                                    ><img src="/assets/Group 25.svg" alt=" "
                                /></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="row mt-5 d-flex flex-row flex-nowrap overflow-hidden scroll-smooth scroll-image cover">
                    <div class="col-md-3 child">
                        <div class="card card-hover">
                            <img
                                class="card-img-top"
                                src="/assets/family.jpg"
                                alt="Card image cap" />
                            <div
                                class="obj-overlay d-flex justify-content-center">
                                family
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 child">
                        <div class="card">
                            <img
                                class="card-img-top"
                                src="/assets/friends.jpg"
                                alt="Banana Boat" />
                            <div
                                class="obj-overlay d-flex justify-content-center">
                                Friend
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 child">
                        <div class="card">
                            <img
                                class="card-img-top"
                                src="/assets/couple.jpg"
                                alt="Card image cap" />
                            <div
                                class="obj-overlay d-flex justify-content-center">
                                Couple
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 child">
                        <div class="card">
                            <img
                                class="card-img-top"
                                src="/assets/selfphoto.jpg"
                                alt="Card image cap" />
                            <div
                                class="obj-overlay d-flex justify-content-center">
                                SelfPhoto
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 child">
                        <div class="card">
                            <img
                                class="card-img-top"
                                src="/assets/graduation.jpg"
                                alt="Card image cap" />
                            <div
                                class="obj-overlay d-flex justify-content-center">
                                Graduation
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 child">
                        <div class="card card-hover">
                            <img
                                class="card-img-top"
                                src="/assets/family.jpg"
                                alt="Card image cap" />
                            <div
                                class="obj-overlay d-flex justify-content-center">
                                Family
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 child">
                        <div class="card">
                            <img
                                class="card-img-top"
                                src="/assets/friends.jpg"
                                alt="Banana Boat" />
                            <div
                                class="obj-overlay d-flex justify-content-center">
                                Friends
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Pricelist" style="margin-top: 280px">
            <div class="container py-5">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <p class="fw-medium" style="font-size: 16px">02</p>
                        <h1 class="fw-semibold" style="font-size: 56px">
                            Pricelist
                        </h1>
                    </div>
                </div>
                <div class="row gap-5">
                    <div
                        class="col rounded-4 overflow-hidden shadow-sm py-3 px-4 gy-5 border position-relative">
                        <img
                            src="assets/element_1.svg"
                            alt=""
                            class="position-absolute top-0 end-0" />
                        <div class="gy-3">
                            <button
                                type="button"
                                class="btn btn-warning w-30 rounded-5 mb-3 border-0 active"
                                style="background-color: #ffab2f; color: white">
                                Weekdays
                            </button>
                            <h1 class="">80K</h1>
                            <p>
                                Weekdays is a package that can be used from
                                Monday-Friday
                            </p>
                            <button
                                type="button"
                                class="btn btn-warning w-100 rounded-5 mb-3 active border-0"
                                style="color: white; background-color: #c37b52">
                                Reservation
                            </button>
                        </div>
                        <p>Rules:</p>
                        <ul type="square">
                            <li>2 People</li>
                            <li>2 Photo Print</li>
                            <li>15 Minute Session</li>
                            <li>10 Minute Choose Photo</li>
                            <li>Free Soft File Google Drive</li>
                        </ul>
                    </div>
                    <div
                        class="col rounded-4 overflow-hidden shadow-sm py-3 px-4 gy-5 border position-relative">
                        <img
                            src="/assets/element 2.svg"
                            alt=""
                            class="position-absolute end-0 top-0" />
                        <div class="gy-3">
                            <button
                                type="button"
                                class="btn btn-warning w-30 rounded-5 mb-3 border-0 active"
                                style="background-color: #214b73; color: white">
                                Promo
                            </button>
                            <h1 class="">60K</h1>
                            <p>
                                Promo is a package that can be used for National
                                Holiday
                            </p>
                            <button
                                type="button"
                                class="btn btn-warning w-100 rounded-5 mb-3 active border-0"
                                style="color: white; background-color: #c37b52">
                                Reservation
                            </button>
                        </div>
                        <div>
                            <p>Rules:</p>
                            <ul type="square">
                                <li>2 People</li>
                                <li>2 Photo Print</li>
                                <li>15 Minute Session</li>
                                <li>10 Minute Choose Photo</li>
                                <li>Free Soft File Google Drive</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col rounded-4 overflow-hidden shadow-sm py-3 px-4 gy-5 border position-relative">
                        <img
                            src="/assets/element 3.svg"
                            alt=""
                            class="position-absolute end-0 top-0" />
                        <div class="gy-3">
                            <button
                                type="button"
                                class="btn btn-warning w-30 rounded-5 mb-3 border-0 active"
                                style="background-color: #582760; color: white">
                                Weekend
                            </button>
                            <h1 class="">100K</h1>
                            <p class="">
                                Weekdays is a package that can be used from
                                Saturday and Sunday
                            </p>
                            <button
                                type="button"
                                class="btn btn-warning w-100 rounded-5 mb-3 active border-0"
                                style="color: white; background-color: #c37b52">
                                Reservation
                            </button>
                        </div>
                        <div>
                            <p>Rules:</p>
                            <ul type="square">
                                <li>2 People</li>
                                <li>2 Photo Print</li>
                                <li>15 Minute Session</li>
                                <li>10 Minute Choose Photo</li>
                                <li>Free Soft File Google Drive</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Feedback">
            <div class="container py-5">
                <div class="row">
                    <div class="col-6">
                        <p class="fw-medium" style="font-size: 16px">03</p>
                        <h1 class="fw-semibold" style="font-size: 56px">
                            Feedback
                        </h1>
                    </div>
                </div>
                <div class="row g-5 mt-3">
                    <div class="col-4">
                        <div class="row gap-3">
                            <div class="col-12 border py-2 px-3 bg-feedback">
                                <div class="row">
                                    <div class="col-3">
                                        <img
                                            src="/./assets/markhudson.svg"
                                            alt="" />
                                    </div>
                                    <div class="col-9 name">
                                        Mark Hudson
                                        <p>
                                            <img
                                                src="/assets/bintang5.svg"
                                                alt="" />
                                        </p>
                                        <p style="font-weight: normal">
                                            Always be the first choice to take
                                            photo. Good service, good place, and
                                            good photo quality with competitive
                                            price.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 border py-2 px-3 bg-feedback">
                                <div class="row">
                                    <div class="col-3">
                                        <img
                                            src="./assets/angeline.svg"
                                            alt="" />
                                    </div>
                                    <div class="col-9 name">
                                        Angeline Jo
                                        <p>
                                            <img
                                                src="/assets/bintang4.svg"
                                                alt="" />
                                        </p>
                                        <p style="font-weight: normal">
                                            The website is easy to use!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 border py-2 px-3 bg-feedback">
                                <div class="row">
                                    <div class="col-3">
                                        <img
                                            src="/./assets/markhudson.svg"
                                            alt="" />
                                    </div>
                                    <div class="col-9 name">
                                        Mark Hudson
                                        <p>
                                            <img
                                                src="/assets/bintang5.svg"
                                                alt="" />
                                        </p>
                                        <p style="font-weight: normal">
                                            Always be the first choice to take
                                            photo. Good service, good place, and
                                            good photo quality with competitive
                                            price.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row gap-3">
                            <div class="col-12 border py-2 px-3 bg-feedback">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/./assets/nedlyn.svg" alt="" />
                                    </div>
                                    <div class="col-9 name">
                                        Nedlyne Rose
                                        <p>
                                            <img
                                                src="/assets/bintang4.svg"
                                                alt="" />
                                        </p>
                                        <p style="font-weight: normal">
                                            The service is very complete.
                                            reservation just got easier!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 border py-2 px-3 bg-feedback">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/./assets/nedlyn.svg" alt="" />
                                    </div>
                                    <div class="col-9 name">
                                        Nedlyne Rose
                                        <p>
                                            <img
                                                src="/assets/bintang4.svg"
                                                alt="" />
                                        </p>
                                        <p style="font-weight: normal">
                                            The service is very complete.
                                            reservation just got easier!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row gap-3">
                            <div class="col-12 border py-2 px-3 bg-feedback">
                                <div class="row">
                                    <div class="col-3">
                                        <img
                                            src="/./assets/angeline.svg"
                                            alt="" />
                                    </div>
                                    <div class="col-9 name">
                                        Angeline Jo
                                        <p>
                                            <img
                                                src="/assets/bintang4.svg"
                                                alt="" />
                                        </p>
                                        <p style="font-weight: normal">
                                            The website is easy to use!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 border py-2 px-3 bg-feedback">
                                <div class="row">
                                    <div class="col-3">
                                        <img
                                            src="/./assets/markhudson.svg"
                                            alt="" />
                                    </div>
                                    <div class="col-9 name">
                                        ini ulasan
                                        <p>
                                            <img
                                                src="/assets/bintang5.svg"
                                                alt="" />
                                        </p>
                                        <p style="font-weight: normal">
                                            Always be the first choice to take
                                            photo. Good service, good place, and
                                            good photo quality with competitive
                                            price.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <section class="py-5 border-top border-1 border-dark">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-flex my-auto">
                        <p class="m-0">2023 © All Right Reserved</p>
                    </div>
                    <div class="col-6 d-flex justify-content-end gap-3">
                        <img src="/assets/Group 68.svg" alt="" />
                        <img src="/assets/Group 69.svg" alt="" />
                        <img src="/assets/Group 70.svg" alt="" />
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
        <script src="/main.js"></script>
    </body>
</html>
