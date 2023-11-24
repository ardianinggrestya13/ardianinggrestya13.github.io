<?php
session_start();
include "../config/config.php";

if 
($_session['username']== ""){
    header("location: ../index.php?pesan=gagal");
}
 
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jmsaudara = $_POST['jmsaudara'];
    $idkelas = $_POST['idkelas'];
    $idagama = $_POST['idagama'];

    $insert ="UPDATE siswa SET nama= '$nama', tplahir = 'tglahir', alamat = '$alamat', hobi, '$hobi', cita_cita = '$cita_cita ";

}