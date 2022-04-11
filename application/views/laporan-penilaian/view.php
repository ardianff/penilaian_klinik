<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
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
                        <?= $this->session->flashdata('update') ?>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php
                        echo form_open(
                            'laporan_penilaian/cek',
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
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 1 </label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="nama_anggota1" readonly disabled>
                                        <option value="">- Pilih Nama -</option>
                                        <?php
                                        foreach ($anggota as $p) { ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" <?php if (
                                                                                                $p->nama_anggota == $id_klinik['nama_anggota1']
                                                                                            ) { ?> selected <?php } ?>>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 2 </label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="nama_anggota2" readonly disabled>
                                        <option value="">- Pilih Nama -</option>
                                        <?php
                                        foreach ($anggota as $p) { ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" <?php if (
                                                                                                $p->nama_anggota == $id_klinik['nama_anggota2']
                                                                                            ) { ?> selected <?php } ?>>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 3 </label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="nama_anggota3" readonly disabled>
                                        <option value="">- Pilih Nama -</option>
                                        <?php
                                        foreach ($anggota as $p) { ?>
                                        <option value="<?php echo $p->nama_anggota; ?>"
                                            <?php if ($p->nama_anggota == $id_klinik['nama_anggota3']) { ?> selected
                                            <?php } ?>>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 4</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="nama_anggota4" readonly disabled>
                                        <option value="">- Pilih Nama -</option>
                                        <?php
                                        foreach ($anggota as $p) { ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" <?php if (
                                                                                                $p->nama_anggota == $id_klinik['nama_anggota4']
                                                                                            ) { ?> selected <?php } ?>>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Klinik </label>
                                <div class="col-sm-6">
                                    <input type="name" class="form-control" name="nama_klinik" placeholder="Nama Klinik"
                                        value="<?php echo $id_klinik['nama_klinik']; ?>" readonly disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Kemampuan Pelayanan </label>
                                <div class="col-sm-6">
                                    <?php echo form_dropdown(
                                        'kemampuan_pelayanan',
                                        [
                                            '' => '- Pilih -',
                                            'Pratama Umum' => 'Pratama Umum', 'Utama Umum' => 'Utama Umum', 'Pratama Gigi' => 'Utama Gigi',
                                        ],
                                        $id_klinik['kemampuan_pelayanan'],
                                        "class='form-control' readonly disabled"
                                    ); ?>
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
                                <label for="NIP_Anggota" class="col-sm-3 col-form-label">Jenis Pelayanan Klinik </label>
                                <div class="col-sm-6">
                                    <?php echo form_dropdown(
                                        'jenis_pelayanan',
                                        [
                                            '' => '- Pilih -',
                                            'Rawat Jalan' => 'Rawat Jalan',
                                            'Rawat Inap' => 'Rawat Inap',
                                        ],
                                        $id_klinik['jenis_pelayanan_klinik'],
                                        "class='form-control' readonly disabled"
                                    ); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIP_Anggota" class="col-sm-3 col-form-label">Alamat Klinik </label>
                                <div class="col-sm-6">
                                    <textarea type="text" class="form-control" name="alamat_klinik"
                                        placeholder="Alamat Klinik" readonly
                                        disabled><?php echo htmlentities($id_klinik['alamat_klinik']); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row" id="id_isian_kecamatan">
                                <label for="nama_kecamatan" class="col-sm-3 col-form-label">Kecamatan </label>
                                <div class="col-sm-6">
                                    <select class="form-control kecamatan" id="kecamatan" name="nama_kecamatan" readonly
                                        disabled>
                                        <option value="">- Pilih Kecamatan -</option>
                                        <?php foreach ($kecamatan as $kec) : ?>
                                        <option value="<?php echo $kec->id_kecamatan; ?>"
                                            <?php if ($kec->id_kecamatan == $id_klinik['id_kecamatan_klinik']) { ?>
                                            selected <?php } ?>><?php echo $kec->nama_kecamatan; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_kelurahan" class="col-sm-3 col-form-label">Kelurahan </label>
                                <div class="col-sm-6">
                                    <select class="form-control kelurahan" name="nama_kelurahan" disabled readonly>
                                        <option value="">- Pilih Kelurahan -</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_visitasi" class="col-sm-3 col-form-label">Tanggal Visitasi </label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="tgl_visitasi"
                                        value="<?php echo $id_klinik['tgl_visitasi']; ?>" readonly disabled></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_surat" class="col-sm-3 col-form-label">Nomor Surat Tugas </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat"
                                        value="<?php echo $id_klinik['no_surat']; ?>" readonly disabled></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="masa_berlaku_ijin" class="col-sm-3 col-form-label">Masa Berlaku Ijin <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" placeholder="Masa Berlaku"
                                        name="masa_berlaku" value="<?php echo $id_klinik['masa_berlaku_ijin']; ?>"
                                        required></input>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <!-- <button type="back" name="back" class="btn btn-warning">Kembali</button> -->
                            <input action="action" onclick="window.history.go(-1); return false;"
                                class="btn btn-warning" type="submit" value="Kembali" />
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