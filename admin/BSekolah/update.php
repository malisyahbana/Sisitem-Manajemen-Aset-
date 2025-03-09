<?php
include_once "../../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah Data Aset Elektronikr</h3>
                <p>Data Aset Elektronik / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
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
                    $sql = "SELECT * FROM tasl WHERE Idaln = '$id' ";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Aset Barang</label>
                                <input type="text" class="form-control" id="Idaln" name="Idaln" value="<?= $row['Idaln'] ?>" readonly />
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
                                    <label class="control-label">Jenis Perlengkapan</label>
                                    <Select class="form-control" name="Jaln" id="Jaln">
                                        <option value="">-->Pilih Jenis Perlengkapan<-- </option>
                                        <option <?php if ($row['Jaln'] == "Meja") {
                                                    echo "Selected";
                                                } ?>>Meja</option>
                                        <option <?php if ($row['Jaln'] == "Kursi") {
                                                    echo "Selected";
                                                } ?>>Kursi</option>
                                        <option <?php if ($row['Jaln'] == "Lemari") {
                                                    echo "Selected";
                                                } ?>>Lemari</option>
                                        <option <?php if ($row['Jaln'] == "Papan Tulis") {
                                                    echo "Selected";
                                                } ?>>Papan Tulis</option>
                                        <option <?php if ($row['Jaln'] == "Olahraga") {
                                                    echo "Selected";
                                                } ?>>Olahraga</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Nama Perlengkapan</label>
                                    <input type="text" class="form-control" id="Brg" name="Brg" required="" value="<?= $row['Brg'] ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Jumlah Perlengkapan</label>
                                <input type="text" class="form-control" id="Jlh" name="Jlh" value="<?= $row['Jlh'] ?>" />
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
                            <label class="control-label">Asal Perlengkapan </label>
                            <input type="text" class="form-control" id="Asl" name="Asl" value="<?= $row['Asl'] ?>" />
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
                                <label class="control-label">Kondisi Perlengkapan</label>
                                <Select class="form-control" name="Kondisi" id="Kondisi">
                                    <option value=""> -->Kondisi Perlengkapan<-- </option>
                                    <option <?php if ($row['Kondisi'] == "Baru") {
                                                echo "Selected";
                                            } ?>>Baru</option>
                                    <option <?php if ($row['Kondisi'] == "Baik") {
                                                echo "Selected";
                                            } ?>>Baik</option>
                                    <option <?php if ($row['Kondisi'] == "Rusak") {
                                                echo "Selected";
                                            } ?>>Rusak</option>
                                </select>
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
                        <button type="submit" id="sel" name="ubah" class="btn btn-success">Simpan</button>
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