<?php
include_once '../../config/config.php';

if (isset($_POST['simpan'])) {
    $idtanah    = $_POST['idtanah'];
    $nhak       = $_POST['nhak'];
    $jns       = $_POST['jns'];
    $stts       = $_POST['stts'];
    $hibah      = $_POST['hibah']; // Ambil nama hibah
    $tgl        = $_POST['tgl'];
    $ket        = $_POST['ket'];
    $targetDir  = "../../file/"; // Folder penyimpanan

    // Ambil informasi file
    $aktaExt = pathinfo($_FILES["berkas"]["name"], PATHINFO_EXTENSION); // Ambil ekstensi file
    $suratExt = pathinfo($_FILES["srt"]["name"], PATHINFO_EXTENSION);

    // Buat nama file berdasarkan hibah
    $aktaName = $hibah . "_akta." . $aktaExt;
    $suratName = $nhak . "_surat." . $suratExt;

    // Tentukan lokasi penyimpanan
    $aktaPath = $targetDir . $aktaName;
    $suratPath = $targetDir . $suratName;

    // Cek apakah file sudah dipilih
    if ($_FILES["berkas"]["error"] == 0 && $_FILES["srt"]["error"] == 0) {
        // Upload file ke folder
        if (move_uploaded_file($_FILES["berkas"]["tmp_name"], $aktaPath) && move_uploaded_file($_FILES["srt"]["tmp_name"], $suratPath)) {
            
            // Simpan nama file ke database (menggunakan hibah sebagai nama berkas)
            $sql = "INSERT INTO tanah (idtanah, nhak, jns, stts, hibah, srt, tgl, ket, berkas) 
                    VALUES ('$idtanah', '$nhak', '$jns', '$stts', '$hibah', '$suratName', '$tgl', '$ket', '$aktaName')";
            if (mysqli_query($link, $sql)) {
                echo "<script>alert('Data berhasil simpan')</script>";
                echo "<meta http-equiv='refresh' content='0; url=index.php'>";
            } else {
                echo "<script>alert('Data gagal diedit')</script>";
                echo "<meta http-equiv='refresh' content='0; url=add.php'>";
            }

        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "Harap pilih kedua file.";
    }
} elseif (isset($_POST['update'])) {
    $idtanah    = $_POST['idtanah'];
    $nhak       = $_POST['nhak'];
    $jns       = $_POST['jns'];
    $stts       = $_POST['stts'];
    $hibah      = $_POST['hibah'];
    $tgl        = $_POST['tgl'];
    $ket        = $_POST['ket'];
    $targetDir  = "../../file/"; // Folder penyimpanan

    // Ambil data lama dari database
    $query = mysqli_query($link, "SELECT berkas, srt FROM tanah WHERE idtanah='$idtanah'");
    $row = mysqli_fetch_assoc($query);
    $oldAkta = $row['berkas'];
    $oldSurat = $row['srt'];

    // Periksa apakah ada file baru yang diunggah
    $aktaName = $oldAkta;
    $suratName = $oldSurat;

    if (!empty($_FILES["berkas"]["name"])) {
        // Hapus file lama jika ada
        if (file_exists($targetDir . $oldAkta)) {
            unlink($targetDir . $oldAkta);
        }

        // Ambil ekstensi & buat nama baru
        $aktaExt = pathinfo($_FILES["berkas"]["name"], PATHINFO_EXTENSION);
        $aktaName = $hibah . "_akta." . $aktaExt;
        move_uploaded_file($_FILES["berkas"]["tmp_name"], $targetDir . $aktaName);
    }

    if (!empty($_FILES["srt"]["name"])) {
        // Hapus file lama jika ada
        if (file_exists($targetDir . $oldSurat)) {
            unlink($targetDir . $oldSurat);
        }

        // Ambil ekstensi & buat nama baru
        $suratExt = pathinfo($_FILES["srt"]["name"], PATHINFO_EXTENSION);
        $suratName = $nhak . "_surat." . $suratExt;
        move_uploaded_file($_FILES["srt"]["tmp_name"], $targetDir . $suratName);
    }

    // Update database dengan data baru
    $sql = "UPDATE tanah SET nhak='$nhak', jns='$jns', stts='$stts', hibah='$hibah', srt='$suratName', tgl='$tgl', ket='$ket', berkas='$aktaName' 
            WHERE idtanah='$idtanah'";

    if (mysqli_query($link, $sql)) {
        echo "<script>alert('Data berhasil diperbarui')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        echo "<script>alert('Gagal memperbarui data')</script>";
        echo "<meta http-equiv='refresh' content='0; url=edit.php?id=$idtanah'>";
    }
}
?>
