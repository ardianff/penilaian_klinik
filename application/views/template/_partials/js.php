<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<!-- <script src="<?php echo base_url(); ?>assets/admin-lte/plugins/chart.js/Chart.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/demo.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/pages/dashboard3.js"></script> -->
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
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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
<script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/demo.js"></script>
<script>
var base_url = "<?= base_url(); ?>";
</script>
<?php
$url_satu = base_url('penilaian_pratama/edit/' . $klinik = $this->uri->segment(3));
$url_dua = base_url('penilaian_utama/edit/' . $klinik = $this->uri->segment(3));
$url_tiga = base_url('laporan_penilaian/cek/' . $klinik = $this->uri->segment(3));
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if ($url_satu == $actual_link || $url_dua == $actual_link || $url_tiga == $actual_link) {
    echo '<script>var id_kel = ' . $id_klinik['id_kelurahan_klinik'] . '</script>';
} else {
    echo '';
}
?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/get-kelurahan.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/function.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.signature.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/signature-pad.js"></script> -->
<script type="text/javascript">
var sig = $('#sig').signature({
    syncField: '#signature64',
    syncFormat: 'PNG'
});
$('#clear').click(function(e) {
    e.preventDefault();
    sig.signature('clear');
    $("#signature64").val('');
});
var ttd1 = $('#ttd1').signature({
    syncField: '#signature64-ttd1',
    syncFormat: 'PNG'
});
$('#cls-ttd1').click(function(e) {
    e.preventDefault();
    ttd1.signature('clear');
    $("#signature64-ttd1").val('');
});
var ttd2 = $('#ttd2').signature({
    syncField: '#signature64-ttd2',
    syncFormat: 'PNG'
});
$('#cls-ttd2').click(function(e) {
    e.preventDefault();
    ttd2.signature('clear');
    $("#signature64-ttd2").val('');
});
var ttd3 = $('#ttd3').signature({
    syncField: '#signature64-ttd3',
    syncFormat: 'PNG'
});
$('#cls-ttd3').click(function(e) {
    e.preventDefault();
    ttd3.signature('clear');
    $("#signature64-ttd3").val('');
});
var ttd4 = $('#ttd4').signature({
    syncField: '#signature64-ttd4',
    syncFormat: 'PNG'
});
$('#cls-ttd4').click(function(e) {
    e.preventDefault();
    ttd4.signature('clear');
    $("#signature64-ttd4").val('');
});
</script>
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
<script>
$(".container-foto").css({
    'position': 'absolute',
    'top': '0px',
    'display': 'none',
    'width': '100%',
    'height': 'auto',
    // 'background': 'rgba(0,0,0,0.1)',
});

$(".popup").css({
    'position': 'relative',
    'top': '80px',
    'width': '700px',
    'margin': 'auto',
    'border': '10px solid grey',
    'z-index': '10000',
    'background': 'white'
});

$("#close").css({
    'position': 'absolute',
    'top': '-15px',
    'right': '-15px',
    'font-size': '20px'
});
// Show

$(".gallery img").click(function() {

    $(".container-foto").fadeIn("slow");

    var url = $(this).attr('src');

    $(".imageShow").html('<img src="' + url + '">');

    $(".imageShow img").css({
        'width': '100%'
    });

})



// Close

$("#close").click(function() {

    $(".container-foto").fadeOut("slow");

})
</script>