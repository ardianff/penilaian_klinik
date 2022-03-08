<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
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
								&nbsp;<?php echo anchor('penilaian/add','Input Data Penilaian Baru',array('class'=>'btn btn-success btn-sm'))?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
							<table id="example1" class="table table-bordered table-striped width="100%"">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2">No</th>
                                <th class="text-center" rowspan="2">Nama Klinik</th>
                                <th class="text-center" rowspan="2">Kemampuan Pelayanan</th>
                                <th class="text-center" rowspan="2">Jenis Klinik</th>
                                <th class="text-center" rowspan="2">Alamat</th>
                                <th class="text-center" rowspan="2">Anggota Penilaian</th>
                                <th class="text-center" colspan="3">Action</th>
                            </tr>
														<tr>
																<td></td>
																<td></td>
																<td></td>
															</tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($daftar as $row):
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $no; ?></td>
                                    <td class="text-center"><?php echo $row->nama_klinik; ?></td>
                                    <td class="text-center"><?php echo $row->kemampuan_pelayanan; ?></td>
                                    <td class="text-center"><?php echo $row->jenis_pelayanan_klinik; ?></td>
                                    <td class="text-center"><?php echo $row->alamat_klinik; ?></td>
                                    <td class="text-center"><?php echo $row->nama_anggota1; ?>, <?php echo $row->nama_anggota2; ?></td>
                                    <td class="text-center"><?php echo anchor('penilaian/view/' . $row->id_penilaian, '<span class="fa fa-tasks"></span>', array('class' => 'btn btn-primary btn-sm', 'title' => "Penilaian")) ?></td>
                                    <td class="text-center"><?php echo anchor('penilaian/edit/' . $row->id_penilaian, '<span class="fa fa-eye"></span>', array('class' => 'btn btn-warning btn-sm', 'title' => "Edit")) ?></td>
                                   	<td class="text-center"><?php echo anchor('penilaian/hapus/' . $row->id_penilaian, '<span class="fa fa-trash"></span>', array('class' => 'btn btn-danger btn-sm', 'title' => "Hapus")) ?></td>
                                </tr>
                                <?php
                                $no++;
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
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
