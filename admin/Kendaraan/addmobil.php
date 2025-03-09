<?php
include_once "../../header.php";

?>
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Tambah Data Kendaraan</h3>
                <p>Data Kendaraan / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="mobil.php" class="btn btn-danger"><i class="icon-reply"></i> Kembali</a>
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
                <form id="menuForm" method="POST" action="proses.php" enctype="multipart/form-data" runat="server">

                    <?php
                    $query = mysqli_query($link, "SELECT max(Idken) as kodeTerbesar FROM tkend WHERE Jken = 'Mobil' ");
                    $data = mysqli_fetch_array($query);
                    $kodeBarang = $data['kodeTerbesar'];

                    $urutan = (int) substr($kodeBarang, 3, 3);

                    $urutan++;

                    $huruf = "211";
                    $kodeBarang = $huruf . sprintf("%03s", $urutan);
                    // echo $kodeBarang;
                    ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Kendaraan</label>
                                <input type="text" class="form-control" id="Idken" name="Idken" value="<?= $kodeBarang ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Upload Foto Penginapan</label>
                                    <input type="file" class="form-control" name="gbr" id="imgInp" accept='image/*' onchange='readURL(event)' /> <br>
                                    <img src="" alt="" id="output" height="150" width="150">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Jenis Kendaraan</label>
                                    <input type="text" class="form-control" id="" value="Mobil" placeholder="Mobil" name="Jken" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Merk Kendaraan</label>
                                    <input type="text" class="form-control" id="Mken" name="Mken" required="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">CC Kendaraan </label>
                                <input type="text" class="form-control" id="Cc" name="Cc" required="" />
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
                                <input type="text" class="form-control" id="Hrg" name="Hrg" />
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
                            <input type="text" class="form-control" id="Nrk" name="Nrk" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Nomor Polisi</label>
                            <input type="text" class="form-control" id="Npol" name="Npol" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Nomor Mesin</label>
                                <input type="text" class="form-control" id="Nmsn" name="Nmsn" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">BPKB</label>
                                <input type="text" class="form-control" id="Bpkb" name="Bpkb" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Asal Kendaraan</label>
                            <input type="text" class="form-control" id="Aken" name="Aken" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Sumber Dana</label>
                            <input type="text" class="form-control" id="Sdana" name="Sdana" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Kondisi</label>
                            <Select class="form-control" name="Kondisi" id="Kondisi">
                                <option value="">-->Kondisi Kendaraan<-- </option>
                                <option value="Baru">Baru</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak Berat">Rusak Berat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Keterangan</label>
                            <input type="text" class="form-control" id="Ket" name="Ket" />
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
                        <button type="submit" id="simpan" name="smobil" class="btn btn-success">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-warning">Batal</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var readURL = function(event) {
        var input = event.target;

        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            var output = document.getElementById('output');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    };
</script>
<script type="text/javascript">

</script>
<?php
include_once "../../footer.php";

?>
<?php

?>