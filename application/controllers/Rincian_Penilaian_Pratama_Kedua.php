<?php
class Rincian_penilaian_pratama_kedua extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_rincian_penilaian_pratama');
		check_session();
	}
	function index()
	{
		$data['title'] = 'Rincian Penilaian Klinik Pratama';
		$data['data'] = $this->Model_rincian_penilaian_pratama->get_rincian_penilaian_klinik_pratama_kedua();
		$this->template->load(
			'template',
			'rincian-penilaian-kedua/pratama/list',
			$data
		);
	}
	function add()
	{
		if (isset($_POST['submit'])) {
			$this->Model_rincian_penilaian_pratama->simpan();
			$this->session->set_flashdata(
				'add',
				'<div class="alert alert-success alert-dismissible fade show">
				Data Rincian Penilaian Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('rincian_penilaian_pratama_kedua');
		} else {
			$data['title'] = 'Tambah Rincian Penilaian Klinik Pratama';
			$data['data'] = $this->Model_rincian_penilaian_pratama->get_group_penilaian_pratama();
			$this->template->load('template', 'rincian-penilaian-kedua/pratama/add', $data);
		}
		// $this->form_validation->set_rules(
		// 	'rincian_penilaian',
		// 	'Rincian Penilaian',
		// 	'required|xss_clean|trim|min_length[5]',
		// 	[
		// 		'required' => 'Rincian Penilaian Wajib di isi',
		// 		'min_length' => 'Rincian Penilaian berisi minimal 5 karakter',
		// 	]
		// );
		// $this->form_validation->set_rules(
		// 	'jumlah_penilaian',
		// 	'Jumlah Penilaian',
		// 	'xss_clean|trim|min_length[1]|required',
		// 	[
		// 		'min_length' => 'Jumlah Penilaian berisi minimal 1 karakter',
		// 		'required' => 'Jumlah Penilaian Wajib di isi',
		// 	]
		// );
		// $this->form_validation->set_rules(
		// 	'satuan',
		// 	'Satuan',
		// 	'xss_clean|trim|min_length[3]|required',
		// 	[
		// 		'min_length' => 'Satuan berisi minimal 3 karakter',
		// 		'required' => 'Satuan Penilaian Wajib di isi',
		// 	]
		// );
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Tambah Rincian Penilaian Klinik Pratama';
			$data['data'] = $this->Model_rincian_penilaian_pratama->get_group_penilaian_pratama();
			$this->template->load('template', 'rincian-penilaian-kedua/pratama/add', $data);
		} else {
			if (isset($_POST['submit'])) {
				$this->Model_rincian_penilaian_pratama->simpan();
				$this->session->set_flashdata(
					'add',
					'<div class="alert alert-success alert-dismissible fade show">
					Data Rincian Penilaian Berhasil Disimpan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
				);
				redirect('rincian_penilaian_pratama_kedua');
			} else {
				$data['title'] = 'Tambah Rincian Penilaian Klinik Pratama';
				$data['data'] = $this->Model_rincian_penilaian_pratama->get_group_penilaian_pratama();
				$this->template->load('template', 'rincian-penilaian-kedua/pratama/add', $data);
			}
		}
	}
	// function edit()
	// {
	//     if (isset($_POST['submit'])) {
	//         $this->Model_rincian_penilaian_pratama->update();
	//         redirect('rincian_penilaian_pratama');
	//     } else {
	//         $id_rincian_penilaian = $this->uri->segment(3);
	//         $data['rincian'] = $this->db
	//             ->get_where('tbl_rincian_penilaian_pratama', [
	//                 'id_rincian_penilaian' => $id_rincian_penilaian,
	//             ])
	//             ->row_array();
	//         $this->template->load(
	//             'template',
	//             'rincian-penilaian/pratama/edit',
	//             $data
	//         );
	//     }
	// }
	function edit($id)
	{
		$data['rincian'] = $this->Model_rincian_penilaian_pratama->getById($id);
		$this->template->load(
			'template',
			'rincian-penilaian/pratama/edit',
			$data
		);
	}
	function update()
	{
		$this->form_validation->set_rules(
			'rincian_penilaian',
			'Rincian Penilaian',
			'required|xss_clean|trim|min_length[5]',
			[
				'required' => 'Rincian Penilaian Wajib di isi',
				'min_length' => 'Rincian Penilaian berisi minimal 5 karakter',
			]
		);
		$this->form_validation->set_rules(
			'keterangan_penilaian',
			'Keterangan',
			'xss_clean|trim|min_length[5]',
			[
				'min_length' =>
				'Keterangan Penilaian berisi minimal 5 karakter',
			]
		);
		if ($this->form_validation->run() == true) {
			$id = $this->input->post('id_rincian_penilaian');
			$data['rincian_penilaian'] = $this->input->post(
				'rincian_penilaian'
			);
			$data['keterangan_penilaian'] = $this->input->post(
				'keterangan_penilaian'
			);
			$this->Model_rincian_penilaian_pratama->update($data, $id);
			$this->session->set_flashdata(
				'update',
				'<div class="alert alert-warning alert-dismissible fade show">
				Data Rincian Penilaian Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('rincian_penilaian_pratama');
		} else {
			$id = $this->input->post('id_rincian_penilaian');
			$data['rincian'] = $this->Model_rincian_penilaian_pratama->getById(
				$id
			);
			$this->template->load(
				'template',
				'rincian-penilaian/pratama/edit',
				$data
			);
		}
	}
	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_rincian_penilaian', $id);
		$this->db->delete('tbl_rincian_penilaian_pratama');
		$this->session->set_flashdata(
			'delete',
			'<div class="alert alert-danger alert-dismissible fade show">
			Data Rincian Penilaian Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('rincian_penilaian_pratama');
	}
}
