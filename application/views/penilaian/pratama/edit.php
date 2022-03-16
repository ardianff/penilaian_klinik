<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Edit Form Penilaian Klinik Pratama</strong></h1>
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
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php
                        echo form_open(
                            'penilaian_pratama/edit',
                            'class="form-horizontal"'
                        );
                        echo form_hidden(
                            'no_penilaian',
                            $no_penilaian['no_penilaian']
                        );
                        ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-2 col-form-label">Nama Penilai 1 <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="nama_anggota1">
                                        <option value="">- Pilih Nama -</option>
                                        <?php
                                        $anggota = $this->Model_penilaian_pratama->get_anggota();
                                        foreach ($anggota as $p) { ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" <?php if (
    $p->nama_anggota == $no_penilaian['nama_anggota1']
) { ?> selected <?php } ?>>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-2 col-form-label">Nama Penilai 2 <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="nama_anggota2">
                                        <option value="">- Pilih Nama -</option>
                                        <?php
                                        $anggota = $this->Model_penilaian_pratama->get_anggota();
                                        foreach ($anggota as $p) { ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" <?php if (
    $p->nama_anggota == $no_penilaian['nama_anggota2']
) { ?> selected <?php } ?>>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-2 col-form-label">Nama Penilai 3</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="nama_anggota3">
                                        <option value="">- Pilih Nama -</option>
                                        <?php
                                        $anggota = $this->Model_penilaian_pratama->get_anggota();
                                        foreach ($anggota as $p) { ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" <?php if (
    $p->nama_anggota == $no_penilaian['nama_anggota3']
) { ?> selected <?php } ?>>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-2 col-form-label">Nama Penilai 4</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="nama_anggota4">
                                        <option value="">- Pilih Nama -</option>
                                        <?php
                                        $anggota = $this->Model_penilaian_pratama->get_anggota();
                                        foreach ($anggota as $p) { ?>
                                        <option value="<?php echo $p->nama_anggota; ?>" <?php if (
    $p->nama_anggota == $no_penilaian['nama_anggota4']
) { ?> selected <?php } ?>>
                                            <?php echo $p->nama_anggota; ?> - <?php echo $p->nip_anggota; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-2 col-form-label">Nama Klinik</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" name="nama_klinik" placeholder="Nama Klinik"
                                        value="<?php echo $no_penilaian[
                                            'nama_klinik'
                                        ]; ?>" required>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->

                </div>
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="card card-info">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Nama_Anggota" class="col-sm-2 col-form-label">Kemampuan Pelayanan</label>
                                <div class="col-sm-10">
                                    <?php echo form_dropdown(
                                        'kemampuan_pelayanan',
                                        [
                                            '' => '- Pilih -',
                                            'Pratama' => 'Pratama',
                                        ],
                                        $no_penilaian['kemampuan_pelayanan'],
                                        "class='form-control', 'required'"
                                    ); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIP_Anggota" class="col-sm-2 col-form-label">Jenis Pelayanan Klinik</label>
                                <div class="col-sm-10">
                                    <?php echo form_dropdown(
                                        'jenis_pelayanan',
                                        [
                                            '' => '- Pilih -',
                                            'Rawat Jalan' => 'Rawat Jalan',
                                            'Rawat Inap' => 'Rawat Inap',
                                        ],
                                        $no_penilaian['jenis_pelayanan_klinik'],
                                        "class='form-control', 'required'"
                                    ); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIP_Anggota" class="col-sm-2 col-form-label">Alamat Klinik</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="alamat_klinik"
                                        placeholder="Alamat Klinik" required><?php echo htmlentities(
                                            $no_penilaian['alamat_klinik']
                                        ); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_penilaian" class="col-sm-2 col-form-label">Tanggal Penilaian</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_penilaian" required autofocus
                                        value="<?php echo $no_penilaian[
                                            'tgl_penilaian'
                                        ]; ?>" required></input>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <?php echo anchor('penilaian_pratama', 'Kembali', [
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