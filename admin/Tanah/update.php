<?php
include_once "../../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah Data Aset Tidak Bergerak</h3>
                <p>Data Aset Tidak Bergerak / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
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
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="panel panel-blue">
            <div class="panel-heading">
                <!-- <h4>Responsive Table</h4> -->
            </div>
            <div class="panel-body">
                <form id="menuForm" method="POST" action="proses.php" enctype="multipart/form-data">
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM tanah WHERE idtanah = '$id' ";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Aset </label>
                                <input type="text" class="form-control" id="idtanah" name="idtanah" value="<?= $row['idtanah'] ?>" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Nomor Kepemilikan Hak Aset</label>
                                    <input type="text" class="form-control" name="nhak" id="nhak" value="<?= $row['nhak'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Jenis Aset</label>
                                    <Select class="form-control" name="jns" id="jns">
                                    <option <?php if ($row['jns'] == "Tanah") {
                                                echo "Selected";
                                            } ?>>Tanah</option>
                                    <option <?php if ($row['jns'] == "Bangunan") {
                                                echo "Selected";
                                            } ?>>Bangunan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Status Aset</label>
                                    <input type="text" class="form-control" name="stts" id="stts" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Nomor Akta Peralihan Hak</label>
                                    <input type="text" class="form-control" id="hibah" name="hibah" value="<?= $row['hibah'] ?>" required="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Surat Peralihan Hak</label>
                                <input type="file" class="form-control" id="srt" name="srt"/>
                                <label class="control-label">Maksimal 3 Mb* </label>
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
                        <div class="col-md-12">
                            <label class="control-label">Tanggal Peralihan</label>
                            <input type="date" class="form-control" id="tgl" name="tgl" value="<?= $row['tgl'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Berkas Akta Peralihan </label>
                            <input type="file" class="form-control" id="berkas" name="berkas"/>
                            <label class="control-label">Maksimal 3 Mb* </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Keterangan</label>
                            <input type="text" class="form-control" id="ket" name="ket"value="<?= $row['ket'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" id="sel" name="update" class="btn btn-success">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-warning">Batal</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
<?php
include_once "../../footer.php";

?>
<?php

?>