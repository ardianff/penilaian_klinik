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
                        <!-- <div class="card-header">
                        </div> -->
                        <!-- /.card-header -->
                        <?php echo form_open(
                            'laporan_penilaian/detail',
                            'class="form-horizontal"'
                        );
                        ?>
                        <div class="main-wrapper">

                            <div class="responsive-table">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="bulan" class="col-sm-2 col-form-label">Bulan <span
                                                style="color:red">*</span></label>
                                        <div class="col-sm-2">
                                            <?php
                                            $options = array(
                                                '' => '- Pilih -',
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
                                            );
                                            echo form_dropdown(
                                                'bulan_pilihan',
                                                $options,
                                                set_value('bulan_pilihan'),
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

                                            echo '<select id="year" required class="form-control" name="tahun_pilihan">' . "\n";
                                            for ($i_year = $year_start; $i_year <= $year_end; $i_year++) {
                                                $selected = ($user_selected_year == $i_year ? ' selected' : '');
                                                echo '<option value="' . $i_year . '"' . $selected . '>' . $i_year . '</option>' . "\n";
                                            }
                                            echo '</select>' . "\n";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kemampuan_pelayanan" class="col-sm-2 col-form-label">Kemampuan
                                            Pelayanan
                                            <span style="color:red">*</span></label>
                                        <div class="col-sm-2">
                                            <?php echo form_dropdown(
                                                'kemampuan_pelayanan',
                                                [
                                                    '' => '- Pilih -',
                                                    'Semua' => 'Semua',
                                                    'Pratama Umum' => 'Pratama Umum',
                                                    'Utama Umum' => 'Utama Umum',
                                                    'Pratama Gigi' => 'Pratama Gigi',
                                                    'Utama Gigi' => 'Utama Gigi',
                                                ],
                                                set_value('kemampuan_pelayanan'),
                                                "class='form-control' required"
                                            ); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <button type="submit" name="submit" class="btn btn-success">Get Data</button>
                                    </div>
                                    <?php if (isset($_POST['bulan_pilihan']) && isset($_POST['tahun_pilihan'])) : ?>
                                    <table id="example2" class="table table-bordered table-striped" width="auto"
                                        height="auto">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="1px">No</th>
                                                <th class="text-center" width="100px">Nama Klinik</th>
                                                <th class="text-center">Penanggung Jawab Klinik</th>
                                                <th class="text-center">Kemampuan Pelayanan</th>
                                                <th class="text-center" width="20%"">Alamat</th>
                                                <th class=" text-center">Nomor Siop</th>
                                                <th class="text-center">Masa Berlaku Hingga</th>
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
                                                <td class="text-center">
                                                    <?php echo $row->nama_perwakilan, '<br>Jabatan : ' . $row->jabatan_perwakilan; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $row->kemampuan_pelayanan, ',<br>' . $row->jenis_pelayanan_klinik; ?>
                                                </td>
                                                <td class="text-center"><?php echo $row->alamat_klinik; ?><br>Kec.
                                                    <?php echo $row->nama_kecamatan; ?>, Kel.
                                                    <?php echo $row->nama_kelurahan; ?></td>
                                                <td class="text-center"><?php if (empty($row->nomor_siop)) {
                                                                                    echo '-';
                                                                                    echo '<br><br><i class="fa-solid fa-circle-exclamation" title="' . $row->nama_klinik . ' Belum Ada SIOP"></i>';
                                                                                } else {
                                                                                    echo $row->nomor_siop;
                                                                                }
                                                                                ?></td>
                                                <td class="text-center"><?php if ($row->masa_berlaku_ijin == ("0000-00-00")) {
                                                                                    echo '-';
                                                                                    echo '<br><br><i class="fa-solid fa-circle-exclamation" title="' . $row->nama_klinik . ' Belum Input Masa Berlaku"></i>';
                                                                                } else {
                                                                                    echo $row->masa_berlaku_ijin;
                                                                                }
                                                                                ?></td>
                                                <td class="text-center"><a
                                                        onclick="cekConfirm('<?php echo site_url('laporan_penilaian/cek/' . encrypt_url($row->id_klinik)) ?>')"
                                                        href="#" class="btn btn-info btn-sm"
                                                        title="Cek Data <?php echo $row->nama_klinik ?>"><i
                                                            class=" fa-solid fa-newspaper"></i></a></td>

                                            </tr>
                                            <?php $no++;
                                                endforeach;
                                                ?>
                                        </tbody>
                                    </table>
                                    <?php endif; ?>
                                </div>
                            </div>
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