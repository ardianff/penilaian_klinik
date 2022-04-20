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
                            <h3 class="card-title">Edit Rincian Penilaian Utama</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php
                        echo form_open(
                            'rincian_penilaian_utama/update',
                            'class="form-horizontal"'
                        );
                        echo form_hidden('id_rincian_penilaian', $rincian->id_rincian_penilaian);
                        ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="rincian_penilaian" class="col-sm-2 col-form-label">Rincian Penilaian</label>
                                <div class="col-sm-10">
                                    <textarea type="text"
                                        class="form-control <?php if (form_error('rincian_penilaian') == true) : ?>is-invalid <?php endif ?>"
                                        name="rincian_penilaian"
                                        placeholder="Rincian Penilaian"><?= set_value('rincian_penilaian', htmlentities(
                                                                                                                                                                                                                                $rincian->rincian_penilaian
                                                                                                                                                                                                                            )); ?></textarea>
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
                                    <textarea type="text"
                                        class="form-control <?php if (form_error('keterangan_penilaian') == true) : ?>is-invalid <?php endif ?>"
                                        name="keterangan_penilaian"
                                        placeholder="Keterangan"><?= set_value('rincian_penilaian', htmlentities(
                                                                                                                                                                                                                            $rincian->keterangan_penilaian
                                                                                                                                                                                                                        )); ?></textarea>
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