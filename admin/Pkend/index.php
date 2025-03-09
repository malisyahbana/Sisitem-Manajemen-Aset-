<?php
include_once "../../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Pemakai Kendaraan Dinas DISDIK</h3>
                <p>Data Kendaraan Dinas / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->
<div class="row gutter">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <form id="menuForm" method="POST" action="proses.php">
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kendaraan Dinas</label>
                                <input type="text" class="form-control input-sm pencarian" id="Idken" name="Idken" required="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label class="control-label">Merk Kendaraan</label>
                                        <input type="text" class="form-control input-sm" id="Mken" name="" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label class="control-label">Cc Kendaraan</label>
                                        <input type="text" class="form-control input-sm" id="Cc" name="" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div>
                    <div class="form-group"> -->
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kondisi Ditangan Pemakai</label>
                                <input type="text" class="form-control input-sm" id="" name="Kpakai" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <div class="row gutter"></div>
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
                                    <label class="control-label">Pemakai Kendaraan Dinas</label>
                                    <select class="form-control input-sm" name="Idpeg" onchange="changeValue(this.value)">
                                        <option>-- Pilih Pemakai Kendaraan Dinas --</option>
                                        <?php
                                        $result = mysqli_query($link, "SELECT * FROM tdatapeg");
                                        $jsArray = "var peg = new Array();\n";


                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row['Idpeg'] . '">' . $row['Nip'] . ' ' . $row['Npeg'] . '</option>';
                                            $jsArray .= "peg['" . $row['Idpeg'] . "'] = 
                                                    {nama:'" . addslashes($row['Npeg']) . "', jab:'" . addslashes($row['Jab']) . "', ins:'" . addslashes($row['Instansi']) . "', id:'" . addslashes($row['Idpeg']) . "'};\n";
                                        } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Nama Pemakai </label>
                                    <input type="text" class="form-control input-sm" id="Npeg" name="Npeg" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Jabatan</label>
                                    <input type="text" class="form-control input-sm" id="Jab" name="Jab" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Instansi </label>
                                    <input type="text" class="form-control input-sm" id="Ins" name="Ins" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="form-group"> -->
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Keterangan Pemakai</label>
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
<!-- Tabel -->

<?php
$no = '1';
$query = "SELECT * FROM tpken INNER JOIN tkend ON tkend.Idken = tpken.Idken INNER JOIN tdatapeg ON tdatapeg.Idpeg = tpken.Idpeg ORDER BY Idpk ASC ";
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
                                <th>Foto Motor</th>
                                <th>Merk Motor</th>
                                <th>Cc </th>
                                <th>Tahun Beli</th>
                                <th>Nomor Rangka</th>
                                <th>Nomor Mesin</th>
                                <th>Nomor Polisi</th>
                                <th>BPKB</th>
                                <th>Nama Pegawai</th>
                                <th>Jabatan</th>
                                <th>Instansi</th>
                                <th>Kondisi</th>
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
                                    <td><?= $row['Mken'] ?></td>
                                    <td><?= $row['Cc'] ?></td>
                                    <td><?= $row['Thbeli'] ?></td>
                                    <td><?= $row['Nrk'] ?></td>
                                    <td><?= $row['Nmsn'] ?></td>
                                    <td><?= $row['Npol'] ?></td>
                                    <td><?= $row['Bpkb'] ?></td>
                                    <td><?= $row['Npeg'] ?></td>
                                    <td><?= $row['Jab'] ?></td>
                                    <td><?= $row['Instansi'] ?></td>
                                    <td><?= $row['Kpakai'] ?></td>
                                    <td><?= $row['Keter'] ?></td>
                                    <td>
                                        <div class="btn-group text-center">
                                            <a href="delete.php?id=<?= $row['0'] ?>" id="hapus" class="badge badge-danger"><i class="icon-trash">Delete</i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <li>
                <a href="#" onclick="myFunction()" class="btn btn-warning"><span><i class="icon-print"></i></span>Cetak Data Pemakai Kendaraan Dinas</a>
            </li>
        </div>
    </div>
</div>
<!-- Row Ends -->
<div class="modal fade pencarian" id="laporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel1"><b>Cari Kendaraan</b></h2>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal<i class="icon-cancel"></i> </a>
                </div>
                <?php
                $no = '1';
                $query = "SELECT * FROM tkend ORDER BY Idken ASC";
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
                                                    <th>Merk Motor</th>
                                                    <th>Cc </th>
                                                    <th>Tahun Kendaraan</th>
                                                    <th>Nomor Polisi</th>
                                                    <th>BPKB</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <tr id="data merk cc" onClick="masuk(this,'<?= $row['Idken'] ?>', '<?= $row['Mken'] ?>', '<?= $row['Cc'] ?>' )" href="javascript:void(0)">
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?= $row['Mken'] ?></td>
                                                        <td><?= $row['Cc'] ?></td>
                                                        <td><?= $row['Thbeli'] ?></td>
                                                        <td><?= $row['Npol'] ?></td>
                                                        <td><?= $row['Bpkb'] ?></td>
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

<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        //focusin berfungsi ketika cursor berada di dalam textbox modal langsung aktif
        $(".pencarian").focusin(function() {
            $("#laporan").modal('show'); // ini fungsi untuk menampilkan modal
        });
        $('#example').DataTable(); // fungsi ini untuk memanggil datatable
    });

    function masuk(txt, data, merk, cc) {
        document.getElementById('Idken').value = data; // ini berfungsi mengisi value  yang ber id textbox
        document.getElementById('Mken').value = merk; // ini berfungsi mengisi value  yang ber id 
        document.getElementById('Cc').value = cc; // ini berfungsi mengisi value  yang ber id 
        $("#laporan").modal('hide'); // ini berfungsi untuk menyembunyikan modal
    }
</script>

<script type="text/javascript">
    <?php echo $jsArray; ?>

    function changeValue(id) {
        document.getElementById('Npeg').value = peg[id].nama;
        document.getElementById('Jab').value = peg[id].jab;
        document.getElementById('Ins').value = peg[id].ins;
        document.getElementById('Idpeg').value = peg[id].id;
    };
</script>
<script>
    function myFunction() {
        window.open("../laporan/lappk.php");
    }
</script>

<?php
include_once "../../footer.php";
?>