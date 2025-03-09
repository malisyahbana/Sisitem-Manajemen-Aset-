<?php
include_once '../../config/config.php';
if (isset($_POST['smotor'])) {
    $Idken           = $_POST['Idken'];
    $Jken            = $_POST['Jken'];
    $Mken            = $_POST['Mken'];
    $Cc              = $_POST['Cc'];
    $Thbeli          = $_POST['Thbeli'];
    $Hrg             = $_POST['Hrg'];
    $Nrk             = $_POST['Nrk'];
    $Nmsn            = $_POST['Nmsn'];
    $Npol            = $_POST['Npol'];
    $Bpkb            = $_POST['Bpkb'];
    $Aken            = $_POST['Aken'];
    $Sdana           = $_POST['Sdana'];
    $Kondisi         = $_POST['Kondisi'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO tkend (Idken, Jken, Mken, Cc, Thbeli, Hrg, Nrk, Nmsn, Npol, Bpkb, Aken, Sdana, Kondisi, Ket, Foto) VALUES ('$Idken', '$Jken', '$Mken', '$Cc', '$Thbeli', '$Hrg', '$Nrk', '$Nmsn', '$Npol', '$Bpkb', '$Aken', '$Sdana', '$Kondisi', '$Ket', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=motor.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=motor.php'>";
        }
    }
} elseif (isset($_POST['smobil'])) {
    $Idken           = $_POST['Idken'];
    $Jken            = $_POST['Jken'];
    $Mken            = $_POST['Mken'];
    $Cc              = $_POST['Cc'];
    $Thbeli          = $_POST['Thbeli'];
    $Hrg             = $_POST['Hrg'];
    $Nrk             = $_POST['Nrk'];
    $Nmsn            = $_POST['Nmsn'];
    $Npol            = $_POST['Npol'];
    $Bpkb            = $_POST['Bpkb'];
    $Aken            = $_POST['Aken'];
    $Sdana           = $_POST['Sdana'];
    $Kondisi         = $_POST['Kondisi'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO tkend (Idken, Jken, Mken, Cc, Thbeli, Hrg, Nrk, Nmsn, Npol, Bpkb, Aken, Sdana, Kondisi, Ket, Foto) VALUES ('$Idken', '$Jken', '$Mken', '$Cc', '$Thbeli', '$Hrg', '$Nrk', '$Nmsn', '$Npol', '$Bpkb', '$Aken', '$Sdana', '$Kondisi', '$Ket', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=mobil.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=mobil.php'>";
        }
    }
} elseif (isset($_POST['sbus'])) {
    $Idken           = $_POST['Idken'];
    $Jken            = $_POST['Jken'];
    $Mken            = $_POST['Mken'];
    $Cc              = $_POST['Cc'];
    $Thbeli          = $_POST['Thbeli'];
    $Hrg             = $_POST['Hrg'];
    $Nrk             = $_POST['Nrk'];
    $Nmsn            = $_POST['Nmsn'];
    $Npol            = $_POST['Npol'];
    $Bpkb            = $_POST['Bpkb'];
    $Aken            = $_POST['Aken'];
    $Sdana           = $_POST['Sdana'];
    $Kondisi         = $_POST['Kondisi'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, $path)) {

        $tambah = $link->query("INSERT INTO tkend (Idken, Jken, Mken, Cc, Thbeli, Hrg, Nrk, Nmsn, Npol, Bpkb, Aken, Sdana, Kondisi, Ket, Foto) VALUES ('$Idken', '$Jken', '$Mken', '$Cc', '$Thbeli', '$Hrg', '$Nrk', '$Nmsn', '$Npol', '$Bpkb', '$Aken', '$Sdana', '$Kondisi', '$Ket', '$fotobaru')");

        if ($tambah) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=bus.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=bus.php'>";
        }
    }
} elseif (isset($_POST['emotor'])) {
    $Idken           = $_POST['Idken'];
    $Jken            = $_POST['Jken'];
    $Mken            = $_POST['Mken'];
    $Cc              = $_POST['Cc'];
    $Thbeli          = $_POST['Thbeli'];
    $Hrg             = $_POST['Hrg'];
    $Nrk             = $_POST['Nrk'];
    $Nmsn            = $_POST['Nmsn'];
    $Npol            = $_POST['Npol'];
    $Bpkb            = $_POST['Bpkb'];
    $Aken            = $_POST['Aken'];
    $Sdana           = $_POST['Sdana'];
    $Kondisi         = $_POST['Kondisi'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tkend WHERE Idken = '$Idken'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['Foto']))
            unlink("../../img/" . $data['Foto']);
    }

    if (isset($_POST['ubah_foto'])) {
        $edit = $link->query(" UPDATE tkend SET Jken = '$Jken', Mken = '$Mken', Cc = '$Cc', Thbeli = '$Thbeli', Hrg = '$Hrg', Nrk = '$Nrk', Nmsn = '$Nmsn', Npol = '$Npol', Bpkb = '$Bpkb', Aken = '$Aken', Sdana = '$Sdana', Kondisi = '$Kondisi', Ket = '$Ket', foto = '$fotobaru' WHERE Idken = '$Idken'");

        if ($edit) {
            echo "<meta http-equiv='refresh' content='0; url=motor.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=motor.php'>";
        }
    }

    $edit = $link->query("UPDATE tkend SET Jken = '$Jken', Mken = '$Mken', Cc = '$Cc', Thbeli = '$Thbeli', Hrg = '$Hrg', Nrk = '$Nrk', Nmsn = '$Nmsn', Npol = '$Npol', Bpkb = '$Bpkb', Aken = '$Aken', Sdana = '$Sdana', Kondisi = '$Kondisi', Ket = '$Ket', foto = '$fotobaru' WHERE Idken = '$Idken'");

    if ($edit) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=motor.php'>";
    } else {
        echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
        echo "<meta http-equiv='refresh' content='0; url=motor.php'>";
    }
} elseif (isset($_POST['emobil'])) {
    $Idken           = $_POST['Idken'];
    $Jken            = $_POST['Jken'];
    $Mken            = $_POST['Mken'];
    $Cc              = $_POST['Cc'];
    $Thbeli          = $_POST['Thbeli'];
    $Hrg             = $_POST['Hrg'];
    $Nrk             = $_POST['Nrk'];
    $Nmsn            = $_POST['Nmsn'];
    $Npol            = $_POST['Npol'];
    $Bpkb            = $_POST['Bpkb'];
    $Aken            = $_POST['Aken'];
    $Sdana           = $_POST['Sdana'];
    $Kondisi         = $_POST['Kondisi'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tkend WHERE Idken = '$Idken'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['Foto']))
            unlink("../../img/" . $data['Foto']);
    }

    if (isset($_POST['ubah_foto'])) {
        $edit = $link->query(" UPDATE tkend SET Jken = '$Jken', Mken = '$Mken', Cc = '$Cc', Thbeli = '$Thbeli', Hrg = '$Hrg', Nrk = '$Nrk', Nmsn = '$Nmsn', Npol = '$Npol', Bpkb = '$Bpkb', Aken = '$Aken', Sdana = '$Sdana', Kondisi = '$Kondisi', Ket = '$Ket', foto = '$fotobaru' WHERE Idken = '$Idken'");

        if ($edit) {
            echo "<meta http-equiv='refresh' content='0; url=mobil.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=mobil.php'>";
        }
    }

    $edit = $link->query("UPDATE tkend SET Jken = '$Jken', Mken = '$Mken', Cc = '$Cc', Thbeli = '$Thbeli', Hrg = '$Hrg', Nrk = '$Nrk', Nmsn = '$Nmsn', Npol = '$Npol', Bpkb = '$Bpkb', Aken = '$Aken', Sdana = '$Sdana', Kondisi = '$Kondisi', Ket = '$Ket', foto = '$fotobaru' WHERE Idken = '$Idken'");

    if ($edit) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=mobil.php'>";
    } else {
        echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
        echo "<meta http-equiv='refresh' content='0; url=mobil.php'>";
    }
} elseif (isset($_POST['ebus'])) {
    $Idken           = $_POST['Idken'];
    $Jken            = $_POST['Jken'];
    $Mken            = $_POST['Mken'];
    $Cc              = $_POST['Cc'];
    $Thbeli          = $_POST['Thbeli'];
    $Hrg             = $_POST['Hrg'];
    $Nrk             = $_POST['Nrk'];
    $Nmsn            = $_POST['Nmsn'];
    $Npol            = $_POST['Npol'];
    $Bpkb            = $_POST['Bpkb'];
    $Aken            = $_POST['Aken'];
    $Sdana           = $_POST['Sdana'];
    $Kondisi         = $_POST['Kondisi'];
    $Ket             = $_POST['Ket'];
    $gbr             = $_FILES['gbr']['name'];
    $tmp_name        = $_FILES['gbr']['tmp_name'];
    $fotobaru        = date('dmYHis') . $gbr;
    $path            = "../../img/" . $fotobaru;


    if (move_uploaded_file($tmp_name, '../../img/' . $fotobaru)) {
        $query = $link->query("SELECT * FROM tkend WHERE Idken = '$Idken'");
        $data = $query->fetch_array();
        if (is_file("../../img/" . $data['Foto']))
            unlink("../../img/" . $data['Foto']);
    }

    if (isset($_POST['ubah_foto'])) {
        $edit = $link->query(" UPDATE tkend SET Jken = '$Jken', Mken = '$Mken', Cc = '$Cc', Thbeli = '$Thbeli', Hrg = '$Hrg', Nrk = '$Nrk', Nmsn = '$Nmsn', Npol = '$Npol', Bpkb = '$Bpkb', Aken = '$Aken', Sdana = '$Sdana', Kondisi = '$Kondisi', Ket = '$Ket', foto = '$fotobaru' WHERE Idken = '$Idken'");

        if ($edit) {
            echo "<meta http-equiv='refresh' content='0; url=bus.php'>";
        } else {
            echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
            echo "<meta http-equiv='refresh' content='0; url=bus.php'>";
        }
    }

    $edit = $link->query("UPDATE tkend SET Jken = '$Jken', Mken = '$Mken', Cc = '$Cc', Thbeli = '$Thbeli', Hrg = '$Hrg', Nrk = '$Nrk', Nmsn = '$Nmsn', Npol = '$Npol', Bpkb = '$Bpkb', Aken = '$Aken', Sdana = '$Sdana', Kondisi = '$Kondisi', Ket = '$Ket', foto = '$fotobaru' WHERE Idken = '$Idken'");

    if ($edit) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=bus.php'>";
    } else {
        echo "<script>alert('Data anda gagal disimpan. Ulangi sekali lagi')</script>";
        echo "<meta http-equiv='refresh' content='0; url=bus.php'>";
    }
}
?>
<?php ?>