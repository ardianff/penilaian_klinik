<?php

class Penilaian_Pratama extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_penilaian_pratama');
		check_session();
	}

	function index()
	{
		$data['title'] = 'Penilaian Klinik Pratama';
		$data['data'] = $this->Model_penilaian_pratama->get_data_all();
		$this->template->load('template', 'penilaian/pratama/list', $data);
	}

	function add()
	{
		$data['anggota'] = $this->Model_penilaian_pratama->get_anggota();
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->add();
			redirect('penilaian_pratama');
		} else {
			$this->template->load('template', 'penilaian/pratama/add', $data);
		}
	}
	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->update();
			redirect('penilaian_pratama');
		} else {
			$no_penilaian = $this->uri->segment(3);
			$data['no_penilaian'] = $this->db
				->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
				->row_array();
			$this->template->load('template', 'penilaian/pratama/edit', $data);
		}
	}
	function nilai()
	{
		// $site = $this->Model_penilaian->get_setting();
		// if (isset($site['kemampuan_pelayanan']) == 'Pratama') {
		//     $this->template->load('template', 'penilaian/nilai');
		//     if (isset($_POST['submit'])) {
		//         $this->Model_penilaian_pratama->simpan_penilaian();
		//         redirect('penilaian');
		//     } else {
		//         $no_penilaian = $this->uri->segment(3);
		//         $data['no_penilaian'] = $this->db
		//             ->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
		//             ->row_array();
		//     }
		// }
		$no_penilaian = $this->uri->segment(3);
		$data['penilaian'] = $this->db
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
			->row_array();
		$this->template->load('template', 'penilaian/pratama/nilai', $data);
	}

	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->db->where('no_penilaian', $id);
		$this->db->delete('tbl_klinik');
		redirect('penilaian_pratama');
	}
	function simpan_penilaian_pratama()
	{
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->simpan_penilaian();
			$this->session->set_flashdata(
				'simpan',
				'<div class="alert alert-success alert-dismissible fade show">
				Data Penilaian Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_pratama');
		} else {
			echo 'Error';
		}
	}
}
