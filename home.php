<?php
session_start();
if (!isset($_SESSION["login"])) {
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style1.css" />
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand fs-4 text-white" href="#"><img src="assets/logo.svg" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav flex-grow-1 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="reservation.php">Reservation</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="dropdown">
                        <button class="dropdown bg-transparent border-0" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/profile.svg" alt="" />
                            <img src="assets/panahprofile.svg" alt="" />
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="profile.php"><img class="me-3" src="assets/iconprofile.svg" alt="" />Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="activity.php"><img class="me-3" src="assets/iconactivity.svg" alt="" />Activy</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php"><img class="me-3" src="assets/iconlogout.svg" alt="" />Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="Home" style="
                background-image: url(./assets/studiohome.jpg);
                height: 100vh;
                background-size: cover;
                background-repeat: no-repeat;
            ">
        <div class="container h-100 d-flex align-items-center justify-content-between">
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
                <img src="assets/Union.svg" alt="" style="transform: rotate(90deg)" class="me-3" />
                scroll down to read more
            </p>
        </div>
    </section>

    <section id="Gallery" style="background-image: url(assets/half.svg); height: 320px">
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
                            <span><img src="assets/Group 24.svg" alt=" " /></span>
                        </button>
                        <button class="nofocus" onclick="scrolll()">
                            <span><img src="assets/Group 25.svg" alt=" " /></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-flex flex-row flex-nowrap overflow-hidden scroll-smooth scroll-image cover">
                <div class="col-md-3 child">
                    <div class="card card-hover">
                        <img class="card-img-top" src="assets/family.jpg" alt="Card image cap" />
                        <div class="obj-overlay d-flex justify-content-center">
                            family
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="assets/friends.jpg" alt="Banana Boat" />
                        <div class="obj-overlay d-flex justify-content-center">
                            Friend
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="assets/couple.jpg" alt="Card image cap" />
                        <div class="obj-overlay d-flex justify-content-center">
                            Couple
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="assets/selfphoto.jpg" alt="Card image cap" />
                        <div class="obj-overlay d-flex justify-content-center">
                            SelfPhoto
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="assets/graduation.jpg" alt="Card image cap" />
                        <div class="obj-overlay d-flex justify-content-center">
                            Graduation
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card card-hover">
                        <img class="card-img-top" src="assets/family.jpg" alt="Card image cap" />
                        <div class="obj-overlay d-flex justify-content-center">
                            Family
                        </div>
                    </div>
                </div>
                <div class="col-md-3 child">
                    <div class="card">
                        <img class="card-img-top" src="assets/friends.jpg" alt="Banana Boat" />
                        <div class="obj-overlay d-flex justify-content-center">
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
                <div class="col rounded-4 overflow-hidden shadow-sm py-3 px-4 gy-5 border position-relative">
                    <img src="assets/element_1.svg" alt="" class="position-absolute top-0 end-0" />
                    <div class="gy-3">
                        <button type="button" class="btn btn-warning w-30 rounded-5 mb-3 border-0 active" style="background-color: #ffab2f; color: white">
                            Weekdays
                        </button>
                        <h1 class="">80K</h1>
                        <p>
                            Weekdays is a package that can be used from
                            Monday-Friday
                        </p>
                        <button type="button" class="btn btn-warning w-100 rounded-5 mb-3 active border-0" style="color: white; background-color: #c37b52">
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
                <div class="col rounded-4 overflow-hidden shadow-sm py-3 px-4 gy-5 border position-relative">
                    <img src="assets/element 2.svg" alt="" class="position-absolute end-0 top-0" />
                    <div class="gy-3">
                        <button type="button" class="btn btn-warning w-30 rounded-5 mb-3 border-0 active" style="background-color: #214b73; color: white">
                            Promo
                        </button>
                        <h1 class="">60K</h1>
                        <p>
                            Promo is a package that can be used for National
                            Holiday
                        </p>
                        <button type="button" class="btn btn-warning w-100 rounded-5 mb-3 active border-0" style="color: white; background-color: #c37b52">
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
                <div class="col rounded-4 overflow-hidden shadow-sm py-3 px-4 gy-5 border position-relative">
                    <img src="assets/element 3.svg" alt="" class="position-absolute end-0 top-0" />
                    <div class="gy-3">
                        <button type="button" class="btn btn-warning w-30 rounded-5 mb-3 border-0 active" style="background-color: #582760; color: white">
                            Weekend
                        </button>
                        <h1 class="">100K</h1>
                        <p class="">
                            Weekdays is a package that can be used from
                            Saturday and Sunday
                        </p>
                        <button type="button" class="btn btn-warning w-100 rounded-5 mb-3 active border-0" style="color: white; background-color: #c37b52">
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
            <p class="pt-4">
                *Addition 20K/Person in 1 Session
            </p>
        </div>
    </section>

    <section id="Feedback">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="fw-medium" style="font-size: 16px">03</p>
                    <h1 class="fw-semibold" style="font-size: 56px">
                        Feedback
                    </h1>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Ulasan Pengguna</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <h1 class="text-warning mt-4 mb-4">
                                <b><span id="average_rating">0.0</span> / 5</b>
                            </h1>
                            <div class="mb-3">
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                            </div>
                            <h3><span id="total_review">0</span> Review</h3>
                        </div>
                        <div class="col-sm-4">
                            <p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3 class="mt-4 mb-3">Write Review Here</h3>
                            <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php $query = mysqli_query($conn, "SELECT * FROM review") ?>
            <div class="row mt-4">
                <div class="col-sm-12 text-center">
                    <h2 class="h3">Review</h2>
                </div>

                <?php while ($review = mysqli_fetch_array($query)) : ?>
                    <div class="col-sm-4">
                        <div class="card my-2 p-2">
                            <div>
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <?php if ($i <= $review['user_rating']) : ?>
                                        <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                                    <?php else : ?>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>

                            <p class="font-weight-bold text-uppercase">
                                <?= $review['user_name'] ?>
                            </p>

                            <p class="text-sm">
                                <?= $review['user_review'] ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <br>
        <br>

        <!-- footer -->
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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="main.js"></script>
        <script src="feedback.js"></script>
</body>

</html>

<div id="review_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="review_modal_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="review_modal_label">Submit Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="review_form" method="POST" action="submit_rating.php">
                    <h4 class="text-center mt-2 mb-4">
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                    </h4>
                    <div class="form-group">
                        <label for="user_name">Nama:</label>
                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="user_review">Ulasan:</label>
                        <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="submit" id="save_review" name="submit" class="btn btn-warning w-30 rounded-5 mb-5 mt-3 border-0" style="
                        background-color: #c37b52;
                        border: none;
                        color: white;
                        font-size: 12px;
                    ">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>