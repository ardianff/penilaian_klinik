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
        $data['daftar'] = $this->db
            ->query(
                'SELECT ts.id_anggota,ts.nama_anggota, ts.nip_anggota FROM tbl_anggota as ts'
            )
            ->result();
        $nama_session['user'] = $this->db
            ->get_where('tbl_user', ['id' => $this->session->userdata('id')])
            ->row_array();
        $this->template->load('template', 'tim/list', $data, $nama_session);
    }
    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->Model_tim->update();
            redirect('tim');
        } else {
            $nip_anggota = $this->uri->segment(3);
            $data['anggota'] = $this->db
                ->get_where('tbl_anggota', ['nip_anggota' => $nip_anggota])
                ->row_array();
            $this->template->load('template', 'tim/edit', $data);
        }
    }
    function add()
    {
        if (isset($_POST['submit'])) {
            $this->Model_tim->add();
            redirect('tim');
        } else {
            $this->template->load('template', 'tim/add');
        }
    }
    function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->where('nip_anggota', $id);
        $this->db->delete('tbl_anggota');
        redirect('tim');
    }
} ?>


