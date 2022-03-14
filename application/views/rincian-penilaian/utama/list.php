<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><strong>Rincian Penilaian Klinik Utama</strong></h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
								&nbsp;<?php echo anchor(
            'rincian_penilaian_utama/add',
            'Input Data Rincian Penilaian',
            [
                'class' => 'btn btn-success btn-sm',
            ]
        ); ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
							<table id="example2" class="table table-bordered table-striped width="100%"">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2">No</th>
                                <th class="text-center" rowspan="2">Rincian Penilaian</th>
                                <th class="text-center" rowspan="2">Keterangan</th>
                                <th class="text-center" colspan="2">Action</th>
                            </tr>
														<tr>
															<th></th>
															<th></th>
														</tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $row): ?>
                                <tr>
                                    <td class="text-center"><?php echo $no; ?></td>
                                    <td class="text-center"><?php echo $row->rincian_penilaian; ?></td>
                                    <td class="text-center"><?php echo $row->keterangan_penilaian; ?></td>
                                    <td class="text-center"><a onclick="editConfirm('<?php echo site_url(
                                        'rincian_penilaian_utama/edit/' .
                                            $row->id_rincian_penilaian
                                    ); ?>')"
											 href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a></td>
                                   	<td class="text-center"><a onclick="deleteConfirm('<?php echo site_url(
                                        'rincian_penilaian_utama/hapus/' .
                                            $row->id_rincian_penilaian
                                    ); ?>')"
											 href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
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
