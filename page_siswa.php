<?php 
session_start();

  if($_SESSION['posisi']==""){
    header("location:login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Siswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <style>
            *{
              font-family: "open sans";
            }
            body{
              background-image: linear-gradient(rgba(206,206,206,0.5),rgba(206,206,206,0.5)),url(gambar/white.jpg);
              background-position: center;
	            background-size: cover;
            }
            h1{
              margin-top: 30px;
            }
            hr{
              border: none;
              height: 4px;
              background-color: #000;
            }
            table.table tr th,
            table.table tr td{
              padding: 10px 20px ;
            }
            .tombol{
              text-align: right;
            }
            td a{
              text-decoration: none;
              color: #000;
            }
            i{
              font-style: normal;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
        <center>
        <h1>Data Siswa</h1>
        </center>
        <div class="tombol">
        <a class="btn btn-outline-danger" href="logout.php" role="button">Log out</a>
        </div>
        <hr>
        <br>
      <center>
        
        <table class="table table-secondary table-striped-columns">
            <tr>
                <th style="text-align:center;">No</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Nisn</th>
                <th>Nis</th>
            </tr>
            <?php
            include "koneksi.php";
            $data_mysql = mysqli_query($host, "SELECT*FROM siswa");
            $nomor = 1;
            while ($data = mysqli_fetch_assoc($data_mysql)) {
            ?>
            <tr>
                <td style="text-align:center;"><?php echo $nomor++?></td>
                <td><?php echo $data['nama_lengkap'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['jurusan'] ?></td>
                <td><?php echo $data['nis'] ?></td>
                <td><?php echo $data['nisn'] ?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
      </center>
    </body>
</html>
