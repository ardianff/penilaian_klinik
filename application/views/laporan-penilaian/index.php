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
                        ); ?>
                        <div class="card-body">
                            <?= $this->session->flashdata('add') ?>
                            <?= $this->session->flashdata('update') ?>
                            <?= $this->session->flashdata('delete') ?>
                            <?= $this->session->flashdata('simpan') ?>
                            <?= $this->session->flashdata('nilai') ?>
                            <div class="form-group row">
                                <label for="bulan" class="col-sm-2 col-form-label">Bulan <span
                                        style="color:red">*</span></label>
                                <div class="col-sm-2">
                                    <?php echo form_dropdown(
                                        'bulan_pilihan',
                                        [
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