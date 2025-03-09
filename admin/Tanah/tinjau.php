<?php
include_once '../../config/config.php';
$id = $_GET['id'];
$jenis = $_GET['jenis']; // Tangkap parameter jenis

$sql = "SELECT * FROM tanah WHERE idtanah = '$id' ";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);

// Pilih file berdasarkan jenis
$file = ($jenis == "akta") ? $row['akta'] : $row['surat'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tinjau Berkas Aset</title>
</head>
<body>

    <h4>Tinjau Berkas Aset Tanah Tidak Bergerak</h4>
    <object data="<?= base_url() ?>/file/<?= $file; ?>" width="600" height="400"></object>

</body>
</html>
