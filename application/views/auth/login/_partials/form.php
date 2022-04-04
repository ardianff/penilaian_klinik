<div class="login-box">
	<!-- /.login-logo -->
	<div class="card card-outline card-primary">
		<div class="card-header text-center">
			<h1><b>Sistem Penilaian Klinik</b></h1>
			<img src="<?php echo base_url(); ?>/assets/img/pemkot.png" height="auto" width="auto" alt="Image" class="login-box-msg center">
		</div>
		<div class="card-body">
			<?= $this->session->flashdata('message') ?>
			<hr class="solid">
			<?php echo form_open('auth/check_login', 'class="form-signin"'); ?>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Username" name="username">
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-envelope"></span>
					</div>
				</div>

			</div>
			<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
			<div class="input-group mb-3">
				<input type="password" class="form-control" placeholder="Password" name="password">
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-lock"></span>
					</div>
				</div>
			</div>
			<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
			<div class="row">
				<div class="col-8">
				</div>
				<div class="col-4">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
				</div>

			</div>
			<?php echo form_close(); ?>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>
