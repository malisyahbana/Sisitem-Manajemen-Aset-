<?php
require '../../config/config.php';
include '../../config/database.php';

// $no = 1;
// if (isset($_POST['cetak'])) {

//    $data = mysqli_query($koneksi, "SELECT * FROM ewisata WHERE jns = 'Wisata' ");
//    $jumlah = mysqli_num_rows($data);
//      }

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
            LAPORAN DATA MUTASI ASET ELEKTRONIK DAN ALAT BELAJAR MENGAJAR <br>
        </center>
    </h3>
    <?php
    $no = '1';
    $query = "SELECT tma.Idmut, tma.Idaln, tma.Jaln, tma.Idkom, tma.Jkom, tma.Idskh, tma.Ket, tkom.Idkom, tkom.Merk, tkom.Jkom as jk, tkom.Jlh as uk, tkom.Hrg as kh, tkom.Kondisi as kk, tkom.Ket as lokm, tasl.Idaln, tasl.Brg, tasl.Jaln as ja, tasl.Jlh as ua, tasl.Hrg as ha, tasl.Kondisi as ka, tasl.Ket as lokp, tsekolah.Idskh, tsekolah.Nmskh, tsekolah.Askh FROM tma INNER JOIN tkom ON tkom.Idkom = tma.Idkom INNER JOIN tasl ON tasl.Idaln = tma.Idaln INNER JOIN tsekolah ON tsekolah.Idskh = tma.Idskh ORDER by Idmut ASC ";
    $result = mysqli_query($link, $query);
    ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="text-align: center; font-size: 18px;">No</th>
                            <th style="text-align: center; font-size: 18px;">Merk Elektronik</th>
                            <th style="text-align: center; font-size: 18px;">Lokasi Asal</th>
                            <th style="text-align: center; font-size: 18px;">Jumlah Unit </th>
                            <th style="text-align: center; font-size: 18px;">Harga (Rp)</th>
                            <th style="text-align: center; font-size: 18px;">Alat Sekolah</th>
                            <th style="text-align: center; font-size: 18px;">Lokasi Asal</th>
                            <th style="text-align: center; font-size: 18px;">Jumlah Alat</th>
                            <th style="text-align: center; font-size: 18px;">Harga (Rp)</th>
                            <th style="text-align: center; font-size: 18px;">Sekolah</th>
                            <th style="text-align: center; font-size: 18px;">Alamat Sekolah</th>
                            <th style="text-align: center; font-size: 18px;">Keterangan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($tampil = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td align="center"><?= $tampil['Merk'] ?></td>
                                <td align="center"><?= $tampil['lokm'] ?> Dinas Pendidikan</td>
                                <td align="center"><?= $tampil['Jkom'] ?></td>
                                <td align="center"><?= $tampil['kh'] ?></td>
                                <td align="center"><?= $tampil['Brg'] ?></td>
                                <td align="center"><?= $tampil['lokp'] ?> Dinas Pendidikan</td>
                                <td align="center"><?= $tampil['Jaln'] ?></td>
                                <td align="center"><?= $tampil['ha'] ?></td>
                                <td align="center"><?= $tampil['Nmskh'] ?></td>
                                <td align="center"><?= $tampil['Askh'] ?></td>
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