<?php
class Rincian_Penilaian_Utama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_rincian_penilaian_utama');
        check_session();
    }
    public function index()
    {
        $data['daftar'] = $this->db
            ->query(
                'SELECT ts.id_rincian_penilaian,ts.rincian_penilaian, ts.keterangan_penilaian FROM tbl_rincian_penilaian_utama as ts'
            )
            ->result();
        $this->template->load(
            'template',
            'rincian-penilaian/utama/list',
            $data
        );
    }
    public function add()
    {
        if (isset($_POST['submit'])) {
            $this->Model_rincian_penilaian_utama->add();
            redirect('rincian_penilaian_utama');
        } else {
            $this->template->load('template', 'rincian-penilaian/utama/add');
        }
    }
    public function edit()
    {
        if (isset($_POST['submit'])) {
            $this->Model_rincian_penilaian_utama->update();
            redirect('rincian_penilaian_utama');
        } else {
            $id_rincian_penilaian = $this->uri->segment(3);
            $data['rincian'] = $this->db
                ->get_where('tbl_rincian_penilaian_utama', [
                    'id_rincian_penilaian' => $id_rincian_penilaian,
                ])
                ->row_array();
            $this->template->load(
                'template',
                'rincian-penilaian/utama/edit',
                $data
            );
        }
    }
    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_rincian_penilaian', $id);
        $this->db->delete('tbl_rincian_penilaian_utama');
        redirect('rincian_penilaian_utama');
    }
}

?>
