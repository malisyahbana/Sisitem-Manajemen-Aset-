<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $Idskh = $_POST['Idskh'];
    $Jskh = $_POST['Jskh'];
    $Nmskh = $_POST['Nmskh'];
    $Askh = $_POST['Askh'];

    $tambah = $link->query("INSERT INTO tsekolah (Idskh, Jskh, Nmskh, Askh) VALUES ('$Idskh', '$Jskh', '$Nmskh', '$Askh')");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
} elseif (isset($_POST['ubah'])) {
    $Idskh = $_POST['Idskh'];
    $Jskh = $_POST['Jskh'];
    $Nmskh = $_POST['Nmskh'];
    $Askh = $_POST['Askh'];

    $tambah = $link->query("UPDATE tsekolah SET Jskh = '$Jskh', Nmskh = '$Nmskh', Askh = '$Askh' WHERE Idskh = '$Idskh'");

    if ($tambah) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal diedit')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
