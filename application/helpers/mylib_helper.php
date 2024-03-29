<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

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
		Silahkan Sign In terlebih dahulu !
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);
		redirect('auth');
	}
}
function check_sudah_login()
{
	$ci = &get_instance();
	$session = $ci->session->userdata('status_login');
	$level = $ci->session->userdata('level_user');
	if ($session == 'ok') {
		redirect('dashboard');
	}
}
function check_level()
{
	$ci = &get_instance();
	$level = $ci->session->userdata('level_user');
	if ($level == 'Penilai') {
		show_404();
	}
}
function id_klinik_pratama()
{
	$ci = &get_instance();
	$q = $ci->db->query('SELECT MAX(RIGHT(id_klinik,2)) AS kd_max FROM tbl_klinik');
	$kd = '';
	if ($q->num_rows() > 0) {
		foreach ($q->result() as $k) {
			$tmp = 100;
			$tmp = ((int) $k->kd_max) + 1;
			$kd = sprintf('%06s', $tmp);
		}
	} else {
		$kd = '001';
	}
	return "PR" . $kd;
}
function id_klinik_utama()
{
	$ci = &get_instance();
	$q = $ci->db->query('SELECT MAX(RIGHT(id_klinik,2)) AS kd_max FROM tbl_klinik');
	$kd = '';
	if ($q->num_rows() > 0) {
		foreach ($q->result() as $k) {
			$tmp = 100;
			$tmp = ((int) $k->kd_max) + 1;
			$kd = sprintf('%06s', $tmp);
		}
	} else {
		$kd = '001';
	}
	return "UT" . $kd;
}
function no_penilaian_pratama()
{
	$txt = 'TASK-PRTM';
	date_default_timezone_set('Asia/Jakarta');
	return $txt . date('dmY');
}
function no_penilaian_utama()
{
	$txt = 'TASK-UTM';
	date_default_timezone_set('Asia/Jakarta');
	return $txt . date('dmY');
}
function greetings()
{
	//ubah timezone menjadi jakarta
	date_default_timezone_set('Asia/Jakarta');

	//ambil jam dan menit
	$jam = date('H:i');
	// $salam = "alayekum";
	//atur salam menggunakan IF
	if ($jam >= '00:00' && $jam < '11:00') {
		$salam = 'Pagi';
	} elseif ($jam >= '11:00' && $jam < '15:00') {
		$salam = 'Siang';
	} elseif ($jam >= '15:00' && $jam < '18:00') {
		$salam = 'Sore';
	} else if ($jam >= '18:00' && $jam <= '23:59') {
		$salam = 'Malam';
	} else {
		$salam = 'Datang';
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
function hari_ini()
{
	$hari = date("D");

	switch ($hari) {
		case 'Sun':
			$hari_ini = "Minggu";
			break;

		case 'Mon':
			$hari_ini = "Senin";
			break;

		case 'Tue':
			$hari_ini = "Selasa";
			break;

		case 'Wed':
			$hari_ini = "Rabu";
			break;

		case 'Thu':
			$hari_ini = "Kamis";
			break;

		case 'Fri':
			$hari_ini = "Jumat";
			break;

		case 'Sat':
			$hari_ini = "Sabtu";
			break;

		default:
			$hari_ini = "Tidak di ketahui";
			break;
	}

	return $hari_ini;
}
function tanggal_sekarang()
{
	$tanggal = date("d");
	return $tanggal;
}

function penyebut($nilai)
{
	$nilai = abs($nilai);
	$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	$temp = "";
	if ($nilai < 12) {
		$temp = " " . $huruf[$nilai];
	} else if ($nilai < 20) {
		$temp = penyebut($nilai - 10) . " belas";
	} else if ($nilai < 100) {
		$temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
	} else if ($nilai < 200) {
		$temp = " seratus" . penyebut($nilai - 100);
	} else if ($nilai < 1000) {
		$temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
	} else if ($nilai < 2000) {
		$temp = " seribu" . penyebut($nilai - 1000);
	} else if ($nilai < 1000000) {
		$temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
	} else if ($nilai < 1000000000) {
		$temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
	} else if ($nilai < 1000000000000) {
		$temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
	} else if ($nilai < 1000000000000000) {
		$temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
	}
	return $temp;
}

function terbilang($nilai)
{
	if ($nilai < 0) {
		$hasil = "minus " . trim(penyebut($nilai));
	} else {
		$hasil = trim(penyebut($nilai));
	}
	return $hasil;
}

function bulan_sekarang()
{
	$bulan = array(
		'01' => 'Januari',
		'02' => 'Februari',
		'03' => 'Maret',
		'04' => 'April',
		'05' => 'Mei',
		'06' => 'Juni',
		'07' => 'Juli',
		'08' => 'Agustus',
		'09' => 'September',
		'10' => 'Oktober',
		'11' => 'November',
		'12' => 'Desember',
	);
	return $bulan[date('m')];
}
function nama_bulan($nama_bulan)
{
	switch ($nama_bulan) {
		case 'January':
			return 'Januari';
		case 'February':
			return 'Februari';
		case 'March':
			return 'Maret';
		case 'April':
			return 'April';
		case 'May':
			return 'Mei';
		case 'June':
			return 'Juni';
		case 'July':
			return 'Juli';
		case 'August':
			return 'Agustus';
		case 'September':
			return 'September';
		case 'October':
			return 'Oktober';
		case 'November':
			return 'November';
		case 'December':
			return 'Desember';
		default:
			return 'bulan tidak valid';
	}
}
function tahun_sekarang()
{
	return date('Y');
}
function datetime_now()
{
	date_default_timezone_set('Asia/Jakarta');
	return date('Y-m-d H:i:s');
}
function encrypt_url($string)
{
	$output = false;
	/*
     * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code
     */
	$security       = parse_ini_file("security.ini");
	$secret_key     = $security["encryption_key"];
	$secret_iv      = $security["iv"];
	$encrypt_method = $security["encryption_mechanism"];
	// hash
	$key    = hash("sha256", $secret_key);
	// iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
	$iv     = substr(hash("sha256", $secret_iv), 0, 16);
	//do the encryption given text/string/number
	$result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	$output = base64_encode($result);
	return $output;
}
function decrypt_url($string)
{
	$output = false;
	/*
     * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code
     */
	$security       = parse_ini_file("security.ini");
	$secret_key     = $security["encryption_key"];
	$secret_iv      = $security["iv"];
	$encrypt_method = $security["encryption_mechanism"];
	// hash
	$key    = hash("sha256", $secret_key);
	// iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
	$iv = substr(hash("sha256", $secret_iv), 0, 16);
	//do the decryption given text/string/number
	$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	return $output;
}