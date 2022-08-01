<?php 

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($host,"SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);


if($cek>0){
    $data = mysqli_fetch_assoc($login);
    if($data['posisi']=="Guru"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['posisi'] = "Guru";

        header("location:page_guru.php");
    }

    else if($data['posisi']=="Murid"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['posisi'] = "Murid";

        header("location:page_siswa.php");
    }

    else{
        echo "
        <script> 
            alert('Data Gagal');
            window.location = 'login.php'
        </script>";
    }
}
else{
    echo "<script> 
            alert('Data Gagal');
            window.location = 'login.php'
        </script>";
    
    
}
    
?>
