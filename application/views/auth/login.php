<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem Penilaian Klinik</title>
	<link rel="shortcut icon" href="https://semarangkota.go.id/assets/img/favicon.png" type="image/x-icon" />
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin-lte/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin-lte/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-add.css">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<h1><b>Sistem Penilaian Klinik</b></h1>
			</div>
			<div class="card-body">
				<!-- <img src="https://semarangkota.go.id/assets/img/logo-icon.png" height="auto" width="auto" alt="Image" class="login-box-msg center"> -->
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
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/adminlte.min.js"></script>
	<script>
		$(document).ready(function() {
			window.setTimeout(function() {
				$(".alert").fadeTo(500, 0).slideUp(500, function() {
					$(this).remove();
				});
			}, 3500);
		});
	</script>
</body>

</html>
