<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $Nip        = $_POST['Nip'];
    $Npeg       = $_POST['Npeg'];
    $Alamat     = $_POST['Alamat'];
    $Jab        = $_POST['Jab'];
    $Instansi   = $_POST['Instansi'];

    $tambah = $link->query("INSERT INTO tdatapeg (Idpeg, Nip, Npeg, Alamat, Jab, Instansi, Username, Password, Role, Ket) VALUES ('', '$Nip', '$Npeg', '$Alamat', '$Jab', '$Instansi', '', '', '', '')");


    if ($tambah) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
} elseif (isset($_POST['ubah'])) {
    $Idpeg     = $_POST['Idpeg'];
    $Nip       = $_POST['Nip'];
    $Npeg      = $_POST['Npeg'];
    $Alamat    = $_POST['Alamat'];
    $Jab       = $_POST['Jab'];
    $Instansi  = $_POST['Instansi'];

    $tambah = $link->query("UPDATE tdatapeg SET  Nip = '$Nip', Npeg = '$Npeg', Alamat = '$Alamat', Jab = '$Jab', Instansi = '$Instansi' WHERE Idpeg = '$Idpeg' ");



    if ($tambah) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Data gagal disimpan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
