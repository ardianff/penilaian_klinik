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
        $data[
            'data'
        ] = $this->Model_rincian_penilaian_utama->get_rincian_penilaian_klinik_utama();
        $this->template->load(
            'template',
            'rincian-penilaian/utama/list',
            $data
        );
    }
    public function add()
    {
        $this->form_validation->set_rules(
            'rincian_penilaian',
            'Rincian Penilaian',
            'required|xss_clean|trim|min_length[5]',
            [
                'required' => 'Rincian Penilaian Wajib di isi',
                'min_length' => 'Rincian Penilaian berisi minimal 5 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'keterangan_penilaian',
            'Keterangan',
            'xss_clean|trim|min_length[5]',
            [
                'min_length' =>
                    'Keterangan Penilaian berisi minimal 5 karakter',
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'rincian-penilaian/utama/add');
        } else {
            if (isset($_POST['submit'])) {
                $this->Model_rincian_penilaian_utama->add();
                redirect('rincian_penilaian_utama');
            } else {
                $this->template->load(
                    'template',
                    'rincian-penilaian/utama/add'
                );
            }
        }
    }
    function edit($id)
    {
        $data['rincian'] = $this->Model_rincian_penilaian_utama->getById($id);
        $this->template->load(
            'template',
            'rincian-penilaian/utama/edit',
            $data
        );
    }
    // public function edit()
    // {
    //     if (isset($_POST['submit'])) {
    //         $this->Model_rincian_penilaian_utama->update();
    //         redirect('rincian_penilaian_utama');
    //     } else {
    //         $id_rincian_penilaian = $this->uri->segment(3);
    //         $data['rincian'] = $this->db
    //             ->get_where('tbl_rincian_penilaian_utama', [
    //                 'id_rincian_penilaian' => $id_rincian_penilaian,
    //             ])
    //             ->row_array();
    //         $this->template->load(
    //             'template',
    //             'rincian-penilaian/utama/edit',
    //             $data
    //         );
    //     }
    // }
    function update()
    {
        $this->form_validation->set_rules(
            'rincian_penilaian',
            'Rincian Penilaian',
            'required|xss_clean|trim|min_length[5]',
            [
                'required' => 'Rincian Penilaian Wajib di isi',
                'min_length' => 'Rincian Penilaian berisi minimal 5 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'keterangan_penilaian',
            'Keterangan',
            'xss_clean|trim|min_length[5]',
            [
                'min_length' =>
                    'Keterangan Penilaian berisi minimal 5 karakter',
            ]
        );
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id_rincian_penilaian');
            $data['rincian_penilaian'] = $this->input->post(
                'rincian_penilaian'
            );
            $data['keterangan_penilaian'] = $this->input->post(
                'keterangan_penilaian'
            );
            $this->Model_rincian_penilaian_utama->update($data, $id);
            redirect('rincian_penilaian_utama');
        } else {
            $id = $this->input->post('id_rincian_penilaian');
            $data['rincian'] = $this->Model_rincian_penilaian_utama->getById(
                $id
            );
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
