<?php
include 'koneksi.php';

// data dari form
$no=$_POST['no'];
$nama_lengkap=$_POST['nama_lengkap'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$jurusan=$_POST['jurusan'];
$nis=$_POST['nis'];
$nisn=$_POST['nisn'];

mysqli_query($host,"UPDATE siswa
SET nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin' ,jurusan='$jurusan',nis='$nis',nisn='$nisn'
WHERE no='$no'");

// pindah ke halaman index
header("location:page_guru.php");
