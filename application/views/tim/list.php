<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><strong>Data Nama Penilai Klinik</strong></h1>
				</div>
				<div class="col-sm-6">
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
							&nbsp;<?php echo anchor('tim/add', 'Input Data Anggota Penilai', [
										'class' => 'btn btn-success btn-sm',
									]); ?>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<?= $this->session->flashdata('add') ?>
							<?= $this->session->flashdata('update') ?>
							<?= $this->session->flashdata('delete') ?>
							<table id="example2" class="table table-bordered table-striped width=" 100%"">
								<thead>
									<tr>
										<th class="text-center" rowspan="2">No</th>
										<th class="text-center" rowspan="2">Nama Penilai</th>
										<th class="text-center" rowspan="2">NIP</th>
										<th class="text-center" colspan="2">Aksi</th>
									</tr>
									<tr>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($data as $row) : ?>
										<tr>
											<td class="text-center"><?php echo $no; ?></td>
											<td class="text-justify"><?php echo $row->nama_anggota; ?></td>
											<td class="text-center"><?php echo $row->nip_anggota; ?></td>
											<td class="text-center"><a onclick="editConfirm('<?php echo site_url('tim/edit/' . $row->kode_anggota); ?>')" href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a></td>
											<td class="text-center"><a onclick="deleteConfirm('<?php echo site_url('tim/hapus/' . $row->kode_anggota); ?>')" href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
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
