<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Rincian_penilaian_klinik_umum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_rincian_penilaian_pratama');
        check_session();
    }
    public function index()
    {
        $data['title'] = 'Rincian Penilaian Form Pertama Klinik Pratama/Utama Umum';
        $data['data'] = $this->Model_rincian_penilaian_pratama->get_rincian_penilaian_klinik_pratama();
        $this->template->load(
            'template',
            'rincian-penilaian/klinik_umum/list',
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
        $data['title'] = 'Input Rincian Penilaian Klinik Pratama/Utama Umum';
        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'rincian-penilaian/klinik_umum/add', $data);
        } else {
            if (isset($_POST['submit'])) {
                $this->Model_rincian_penilaian_pratama->add();
                $this->session->set_flashdata(
                    'add',
                    '<div class="alert alert-success alert-dismissible fade show">
					Data Rincian Penilaian Berhasil Disimpan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
                );
                redirect('rincian_penilaian_klinik_umum');
            } else {
                $this->template->load(
                    'template',
                    'rincian-penilaian/klinik_umum/add',
                    $data
                );
            }
        }
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Rincian Penilaian Klinik Pratama/Utama Umum';
        $data['rincian'] = $this->Model_rincian_penilaian_pratama->getById($id);
        $this->template->load(
            'template',
            'rincian-penilaian/klinik_umum/edit',
            $data
        );
    }
    public function update()
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
            $save['rincian_penilaian'] = $this->input->post(
                'rincian_penilaian'
            );
            $save['keterangan_penilaian'] = $this->input->post(
                'keterangan_penilaian'
            );
            $this->Model_rincian_penilaian_pratama->update($save, $id);
            $this->session->set_flashdata(
                'update',
                '<div class="alert alert-warning alert-dismissible fade show">
				Data Rincian Penilaian Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
            );
            redirect('rincian_penilaian_klinik_umum');
        } else {
            $id = $this->input->post('id_rincian_penilaian');
            $data['title'] = 'Edit Rincian Penilaian Klinik Pratama/Utama Umum';
            $data['rincian'] = $this->Model_rincian_penilaian_pratama->getById(
                $id
            );
            $this->template->load(
                'template',
                'rincian-penilaian/klinik_umum/edit',
                $data
            );
        }
    }
    public function hapus()
    {
        $id = $this->uri->segment(3);
        // $this->db->where('id_rincian_penilaian', $id);
        // $this->db->delete('tbl_rincian_penilaian_pratama');
        $this->Model_rincian_penilaian_pratama->delete_rincian_pertama($id);
        $this->session->set_flashdata(
            'delete',
            '<div class="alert alert-danger alert-dismissible fade show">
			Data Rincian Penilaian Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
        );
        redirect('rincian_penilaian_klinik_umum');
    }
}