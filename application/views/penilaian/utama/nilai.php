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
		'penilaian_utama/nilai',
		'class="form-horizontal"'
	);
	echo form_hidden('no_penilaian', $penilaian['no_penilaian']);
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
									<h3><b><?php echo $penilaian['nama_klinik']; ?></h3>
									</b>
									Alamat : <?php echo $penilaian['alamat_klinik']; ?><br>
									Kecamatan : <?php echo $penilaian['nama_kecamatan']; ?><br>
									Kelurahan : <?php echo $penilaian['nama_kelurahan']; ?> (<?php echo $penilaian['kode_pos_kelurahan']; ?>)
								</span>
							</h2>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center" rowspan="2" style="vertical-align: middle;">No</th>
										<th class="text-center" rowspan="2" style="vertical-align: middle;">Rincian
											Penilaian</th>
										<th class="text-center" colspan="2">Hasil</th>
										<th class="text-center" rowspan="2" style="vertical-align: middle;">Keterangan
										</th>
										<th class="text-center" colspan="2">Hasil Verifikasi Persyaratan Minimal **</th>
										<th class="text-center" rowspan="2" style="vertical-align: middle;">Catatan</th>
									</tr>
									<tr>
										<th class="text-center">Ya/Ada</th>
										<th class="text-center">Tidak</th>
										<th class="text-center">Memenuhi Syarat</th>
										<th class="text-center">Tidak Memenuhi Syarat</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($rincian as $row) : ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td class="text-justify"><input type="hidden" name="rincian[<?php echo $no ?>]" value="<?php echo $row->id_rincian_penilaian; ?>" />
												<?php echo $row->rincian_penilaian; ?></td>
											<td class="text-center"><input type="radio" name="hasil[<?php echo $no ?>]" value="Ya" required></input>
											</td>
											<td class="text-center"><input type="radio" name="hasil[<?php echo $no ?>]" value="Tidak"></input>
											</td>
											<td><?php echo $row->keterangan_penilaian; ?></td>
											<td class="text-center"><input type="radio" name="hasil_verifikasi[<?php echo $no ?>]" value="Ya" required></input></td>
											<td class="text-center"><input type="radio" name="hasil_verifikasi[<?php echo $no ?>]" value="Tidak"></input></td>
											<td><textarea name="catatan_penilaian[<?php echo $no ?>]" placeholder="Catatan..." class="form-control"></textarea>
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
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<div class="col d-flex justify-content-center">
			<div class="card-footer">
				<!-- <?php echo anchor(
							'penilaian_utama/nilai_kedua/' . $penilaian['no_penilaian'],
							'<span>Next</span>',
							[
								'class' => 'btn btn-success',
								'title' => 'Lanjut Ke Halaman Berikutnya',
								'name' => 'submit'
							]
						); ?> -->
				<button type="submit" name="submit" title="Lanjut Ke Halaman Berikutnya" class="btn btn-success">Next</button>
				<?php echo anchor('penilaian_utama', 'Kembali', [
					'class' => 'btn btn-warning',
				]); ?>
			</div>
		</div>

		<!-- /.container-fluid -->
	</section>
	<?php echo form_close(); ?>
	<!-- /.content -->
</div>
