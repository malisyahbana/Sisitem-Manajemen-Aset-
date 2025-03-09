<?php
include_once "../../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Mutasi Aset</h3>
                <p>Data Mutasi Aset / <a href="#">Sekolah</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <!-- <li>
                    <a href="<?= base_url(); ?>/admin/BSekolah/" class="btn btn-info"><span><i class="icon-download5"></i></span>Cetak Data Sekolah</a>
                </li> -->
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
$query = "SELECT tma.Idmut,
tma.Idaln,
tma.Jaln,
tma.Idkom,
tma.Jkom,
tma.Idskh,
tma.Ket,
tkom.Idkom,
tkom.Merk,
tkom.Jkom as jk,
tkom.Jlh as uk,
tkom.Hrg as kh,
tkom.Kondisi as kk,
tkom.Ket as lokm,
tasl.Idaln,
tasl.Brg,
tasl.Jaln as ja,
tasl.Jlh as ua,
tasl.Hrg as ha,
tasl.Kondisi as ka,
tasl.Ket as lokp,
tsekolah.Idskh,
tsekolah.Nmskh,
tsekolah.Askh
FROM tma INNER JOIN tkom ON tkom.Idkom = tma.Idkom INNER JOIN tasl ON tasl.Idaln = tma.Idaln INNER JOIN tsekolah ON tsekolah.Idskh = tma.Idskh ORDER by Idmut ASC";
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
                                <th>Unit Elektronik</th>
                                <th>Lokasi Asal</th>
                                <th>Jumlah Unit</th>
                                <th>Harga Satuan</th>
                                <th>Alat Sekolah</th>
                                <th>Lokasi Asal</th>
                                <th>Jumlah Alat</th>
                                <th>Harga satuan</th>
                                <th>Sekolah</th>
                                <th>Alamat Sekolah</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['Merk'] ?></td>
                                    <td><?= $row['lokm'] ?> Dinas Pendidikan</td>
                                    <td><?= $row['Jkom'] ?></td>
                                    <td><?= $row['kh'] ?></td>
                                    <td><?= $row['Brg'] ?></td>
                                    <td><?= $row['lokp'] ?> Dinas Pendidikan</td>
                                    <td><?= $row['Jaln'] ?></td>
                                    <td><?= $row['ha'] ?></td>
                                    <td><?= $row['Nmskh'] ?></td>
                                    <td><?= $row['Askh'] ?></td>
                                    <td><?= $row['Ket'] ?></td>
                                    <td>
                                        <center>
                                            <div class="btn-group text-center">
                                                <a href="update.php?id=<?= $row['0'] ?>" class="badge badge-info badge-xs"><i class="icon-pencil"></i>Edit </a>
                                                <a href="proses.php?id=<?= $row['0'] ?>" id="hapus" name="hapus" class="badge badge-danger"><i class="icon-trash">Delet</i></a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <li>
                <a href="#" onclick="myFunction()" class="btn btn-warning"><span><i class="icon-print"></i></span>Cetak Mutasi Aset</a>
            </li>
        </div>
    </div>
</div>
<!-- Row Ends -->
<script>
    function myFunction() {
        window.open("../laporan/lapmut.php");
    }
</script>

<?php
include_once "../../footer.php";
?>