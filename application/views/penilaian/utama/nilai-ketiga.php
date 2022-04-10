<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><strong><?= $title ?></strong></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12" id="card">
                    <!-- Horizontal Form -->
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3><b><?php echo $klinik['nama_klinik'] ?></b></h3>
                                            <table border="0" class="class=" text-bap"">
                                                <tbody>
                                                    <tr>
                                                        <td>Kemampuan Pelayanan</td>
                                                        <td>:</td>
                                                        <td>Klinik <?php echo $klinik['kemampuan_pelayanan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Pelayanan Klinik</td>
                                                        <td>:</td>
                                                        <td><?php echo $klinik['jenis_pelayanan_klinik'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Lengkap Klinik</td>
                                                        <td>:</td>
                                                        <td><?php echo $klinik['alamat_klinik'] ?>, Kec.
                                                            <?php echo $klinik['nama_kecamatan'] ?>, Kel.
                                                            <?php echo $klinik['nama_kelurahan'] ?>
                                                            (<?php echo $klinik['kode_pos_kelurahan'] ?>)</td>
                                                    </tr>
                                                    <!-- <tr>
														<td>Update Terakhir</td>
														<td>:</td>
														<td><?php echo $klinik['update_at'] ?></td>
													</tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12">
                                        </div>
                                    </div>
                                </div>
                            </h2>
                        </div>

                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('penilaian_utama/nilai_ketiga', 'class="form-horizontal"');
						echo form_hidden('no_penilaian', $klinik['no_penilaian']);
						echo form_hidden('id_klinik', $klinik['id_klinik']);
						echo form_hidden('nama_klinik', $klinik['nama_klinik']);
						?>
                        <?php if ($klinik['usulan_rekomendasi'] == null && $klinik['uraian_penilaian'] == null && $klinik['tindak_lanjut_klinik'] == null && $klinik['nama_perwakilan_pihak_klinik'] == null && $klinik['jabatan_perwakilan_pihak_klinik'] == null) : ?>
                        <input type="hidden" name="form" value="add" />
                        <div class="card-body">
                            <?php $this->session->flashdata('simpan') ?>
                            <div class="form-group row">
                                <label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Usulan rekomendasi<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-8">
                                    <?php if ($klinik['kemampuan_pelayanan'] == 'Pratama Gigi') : ?>
                                    <input type="radio" name="pilihan_jawaban" value="Telah Memenuhi" required> Telah
                                    memenuhi persyaratan
                                    minimal
                                    sebagai
                                    <del>Klinik Utama</del>/Klinik Pratama Gigi</input>
                                    <br>
                                    <input type="radio" name="pilihan_jawaban" value="Belum Memenuhi" required> Belum
                                    memenuhi persyaratan
                                    minimal
                                    sebagai
                                    <del>Klinik Utama</del>/Klinik Pratama Gigi</input>
                                    <?php elseif ($klinik['kemampuan_pelayanan'] == 'Utama Gigi') : ?>
                                    <input type="radio" name="pilihan_jawaban" value="Telah Memenuhi" required> Telah
                                    memenuhi persyaratan
                                    minimal
                                    sebagai
                                    Klinik Utama/<del>Klinik Pratama</del> Gigi</input>
                                    <br>
                                    <input type="radio" name="pilihan_jawaban" value="Belum Memenuhi" required> Belum
                                    memenuhi persyaratan
                                    minimal
                                    sebagai
                                    Klinik Utama/<del>Klinik Pratama</del> Gigi</input>
                                    <?php endif; ?>
                                    <br><br>
                                    <textarea placeholder="Isian Uraian..." class="form-control" rows="3"
                                        name="uraian_penilaian_klinik" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Tindak Lanjut Bagi
                                    Klinik<span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="radio" name="pilihan_jawaban_klinik" value="Disetujui" required>
                                    Disetujui</input>
                                    <br>
                                    <input type="radio" name="pilihan_jawaban_klinik" value="Ditolak"> Ditolak</input>
                                    <br>
                                    <input type="radio" name="pilihan_jawaban_klinik" value="Diperbaiki">
                                    Diperbaiki</input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Perwakilan Klinik<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="nama_perwakilan_klinik"
                                        placeholder="Nama Perwakilan Pihak Klinik" class="form-control" required>
                                    <br>
                                    <input type="text" name="jabatan_perwakilan_klinik" placeholder="Jabatan"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto_klinik" class="col-sm-2 col-form-label">Foto Klinik<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="file" id="img" name="upload_Files[]" accept="image/*" multiple
                                        required>
                                    <br>
                                    <p class="text-danger">Ekstensi Foto yang di perbolehkan yaitu .JPG| .JPEG| .PNG
                                        dengan ukuran maksimal 5 mb</p>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col-auto">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label>Tanda Tangan Perwakilan Pihak Klinik :</label>
                                            <br />
                                            <div id="sig"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="clear">Clear</button>
                                            <textarea id="signature64" name="signed" style="display: none"
                                                required></textarea>
                                        </div>
                                        <div class="col-auto">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-auto">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <label>Tanda Tangan Penilai 1 :</label>
                                            <br />
                                            <div id="ttd1"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="cls-ttd1">Clear</button>
                                            <textarea class="text-center" id="signature64-ttd1" name="ttd-1"
                                                style="display: none" required></textarea>
                                        </div>
                                        <div class="col">

                                        </div>
                                        <div class="col">
                                            <label>Tanda Tangan Penilai 2 :</label>
                                            <br />
                                            <div id="ttd2"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="cls-ttd2">Clear</button>
                                            <textarea id="signature64-ttd2" name="ttd-2" style="display: none"
                                                required></textarea>
                                        </div>
                                        <div class="col">

                                        </div>
                                        <div class="w-100"></div>
                                        <br>
                                        <div class="col">
                                            <label>Tanda Tangan Penilai 3 :</label>
                                            <br />
                                            <div id="ttd3"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="cls-ttd3">Clear</button>
                                            <textarea id="signature64-ttd3" name="ttd-3" style="display: none"
                                                required></textarea>
                                        </div>
                                        <div class="col">

                                        </div>
                                        <div class="col"><label>Tanda Tangan Penilai 4 :</label>
                                            <br />
                                            <div id="ttd4"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="cls-ttd4">Clear</button>
                                            <textarea id="signature64-ttd4" name="ttd-4" style="display: none"
                                                required></textarea>
                                        </div>
                                        <div class="col">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else : ?>
                        <input type="hidden" name="form" value="edit" />
                        <div class="card-body">
                            <?php $this->session->flashdata('simpan') ?>
                            <div class="form-group row">
                                <label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Usulan rekomendasi<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-8">
                                    <?php if ($klinik['kemampuan_pelayanan'] == 'Pratama Gigi') : ?>
                                    <input type="radio" name="pilihan_jawaban"
                                        <?php if ($klinik['usulan_rekomendasi'] == 'Telah Memenuhi') { ?> checked
                                        <?php    } ?> value="Telah Memenuhi" required> Telah memenuhi persyaratan
                                    minimal
                                    sebagai
                                    <del>Klinik Utama</del>/Klinik Pratama Gigi</input>
                                    <br>
                                    <input type="radio" name="pilihan_jawaban"
                                        <?php if ($klinik['usulan_rekomendasi'] == 'Belum Memenuhi') { ?> checked
                                        <?php    } ?> value="Belum Memenuhi" required> Belum memenuhi persyaratan
                                    minimal
                                    sebagai
                                    <del>Klinik Utama</del>/Klinik Pratama Gigi</input>
                                    <?php elseif ($klinik['kemampuan_pelayanan'] == 'Utama Gigi') : ?>
                                    <input type="radio" name="pilihan_jawaban"
                                        <?php if ($klinik['usulan_rekomendasi'] == 'Telah Memenuhi') { ?> checked
                                        <?php    } ?> value="Telah Memenuhi" required> Telah memenuhi persyaratan
                                    minimal
                                    sebagai
                                    Klinik Utama/<del>Klinik Pratama</del> Gigi</input>
                                    <br>
                                    <input type="radio" name="pilihan_jawaban"
                                        <?php if ($klinik['usulan_rekomendasi'] == 'Belum Memenuhi') { ?> checked
                                        <?php    } ?> value="Belum Memenuhi" required> Belum memenuhi persyaratan
                                    minimal
                                    sebagai
                                    Klinik Utama/<del>Klinik Pratama</del> Gigi</input>
                                    <?php endif; ?>
                                    <br><br>
                                    <textarea placeholder="Isian Uraian..." class="form-control" rows="3"
                                        name="uraian_penilaian_klinik"><?php echo htmlentities($klinik['uraian_penilaian']); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Tindak Lanjut Bagi
                                    Klinik<span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="radio" name="pilihan_jawaban_klinik"
                                        <?php if ($klinik['tindak_lanjut_klinik'] == 'Disetujui') { ?> checked
                                        <?php    } ?> value="Disetujui" required> Disetujui</input>
                                    <br>
                                    <input type="radio" name="pilihan_jawaban_klinik"
                                        <?php if ($klinik['tindak_lanjut_klinik'] == 'Ditolak') { ?> checked
                                        <?php    } ?> value="Ditolak" required> Ditolak</input>
                                    <br>
                                    <input type="radio" name="pilihan_jawaban_klinik"
                                        <?php if ($klinik['tindak_lanjut_klinik'] == 'Diperbaiki') { ?> checked
                                        <?php    } ?> value="Diperbaiki" required> Diperbaiki</input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="usulan_rekomendasi" class="col-sm-2 col-form-label">Perwakilan Klinik<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="nama_perwakilan_klinik"
                                        placeholder="Nama Perwakilan Pihak Klinik" class="form-control"
                                        value="<?php echo $klinik['nama_perwakilan_pihak_klinik'] ?>" required>
                                    <br>
                                    <input type="text" name="jabatan_perwakilan_klinik" placeholder="Jabatan"
                                        class="form-control"
                                        value="<?php echo $klinik['jabatan_perwakilan_pihak_klinik'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto_klinik" class="col-sm-2 col-form-label">Foto Klinik<span
                                        style="color:red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="file" name="upload_Files[]" accept="image/*" multiple
                                        <?php if ($klinik['foto_klinik'] == null) { ?> required <?php
																																								} ?> />
                                    <br>
                                    <p class="text-danger">Ekstensi Foto yang di perbolehkan yaitu .JPG| .JPEG| .PNG
                                        dengan ukuran maksimal 5 mb</p>
                                    <input type="hidden" name="old_photo"
                                        value="<?php echo $klinik['foto_klinik'] ?>" />
                                </div>
                                <?php if (isset($error)) : ?>
                                <div class="invalid-feedback"><?= $error ?></div>
                                <?php endif; ?>
                                <div class="container mt-4">
                                    <div class="row">
                                        <?php $foto = $klinik['foto_klinik'];
											$foto_jadi = explode(",", $foto);
											foreach ($foto_jadi as $r) : ?>
                                        <div class=" col-auto">
                                            <div class="card" style="width: 20rem;">
                                                <img class="card-img-top"
                                                    src="<?php echo base_url("assets/img/uploads/foto_klinik/pratama_utama_gigi/" . $r) ?>"
                                                    width="50%" height="50%" alt="Foto Klinik">
                                            </div>
                                        </div>
                                        <?php endforeach;
											?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col-auto">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label>Tanda Tangan Perwakilan Pihak Klinik :</label>
                                            <br />
                                            <div id="sig"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="clear">Clear</button>
                                            <textarea id="signature64" name="signed" style="display: none"
                                                <?php if ($klinik['ttd_perwakilan_klinik'] == null) { ?>required <?php
																																											} ?>></textarea>
                                        </div>
                                        <div class="col-auto">
                                            <img class="text-center"
                                                src="<?php echo base_url("assets/img/uploads/ttd/pratama_utama_gigi/" . $klinik['ttd_perwakilan_klinik']) ?>"
                                                width="250" height="250" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-auto">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <label>Tanda Tangan Penilai 1 :</label>
                                            <br />
                                            <div id="ttd1"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="cls-ttd1">Clear</button>
                                            <textarea class="text-center" id="signature64-ttd1" name="ttd-1"
                                                style="display: none"
                                                <?php if ($klinik['ttd_penilai1'] == null) { ?>required <?php
																																															} ?>></textarea>
                                        </div>
                                        <div class="col">
                                            <img class="text-center"
                                                src="<?php echo base_url("assets/img/uploads/ttd/pratama_utama_gigi/" . $klinik['ttd_penilai1']) ?>"
                                                width="250" height="250" />
                                        </div>
                                        <div class="col">
                                            <label>Tanda Tangan Penilai 2 :</label>
                                            <br />
                                            <div id="ttd2"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="cls-ttd2">Clear</button>
                                            <textarea id="signature64-ttd2" name="ttd-2" style="display: none"
                                                <?php if ($klinik['ttd_penilai2'] == null) { ?>required <?php
																																										} ?>></textarea>s
                                        </div>
                                        <div class="col">
                                            <img class="text-center"
                                                src="<?php echo base_url("assets/img/uploads/ttd/pratama_utama_gigi/" . $klinik['ttd_penilai2']) ?>"
                                                width="250" height="250" />
                                        </div>
                                        <div class="w-100"></div>
                                        <br>
                                        <div class="col">
                                            <label>Tanda Tangan Penilai 3 :</label>
                                            <br />
                                            <div id="ttd3"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="cls-ttd3">Clear</button>
                                            <textarea id="signature64-ttd3" name="ttd-3" style="display: none"
                                                <?php if ($klinik['ttd_penilai3'] == null) { ?>required <?php
																																										} ?>></textarea>
                                        </div>
                                        <div class="col">
                                            <img class="text-center"
                                                src="<?php echo base_url("assets/img/uploads/ttd/pratama_utama_gigi/" . $klinik['ttd_penilai3']) ?>"
                                                width="250" height="250" />
                                        </div>
                                        <div class="col"><label>Tanda Tangan Penilai 4 :</label>
                                            <br />
                                            <div id="ttd4"></div>
                                            <br />
                                            <button class="btn-sm btn-danger" id="cls-ttd4">Clear</button>
                                            <textarea id="signature64-ttd4" name="ttd-4" style="display: none"
                                                <?php if ($klinik['ttd_penilai4'] == null) { ?>required <?php
																																										} ?>></textarea>
                                        </div>
                                        <div class="col">
                                            <img class="text-center"
                                                src="<?php echo base_url("assets/img/uploads/ttd/pratama_utama_gigi/" . $klinik['ttd_penilai4']) ?>"
                                                width="250" height="250" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <br>
                        <!-- /.card-body -->
                        <div class=" text-center">
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                <?php echo anchor('penilaian_utama/nilai_kedua/' . $klinik['id_klinik'], 'Kembali', [
									'class' => 'btn btn-warning',
								]); ?>
                            </div>
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