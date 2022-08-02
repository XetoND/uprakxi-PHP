<?php
$host = mysqli_connect("localhost","root","","uprakxi");

function query($query){
    global $host;
    $result = mysqli_query($host,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] =$row;
    }
    return $rows;
}

function store($data) {
    global $host;

    $nama_lengkap = $data['nama_lengkap'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $jurusan = $data['jurusan'];
    $nis = $data['nis'];
    $nisn = $data['nisn'];

    $query = "INSERT INTO siswa(nama_lengkap,jenis_kelamin,jurusan,nis,nisn) 
        VALUES ('$nama_lengkap','$jenis_kelamin','$jurusan','$nis','$nisn')
                 ";
    mysqli_query($host,$query);
    
    return mysqli_affected_rows($host);

}

function update($data) {
    global $host;

    $no = $data['no'];
    $nama_lengkap = $data['nama_lengkap'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $jurusan = $data['jurusan'];
    $nis = $data['nis'];
    $nisn = $data['nisn'];
    
    $query = "UPDATE siswa
                SET nama_lengkap='$nama_lengkap',
                    jenis_kelamin='$jenis_kelamin' ,
                    jurusan='$jurusan',
                    nis='$nis',
                    nisn='$nisn'
                WHERE no='$no'";

    mysqli_query($host, $query);

    return mysqli_affected_rows($host);
}

function signup($data) {
    global $host;
    var_dump($data);
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $posisi = $_POST['posisi'];
    $create_date = date("Y-m-d");

    mysqli_query($host, "INSERT INTO user(email,username,password,posisi,create_date)
    VALUE('$email','$username','$password','$posisi','$create_date')");

    return mysqli_affected_rows($host);
}

