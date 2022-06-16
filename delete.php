<?php
include'koneksi.php';
$no=$_GET['no'];
mysqli_query($host,"DELETE FROM siswa WHERE no='$no'");

header("location:index.php");
?>