<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><strong>Data <?= $title ?></strong></h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							&nbsp;<?php echo anchor('penilaian_pratama/add', 'Input Data Penilaian Baru', [
										'class' => 'btn btn-success btn-sm',
									]); ?>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<?= $this->session->flashdata('add') ?>
							<?= $this->session->flashdata('update') ?>
							<?= $this->session->flashdata('delete') ?>
							<?= $this->session->flashdata('simpan') ?>
							<table id="example2" class="table table-bordered table-striped " width="100%" height="100%">
								<thead>
									<tr>
										<th class="text-center" rowspan="2">No</th>
										<th class="text-center" rowspan="2">Nama Klinik</th>
										<th class="text-center" rowspan="2">Kemampuan Pelayanan</th>
										<th class="text-center" rowspan="2">Jenis Klinik</th>
										<th class="text-center" rowspan="2">Alamat</th>
										<th class="text-center" rowspan="2">Anggota Penilaian</th>
										<th class="text-center" colspan="4">Aksi</th>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($data as $row) : ?>
										<tr>
											<td class="text-center"><?php echo $no; ?></td>
											<td class="text-center"><?php echo $row->nama_klinik; ?><br>
												<?php if ($row->status_penilaian == "Sudah") {
													echo '<button type="button" class="btn btn-block bg-gradient-success" title="' . $row->no_penilaian . ' Sudah Dinilai">Sudah Dinilai</button>';
												} else {
													echo '<button type="button" class="btn btn-block bg-gradient-danger" title="' . $row->no_penilaian . ' Belum Dinilai">Belum Dinilai</button>';
												} ?>
											</td>
											<td class="text-center"><?php echo $row->kemampuan_pelayanan; ?></td>
											<td class="text-center"><?php echo $row->jenis_pelayanan_klinik; ?></td>
											<td class="text-center"><?php echo $row->alamat_klinik; ?></td>
											<td class="text-center"><?php echo $row->nama_anggota1; ?>,
												<br><?php echo $row->nama_anggota2; ?>,
												<br><?php echo $row->nama_anggota3; ?>,
												<br><?php echo $row->nama_anggota4; ?>
											</td>
											<td>
												<div class="btn-group">
													<!-- <button type="button" class="btn btn-danger"><i class="fa-solid fa-ellipsis-stroke-vertical"></i></button> -->
													<button type="button" class="btn btn-success btn-sm dropdown-toggle dropdown-hover" data-toggle="dropdown">
														<span class="sr-only">Toggle Dropdown</span>
														<i class="fa-solid fa-ellipsis-stroke-vertical"></i>
													</button>
													<div class="dropdown-menu" role="menu">
														<a class="dropdown-item" href="<?php echo site_url('penilaian_pratama/print/' . $row->no_penilaian); ?>">Print</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="<?php echo site_url('penilaian_pratama/pdf/' . $row->no_penilaian); ?>">Export PDF</a>
													</div>
												</div>
											</td>
											<td class=" text-center"><?php echo anchor(
																			'penilaian_pratama/nilai/' .
																				$row->no_penilaian,
																			'<span class="fa fa-tasks"></span>',
																			[
																				'class' => 'btn btn-primary btn-sm',
																				'title' => 'Penilaian',
																			]
																		); ?>
											<td><a onclick="editConfirm('<?php echo site_url(
																				'penilaian_pratama/edit/' .
																					$row->no_penilaian
																			); ?>')" href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a></td>
											<td class="text-center"><a onclick="deleteConfirm('<?php echo site_url('penilaian_pratama/hapus/' . $row->no_penilaian) ?>')" href="#" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></a></td>
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
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
