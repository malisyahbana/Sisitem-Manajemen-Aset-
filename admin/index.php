<?php
include_once "../header.php";
$nama = $_SESSION['Npeg'];
?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Selamat Datang Di Dashboard Admin</h3>
            </div>
        </div>
    </div>

</div>
<!-- Top Bar Ends -->

<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="panel height2 panel-bg-one">
            <div class="panel-body">
                <div class="user-profile clearfix">
                    <div class="user-img">
                        <img src="<?= base_url() ?>/assets/img/thumbs/adminx.png" alt="User Info">
                        <!-- <span class="completed-info"></span> -->
                    </div>
                    <h4><?=
                        $nama = $_SESSION['Npeg'];
                        ?></h4>
                    <h3>Dinas Pendidikan dan Kebudayaan</h3>
                    <h4>Kabupaten hulu Sungai Selatan</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <!-- Row inside row starts -->
        <div class="row gutter">
            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                <div class="panel height1 blue-bg">
                    <div class="panel-body text-center">
                        <div class="user-stats">
                            <div>
                                <i class="icon-user2 icon-4x text-white"></i>
                            </div>
                            <?php
                            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tdatapeg ");
                            $hitungmhs = mysqli_fetch_array($mhs);
                            ?>
                            <h5>Jumlah Pegawai</h5>
                            <h5><?= $hitungmhs['hasil'] ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                <div class="panel height1 yellow-bg">
                    <div class="panel-body text-center">
                        <div class="user-stats">
                            <div>
                                <i class="icon-library2 icon-4x text-white"></i>
                            </div>
                            <?php
                            $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tsekolah ");
                            $hitungmhs = mysqli_fetch_array($mhs);
                            ?>
                            <h5>Jumlah Sekolah</h5>
                            <h5><?= $hitungmhs['hasil'] ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                <div class="panel height1 purple-bg">
                    <div class="panel-body text-center">
                        <?php
                        $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tpken INNER JOIN tkend ON tkend.Idken = tpken.Idken INNER JOIN tdatapeg ON tdatapeg.Idpeg = tpken.Idpeg ORDER BY Idpk ASC ");
                        $hitungmhs = mysqli_fetch_array($mhs);
                        ?>
                        <div class="user-stats">
                            <h1><?= $hitungmhs['hasil'] ?></h1>
                            <h5>Jumlah Kendaraan Dinas Terpakai</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                <div class="panel height1 pink-bg">
                    <div class="panel-body text-center">
                        <?php
                        $mhs = mysqli_query($link, "SELECT count(*) as hasil FROM tma INNER JOIN tkom ON tkom.Idkom = tma.Idkom INNER JOIN tasl ON tasl.Idaln = tma.Idaln INNER JOIN tsekolah ON tsekolah.Idskh = tma.Idskh ORDER by Idmut ASC ");
                        $hitungmhs = mysqli_fetch_array($mhs);
                        ?>
                        <div class="user-stats">
                            <h1><?= $hitungmhs['hasil'] ?></h1>
                            <h5>Jumlah Mutasi Aset</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row inside row ends -->
    </div>
</div>
<?php
$no = '1';
$query = "SELECT * FROM tkend ORDER BY Idken ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <h4> Data Aset Kendaraan Dinas R2 & R4</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="basicExample" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk Motor</th>
                                <th>Jenis Kendaraan</th>
                                <th>Cc </th>
                                <th>Nomor Polisi</th>
                                <th>Kondisi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['Mken'] ?></td>
                                    <td><?= $row['Jken'] ?></td>
                                    <td><?= $row['Cc'] ?></td>
                                    <td><?= $row['Npol'] ?></td>
                                    <td><?= $row['Kondisi'] ?></td>
                                    <td><?= $row['Ket'] ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$no = '1';
$query = "SELECT * FROM tkom ORDER BY Idkom ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <h4>Data Aset Elektronik</h4>
            </div>
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk Komputer</th>
                                <th>Jenis Elektronik</th>
                                <th>Tanggal Beli </th>
                                <th>Jumlah Unit</th>
                                <th>Harga Satuan (Rp)</th>
                                <th>Kondisi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['Merk'] ?></td>
                                    <td><?= $row['Jkom'] ?></td>
                                    <td><?= date('d-m-Y', strtotime($row['Tbeli'])) ?></td>
                                    <td><?= $row['Jlh'] ?></td>
                                    <td><?= $row['Hrg'] ?></td>
                                    <td><?= $row['Kondisi'] ?></td>
                                    <td><?= $row['Ket'] ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$no = '1';
$query = "SELECT * FROM tasl ORDER BY Idaln ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <h4>Data Aset Perlengkapan Sekolah</h4>
            </div>
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="scrollTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Barang</th>
                                <th>Barang</th>
                                <th>Tanggal Pembelian</th>
                                <th>Jumlah Barang</th>
                                <th>Harga Satuan</th>
                                <th>Kondisi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $row['Jaln'] ?></td>
                                    <td><?= $row['Brg'] ?></td>
                                    <td><?= date('d-m-Y', strtotime($row['Tgl'])) ?></td>
                                    <td><?= $row['Jlh'] ?></td>
                                    <td><?= $row['Hrg'] ?></td>
                                    <td><?= $row['Kondisi'] ?></td>
                                    <td><?= $row['Ket'] ?></td>
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
<?php
include_once "../footer.php";
?>
<?php
?>