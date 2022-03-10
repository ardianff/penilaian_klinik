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
        $data['daftar'] = $this->db
            ->query(
                'SELECT ts.username,ts.nama_user,ts.nip_user FROM tbl_user as ts'
            )
            ->result();
        $this->template->load('template', 'user/list', $data);
    }
    function add()
    {
        if (isset($_POST['submit'])) {
            $this->Model_auth->add();
            redirect('user');
        } else {
            $this->template->load('template', 'user/add');
        }
    }
    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->Model_auth->update();
            redirect('user');
        } else {
            $nip_user = $this->uri->segment(3);
            $data['user'] = $this->db
                ->get_where('tbl_user', ['nip_user' => $nip_user])
                ->row_array();
            $this->template->load('template', 'user/edit', $data);
        }
    }
    function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->where('nip_user', $id);
        $this->db->delete('tbl_user');
        redirect('user');
    }
}

?>
