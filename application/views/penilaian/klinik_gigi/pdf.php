<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penilaian Klinik | <?= $title; ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

    <style>
    .text-center {
        text-align: center !important
    }

    .logodisp {
        float: left;
        position: relative;
        width: 80px;
        height: 80px;
        margin: .5rem 0 5 .5rem;
        ;
    }

    .header {
        text-align: center;
        margin: 0;

    }

    .pemkot {
        font-size: 20pt;
        font-family: Arial, Helvetica, sans-serif;
    }

    .dinas {
        font-size: 28pt;
        font-family: Arial, Helvetica, sans-serif;
    }

    .alamat {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: 8pt;
    }

    .title {
        margin-top: 10;
        text-align: center;
        font-family: 'Times New Roman';
        font-size: 12pt;
    }

    .text-bap {
        text-align: justify;
        font-family: 'Times New Roman';
        font-size: 12pt;
        line-height: 1.6;
    }

    .hr-satu {
        display: block;
        height: 2px;
        border: 0;
        border-top: 2px solid #000;
        margin-top: 10;
        color: #000;
    }

    .hr-dua {
        height: 1px;
        color: #000;
    }

    .table-content {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    .th-content,
    .td-content {
        text-align: left;
        padding: 8px;
    }

    .tr-content:nth-child(even) {
        background-color: #f2f2f2
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    /* ol {
        display: table !important;
        width: 100% !important;
    }

    ol li {
		display: table-cell !important;
    } */

    /* table,
    th,
    td {
		border: 1px solid black;
        border-collapse: collapse;
    } */
    </style>
</head>

<body>
    <img class="logodisp" src="<?php echo base_url() ?>assets/img/pemkot.png" type="image/png" />
    <p class="header">
        <b class="pemkot">PEMERINTAH KOTA SEMARANG
        </b><br>
        <b class="dinas">DINAS KESEHATAN</b><br>
        <b class="alamat">Jl. Pandanaran No. 79 Telp.(024)8415269 - 8318070 Fax.(024) 8318771 Kode Pos : 50241
            SEMARANG</b>
    </p>
    <hr class="hr-satu">
    <hr class="hr-dua">
    <p class="title"><u><b>BERITA ACARA PENILAIAN KESESUAIAN
                KLINIK</b></u></p>
    <p class="title">NOMOR :
        <?php echo $penilaian['no_penilaian'], $penilaian['id_klinik'] ?></p>
    <p class="text-bap">Pada hari ini <?php echo hari_ini() ?> tanggal <?php echo tanggal_sekarang() ?> (
        <?php echo terbilang(tanggal_sekarang()) ?> )
        bulan <?php echo bulan_sekarang() ?> tahun <?php echo tahun_sekarang() ?>, berdasarkan surat tugas Nomor
        <?php echo $penilaian['no_surat'] ?>
        tanggal <?php echo date('d', strtotime($penilaian['tgl_visitasi'])) ?>
        <?php
        $nama_bulan = date('F', strtotime($penilaian['tgl_visitasi']));
        $bulan = nama_bulan($nama_bulan);
        echo $bulan;
        ?>
        <?php echo date('Y', strtotime($penilaian['tgl_visitasi'])) ?> kami
        yang bertanda tangan
        di
        bawah ini :</p>
    <ol style="list-style:none;">
        <li class="text-bap">
            <table class="text-bap">
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $penilaian['nama_anggota1']  ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?php
                            foreach ($anggota as $p) : ?>
                            <?php if ($p->nama_anggota == $penilaian['nama_anggota1']) {
                                    echo $p->nip_anggota;
                                }
                            endforeach;
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li class="text-bap">
            <table class="text-bap">
                <tbody>
                    <tr>
                        <td>2.</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $penilaian['nama_anggota2'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?php
                            foreach ($anggota as $p) { ?>
                            <?php if ($p->nama_anggota == $penilaian['nama_anggota2']) {
                                    echo $p->nip_anggota;
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li class="text-bap">
            <table class="text-bap">
                <tbody>
                    <tr>
                        <td>3.</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $penilaian['nama_anggota3'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?php
                            foreach ($anggota as $p) { ?>
                            <?php if ($p->nama_anggota == $penilaian['nama_anggota3']) {
                                    echo $p->nip_anggota;
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li class="text-bap">
            <table class="text-bap">
                <tbody>
                    <tr>
                        <td>4.</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $penilaian['nama_anggota4'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?php
                            foreach ($anggota as $p) { ?>
                            <?php if ($p->nama_anggota == $penilaian['nama_anggota4']) {
                                    echo $p->nip_anggota;
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </li>
    </ol>
    <p
        style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:13.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
        <span style='font-size:16px;font-family:"Times New Roman",serif;color:black;'>Dengan ini menyatakan sebagai
            berikut :</span>
    </p>
    <ol style="list-style-type: upper-roman;">
        <li class="text-bap">
            Telah melakukan penilaian kesesuian dalam rangka verifikasi pemenuhan persyaratan klinik
            dengan cara
            pengecekan administrasi dan pengecekan lapangan terhadap :<br>
            <table border="0" class="class=" text-bap"">
                <tbody>
                    <tr>
                        <td>Nama Klinik</td>
                        <td>:</td>
                        <td><?php echo $penilaian['nama_klinik'] ?></td>
                    </tr>
                    <tr>
                        <td>Kemampuan Pelayanan</td>
                        <td>:</td>
                        <td><?php echo $penilaian['kemampuan_pelayanan'] ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Pelayanan Klinik</td>
                        <td>:</td>
                        <td><?php echo $penilaian['jenis_pelayanan_klinik'] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap Klinik</td>
                        <td>:</td>
                        <td><?php echo $penilaian['alamat_klinik'] ?></td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li class="text-bap">
            Berdasarkan hasil pengecekan adminitrasi melalui aplikasi, dinilai dari sisi dokumen bahwa Klinik telah
            memenuhi persyaratan minimal sesuai jenis klinik dan pelayanan yang diusulkan.
        </li>
        <li class="text-bap">
            Berdasarkan hasil pengecekan lapangan ke klinik dilakukan verifikasi sebagai berikut :
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table border="1" class="table-content" width="100%" height="100%">
                                    <thead>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" rowspan="2">No</th>
                                            <th class="text-center th-content" rowspan="2">Rincian Penilaian</th>
                                            <th class="text-center th-content" th-content colspan="2">Hasil</th>
                                            <th class="text-center th-content" rowspan="2">Keterangan</th>
                                            <th class="text-center th-content" colspan="2">Hasil Verifikasi Persyaratan
                                                Minimal
                                                **</th>
                                            <th class="text-center th-content" rowspan="2">Catatan</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <td class="text-center td-content">Ya</td>
                                            <td class="text-center td-content">Tidak</td>
                                            <td class="text-center td-content">Memenuhi Syarat</td>
                                            <td class="text-center td-content">Tidak Memenuhi Syarat</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($penilaiansatu as $row) : ?>
                                        <tr class="tr-content">
                                            <td class="text-center td-content"><?php echo $no; ?></td>
                                            <td class="text-justify td-content"><?php echo $row->rincian_penilaian; ?>
                                            </td>
                                            <?php if ($row->jawab_hasil == "Ya") {
                                                    echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>
														<td class='text-center td-content'><span></span></td>";
                                                } else {
                                                    echo "<td class='text-center td-content'><span></span></td>
														<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
                                                }
                                                ?>
                                            <td class="text-justify td-content">
                                                <?php echo $row->keterangan_penilaian; ?></td>
                                            <?php if ($row->jawab_hasil_verif == "Ya") {
                                                    echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>
														<td class='text-center td-content'><span></span></td>";
                                                } else {
                                                    echo "<td class='text-center td-content'><span></span></td>
														<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
                                                }
                                                ?>
                                            <td class="text-justify td-content">
                                                <?php echo $row->catatan_hasil_penilaian; ?>
                                            </td>
                                        </tr>
                                        <?php $no++;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                                <br>
                                <table border="1" class="table-content" width="100%" height="100%">
                                    <thead>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" colspan="9	">Peralatan klinik</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" rowspan="2">No</th>
                                            <th class="text-center th-content" rowspan="2">Kriteria</th>
                                            <th class="text-center th-content" th-content colspan="2">Standar Minimal
                                            </th>
                                            <th class="text-center th-content" th-content colspan="2">Hasil</th>
                                            <th class="text-center th-content" th-content colspan="3">Keterangan</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Ya</td>
                                            <td class="text-center td-content">Tidak</td>
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Catatan</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($peralatanklinik as $row) : ?>
                                        <tr class="tr-content">
                                            <td class="text-center td-content"><?php echo $no; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->kriteria_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->jumlah_minimal_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->satuan_penilaian_utama; ?></td>
                                            <?php if ($row->hasil_penilaian == "Ya") {
                                                    echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>
														<td class='text-center td-content'><span></span></td>";
                                                } else {
                                                    echo "<td class='text-center td-content'><span></span></td>
														<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
                                                }
                                                ?>
                                            <td class="text-justify td-content"><?php echo $row->jumlah_ketersediaan; ?>
                                            <td class="text-justify td-content"><?php echo $row->satuan_penilaian; ?>
                                            <td class="text-justify td-content"><?php echo $row->catatan_penilaian; ?>
                                            </td>
                                        </tr>
                                        <?php $no++;
                                        endforeach;
                                        ?>

                                    </tbody>
                                </table>
                                <br>
                                <table border="1" class="table-content" width="100%" height="100%">
                                    <thead>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" colspan="9">Bahan Habis Pakai</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" rowspan="2">No</th>
                                            <th class="text-center th-content" rowspan="2">Kriteria</th>
                                            <th class="text-center th-content" th-content colspan="2">Standar Minimal
                                            </th>
                                            <th class="text-center th-content" th-content colspan="2">Hasil</th>
                                            <th class="text-center th-content" th-content colspan="3">Keterangan</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Ya</td>
                                            <td class="text-center td-content">Tidak</td>
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Catatan</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomber = $no + 1;
                                        foreach ($bahanhabis as $row) : ?>
                                        <tr class="tr-content">
                                            <td class="text-center td-content"><?php echo $nomber; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->kriteria_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->jumlah_minimal_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->satuan_penilaian_utama; ?></td>
                                            <?php if ($row->hasil_penilaian == "Ya") {
                                                    echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>
														<td class='text-center td-content'><span></span></td>";
                                                } else {
                                                    echo "<td class='text-center td-content'><span></span></td>
														<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
                                                }
                                                ?>
                                            <td class="text-justify td-content"><?php echo $row->jumlah_ketersediaan; ?>
                                            <td class="text-justify td-content"><?php echo $row->satuan_penilaian; ?>
                                            <td class="text-justify td-content"><?php echo $row->catatan_penilaian; ?>
                                            </td>
                                        </tr>
                                        <?php $nomber++;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                                <!-- <br>
								<table border="1" class="table-content" width="100%" height="100%">
									<thead>
										<tr class="tr-content">
											<th class="text-center th-content" colspan="9">Perlengkapan</th>
										</tr>
										<tr class="tr-content">
											<th class="text-center th-content" rowspan="2">No</th>
											<th class="text-center th-content" rowspan="2">Kriteria</th>
											<th class="text-center th-content" th-content colspan="2">Standar Minimal</th>
											<th class="text-center th-content" th-content colspan="2">Hasil</th>
											<th class="text-center th-content" th-content colspan="3">Keterangan</th>
										</tr>
										<tr class="tr-content">
											<td class="text-center td-content">Jumlah</td>
											<td class="text-center td-content">Satuan</td>
											<td class="text-center td-content">Ya</td>
											<td class="text-center td-content">Tidak</td>
											<td class="text-center td-content">Jumlah</td>
											<td class="text-center td-content">Satuan</td>
											<td class="text-center td-content">Catatan</td>
										</tr>
									</thead>
									<tbody>
										<?php
                                        $nomer = $nomber + 1;
                                        foreach ($perlengkapan as $row) : ?>
											<tr class="tr-content">
												<td class="text-center td-content"><?php echo $nomer; ?></td>
												<td class="text-justify td-content"><?php echo $row->kriteria_penilaian_utama; ?></td>
												<td class="text-justify td-content"><?php echo $row->jumlah_minimal_penilaian_utama; ?></td>
												<td class="text-justify td-content"><?php echo $row->satuan_penilaian_utama; ?></td>
												<?php if ($row->hasil_penilaian == "Ya") {
                                                    echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>
														<td class='text-center td-content'><span></span></td>";
                                                } else {
                                                    echo "<td class='text-center td-content'><span></span></td>
														<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
                                                }
                                                ?>
												<td class="text-justify td-content"><?php echo $row->jumlah_ketersediaan; ?>
												<td class="text-justify td-content"><?php echo $row->satuan_penilaian; ?>
												<td class="text-justify td-content"><?php echo $row->catatan_penilaian; ?>
												</td>
											</tr>
										<?php $nomer++;
                                        endforeach;
                                        ?>
									</tbody>
								</table> -->
                                <br>
                                <table border="1" class="table-content" width="100%" height="100%">
                                    <thead>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" colspan="9">Meubelair</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" rowspan="2">No</th>
                                            <th class="text-center th-content" rowspan="2">Kriteria</th>
                                            <th class="text-center th-content" th-content colspan="2">Standar Minimal
                                            </th>
                                            <th class="text-center th-content" th-content colspan="2">Hasil</th>
                                            <th class="text-center th-content" th-content colspan="3">Keterangan</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Ya</td>
                                            <td class="text-center td-content">Tidak</td>
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Catatan</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = $nomer + 1;
                                        foreach ($meubelair as $row) : ?>
                                        <tr class="tr-content">
                                            <td class="text-center td-content"><?php echo $num; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->kriteria_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->jumlah_minimal_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->satuan_penilaian_utama; ?></td>
                                            <?php if ($row->hasil_penilaian == "Ya") {
                                                    echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>
														<td class='text-center td-content'><span></span></td>";
                                                } else {
                                                    echo "<td class='text-center td-content'><span></span></td>
														<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
                                                }
                                                ?>
                                            <td class="text-justify td-content"><?php echo $row->jumlah_ketersediaan; ?>
                                            <td class="text-justify td-content"><?php echo $row->satuan_penilaian; ?>
                                            <td class="text-justify td-content"><?php echo $row->catatan_penilaian; ?>
                                            </td>
                                        </tr>
                                        <?php $num++;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                                <br>
                                <table border="1" class="table-content" width="100%" height="100%">
                                    <thead>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" colspan="9">Pencatatan dan Pelaporan</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" rowspan="2">No</th>
                                            <th class="text-center th-content" rowspan="2">Kriteria</th>
                                            <th class="text-center th-content" th-content colspan="2">Standar Minimal
                                            </th>
                                            <th class="text-center th-content" th-content colspan="2">Hasil</th>
                                            <th class="text-center th-content" th-content colspan="3">Keterangan</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Ya</td>
                                            <td class="text-center td-content">Tidak</td>
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Catatan</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nums = $num + 1;
                                        foreach ($pencatatan as $row) : ?>
                                        <tr class="tr-content">
                                            <td class="text-center td-content"><?php echo $nums; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->kriteria_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->jumlah_minimal_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->satuan_penilaian_utama; ?></td>
                                            <?php if ($row->hasil_penilaian == "Ya") {
                                                    echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>
														<td class='text-center td-content'><span></span></td>";
                                                } else {
                                                    echo "<td class='text-center td-content'><span></span></td>
														<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
                                                }
                                                ?>
                                            <td class="text-justify td-content"><?php echo $row->jumlah_ketersediaan; ?>
                                            <td class="text-justify td-content"><?php echo $row->satuan_penilaian; ?>
                                            <td class="text-justify td-content"><?php echo $row->catatan_penilaian; ?>
                                            </td>
                                        </tr>
                                        <?php $nums++;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                                <br>
                                <table border="1" class="table-content" width="100%" height="100%">
                                    <thead>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" colspan="9">Peralatan Klinik Yang
                                                Memiliki Ruang ASI</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <th class="text-center th-content" rowspan="2">No</th>
                                            <th class="text-center th-content" rowspan="2">Kriteria</th>
                                            <th class="text-center th-content" th-content colspan="2">Standar Minimal
                                            </th>
                                            <th class="text-center th-content" th-content colspan="2">Hasil</th>
                                            <th class="text-center th-content" th-content colspan="3">Keterangan</th>
                                        </tr>
                                        <tr class="tr-content">
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Ya</td>
                                            <td class="text-center td-content">Tidak</td>
                                            <td class="text-center td-content">Jumlah</td>
                                            <td class="text-center td-content">Satuan</td>
                                            <td class="text-center td-content">Catatan</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nom = $nums + 1;
                                        foreach ($ruangasi as $row) : ?>
                                        <tr class="tr-content">
                                            <td class="text-center td-content"><?php echo $nom; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->kriteria_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->jumlah_minimal_penilaian_utama; ?></td>
                                            <td class="text-justify td-content">
                                                <?php echo $row->satuan_penilaian_utama; ?></td>
                                            <?php if ($row->hasil_penilaian == "Ya") {
                                                    echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>
														<td class='text-center td-content'><span></span></td>";
                                                } else {
                                                    echo "<td class='text-center td-content'><span></span></td>
														<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
                                                }
                                                ?>
                                            <td class="text-justify td-content"><?php echo $row->jumlah_ketersediaan; ?>
                                            <td class="text-justify td-content"><?php echo $row->satuan_penilaian; ?>
                                            <td class="text-justify td-content"><?php echo $row->catatan_penilaian; ?>
                                            </td>
                                        </tr>
                                        <?php $nom++;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-->
                </div>
            </div>
        </li>
        <br>
        <li class="text-bap">
            Usulan Rekomendasi
            <br>Pilihan Jawaban : <b><?php echo $klinik['usulan_rekomendasi'] ?></b>
            <?php if ($klinik['usulan_rekomendasi'] == 'Telah Memenuhi')
                echo '<ol>
				<li>Telah Memenuhi</li>
				<li><del>Belum Memenuhi</del></li>
			</ol>';
            else {
                echo '<ol>
				<li><del>Telah Memenuhi</del></li>
				<li>Belum Memenuhi</li>
			</ol>';
            }
            ?>
            <p style="text-align:justify"><?php echo $klinik['uraian_penilaian'] ?></p>
        </li>
        <li class="text-bap">
            Tindak Lanjut bagi Klinik<br>
            Pilihan Jawaban : <b><?php echo $klinik['tindak_lanjut_klinik'] ?></b>
            <ul style="list-style-type:disc">
                <?php if ($klinik['tindak_lanjut_klinik'] == 'Disetujui') : ?>
                <li>
                    Bagi Klinik Disetujui
                    <ol>
                        <li>
                            Klinik Wajib melakukan registrasi Klinik paling lambat 3 (tiga) bulan sejak Sertifikat
                            Standar Usaha Klinik diperoleh.
                        </li>
                        <li>
                            Klinik menyelenggarakan pelayanan kesehatan Klinik sesuai standar yang berlaku.
                        </li>
                        <li>
                            Klinik melaporkan hasil kegiatan pelayanan kesehatan Klinik sesuai ketentuan yang berlaku.
                        </li>
                        <li>
                            Klinik melakukan update/pembaharuan data jika terjadi perubahan data Klinik.
                        </li>
                    </ol>
                </li>
                <li>
                    <del>Bagi Klinik yang ditolak</del>
                    <ol>
                        <li>
                            <del>Klinik <b>SEGERA</b> memenuhi persyaratan dan mengajukan permohonan Sertifikat Standar
                                Usaha Klinik kembali.</del>
                        </li>
                    </ol>
                </li>
                <?php elseif ($klinik['tindak_lanjut_klinik'] == 'Diperbaiki') : ?>
                <li>
                    <del>Bagi Klinik Disetujui</del>
                    <ol>
                        <li>
                            <del>Klinik Wajib melakukan registrasi Klinik paling lambat 3 (tiga) bulan sejak Sertifikat
                                Standar Usaha Klinik diperoleh.</del>
                        </li>
                        <li>
                            <del>Klinik menyelenggarakan pelayanan kesehatan Klinik sesuai standar yang berlaku.</del>
                        </li>
                        <li>
                            <del>Klinik melaporkan hasil kegiatan pelayanan kesehatan Klinik sesuai ketentuan yang
                                berlaku.</del>
                        </li>
                        <li>
                            <del>Klinik melakukan update/pembaharuan data jika terjadi perubahan data Klinik.</del>
                        </li>
                    </ol>
                </li>
                <li>
                    Bagi Klinik yang Ditolak/Diperbaiki
                    <ol>
                        <li>
                            Klinik <b>SEGERA</b> memenuhi persyaratan dan mengajukan permohonan Sertifikat Standar Usaha
                            Klinik kembali.
                        </li>
                    </ol>
                </li>
                <?php else : ?>
                <li>
                    <del>Bagi Klinik Disetujui</del>
                    <ol>
                        <li>
                            <del>Klinik Wajib melakukan registrasi Klinik paling lambat 3 (tiga) bulan sejak Sertifikat
                                Standar Usaha Klinik diperoleh.</del>
                        </li>
                        <li>
                            <del>Klinik menyelenggarakan pelayanan kesehatan Klinik sesuai standar yang berlaku.</del>
                        </li>
                        <li>
                            <del>Klinik melaporkan hasil kegiatan pelayanan kesehatan Klinik sesuai ketentuan yang
                                berlaku.</del>
                        </li>
                        <li>
                            <del>Klinik melakukan update/pembaharuan data jika terjadi perubahan data Klinik.</del>
                        </li>
                    </ol>
                </li>
                <li>
                    Bagi Klinik yang Ditolak
                    <ol>
                        <li>
                            Klinik <b>SEGERA</b> memenuhi persyaratan dan mengajukan permohonan Sertifikat Standar Usaha
                            Klinik kembali.
                        </li>
                    </ol>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <li>
            Selama proses penilaian kesesuaian Klinik berlangsung, diketahui dan dibenarkan oleh pihak perwaklian
            Klinik.
            <!-- <table border="0" class="class=" text-bap"">
                <tbody>
                    <tr>
                        <td style="vertical-align: bottom;">Nama</td>
                        <td style="vertical-align: bottom;">:</td>
                        <td style="vertical-align: bottom;"><?php echo $klinik['nama_perwakilan_pihak_klinik'] ?></td>
                        <td style="vertical-align: top;" height="150px" width="120px" class="text-center" rowspan="2">
                            <img src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_perwakilan_klinik'] ?>"
                                width="150px" height="150px">
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Jabatan</td>
                        <td style="vertical-align: top;">:</td>
                        <td style="vertical-align: top;"><?php echo $klinik['jabatan_perwakilan_pihak_klinik'] ?></td>
                    </tr>
                </tbody>
            </table> -->
            <!-- <div style="float:left" class="container">
                <p class="text-center">Tim Penilaian Kesesuaian Klinik</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;">
                            <img class="rounded mx-auto d-block"
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai1'] ?>"
                                width="100px" height="auto">
                            <div class="card-body">
                                <p class="text-center"
                                    style="font-size: 10pt;font-family:'Times New Roman', Times, serif">
                                    <?php echo $penilaian['nama_anggota1'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;">
                            <img class="rounded mx-auto d-block"
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai2'] ?>"
                                width="100px" height="auto">
                            <div class="card-body">
                                <p class="text-center"
                                    style="font-size: 10pt;font-family:'Times New Roman', Times, serif">
                                    <?php echo $penilaian['nama_anggota2'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;">
                            <img class="rounded mx-auto d-block"
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai3'] ?>"
                                width="100px" height="auto">
                            <div class="card-body">
                                <p class="text-center"
                                    style="font-size: 10pt;font-family:'Times New Roman', Times, serif">
                                    <?php echo $penilaian['nama_anggota3'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;">
                            <img class="rounded mx-auto d-block"
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai4'] ?>"
                                width="100px" height="auto">
                            <div class="card-body">
                                <p class="text-center"
                                    style="font-size: 10pt;font-family:'Times New Roman', Times, serif">
                                    <?php echo $penilaian['nama_anggota4'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <table border="0">
                <thead>
                    <td width="30%" colspan="2">Tim Penilaian Kesesuaian Klinik</td>
                    <td width="5%"></td>
                    <td width="20%"></td>
                    <td></td>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" width="50%">1. <?php echo $penilaian['nama_anggota1'] ?></td>
                        <td></td>
                        <td width="10%"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">2. <?php echo $penilaian['nama_anggota2'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">3. <?php echo $penilaian['nama_anggota3'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">4. <?php echo $penilaian['nama_anggota4'] ?></td>
                        <td></td>
                        <td></td>
                        <td class="text-center"> Yang membuat Berita Acara</td>
                    </tr>
                    <tr>
                        <td colspan="2">1. <?php echo $penilaian['nama_anggota1'] ?></td>
                        <td width="10%" class="text-center"><img
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai1'] ?>"
                                width="80px" height="80px">
                        </td>
                        <td width="10%"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">1. <?php echo $penilaian['nama_anggota1'] ?></td>
                        <td width="10%" class="text-center"><img
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai1'] ?>"
                                width="80px" height="80px">
                        </td>
                        <td width="10%"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">2. <?php echo $penilaian['nama_anggota2'] ?></td>
                        <td class="text-center"><img
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai2'] ?>"
                                width="80px" height="80px"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">3. <?php echo $penilaian['nama_anggota3'] ?></td>
                        <td class="text-center"><img
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai3'] ?>"
                                width="80px" height="80px"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">4. <?php echo $penilaian['nama_anggota4'] ?></td>
                        <td class="text-center"><img
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai4'] ?>"
                                width="80px" height="80px"></td>
                        <td></td>
                        <td class="text-center"> Yang membuat Berita Acara</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center"><img
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai1'] ?>"
                                width="110px" height="110px"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">( Suryati, SKM )</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">NIP. 198111021209031203</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">Mengetahui,</td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="5">An. Kepala Dinas Kesehatan</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">Kepala Bidang SDK</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center"><img
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai3'] ?>"
                                width="120px" height="120px">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="5">dr. Noegroho Edy Rijanto, MKes</td>
                    </tr>

                </tbody>
            </table> -->
            <p>Perwakilan Pihak Klinik</p>
            <table border="1" width="30%" height="auto" class="text-bap">
                <!-- <thead>
                    <td colspan="4" class="text-center">Perwakilan Pihak Klinik</td>
                </thead> -->
                <tbody>
                    <tr>
                        <td class="text-center"><img class="rounded mx-auto d-block"
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_perwakilan_klinik'] ?>"
                                width="120px" height="120px"></td>
                    </tr>
                    <tr>
                        <td width="100%" height="auto" class=" text-center">
                            <?php echo $klinik['nama_perwakilan_pihak_klinik'], '<br>' . $klinik['jabatan_perwakilan_pihak_klinik'] ?>
                        </td>

                    </tr>
                </tbody>
            </table>
            <br>
            <p>Tim Penilaian Kesesuaian Klinik</p>
            <table border="1" width="100%" height="auto" class="text-bap">
                <thead>
                    <!-- <th colspan="4" class="text-center">Tim Penilaian Kesesuaian Klinik</th> -->
                </thead>
                <tbody>
                    <tr>
                        <td><img class="rounded mx-auto d-block"
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai1'] ?>"
                                width="120px" height="120px"></td>
                        <td><img class="rounded mx-auto d-block"
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai2'] ?>"
                                width="120px" height="120px"></td>
                        <td><img class="rounded mx-auto d-block"
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai3'] ?>"
                                width="120px" height="120px"></td>
                        <td><img class="rounded mx-auto d-block"
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai4'] ?>"
                                width="120px" height="120px"></td>
                    </tr>
                    <tr>
                        <td width="auto" class="text-center"><?php echo $penilaian['nama_anggota1'] ?></td>
                        <td width="auto" class="text-center"><?php echo $penilaian['nama_anggota2'] ?></td>
                        <td width="auto" class="text-center"><?php echo $penilaian['nama_anggota3'] ?></td>
                        <td width="auto" class="text-center"><?php echo $penilaian['nama_anggota4'] ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" width="100%" class="text-bap">
                <thead>
                    <td width="500px"></td>
                    <td width="50px"></td>
                    <td width="50px"></td>
                    <td width="50px"></td>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">Yang membuat Berita Acara</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center"><img
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai3'] ?>"
                                width="120px" height="120px"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">( Suryati, SKM )</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">NIP. 198111021209031203</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">Mengetahui,</td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="5">An. Kepala Dinas Kesehatan</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">Kepala Bidang SDK</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center"><img
                                src="<?php echo base_url(); ?>assets/img/uploads/ttd/<?php echo $klinik['ttd_penilai1'] ?>"
                                width="120px" height="120px">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="5">dr. Noegroho Edy Rijanto, MKes</td>
                    </tr>

                </tbody>
            </table>
        </li>
    </ol>
</body>

</html>