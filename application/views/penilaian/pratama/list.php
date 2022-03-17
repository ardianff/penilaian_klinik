<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Data Penilaian Klinik Pratama</strong></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            &nbsp;<?php echo anchor('penilaian_pratama/add', 'Input Data Penilaian Baru', [
            'class' => 'btn btn-success btn-sm',
        ]); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped " width="auto" height="auto">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2">No</th>
                                        <th class="text-center" rowspan="2">Nama Klinik</th>
                                        <th class="text-center" rowspan="2">Kemampuan Pelayanan</th>
                                        <th class="text-center" rowspan="2">Jenis Klinik</th>
                                        <th class="text-center" rowspan="2">Alamat</th>
                                        <th class="text-center" rowspan="2">Anggota Penilaian</th>
                                        <th class="text-center" colspan="4">Aksi</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            $no = 1;
                            foreach ($data as $row): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no; ?></td>
                                        <td class="text-center"><?php echo $row->nama_klinik; ?><br>
										<?php if ($row->status_penilaian == "Sudah"){
											echo '<button type="button" class="btn btn-outline-success">Sudah Dinilai</button>';
										}else{
											echo '<button type="button" class="btn btn-outline-danger">Belum Dinilai</button>';
										} ?>
										</td>
                                        <td class="text-center"><?php echo $row->kemampuan_pelayanan; ?></td>
                                        <td class="text-center"><?php echo $row->jenis_pelayanan_klinik; ?></td>
                                        <td class="text-center"><?php echo $row->alamat_klinik; ?></td>
                                        <td class="text-center"><?php echo $row->nama_anggota1; ?>,
                                            <br><?php echo $row->nama_anggota2; ?>,
                                            <br><?php echo $row->nama_anggota3; ?>,
                                            <br><?php echo $row->nama_anggota4; ?></td>
                                        <td class="text-center"><?php echo anchor(
                                        'penilaian_pratama/nilai/' .
                                            $row->no_penilaian,
                                        '<span class="fa fa-tasks"></span>',
                                        [
                                            'class' => 'btn btn-primary btn-sm',
                                            'title' => 'Penilaian',
                                        ]
                                    ); ?></td>
                                        <td class="text-center"><?php echo anchor(
                                        'penilaian_pratama/edit/' .
                                            $row->no_penilaian,
                                        '<span class="fa fa-pencil-alt"></span>',
                                        [
                                            'class' => 'btn btn-warning btn-sm',
                                            'title' => 'Edit',
                                        ]
                                    ); ?></td>
                                        <td class="text-center"><?php echo anchor(
                      'penilaian_pratama/pdf/' . $row->no_penilaian,
                      '<span class="fa fa-file-pdf"></span>',
                      [
                          'class' => 'btn btn-success btn-sm',
                          'title' => 'Export PDF',
                      ]
                  ); ?></td>
                                        <td class="text-center"><?php echo anchor(
                                        'penilaian_pratama/hapus/' .
                                            $row->no_penilaian,
                                        '<span class="fa fa-trash"></span>',
                                        [
                                            'class' => 'btn btn-danger btn-sm',
                                            'title' => 'Hapus',
                                            'onclick' =>
                                                "return confirm('Apakah anda yakin hapus data ini ?')",
                                        ]
                                    ); ?></td>
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
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
