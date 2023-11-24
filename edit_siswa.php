<?php
include '../config/config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $tl = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $sql = "UPDATE siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jk', tanggal_lahir='$tl', alamat='$alamat', jurusan='$jurusan' WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    
    if ($query) {
        header('Location: ../siswa.php');
    }else {
        die("Gagal Menyiapkan Perubahan!");
    }
} else {
    die("Akses Ubah Dilarang!");
}
?>