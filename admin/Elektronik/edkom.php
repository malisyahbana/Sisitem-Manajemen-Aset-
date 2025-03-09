<?php
include_once "../../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah Data Aset Komputer</h3>
                <p>Data Aset Komputer / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="komputer.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
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
                    $sql = "SELECT * FROM tkom WHERE Idkom = '$id' ";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Elektronik</label>
                                <input type="text" class="form-control" id="Idkom" name="Idkom" value="<?= $row['Idkom'] ?>" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Upload Foto Aset Elektronik</label>
                                    <img src="<?= base_url() ?>/img/<?= $row['Foto']; ?>" class="img-responsive">
                                    <input type="checkbox" name="ubah_foto" id="centang" value="true">
                                    <label for="centang">Centang jika ingin mengubah foto</label>
                                    <input type="file" class="form-control" name="gbr" id="gbr" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Jenis Elektronik</label>
                                    <input type="text" class="form-control" id="" name="Jkom" value="Komputer" placeholder="Komputer" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Tipe / Merk Elektronik</label>
                                    <input type="text" class="form-control" id="Merk" name="Merk" required="" value="<?= $row['Merk'] ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Tanggal Beli</label>
                                <input type="date" class="form-control" id="Tbeli" name="Tbeli" />
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
                            <label class="control-label">Asal Elektronik </label>
                            <input type="text" class="form-control" id="Asal" name="Asal" value="<?= $row['Asal'] ?>" readonly />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Jumlah Unit</label>
                            <input type="text" class="form-control" id="Jlh" name="Jlh" value="<?= $row['Jlh'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Harga Per-Unit</label>
                            <input type="text" class="form-control" id="Hrg" name="Hrg" value="<?= $row['Hrg'] ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kondisi Elektronik</label>
                                <Select class="form-control" name="Kondisi" id="Kondisi">
                                    <option value=""> -->Kondisi Elektronik<-- </option>
                                    <option <?php if ($row['Kondisi'] == "Baru") {
                                                echo "Selected";
                                            } ?>>Baru</option>
                                    <option <?php if ($row['Kondisi'] == "Baik") {
                                                echo "Selected";
                                            } ?>>Baik</option>
                                    <option <?php if ($row['Kondisi'] == "Rusak Berat") {
                                                echo "Selected";
                                            } ?>>Rusak Berat</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Sumber Dana</label>
                                <input type="text" class="form-control" id="Sdana" name="Sdana" value="<?= $row['Sdana'] ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Keterangan</label>
                            <input type="text" class="form-control" id="Ket" name="Ket" value="<?= $row['Ket'] ?>" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="form-group">

                        <div class="row gutter"></div>
                    </div>
                </div>
                <div class="form-group no-margin">
                    <div class="col-md-12">
                        <button type="submit" id="skom" name="ekom" class="btn btn-success">Simpan</button>
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