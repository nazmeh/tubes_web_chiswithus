<?php
include "koneksi.php";
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO login (username, password)  
          VALUES ('$username', '$password')";

  if ($conn->query($sql) === TRUE){
    header("Location: about.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
