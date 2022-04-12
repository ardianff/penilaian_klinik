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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <?php echo form_open(
                            'laporan_penilaian/data',
                            'class="form-horizontal"'
                        );
                        ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="bulan" class="col-sm-2 col-form-label">Bulan <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-2">
                                    <?php echo form_dropdown(
                                        'bulan_pilihan',
                                        [
                                            '' => '- Pilih Bulan -',
                                            '1' => 'Januari',
                                            '2' => 'Februari',
                                            '3' => 'Maret',
                                            '4' => 'April',
                                            '5' => 'Mei',
                                            '6' => 'Juni',
                                            '7' => 'Juli',
                                            '8' => 'Agustus',
                                            '9' => 'September',
                                            '10' => 'Oktober',
                                            '11' => 'November',
                                            '12' => 'Desember',
                                        ],
                                        null,
                                        "class='form-control' required"
                                    ); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tahun" class="col-sm-2 col-form-label">Tahun <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-2">
                                    <?php
                                    $year_start  = 2018;
                                    $year_end = date('Y'); // current Year
                                    $user_selected_year = date('Y');

                                    echo '<select id="year" class="form-control" name="tahun_pilihan">' . "\n";
                                    for ($i_year = $year_start; $i_year <= $year_end; $i_year++) {
                                        $selected = ($user_selected_year == $i_year ? ' selected' : '');
                                        echo '<option value="' . $i_year . '"' . $selected . '>' . $i_year . '</option>' . "\n";
                                    }
                                    echo '</select>' . "\n";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <button type="submit" name="submit" class="btn btn-success">Get Data</button>
                            </div>
                            <table id="example2" class="table table-bordered table-striped " width="100%" height="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center" width="100px">Nama Klinik</th>
                                        <th class="text-center">Kemampuan Pelayanan</th>
                                        <th class="text-center">Jenis Klinik</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Anggota Penilaian</th>
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
                                        <td class="text-center"><?php echo $row->alamat_klinik; ?><br>Kec.
                                            <?php echo $row->nama_kecamatan; ?>, Kel.
                                            <?php echo $row->nama_kelurahan; ?></td>
                                        <td class="text-center"><?php echo $row->nama_anggota1; ?>,
                                            <br><?php echo $row->nama_anggota2; ?>,
                                            <br><?php echo $row->nama_anggota3; ?>,
                                            <br><?php echo $row->nama_anggota4; ?>
                                        </td>
                                        <td class="text-center"><a
                                                onclick="cekConfirm('<?php echo site_url('laporan_penilaian/cek/' . $row->id_klinik) ?>')"
                                                href="#" class="btn btn-info btn-sm"
                                                title="Cek Data <?php echo $row->nama_klinik ?>"><i
                                                    class=" fa-solid fa-newspaper"></i></a></td>

                                    </tr>
                                    <?php $no++;
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo form_close(); ?>
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