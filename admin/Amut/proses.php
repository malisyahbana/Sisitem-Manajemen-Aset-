<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $Idskh    = $_POST['Idskh'];
    $Idkom    = $_POST['Idkom'];
    $Jlh1     = $_POST['Jlh1'];
    $Idaln    = $_POST['Idaln'];
    $Jlh2     = $_POST['Jlh2'];
    $Keter    = $_POST['Keter'];

    $tambah = $link->query("INSERT INTO tma (Idmut, Idaln, Jaln, Idkom, Jkom, Idskh, Ket) VALUES ('', '$Idaln', '$Jlh2', '$Idkom', '$Jlh1', '$Idskh', '$Keter')");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
} elseif (isset($_POST['ubah'])) {
    $Idmut     = $_POST['Idmut'];
    $Idskh     = $_POST['Idskh'];
    $Idkom      = $_POST['Idkom'];
    $Jlh1      = $_POST['Jlh1'];
    $Idaln     = $_POST['Idaln'];
    $Jlh2      = $_POST['Jlh2'];
    $Keter     = $_POST['Keter'];

    $tambah = $link->query("UPDATE tma SET Idaln = '$Idaln', Jaln = '$Jlh2', Idkom = '$Idkom', Jkom = '$Jlh1', Idskh = '$Idskh', Ket = '$Keter' WHERE Idmut = '$Idmut' ");


    if ($tambah) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
} elseif (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = $link->query(" DELETE FROM tma WHERE Idmut = '$id' ");
    if ($query) {
        echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data Gagal dihapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
}
