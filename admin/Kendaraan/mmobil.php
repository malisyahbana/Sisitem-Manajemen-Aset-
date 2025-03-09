<?php
include '../../config/config.php';

$id = $_GET['id'];
$query = $link->query(" UPDATE tkend SET Kondisi = 'Musnah', Ket = 'Dimusnahkan' WHERE Idken = '$id' ");
if ($query) {
    echo "<script>
    alert('Data berhasil dihapus')
</script>";
    echo "
<meta http-equiv='refresh' content='0; url=mobil.php'>";
} else {
    echo "<script>
    alert('Data Gagal dihapus')
</script>";
    echo "
<meta http-equiv='refresh' content='0; url=index.php'>";
}
