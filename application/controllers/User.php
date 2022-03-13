<?php

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_auth');
        check_session();
    }

    function index()
    {
        // $data['daftar'] = $this->db
        //     ->query(
        //         'SELECT ts.username,ts.nama_user,ts.nip_user FROM tbl_user as ts'
        //     )
        //     ->result();
        $data['data'] = $this->Model_auth->getAll();
        $nama_user['user'] = $this->db
            ->get_where('tbl_user', ['id' => $this->session->userdata('id')])
            ->row_array();
        $this->template->load('template', 'user/list', $data, $nama_user);
    }
    function add()
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
            'required|trim|min_length[18]|max_length[20]|is_unique[tbl_user.nip_user]',
            [
                'required' => 'NIP User Wajib di isi',
                'min_length' => 'NIP wajib berisi minimal 18 karakter',
                'max_length' => 'NIP wajib berisi maksimal 20 karakter',
                'is_unique' => 'NIP yang diinputkan sudah ada',
            ]
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|min_length[5]|xss_clean|max_length[12]|is_unique[tbl_user.username]',
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
            'required|trim|xss_clean|min_length[8]|max_length[12]',
            [
                'required' => 'Password Wajib di isi',
                'min_length' => 'Password wajib berisi minimal 8 karakter',
                'max_length' => 'Password yang diinputkan maksimal 20 karakter',
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'user/add');
        } else {
            if (isset($_POST['submit'])) {
                $this->Model_auth->add();
                redirect('user');
            } else {
                $this->template->load('template', 'user/add');
            }
        }
    }
    function edit($id)
    {
        // $nip_user = $this->uri->segment(3);
        // $data['user'] = $this->db
        //     ->get_where('tbl_user', ['nip_user' => $nip_user])
        //     ->row_array();
        $data['user'] = $this->Model_auth->getById($id);
        $this->template->load('template', 'user/edit', $data);
        // if ($this->form_validation->run() == false) {
        //     // echo 'masuk kesini';
        //     $nip_user = $this->uri->segment(3);
        //     $data['user'] = $this->db
        //         ->get_where('tbl_user', ['nip_user' => $nip_user])
        //         ->row_array();
        //     $this->template->load('template', 'user/edit', $data);
        // } else {
        //     if (isset($_POST['submit'])) {
        //         $this->Model_auth->update();
        //         redirect('user');
        //     } else {
        //         $nip_user = $this->uri->segment(3);
        //         $data['user'] = $this->db
        //             ->get_where('tbl_user', ['nip_user' => $nip_user])
        //             ->row_array();
        //         $this->template->load('template', 'user/edit', $data);
        //     }
        // }
        // if ($this->form_validation->run() == true) {
        //     if ($this->input->post('password') != '') {
        //         $nip_user = $this->input->post('nip_user');
        //         $data['nama_user'] = $this->input->post('nama_user');
        //         $data['nip_user'] = $this->input->post('nip_user');
        //         $data['username'] = $this->input->post('username');
        //         $data['password'] = password_hash(
        //             $this->input->post('tanggal_lahir'),
        //             PASSWORD_DEFAULT
        //         );
        //         $this->Model_auth->update($data, $nip_user);
        //         redirect('user');
        //     } else {
        //         $nip_user = $this->input->post('nip_user');
        //         $data['nama_user'] = $this->input->post('nama_user');
        //         $data['nip_user'] = $this->input->post('nip_user');
        //         $data['username'] = $this->input->post('username');
        //         $this->Model_auth->update($data, $nip_user);
        //         redirect('user');
        //     }
        // } else {
        //     $nip_user = $this->input->post('nip_user');
        //     $data['data'] = $this->Model_auth->getById($nip_user);
        //     $this->template->load('template', 'user/edit', $data);
        // }
        // if (isset($_POST['submit'])) {
        //     $this->Model_auth->update();
        //     redirect('user');
        // } else {
        //     $nip_user = $this->uri->segment(3);
        //     $data['user'] = $this->db
        //         ->get_where('tbl_user', ['nip_user' => $nip_user])
        //         ->row_array();
        //     $this->template->load('template', 'user/edit', $data);
        // }
    }
    function update()
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
            'required|trim|min_length[18]|max_length[20]',
            [
                'required' => 'NIP User Wajib di isi',
                'min_length' => 'NIP berisi minimal 18 karakter',
                'max_length' => 'NIP berisi maksimal 20 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|min_length[5]|xss_clean|max_length[10]',
            [
                'required' => 'Username Wajib di isi',
                'min_length' => 'Username wajib berisi minimal 5 karakter',
                'max_length' => 'Username yang diinputkan maksimal 10 karakter',
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
                $data['username'] = $this->input->post('username');
                $data['password'] = password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                );
                $this->Model_auth->update($data, $id);
                redirect('user');
            } else {
                $id = $this->input->post('kode_user');
                $data['nama_user'] = $this->input->post('nama_user');
                $data['nip_user'] = $this->input->post('nip_user');
                $data['username'] = $this->input->post('username');
                $this->Model_auth->update($data, $id);
                redirect('user');
            }
        } else {
            $id = $this->input->post('kode_user');
            $data['user'] = $this->Model_auth->getById($id);
            $this->template->load('template', 'user/edit', $data);
        }
    }
    function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->where('kode_user', $id);
        $this->db->delete('tbl_user');
        redirect('user');
    }
}

?>
