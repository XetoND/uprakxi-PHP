<?php
include "koneksi.php";

// dari form
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$nis = $_POST['nis'];
$nisn = $_POST['nisn'];

mysqli_query($host, "INSERT INTO siswa(nama_lengkap,jenis_kelamin,jurusan,nis,nisn)
VALUE('$nama_lengkap','$jenis_kelamin','$jurusan','$nis','$nisn')");

header("location:page_guru.php");
?>
