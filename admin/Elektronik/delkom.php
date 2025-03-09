<?php
include '../../config/config.php';

$id = $_GET['id'];
$query = $link->query(" DELETE FROM tkom WHERE Idkom = '$id' ");
if ($query) {
    echo "<script>
    alert('Data berhasil dihapus')
</script>";
    echo "
<meta http-equiv='refresh' content='0; url=komputer.php'>";
} else {
    echo "<script>
    alert('Data Gagal dihapus')
</script>";
    echo "
<meta http-equiv='refresh' content='0; url=index.php'>";
}
