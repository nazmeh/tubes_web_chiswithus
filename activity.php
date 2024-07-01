<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

include "koneksi.php";

$enumPaket = ['1' => 'WEEKDAYS', '2' => 'WEEKEND', '3' => 'PROMO'];
$enumBackground = ['1' => 'BLUE', '2' => 'BROWN', '3' => 'WHITE'];

if (isset($_SESSION['paket']) && isset($_SESSION['background']) && isset($_SESSION['numOfPeople'])) {
    $paket = $_SESSION['paket'];
    $background = $_SESSION['background'];
    $numOfPeople = $_SESSION['numOfPeople'];

    $paketValue = isset($enumPaket[$paket]) ? $enumPaket[$paket] : "Unknown Package";
    $backgroundValue = isset($enumBackground[$background]) ? $enumBackground[$background] : "Unknown Background";
}

// User id login
$user_id = $_SESSION['id_pelanggan'];

if (isset($_SESSION['id_confirm'])) {
    $id_confirm = $_SESSION['id_confirm'];

    $get_upcoming_booking = mysqli_query($conn, "SELECT * FROM konfirmasi WHERE id_confirm='$id_confirm' AND status='UPCOMING'");

    $get_completed_booking = mysqli_query($conn, "SELECT * FROM konfirmasi WHERE id_confirm='$id_confirm' AND status='COMPLETED'");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Activity</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand fs-4 text-white" href="#"><img src="" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav flex-grow-1 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="home.php">Home</a>
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


    <section class="my-5 flex-grow-1 mytab">
        <div class="container h-100">
            <p class="fw-bold d-flex justify-content-center mt-5 fs-4 mb-5">
                ACTIVITY
            </p>
            <ul class="nav nav-pills nav-fill mb-3 w-100" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= mysqli_num_rows($get_upcoming_booking) > 0 ? 'active' : '' ?>" id="pills-upcoming-tab" data-bs-toggle="pill" data-bs-target="#pills-upcoming" type="button" role="tab" aria-controls="pills-upcoming" aria-selected="true">Upcoming</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= mysqli_num_rows($get_completed_booking) > 0 ? 'active' : '' ?>" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-complete" type="button" role="tab" aria-controls="pills-complete" aria-selected="false">Complete</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <?php if (mysqli_num_rows($get_upcoming_booking) > 0) : ?>
                    <div class="col-md-6 tab-pane fade <?= mysqli_num_rows($get_upcoming_booking) > 0 ? 'show active' : '' ?> rounded-3 border-1" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab" style="border-color:#c37b52; border-style: solid;">

                        <?php while ($upBook = mysqli_fetch_array($get_upcoming_booking)) : ?>
                            <div class="mt-3 p-3 ">
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <img class="ratio ratio-1x1" src="assets/imgcomplete.jpg" alt="" width="200px" height="200px" />
                                    </div>
                                    <div class="row col-8">
                                        <div class="col-7">
                                            <div class="d-flex justify-content-between">
                                                <p style="
                                                    font-weight: 800;
                                                    font-size: 16px;
                                                ">
                                                    <?= $upBook['paket'] ?> PACKAGE
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between" style="font-weight: 400;">
                                                <p>Background : <?php echo $upBook['background'] ?></p>
                                            </div>
                                            <div class="d-flex justify-content-between" style="font-weight: 400;">
                                                <p>Number Of People : <?php echo $upBook['numOfPeople'] ?></p>
                                            </div>
                                            <div class="d-flex justify-content-start" style="font-weight: 400;">
                                                <img src="assets/centangupcoming.svg" alt="" />
                                                Reservation Success
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="d-flex justify-content-end">
                                                <p style="
                                                    font-weight: 800;
                                                    font-size: 16px;
                                                ">
                                                    DATE
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-end" style="font-weight: 400;">
                                                <p><?php echo $upBook['tanggal_booking']; ?></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-end pt-3 border-top">
                                    <form action="complete_booking.php" method="POST">
                                        <input type="hidden" name="id_confirm" value="<?= $upBook['id_confirm'] ?>">
                                        <button type="submit" class="btn btn-warning active w-30 rounded-5 mb-3 mt-3 border-0" onclick="window.location.href='reservation.html';" style="
                                                background-color: #c37b52;
                                                border: none;
                                                color: white;
                                            ">
                                            Complete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <div class="col-md-6 mx-auto text-center tab-pane fade show rounded-3 border-1" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                        <img class="py-5" src="assets/vectoractivity.svg" alt="">
                        <p style="font-weight: 500; font-size: 16px">
                            Sorry, you don't have any completed activities yet
                        </p>
                        <form action="reservation.php" method="post">
                            <button type="submit" formaction="reservation.php" class="btn btn-warning active w-30 rounded-5 mb-5 mt-3 border-0" style="
                                    background-color: #c37b52;
                                    border: none;
                                    color: white;
                                ">
                                Reservation Now
                            </button>
                        </form>
                    </div>
                <?php endif; ?>

                <?php if (mysqli_num_rows($get_completed_booking) > 0) : ?>
                    <div class="col-md-6 tab-pane fade <?= mysqli_num_rows($get_completed_booking) > 0 ? 'show active' : '' ?> rounded-3 border-1" id="pills-complete" role="tabpanel" aria-labelledby="pills-complete-tab" style="border-color:#c37b52; border-style: solid;">

                        <?php while ($upBook = mysqli_fetch_array($get_completed_booking)) : ?>
                            <div class="mt-3 p-3 rounded-3">
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <img class="ratio ratio-1x1" src="assets/imgcomplete.jpg" alt="" width="200px" height="200px" />
                                    </div>
                                    <div class="row col-8">
                                        <div class="col-7">
                                            <div class="d-flex justify-content-between">
                                                <p style="
                                                    font-weight: 800;
                                                    font-size: 16px;
                                                ">
                                                    <?= $upBook['paket'] ?> PACKAGE
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between" style="font-weight: 400">
                                                <p>Background : <?php echo $upBook['background'] ?></p>
                                            </div>
                                            <div class="d-flex justify-content-between" style="font-weight: 400">
                                                <p>Number Of People : <?php echo $upBook['numOfPeople'] ?></p>
                                            </div>
                                            <div class="d-flex justify-content-start" style="font-weight: 400">
                                                <img src="assets/centangupcoming.svg" alt="" />
                                                Reservation Success
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="d-flex justify-content-end">
                                                <p style="
                                                    font-weight: 800;
                                                    font-size: 16px;
                                                ">
                                                    DATE
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-end" style="font-weight: 400">
                                                <p><?php echo $upBook['tanggal_booking']; ?></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-end py-3 mb-3 mt-3 border-top">

                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <div class="col-md-6 mx-auto text-center tab-pane fade show rounded-3 border-1" id="pills-complete" role="tabpanel" aria-labelledby="pills-complete-tab">
                        <img class="py-5" src="assets/vectoractivity.svg" alt="">
                        <p style="font-weight: 500; font-size: 16px">
                            Sorry, you don't have any completed activities yet
                        </p>
                        <form action="reservation.php" method="post">
                            <button type="submit" formaction="reservation.php" class="btn btn-warning active w-30 rounded-5 mb-5 mt-3 border-0" style="
                                    background-color: #c37b52;
                                    border: none;
                                    color: white;
                                ">
                                Reservation Now
                            </button>
                        </form>
                    </div>
                <?php endif; ?>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="tes.js"></script>


</body>

</html>