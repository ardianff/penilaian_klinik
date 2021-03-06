<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="container">
                                <div class="row justify-content-left">
                                    <div class="col-sm-10">
                                        <?php echo anchor(
											'rincian_penilaian_klinik_umum_kedua/tambah_group',
											'Tambah Group Name',
											[
												'class' => 'btn btn-success btn-sm',
											]
										); ?>
                                        <?php echo anchor(
											'rincian_penilaian_klinik_umum_kedua',
											'Form Kedua Rincian Penilaian Klinik Pratama/Utama Umum',
											[
												'class' => 'btn btn-secondary btn-sm',
											]
										); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?= $this->session->flashdata('add') ?>
                            <?= $this->session->flashdata('update') ?>
                            <?= $this->session->flashdata('delete') ?>
                            <table id="example2" class="table table-bordered table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2">No</th>
                                        <th class="text-center" rowspan="2">Group Name</th>
                                        <th class="text-center" colspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									$no = 1;
									foreach ($data as $row) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no; ?></td>
                                        <td class="text-justify"><?php echo $row->group_name; ?></td>
                                        <td class="text-center"><a
                                                onclick="editConfirm('<?php echo site_url('rincian_penilaian_klinik_umum_kedua/edit_group/' . $row->id_group) ?>')"
                                                href="#" class="btn btn-warning btn-sm"><i
                                                    class="fas fa-pencil-alt"></i></a></td>
                                        <td class="text-center"><a
                                                onclick="deleteConfirm('<?php echo site_url('rincian_penilaian_klinik_umum_kedua/hapus_group/' . $row->id_group) ?>')"
                                                href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
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
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>