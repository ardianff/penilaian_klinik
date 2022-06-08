<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong><?= $title ?></strong></h1>
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
                        <?php
                        echo form_open(
                            'penilaian_klinik_gigi/update',
                            'class="form-horizontal"'
                        );
                        echo form_hidden(
                            'id_klinik',
                            $id_klinik['id_klinik']
                        );
                        echo form_hidden(
                            'nama_klinik',
                            $id_klinik['nama_klinik']
                        );
                        ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 1 <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_anggota1') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_anggota1">
                                        <option value="">- Pilih Nama -</option>
                                        <?php foreach ($anggota as $p) : ?>
                                        <?php if (set_value('nama_anggota1') == $p->nama_anggota) : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" selected>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>"
                                            <?php if ($p->nama_anggota == $id_klinik['nama_anggota1']) { ?> selected
                                            <?php } ?>><?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?>
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
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>"
                                            <?php if ($p->nama_anggota == $id_klinik['nama_anggota2']) { ?> selected
                                            <?php } ?>><?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_anggota2', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 3 <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_anggota3') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_anggota3">
                                        <option value="">- Pilih Nama -</option>
                                        <?php foreach ($anggota as $p) : ?>
                                        <?php if (set_value('nama_anggota3') == $p->nama_anggota) : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" selected>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>"
                                            <?php if ($p->nama_anggota == $id_klinik['nama_anggota3']) { ?> selected
                                            <?php } ?>><?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?>
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
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php else : ?>
                                        <option value="<?php echo $p->nama_anggota; ?>"
                                            <?php if ($p->nama_anggota == $id_klinik['nama_anggota4']) { ?> selected
                                            <?php } ?>><?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?>
                                        </option>
                                        <?php endif ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nama_anggota4', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Klinik <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="name"
                                        class="form-control <?php if (form_error('nama_klinik') == true) : ?>is-invalid <?php endif ?>"
                                        name="nama_klinik" placeholder="Nama Klinik"
                                        value="<?= set_value('nama_klinik', $id_klinik['nama_klinik']); ?>">
                                    <?= form_error('nama_klinik', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Kemampuan Pelayanan <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <?php echo form_dropdown(
                                        'kemampuan_pelayanan',
                                        [
                                            '' => '- Pilih -',
                                            'Pratama Gigi' => 'Pratama Gigi', 'Utama Gigi' => 'Utama Gigi',
                                        ],
                                        set_value('kemampuan_pelayanan', $id_klinik['kemampuan_pelayanan']),
                                        form_error('kemampuan_pelayanan') == true ? "class='form-control is-invalid'" : "class='form-control'"
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
                                <label for="jenis_pelayanan" class="col-sm-3 col-form-label">Jenis Pelayanan Klinik
                                    <span style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <?php echo form_dropdown(
                                        'jenis_pelayanan',
                                        [
                                            '' => '- Pilih -',
                                            'Rawat Jalan' => 'Rawat Jalan',
                                            'Rawat Inap' => 'Rawat Inap',
                                        ],
                                        set_value('jenis_pelayanan', $id_klinik['jenis_pelayanan_klinik']),
                                        form_error('jenis_pelayanan') == true ? "class='form-control is-invalid'" : "class='form-control'"
                                    ); ?>
                                    <?= form_error('jenis_pelayanan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIP_Anggota" class="col-sm-3 col-form-label">Alamat Klinik <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <textarea type="text"
                                        class="form-control <?php if (form_error('alamat_klinik') == true) : ?>is-invalid <?php endif ?>"
                                        name="alamat_klinik"
                                        placeholder="Alamat Klinik"><?= set_value('alamat_klinik', htmlentities($id_klinik['alamat_klinik'])); ?></textarea>
                                    <?= form_error('alamat_klinik', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row" id="id_isian_kecamatan">
                                <label for="nama_kecamatan" class="col-sm-3 col-form-label">Kecamatan <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select
                                        class="form-control <?php if (form_error('nama_kecamatan') == true) : ?>is-invalid <?php endif ?> kecamatan"
                                        id="kecamatan" name="nama_kecamatan">
                                        <option value="">- Pilih Kecamatan -</option>
                                        <?php foreach ($kecamatan as $kec) : ?>
                                        <option value="<?php echo $kec->id_kecamatan; ?>"
                                            <?php if ($kec->id_kecamatan == $id_klinik['id_kecamatan_klinik']) { ?>
                                            selected <?php } ?>><?php echo $kec->nama_kecamatan; ?> </option>
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
                                        class="form-control <?php if (form_error('nama_kelurahan') == true) : ?>is-invalid <?php endif ?> kelurahan"
                                        name="nama_kelurahan">
                                        <option value="">- Pilih Kelurahan -</option>
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
                                        name="tgl_visitasi" required autofocus
                                        value="<?= set_value('tgl_visitasi', $id_klinik['tgl_visitasi']); ?>">
                                    <?= form_error('tgl_visitasi', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_surat" class="col-sm-3 col-form-label">Nomor Surat Tugas <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text"
                                        class="form-control <?php if (form_error('no_surat') == true) : ?>is-invalid <?php endif ?>"
                                        placeholder="Nomor Surat" name="no_surat"
                                        value="<?= set_value('no_surat', $id_klinik['no_surat']); ?>">
                                    <?= form_error('no_surat', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_surat" class="col-sm-3 col-form-label">Nomor Berita Acara <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text"
                                        class="form-control <?php if (form_error('no_bap') == true) : ?>is-invalid <?php endif ?>"
                                        placeholder="Nomor BAP" name="no_bap"
                                        value="<?= set_value('no_bap', $id_klinik['no_bap']); ?>">
                                    <?= form_error('no_bap', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <?php echo anchor('penilaian_klinik_gigi', 'Kembali', [
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