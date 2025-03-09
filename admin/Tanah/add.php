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
                        $carikode = mysqli_query($link, "SELECT MAX(idtanah) AS maxKode FROM tanah") or die(mysqli_error($link));
                        $datakode = mysqli_fetch_array($carikode);
                        
                        if ($datakode && $datakode['maxKode']) {
                            // Ambil angka dari ID terakhir (contoh: ATNH002 → 2)
                            preg_match('/\d+$/', $datakode['maxKode'], $matches);
                            $nilaikode = isset($matches[0]) ? (int)$matches[0] : 0;
                            
                            $kode = $nilaikode + 1;
                            
                            // Format angka jadi 3 digit (misal: 002, 015, 120)
                            $kodeotomatis = str_pad($kode, 3, "0", STR_PAD_LEFT);
                        } else {
                            $kodeotomatis = "001"; // Jika tabel kosong, mulai dari 001
                        }
                        
                        $idOto = 'ATNH' . $kodeotomatis;
                        
                        ?>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Kode Aset </label>
                                <input type="text" class="form-control" id="idtanah" name="idtanah" value="<?= $idOto ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Nomor Kepemilikan Hak Aset</label>
                                    <input type="text" class="form-control" name="nhak" id="nhak" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row gutter">
                                <div class="col-md-12">
                                    <label class="control-label">Jenis Aset</label>
                                    <Select class="form-control" name="jns" id="jns">
                                        <option value="">-->Pilih Jenis Aset<-- </option>
                                        <option value="Tanah">Tanah</option>
                                        <option value="Bangunan">Bangunan</option>
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
                                    <input type="text" class="form-control" id="hibah" name="hibah" required="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-12">
                                <label class="control-label">Surat Peralihan Hak</label>
                                <input type="file" class="form-control" id="srt" name="srt" />
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
                            <input type="date" class="form-control" id="tgl" name="tgl" required="" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Berkas Akta Peralihan </label>
                            <input type="file" class="form-control" id="berkas" name="berkas" />
                            <label class="control-label">Maksimal 3 Mb* </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row gutter">
                        <div class="col-md-12">
                            <label class="control-label">Keterangan</label>
                            <input type="text" class="form-control" id="ket" name="ket" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" id="sel" name="simpan" class="btn btn-success">Simpan</button>
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