<?php>
SESSION_start();
include '../config/config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);
    $cpass = hash('sha256', $_POST['cpassword']);
    $level = $_POST['level'];

    if ($password == $cpass){
        $sql = "SELECT * FROM user WHERE username='username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0){
            $sql = "INSERT INTO user VALUES (NULL, '$nama', '$uername', '$password', '$level')";
            $result = mysqli_query($conn, $sql);
            if (!$result->num){
                echo "<skript>alert('register berhasil.'); document.location.href = '../index.php';</script>";
                $level = "";

            }else {
                echo "<skript>alert('terjadi kesalahan.')</script>";
                

            }
        }else{
            echo "<skript>alert('user sudah terdaftar.')</script>";
        }
    }else{
        echo "<skript>alert('password tidak sesuai.')</script>";
    }
}