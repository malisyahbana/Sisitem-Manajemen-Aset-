<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $Idpeg = $_POST['Idpeg'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $Password = md5($pass);
    $Role = $_POST['Role'];
    $Ket = $_POST['Ket'];

    $tambah = $link->query("UPDATE tdatapeg SET  username = '$user', Password = '$Password', Role = '$Role', Ket = '$Ket' WHERE Idpeg = '$Idpeg' ");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
