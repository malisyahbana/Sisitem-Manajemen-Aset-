<?php
include '../../config/config.php';

$id = $_GET['id'];
$query = $link->query(" UPDATE tdatapeg SET  username = '', Password = '', Role = '', Ket = '' WHERE Idpeg = '$id'");
if ($query) {
    echo "<script>alert('Akun berhasil dihapus')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
} else {
    echo "<script>alert('Akun Gagal dihapus')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
