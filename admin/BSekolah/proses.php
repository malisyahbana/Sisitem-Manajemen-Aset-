<?php
include_once '../../config/config.php';
if (isset($_POST['simpan'])) {
    $Idaln           = $_POST['Idaln'];
    $Jaln            = $_POST['Jaln'];
    $Brg             = $_POST['Brg'];
    $tgl             = $_POST['tgl'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Asl             = $_POST['Asl'];
    $Kondisi         = $_POST['Kondisi'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO tasl (Idaln, Jaln, Brg, Tgl, Jlh, Hrg, Asl, Kondisi, Ket, Foto) VALUES ('$Idaln', '$Jaln', '$Brg', '$tgl', '$Jlh', '$Hrg', '$Asl', '$Kondisi', '$Ket', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "Data anda gagal disimpan. Ulangi sekali lagi";
            echo "<meta http-equiv='refresh' content='0; url=add.php'>";
        }
    }
} elseif (isset($_POST['ubah'])) {
    $Idaln           = $_POST['Idaln'];
    $Jaln            = $_POST['Jaln'];
    $Brg             = $_POST['Brg'];
    $tgl             = $_POST['tgl'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Asl             = $_POST['Asl'];
    $Kondisi         = $_POST['Kondisi'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tasl WHERE Idaln = '$Idaln'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['Foto']))
            unlink("../../img/" . $data['Foto']);
    }

    if (isset($_POST['ubah_foto'])) {
        $edit = $link->query(" UPDATE tasl SET Jaln = '$Jaln', Brg = '$Brg', Tgl = '$tgl', Jlh = '$Jlh', Hrg = '$Hrg', Asl = '$Asl', Kondisi = '$Kondisi', Ket = '$Ket', foto = '$fotobaru' WHERE Idaln = '$Idaln'");

        if ($edit) {
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "Data gagal diubah. Ulangi sekali lagi";
            echo "<meta http-equiv='refresh' content='0; url=update.php'>";
        }
    }

    $edit = $link->query("UPDATE tasl SET Jaln = '$Jaln', Brg = '$Brg', Tgl = '$tgl', Jlh = '$Jlh', Hrg = '$Hrg', Asl = '$Asl', Kondisi = '$Kondisi', Ket = '$Ket', foto = '$fotobaru' WHERE Idaln = '$Idaln'");

    if ($edit) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "Data anda gagal disimpan. Ulangi sekali lagi";
        echo "<meta http-equiv='refresh' content='0; url=update.php'>";
    }
}
