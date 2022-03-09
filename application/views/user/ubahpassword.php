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
                <h3 class="card-title">Ubah Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

				 <form class="user form-horizontal" method="post" action="<?= base_url('user/ubahpassword/'); ?>">
                <div class="card-body">				  
				  			<div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
									<?php echo anchor('user', 'Kembali', array('class' => 'btn btn-warning')); ?>
                </div>
                <!-- /.card-footer -->
				</form>
								
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
