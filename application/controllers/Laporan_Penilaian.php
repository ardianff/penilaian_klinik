<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define CI_Controller path

/**
 *
 * Controller Laporan_Penilaian
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller REST
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Laporan_Penilaian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_laporan_klinik');
        check_session();
    }

    public function index()
    {
        $data['title'] = 'Laporan Data Klinik Pratama/Utama Umum & Gigi';
        $this->template->load(
            'template',
            'laporan-penilaian/index',
            $data
        );
    }
    public function data()
    {
        if (isset($_POST['submit'])) {
            $bulan = $this->input->post('bulan_pilihan');
            $tahun = $this->input->post('tahun_pilihan');
            $data['data'] = $this->Model_laporan_klinik->get_klinik($bulan, $tahun);
        }
        if ($bulan == 1) {
            $nama_bulan = "Januari";
        } else if ($bulan == 2) {
            $nama_bulan = "Februari";
        } else if ($bulan == 3) {
            $nama_bulan = "Maret";
        } else if ($bulan == 4) {
            $nama_bulan = "April";
        } else if ($bulan == 5) {
            $nama_bulan = "Mei";
        } else if ($bulan == 6) {
            $nama_bulan = "Juni";
        } else if ($bulan == 7) {
            $nama_bulan = "Juli";
        } else if ($bulan == 8) {
            $nama_bulan = "Agustus";
        } else if ($bulan == 9) {
            $nama_bulan = "September";
        } else if ($bulan == 10) {
            $nama_bulan = "Oktober";
        } else if ($bulan == 11) {
            $nama_bulan = "November";
        } else {
            $nama_bulan = "Desember";
        }
        $data['title'] = 'Laporan Data Klinik Pratama/Utama Umum & Gigi Bulan ' . $nama_bulan . ' Tahun ' . $tahun . '';
        $this->template->load(
            'template',
            'laporan-penilaian/data',
            $data
        );
    }
    public function cek()
    {
        if (isset($_POST['submit'])) {
            $this->Model_laporan_klinik->update();
            $this->session->set_flashdata(
                'update',
                '<div class="alert alert-warning alert-dismissible fade show">
				Data Klinik <b>' . $this->input->post('nama_klinik') . '</b> Berhasil Diperbaharui!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
            );
            $id_klinik = $this->input->post('id_klinik');
            redirect('laporan_penilaian/cek/' .  $id_klinik);
        } else {

            $id_klinik = $this->uri->segment(3);
            $data['id_klinik'] = $this->db
                ->join('tbl_kecamatan as kec', 'kec.id_kecamatan = k.id_kecamatan_klinik')
                ->join('tbl_kelurahan as kel', 'kel.id_kelurahan = k.id_kelurahan_klinik')
                ->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik])
                ->row_array();
            $data['title'] = 'Data Klinik ' . $data['id_klinik']['kemampuan_pelayanan'] . ' : ' . $data['id_klinik']['nama_klinik'];
            $data['anggota'] = $this->Model_laporan_klinik->get_anggota();
            $data['kecamatan'] = $this->Model_laporan_klinik->get_data_kecamatan();
            $this->template->load(
                'template',
                'laporan-penilaian/view',
                $data
            );
        }
    }
}

/* End of file Laporan_Penilaian.php */
/* Location: ./application/controllers/Laporan_Penilaian.php */