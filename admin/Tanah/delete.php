<?php
include_once '../../config/config.php';

if (isset($_GET['id'])) {
    $idtanah = $_GET['id'];

    // Ambil nama file dari database
    $query = mysqli_query($link, "SELECT berkas, srt FROM tanah WHERE idtanah = '$idtanah'");
    $data = mysqli_fetch_array($query);

    if ($data) {
        $targetDir = "../../file/"; // Folder tempat menyimpan file

        // Path lengkap file
        $fileAkta = $targetDir . $data['berkas'];
        $fileSurat = $targetDir . $data['srt'];

        // Hapus file jika ada
        if (file_exists($fileAkta)) {
            unlink($fileAkta);
        }
        if (file_exists($fileSurat)) {
            unlink($fileSurat);
        }


        // Hapus data dari database
        $delete = mysqli_query($link, "DELETE FROM tanah WHERE idtanah = '$idtanah'");

        if ($delete) {
            echo "<script>alert('Data berhasil dihapus');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "<script>alert('Gagal menghapus data');</script>";
        }
    } else {
        echo "<script>alert('Data tidak ditemukan');</script>";
    }
} else {
    echo "<script>alert('ID tidak valid');</script>";
}
?>
