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
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12" id="card">
					<!-- Horizontal Form -->
					<div class="card">

						<div class="card-header">
							<!-- <h3 class="card-title">Penilaian Klinik Pratama</h3> -->
							<h2 class="card-title">
								<span>
									<h3><b><?php echo $klinik['nama_klinik']; ?></h3>
									</b>
									Alamat : <?php echo $klinik['alamat_klinik']; ?><br>
									Kecamatan : <?php echo $klinik['nama_kecamatan']; ?><br>
									Kelurahan : <?php echo $klinik['nama_kelurahan']; ?> (<?php echo $klinik['kode_pos_kelurahan']; ?>)
								</span>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<?php echo form_open_multipart('penilaian_pratama/nilai_ketiga', 'class="form-horizontal"');
						echo form_hidden('no_penilaian', $klinik['no_penilaian']);
						echo form_hidden('id_klinik', $klinik['id_klinik']);
						echo form_hidden('nama_klinik', $klinik['nama_klinik']);
						?>
						<?php if ($klinik['usulan_rekomendasi'] == null && $klinik['uraian_penilaian'] == null  && $klinik['tindak_lanjut_klinik'] == null  && $klinik['nama_perwakilan_pihak_klinik'] == null  && $klinik['jabatan_perwakilan_pihak_klinik'] == null) {
							echo '<input type="hidden" name="form" value="add"/>';
							echo '<div class="card-body">
							' . $this->session->flashdata('simpan') . '
								<div class="form-group row">
									<label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Usulan rekomendasi<span style="color:red">*</span></label>
									<div class="col-sm-8">
										<input type="radio" name="pilihan_jawaban" value="Telah Memenuhi" required> Telah memenuhi persyaratan minimal sebagai <del>Klinik Utama</del>/Pratama</input>
										<br>
										<input type="radio" name="pilihan_jawaban" value="Belum Memenuhi"> Belum memenuhi persyaratan minimal sebagai <del>Klinik Utama</del>/Pratama</input>
										<br><br>
										<textarea placeholder="Isian Uraian..." class="form-control" rows="3" name="uraian_penilaian_klinik"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Tindak Lanjut Bagi Klinik<span style="color:red">*</span></label>
									<div class="col-sm-10">
										<input type="radio" name="pilihan_jawaban_klinik" value="Disetujui" required> Disetujui</input>
										<br>
										<input type="radio" name="pilihan_jawaban_klinik" value="Ditolak"> Ditolak</input>
									</div>
								</div>
								<div class="form-group row">
									<label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Perwakilan Klinik<span style="color:red">*</span></label>
									<div class="col-sm-8">
										<input type="text" name="nama_perwakilan_klinik" placeholder="Nama Perwakilan Pihak Klinik" class="form-control" required>
										<br>
										<input type="text" name="jabatan_perwakilan_klinik" placeholder="Jabatan" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="container">
							<div class="row">
								<div class="col-sm">
								<label class="" for="">Tanda Tangan:</label>
								<br/>
								<div id="sig" ></div>
								<br/>
								<button id="clear">Clear</button>
								<textarea id="signature64" name="signed" style="display: none"></textarea>
								</div>
								<div class="col-sm">
								</div>
								<div class="col-sm">
								</div>
							</div>
							</div>';
						} else {
							echo '<input type="hidden" name="form" value="edit"/>';
							echo '<div class="card-body">
							' . $this->session->flashdata('simpan') . '
								<div class="form-group row">
									<label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Usulan rekomendasi<span style="color:red">*</span></label>
									<div class="col-sm-8">
										<input type="radio" name="pilihan_jawaban" ' . ($klinik['usulan_rekomendasi'] == 'Telah Memenuhi' ? 'checked' : '')  . ' value="Telah Memenuhi" required> Telah memenuhi persyaratan minimal sebagai <del>Klinik Utama</del>/Pratama</input>
										<br>
										<input type="radio" name="pilihan_jawaban" ' . ($klinik['usulan_rekomendasi'] == 'Belum Memenuhi' ? 'checked' : '')  . ' value="Belum Memenuhi"> Belum memenuhi persyaratan minimal sebagai <del>Klinik Utama</del>/Pratama</input>
										<br><br>
										<textarea placeholder="Isian Uraian..." class="form-control" rows="3" name="uraian_penilaian_klinik">' . $klinik['uraian_penilaian'] . '</textarea>
									</div>
								</div>
								<div class="form-group row">
									<label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Tindak Lanjut Bagi Klinik<span style="color:red">*</span></label>
									<div class="col-sm-10">
										<input type="radio" name="pilihan_jawaban_klinik" ' . ($klinik['tindak_lanjut_klinik'] == 'Disetujui' ? 'checked' : '')  . ' value="Disetujui" required> Disetujui</input>
										<br>
										<input type="radio" name="pilihan_jawaban_klinik" ' . ($klinik['tindak_lanjut_klinik'] == 'Ditolak' ? 'checked' : '')  . ' value="Ditolak"> Ditolak</input>
									</div>
								</div>
								<div class="form-group row">
									<label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Perwakilan Klinik<span style=""color:red">*</span></label>
									<div class="col-sm-8">
										<input type="text" name="nama_perwakilan_klinik" placeholder="Nama Perwakilan Pihak Klinik" class="form-control" value="' . $klinik['nama_perwakilan_pihak_klinik'] . '" required>
										<br>
										<input type="text" name="jabatan_perwakilan_klinik" placeholder="Jabatan" class="form-control" value="' . $klinik['jabatan_perwakilan_pihak_klinik'] . '" required>
									</div>
								</div>
							</div>
							<div class="container">
							<div class="row">
								<div class="col-sm">
								<label class="" for="">Tanda Tangan:</label>
								<br/>
								<div id="sig" ></div>
								<br/>
								<button id="clear">Clear</button>
								<textarea id="signature64" name="signed" style="display: none"></textarea>
								</div>
								<div class="col-sm">
								<img src="' . base_url($klinik['ttd_penilai']) . '"/>
								</div>
								<div class="col-sm">
								</div>
							</div>
							</div>';
						} ?>
						<!-- /.card-body -->
						<div class="text-center">
							<div class="card-footer">
								<button type="submit" name="submit" class="btn btn-success">Simpan</button>
								<?php echo anchor('penilaian_pratama/nilai_kedua/' . $klinik['id_klinik'], 'Kembali', [
									'class' => 'btn btn-warning',
								]); ?>
							</div>
						</div>
						<!-- /.card-footer -->
						<?php echo form_close(); ?>
					</div>
					<!-- /.card -->

				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>