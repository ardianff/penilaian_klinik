<?php

class Penilaian extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_penilaian');
		check_session();
    }

    function index() {
        $data['daftar'] = $this->db->query("SELECT ts.id_penilaian,ts.nama_admin, ts.nama_klinik, ts.kemampuan_pelayanan, ts.jenis_pelayanan_klinik,ts.alamat_klinik, ts.nama_anggota1, ts.nama_anggota2,ts.nama_anggota3,ts.nama_anggota4 FROM tbl_penilaian as ts")->result();
        $this->template->load('template', 'penilaian/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_penilaian->add();
            redirect('penilaian');
        } else {
            $this->template->load('template', 'penilaian/add');
        }
    }    
    function edit(){
        if (isset($_POST['submit'])) {
            $this->Model_penilaian->update();
            redirect('penilaian');
        } else {
			$id_penilaian           = $this->uri->segment(3);
            $data['id_penilaian'] = $this->db->get_where('tbl_penilaian',array('id_penilaian'=>$id_penilaian))->row_array();
            $this->template->load('template', 'penilaian/edit',$data);
            
        }
    }
	function view(){
        if (isset($_POST['submit'])) {
            $this->Model_penilaian->update();
            redirect('penilaian');
        } else {
			$id_penilaian           = $this->uri->segment(3);
            $data['id_penilaian'] = $this->db->get_where('tbl_penilaian',array('no_cm'=>$id_penilaian))->row_array();
            $this->template->load('template', 'penilaian/view',$data);
            
        }
    }
    
    
    function hapus(){
        $id= $this->uri->segment(3);
        $this->db->where('id_penilaian',$id);
        $this->db->delete('tbl_penilaian');
        redirect('penilaian');
    }

}
?>

