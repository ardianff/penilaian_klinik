<?php

class Penilaian_Utama extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_penilaian_utama');
		check_session();
	}

	function index()
	{
		$data['title'] = 'Penilaian Klinik Utama';
		$data['data'] = $this->Model_penilaian_utama->get_klinik_utama();
		$this->template->load('template', 'penilaian/utama/list', $data);
	}

	function add()
	{
		$data['anggota'] = $this->Model_penilaian_utama->get_anggota();
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_utama->add();
			redirect('penilaian_utama');
		} else {
			$this->template->load('template', 'penilaian/utama/add', $data);
		}
	}
	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->Model_penilaian->update();
			redirect('penilaian');
		} else {
			$no_penilaian = $this->uri->segment(3);
			$data['no_penilaian'] = $this->db
				->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
				->row_array();
			$this->template->load('template', 'penilaian/edit', $data);
		}
	}
	function nilai()
	{
		// $site = $this->Model_penilaian->get_setting();
		// if (isset($site['kemampuan_pelayanan']) == 'Pratama') {
		// $this->template->load('template', 'penilaian/nilai');
		$data['data'] = $this->db
			->query(
				'SELECT ts.no_penilaian,ts.nama_admin, ts.nama_klinik, ts.kemampuan_pelayanan, ts.jenis_pelayanan_klinik,ts.alamat_klinik, ts.nama_anggota1, ts.nama_anggota2,ts.nama_anggota3,ts.nama_anggota4 FROM tbl_klinik as ts where kemampuan_pelayanan="utama"'
			)
			->result();
		if (isset($_POST['submit'])) {
			$this->Model_penilaian->update();
			redirect('penilaian');
		} else {
			$rincian['daftar'] = $this->db
				->query(
					'SELECT ts.rincian_penilaian, ts.keterangan_penilaian FROM tbl_rincian_penilaian_utama as ts'
				)
				->result();
			$this->template->load(
				'template',
				'penilaian/utama/nilai',
				$rincian
			);
		}
		// }
	}

	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->db->where('no_penilaian', $id);
		$this->db->delete('tbl_klinik');
		redirect('penilaian');
	}
}
