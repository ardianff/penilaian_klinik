<?php
class Model_rincian_penilaian_pratama extends CI_Model
{
	private $table = 'tbl_rincian_penilaian_pratama';
	function add()
	{
		$data = [
			'rincian_penilaian' => $this->input->post('rincian_penilaian'),
			'keterangan_penilaian' => $this->input->post('keterangan_penilaian'),
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
	function get_rincian_penilaian_klinik_pratama_kedua()
	{
		$query = $this->db
			->join('tbl_group_pratama', 'tbl_group_pratama.id_group=tbl_deskripsi_penilaian_pratama.id_group')
			->get('tbl_deskripsi_penilaian_pratama')->result();
		return $query;
	}
	function getByIdKedua($id)
	{
		return $this->db
			->get_where('tbl_deskripsi_penilaian_pratama', ['id_deskripsi' => $id])
			->row();
	}
	public function update_kedua($data, $id)
	{
		return $this->db->update('tbl_deskripsi_penilaian_pratama', $data, [
			'id_deskripsi' => $id,
		]);
	}
	public function get_group_penilaian_pratama()
	{
		$query = $this->db->get('tbl_group_pratama')->result();
		return $query;
	}
	function simpan_penilaian_pratama_kedua()
	{
		$data = [
			'id_group' => $this->input->post('group_name'),
			'kriteria_penilaian_pratama' => $this->input->post('rincian_penilaian'),
			'jumlah_minimal_penilaian_pratama' => $this->input->post('jumlah_penilaian'),
			'satuan_penilaian_pratama' => $this->input->post('satuan_penilaian'),
		];
		$this->db->insert('tbl_deskripsi_penilaian_pratama', $data);
	}
	function add_group()
	{
		$data = [
			'group_name' => $this->input->post('nama_group'),
		];
		$this->db->insert('tbl_group_pratama', $data);
	}
	function getByIdGroup($id)
	{
		return $this->db
			->get_where('tbl_group_pratama', ['id_group' => $id])
			->row();
	}
	public function update_group($data, $id)
	{
		return $this->db->update('tbl_group_pratama', $data, [
			'id_group' => $id,
		]);
	}
}
