<?php
include_once '../../config/config.php';
if (isset($_POST['skom'])) {
    $Idkom           = $_POST['Idkom'];
    $Jkom            = $_POST['Jkom'];
    $Merk            = $_POST['Merk'];
    $Tbeli           = $_POST['Tbeli'];
    $Asal            = $_POST['Asal'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Kondisi         = $_POST['Kondisi'];
    $Sdana           = $_POST['Sdana'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO tkom (Idkom, Jkom, Merk, Tbeli, Asal, Jlh, Hrg, Kondisi, Sdana, Ket, Foto) VALUES ('$Idkom', '$Jkom', '$Merk', '$Tbeli', '$Asal', '$Jlh', '$Hrg', '$Kondisi', '$Sdana', '$Ket', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=komputer.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=komputer.php'>";
        }
    }
} elseif (isset($_POST['slap'])) {
    $Idkom           = $_POST['Idkom'];
    $Jkom            = $_POST['Jkom'];
    $Merk            = $_POST['Merk'];
    $Tbeli           = $_POST['Tbeli'];
    $Asal            = $_POST['Asal'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Kondisi         = $_POST['Kondisi'];
    $Sdana           = $_POST['Sdana'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO tkom (Idkom, Jkom, Merk, Tbeli, Asal, Jlh, Hrg, Kondisi, Sdana, Ket, Foto) VALUES ('$Idkom', '$Jkom', '$Merk', '$Tbeli', '$Asal', '$Jlh', '$Hrg', '$Kondisi', '$Sdana', '$Ket', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=laptop.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=laptop.php'>";
        }
    }
} elseif (isset($_POST['sprint'])) {
    $Idkom           = $_POST['Idkom'];
    $Jkom            = $_POST['Jkom'];
    $Merk            = $_POST['Merk'];
    $Tbeli           = $_POST['Tbeli'];
    $Asal            = $_POST['Asal'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Kondisi         = $_POST['Kondisi'];
    $Sdana           = $_POST['Sdana'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO tkom (Idkom, Jkom, Merk, Tbeli, Asal, Jlh, Hrg, Kondisi, Sdana, Ket, Foto) VALUES ('$Idkom', '$Jkom', '$Merk', '$Tbeli', '$Asal', '$Jlh', '$Hrg', '$Kondisi', '$Sdana', '$Ket', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=printer.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=printer.php'>";
        }
    }
} elseif (isset($_POST['sel'])) {
    $Idkom           = $_POST['Idkom'];
    $Jkom            = $_POST['Jkom'];
    $Merk            = $_POST['Merk'];
    $Tbeli           = $_POST['Tbeli'];
    $Asal            = $_POST['Asal'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Kondisi         = $_POST['Kondisi'];
    $Sdana           = $_POST['Sdana'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO tkom (Idkom, Jkom, Merk, Tbeli, Asal, Jlh, Hrg, Kondisi, Sdana, Ket, Foto) VALUES ('$Idkom', '$Jkom', '$Merk', '$Tbeli', '$Asal', '$Jlh', '$Hrg', '$Kondisi', '$Sdana', '$Ket', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=Eln.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=Eln.php'>";
        }
    }
} elseif (isset($_POST['ekom'])) {
    $Idkom           = $_POST['Idkom'];
    $Jkom            = $_POST['Jkom'];
    $Merk            = $_POST['Merk'];
    $Tbeli           = $_POST['Tbeli'];
    $Asal            = $_POST['Asal'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Kondisi         = $_POST['Kondisi'];
    $Sdana           = $_POST['Sdana'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tkom WHERE Idkom = '$Idkom'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['Foto']))
            unlink("../../img/" . $data['Foto']);
    }

    if (isset($_POST['ubah_foto'])) {
        $edit = $link->query(" UPDATE tkom SET Jkom = '$Jkom', Merk = '$Merk', Tbeli = '$Tbeli', Asal = '$Asal', Jlh = '$Jlh', Hrg = '$Hrg', Kondisi = '$Kondisi', Sdana = '$Sdana',  Ket = '$Ket', Foto = '$fotobaru' WHERE Idkom = '$Idkom'");

        if ($edit) {
            echo "<meta http-equiv='refresh' content='0; url=komputer.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=komputer.php'>";
        }
    }

    $edit = $link->query("UPDATE tkom SET Jkom = '$Jkom', Merk = '$Merk', Tbeli = '$Tbeli', Asal = '$Asal', Jlh = '$Jlh', Hrg = '$Hrg', Kondisi = '$Kondisi', Sdana = '$Sdana',  Ket = '$Ket', Foto = '$fotobaru' WHERE Idkom = '$Idkom'");

    if ($edit) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=komputer.php'>";
    } else {
        echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
        echo "<meta http-equiv='refresh' content='0; url=komputer.php'>";
    }
} elseif (isset($_POST['elap'])) {
    $Idkom           = $_POST['Idkom'];
    $Jkom            = $_POST['Jkom'];
    $Merk            = $_POST['Merk'];
    $Tbeli           = $_POST['Tbeli'];
    $Asal            = $_POST['Asal'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Kondisi         = $_POST['Kondisi'];
    $Sdana           = $_POST['Sdana'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tkom WHERE Idkom = '$Idkom'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['Foto']))
            unlink("../../img/" . $data['Foto']);
    }

    if (isset($_POST['ubah_foto'])) {
        $edit = $link->query(" UPDATE tkom SET Jkom = '$Jkom', Merk = '$Merk', Tbeli = '$Tbeli', Asal = '$Asal', Jlh = '$Jlh', Hrg = '$Hrg', Kondisi = '$Kondisi', Sdana = '$Sdana',  Ket = '$Ket', Foto = '$fotobaru' WHERE Idkom = '$Idkom'");

        if ($edit) {
            echo "<meta http-equiv='refresh' content='0; url=laptop.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=laptop.php'>";
        }
    }

    $edit = $link->query("UPDATE tkom SET Jkom = '$Jkom', Merk = '$Merk', Tbeli = '$Tbeli', Asal = '$Asal', Jlh = '$Jlh', Hrg = '$Hrg', Kondisi = '$Kondisi', Sdana = '$Sdana',  Ket = '$Ket', Foto = '$fotobaru' WHERE Idkom = '$Idkom'");

    if ($edit) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=laptop.php'>";
    } else {
        echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
        echo "<meta http-equiv='refresh' content='0; url=elap.php'>";
    }
} elseif (isset($_POST['eprint'])) {
    $Idkom           = $_POST['Idkom'];
    $Jkom            = $_POST['Jkom'];
    $Merk            = $_POST['Merk'];
    $Tbeli           = $_POST['Tbeli'];
    $Asal            = $_POST['Asal'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Kondisi         = $_POST['Kondisi'];
    $Sdana           = $_POST['Sdana'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tkom WHERE Idkom = '$Idkom'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['Foto']))
            unlink("../../img/" . $data['Foto']);
    }

    if (isset($_POST['ubah_foto'])) {
        $edit = $link->query(" UPDATE tkom SET Jkom = '$Jkom', Merk = '$Merk', Tbeli = '$Tbeli', Asal = '$Asal', Jlh = '$Jlh', Hrg = '$Hrg', Kondisi = '$Kondisi', Sdana = '$Sdana',  Ket = '$Ket', Foto = '$fotobaru' WHERE Idkom = '$Idkom'");

        if ($edit) {
            echo "<meta http-equiv='refresh' content='0; url=printer.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=edprint.php'>";
        }
    }

    $edit = $link->query("UPDATE tkom SET Jkom = '$Jkom', Merk = '$Merk', Tbeli = '$Tbeli', Asal = '$Asal', Jlh = '$Jlh', Hrg = '$Hrg', Kondisi = '$Kondisi', Sdana = '$Sdana',  Ket = '$Ket', Foto = '$fotobaru' WHERE Idkom = '$Idkom'");

    if ($edit) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=printer.php'>";
    } else {
        echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
        echo "<meta http-equiv='refresh' content='0; url=edprint.php'>";
    }
} elseif (isset($_POST['eln'])) {
    $Idkom           = $_POST['Idkom'];
    $Jkom            = $_POST['Jkom'];
    $Merk            = $_POST['Merk'];
    $Tbeli           = $_POST['Tbeli'];
    $Asal            = $_POST['Asal'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Kondisi         = $_POST['Kondisi'];
    $Sdana           = $_POST['Sdana'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tkom WHERE Idkom = '$Idkom'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['Foto']))
            unlink("../../img/" . $data['Foto']);
    }

    if (isset($_POST['ubah_foto'])) {
        $edit = $link->query(" UPDATE tkom SET Jkom = '$Jkom', Merk = '$Merk', Tbeli = '$Tbeli', Asal = '$Asal', Jlh = '$Jlh', Hrg = '$Hrg', Kondisi = '$Kondisi', Sdana = '$Sdana',  Ket = '$Ket', Foto = '$fotobaru' WHERE Idkom = '$Idkom'");

        if ($edit) {
            echo "<meta http-equiv='refresh' content='0; url=Eln.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=edel.php'>";
        }
    }

    $edit = $link->query("UPDATE tkom SET Jkom = '$Jkom', Merk = '$Merk', Tbeli = '$Tbeli', Asal = '$Asal', Jlh = '$Jlh', Hrg = '$Hrg', Kondisi = '$Kondisi', Sdana = '$Sdana',  Ket = '$Ket', Foto = '$fotobaru' WHERE Idkom = '$Idkom'");

    if ($edit) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=Eln.php'>";
    } else {
        echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
        echo "<meta http-equiv='refresh' content='0; url=edel.php'>";
    }
} elseif (isset($_POST['musnah'])) {
    $Idkom           = $_POST['Idkom'];
    $Jkom            = $_POST['Jkom'];
    $Merk            = $_POST['Merk'];
    $Tbeli           = $_POST['Tbeli'];
    $Asal            = $_POST['Asal'];
    $Jlh             = $_POST['Jlh'];
    $Hrg             = $_POST['Hrg'];
    $Kondisi         = $_POST['Kondisi'];
    $Sdana           = $_POST['Sdana'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO musnahl (Idm, Idkom, Jkom, Merk, Tbeli, Asal, Jlh, Hrg, Kondisi, Sdana, Ket, Foto) VALUES ('', '$Idkom', '$Jkom', '$Merk', '$Tbeli', '$Asal', '$Jlh', '$Hrg', '$Kondisi', '$Sdana', '$Ket', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=komputer.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=Eln.php'>";
        }
    }
}
