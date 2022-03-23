<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><strong><?= $title ?></strong></h1>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small Box (Stat card) -->
			<!-- <h5 class="mb-2 mt-4">Small Box</h5> -->
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-success">
						<div class="inner">
							<?php
							foreach ($klinik_pratama as $row) {
								echo "<h3>$row->total_klinik</h3>";
							} ?>

							<p>Klinik Pratama</p>
						</div>
						<div class="icon">
							<i class="fa-solid fa-house-medical-flag"></i>
						</div>
						<a href="<?php echo base_url('penilaian_pratama'); ?>" class="small-box-footer">
							Go to site <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-success">
						<div class="inner">
							<?php
							foreach ($klinik_utama as $row) {
								echo "<h3>$row->total_klinik</h3>";
							} ?>
							<p>Klinik Utama</p>
						</div>
						<div class="icon">
							<i class="fa-solid fa-house-medical-flag"></i>
						</div>
						<a href="<?php echo base_url('penilaian_utama'); ?>" class="small-box-footer">
							Go to site <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-danger">
						<div class="inner">
							<?php
							foreach ($rincian_pratama1 as $row) {
								echo "<h3>$row->total_rincian</h3>";
							} ?>

							<p>Rincian Penilaian Pratama Form 1</p>
						</div>
						<div class="icon">
							<i class="fa-solid fa-memo-circle-info"></i>
						</div>
						<a href="<?php echo base_url('rincian_penilaian_pratama'); ?>" class="small-box-footer">
							Go to site <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-danger">
						<div class="inner">
							<?php
							foreach ($rincian_pratama2 as $row) {
								echo "<h3>$row->total_rincian</h3>";
							} ?>

							<p>Rincian Penilaian Pratama Form 2</p>
						</div>
						<div class="icon">
							<i class="fa-solid fa-memo-circle-info"></i>
						</div>
						<a href="<?php echo base_url('rincian_penilaian_pratama_kedua'); ?>" class="small-box-footer">
							Go to site <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-info">
						<div class="inner">
							<?php
							foreach ($rincian_utama1 as $row) {
								echo "<h3>$row->total_rincian</h3>";
							} ?>

							<p>Rincian Penilaian Utama Form 1</p>
						</div>
						<div class="icon">
							<i class="fa-solid fa-memo-circle-info"></i>
						</div>
						<a href="<?php echo base_url('rincian_penilaian_utama'); ?>" class="small-box-footer">
							Go to site <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-info">
						<div class="inner">
							<?php
							foreach ($rincian_utama2 as $row) {
								echo "<h3>$row->total_rincian</h3>";
							} ?>

							<p>Rincian Penilaian Utama Form 2</p>
						</div>
						<div class="icon">
							<i class="fa-solid fa-memo-circle-info"></i>
						</div>
						<a href="<?php echo base_url('rincian_penilaian_utama_kedua'); ?>" class="small-box-footer">
							Go to site <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-secondary">
						<div class="inner">
							<?php
							foreach ($tim_penilai as $row) {
								echo "<h3>$row->total_anggota</h3>";
							} ?>

							<p>Anggota Penilai</p>
						</div>
						<div class="icon">
							<i class="fa-solid fa-users-medical"></i>
						</div>
						<a href="<?php echo base_url('tim'); ?>" class="small-box-footer">
							Go to site <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-secondary">
						<div class="inner">
							<?php
							foreach ($users as $row) {
								echo "<h3>$row->total_user</h3>";
							} ?>


							<p>Users</p>
						</div>
						<div class="icon">
							<i class="fa-solid fa-users-gear"></i>
						</div>
						<a href="<?php echo base_url('user') ?>" class="small-box-footer">
							Go to site <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<!-- ./col -->
			</div>
			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->


</div>
