<?php
include_once "../../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah Data Aset Kendaraan</h3>
                <p>Data Kendaraan / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="motor.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
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
                    $sql = "SELECT * FROM tkend WHERE Idken = '$id' ";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Kendaraan</label>
                                <input type="text" class="form-control" id="Idken" name="Idken" value="<?= $row['Idken'] ?>" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Upload Foto Motor</label>
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
                                    <label class="control-label">Jenis Kendaraan</label>
                                    <Select class="form-control" name="Jken" id="Jken">
                                        <option value="">-->Pilih Jenis Kendaraan<-- </option>
                                        <option <?php if ($row['Jken'] == "Motor") {
                                                    echo "Selected";
                                                } ?>>Motor</option>
                                        <option <?php if ($row['Jken'] == "Mobil") {
                                                    echo "Selected";
                                                } ?>>Mobil</option>
                                        <option <?php if ($row['Jken'] == "Bus") {
                                                    echo "Selected";
                                                } ?>>Bus</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Merk Kendaraan</label>
                                    <input type="text" class="form-control" id="Mken" name="Mken" required="" value="<?= $row['Mken'] ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">CC Kendaraan </label>
                                <input type="text" class="form-control" id="Cc" name="Cc" required="" value="<?= $row['Cc'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Tahun Beli</label>
                                <?php

                                echo "<select class='form-control' name='Thbeli'><option selected>";
                                $tahun = 1980;
                                for ($i = $tahun; $i <= $tahun + 50; $i++)
                                    echo "<option value=$i>$i<br />";
                                echo "</option></select>";  ?>
                                <!-- <input type="date" class="form-control" id="Thbeli" name="Thbeli" /> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Harga </label>
                                <input type="text" class="form-control" id="Hrg" name="Hrg" value="<?= $row['Hrg'] ?>" />
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
                            <label class="control-label">Nomor Rangka</label>
                            <input type="text" class="form-control" id="Nrk" name="Nrk" value="<?= $row['Nrk'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Nomor Polisi</label>
                            <input type="text" class="form-control" id="Npol" name="Npol" value="<?= $row['Npol'] ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nomor Mesin</label>
                                <input type="text" class="form-control" id="Nmsn" name="Nmsn" value="<?= $row['Nmsn'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">BPKB</label>
                                <input type="text" class="form-control" id="Bpkb" name="Bpkb" value="<?= $row['Bpkb'] ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Asal Kendaraan</label>
                            <input type="text" class="form-control" id="Aken" name="Aken" value="<?= $row['Aken'] ?>" />
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
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Kondisi</label>
                            <Select class="form-control" name="Kondisi" id="Kondisi">
                                <option value="">-->Kondisi Kendaraan<-- </option>
                                <option <?php if ($row['Kondisi'] == "Baru") {
                                            echo "Selected";
                                        } ?>>Baru</option>
                                <option <?php if ($row['Kondisi'] == "Baik") {
                                            echo "Selected";
                                        } ?>>Baik</option>
                                <option <?php if ($row['Kondisi'] == "Rusak Berat") {
                                            echo "Selected";
                                        } ?>>Rusak Berat</option>
                                <option value="Musnah">Musnah</option>
                            </select>
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
                        <button type="submit" id="simpan" name="emotor" class="btn btn-success">Simpan</button>
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