<?php
class Model_rincian_penilaian_utama extends CI_Model
{
    function add()
    {
        $data = [
            'rincian_penilaian' => $this->input->post('rincian_penilaian'),
            'keterangan_penilaian' => $this->input->post(
                'keterangan_penilaian'
            ),
        ];
        $this->db->insert('tbl_rincian_penilaian_utama', $data);
    }
    function update()
    {
        $data = [
            'rincian_penilaian' => $this->input->post('rincian_penilaian'),
            'keterangan_penilaian' => $this->input->post(
                'keterangan_penilaian'
            ),
        ];
        $id_rincian_penilaian = $this->input->post('id_rincian_penilaian');
        $this->db->where('id_rincian_penilaian', $id_rincian_penilaian);
        $this->db->update('tbl_rincian_penilaian_utama', $data);
    }
}
?>
