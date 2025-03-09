<?php
include_once "../../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Aset Perlengkapan Sekolah</h3>
                <p>Data Barang / <a href="#">Sekolah</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">
                <li>
                    <a href="add.php" class="btn btn-success"><i class="icon-briefcase4"></i> Tambah</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->



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
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto Barang</th>
                                <th>Jenis Barangh</th>
                                <th>Barang</th>
                                <th>Tanggal Pembelian</th>
                                <th>Jumlah Barang</th>
                                <th>Harga Satuan</th>
                                <th>Total Harga</th>
                                <th>Asal Barang</th>
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
                                    <td><?= $row['Jaln'] ?></td>
                                    <td><?= $row['Brg'] ?></td>
                                    <td><?= date('d-m-Y', strtotime($row['Tgl'])) ?></td>
                                    <td><?= $row['Jlh'] ?></td>
                                    <td><?= $row['Hrg'] ?></td>
                                    <td><?= $row['Hrg'] * $row['Jlh'] ?></td>
                                    <td><?= $row['Asl'] ?></td>
                                    <td><?= $row['Kondisi'] ?></td>
                                    <td><?= $row['Ket'] ?></td>
                                    <td>
                                        <center>
                                            <div class="btn-group text-center">
                                                <a href="update.php?id=<?= $row['0'] ?>" class="badge badge-info badge-xs"><i class="icon-pencil"></i>Edit </a>
                                                <a href="delete.php?id=<?= $row['0'] ?>" id="hapus" class="badge badge-danger"><i class="icon-trash">Delet</i></a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <li>
                    <!-- <a href="#" onclick="myFunction()" class="btn btn-warning"><span><i class="icon-download5"></i></span>Cetak Aset Perlengkapan Sekolah</a> -->
                    <a href="#" data-toggle="modal" data-target="#laporan" class="btn btn-warning"><span><i class="icon-download5"></i></span>Cetak Aset Perlengkapan Sekolah</a>
                </li>
            </div>
        </div>
    </div>
</div>
<!-- Row Ends -->

<form action="<?= base_url('admin/laporan/lapasek.php') ?>" method="POST" target="blank">
    <div class="modal fade" id="laporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel1"><b>Cetak Laporan Perlengkaoan Sekolah Sesuai Kategori</b></h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="row gutter">
                                            <div class="col-md-6">
                                                <label class="control-label">Pilih Tanggal :</label>
                                                <input type="date" class="form-control" name="tgl_awal">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Sampai Dengan Tanggal :</label>
                                                <input type="date" class="form-control" name="tgl_akhir">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Pilih Kategori Barang Cetak</label>
                                                <Select class="form-control" name="Jaln" id="Jaln">
                                                    <option value="">-->Pilih Jenis Perlengkapan<-- </option>
                                                    <option value="Meja">Meja</option>
                                                    <option value="Kursi">Kursi</option>
                                                    <option value="Lemari">Lemari</option>
                                                    <option value="Papan Tulis">Papan Tulis</option>
                                                    <option value="Olahraga">Olahraga</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm" name="cetak"><i class="icon-printer2"></i> Cetak</button>
                    <button type="submit" class="btn btn-success btn-sm" name="cetaksemua"><i class="icon-printer"></i> Cetak Semua Data</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="icon-cancel"></i> Batal</a>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    function myFunction() {
        window.open("../laporan/lapasek.php");
    }
</script>
<?php
include_once "../../footer.php";
?>