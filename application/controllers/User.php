<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_auth');
        check_session();
        check_level();
    }

    public function index()
    {
        $data['title'] = 'Data User';
        $data['data'] = $this->Model_auth->getAll();
        $data['user'] = $this->db
            ->get_where('tbl_user', ['id_user' => $this->session->userdata('id_user')])
            ->row_array();
        $this->template->load('template', 'user/list', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules(
            'nama_user',
            'Nama',
            'required|trim|min_length[5]|max_length[50]',
            [
                'required' => 'Nama User Wajib di isi',
                'min_length' => 'Nama User yang diinputkan minimal 5 karakter',
                'max_length' =>
                'Nama User yang diinputkan maksimal 50 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'nip_user',
            'NIP',
            'required|trim|min_length[18]|max_length[20]|is_unique[tbl_user.nip_user]|is_numeric',
            [
                'required' => 'NIP User Wajib di isi',
                'min_length' => 'NIP wajib berisi minimal 18 karakter',
                'max_length' => 'NIP wajib berisi maksimal 20 karakter',
                'is_unique' => 'NIP yang diinputkan sudah ada',
            ]
        );
        $this->form_validation->set_rules(
            'level_user',
            'Level',
            'required',
            [
                'required' => 'Level User Wajib dipilih',
            ]
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|min_length[5]|xss_clean|max_length[20]|is_unique[tbl_user.username]',
            [
                'required' => 'Username Wajib di isi',
                'min_length' => 'Username wajib berisi minimal 5 karakter',
                'max_length' => 'Username yang diinputkan maksimal 20 karakter',
                'is_unique' => 'Username yang diinputkan sudah ada',
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|xss_clean|min_length[8]|max_length[20]',
            [
                'required' => 'Password Wajib di isi',
                'min_length' => 'Password wajib berisi minimal 8 karakter',
                'max_length' => 'Password yang diinputkan maksimal 20 karakter',
            ]
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input User Baru';
            $this->template->load('template', 'user/add', $data);
        } else {
            if (isset($_POST['submit'])) {
                $this->Model_auth->add();
                $this->session->set_flashdata(
                    'add',
                    '<div class="alert alert-success alert-dismissible fade show">
					Data User Berhasil Disimpan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
                );
                redirect('user');
            } else {
                $data['title'] = 'Input User Baru';
                $this->template->load('template', 'user/add', $data);
            }
        }
    }
    public function edit($id)
    {
        $data['user'] = $this->Model_auth->getById($id);
        $data['title'] = 'Edit User';
        $this->template->load('template', 'user/edit', $data);
    }
    public function update()
    {
        $this->form_validation->set_rules(
            'nama_user',
            'Nama',
            'required|trim|min_length[5]|max_length[50]|xss_clean',
            [
                'required' => 'Nama User Wajib di isi',
                'min_length' => 'Nama User yang diinputkan minimal 5 karakter',
                'max_length' =>
                'Nama User yang diinputkan maksimal 50 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'nip_user',
            'NIP',
            'required|trim|min_length[18]|max_length[20]|xss_clean',
            [
                'required' => 'NIP User Wajib di isi',
                'min_length' => 'NIP berisi minimal 18 karakter',
                'max_length' => 'NIP berisi maksimal 20 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'level_user',
            'Level',
            'required',
            [
                'required' => 'Level User Wajib dipilih',
            ]
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|min_length[5]|xss_clean|max_length[20]',
            [
                'required' => 'Username Wajib di isi',
                'min_length' => 'Username wajib berisi minimal 5 karakter',
                'max_length' => 'Username yang diinputkan maksimal 20 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|xss_clean|min_length[8]|max_length[12]',
            [
                'min_length' => 'Password wajib berisi minimal 8 karakter',
                'max_length' => 'Password yang diinputkan maksimal 20 karakter',
            ]
        );
        if ($this->form_validation->run() == true) {
            if ($this->input->post('password') != '') {
                $id = $this->input->post('kode_user');
                $data['nama_user'] = $this->input->post('nama_user');
                $data['nip_user'] = $this->input->post('nip_user');
                $data['level_user'] = $this->input->post('level_user');
                $data['username'] = $this->input->post('username');
                $data['password'] = password_hash(
                    $this->input->post('password'),
                    PASSWORD_BCRYPT
                );
                $this->Model_auth->update($data, $id);
                $this->session->set_flashdata(
                    'update',
                    '<div class="alert alert-warning alert-dismissible fade show">
					Data User Berhasil Diubah!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
                );
                redirect('user');
            } else {
                $id = $this->input->post('kode_user');
                $data['nama_user'] = $this->input->post('nama_user');
                $data['nip_user'] = $this->input->post('nip_user');
                $data['level_user'] = $this->input->post('level_user');
                $data['username'] = $this->input->post('username');
                $this->Model_auth->update($data, $id);
                $this->session->set_flashdata(
                    'update',
                    '<div class="alert alert-warning alert-dismissible fade show">
					Data User Berhasil Diubah!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
                );
                redirect('user');
            }
        } else {
            $id = $this->input->post('kode_user');
            $data['title'] = "Edit Data User";
            $data['user'] = $this->Model_auth->getById($id);
            $this->template->load('template', 'user/edit', $data);
        }
    }
    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->where('kode_user', $id);
        $this->db->delete('tbl_user');
        $this->session->set_flashdata(
            'delete',
            '<div class="alert alert-danger alert-dismissible fade show">
			Data User Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
        );
        redirect('user');
    }
}