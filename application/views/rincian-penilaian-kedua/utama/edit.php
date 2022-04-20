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
                            <h3 class="card-title">Edit Rincian Penilaian Utama Form Kedua</h3><br>
                            <a href="<?php echo base_url('rincian_penilaian_utama_kedua/group_name'); ?>"
                                class="btn btn-danger btn-sm">Group Name</a>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open(
                            'rincian_penilaian_utama_kedua/update',
                            'class="form-horizontal"'
                        );
                        echo form_hidden('id_deskripsi_penilaian', $id_deskripsi->id_deskripsi); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="group_name" class="col-sm-2 col-form-label">Group Name</label>
                                <div class="col-sm-10">
                                    <select
                                        class="form-control <?php if (form_error('group_name') == true) : ?>is-invalid <?php endif ?>"
                                        name="group_name">
                                        <option value="">- Pilih Group -</option>
                                        <?php foreach ($data as $dt) : ?>
                                        <?php if (set_value('group_name') == $dt->id_group) : ?>
                                        <option value="<?php echo $dt->id_group; ?>" selected>
                                            <?php echo $dt->group_name; ?>
                                            <?php else : ?>
                                        <option value="<?php echo $dt->id_group; ?>"
                                            <?php if ($dt->id_group == $id_deskripsi->id_group) { ?> selected
                                            <?php } ?>><?php echo $dt->group_name; ?>
                                        </option>
                                        <?php endif ?>
                                        </option>
                                        <?php endforeach; ?>


                                    </select>
                                    <?= form_error('group_name', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rincian_penilaian" class="col-sm-2 col-form-label">Rincian Penilaian</label>
                                <div class="col-sm-10">
                                    <textarea type="text"
                                        class="form-control <?php if (form_error('rincian_penilaian') == true) : ?>is-invalid <?php endif ?>"
                                        name="rincian_penilaian"
                                        placeholder="Rincian Penilaian"><?= set_value('rincian_penilaian', htmlentities($id_deskripsi->kriteria_penilaian_utama))  ?></textarea>
                                    <?= form_error('rincian_penilaian', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_penilaian" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <textarea type="text"
                                        class="form-control <?php if (form_error('jumlah_penilaian') == true) : ?>is-invalid <?php endif ?>"
                                        name="jumlah_penilaian"
                                        placeholder="Jumlah"><?= set_value('jumlah_penilaian', htmlentities($id_deskripsi->jumlah_minimal_penilaian_utama))  ?></textarea>
                                    <?= form_error('jumlah_penilaian', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan_penilaian" class="col-sm-2 col-form-label">Satuan</label>
                                <div class="col-sm-10">
                                    <?php echo form_dropdown(
                                        'satuan_penilaian',
                                        [
                                            '' => '- Pilih -',
                                            'Unit' => 'Unit',
                                            'Buah' => 'Buah',
                                            'Set' => 'Set',
                                            'Sesuai Kebutuhan' => 'Sesuai Kebutuhan',
                                        ],
                                        set_value('satuan_penilaian', $id_deskripsi->satuan_penilaian_utama),
                                        form_error('satuan_penilaian') == true ? "class='form-control is-invalid'" : "class='form-control'"
                                    ); ?>
                                    <?= form_error('satuan_penilaian', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <?php echo anchor('rincian_penilaian_utama_kedua', 'Kembali', [
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