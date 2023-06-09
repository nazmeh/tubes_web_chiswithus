<?php
// Mengimpor file koneksi database
include "../koneksi.php";

// Mengecek apakah request adalah metode POST dan ada data yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"]) && isset($_POST["status"])) {
    // Mendapatkan data yang dikirimkan melalui POST
    $id = $_POST["id_payment"];
    $status = $_POST["status"];

    // Melakukan sanitasi data, jika diperlukan
    // ...

    // Melakukan pembaruan status di database
    $query = "UPDATE payment SET status = '$status' WHERE id_payment = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Jika pembaruan berhasil, kirim respons berhasil
        echo "Status berhasil diperbarui";
    } else {
        // Jika pembaruan gagal, kirim respons gagal
        echo "Gagal memperbarui status";
    }
} else {
    // Jika tidak ada data yang dikirimkan atau metode request tidak valid, kirim respons error
    echo "Permintaan tidak valid";
}
?>
