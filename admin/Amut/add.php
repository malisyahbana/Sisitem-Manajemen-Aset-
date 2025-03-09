<?php
include_once "../../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Aset Dimutasikan</h3>
                <p>Data Aset / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="index.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <form id="menuForm" method="POST" action="proses.php">
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Sekolah</label>
                                <input type="text" class="form-control input-sm skh" id="Idskh" name="Idskh" required="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nama Sekolah</label>
                                <input type="text" class="form-control input-sm" id="Nmskh" name="" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Alamat Sekolah</label>
                                <input type="text" class="form-control input-sm" id="Askh" name="" readonly />
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Kode Unit Elektronik</label>
                                    <input type="text" class="form-control input-sm komputer" id="Idkom" name="Idkom" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Merk Elektronik</label>
                                    <input type="text" class="form-control input-sm" id="Merk" name="" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Kondisi</label>
                                    <input type="text" class="form-control input-sm" id="Kondisi" name="" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Jumlah Unit di Mutasikan</label>
                                    <input type="text" class="form-control input-sm" id="" name="Jlh1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group no-margin" style="float: right;">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Kode Unit Perlengkapan Sekolah</label>
                                    <input type="text" class="form-control input-sm alat" id="Idaln" name="Idaln" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Barang/Unit</label>
                                    <input type="text" class="form-control input-sm" id="Brg" name="" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Kondisi</label>
                                    <input type="text" class="form-control input-sm" id="Kondisi1" name="" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Jumlah Unit Diberikan </label>
                                    <input type="text" class="form-control input-sm" id="" name="Jlh2" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group no-margin" style="float: right;">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-blue">
        <div class="panel-heading">
            <!-- <h4>Responsive Table</h4> -->
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="row gutter">
                    <div class="col-md-12">
                        <label class="control-label">Keterangan Mutasi Aset ke Sekolah</label>
                        <input type="text" class="form-control input-sm" id="" name="Keter" />
                    </div>
                </div> <br>
                <div class="form-group no-margin" style="float: right;">
                    <div class="col-md-12">
                        <button type="submit" id="sel" name="simpan" class="btn btn-success">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-warning">Batal</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- keperluan modal pencarian -->
<!-- modal pencarian sekolah -->
<div class="modal fade" id="sekolah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel1"><b>Tabel Sekolah</b></h2>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal<i class="icon-cancel"></i> </a>
                </div>
                <?php
                $no = '1';
                $query = "SELECT * FROM tsekolah ORDER BY Idskh ASC";
                $result = mysqli_query($link, $query);
                ?>
                <div class="modal-body">
                    <div class="row gutter">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-blue">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis Sekolah</th>
                                                    <th>Sekolah</th>
                                                    <th>Alamat </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <tr id="ids sekolah alamat" onClick="masuk1(this,'<?= $row['Idskh'] ?>', '<?= $row['Nmskh'] ?>', '<?= $row['Askh'] ?>' )" href="javascript:void(0)">
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?= $row['Jskh'] ?></td>
                                                        <td><?= $row['Nmskh'] ?></td>
                                                        <td><?= $row['Askh'] ?></td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal pencarian elektronik -->
<div class="modal fade" id="elektronik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel1"><b>Tabel elektronik</b></h2>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal<i class="icon-cancel"></i> </a>
                </div </div>
                <?php
                $no = '1';
                $query = "SELECT * FROM tkom ORDER BY Idkom ASC";
                $result = mysqli_query($link, $query);
                ?>
                <div class="modal-body">
                    <div class="row gutter">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-blue">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis Unit</th>
                                                    <th>Merk Unit</th>
                                                    <th>Jumlah Unit Tersedia</th>
                                                    <th>Harga</th>
                                                    <th>Kondisi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <tr id="ide merk kondisi" onClick="masuk2(this,'<?= $row['Idkom'] ?>', '<?= $row['Merk'] ?>', '<?= $row['Kondisi'] ?>')" href="javascript:void(0)">
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?= $row['Jkom'] ?></td>
                                                        <td><?= $row['Merk'] ?></td>
                                                        <td><?= $row['Jlh'] ?></td>
                                                        <td><?= $row['Hrg'] ?></td>
                                                        <td><?= $row['Kondisi'] ?></td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal pencarian alat -->
<div class="modal fade" id="perlengkapan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel1"><b>Tabel Perlengkapan Sekolah</b></h2>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal<i class="icon-cancel"></i> </a>
                </div>
                <?php
                $no = '1';
                $query = "SELECT * FROM tasl ORDER BY Idaln ASC";
                $result = mysqli_query($link, $query);
                ?>
                <div class="modal-body">
                    <div class="row gutter">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-blue">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis</th>
                                                    <th>Barang </th>
                                                    <th>Jumlah Tersedia</th>
                                                    <th>Harga</th>
                                                    <th>Kondisi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <tr id="kd barang kond" onClick="masuk3(this,'<?= $row['Idaln'] ?>', '<?= $row['Brg'] ?>', '<?= $row['Kondisi'] ?>' )" href="javascript:void(0)">
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?= $row['Jaln'] ?></td>
                                                        <td><?= $row['Brg'] ?></td>
                                                        <td><?= $row['Jlh'] ?></td>
                                                        <td><?= $row['Hrg'] ?></td>
                                                        <td><?= $row['Kondisi'] ?></td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- scrip pencarian -->
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        //focusin berfungsi ketika cursor berada di dalam textbox modal langsung aktif
        $(".skh").focusin(function() {
            $("#sekolah").modal('show'); // ini fungsi untuk menampilkan modal
        });

        //focusin berfungsi ketika cursor berada di dalam textbox modal langsung aktif
        $(".komputer").focusin(function() {
            $("#elektronik").modal('show'); // ini fungsi untuk menampilkan modal
        });

        //focusin berfungsi ketika cursor berada di dalam textbox modal langsung aktif
        $(".alat").focusin(function() {
            $("#perlengkapan").modal('show'); // ini fungsi untuk menampilkan modal
        });
        $('#example').DataTable(); // fungsi ini untuk memanggil datatable
        $('#example2').DataTable(); // fungsi ini untuk memanggil datatable
    });

    function masuk1(txt, ids, sekolah, alamat) {
        document.getElementById('Idskh').value = ids; // ini berfungsi mengisi value  yang ber id textbox
        document.getElementById('Nmskh').value = sekolah; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('Askh').value = alamat; // ini berfungsi mengisi value  yang ber id 
        $("#sekolah").modal('hide'); // ini berfungsi untuk menyembunyikan modal
    }

    function masuk2(txt, ide, merk, kondisi) {
        document.getElementById('Idkom').value = ide; // ini berfungsi mengisi value  yang ber id textbox
        document.getElementById('Merk').value = merk; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('Kondisi').value = kondisi; // ini berfungsi mengisi value  yang ber id 
        $("#elektronik").modal('hide'); // ini berfungsi untuk menyembunyikan modal
    }

    function masuk3(txt, kd, barang, kond) {
        document.getElementById('Idaln').value = kd; // ini berfungsi mengisi value  yang ber id textbox
        document.getElementById('Brg').value = barang; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('Kondisi1').value = kond; // ini berfungsi mengisi value  yang ber id 
        $("#perlengkapan").modal('hide'); // ini berfungsi untuk menyembunyikan modal
    }
</script>
<?php
include_once "../../footer.php";

?>
<?php

?>