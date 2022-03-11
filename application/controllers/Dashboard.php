<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_session();
    }

    function index()
    {
        $nama_user['user'] = $this->db
            ->get_where('tbl_user', ['id' => $this->session->userdata('id')])
            ->row_array();
        $this->template->load('template', 'dashboard', $nama_user);
    }
} ?>


