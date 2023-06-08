<?php
include "../koneksi.php";

// Pastikan koneksi ke basis data sudah dilakukan
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['id_confirm'])) {
    $id_confirm = $_GET['id_confirm'];

    // Menjalankan pernyataan SQL untuk menghapus berdasarkan ID
    $query = "DELETE FROM konfirmasi WHERE id_confirm = '$id_confirm'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_affected_rows($conn) == 1) {
            echo "
            <script> 
                alert('Data Berhasil Dihapus');
                window.location.href = 'tabel_pesanan.php';
            </script>";
        } else {
            echo "<script> 
                alert('Data Tidak Ditemukan');
                window.location.href = 'tabel_pesanan.php';
            </script>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

