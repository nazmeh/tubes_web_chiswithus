<?php
session_start();
require_once "koneksi.php"; // File koneksi ke database

if (isset($_FILES['bukti_bayar'])) {
    $namaFile = $_FILES['bukti_bayar']['name'];
    $tipeFile = $_FILES['bukti_bayar']['type'];
    $ukuranFile = $_FILES['bukti_bayar']['size'];
    $tmpFile = $_FILES['bukti_bayar']['tmp_name'];

    // Tentukan lokasi penyimpanan file
    $direktori = "upload/";
    $pathFile = $direktori . $namaFile;

    // Pindahkan file ke direktori penyimpanan
    if (move_uploaded_file($tmpFile, $pathFile)) {
        // Simpan informasi file ke dalam database
        $query = "INSERT INTO payment (nama_file, tipe_file, ukuran_file) VALUES ('$namaFile', '$tipeFile', '$ukuranFile')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>
            alert('Data berhasil dikirim');
            window.location = 'home.php';
        </script>";
        } else {
            echo "Terjadi kesalahan saat menyimpan file ke database.";
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}
