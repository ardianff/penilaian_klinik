<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Rincian_penilaian_klinik_umum_kedua extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_rincian_penilaian_pratama');
        check_session();
    }
    public function index()
    {
        $data['title'] = 'Rincian Penilaian Form Kedua Klinik Pratama/Utama Umum';
        $data['data'] = $this->Model_rincian_penilaian_pratama->get_rincian_penilaian_klinik_pratama_kedua();
        $this->template->load(
            'template',
            'rincian-penilaian-kedua/klinik_umum/list',
            $data
        );
    }
    public function add()
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
            'xss_clean|trim|min_length[5]|required',
            [
                'min_length' =>
                'Rincian Penilaian berisi minimal 5 karakter',
                'required' => 'Rincian Wajib di isi',
            ]
        );
        $this->form_validation->set_rules(
            'jumlah_penilaian',
            'Jumlah',
            'xss_clean|min_length[3]|trim',
            [
                'min_length' =>
                'Jumlah berisi minimal 3 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'satuan_penilaian',
            'Satuan Penilaian',
            'required',
            [
                'required' => 'Satuan Wajib di pilih',
            ]
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Rincian Penilaian Form Kedua Klinik Pratama/Utama Umum';
            $data['data'] = $this->Model_rincian_penilaian_pratama->get_group_penilaian_pratama();
            $this->template->load('template', 'rincian-penilaian-kedua/klinik_umum/add', $data);
        } else {
            if (isset($_POST['submit'])) {
                $this->Model_rincian_penilaian_pratama->simpan_penilaian_pratama_kedua();
                $this->session->set_flashdata(
                    'add',
                    '<div class="alert alert-success alert-dismissible fade show">
					Data Rincian Penilaian Berhasil Disimpan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
                );
                redirect('rincian_penilaian_klinik_umum_kedua');
            } else {
                $data['title'] = 'Tambah Rincian Penilaian Klinik Pratama';
                $data['data'] = $this->Model_rincian_penilaian_pratama->get_group_penilaian_pratama();
                $this->template->load('template', 'rincian-penilaian-kedua/klinik_umum/add', $data);
            }
        }
    }
    public function edit($id)
    {
        $data['title'] = "Edit Rincian Penilaian Pratama 2";
        $data['data'] = $this->Model_rincian_penilaian_pratama->get_group_penilaian_pratama();
        $data['id_deskripsi'] = $this->Model_rincian_penilaian_pratama->getByIdKedua($id);
        $this->template->load(
            'template',
            'rincian-penilaian-kedua/klinik_umum/edit',
            $data
        );
    }
    public function update()
    {
        $this->form_validation->set_rules(
            'group_name',
            'Group Name',
            'required',
            [
                'required' => 'Group Name Wajib di isi',
            ]
        );
        $this->form_validation->set_rules(
            'rincian_penilaian',
            'Rincian Penilaian',
            'xss_clean|trim|min_length[5]|required',
            [
                'min_length' =>
                'Rincian Penilaian berisi minimal 5 karakter',
                'required' => 'Rincian Wajib di isi',
            ]
        );
        $this->form_validation->set_rules(
            'jumlah_penilaian',
            'Jumlah',
            'min_length[3]|xss_clean|trim',
            [
                'min_length' =>
                'Jumlah berisi minimal 3 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'satuan_penilaian',
            'Satuan Penilaian',
            'xss_clean|trim|required',
            [
                'required' => 'Satuan Wajib di pilih',
            ]
        );
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id_deskripsi_penilaian');
            $data['id_group'] = $this->input->post('group_name');
            $data['kriteria_penilaian_pratama'] = $this->input->post('rincian_penilaian');
            $data['jumlah_minimal_penilaian_pratama'] = $this->input->post('jumlah_penilaian');
            $data['satuan_penilaian_pratama'] = $this->input->post('satuan_penilaian');
            $this->Model_rincian_penilaian_pratama->update_kedua($data, $id);
            $this->session->set_flashdata(
                'update',
                '<div class="alert alert-warning alert-dismissible fade show">
				Data Rincian Penilaian Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
            );
            redirect('rincian_penilaian_klinik_umum_kedua');
        } else {
            $id = $this->input->post('id_deskripsi_penilaian');
            $data['title'] = "Edit Rincian Penilaian Pratama 2";
            $data['data'] = $this->Model_rincian_penilaian_pratama->get_group_penilaian_pratama();
            $data['id_deskripsi'] = $this->Model_rincian_penilaian_pratama->getByIdKedua($id);
            $this->template->load(
                'template',
                'rincian-penilaian-kedua/klinik_umum/edit',
                $data
            );
        }
    }
    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_deskripsi', $id);
        $this->db->delete('tbl_deskripsi_penilaian_pratama');
        $this->session->set_flashdata(
            'delete',
            '<div class="alert alert-danger alert-dismissible fade show">
			Data Rincian Penilaian Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
        );
        redirect('rincian_penilaian_klinik_umum_kedua');
    }
    public function group_name()
    {
        $data['title'] = 'Group Name Rincian Penilaian Klinik Pratama/Utama Umum';
        $data['data'] = $this->Model_rincian_penilaian_pratama->get_group_penilaian_pratama();
        $this->template->load('template', 'rincian-penilaian-kedua/klinik_umum/group-name/data', $data);
    }
    public function tambah_group()
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
            $this->template->load('template', 'rincian-penilaian-kedua/klinik_umum/group-name/tambah');
        } else {
            if (isset($_POST['submit'])) {
                $this->Model_rincian_penilaian_pratama->add_group();
                $this->session->set_flashdata(
                    'add',
                    '<div class="alert alert-success alert-dismissible fade show">
					Data Group Berhasil Disimpan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
                );
                redirect('rincian_penilaian_klinik_umum_kedua/group_name');
            } else {
                $this->template->load(
                    'template',
                    'rincian-penilaian-kedua/klinik_umum/group-name/tambah'
                );
            }
        }
    }
    public function edit_group($id)
    {
        $data['title'] = 'Edit Group Name';
        $data['group'] = $this->Model_rincian_penilaian_pratama->getByIdGroup($id);
        $this->template->load(
            'template',
            'rincian-penilaian-kedua/klinik_umum/group-name/edit',
            $data
        );
    }
    public function update_group()
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
            $this->Model_rincian_penilaian_pratama->update_group($data, $id);
            $this->session->set_flashdata(
                'update',
                '<div class="alert alert-warning alert-dismissible fade show">
				Data Group Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
            );
            redirect('rincian_penilaian_klinik_umum_kedua/group_name');
        } else {
            $id = $this->input->post('id_group');
            $data['title'] = 'Edit Group Name';
            $data['group'] = $this->Model_rincian_penilaian_pratama->getByIdGroup($id);
            $this->template->load(
                'template',
                'rincian-penilaian-kedua/klinik_umum/group-name/edit',
                $data
            );
        }
    }
    public function hapus_group()
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_group', $id);
        $this->db->delete('tbl_group_pratama');
        $this->session->set_flashdata(
            'delete',
            '<div class="alert alert-danger alert-dismissible fade show">
			Data Group Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
        );
        redirect('rincian_penilaian_klinik_umum_kedua/group_name');
    }
}