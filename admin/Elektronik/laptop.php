<?php
include_once "../../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Aset Laptop DISDIK</h3>
                <p>Data Aset Laptop / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">

                <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-print"></i></span>Cetak Data Aset Laptop</a>
                </li>
                <li>
                    <a href="addlap.php" class="btn btn-success"><i class="icon-laptop"></i> Tambah</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



<?php
$no = '1';
$query = "SELECT * FROM tkom WHERE Jkom = 'Laptop' ORDER BY Idkom ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto Aset</th>
                                <th>Merk Komputer</th>
                                <th>Tanggal Beli </th>
                                <th>Asal Komputer</th>
                                <th>Jumlah Unit</th>
                                <th>Harga Satuan (Rp)</th>
                                <th>Total Harga (Rp)</th>
                                <th>Kondisi</th>
                                <th>Sumber Dana</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <div class="image">
                                            <img src="<?= base_url(); ?>/img/<?= $row['Foto'] ?>" width="70" heigth="70">
                                        </div>
                                    </td>
                                    <td><?= $row['Merk'] ?></td>
                                    <td><?= date('d-m-Y', strtotime($row['Tbeli'])) ?></td>
                                    <td><?= $row['Asal'] ?></td>
                                    <td><?= $row['Jlh'] ?></td>
                                    <td><?= $row['Hrg'] ?></td>
                                    <td><?= $row['Hrg'] * $row['Jlh'] ?></td>
                                    <td><?= $row['Kondisi'] ?></td>
                                    <td><?= $row['Sdana'] ?></td>
                                    <td><?= $row['Ket'] ?></td>
                                    <td>
                                        <div class="btn-group text-center">
                                            <a href="edlap.php?id=<?= $row['0'] ?>" class="badge badge-info badge-xs"><i class="icon-pencil"></i>Edit </a>
                                            <a href="dellap.php?id=<?= $row['0'] ?>" id="hapus" class="badge badge-danger"><i class="icon-trash">Delet</i></a>
                                            <a href="musnah.php?id=<?= $row['0'] ?>" class="badge badge-warning badge-xs"><i class="icon-bin"></i>Musnah </a>
                                        </div>
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
        window.open("../laporan/laplaptop.php");
    }
</script>

<?php
include_once "../../footer.php";
?>