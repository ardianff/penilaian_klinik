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

    // function update()
    // {
    //     $data = [
    //         'nama_anggota' => $this->input->post('nama_anggota'),
    //         'nip_anggota' => $this->input->post('nip_anggota'),
    //     ];
    //     $nip_anggota = $this->input->post('nip_anggota');
    //     $this->db->where('nip_anggota', $nip_anggota);
    //     $this->db->update('tbl_anggota', $data);
    // }
    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, ['kode_anggota' => $id]);
    }
    function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    function getById($id)
    {
        return $this->db
            ->get_where($this->table, ['kode_anggota' => $id])
            ->row();
    }
}

?>
