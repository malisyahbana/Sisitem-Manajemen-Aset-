<?php
include_once "../../header.php";

?>
<!-- Judul Halaman -->
<div class="top-bar clearfix">
    <div class="row gutter">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="page-title">
                <h3>Data Kendaraan Dimusnahkan DISDIK</h3>
                <p>Data Aset Kendaraan Dinas / <a href="#">Dinas Pendidikan</a> / <a href="<?= base_url() ?>/admin/index.php">Home</a></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="right-stats" id="mini-nav-right">

                <li>
                    <a href="#" onclick="myFunction()" class="btn btn-info"><span><i class="icon-print"></i></span>Cetak Data Kendaraan Dimusnahkan</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends -->
<?php
$no = '1';
$query = "SELECT * FROM tkend WHERE Kondisi = 'Musnah' ORDER BY Idken ASC";
$result = mysqli_query($link, $query);
?>
<!-- Row Konten -->
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-blue">
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto Kendaraan</th>
                                <th>Merk Kendaraan</th>
                                <th>Cc </th>
                                <th>Tahun Beli</th>
                                <th>Nomor Rangka</th>
                                <th>Nomor Mesin</th>
                                <th>Nomor Polisi</th>
                                <th>BPKB</th>
                                <th>Asal Motor</th>
                                <th>Sumber Dana</th>
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
                                        <div>
                                            <a href="#" class="pop">
                                                <img src="<?= base_url(); ?>/img/<?= $row['Foto'] ?>" width="70" heigth="70">
                                            </a>

                                        </div>
                                    </td>
                                    <td><?= $row['Mken'] ?></td>
                                    <td><?= $row['Cc'] ?></td>
                                    <td><?= $row['Thbeli'] ?></td>
                                    <td><?= $row['Nrk'] ?></td>
                                    <td><?= $row['Nmsn'] ?></td>
                                    <td><?= $row['Npol'] ?></td>
                                    <td><?= $row['Bpkb'] ?></td>
                                    <td><?= $row['Aken'] ?></td>
                                    <td><?= $row['Sdana'] ?></td>
                                    <td><?= $row['Kondisi'] ?></td>
                                    <td><?= $row['Ket'] ?></td>
                                    <td>
                                        <div class="btn-group text-center">
                                            <a href="delmotor.php?id=<?= $row['0'] ?>" id="hapus" class="badge badge-danger"><i class="icon-trash">Delet</i></a>
                                        </div>
                                    </td>
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
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">

                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <img src="" class="imagepreview" style="width: 100%;">

            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('.pop').on('click', function() {
            $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');
        });
    });
</script>

<script>
    function myFunction() {
        window.open("../laporan/lapmusnahk.php");
    }
</script>

<script type="text/javascript">



</script>

<?php
include_once "../../footer.php";
?>