<!DOCTYPE html>
<html lang="in">

<head>
	<?php $this->load->view("template/_partials/head") ?>
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view("template/_partials/navbar") ?>
		<?php $this->load->view("template/_partials/sidebar") ?>
		<?php $this->load->view("template/_partials/modal") ?>
		<!-- Content Wrapper. Contains page content -->
		<?php echo $contents; ?>
		<!-- /.content-wrapper -->
		<?php $this->load->view("template/_partials/footer") ?>
	</div>
	<!-- ./wrapper -->
	<?php $this->load->view("template/_partials/js") ?>
</body>

</html>