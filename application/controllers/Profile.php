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
                'nip_user' => $this->session->userdata('nip_user'),
            ])
            ->row_array();
        $this->template->load('template', 'profile/profile', $data);
    }
    function ubahdata()
    {
        $data['user'] = $this->db
            ->get_where('tbl_user', [
                'nip_user' => $this->session->userdata('nip_user'),
            ])
            ->row_array();

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|min_length[5]|max_length[12]'
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'min_length[8]|max_length[20]'
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

?>
