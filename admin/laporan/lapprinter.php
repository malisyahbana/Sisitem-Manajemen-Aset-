<?php
require '../../config/config.php';
include '../../config/database.php';

$waktu = date('d F Y');

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);
?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN DATA ASET</title>
</head>

<body>
    <!-- <img src="<?= base_url() ?>/assets/img/logo-hss.png" align="left" width="75" height="75"> -->
    <!-- <img src="<?= base_url('assets/bukti_kenaikan_jabatan/tut wuri.png') ?>" align="right" width="75" height="75"> -->
    <p align="center"><b>
            <img src="<?= base_url() ?>/assets/img/logo-hss.png" align="left" width="75" height="75">
            <font size="3">PEMERINTAH KAB HULU SUNGAI SELATAN</font> <br>
            <font size="5">DINAS PENDIDIKAN DAN KEBUDAYAAN</font> <br>
            <font size="3">
                Jl. Melati No.17, Kandangan, Kec. Kandangan, Kab. Hulu Sungai Selatan, Prov. Kalimantan Selatan, 71212 <br>
                Telp : (0517)22703 , Fax : 21081, Email : diknas.kabhss@gmail.com
            </font>
            <hr size="4" noshade="">
        </b></p>

    <h3>
        <center>
            LAPORAN DATA ASET PRINTER <br>
        </center>
    </h3>
    <?php
    $no = '1';
    $query = "SELECT * FROM tkom WHERE Jkom = 'Printer' ORDER BY Idkom ASC ";
    $result = mysqli_query($link, $query);
    ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="text-align: center; font-size: 18px;">No</th>
                            <th style="text-align: center; font-size: 18px;">Foto Printer</th>
                            <th style="text-align: center; font-size: 18px;">Merk Printer</th>
                            <th style="text-align: center; font-size: 18px;">Tanggal Beli </th>
                            <th style="text-align: center; font-size: 18px;">Asal Printer</th>
                            <th style="text-align: center; font-size: 18px;">Jumlah Unit</th>
                            <th style="text-align: center; font-size: 18px;">Harga (Rp)</th>
                            <th style="text-align: center; font-size: 18px;">Total Harga (Rp)</th>
                            <th style="text-align: center; font-size: 18px;">Kondisi</th>
                            <th style="text-align: center; font-size: 18px;">Sumber Dana</th>
                            <th style="text-align: center; font-size: 18px;">Keterangan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($tampil = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td align="center"><?php echo $no++; ?></td>
                                <td align="center">
                                    <div>
                                        <img src="<?= base_url(); ?>/img/<?= $tampil['Foto'] ?>" width="70" heigth="70">
                                    </div>
                                </td>
                                <td align="center"><?= $tampil['Merk'] ?></td>
                                <td align="center"><?= date('d-m-Y', strtotime($tampil['Tbeli'])) ?></td>
                                <td align="center"><?= $tampil['Asal'] ?></td>
                                <td align="center"><?= $tampil['Jlh'] ?></td>
                                <td align="center"><?= $tampil['Hrg'] ?></td>
                                <td align="center"><?= $tampil['Jlh'] * $tampil['Hrg'] ?></td>
                                <td align="center"><?= $tampil['Kondisi'] ?></td>
                                <td align="center"><?= $tampil['Sdana'] ?></td>
                                <td align="center"><?= $tampil['Ket'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>
    <br>


    <br>
    <div style="text-align: center; display: inline-block; float: Right;">
        <font size="2">Kandangan, <?= $waktu; ?> </font> <br>
        <font size="2">Dinas Pendidikan </font> <br>
        <font size="2">Kabupaten Hulu Sungai Selatan</font> <br>
        <font size="3"></font> <br>
        <font size="3"></font> <br>
        <font size="3"></font> <br>
        <font size="2">Kepala Dinas Pendidikan</font> <br>
    </div>


</body>

</html>