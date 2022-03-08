<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/style.css">
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo-rs.png">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/plugins/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/plugins/simple-line-icons.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/plugins/animate.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/plugins/icheck/skins/flat/aero.css" />

    <title>Sistem Data Pasien</title>
  </head>
  <body>
  <div class="content">
  <?php echo form_open('Auth/Chek_login', 'class="form-signin"') ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo base_url() ?>assets/login/images/hospital.png" height="auto" width="auto" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login Sistem Data Pasien</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
              </div>
              <input type="submit" name="submit" value="Log In" class="btn btn-block btn-primary">
              <div class="mb-4">
                <?php
                if ($this->session->flashdata('gagal')) {
                  echo "<div class='panel-body'>
                            <div class='col-md-12'><div class='alert alert-danger alert-border alert-dismissible fade in bg-danger' role='alert'>";
                  echo "  <h3 style='color:black'><b>GAGAL</b>
                        <button type='button btn-dark' class='close pull-right' data-dismiss='alert' aria-label='Close'><span aria-hidden='true' >×</span></button>
                                </h3>
                        <p style='color:white'>" . $this->session->flashdata('gagal') . "</p>";
                  echo "</div>";
                  echo "</div>";
                  echo "</div>";
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php echo form_close(); ?>
  </div>

  
    <script src="<?php echo base_url() ?>assets/login/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/login/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/login/js/main.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.ui.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/plugins/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/plugins/icheck.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
  </body>
</html>
