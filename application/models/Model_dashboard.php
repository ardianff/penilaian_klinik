<?php
class Model_dashboard extends CI_Model
{
	public function get_data_pratama()
	{
		$query = $this->db->query("SELECT COUNT(kemampuan_pelayanan) as total_klinik FROM `tbl_klinik` WHERE kemampuan_pelayanan IN ('Pratama Umum','Utama Umum')")->result();
		return $query;
	}
	public function get_data_utama()
	{
		$query = $this->db->query("SELECT COUNT(kemampuan_pelayanan) as total_klinik FROM `tbl_klinik` WHERE kemampuan_pelayanan IN ('Pratama Gigi', 'Utama Gigi')")->result();
		return $query;
	}
	public function get_data_tim_penilai()
	{
		$query = $this->db->query("SELECT COUNT(id_anggota) as total_anggota FROM tbl_anggota")->result();
		return $query;
	}
	public function get_data_user()
	{
		$query = $this->db->query("SELECT COUNT(id_user) as total_user FROM tbl_user")->result();
		return $query;
	}
	public function get_data_rincian_penilaian_pratama_kesatu()
	{
		$query = $this->db->query("SELECT COUNT(id_rincian_penilaian) as total_rincian FROM tbl_rincian_penilaian_pratama")->result();
		return $query;
	}
	public function get_data_rincian_penilaian_pratama_kedua()
	{
		$query = $this->db->query("SELECT COUNT(id_deskripsi) as total_rincian FROM tbl_deskripsi_penilaian_pratama")->result();
		return $query;
	}
	public function get_data_rincian_penilaian_utama_kesatu()
	{
		$query = $this->db->query("SELECT COUNT(id_rincian_penilaian) as total_rincian FROM tbl_rincian_penilaian_utama")->result();
		return $query;
	}
	public function get_data_rincian_penilaian_utama_kedua()
	{
		$query = $this->db->query("SELECT COUNT(id_deskripsi) as total_rincian FROM tbl_deskripsi_penilaian_utama")->result();
		return $query;
	}
}
