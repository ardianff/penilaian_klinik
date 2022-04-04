<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
			font-size: 10pt;
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
			color: #000;
			height: 1px;
			border: 0;
			border-top: 5px solid #000;
			margin-top: 10;
		}

		.hr-dua {
			display: block;
			height: 1px;
			border: 1;
			border-top: 1px solid #000;
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
		bulan <?php echo bulan_sekarang() ?> tahun <?php echo tahun_sekarang() ?>, berdasarkan surat tugas Nomor …………………
		tanggal 7 Maret 2022 kami
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
						<td><?php if ($penilaian['nama_anggota1'] == null) {
								echo "....................................";
							} else {
								echo $penilaian['nama_anggota1'];
							} ?>
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
								} else {
									break;
									echo "....................................";
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
						<td><?php if ($penilaian['nama_anggota2'] == null) {
								echo "....................................";
							} else {
								echo $penilaian['nama_anggota2'];
							} ?>
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
						<td><?php if ($penilaian['nama_anggota3'] == null) {
								echo "....................................";
							} else {
								echo $penilaian['nama_anggota3'];
							} ?>
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
						<td><?php if ($penilaian['nama_anggota4'] == null) {
								echo "....................................";
							} else {
								echo $penilaian['nama_anggota4'];
							} ?>
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
								} else {
									echo "....................................";
									break;
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
	<p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:13.3pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>
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
		</li>
	</ol>
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
									<th class="text-center th-content" colspan="2">Hasil Verifikasi Persyaratan Minimal
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
										<td class="text-justify td-content"><?php echo $row->rincian_penilaian; ?></td>
										<?php if ($row->jawab_hasil == "Ya") {
											echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span> </td>
                                    <td class='text-center td-content'><span></span></td>";
										} else {
											echo "<td class='text-center td-content'><span></span></td>
                                    <td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
										}
										?>
										<td class="text-justify td-content"><?php echo $row->keterangan_penilaian; ?></td>
										<?php if ($row->jawab_hasil_verif == "Ya") {
											echo "<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>
											<td class='text-center td-content'><span></span></td>";
										} else {
											echo "<td class='text-center td-content'><span></span></td>
											<td class='text-center td-content'><span style='font-family: fontawesome;'>&#xf00c;</span></td>";
										}
										?>
										<td class="text-justify td-content"><?php echo $row->catatan_hasil_penilaian; ?>
										</td>
									</tr>
								<?php $no++;
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
</body>










































</html>
