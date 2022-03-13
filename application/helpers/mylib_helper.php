<?php

function cmb_dinamis(
    $name,
    $table,
    $field,
    $pk,
    $selected = null,
    $extra = null
) {
    $ci = &get_instance();
    $cmb = "<select name='$name' class='form-control' $extra>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $row) {
        $cmb .= "<option value='" . $row->$pk . "'";
        $cmb .= $selected == $row->$pk ? 'selected' : '';
        $cmb .= '>' . $row->$field . '</option>';
    }
    $cmb .= '</select>';
    return $cmb;
}

function check_session()
{
    $ci = &get_instance();
    $session = $ci->session->userdata('status_login');
    if ($session != 'ok') {
        $ci->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show">
		Silahkan Login terlebih dahulu !
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
        );
        redirect('auth');
    }
}
function no_penilaian()
{
    $txt = 'TASK';
    $ci = &get_instance();
    $q = $ci->db->query(
        'SELECT MAX(RIGHT(no_penilaian,4)) AS kd_max FROM tbl_klinik'
    );
    $kd = '';
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $k) {
            $tmp = ((int) $k->kd_max) + 1;
            $kd = sprintf('%04s', $tmp);
        }
    } else {
        $kd = '0001';
    }
    date_default_timezone_set('Asia/Jakarta');
    return $txt . date('dmy') . $kd;
}
function greetings()
{
    //ubah timezone menjadi jakarta
    date_default_timezone_set('Asia/Jakarta');

    //ambil jam dan menit
    $jam = date('H:i');

    //atur salam menggunakan IF
    if ($jam > '05:30' && $jam < '10:00') {
        $salam = 'Pagi';
    } elseif ($jam >= '10:00' && $jam < '15:00') {
        $salam = 'Siang';
    } elseif ($jam < '18:00') {
        $salam = 'Sore';
    } else {
        $salam = 'Malam';
    }
    //tampilkan pesan
    echo 'Selamat ' . $salam;
}
function kode_user()
{
    $ci = &get_instance();
    $ci->db->select('RIGHT(tbl_user.kode_user,5) as kode_user', false);
    $ci->db->order_by('kode_user', 'DESC');
    $ci->db->limit(1);
    $query = $ci->db->get('tbl_user');
    if ($query->num_rows() != 0) {
        $data = $query->row();
        $kode = intval($data->kode_user) + 1;
    } else {
        $kode = 1;
    }
    $batas = str_pad($kode, 5, '0', STR_PAD_LEFT);
    date_default_timezone_set('Asia/Jakarta');
    $kodetampil = 'USR' . date('dmy') . $batas;

    return $kodetampil;
}
function kode_anggota()
{
    $ci = &get_instance();
    $ci->db->select('RIGHT(tbl_anggota.kode_anggota,5) as kode_anggota', false);
    $ci->db->order_by('kode_anggota', 'DESC');
    $ci->db->limit(1);
    $query = $ci->db->get('tbl_anggota');
    if ($query->num_rows() != 0) {
        $data = $query->row();
        $kode = intval($data->kode_anggota) + 1;
    } else {
        $kode = 1;
    }
    $batas = str_pad($kode, 5, '0', STR_PAD_LEFT);
    $kodetampil = 'DKK' . $batas;

    return $kodetampil;
}

?>
