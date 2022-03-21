<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><strong>Form Penilaian Klinik Pratama</strong></h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<?php
	echo form_open_multipart(
		'penilaian_pratama/simpan_penilaian_pratama',
		'class="form-horizontal"'
	);
	// echo form_hidden('no_penilaian', $penilaian['no_penilaian']);
	?>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- /.card -->
					<div class="card">
						<div class="card-header">
						</div>
						<!-- /.card-header -->
						<div class="card-body">
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
									$data = $this->Model_penilaian_pratama->get_question_next();
									$no = 1;
									foreach ($data as $row) : ?>

										<!-- <th colspan="9" class="text-justify"><?php echo $row->group_name; ?></th> -->
										<tr>
											<td><?php echo $no ?></td>
											<td class="text-justify"><?php echo $row->kriteria_penilaian_pratama; ?></td>
											<td class="text-justify"><?php echo $row->jumlah_minimal_penilaian_pratama; ?></td>
											<td class="text-justify"><?php echo $row->satuan_penilaian_pratama; ?></td>
											<td><input type="radio" value="Ya" name="hasil_nilai" required /> Ya</td>
											<td><input type="radio" value="Ya" name="hasil_nilai" /> tidak</td>
											<td><textarea placeholder="Jumlah"></textarea></td>
											<td class="text-justify"><?php echo $row->satuan_penilaian_pratama; ?></td>
											<td><textarea name="catatan_penilaian" placeholder="Catatan Penilaian..."></textarea></td>
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
				<button type="submit" name="submit" class="btn btn-success">Simpan</button>
				<!-- <button onclick="goBack()" class="btn btn-warning">Kembali</button> -->
				<?php
				$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
				?>
				<!-- <a href="<?= $url ?>">Go Back PHP</a> -->
			</div>
		</div>

		<!-- /.container-fluid -->
	</section>
	<?php echo form_close(); ?>
	<!-- /.content -->
</div>
