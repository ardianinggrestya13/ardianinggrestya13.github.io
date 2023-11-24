<?php
include '../config/config.php';
session_start();
if ($_SESIION['level'] == ""){
    header("location: ../index.php?pesan=gagal");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siswa - administrator</title>
</head>
<body>
    <div class="container p-4">
        <h5>Tambah siswa : </h5>
        <form method="post" action="../controller/tambah_siswa.php">
            <label for="">nama :</label>
            <input type="text" name="name" required>
            <br><br>
            <label for="">tempat lahir</label>
            <input type="text" name="tplahir" required>
            <label for="">tangal lahir</label>
            <input type="text" name="tglahir" required>
            <br><br>
            <label for="">alamat :</label>
            <br>
            <textarea name="alamat" id="" cols="30" rows="5" required></textarea>
            <br><br>
            <label for="">hobi :</label>
            <input type="text" name="hobi" required>
            <br><br>
            <label for="">cita_cita :</label>
            <input type="text" name="cita_cita" required>
            <br><br>
            <label for="">jumlah saudara :</label>
            <input type="text" name="jumlah saudara" required>
            <br><br>
            <label for="">kelas :</label>
            <select name="idkelas" id="" required>
                <option value="1">XI RPL 1</option>
                <option value="1">XI DKV 1</option>
                <option value="1">XI TKJ 1</option>
            </select>
            <br><br>
            <label for="">agama :</label>
            <select name="idagama" id="" required>
                <option value="1">islam</option>
                <option value="1">kristen</option>
                <option value="1">hindu</option>
            </select>
            <br><br>
            <input type="submit" name="save" value="submit">
        </form>

    </div>
    <div class="container p-4">
        <table border="1" width="85%" align="center" class="table">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>tempat lahir</th>
                    <th>tanggal lahir</th>
                    <th>alamat</th>
                    <th>hobi</th>
                    <th>cita_cita</th>
                    <th>jumlah saudara</th>
                    <th>kelas</th>
                    <th>agama</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = "select siswa.nama, siswa.tplahir, siswa.tglahir, siswa.alamat, siswa.hobi, siswa.cita_cita, siswa.jmsaudara, kelas.nama_kelas, agama.nm_agama from siswa inner join kelas on siswa.idkelas = kelas.id inner join agama on siswa.idagama = agama.id;"
                $query = mysqli_
                ?>
            </tbody>

        </table>

    </div>
</body>
</html>
