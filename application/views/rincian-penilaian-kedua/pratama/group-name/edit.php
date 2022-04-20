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
                        <!-- <a href="#" class="btn btn-danger">Tambah Group Name</a> -->
                        <div class="card-header">
                            <h3 class="card-title">Edit Group Name</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open(
                            'rincian_penilaian_pratama_kedua/update_group',
                            'class="form-horizontal"'
                        );
                        echo form_hidden('id_group', $group->id_group); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="group_name" class="col-sm-2 col-form-label">Group Name</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control <?php if (form_error('nama_group') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_group" placeholder="Nama Group"
                                        value="<?= set_value('nama_group', htmlspecialchars($group->group_name)); ?>">
                                    <?= form_error('nama_group', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <?php echo anchor('rincian_penilaian_pratama_kedua/group_name', 'Kembali', [
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