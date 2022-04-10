<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_dashboard');
        check_session();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db
            ->get_where('tbl_user', [
                'id_user' => $this->session->userdata('id_user'),
            ])
            ->row_array();
        $data['klinik_pratama'] = $this->Model_dashboard->get_data_pratama();
        $data['klinik_utama'] = $this->Model_dashboard->get_data_utama();
        $data['tim_penilai'] = $this->Model_dashboard->get_data_tim_penilai();
        $data['users'] = $this->Model_dashboard->get_data_user();
        $data['rincian_pratama1'] = $this->Model_dashboard->get_data_rincian_penilaian_pratama_kesatu();
        $data['rincian_pratama2'] = $this->Model_dashboard->get_data_rincian_penilaian_pratama_kedua();
        $data['rincian_utama1'] = $this->Model_dashboard->get_data_rincian_penilaian_utama_kesatu();
        $data['rincian_utama2'] = $this->Model_dashboard->get_data_rincian_penilaian_utama_kedua();
        $this->template->load('template', 'dashboard/index', $data);
    }
}