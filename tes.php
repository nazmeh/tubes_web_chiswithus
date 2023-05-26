<?php
include "koneksi.php";

if(isset($_POST['register'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  //cek konfirmasii password
  $sql = "INSERT INTO pelanggan (username, email, password)
  VALUES ('$username', '$email', '$password')";

    /*$cek_user = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE username= '$username'");
    $cek_login = mysqli_num_rows($cek_user);

    if($cek_login>0){
      echo "<script>
            alert('Username telah terdaftar');
            window.location = 'registrasi.php'
      </script>";
    }else{*/

      //cek konfirmasii password
    if($password != $confirmPassword){
      $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
      header("Location: register.php");
      exit;
    }else{
        mysqli_query($conn ,"INSERT INTO pelanggan VALUES('','$username','$email', '$password')");
        echo "<script>
        alert('Data berhasil dikirim');
        window.location = 'login.php'
       </script>";
      }
    }

    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
  
      $sql = "SELECT * FROM pelanggan WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $sql);
  
      if (mysqli_num_rows($result) == 1) {
          echo "<script>
              window.location = 'index.php';
          </script>";
      } else {
          // Login gagal
          echo "<script>
              alert('Login gagal. Periksa kembali username dan password Anda.');
              window.location = 'login.php';
          </script>";
      }
    }

?>
