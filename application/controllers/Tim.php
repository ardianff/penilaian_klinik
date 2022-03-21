<?php
class Tim extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_tim');
		check_session();
	}
	function index()
	{
		$data['title'] = 'Anggota Penilai Klinik';
		$data['data'] = $this->Model_tim->getAll();
		$data['user'] = $this->db
			->get_where('tbl_user', ['id_user' => $this->session->userdata('id_user')])
			->row_array();
		$this->template->load('template', 'tim/list', $data);
	}
	function add()
	{
		$this->form_validation->set_rules(
			'nama_anggota',
			'Nama Penilai',
			'required|trim|min_length[5]|max_length[50]',
			[
				'required' => 'Nama Penilai Wajib di isi',
				'min_length' =>
				'Nama Penilai yang diinputkan minimal 5 karakter',
				'max_length' =>
				'Nama Penilai yang diinputkan maksimal 50 karakter',
			]
		);
		$this->form_validation->set_rules(
			'nip_anggota',
			'NIP',
			'required|trim|min_length[18]|max_length[20]|is_unique[tbl_user.nip_user]',
			[
				'required' => 'NIP Penilai Wajib di isi',
				'min_length' => 'NIP Penilai wajib berisi minimal 18 karakter',
				'max_length' => 'NIP Penilai wajib berisi maksimal 20 karakter',
				'is_unique' => 'NIP Penilai yang diinputkan sudah ada',
			]
		);
		if ($this->form_validation->run() == false) {
			$this->template->load('template', 'tim/add');
		} else {
			if (isset($_POST['submit'])) {
				$this->Model_tim->add();
				$this->session->set_flashdata(
					'add',
					'<div class="alert alert-success alert-dismissible fade show">
					Data Penilai Berhasil Disimpan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
				);
				redirect('tim');
			} else {
				$this->template->load('template', 'tim/add');
			}
		}
	}
	function edit($id)
	{
		$data['anggota'] = $this->Model_tim->getById($id);
		$this->template->load('template', 'tim/edit', $data);
	}
	function update()
	{
		$this->form_validation->set_rules(
			'nama_anggota',
			'Nama',
			'required|trim|xss_clean|min_length[5]|max_length[50]',
			[
				'required' => 'Nama User Wajib di isi',
				'min_length' => 'Nama User yang diinputkan minimal 5 karakter',
				'max_length' =>
				'Nama User yang diinputkan maksimal 50 karakter',
			]
		);
		$this->form_validation->set_rules(
			'nip_anggota',
			'NIP',
			'required|trim|xss_clean|min_length[18]|max_length[20]',
			[
				'required' => 'NIP User Wajib di isi',
				'min_length' => 'NIP berisi minimal 18 karakter',
				'max_length' => 'NIP berisi maksimal 20 karakter',
			]
		);
		if ($this->form_validation->run() == true) {
			$id = $this->input->post('kode_anggota');
			$data['nama_anggota'] = $this->input->post('nama_anggota');
			$data['nip_anggota'] = $this->input->post('nip_anggota');
			$this->Model_tim->update($data, $id);
			$this->session->set_flashdata(
				'update',
				'<div class="alert alert-warning alert-dismissible fade show">
				Data Penilai Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('tim');
		} else {
			$id = $this->input->post('kode_anggota');
			$data['anggota'] = $this->Model_tim->getById($id);
			$this->template->load('template', 'tim/edit', $data);
		}
	}
	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->db->where('kode_anggota', $id);
		$this->db->delete('tbl_anggota');
		$this->session->set_flashdata(
			'delete',
			'<div class="alert alert-danger alert-dismissible fade show">
			Data Penilai Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('tim');
	}
}
