<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/header.php") ?>
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view("_partials/navbar.php") ?>
		<?php $this->load->view("_partials/sidebar.php") ?>
		<?php $this->load->view("_partials/modal.php") ?>
		<!-- Content Wrapper. Contains page content -->
		<?php echo $contents; ?>
		<!-- /.content-wrapper -->
		<?php $this->load->view("_partials/footer.php") ?>
	</div>
	<!-- ./wrapper -->
	<?php $this->load->view("_partials/js.php") ?>
</body>

</html>
