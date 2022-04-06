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
				<div class="col-md-8">
					<!-- Horizontal Form -->
					<div class="card card-info">
						<!-- <a href="#" class="btn btn-danger">Tambah Group Name</a> -->
						<div class="card-header">
							<h3 class="card-title"><?= $title ?></h3><br>
							<a href="<?php echo base_url('rincian_penilaian_utama_kedua/group_name'); ?>" class="btn btn-danger btn-sm">Group Name</a>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<?php echo form_open(
							'rincian_penilaian_utama_kedua/add',
							'class="form-horizontal"'
						); ?>
						<div class="card-body">
							<div class="form-group row">
								<label for="group_name" class="col-sm-2 col-form-label">Group Name</label>
								<div class="col-sm-10">
									<select class="form-control" name="group_name">
										<option value="">- Pilih Group -</option>
										<?php foreach ($data as $dt) : ?>
											<option value="<?php echo $dt->id_group; ?>"><?php echo $dt->group_name; ?>
											</option>
										<?php endforeach; ?>
									</select>
									<?= form_error('group_name', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="rincian_penilaian" class="col-sm-2 col-form-label">Rincian Penilaian</label>
								<div class="col-sm-10">
									<textarea type="text" class="form-control" name="rincian_penilaian" placeholder="Rincian Penilaian"></textarea>
									<?= form_error('rincian_penilaian', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="jumlah_penilaian" class="col-sm-2 col-form-label">Jumlah</label>
								<div class="col-sm-10">
									<textarea type="text" class="form-control" name="jumlah_penilaian" placeholder="Jumlah"></textarea>
									<?= form_error('jumlah_penilaian', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="keterangan_penilaian" class="col-sm-2 col-form-label">Satuan</label>
								<div class="col-sm-10">
									<?php echo form_dropdown(
										'satuan_penilaian',
										[
											'' => '- Pilih -',
											'Unit' => 'Unit',
											'Buah' => 'Buah',
											'Set' => 'Set',
											'Sesuai Kebutuhan' => 'Sesuai Kebutuhan',
										],
										null,
										"class='form-control' "
									); ?>
									<?= form_error('satuan_penilaian', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-success">Simpan</button>
							<?php echo anchor('rincian_penilaian_utama_kedua', 'Kembali', [
								'class' => 'btn btn-warning',
							]); ?>
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