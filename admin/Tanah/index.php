<?php
include_once "../../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Aset Tidak Bergerak</h3>
                <p>Data Aset Tidak Bergerak / <a href="#">Aset</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="add.php" class="btn btn-success"><i class="icon-briefcase4"></i> Tambah</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$no = '1';
$query = "SELECT * FROM tanah ORDER BY idtanah ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Hak Aset</th>
                                <th>Jenis Aset Tidak Bergerak</th>
                                <th>Status Aset Tidak Bergerak</th>
                                <th>Nomor Akta Peralihan Hak</th>
                                <th>Surat Peralihan Hak</th>
                                <th>Tanggal Kepemilikan</th>
                                <th>Berkas Akta Peralihan</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['nhak'] ?></td>
                                    <td><?= $row['jns'] ?></td>
                                    <td><?= $row['stts'] ?></td>
                                    <td><?= $row['hibah'] ?></td>
                                    <td><a href="#" onclick="aFunction()" class="btn btn-success btn-rounded"><?= $row['srt'] ?></a></td>
                                    <td><?= $row['tgl'] ?></td>
                                    <td><a href="#" onclick="bFunction()" class="btn btn-success btn-rounded"><?= $row['berkas'] ?> </a></td>
                                    <td><?= $row['ket'] ?></td>
                                    <td>
                                        <center>
                                            <div class="btn-group text-center">
                                                <a href="update.php?id=<?= $row['0'] ?>" class="badge badge-info badge-xs"><i class="icon-pencil"></i>Edit </a>
                                                <a href="delete.php?id=<?= $row['0'] ?>" id="hapus" class="badge badge-danger"><i class="icon-trash">Delet</i></a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row Ends -->
<script>
    function myFunction() {
        window.open("../laporan/lapasek.php");
    }
    function aFunction() {
        window.open("tinjau.php?id=<?= $row['idtanah'] ?>&jenis=akta");
    }
    function bFunction() {
        window.open("tinjau.php?id=<?= $row['idtanah'] ?>&jenis=surat");
    }
</script>
<?php
include_once "../../footer.php";
?>