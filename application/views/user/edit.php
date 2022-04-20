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
                        <?php
                        echo form_open('user/update', 'class="form-horizontal"');
                        echo form_hidden('kode_user', $user->kode_user);
                        ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-2 col-form-label">Nama User <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="name"
                                        class="form-control  <?php if (form_error('nama_user') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_user" placeholder="Nama"
                                        value="<?= set_value('nama_user', $user->nama_user) ?>">
                                    <?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIP_Anggota" class="col-sm-2 col-form-label">NIP User <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number"
                                        class="form-control  <?php if (form_error('nip_user') == true) : ?>is-invalid <?php endif ?>"
                                        name="nip_user" placeholder="NIP"
                                        value="<?= set_value('nip_user', $user->nip_user) ?>">
                                    <?= form_error('nip_user', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="level_user" class="col-sm-2 col-form-label">Level User <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <?php
                                    $options = array(
                                        '' => '- Pilih -',
                                        'Admin' => 'Admin',
                                        'Penilai' => 'Penilai'
                                    );
                                    echo form_dropdown(
                                        'level_user',
                                        $options,
                                        set_value('level_user', $user->level_user),
                                        form_error('level_user') == true ? "class='form-control is-invalid'" : "class='form-control'"
                                    ); ?>
                                    <?= form_error('level_user', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">Username <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control  <?php if (form_error('username') == true) : ?>is-invalid <?php endif ?>"
                                        name="username" placeholder="Username"
                                        value="<?= set_value('username', $user->username) ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password"
                                        class="form-control  <?php if (form_error('password') == true) : ?>is-invalid <?php endif ?>"
                                        name="password" placeholder="Password">
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