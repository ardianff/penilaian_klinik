<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-lte/dist/js/adminlte.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3500);
});
</script>
<script type="text/javascript">
function change() {
    var x = document.getElementById('pass').type;

    if (x == 'password') {
        document.getElementById('pass').type = 'text';
        document.getElementById('show-pw').innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        document.getElementById('pass').type = 'password';
        document.getElementById('show-pw').innerHTML = '<i class="fas fa-eye"></i>';
    }
}
</script>
<script class="" type="text/javascript">
$(document).ready(function() {
    $("#submit").click(function() {
        $(".check").each(function() {
            $val = $(this).val();
            if ($val != 1) {
                $(this).popover({
                    content: "<?= form_error('username') ?>"
                });
                $(this).popover('show');
            }
        })
    })
});
$(function() {
    $('[data-toggle="popover"]').popover({
        sanitize: false
    })
});
</script>