<?php
class Rincian_penilaian_pratama extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_rincian_penilaian_pratama');
        check_session();
    }
    function index()
    {
        $data['daftar'] = $this->db
            ->query(
                'SELECT ts.id_rincian_penilaian,ts.rincian_penilaian, ts.keterangan_penilaian FROM tbl_rincian_penilaian_pratama as ts'
            )
            ->result();
        $this->template->load(
            'template',
            'rincian-penilaian/pratama/list',
            $data
        );
    }
    function add()
    {
        if (isset($_POST['submit'])) {
            $this->Model_rincian_penilaian_pratama->add();
            redirect('rincian_penilaian_pratama');
        } else {
            $this->template->load('template', 'rincian-penilaian/pratama/add');
        }
    }
    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->Model_rincian_penilaian_pratama->update();
            redirect('rincian_penilaian_pratama');
        } else {
            $id_rincian_penilaian = $this->uri->segment(3);
            $data['rincian'] = $this->db
                ->get_where('tbl_rincian_penilaian_pratama', [
                    'id_rincian_penilaian' => $id_rincian_penilaian,
                ])
                ->row_array();
            $this->template->load(
                'template',
                'rincian-penilaian/pratama/edit',
                $data
            );
        }
    }
    function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_rincian_penilaian', $id);
        $this->db->delete('tbl_rincian_penilaian_pratama');
        redirect('rincian_penilaian_pratama');
    }
}

?>
