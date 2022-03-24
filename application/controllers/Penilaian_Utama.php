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
		$data['title'] = 'Input Data Klinik Utama';
		$data['kecamatan'] = $this->Model_penilaian_utama->get_data_kecamatan();
		$data['anggota'] = $this->Model_penilaian_utama->get_anggota();
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_utama->add();
			$this->session->set_flashdata(
				'add',
				'<div class="alert alert-success alert-dismissible fade show">
				Data Klinik Utama Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_utama');
		} else {
			$this->template->load('template', 'penilaian/utama/add', $data);
		}
	}
	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_utama->update();
			$this->session->set_flashdata(
				'update',
				'<div class="alert alert-warning alert-dismissible fade show">
				Data Penilaian Klinik Utama Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_utama');
		} else {
			$no_penilaian = $this->uri->segment(3);
			$data['no_penilaian'] = $this->db
				->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
				->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
				->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
				->row_array();
			$data['title'] = 'Edit Data Klinik Utama';
			$data['anggota'] = $this->Model_penilaian_utama->get_anggota();
			$data['kecamatan'] = $this->Model_penilaian_utama->get_data_kecamatan();
			$this->template->load('template', 'penilaian/utama/edit', $data);
		}
	}
	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->db->where('no_penilaian', $id);
		$this->db->delete('tbl_klinik');
		$this->session->set_flashdata(
			'delete',
			'<div class="alert alert-danger alert-dismissible fade show">
			Data Klinik Utama Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('penilaian_utama');
	}
	function nilai()
	{
		$data['title'] = 'Form Pertama Penilaian Klinik Utama';
		$no_penilaian = $this->uri->segment(3);
		$data['penilaian'] = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
			->row_array();
		$data['rincian'] = $this->Model_penilaian_utama->get_rincian_penilaian();
		$this->template->load('template', 'penilaian/utama/nilai', $data);

		if (isset($_POST['submit'])) {
			$this->Model_penilaian_utama->simpan_penilaian_utama_pertama();
			$this->session->set_flashdata(
				'simpan',
				'<div class="alert alert-secondary alert-dismissible fade show">
				Penilaian Klinik Utama Form Kedua' . $this->input->post('no_penilaian') . ' Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			$no_penilaian = $this->input->post('no_penilaian');
			redirect('penilaian_utama/nilai_kedua/' . $no_penilaian);
		} else {
			// show_404();
		}
	}
	function nilai_kedua()
	{
		$data['title'] = 'Form Kedua Penilaian Klinik Utama';
		$no_penilaian = $this->uri->segment(3);
		$data['penilaian'] = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
			->row_array();
		$data['rincian'] = $this->Model_penilaian_utama->get_question_next();
		$this->template->load('template', 'penilaian/utama/nilai-kedua', $data);

		if (isset($_POST['submit'])) {
			$this->Model_penilaian_utama->simpan_penilaian_pratama_kedua();
			$this->session->set_flashdata(
				'simpan',
				'<div class="alert alert-secondary alert-dismissible fade show">
				Penilaian Klinik Utama Form Pertama' . $this->input->post('no_penilaian') . ' Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			$no_penilaian = $this->input->post('no_penilaian');
			redirect('penilaian_pratama/nilai_ketiga/' . $no_penilaian);
		} else {
			// show_404();
		}
	}
	function nilai_ketiga()
	{
		$data['title'] = 'Form Ketiga Penilaian Klinik Utama';
		$no_penilaian = $this->uri->segment(3);
		$data['penilaian'] = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
			->row_array();
		$this->template->load('template', 'penilaian/utama/nilai-ketiga', $data);
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_utama->simpan_penilaian_utama_ketiga();
			// $this->Model_penilaian_pratama->update_status();
			$this->session->set_flashdata(
				'simpan',
				'<div class="alert alert-secondary alert-dismissible fade show">
				Penilaian Klinik Utama' . $this->input->post('no_penilaian') . ' Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_utama');
		} else {
			// $this->template->load('template', 'penilaian/pratama/nilai-ketiga', $data);
		}
	}
}
