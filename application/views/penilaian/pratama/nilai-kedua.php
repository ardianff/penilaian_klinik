<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong><?= $title ?></strong></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <?php
	echo form_open(
		'penilaian_pratama/nilai_kedua',
		'class="form-horizontal"'
	);
	echo form_hidden('no_penilaian', $penilaian['no_penilaian']);
	echo form_hidden('id_klinik', $penilaian['id_klinik']);
	echo form_hidden('nama_klinik', $penilaian['nama_klinik']);
	?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">
                                <span>
                                    <h3><b><?php echo $penilaian['nama_klinik']; ?></h3>
                                    </b>
                                    Alamat : <?php echo $penilaian['alamat_klinik']; ?><br>
                                    Kecamatan : <?php echo $penilaian['nama_kecamatan']; ?><br>
                                    Kelurahan : <?php echo $penilaian['nama_kelurahan']; ?>
                                    (<?php echo $penilaian['kode_pos_kelurahan']; ?>)
                                </span>
                            </h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?= $this->session->flashdata('simpan') ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">No</th>
                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Kriteria
                                        </th>
                                        <th class="text-center" colspan="2">Standar Minimal</th>
                                        <th class="text-center" colspan="2">Hasil</th>
                                        <th class="text-center" colspan="3" style="vertical-align: middle;">Keterangan
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
									$no = 1;
									foreach ($rincian as $row) : ?>

                                    <!-- <th colspan="9" class="text-justify"><?php echo $row->group_name; ?></th> -->
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td class="text-justify"><input type="hidden" name="kriteria[<?php echo $no ?>]"
                                                value="<?php echo $row->id_deskripsi; ?>">
                                            <?php echo $row->kriteria_penilaian_pratama; ?></td>
                                        <td class=" text-justify"><?php echo $row->jumlah_minimal_penilaian_pratama; ?>
                                        </td>
                                        <td class="text-justify"><?php echo $row->satuan_penilaian_pratama; ?></td>
                                        <td><input type="radio" value="Ya" name="hasil_nilai[<?php echo $no ?>]"
                                                required /> Ya</td>
                                        <td><input type="radio" value="Tidak" name="hasil_nilai[<?php echo $no ?>]" />
                                            tidak</td>
                                        <td><textarea placeholder="Jumlah"
                                                name="jumlah_ketersediaan[<?php echo $no ?>]"></textarea></td>
                                        <td class="text-justify"><input class="form-control" type="text"
                                                name="satuan_nilai[<?php echo $no ?>]"
                                                value="<?php echo $row->satuan_penilaian_pratama; ?>" /></td>
                                        <td><textarea name="catatan_penilaian[<?php echo $no ?>]"
                                                placeholder="Catatan Penilaian..."></textarea></td>
                                    </tr>
                                    <?php $no++;
									endforeach;
									?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-success">Next</button>
                <!-- <?php echo anchor(
							'penilaian_pratama/nilai_ketiga/' . $penilaian['no_penilaian'],
							'<span>Next</span>',
							[
								'class' => 'btn btn-success',
								'title' => 'Lanjut Ke Halaman Berikutnya',
								'name' => 'submit'
							]
						
); ?> -->
                <button type="submit"
                    href="<?php echo base_url('penilaian_pratama/nilai' . $penilaian['no_penilaian']); ?>" name="back"
                    onclick="history.back();" class="btn btn-warning">Kembali</button>
                <!-- <?php echo anchor('penilaian_pratama', 'Kembali', [
							'class' => 'btn btn-warning',
						]); ?> -->
            </div>
        </div>

        <!-- /.container-fluid -->
    </section>
    <?php echo form_close(); ?>
    <!-- /.content -->
</div>