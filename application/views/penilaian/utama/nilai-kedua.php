<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><strong><?= $title ?></strong></h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<?php
	echo form_open(
		'penilaian_utama/nilai_kedua',
		'class="form-horizontal"'
	);
	echo form_hidden('no_penilaian', $klinik['no_penilaian']);
	echo form_hidden('id_klinik', $klinik['id_klinik']);
	echo form_hidden('nama_klinik', $klinik['nama_klinik']);
	?>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- /.card -->
					<div class="card">
						<div class="card-header">
							<h2 class="card-title">
								<span>
									<h3><b><?php echo $klinik['nama_klinik']; ?></h3>
									</b>
									Alamat : <?php echo $klinik['alamat_klinik']; ?><br>
									Kecamatan : <?php echo $klinik['nama_kecamatan']; ?><br>
									Kelurahan : <?php echo $klinik['nama_kelurahan']; ?> (<?php echo $klinik['kode_pos_kelurahan']; ?>)
								</span>
							</h2>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<?= $this->session->flashdata('simpan') ?>
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center" rowspan="2" style="vertical-align: middle;">No</th>
										<th class="text-center" rowspan="2" style="vertical-align: middle;">Kriteria</th>
										<th class="text-center" colspan="2">Standar Minimal</th>
										<th class="text-center" colspan="2">Hasil</th>
										<th class="text-center" colspan="3" style="vertical-align: middle;">Keterangan</th>
									</tr>
									<tr>
										<th class="text-center">Jumlah</th>
										<th class="text-center">Satuan</th>
										<th class="text-center">Ya/Ada</th>
										<th class="text-center">Tidak</th>
										<th class="text-center">Jumlah</th>
										<th class="text-center">Satuan</th>
										<th class="text-center">Catatan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($klinik['hasil_penilaian'] == null && $klinik['jumlah_ketersediaan'] == null) {
										echo '<input type="hidden" name="form" value="add"/>';
										for ($i = 0; $i < count($rincian); $i++) {
											$no = $i + 1;
											echo '<tr>';
											echo '<td>' . $no . '</td>';
											echo '<td class="text-justify"><input type="hidden" name="kriteria[' . $no . ']" value="' . $rincian[$i]->id_deskripsi . '"/> ' . $rincian[$i]->kriteria_penilaian_utama . '</td>';
											echo '<td class= "text-justify">' . $rincian[$i]->jumlah_minimal_penilaian_utama . '</td>';
											echo '<td class= "text-justify">' . $rincian[$i]->satuan_penilaian_utama . '</td>';
											echo '<td class="text-center"><input type="radio" name="hasil_nilai[' . $no . ']"  value="Ya" required> Ya</input>
											</td>';
											echo '<td class="text-center"><input type="radio" name="hasil_nilai[' . $no . ']"  value="Tidak" required> Tidak</input>
											</td>';
											echo '<td><textarea class="form-control" placeholder="Jumlah" name="jumlah_ketersediaan[' . $no . ']"></textarea></td>';
											echo '<td class="text-justify"><input class="form-control" type="text" name="satuan_nilai[' . $no . ']" value="' . $rincian[$i]->satuan_penilaian_utama . '" /></td>';
											echo '<td><textarea class="form-control" name="catatan_penilaian[' . $no . ']" placeholder="Catatan..."></textarea>
											</td>';
											echo '<tr>';
										}
									} else {
										echo '<input type="hidden" name="form" value="edit"/>';
										for ($i = 0; $i < count($cek_hasil); $i++) {
											$no = $i + 1;
											echo '<tr>';
											echo '<td>' . $no . '</td>';
											echo '<td class="text-justify"><input type="hidden" name="kriteria[' . $no . ']" value="' . $cek_hasil[$i]->id_deskripsi_pfs . '"/> ' . $cek_hasil[$i]->kriteria_penilaian_utama . '</td>';
											echo '<td class= "text-justify">' . $cek_hasil[$i]->jumlah_minimal_penilaian_utama . '</td>';
											echo '<td class= "text-justify">' . $cek_hasil[$i]->satuan_penilaian_utama . '</td>';
											echo '<td class="text-center"><input type="radio" name="hasil_nilai[' . $no . ']"  ' . ($cek_hasil[$i]->hasil_penilaian == 'Ya' ? 'checked' : '')  . ' value="Ya" required> Ya</input>
											</td>';
											echo '<td class="text-center"><input type="radio" name="hasil_nilai[' . $no . ']" ' . ($cek_hasil[$i]->hasil_penilaian == 'Tidak' ? 'checked' : '')  . ' value="Tidak" required> Tidak</input>
											</td>';
											echo '<td><textarea class="form-control" placeholder="Jumlah" name="jumlah_ketersediaan[' . $no . ']">' . $cek_hasil[$i]->jumlah_ketersediaan . '</textarea></td>';
											echo '<td class="text-justify"><input class="form-control" type="text" name="satuan_nilai[' . $no . ']" value="' . $cek_hasil[$i]->satuan_penilaian . '" /></td>';
											echo '<td><textarea class="form-control" name="catatan_penilaian[' . $no . ']" placeholder="Catatan...">' . $cek_hasil[$i]->catatan_penilaian . '</textarea>
											</td>';
											echo '<tr>';
										}
									}
									?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<div class="col d-flex justify-content-center">
			<div class="card-footer">
				<button type="submit" name="submit" class="btn btn-success">Next</button>
				<!-- <?php echo anchor(
							'penilaian_utama/nilai_ketiga/' . $klinik['no_penilaian'],
							'<span>Next</span>',
							[
								'class' => 'btn btn-success',
								'title' => 'Lanjut Ke Halaman Berikutnya',
								'name' => 'submit'
							]
						); ?> -->
				<button type="submit" href="<?php echo base_url('penilaian_utama/nilai' . $klinik['no_penilaian']); ?>" name="back" onclick="history.back();" class="btn btn-warning">Kembali</button>
				<!-- <?php echo anchor('penilaian_pratama', 'Kembali', [
							'class' => 'btn btn-warning',
						]); ?> -->
			</div>
		</div>

		<!-- /.container-fluid -->
	</section>
	<?php echo form_close(); ?>
	<!-- /.content -->
</div>
