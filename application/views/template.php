<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("template/_partials/head.php") ?>
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view("template/_partials/navbar.php") ?>
		<?php $this->load->view("template/_partials/sidebar.php") ?>
		<?php $this->load->view("template/_partials/modal.php") ?>
		<!-- Content Wrapper. Contains page content -->
		<?php echo $contents; ?>
		<!-- /.content-wrapper -->
		<?php $this->load->view("template/_partials/footer.php") ?>
	</div>
	<!-- ./wrapper -->
	<?php $this->load->view("template/_partials/js.php") ?>
</body>

</html>
