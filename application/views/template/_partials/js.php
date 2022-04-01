<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/pages/dashboard3.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js">
</script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script
    src="<?php echo base_url(); ?>assets/admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js">
</script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js">
</script>
<!-- Tempusdominus Bootstrap 4 -->
<script
    src="<?php echo base_url(); ?>assets/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js">
</script>
<!-- BS-Stepper -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/demo.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/signature-pad.js"></script> -->
<!-- Page specific script -->
<script type="text/javascript">
$(document).ready(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": true,
        "paging": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "pageLength": 25,
        "lengthMenu": [10, 25, 50, 100, 200, 300],
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
    });
});
$(document).ready(function() {
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3500);
});
</script>
<script type="text/javascript">
function deleteConfirm(url) {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
};

function editConfirm(url) {
    $('#btn-edit').attr('href', url);
    $('#editModal').modal();
};

function saveConfirm(url) {
    $('#btn-save').attr('href', url);
    $('#saveModal').modal();
};

function logoutConfirm(url) {
    $('#btn-logout').attr('href', url);
    $('#logoutModal').modal();
};

function penilaianConfirm(url) {
    $('#btn-penilaian').attr('href', url);
    $('#penilaianModal').modal();
};

function goBack() {
    window.history.back();
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    // var a =

    $("#id_kelurahan").hide();
    $("#id_isian_kelurahan").hide();

    loadKelurahan();
});

function loadKelurahan() {
    $("#id_kecamatan").change(function() {
        var getkecamatan = $("#id_kecamatan").val();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?= base_url(); ?>/penilaian_pratama/get_data_kelurahan",
            data: {
                kecamatan: getkecamatan
            },
            success: function(data) {
                console.log(data);
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].id_kelurahan + '">' + data[i]
                        .nama_kelurahan + '</option>';
                }
                $("#id_kelurahan").html(html);
                $("#id_isian_kelurahan").show();
                $("#id_kelurahan").show();
            }
        });

    });
}
</script>
<!-- <script>
	// angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
	$(document).ready(function() {
		setTimeout(function() {
			$('#helloModal').modal('show');
		}, 500);
	});
	// angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
	setTimeout(f
unction() {
		$('#helloMo
dal').modal('
remove');








	}, 3000);
</script> -->