<?php
session_start();
require_once "koneksi.php"; // File koneksi ke database

if (isset($_FILES['konfirmasi'])) {
    $namaFile = $_FILES['konfirmasi']['name'];
    $tmpFile = $_FILES['konfirmasi']['tmp_name'];

    // Tentukan lokasi penyimpanan file
    $direktori = "upload/";
    $pathFile = $direktori . $namaFile;

    // Pindahkan file ke direktori penyimpanan
    if (move_uploaded_file($tmpFile, $pathFile)) {
        // Simpan informasi file ke dalam database
        $query = "INSERT INTO konfirmasi (bukti_bayar) VALUES ('$namaFile')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>
            alert('Data berhasil dikirim');
            window.location = 'home.php';
        </script>";;
        } else {
            echo "Terjadi kesalahan saat menyimpan file ke database.";
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}

?>