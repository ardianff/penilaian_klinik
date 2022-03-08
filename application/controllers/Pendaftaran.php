<?php

class Pendaftaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pendaftaran');
		chek_seesion();
    }

    function index() {
        $data['daftar'] = $this->db->query("SELECT ts.id_penilaian,ts.nama_admin FROM tbl_penilaian as ts")->result();
        $this->template->load('template', 'pendaftaran/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_pendaftaran->add();
            redirect('pendaftaran');
        } else {
            $this->template->load('template', 'pendaftaran/add');
        }
    }

    function show_by_id() {
        $id_pasien = $_GET['id_pasien'];
        $sql_pasien = "select * from tbl_pasien where id_pasien='$id_pasien'";
        $pasien = $this->db->query($sql_pasien)->row_Array();
        $data = array(
            'id_pasien' => $pasien['id_pasien'],
            'nama_pasien' => $pasien['nama_pasien'],
            'alamat_pasien' => $pasien['alamat_pasien'],
            'agama' => $pasien['agama'],
            'no_ktp' => $pasien['no_ktp'],
            'gol_dar' => $pasien['gol_dar'],
            'status_pernikahan' => $pasien['status_pernikahan'],
            'jenis_kelamin' => $pasien['jenis_kelamin'],
            'kode_pos' => $pasien['kode_pos'],
        );
        echo json_encode($data);
    }
    
    
    function edit(){
        if (isset($_POST['submit'])) {
            $this->Model_pendaftaran->update();
            redirect('pendaftaran');
        } else {
			$no_cm           = $this->uri->segment(3);
            $data['pasien'] = $this->db->get_where('tbl_pasien',array('no_cm'=>$no_cm))->row_array();
            $this->template->load('template', 'pendaftaran/edit',$data);
            
        }
    }
	function view(){
        if (isset($_POST['submit'])) {
            $this->Model_pendaftaran->update();
            redirect('pendaftaran');
        } else {
			$no_cm           = $this->uri->segment(3);
            $data['pasien'] = $this->db->get_where('tbl_pasien',array('no_cm'=>$no_cm))->row_array();
            $this->template->load('template', 'pendaftaran/view',$data);
            
        }
    }
    
    
    function hapus(){
        $id= $this->uri->segment(3);
        $this->db->where('no_cm',$id);
        $this->db->delete('tbl_pasien');
        redirect('pendaftaran');
    }

}
?>

