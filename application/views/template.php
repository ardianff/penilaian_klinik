
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistem Penilaian Klinik</title>
        <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/plugins/font-awesome.min.css"/> -->
        <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css"/>
        <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/plugins/simple-line-icons.css"/>
        <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/plugins/animate.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/plugins/fullcalendar.min.css"/>
        <link href="<?php  echo base_url() ?>assets/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/bootstrap-datepicker.min.css">
  		<link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/daterangepicker.css">
        <link rel="shortcut icon" href="<?php  echo base_url() ?>assets/img/logo-rs.png">
    </head>

    <body class="dashboard">
		<nav class="navbar navbar-expand-lg navbar-dark bg-light">
  <a class="navbar-brand" href="<?php echo site_url('dashboard') ?>">Sistem Penilaian Klinik</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

</nav>
        <!-- end: Header -->

        <div class="container-fluid mimin-wrapper">

            <!-- start:Left Menu -->
            <div id="left-menu">
                <div class="sub-left-menu scroll">
                    <ul class="nav nav-list">
                        <li class="ripple"><a href="<?php echo site_url('dashboard') ?>"><span class="fa fa-home"></span>Dashboard</a></li>
                        <li class="ripple"><a href="<?php echo site_url('pendaftaran') ?>"><span class="fa fa-user"></span>Pendaftaran</a></li>
                        <!-- <li class="ripple"><a href="<?php echo site_url('users') ?>"><span class="fa fa-address-book"></span>Users</a></li> -->
						<hr style="border-top: 1px solid grey;">
                        <li class="ripple"><a href="#"><span class="fa fa-circle-user"></span>Hai, <?php echo $this->session->userdata('nama_user') ?></a></li>
                        <li class="ripple"><a href="<?php echo site_url('auth/logout') ?>"><span class="fa fa-sign-out"></span>Logout</a></li>
                       </ul>
                </div>
            </div>
            <!-- end: Left Menu -->
        </div>

            <!-- start: content -->
            <div id="content">
                <?php echo $contents  ?>
            </div>
            <!-- end: content -->
        <!-- start: Mobile -->
        
        <!-- start: Javascript -->
        <script src="<?php  echo base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/jquery.ui.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/bootstrap.min.js"></script>
       	<script src="<?php  echo base_url() ?>assets/js/plugins/jquery.datatables.min.js"></script>
       	<script src="<?php  echo base_url() ?>assets/js/plugins/datatables.bootstrap.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/plugins/moment.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/plugins/jquery.vmap.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/plugins/maps/jquery.vmap.world.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/plugins/jquery.vmap.sampledata.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/main.js"></script>
		<script src="<?php  echo base_url() ?>assets/js/moment.min.js"></script>
		<script src="<?php  echo base_url() ?>assets/js/daterangepicker.js"></script>
		<script src="<?php  echo base_url() ?>assets/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript">
            
			$(document).ready(function(){
				$('#datatables-example').DataTable();
				$('.datepicker2').datepicker({
					autoclose: true,
					format: 'dd-mm-yyyy',
  				});
				$(".datepicker2").focus(function() {
					$(".datepicker2").datepicker("show");
				});
				$(".datepicker2").focus();
			});
        </script>
    </body>
</html>
