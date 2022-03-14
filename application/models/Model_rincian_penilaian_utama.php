<?php
class Model_rincian_penilaian_utama extends CI_Model
{
    private $table = 'tbl_rincian_penilaian_utama';
    function add()
    {
        $data = [
            'rincian_penilaian' => $this->input->post('rincian_penilaian'),
            'keterangan_penilaian' => $this->input->post(
                'keterangan_penilaian'
            ),
        ];
        $this->db->insert($this->table, $data);
    }
    // function update()
    // {
    //     $data = [
    //         'rincian_penilaian' => $this->input->post('rincian_penilaian'),
    //         'keterangan_penilaian' => $this->input->post(
    //             'keterangan_penilaian'
    //         ),
    //     ];
    //     $id_rincian_penilaian = $this->input->post('id_rincian_penilaian');
    //     $this->db->where('id_rincian_penilaian', $id_rincian_penilaian);
    //     $this->db->update($this->table, $data);
    // }
    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, [
            'id_rincian_penilaian' => $id,
        ]);
    }
    public function get_rincian_penilaian_klinik_utama()
    {
        $query = $this->db->get($this->table)->result();
        return $query;
    }
    function getById($id)
    {
        return $this->db
            ->get_where($this->table, ['id_rincian_penilaian' => $id])
            ->row();
    }
}
?>
