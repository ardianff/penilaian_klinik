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
		$data['data'] = $this->Model_penilaian_pratama->get_data_pratama();
		$this->template->load('template', 'penilaian/pratama/list', $data);
	}

	function add()
	{
		$data['title'] = 'Input Data Klinik Pratama';
		$data['kecamatan'] = $this->Model_penilaian_pratama->get_data_kecamatan();
		$data['anggota'] = $this->Model_penilaian_pratama->get_anggota();
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->add();
			$this->session->set_flashdata(
				'add',
				'<div class="alert alert-success alert-dismissible fade show">
				Data Penilaian Klinik Pratama Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_pratama');
		} else {
			$this->template->load('template', 'penilaian/pratama/add', $data);
		}
	}
	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->update();
			$this->session->set_flashdata(
				'update',
				'<div class="alert alert-warning alert-dismissible fade show">
				Data Klinik Pratama Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_pratama');
		} else {
			$no_penilaian = $this->uri->segment(3);
			$data['no_penilaian'] = $this->db
				->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
				->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
				->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
				->row_array();
			$data['title'] = 'Edit Data Penilaian Klinik Pratama';
			$data['kecamatan'] = $this->Model_penilaian_pratama->get_data_kecamatan();
			$this->template->load('template', 'penilaian/pratama/edit', $data);
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
			Data Penilaian Klinik Pratama Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('penilaian_pratama');
	}
	function get_data_kelurahan()
	{
		$id_kecamatan = $this->input->post('kecamatan');
		$get_data_kel = $this->Model_penilaian_pratama->get_data_kelurahan($id_kecamatan);

		echo json_encode($get_data_kel);
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
		$data['title'] = 'Form Pertama Penilaian Klinik Pratama';
		$no_penilaian = $this->uri->segment(3);
		$data['penilaian'] = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
			->row_array();
		$this->template->load('template', 'penilaian/pratama/nilai', $data);

		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->simpan_penilaian_pratama_pertama();
			$this->session->set_flashdata(
				'simpan',
				'<div class="alert alert-secondary alert-dismissible fade show">
				Penilaian Klinik Pratama Form Pertama' . $this->input->post('no_penilaian') . ' Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			$no_penilaian = $this->input->post('no_penilaian');
			redirect('penilaian_pratama/nilai_kedua/' . $no_penilaian);
		} else {
			// show_404();
		}
	}
	function nilai_kedua()
	{
		$data['title'] = 'Form Kedua Penilaian Klinik Pratama';
		$no_penilaian = $this->uri->segment(3);
		$data['penilaian'] = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
			->row_array();
		$data['rincian'] = $this->Model_penilaian_pratama->get_question_next();
		$this->template->load('template', 'penilaian/pratama/nilai-kedua', $data);

		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->simpan_penilaian_pratama_kedua();
			$this->session->set_flashdata(
				'simpan',
				'<div class="alert alert-secondary alert-dismissible fade show">
				Penilaian Klinik Pratama Form Kedua Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			$no_penilaian = $this->input->post('no_penilaian');
			redirect('penilaian_pratama/nilai_kedua/' . $no_penilaian);
		} else {
			// show_404();
		}
	}

	function nilai_ketiga()
	{
		$data['title'] = 'Form Ketiga Penilaian Klinik Pratama';
		$no_penilaian = $this->uri->segment(3);
		$data['penilaian'] = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian])
			->row_array();
		$this->template->load('template', 'penilaian/pratama/nilai-ketiga', $data);
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->simpan_penilaian_pratama_ketiga();
			// $this->Model_penilaian_pratama->update_status();
			$this->session->set_flashdata(
				'simpan',
				'<div class="alert alert-secondary alert-dismissible fade show">
				Penilaian Klinik Pratama' . $this->input->post('no_penilaian') . ' Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_pratama');
		} else {
			// $this->template->load('template', 'penilaian/pratama/nilai-ketiga', $data);
		}
	}
	// public function upload()
	// {
	// 	$folderPath = "assets/tanda-tangan";
	// 	$image_parts = explode(";base64,", $this->input->post('signed'));
	// 	$image_type_aux = explode("image/", $image_parts[0]);
	// 	$image_type = $image_type_aux[1];
	// 	$image_base64 = base64_decode($image_parts[1]);
	// 	$file = $folderPath . uniqid() . '.' . $image_type;

	// 	file_put_contents($file, $image_base64);
	// 	echo "<h3><i>Upload Tanda Tangan Berhasil...</i></h3>";
	// }
}
