<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Form Penilaian Klinik Pratama</strong></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php
    echo form_open_multipart(
        'penilaian_pratama/simpan_penilaian_pratama',
        'class="form-horizontal"'
    );
    echo form_hidden('no_penilaian', $penilaian['no_penilaian']);
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">DataTable with default features</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">No</th>
                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Rincian
                                            Penilaian</th>
                                        <th class="text-center" colspan="2">Hasil</th>
                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Keterangan
                                        </th>
                                        <th class="text-center" colspan="2">Hasil Verifikasi Persyaratan Minimal **</th>
                                        <th class="text-center" rowspan="2" style="vertical-align: middle;">Catatan</th>
                                    </tr>
                                    <tr>
                                        <th>Ya/Ada</th>
                                        <th>Tidak</th>
                                        <th>Memenuhi Syarat</th>
                                        <th>Tidak Memenuhi Syarat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $data = $this->Model_penilaian_pratama->get_rincian_penilaian();
                                    $no = 1;
                                    foreach ($data as $row): ?>
                                    <input type="text" name="rincian<?php echo $row->id_rincian_penilaian; ?>"
                                        value="<?php echo $row->id_rincian_penilaian; ?>" />
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td name="penilaian<?php echo $row->id_rincian_penilaian; ?>">
                                            <?php echo $row->rincian_penilaian; ?></td>
                                        <td class="text-center"><input type="radio"
                                                name="hasil<?php echo $row->id_rincian_penilaian; ?>"
                                                value="Ya"></input>
                                        </td>
                                        <td class="text-center"><input type="radio"
                                                name="hasil<?php echo $row->id_rincian_penilaian; ?>"
                                                value="Tidak"></input>
                                        </td>
                                        <td><?php echo $row->keterangan_penilaian; ?></td>
                                        <td class="text-center"><input type="radio"
                                                name="hasil_verifikasi<?php echo $row->id_rincian_penilaian; ?>"
                                                value="Ya"></input></td>
                                        <td class="text-center"><input type="radio"
                                                name="hasil_verifikasi<?php echo $row->id_rincian_penilaian; ?>"
                                                value="Tidak"></input></td>
                                        <td><textarea
                                                name="catatan_penilaian<?php echo $row->id_rincian_penilaian; ?>"></textarea>
                                        </td>
                                    </tr>
                                    <?php $no++;endforeach;
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
                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                <?php echo anchor('penilaian_pratama', 'Kembali', [
                    'class' => 'btn btn-warning',
                ]); ?>
            </div>
        </div>

        <!-- /.container-fluid -->
    </section>
    <?php echo form_close(); ?>
    <!-- /.content -->
</div>