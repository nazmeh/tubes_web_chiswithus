<?php
session_start();
require_once "koneksi.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
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
        $sql = "INSERT INTO pelanggan (username, email, password) VALUES ('$username', '$email', '$password')";
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
  // set session
    $_SESSION["login"] = true;
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

/*if (isset($_POST['reservation'])) {
  // Mengambil nilai dari form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $instagram = $_POST['instagram'];
  $numOfPeople = $_POST['numOfPeople'];
  $background = $_POST['background'];
  $paket = $_POST['paket'];

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  // Membuat query untuk menyimpan data
  $sql = "INSERT INTO confirm (name, email, phone, instagram, numOfPeople, background, paket) VALUES ('$name', '$email', '$phone', '$instagram', '$numOfPeople', '$background', '$paket')";
  mysqli_query($conn, $sql);

  if ($conn->query($sql) === TRUE) {
      // Jika penyimpanan data berhasil
      echo "<script>
          alert('Booking berhasil dikonfirmasi');
          window.location = 'payment.php';
      </script>";
      exit;
  } else {
      // Jika terjadi kesalahan saat menyimpan data
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}*/

mysqli_close($conn);

?>
