<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1><b>Sistem Penilaian Klinik</b></h1>
            <img src="<?php echo base_url(); ?>/assets/img/pemkot.png" height="auto" width="auto" alt="Image"
                class="login-box-msg center">
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message') ?>
            <?= form_error('username', '<small class="text-danger pl-3">', '</small><br>') ?>
            <?= form_error('password', '<small class="text-danger pl-3">', '</small><br>') ?>
            <hr class="solid">
            <?php echo form_open('auth/check_login', 'class="form-signin"'); ?>
            <div class="input-group mb-3">
                <input type="text"
                    class="form-control check <?php if (form_error('username') == TRUE) : ?> is-invalid <?php endif ?>"
                    placeholder="Username" name="username" <?php if ($this->session->flashdata('username') == TRUE) : ?>
                    value="<?= $this->session->flashdata('username'); ?>" <?php else : ?>
                    value="<?= set_value('username'); ?>" <?php endif; ?>>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password"
                    class="form-control check <?php if (form_error('password') == TRUE) : ?> is-invalid <?php endif ?>"
                    placeholder="Password" name="password" id="pass">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span title="Lihat Password" id="show-pw" onclick="change()"><i class="fas fa-eye"></i></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                </div>
                <div class="col-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>

            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>