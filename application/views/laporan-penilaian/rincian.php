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
                            'laporan_penilaian/rincian',
                            'class="form-horizontal"'
                        ); ?>
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
                                            $year_end = date('Y');
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
                                        <button type="submit" name="submit" class="btn btn-success">Get
                                            Data</button>
                                    </div>
                                    <?php if (isset($_POST['bulan_pilihan']) && isset($_POST['tahun_pilihan'])) : ?>
                                    <table id="example2" class="table table-bordered table-striped" width="100%"
                                        height="auto">
                                        <thead>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Bulan</th>
                                            <th class="text-center">Tahun</th>
                                            <th class="text-center">Kemampuan Pelayanan</th>
                                            <th class="text-center">Jumlah Klinik Dinilai</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                foreach ($pratama_gigi as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no; ?></td>
                                                <td class="text-center"><?php echo $bulan ?></td>
                                                <td class="text-center"><?php echo $tahun ?></td>
                                                <td class="text-center">Pratama Gigi</td>
                                                <td class="text-center"><?php echo $row->total_klinik_pratama_gigi; ?>
                                                </td>
                                            </tr>
                                            <?php $no++;
                                                endforeach;
                                                ?>
                                            <?php
                                                $num = $no + 1;
                                                foreach ($utama_gigi as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no; ?></td>
                                                <td class="text-center"><?php echo $bulan ?></td>
                                                <td class="text-center"><?php echo $tahun ?></td>
                                                <td class="text-center">Utama Gigi</td>
                                                <td class="text-center"><?php echo $row->total_klinik_utama_gigi; ?>
                                                </td>
                                            </tr>
                                            <?php $no++;
                                                endforeach;
                                                ?>
                                            <?php
                                                $numb = $num + 1;
                                                foreach ($pratama_umum as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no; ?></td>
                                                <td class="text-center"><?php echo $bulan ?></td>
                                                <td class="text-center"><?php echo $tahun ?></td>
                                                <td class="text-center">Pratama Umum</td>
                                                <td class="text-center"><?php echo $row->total_klinik_pratama_umum ?>
                                                </td>
                                            </tr>
                                            <?php $no++;
                                                endforeach;
                                                ?>
                                            <?php
                                                $nb = $numb + 1;
                                                foreach ($utama_umum as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no; ?></td>
                                                <td class="text-center"><?php echo $bulan ?></td>
                                                <td class="text-center"><?php echo $tahun ?></td>
                                                <td class="text-center">Utama Umum</td>
                                                <td class="text-center"><?php echo $row->total_klinik_utama_umum ?></td>
                                            </tr>
                                            <?php $no++;
                                                endforeach;
                                                ?>
                                            <?php
                                                foreach ($jumlah as $jum) : ?>
                                            <tr>
                                                <td class="text-center" colspan="4">Total Klinik</td>
                                                <td class="text-center"><?php echo $jum->total_klinik_semua ?></td>
                                            </tr>
                                            <?php
                                                endforeach;
                                                ?>
                                        </tbody>
                                    </table>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <?php form_close(); ?>
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