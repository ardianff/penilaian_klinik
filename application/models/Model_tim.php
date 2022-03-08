<?php

Class Model_tim extends CI_Model {

    function add() {
        $data = array(
            'nama_anggota' => $this->input->post('nama_anggota'),
            'nip_anggota' => $this->input->post('nip_anggota'),
        );
        $this->db->insert('tbl_anggota',$data);
    }
    
    function update(){
        $data = array(
            'nama_anggota' => $this->input->post('nama_anggota'),
            'nip_anggota' => $this->input->post('nip_anggota'),
        );
        $nip_anggota= $this->input->post('nip_anggota');
        $this->db->where('nip_anggota',$nip_anggota);
        $this->db->update('tbl_anggota',$data);
    }

}

?>
