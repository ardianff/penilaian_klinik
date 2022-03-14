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
        $data['data'] = $this->Model_tim->getAll();
        $nama_session['user'] = $this->db
            ->get_where('tbl_user', ['id' => $this->session->userdata('id')])
            ->row_array();
        $this->template->load('template', 'tim/list', $data, $nama_session);
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
                redirect('tim');
            } else {
                $this->template->load('template', 'tim/add');
            }
        }
    }
    // function edit()
    // {
    //     if (isset($_POST['submit'])) {
    //         $this->Model_tim->update();
    //         redirect('tim');
    //     } else {
    //         $nip_anggota = $this->uri->segment(3);
    //         $data['anggota'] = $this->db
    //             ->get_where('tbl_anggota', ['nip_anggota' => $nip_anggota])
    //             ->row_array();
    //         $this->template->load('template', 'tim/edit', $data);
    //     }
    // }
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
        redirect('tim');
    }
} ?>


