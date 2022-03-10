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
                <h3 class="card-title">Input Rincian Penilaian Utama</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
							<?php echo form_open(
           'rincian_penilaian_utama/add',
           'class="form-horizontal"'
       ); ?>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="rincian_penilaian" class="col-sm-2 col-form-label">Rincian Penilaian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="rincian_penilaian" placeholder="Rincian Penilaian" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keterangan_penilaian" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="keterangan_penilaian" placeholder="Keterangan">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
									<?php echo anchor('rincian_penilaian_utama', 'Kembali', [
             'class' => 'btn btn-warning',
         ]); ?>
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
