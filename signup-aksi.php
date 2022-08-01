<?php
include "koneksi.php";

// dari form
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$posisi = $_POST['posisi'];
$create_date = date("Y-m-d");

mysqli_query($host, "INSERT INTO user(email,username,password,posisi,create_date)
VALUE('$email','$username','$password','$posisi','$create_date')");

header("location:login.php");
?>
