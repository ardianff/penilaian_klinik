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
									<h3><b><?php echo $penilaian['nama_klinik']; ?></h3>
									</b>
									Alamat : <?php echo $penilaian['alamat_klinik']; ?><br>
									Kecamatan : <?php echo $penilaian['nama_kecamatan']; ?><br>
									Kelurahan : <?php echo $penilaian['nama_kelurahan']; ?> (<?php echo $penilaian['kode_pos_kelurahan']; ?>)
								</span>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<?php echo form_open_multipart('penilaian_utama/nilai_ketiga', 'class="form-horizontal"');
						echo form_hidden('no_penilaian', $penilaian['no_penilaian']);
						?>
						<div class="card-body">
							<div class="form-group row">
								<label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Usulan rekomendasi<span style="color:red">*</span></label>
								<div class="col-sm-8">
									<input type="radio" name="pilihan_jawaban" value="Telah Memenuhi" required> Telah memenuhi persyaratan minimal sebagai Klinik Utama/<del>Pratama</del></input>
									<br>
									<input type="radio" name="pilihan_jawaban" value="Belum Memenuhi"> Belum memenuhi persyaratan minimal sebagai Klinik Utama/<del>Pratama</del></input>
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
							<!-- <div>
								<div class="col-md-6">
									<hr>
									<h4>Tanda Tangan</h4>
									<div class="text-right">
										<button type="button" class="btn btn-default btn-sm" id="undo"><i class="fa fa-undo"></i> Undo</button>
										<button type="button" class="btn btn-danger btn-sm" id="clear"><i class="fa fa-eraser"></i> Clear</button>
									</div>
									<br>
									<form method="POST" action="<?php echo base_url('upload') ?>">
										<div class="wrapper">
											<canvas id="signature-pad" class="signature-pad"></canvas>
										</div>
										<br>
										<button type="button" class="btn btn-primary btn-sm" id="save-png">Save as PNG</button>
										<button type="button" class="btn btn-info btn-sm" id="save-jpeg">Save as JPEG</button>
										<button type="button" class="btn btn-default btn-sm" id="save-svg">Save as SVG</button>
										
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title" id="myModalLabel">Preview Tanda Tangan</h4>
													</div>
													<div class="modal-body">
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
														<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Submit</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div> -->
						</div>
						<!-- /.card-body -->
						<div class="col d-flex justify-content-center"></div>
						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-success">Simpan</button>
							<button type="submit" href="<?php echo base_url('penilaian_pratama/nilai_kedua' . $penilaian['no_penilaian']); ?>" name="back" onclick="history.back();" class="btn btn-warning">Kembali</button>
							<!-- <?php echo anchor('penilaian_pratama', 'Kembali', ['class' => 'btn btn-warning']); ?> -->
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
