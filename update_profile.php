<?php
include "koneksi.php";
// Pastikan pengguna sudah login sebelum memproses pembaruan
session_start();

if (isset($_POST['update_profile'])) {
    // Ambil data yang dikirim melalui POST
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];// Ubah ini sesuai dengan kolom yang sesuai dengan password di tabel wisatawan

    // Perbarui profil wisatawan dalam tabel wisatawan
    $query = "UPDATE pelanggan SET username = '$username', email = '$email', number = '$number' WHERE password = '$password'";
    $result = mysqli_query($conn, $query);

    // Periksa apakah pembaruan berhasil atau tidak
    if ($result) {
        // Pembaruan berhasil
        // Update nilai-nilai dalam sesi
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        $_SESSION["number"] = $number;
        $_SESSION["password"] = $password;

        echo "<script>
        alert('Update profile berhasil dilakukan');
        window.location = 'profile.php';
        </script>";
    } else {
        // Pembaruan gagal
        // Tampilkan pesan kesalahan atau lakukan tindakan yang sesuai
        echo "Failed to update profile. Please try again.";
    }
}

?>
