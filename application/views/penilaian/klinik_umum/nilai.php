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
    <?php
    echo form_open(
        'penilaian_klinik_umum/nilai',
        'class="form-horizontal"'
    );
    echo form_hidden('no_penilaian', $klinik['no_penilaian']);
    echo form_hidden('id_klinik', $klinik['id_klinik']);
    echo form_hidden('nama_klinik', $klinik['nama_klinik']);
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
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
                        <div class="card-body">
                            <div class="main-wrapper">

                                <div class="responsive-table">

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">No
                                                </th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">
                                                    Rincian
                                                    Penilaian</th>
                                                <th class="text-center" colspan="2">Hasil</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">
                                                    Keterangan
                                                </th>
                                                <th class="text-center" colspan="2">Hasil Verifikasi Persyaratan Minimal
                                                    **</th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">
                                                    Catatan</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Ya/Ada</th>
                                                <th class="text-center">Tidak</th>
                                                <th class="text-center">Memenuhi Syarat</th>
                                                <th class="text-center">Tidak Memenuhi Syarat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($klinik['jawab_hasil'] == null && $klinik['jawab_hasil_verif'] == null) {
                                                echo '<input type="hidden" name="form" value="add"/>';
                                                for ($i = 0; $i < count($rincian); $i++) {
                                                    $no = $i + 1;
                                                    echo '<tr>';
                                                    echo '<td>' . $no . '</td>';
                                                    echo '<td class="text-justify"><input type="hidden" name="rincian[' . $no . ']" value="' . $rincian[$i]->id_rincian_penilaian . '"/> ' . $rincian[$i]->rincian_penilaian . '</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil[' . $no . ']"  value="Ya" required> Ya</input>
											</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil[' . $no . ']"  value="Tidak" required> Tidak</input>
											</td>';
                                                    echo '<td class="text-justify">' . $rincian[$i]->keterangan_penilaian . '</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil_verifikasi[' . $no . ']"  value="Ya" required> Ya</input></td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil_verifikasi[' . $no . ']"  value="Tidak" required> Tidak</input>
											</td>';
                                                    echo '<td><textarea class="form-control" name="catatan_penilaian[' . $no . ']" placeholder="Catatan..."></textarea>
											</td>';
                                                    echo '<tr>';
                                                }
                                            } else {
                                                echo '<input type="hidden" name="form" value="edit"/>';
                                                for ($i = 0; $i < count($cek_hasil); $i++) {
                                                    $no = $i + 1;
                                                    echo '<tr>';
                                                    echo '<td>' . $no . '<input type="hidden" name="id_penilaian[' . $no . ']" value="' . $cek_hasil[$i]->id_penilaian . '"/></td>';
                                                    echo '<td class="text-justify"><input type="hidden" name="rincian[' . $no . ']" value="' . $cek_hasil[$i]->id_rincian_penilaian . '"/> ' . $cek_hasil[$i]->rincian_penilaian . '</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil[' . $no . ']" ' . ($cek_hasil[$i]->jawab_hasil == 'Ya' ? 'checked' : '')  . ' value="Ya" required></input>
											</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil[' . $no . ']" ' . ($cek_hasil[$i]->jawab_hasil == 'Tidak' ? 'checked' : '')  . ' value="Tidak" required></input>
											</td>';
                                                    echo '<td class="text-justify">' . $cek_hasil[$i]->keterangan_penilaian . '</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil_verifikasi[' . $no . ']" ' . ($cek_hasil[$i]->jawab_hasil_verif == 'Ya' ? 'checked' : '')  . ' value="Ya" required></input></td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil_verifikasi[' . $no . ']"  ' . ($cek_hasil[$i]->jawab_hasil_verif == 'Tidak' ? 'checked' : '')  . ' value="Tidak" required></input>
											</td>';
                                                    echo '<td><textarea class="form-control" name="catatan_penilaian[' . $no . ']" placeholder="Catatan...">' . $cek_hasil[$i]->catatan_hasil_penilaian . '</textarea>
											</td>';
                                                    echo '<tr>';
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <div class="text-center">
            <div class="card-footer">
                <!-- <?php echo anchor(
                            'penilaian_klinik_umum/nilai_kedua/' . $klinik['no_penilaian'],
                            '<span>Next</span>',
                            [
                                'class' => 'btn btn-success',
                                'title' => 'Lanjut Ke Halaman Berikutnya',
                                'name' => 'submit'
                            ]
                        ); ?> -->
                <button type="submit" name="submit" title="Lanjut Ke Halaman Berikutnya"
                    class="btn btn-success">Next</button>
                <?php echo anchor('penilaian_klinik_umum', 'Kembali', ['class' => 'btn btn-warning',]); ?>

            </div>
        </div>

        <!-- /.container-fluid -->
    </section>
    <?php echo form_close(); ?>
    <!-- /.content -->
</div>