<?php
class Model_rincian_penilaian_pratama extends CI_Model
{
    private $table = 'tbl_rincian_penilaian_pratama';
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
    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, [
            'id_rincian_penilaian' => $id,
        ]);
    }
    public function get_rincian_penilaian_klinik_pratama()
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
