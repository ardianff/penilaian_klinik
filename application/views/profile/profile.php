<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
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
          <div class="col-md-4 align-self-center">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile ml-10">    
                <!-- <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url(); ?>assets/admin-lte/dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div> -->

                <h3 class="profile-username text-center"><?= $user[
                    'nama_user'
                ] ?></h3>

                <p class="text-muted text-center"><?= $user['nip_user'] ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?= $user[
                        'username'
                    ] ?></a>
                  </li>
                </ul>
                <!-- <a href="<?php echo site_url(
                    'profile/ubahdata'
                ); ?>" class="btn btn-primary btn-block"><b>Ubah Data</b></a> -->
				<?php echo anchor('profile/ubahdata/' . $user['nip_user'], '<b>Ubah Data</b>', [
        'class' => 'btn btn-primary btn-block',
    ]); ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
