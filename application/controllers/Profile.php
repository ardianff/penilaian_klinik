<?php

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_auth');
        check_session();
    }

    function index()
    {
        $data['user'] = $this->db
            ->get_where('tbl_user', [
                'id_user' => $this->session->userdata('id_user'),
            ])
            ->row_array();
        $this->template->load('template', 'profile/profile', $data);
    }
    function ubahdata()
    {
        $data['user'] = $this->db
            ->get_where('tbl_user', [
                'id' => $this->session->userdata('id'),
            ])
            ->row_array();

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|min_length[5]|max_length[12]|xss_clean|is_unique[tbl_user.username]',
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
            'min_length[8]|max_length[20]|xss_clean',
            [
                'min_length' => 'Password wajib berisi minimal 5 karakter',
                'max_length' => 'Password yang diinputkan maksimal 20 karakter',
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'profile/ubahdata', $data);
        } else {
            if ($this->input->post('password') != '') {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $nip_user = $this->input->post('nip_user');

                $password_hash = password_hash($password, PASSWORD_DEFAULT);

                $this->db->set('username', $username);
                $this->db->set('password', $password_hash);
                $this->db->where('nip_user', $nip_user);
                $this->db->update('tbl_user');

                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Your profile has been updated!</div>'
                );
                redirect('profile');
            } else {
                $username = $this->input->post('username');
                $nip_user = $this->input->post('nip_user');

                $this->db->set('username', $username);
                $this->db->where('nip_user', $nip_user);
                $this->db->update('tbl_user');

                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Your profile has been updated!</div>'
                );
                redirect('profile');
            }
        }
    }
}
