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
							'penilaian_pratama/edit',
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
                                    <select class="form-control" name="nama_anggota1" required>
                                        <option value="">- Pilih Nama -</option>
                                        <?php
										$anggota = $this->Model_penilaian_pratama->get_anggota();
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
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 2 <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="nama_anggota2" required>
                                        <option value="">- Pilih Nama -</option>
                                        <?php
										$anggota = $this->Model_penilaian_pratama->get_anggota();
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
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Penilai 3 <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="nama_anggota3" required>
                                        <option value="">- Pilih Nama -</option>
                                        <?php
										$anggota = $this->Model_penilaian_pratama->get_anggota();
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
                                    <select class="form-control" name="nama_anggota4">
                                        <option value="">- Pilih Nama -</option>
                                        <?php
										$anggota = $this->Model_penilaian_pratama->get_anggota();
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
                                <label for="Nama_Anggota" class="col-sm-3 col-form-label">Nama Klinik <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="name" class="form-control" name="nama_klinik" placeholder="Nama Klinik"
                                        value="<?php echo $id_klinik['nama_klinik']; ?>" required>
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
											'Pratama Umum' => 'Pratama Umum', 'Utama Umum' => 'Utama Umum',
										],
										$id_klinik['kemampuan_pelayanan'],
										"class='form-control' required"
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
                                <label for="NIP_Anggota" class="col-sm-3 col-form-label">Jenis Pelayanan Klinik <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <?php echo form_dropdown(
										'jenis_pelayanan',
										[
											'' => '- Pilih -',
											'Rawat Jalan' => 'Rawat Jalan',
											'Rawat Inap' => 'Rawat Inap',
										],
										$id_klinik['jenis_pelayanan_klinik'],
										"class='form-control' required"
									); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NIP_Anggota" class="col-sm-3 col-form-label">Alamat Klinik <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <textarea type="text" class="form-control" name="alamat_klinik"
                                        placeholder="Alamat Klinik"
                                        required><?php echo htmlentities($id_klinik['alamat_klinik']); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row" id="id_isian_kecamatan">
                                <label for="nama_kecamatan" class="col-sm-3 col-form-label">Kecamatan <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select class="form-control kecamatan" id="kecamatan" name="nama_kecamatan">
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
                                <label for="nama_kelurahan" class="col-sm-3 col-form-label">Kelurahan <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <select class="form-control kelurahan" name="nama_kelurahan">
                                        <option value="">- Pilih Kelurahan -</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_visitasi" class="col-sm-3 col-form-label">Tanggal Visitasi <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="tgl_visitasi" required autofocus
                                        value="<?php echo $id_klinik['tgl_visitasi']; ?>" required></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_surat" class="col-sm-3 col-form-label">Nomor Surat Tugas <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat"
                                        value="<?php echo $id_klinik['no_surat']; ?>" required></input>
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