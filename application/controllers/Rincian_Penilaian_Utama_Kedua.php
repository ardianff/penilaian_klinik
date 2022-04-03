<?php
class Rincian_penilaian_utama_kedua extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_rincian_penilaian_utama');
		check_session();
	}
	function index()
	{
		$data['title'] = 'Rincian Penilaian Klinik Utama Form 2';
		$data['data'] = $this->Model_rincian_penilaian_utama->get_rincian_penilaian_klinik_utama_kedua();
		$this->template->load('template', 'rincian-penilaian-kedua/utama/list', $data);
	}
	function add()
	{
		$this->form_validation->set_rules(
			'group_name',
			'Group Name',
			'required',
			[
				'required' => 'Group Name Wajib di pilih',
			]
		);
		$this->form_validation->set_rules(
			'rincian_penilaian',
			'Rincian Penilaian',
			'xss_clean|trim|min_length[3]|required',
			[
				'min_length' =>
				'Rincian Penilaian berisi minimal 3 karakter',
				'required' => 'Rincian Wajib di isi'
			]
		);
		$this->form_validation->set_rules(
			'jumlah_penilaian',
			'Jumlah Penilaian',
			'xss_clean|trim|min_length[1]|required',
			[
				'min_length' =>
				'Jumlah berisi minimal 1 karakter',
				'required' => 'Jumlah Wajib di isi'
			]
		);
		$this->form_validation->set_rules(
			'satuan_penilaian',
			'Satuan Penilaian',
			'xss_clean|trim|min_length[3]|required',
			[
				'min_length' =>
				'Satuan berisi minimal 3 karakter',
				'required' => 'Satuan Wajib di isi'
			]
		);
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Tambah Rincian Penilaian Klinik Utama';
			$data['data'] = $this->Model_rincian_penilaian_utama->get_group_penilaian_utama();
			$this->template->load('template', 'rincian-penilaian-kedua/utama/add', $data);
		} else {
			if (isset($_POST['submit'])) {
				$this->Model_rincian_penilaian_utama->simpan_penilaian_utama_kedua();
				$this->session->set_flashdata(
					'add',
					'<div class="alert alert-success alert-dismissible fade show">
					Data Rincian Penilaian Berhasil Disimpan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
				);
				redirect('rincian_penilaian_utama_kedua');
			} else {
				$data['title'] = 'Tambah Rincian Penilaian Klinik Utama';
				$data['data'] = $this->Model_rincian_penilaian_utama->get_group_penilaian_utama();
				$this->template->load('template', 'rincian-penilaian-kedua/utama/add', $data);
			}
		}
	}
	function edit($id)
	{
		$data['title'] = "Edit Rincian Penilaian Utama 2";
		$data['data'] = $this->Model_rincian_penilaian_utama->get_group_penilaian_utama();
		$data['id_deskripsi'] = $this->Model_rincian_penilaian_utama->getByIdKedua($id);
		$this->template->load(
			'template',
			'rincian-penilaian-kedua/utama/edit',
			$data
		);
	}
	function update()
	{
		$this->form_validation->set_rules(
			'group_name',
			'Group Name',
			'required',
			[
				'required' => 'Group Name Wajib di pilih',
			]
		);
		$this->form_validation->set_rules(
			'rincian_penilaian',
			'Rincian Penilaian',
			'xss_clean|trim|min_length[3]|required',
			[
				'min_length' =>
				'Rincian Penilaian berisi minimal 3 karakter',
				'required' => 'Rincian Wajib di isi'
			]
		);
		$this->form_validation->set_rules(
			'jumlah_penilaian',
			'Jumlah Penilaian',
			'xss_clean|trim|min_length[3]|required',
			[
				'min_length' =>
				'Jumlah berisi minimal 3 karakter',
				'required' => 'Jumlah Wajib di isi'
			]
		);
		$this->form_validation->set_rules(
			'satuan_penilaian',
			'Satuan Penilaian',
			'xss_clean|trim|min_length[3]|required',
			[
				'min_length' =>
				'Satuan berisi minimal 3 karakter',
				'required' => 'Satuan Wajib di isi'
			]
		);
		if ($this->form_validation->run() == true) {
			$id = $this->input->post('id_deskripsi_penilaian');
			$data['id_group'] = $this->input->post('group_name');
			$data['kriteria_penilaian_utama'] = $this->input->post('rincian_penilaian');
			$data['jumlah_minimal_penilaian_utama'] = $this->input->post('jumlah_penilaian');
			$data['satuan_penilaian_utama'] = $this->input->post('satuan_penilaian');
			$this->Model_rincian_penilaian_utama->update_kedua($data, $id);
			$this->session->set_flashdata(
				'update',
				'<div class="alert alert-warning alert-dismissible fade show">
				Data Rincian Penilaian Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('rincian_penilaian_utama_kedua');
		} else {
			$id = $this->input->post('id_deskripsi_penilaian');
			$data['title'] = "Edit Rincian Penilaian Utama 2";
			$data['data'] = $this->Model_rincian_penilaian_utama->get_group_penilaian_utama();
			$data['id_deskripsi'] = $this->Model_rincian_penilaian_utama->getByIdKedua($id);
			$this->template->load(
				'template',
				'rincian-penilaian-kedua/utama/edit',
				$data
			);
		}
	}
	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_deskripsi', $id);
		$this->db->delete('tbl_deskripsi_penilaian_utama');
		$this->session->set_flashdata(
			'delete',
			'<div class="alert alert-danger alert-dismissible fade show">
			Data Rincian Penilaian Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('rincian_penilaian_utama_kedua');
	}
	function group_name()
	{
		$data['title'] = 'Group Name Rincian Penilaian Klinik Utama';
		$data['data'] = $this->Model_rincian_penilaian_utama->get_group_penilaian_utama();
		$this->template->load('template', 'rincian-penilaian-kedua/utama/group-name/data', $data);
	}
	function tambah_group()
	{
		$this->form_validation->set_rules(
			'nama_group',
			'Nama Group',
			'required|xss_clean|trim|min_length[3]',
			[
				'required' => 'Group Name Wajib di isi',
				'min_length' => 'Group Name berisi minimal 3 karakter',
			]
		);
		if ($this->form_validation->run() == false) {
			$this->template->load('template', 'rincian-penilaian-kedua/utama/group-name/tambah');
		} else {
			if (isset($_POST['submit'])) {
				$this->Model_rincian_penilaian_utama->add_group();
				$this->session->set_flashdata(
					'add',
					'<div class="alert alert-success alert-dismissible fade show">
					Data Group Berhasil Disimpan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
				);
				redirect('rincian_penilaian_utama_kedua/group_name');
			} else {
				$this->template->load(
					'template',
					'rincian-penilaian-kedua/utama/group-name/tambah'
				);
			}
		}
	}
	function edit_group($id)
	{
		$data['title'] = 'Edit Group Name';
		$data['group'] = $this->Model_rincian_penilaian_utama->getByIdGroup($id);
		$this->template->load(
			'template',
			'rincian-penilaian-kedua/utama/group-name/edit',
			$data
		);
	}
	function update_group()
	{
		$this->form_validation->set_rules(
			'nama_group',
			'Nama Group',
			'required|xss_clean|trim|min_length[3]',
			[
				'required' => 'Group Name Wajib di isi',
				'min_length' => 'Group Name berisi minimal 3 karakter',
			]
		);
		if ($this->form_validation->run() == true) {
			$id = $this->input->post('id_group');
			$data['group_name'] = $this->input->post('nama_group');
			$this->Model_rincian_penilaian_utama->update_group($data, $id);
			$this->session->set_flashdata(
				'update',
				'<div class="alert alert-warning alert-dismissible fade show">
				Data Group Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('rincian_penilaian_utama_kedua/group_name');
		} else {
			$id = $this->input->post('id_group');
			$data['title'] = 'Edit Group Name';
			$data['group'] = $this->Model_rincian_penilaian_utama->getByIdGroup($id);
			$this->template->load(
				'template',
				'rincian-penilaian-kedua/utama/group-name/edit',
				$data
			);
		}
	}
	function hapus_group()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_group', $id);
		$this->db->delete('tbl_group_utama');
		$this->session->set_flashdata(
			'delete',
			'<div class="alert alert-danger alert-dismissible fade show">
			Data Group Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('rincian_penilaian_utama_kedua/group_name');
	}
}