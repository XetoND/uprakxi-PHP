<html lang="en">
<head>
    <title>Input Data</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
  <style>
    *{
      font-family: "open sans";
    }
    body{
      background-image: linear-gradient(rgba(206,206,206,0.5),rgba(206,206,206,0.5)),url(gambar/white.jpg);
      background-position: center;
      background-size: cover;
    }
    table{
      margin-top: 45px;
      width: 35%;
      box-shadow: 0 10px 32px 0 rgba( 31, 38, 135, 0.65);
      border-radius: 10px;
    }
    table tr td{
      padding: 15px 20px ;
    }
    h1{
      margin-top: 25px;
    }
    hr{
      border: none;
      height: 4px;
      background-color: #000000;

    }
    .tombol{
      text-align: right;
    }
    input{
      width: 100%;
    }
  </style>
</head>
<body>
    
<center>
    <h1>Sign Up</h1>
</center>

    <center>
      <form action="signup-aksi.php"method="POST">
          <table>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Email" required></td>
            </tr>
            <tr>
              <td>Username</td>
              <td><input type="text" name="username" placeholder="Username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Password" required></td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td><select name="posisi" required>
                  <option value="Pilih">Pilih Salah Satu</option>
                  <option value="Murid">Murid</option>
                  <option value="Guru">Guru</option>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-outline-secondary" type="submit" value="Simpan"></td>
            </tr>
          </table>
      </form>
    </center>
</body>
</html>
