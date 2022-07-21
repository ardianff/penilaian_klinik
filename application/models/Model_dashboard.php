<?php
class Model_dashboard extends CI_Model
{
	public function get_data_pratama()
	{
		$query = $this->db
			->select('count(kemampuan_pelayanan) as total_klinik')
			->where_in('kemampuan_pelayanan', array('Pratama Umum', 'Utama Umum', 'Pratama Kecantikan', 'Utama Kecantikan'))
			->get_where('tbl_klinik', ['delete' => '0'])->result();
		return $query;
	}
	public function get_data_utama()
	{
		$query = $this->db
			->select('count(kemampuan_pelayanan) as total_klinik')
			->where_in('kemampuan_pelayanan', array('Pratama Gigi', 'Utama Gigi'))
			->get_where('tbl_klinik', ['delete' => '0'])->result();
		return $query;
	}
	public function get_data_tim_penilai()
	{
		$query = $this->db
			->select('count(id_anggota) as total_anggota')
			->get_where('tbl_anggota', ['delete' => '0'])->result();
		return $query;
	}
	public function get_data_user()
	{
		$query = $this->db
			->select('count(id_user) as total_user')
			->get_where('tbl_user', ['delete' => '0'])->result();
		return $query;
	}
	public function get_data_rincian_penilaian_pratama_kesatu()
	{
		$query = $this->db
			->select('count(id_rincian_penilaian) as total_rincian')
			->get_where('tbl_rincian_penilaian_pratama', ['delete' => '0'])->result();
		return $query;
	}
	public function get_data_rincian_penilaian_pratama_kedua()
	{
		$query = $this->db
			->select('count(id_deskripsi) as total_rincian')
			->get_where('tbl_deskripsi_penilaian_pratama', ['delete' => '0'])->result();
		return $query;
	}
	public function get_data_rincian_penilaian_utama_kesatu()
	{
		$query = $this->db
			->select('count(id_rincian_penilaian) as total_rincian')
			->get_where('tbl_rincian_penilaian_utama', ['delete' => '0'])->result();
		return $query;
	}
	public function get_data_rincian_penilaian_utama_kedua()
	{
		$query = $this->db
			->select('count(id_deskripsi) as total_rincian')
			->get_where('tbl_deskripsi_penilaian_utama', ['delete' => '0'])->result();
		return $query;
	}
}