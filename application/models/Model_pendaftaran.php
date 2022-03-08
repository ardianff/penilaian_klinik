<?php

Class Model_pendaftaran extends CI_Model {

    function add() {
        $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            // 'id_jenis_pasien' => $this->input->post('2'),
            'no_ktp' => $this->input->post('no_ktp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'gol_dar' => $this->input->post('gol_dar'),
            'status_pernikahan' => $this->input->post('status_pernikahan'),
            'agama' => $this->input->post('agama_pasien'),
            'alamat_pasien' => $this->input->post('alamat_pasien'),
            'keluhan_pasien' => $this->input->post('keluhan_pasien'),
            'tgl_kedatangan_pasien' => $this->input->post('tgl_kedatangan_pasien'),
            'tgl_lahir_pasien' => $this->input->post('tgl_lahir_pasien'),
            'no_cm'=> no_cm()
        );
        $this->db->insert('tbl_pasien',$data);
    }
    
    function update(){
        $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'no_ktp' => $this->input->post('no_ktp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'gol_dar' => $this->input->post('gol_dar'),
            'status_pernikahan' => $this->input->post('status_pernikahan'),
            'agama' => $this->input->post('agama_pasien'),
            'alamat_pasien' => $this->input->post('alamat_pasien'),
            'keluhan_pasien' => $this->input->post('keluhan_pasien'),
            'tgl_kedatangan_pasien' => $this->input->post('tgl_kedatangan_pasien'),
            'tgl_lahir_pasien' => $this->input->post('tgl_lahir_pasien'),
        );
        $no_cm= $this->input->post('no_cm');
        $this->db->where('no_cm',$no_cm);
        $this->db->update('tbl_pasien',$data);
    }

}

?>
