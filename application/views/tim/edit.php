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
                            <h3 class="card-title">Edit Data Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php
            echo form_open('tim/update', 'class="form-horizontal"');
            echo form_hidden('kode_anggota', $anggota->kode_anggota);
            ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
                                <div class="col-sm-10">
                                    <input type="name"
                                        class="form-control <?php if (form_error('nama_anggota') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_anggota"
                                        value="<?= set_value('nama_anggota', $anggota->nama_anggota) ?>"
                                        placeholder="Nama">
                                    <?= form_error(
                    'nama_anggota',
                    '<small class="text-danger pl-3">',
                    '</small>'
                  ) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIP_Anggota" class="col-sm-2 col-form-label">NIP Anggota</label>
                                <div class="col-sm-10">
                                    <input type="number"
                                        class="form-control <?php if (form_error('nip_anggota') == true) : ?>is-invalid <?php endif ?>"
                                        name="nip_anggota"
                                        value="<?= set_value('nip_anggota', $anggota->nip_anggota) ?>"
                                        placeholder="NIP">
                                    <?= form_error('nip_anggota', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <?php echo anchor('tim', 'Kembali', ['class' => 'btn btn-warning']); ?>
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