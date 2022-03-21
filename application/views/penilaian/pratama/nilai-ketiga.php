<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-10" id="card">
					<!-- Horizontal Form -->
					<div class="card card-info">

						<div class="card-header">
							<!-- <h3 class="card-title">Penilaian Klinik Pratama</h3> -->
							<h2 class="card-title">
								<span><b>Klinik Suka Suka</b><br>
									Alamat : Semarang<br>
									Kecamatan : Tugu<br>
									Kelurahan : Mangkang Wetan</span>
							</h2>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<?php echo form_open('penilaian_pratama/nilai_ketiga', 'class="form-horizontal"'); ?>
						<div class="card-body">
							<div class="form-group row">
								<label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Usulan rekomendasi<span style="color:red">*</span></label>
								<div class="col-sm-10">
									<input type="radio" name="pilihan_jawaban" value="Telah Memenuhi" required> Telah memenuhi persyaratan minimal sebagai <del>Klinik Utama</del>/Pratama</input>
									<br>
									<input type="radio" name="pilihan_jawaban" value="Belum Memenuhi"> Belum memenuhi persyaratan minimal sebagai <del>Klinik Utama</del>/Pratama</input>
									<br><br>
									<textarea placeholder="Isian Uraian......."></textarea>
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
								<div class="col-sm-10">
									<input type="text" name="nama_perwakilan_klinik" placeholder="Nama Perwakilan Pihak Klinik" class="form-control" required>
									<br>
									<input type="text" name="nama_perwakilan_klinik" placeholder="Jabatan" class="form-control" required>
								</div>
							</div>
							<!-- <div class="form-group row">
								<label for="NIP_Anggota" class="col-sm-2 col-form-label">NIP Anggota</label>
								<div class="col-sm-10">
									<input type="number" class="form-control" name="nip_anggota" placeholder="NIP">
									<?= form_error('nip_anggota', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
							</div> -->
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-success">Simpan</button>
							<?php echo anchor('penilaian_pratama', 'Kembali', ['class' => 'btn btn-warning']); ?>
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
