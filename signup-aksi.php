<?php
include "koneksi.php";

// dari form
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($host, "INSERT INTO user(email,username,password)
VALUE('$email','$username','$password')");

header("location:login.php");
?>
