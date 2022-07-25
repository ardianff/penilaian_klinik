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
        'penilaian_klinik_umum/prosesnilaikedua/' . $klinik['id_klinik'],
        'class="form-horizontal"'
    );
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
                                    </div>
                                </div>
                            </h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="main-wrapper">

                                <div class="responsive-table">
                                    <?= $this->session->flashdata('simpan') ?>
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">No
                                                </th>
                                                <th class="text-center" rowspan="2" style="vertical-align: middle;">
                                                    Kriteria
                                                </th>
                                                <th class="text-center" colspan="2">Standar Minimal</th>
                                                <th class="text-center" colspan="2">Hasil</th>
                                                <th class="text-center" colspan="3" style="vertical-align: middle;">
                                                    Keterangan
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Jumlah</th>
                                                <th class="text-center">Satuan</th>
                                                <th class="text-center">Ya/Ada</th>
                                                <th class="text-center">Tidak</th>
                                                <th class="text-center">Jumlah</th>
                                                <th class="text-center">Satuan</th>
                                                <th class="text-center">Catatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($klinik['hasil_penilaian'] == null && $klinik['jumlah_ketersediaan'] == null) {
                                                echo '<input type="hidden" name="form" value="add"/>';
                                                for ($i = 0; $i < count($rincian); $i++) {
                                                    $no = $i + 1;
                                                    echo '<tr>';
                                                    echo '<td>' . $no . '</td>';
                                                    echo '<td class="text-justify"><input type="hidden" name="kriteria[' . $no . ']" value="' . $rincian[$i]->id_deskripsi . '"/> ' . nl2br(htmlspecialchars($rincian[$i]->kriteria_penilaian_pratama)) . '</td>';
                                                    echo '<td class= "text-justify">' . $rincian[$i]->jumlah_minimal_penilaian_pratama . '</td>';
                                                    echo '<td class= "text-justify">' . $rincian[$i]->satuan_penilaian_pratama . '</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil_nilai[' . $no . ']"  value="Ya" required> Ya</input>
											</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil_nilai[' . $no . ']"  value="Tidak" required> Tidak</input>
											</td>';
                                                    echo '<td><textarea class="form-control" placeholder="Jumlah" name="jumlah_ketersediaan[' . $no . ']"></textarea></td>';
                                                    echo '<td class="text-justify"><input class="form-control" type="text" name="satuan_nilai[' . $no . ']" value="' . $rincian[$i]->satuan_penilaian_pratama . '" /></td>';
                                                    echo '<td><textarea class="form-control" name="catatan_penilaian[' . $no . ']" placeholder="Catatan..."></textarea>
											</td>';
                                                    echo '<tr>';
                                                }
                                            } else {
                                                echo '<input type="hidden" name="form" value="edit"/>';
                                                for ($i = 0; $i < count($cek_hasil); $i++) {
                                                    $no = $i + 1;
                                                    echo '<tr>';
                                                    echo '<td>' . $no . '</td>';
                                                    echo '<td class="text-justify"><input type="hidden" name="kriteria[' . $no . ']" value="' . $cek_hasil[$i]->id_deskripsi_pfs . '"/> ' . nl2br(htmlspecialchars($cek_hasil[$i]->kriteria_penilaian_pratama)) . '</td>';
                                                    echo '<td class= "text-justify">' . $cek_hasil[$i]->jumlah_minimal_penilaian_pratama . '</td>';
                                                    echo '<td class= "text-justify">' . $cek_hasil[$i]->satuan_penilaian_pratama . '</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil_nilai[' . $no . ']"  ' . ($cek_hasil[$i]->hasil_penilaian == 'Ya' ? 'checked' : '')  . ' value="Ya" required> Ya</input>
											</td>';
                                                    echo '<td class="text-center"><input type="radio" name="hasil_nilai[' . $no . ']"  ' . ($cek_hasil[$i]->hasil_penilaian == 'Tidak' ? 'checked' : '')  . ' value="Tidak" required> Tidak</input>
											</td>';
                                                    echo '<td><textarea class="form-control" placeholder="Jumlah" name="jumlah_ketersediaan[' . $no . ']">' . $cek_hasil[$i]->jumlah_ketersediaan . '</textarea></td>';
                                                    echo '<td class="text-justify"><input class="form-control" type="text" name="satuan_nilai[' . $no . ']" value="' . $cek_hasil[$i]->satuan_penilaian . '" /></td>';
                                                    echo '<td><textarea class="form-control" name="catatan_penilaian[' . $no . ']" placeholder="Catatan...">' . nl2br(htmlspecialchars($cek_hasil[$i]->catatan_penilaian)) . '</textarea>
											</td>';
                                                    echo '<tr>';
                                                }
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <div class="text-center">
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-success text-center">Lanjut</button>
                <a onclick="javascript:history.go(-1)" class="btn btn-warning">Kembali</a>
                <?php echo anchor('penilaian_klinik_umum/nilai/' . $klinik['id_klinik'], 'Kembali', ['class' => 'btn btn-warning', 'style' => 'visibility:hidden']); ?>
            </div>
        </div>

        <!-- /.container-fluid -->
    </section>
    <?php echo form_close(); ?>
    <!-- /.content -->
</div>