<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $Idken        = $_POST['Idken'];
    $Kpakai       = $_POST['Kpakai'];
    $Idpeg     = $_POST['Idpeg'];
    $Keter        = $_POST['Keter'];

    $tambah = $link->query("INSERT INTO tpken (Idpk, Idken, Kpakai, Idpeg, Keter) VALUES ('', '$Idken', '$Kpakai', '$Idpeg', '$Keter')");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
}
