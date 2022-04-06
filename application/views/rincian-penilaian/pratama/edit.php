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
              <h3 class="card-title"><?= $title ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php
            echo form_open(
              'rincian_penilaian_pratama/update',
              'class="form-horizontal"'
            );
            echo form_hidden('id_rincian_penilaian', $rincian->id_rincian_penilaian);
            ?>
            <div class="card-body">
              <div class="form-group row">
                <label for="rincian_penilaian" class="col-sm-2 col-form-label">Rincian Penilaian</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" name="rincian_penilaian" placeholder="Rincian Penilaian"><?php echo htmlspecialchars(
                                                                                                                        $rincian->rincian_penilaian
                                                                                                                      ); ?></textarea>
                  <?= form_error(
                    'rincian_penilaian',
                    '<small class="text-danger pl-3">',
                    '</small>'
                  ) ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="keterangan_penilaian" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" name="keterangan_penilaian" placeholder="Keterangan"><?php echo htmlspecialchars(
                                                                                                                    $rincian->keterangan_penilaian
                                                                                                                  ); ?></textarea>
                  <?= form_error(
                    'keterangan_penilaian',
                    '<small class="text-danger pl-3">',
                    '</small>'
                  ) ?>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-success">Simpan</button>
              <?php echo anchor('rincian_penilaian_pratama', 'Kembali', [
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