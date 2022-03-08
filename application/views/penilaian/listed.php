<!-- start: Content -->
<div class="col-md-12 top-20 padding-0">
	<div class="col-md-12">
		&nbsp;<?php echo anchor('pendaftaran/add','Input Data Pasien Baru',array('class'=>'btn btn-success btn-sm'))?>
		<br>
		<br>
        <div class="panel">
            <div class="panel-heading"><h3>Data Pasien</h3></div>
            <div class="panel-body">
                <div class="responsive-table">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">No CM</th>
                                <th class="text-center">No KTP</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Keluhan Pasien</th>
                                <th class="text-center">Tanggal Kedatangan</th>
                                <th class="text-center">View</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($daftar as $row):
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $no; ?></td>
                                    <td class="text-center"><?php echo $row->no_cm; ?></td>
                                    <td class="text-center"><?php echo $row->no_ktp; ?></td>
                                    <td class="text-justify"><?php echo $row->nama_pasien; ?></td>
                                    <td class="text-center"><?php echo $row->jenis_kelamin; ?></td>
                                    <td class="text-justify"><?php echo $row->alamat_pasien; ?></td>
                                    <td class="text-justify"><?php echo $row->keluhan_pasien; ?></td>
                                    <td class="text-center"><?php echo $row->tgl_kedatangan_pasien; ?></td>
                                    <td class="text-justify"><?php echo anchor('pendaftaran/view/' . $row->no_cm, '<span class="fa fa-eye"></span>', array('class' => 'btn btn-primary btn-sm', 'title' => "View")) ?></td>
                                    <td class="text-justify"><?php echo anchor('pendaftaran/edit/' . $row->no_cm, '<span class="fa fa-pen-to-square"></span>', array('class' => 'btn btn-warning btn-sm', 'title' => "Edit")) ?></td>
                                   	<td class="text-justify"><?php echo anchor('pendaftaran/hapus/' . $row->no_cm, '<span class="fa fa-circle-trash"></span>', array('class' => 'btn btn-danger btn-sm', 'title' => "Hapus")) ?></td>
                                </tr>
                                <?php
                                $no++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>

<!-- end: content -->



<script type="text/javascript">
    function show_by_id(id_pasien) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Pendaftaran/show_by_id',
            data: 'id_pasien=' + id_pasien,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#id_pasien").val(obj.id_pasien);
                $("#no_ktp").val(obj.no_ktp);
                $("#nama_pasien").val(obj.nama_pasien);
                $("#alamat_pasien").val(obj.alamat_pasien);
                $("#keterangan").val(obj.keterangan);
                $("#jenis_pasien").val(obj.jenis_pasien);
                $("#kode_pos").val(obj.kode_pos);
            }
        })
    }

</script>
