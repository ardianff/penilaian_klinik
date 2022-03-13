<?php

class Model_tim extends CI_Model
{
    private $table = 'tbl_anggota';
    function add()
    {
        $data = [
            'nama_anggota' => $this->input->post('nama_anggota'),
            'nip_anggota' => $this->input->post('nip_anggota'),
        ];
        $this->db->insert('tbl_anggota', $data);
    }

    function update()
    {
        $data = [
            'nama_anggota' => $this->input->post('nama_anggota'),
            'nip_anggota' => $this->input->post('nip_anggota'),
        ];
        $nip_anggota = $this->input->post('nip_anggota');
        $this->db->where('nip_anggota', $nip_anggota);
        $this->db->update('tbl_anggota', $data);
    }
    function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}

?>
