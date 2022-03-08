<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
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
								&nbsp;<?php echo anchor('tim/add','Input Data Anggota Baru',array('class'=>'btn btn-success btn-sm'))?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
							<table id="example1" class="table table-bordered table-striped width="100%"">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2">No</th>
                                <th class="text-center" rowspan="2">Nama Anggota</th>
                                <th class="text-center" rowspan="2">NIP</th>
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
                            foreach ($daftar as $row):
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $no; ?></td>
                                    <td class="text-center"><?php echo $row->nama_anggota; ?></td>
                                    <td class="text-center"><?php echo $row->nip_anggota; ?></td>
                                    <td class="text-center"><?php echo anchor('tim/edit/' . $row->nip_anggota, '<span class="fa fa-pencil-alt"></span>', array('class' => 'btn btn-warning btn-sm', 'title' => "Edit")) ?></td>
                                   	<td class="text-center"><?php echo anchor('tim/hapus/' . $row->nip_anggota, '<span class="fa fa-trash"></span>', array('class' => 'btn btn-danger btn-sm', 'title' => "Hapus")) ?></td>
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
