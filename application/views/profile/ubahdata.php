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
                            <h3 class="card-title">Edit Data User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('profile/ubahdata', 'class="form-horizontal"'); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nama_user" class="col-sm-2 col-form-label">Nama </label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" name="nama_user"
                                        value="<?= $user['nama_user'] ?>" placeholder="Nama" readonly disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip_user" class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="nip_user"
                                        value="<?= $user['nip_user'] ?>" placeholder="NIP" readonly disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip_user" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="username"
                                        class="form-control <?php if (form_error('username') == true) : ?>is-invalid <?php endif ?>"
                                        name="username" value="<?= set_value('username', $user['username']) ?>"
                                        placeholder="Username">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password"
                                        class="form-control <?php if (form_error('password') == true) : ?>is-invalid <?php endif ?>"
                                        name="password" placeholder="Password">
                                    <p style="color:red;">* kosongkan jika tidak ingin update password</p>
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <?php echo anchor('profile', 'Kembali', ['class' => 'btn btn-warning']); ?>
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