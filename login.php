<?php>
session_start();
include "../config/config.php";

if (isset($_POST[submit])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        if($row['level'] == "1"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = '1';
             header("location:../siswa.admin.php");
            }else if($row['level']== "2") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = '2';
             header("location:../siswa.operator.php");
        }else if($row['level'] == "3"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = '3';
             header("location:../siswa.php");
        }else{
            echo"<script>alert('Gagal Login'); document.location.href = '../index.php';</script>";
        }
    }else{
        echo"<script>alert('Email atau password salah'); document.location.href = '../index.php'</script>";
        }
}
?>