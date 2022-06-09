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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            &nbsp;<?php echo anchor('penilaian_klinik_umum/add', 'Input Data Klinik Baru', [
                                        'class' => 'btn btn-success btn-sm',
                                    ]); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="main-wrapper">
                            <div class="responsive-table">
                                <div class="card-body">
                                    <?= $this->session->flashdata('add') ?>
                                    <?= $this->session->flashdata('update') ?>
                                    <?= $this->session->flashdata('delete') ?>
                                    <?= $this->session->flashdata('simpan') ?>
                                    <?= $this->session->flashdata('nilai') ?>
                                    <table id="example2" class="table table-bordered table-striped " width="100%"
                                        height="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center" width="auto">Nama Klinik</th>
                                                <th class="text-center">Kemampuan Pelayanan</th>
                                                <th class="text-center">Jenis Klinik</th>
                                                <th class="text-center">Tgl Visitasi</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center" width="25%">Anggota Penilai</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no; ?></td>
                                                <td class="text-center"><?php echo $row->nama_klinik; ?><br><br>
                                                    <?php if ($row->status_penilaian == "Sudah") {
                                                            echo '<button type="button" class="btn btn-block bg-gradient-success" title="' . $row->nama_klinik . ' Sudah dilakukan Penilaian">Sudah Dinilai</button>';
                                                        } else if ($row->status_penilaian == "Sedang") {
                                                            echo '<button type="button" class="btn btn-block bg-gradient-warning" title="' . $row->nama_klinik . ' Belum Selesai dilakukan Penilaian">Sedang Dinilai</button>';
                                                        } else {
                                                            echo '<button type="button" class="btn btn-block bg-gradient-danger" title="' . $row->nama_klinik . ' Belum dilakukan Penilaian">Belum Dinilai</button>';
                                                        } ?>
                                                </td>
                                                <td class="text-center"><?php echo $row->kemampuan_pelayanan; ?></td>
                                                <td class="text-center"><?php echo $row->jenis_pelayanan_klinik; ?></td>
                                                <td class="text-center">
                                                    <?php echo date('d-m-Y', strtotime($row->tgl_visitasi)); ?></td>
                                                <td class="text-center"><?php echo $row->alamat_klinik; ?><br>Kec.
                                                    <?php echo $row->nama_kecamatan; ?>, Kel.
                                                    <?php echo $row->nama_kelurahan; ?></td>
                                                <td class="text-left"><?php echo $row->nama_anggota1; ?>
                                                    <br><?php echo $row->nama_anggota2; ?>
                                                    <br><?php echo $row->nama_anggota3; ?>
                                                    <br><?php echo $row->nama_anggota4; ?>
                                                    <br><?php echo $row->nama_anggota5; ?>
                                                    <br><?php echo $row->nama_anggota6; ?>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <!-- <button type="button" class="btn btn-danger"><i class="fa-solid fa-ellipsis-stroke-vertical"></i></button> -->
                                                        <button type="button"
                                                            class="btn btn-success btn-sm dropdown-toggle dropdown-hover jedatombol"
                                                            data-toggle="dropdown"
                                                            title="Pilihan Menu <?php echo $row->nama_klinik; ?>">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                            <i class="fa-solid fa-ellipsis-stroke-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu" role="menu">
                                                            <a class="dropdown-item"
                                                                href="<?php echo site_url('penilaian_klinik_umum/print/' . $row->id_klinik); ?>"
                                                                target="_blank">Print</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item"
                                                                href="<?php echo site_url('penilaian_klinik_umum/export_pdf/' . $row->id_klinik); ?>"
                                                                target="_blank">Export PDF</a>
                                                        </div>
                                                    </div>
                                                    <a onclick="penilaianConfirm('<?php echo site_url('penilaian_klinik_umum/nilai/' . $row->id_klinik) ?>')"
                                                        href="#" title="Penilaian <?php echo $row->nama_klinik ?>"
                                                        class="btn btn-primary btn-sm jedatombol"><i
                                                            class="fa-solid fa-book"></i></a>
                                                    <a onclick="editConfirm('<?php echo site_url('penilaian_klinik_umum/edit/' . $row->id_klinik); ?>')"
                                                        href="#" class="btn btn-warning btn-sm jedatombol"
                                                        title="Edit Data <?php echo $row->nama_klinik ?>"><i
                                                            class=" fas fa-pencil-alt"></i></a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('penilaian_klinik_umum/hapus/' . $row->id_klinik) ?>')"
                                                        href="#" class="btn btn-danger btn-sm jedatombol"
                                                        title="Hapus Data <?php echo $row->nama_klinik ?>"><i
                                                            class=" fa-regular fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                            <?php $no++;
                                            endforeach;
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
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>