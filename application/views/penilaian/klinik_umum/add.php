<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong><?= $title; ?></strong></h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open(
                            'penilaian_klinik_umum/add',
                            'class="form-horizontal"'
                        ); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 1 <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_anggota1') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_anggota1" autofocus>
                                        <option value="">- Pilih Nama -</option>
                                        <?php foreach ($anggota as $p) : ?>
                                        <?php if (set_value('nama_anggota1') == $p->nama_anggota) : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" selected>
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>">
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_anggota1', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 2 <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_anggota2') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_anggota2">
                                        <option value="">- Pilih Nama -</option>
                                        <?php foreach ($anggota as $p) : ?>
                                        <?php if (set_value('nama_anggota2') == $p->nama_anggota) : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" selected>
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>">
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_anggota2', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 3</label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_anggota3') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_anggota3">
                                        <option value="">- Pilih Nama -</option>
                                        <?php foreach ($anggota as $p) : ?>
                                        <?php if (set_value('nama_anggota3') == $p->nama_anggota) : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" selected>
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>">
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_anggota3', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 4</label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_anggota4') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_anggota4">
                                        <option value="">- Pilih Nama -</option>
                                        <?php foreach ($anggota as $p) : ?>
                                        <?php if (set_value('nama_anggota4') == $p->nama_anggota) : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" selected>
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>">
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_anggota4', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 5</label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_anggota5') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_anggota5">
                                        <option value="">- Pilih Nama -</option>
                                        <?php foreach ($anggota as $p) : ?>
                                        <?php if (set_value('nama_anggota5') == $p->nama_anggota) : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" selected>
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>">
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_anggota5', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 6</label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_anggota6') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_anggota6">
                                        <option value="">- Pilih Nama -</option>
                                        <?php foreach ($anggota as $p) : ?>
                                        <?php if (set_value('nama_anggota6') == $p->nama_anggota) : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" selected>
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>">
                                            <?php echo $p->nama_anggota; ?>
                                            - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_anggota6', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_klinik" class="col-sm-3 col-form-label">Nama Klinik <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="name"
                                        class="form-control <?php if (form_error('nama_klinik') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_klinik" placeholder="Nama Klinik"
                                        value="<?= set_value('nama_klinik') ?>">
                                    <?= form_error('nama_klinik', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kemampuan_pelayanan" class="col-sm-3 col-form-label">Kemampuan
                                    Pelayanan <span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <?php echo form_dropdown(
                                        'kemampuan_pelayanan',
                                        ['' => '- Pilih -', 'Pratama Umum' => 'Pratama Umum', 'Utama Umum' => 'Utama Umum', 'Pratama Kecantikan' => 'Pratama Kecantikan', 'Utama Kecantikan' => 'Utama Kecantikan'],
                                        set_value('kemampuan_pelayanan'),
                                        form_error('kemampuan_pelayanan') == true ? "class='form-control is-invalid ' placeholder='Pilih Kemampuan Pelayanan'" : "class='form-control ' placeholder='Pilih Kemampuan Pelayanan'",
                                        "placeholder='Test'",
                                    ); ?>
                                    <?= form_error('kemampuan_pelayanan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->

                </div>
                <div class="col-md-10">
                    <!-- Horizontal Form -->
                    <div class="card card-info">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="jenis_pelayanan" class="col-sm-3 col-form-label">Jenis Pelayanan
                                    Klinik <span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <?php echo form_dropdown(
                                        'jenis_pelayanan',
                                        [
                                            '' => '- Pilih -',
                                            'Rawat Jalan' => 'Rawat Jalan',
                                            'Rawat Inap' => 'Rawat Inap',
                                        ],
                                        set_value('jenis_pelayanan'),
                                        form_error('jenis_pelayanan') == true ? "class='form-control is-invalid'" : "class='form-control'"
                                    ); ?>
                                    <?= form_error('jenis_pelayanan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat_klinik" class="col-sm-3 col-form-label">Alamat Klinik <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <textarea type="text"
                                        class="form-control <?php if (form_error('alamat_klinik') == true) : ?>is-invalid <?php endif ?>"
                                        name="alamat_klinik"
                                        placeholder="Alamat Klinik"><?= set_value(htmlspecialchars('alamat_klinik')) ?></textarea>
                                    <?= form_error('alamat_klinik', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row" id="id__isian_kecamatan">
                                <label for="nama_kecamatan" class="col-sm-3 col-form-label">Kecamatan<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_kecamatan') == true) : ?>is-invalid <?php endif ?>"
                                        id="id_kecamatan" name="nama_kecamatan">
                                        <option value="">- Pilih Kecamatan -</option>
                                        <?php foreach ($kecamatan as $kec) : ?>
                                        <option value="<?php echo $kec->id_kecamatan; ?>">
                                            <?php echo $kec->nama_kecamatan; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_kecamatan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_kelurahan" class="col-sm-3 col-form-label">Kelurahan <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_kelurahan') == true) : ?>is-invalid <?php endif ?>"
                                        id="id_kelurahan" name="nama_kelurahan">
                                        <option value="">- Pilih Kelurahan - </option>
                                    </select>
                                    <?= form_error('nama_kelurahan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_visitasi" class="col-sm-3 col-form-label">Tanggal Visitasi <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="date"
                                        class="form-control <?php if (form_error('tgl_visitasi') == true) : ?>is-invalid <?php endif ?>"
                                        name="tgl_visitasi" value="<?= set_value('tgl_visitasi') ?>"></input>
                                    <?= form_error('tgl_visitasi', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_surat" class="col-sm-3 col-form-label">Nomor Surat Tugas </label>
                                <div class="col-sm-6">
                                    <input type="text"
                                        class="form-control <?php if (form_error('no_surat') == true) : ?>is-invalid <?php endif ?>"
                                        placeholder="Nomor Surat" name="no_surat"
                                        value="<?= set_value('no_surat') ?>"></input>
                                    <?= form_error('no_surat', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_berita" class="col-sm-3 col-form-label">Nomor Berita Acara </label>
                                <div class="col-sm-6">
                                    <input type="text"
                                        class="form-control <?php if (form_error('no_bap') == true) : ?>is-invalid <?php endif ?>"
                                        placeholder="Nomor BAP" name="no_bap"
                                        value="<?= set_value('no_bap') ?>"></input>
                                    <?= form_error('no_bap', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <?php echo anchor('penilaian_klinik_umum', 'Kembali', [
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