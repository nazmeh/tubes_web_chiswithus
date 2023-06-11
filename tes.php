<?php
session_start();
require_once "koneksi.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Cek konfirmasi password
    if ($password != $confirmPassword) {
        echo "<script>
            alert('Password yang Anda masukkan tidak sama dengan password konfirmasi.');
            window.location = 'register.php';
        </script>";
        exit;
    }

    // Cek apakah username sudah terdaftar
    $cek_user = mysqli_query($conn, "SELECT * FROM pelanggan WHERE username = '$username'");
    $cek_login = mysqli_num_rows($cek_user);

    if ($cek_login > 0) {
        echo "<script>
            alert('Username telah terdaftar');
            window.location = 'register.php';
        </script>";
        exit;
    } else {
        // Username belum terdaftar, lakukan penyimpanan data
        $sql = "INSERT INTO pelanggan (username, email, number, password) VALUES ('$username', '$email', '$number','$password')";
        mysqli_query($conn, $sql);

        echo "<script>
            alert('Data berhasil dikirim');
            window.location = 'login.php';
        </script>";
        exit;
    }
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $sql = "SELECT * FROM pelanggan WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) == 1) {
    // Login berhasil
    // Mendapatkan data pengguna dari hasil quer
    $row = mysqli_fetch_assoc($result);

  // set session
    $_SESSION["login"] = true;
    $_SESSION["id_pelanggan"] = $row['id_pelanggan'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["number"] = $row['number'];
    $_SESSION["password"] = $row['password'];
    echo "<script>
    window.location = 'home.php';
    </script>";
  } else {
    // Login gagal
    echo "<script>
    alert('Login gagal. Periksa kembali username dan password Anda.');
    window.location = 'login.php';
    </script>";
  }
}

$enumPaket = ['1' => 'WEEKDAYS', '2' => 'WEEKEND', '3' => 'PROMO'];
$enumBackground = ['1' => 'BLUE', '2' => 'BROWN', '3' => 'WHITE'];

$hargaPaket = [
    '1' => 80000, // Harga untuk WEEKDAYS
    '2' => 100000, // Harga untuk WEEKEND
    '3' => 60000 // Harga untuk PROMO
];

// Mendefinisikan harga tambahan per orang
$hargaTambahanPerOrang = 20000;
$serviceFee = 1000;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['konfirm'])) {

    // Mengambil nilai dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $instagram = $_POST['instagram'];
    $numOfPeople = $_POST['numOfPeople'];
    $tanggal_booking = $_POST['tanggal_booking'];
    $background = $_POST['background'];
    $paket = $_POST['paket'];
    // Lakukan validasi data jika diperlukan

    $hargaPaketPilihan = $hargaPaket[$paket];
    $hargaTambahanOrang = ($numOfPeople > 2) ? ($numOfPeople - 2) * $hargaTambahanPerOrang : 0;

    $subtotal = $hargaPaketPilihan + $hargaTambahanOrang;
    $total = $subtotal + $serviceFee;

    // Membuat query untuk menyimpan data
    $sql = "INSERT INTO konfirmasi (name, email, phone, instagram, numOfPeople, tanggal_booking, background, paket)
            VALUES ('$name', '$email', '$phone', '$instagram', '$numOfPeople', '$tanggal_booking', '$background', '$paket')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['paket'] = $paket;
        $_SESSION['background'] = $background;
        $_SESSION['numOfPeople'] = $numOfPeople;
        $_SESSION['tanggal_booking'] = $tanggal_booking;
        $_SESSION['subtotal'] = $subtotal;
        $_SESSION['total'] = $total;

        // Jika penyimpanan data berhasil
        echo "<script>
            alert('Booking berhasil dikonfirmasi');
            window.location = 'payment.php';
        </script>";
        exit();
    } else {
        // Jika terjadi kesalahan saat menyimpan data
        $errorMessage = "Kesalahan input pesanan. Error: " . $sql . "<br>" . $conn->error;
        echo "<script>
                alert('$errorMessage');
                window.location = 'reservation.php';
              </script>";
        exit();
    }
}

?>
