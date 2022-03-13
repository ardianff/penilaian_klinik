<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
				<?php echo form_open('user/add', 'class="form-horizontal"'); ?>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
                    <div class="col-sm-10">
                      <input type="name" class="form-control" name="nama_user" placeholder="Nama">
											<?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="NIP_Anggota" class="col-sm-2 col-form-label">NIP User</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="nip_user" placeholder="NIP">
											<?= form_error('nip_user', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                  </div>                  
				  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" placeholder="Username">
											<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                  </div>				  
				  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" placeholder="Password">
											<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
									<?php echo anchor('user', 'Kembali', ['class' => 'btn btn-warning']); ?>
                </div>
                <!-- /.card-footer -->
								<?php echo form_close(); ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
