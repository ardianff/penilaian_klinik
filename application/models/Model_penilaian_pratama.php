<?php

class Model_penilaian_pratama extends CI_Model
{
	function add()
	{
		$data = [
			'no_penilaian' => no_penilaian_pratama(),
			'nama_admin' => $this->session->userdata('nama_user'),
			'nama_anggota1' => $this->input->post('nama_anggota1'),
			'nama_anggota2' => $this->input->post('nama_anggota2'),
			'nama_anggota3' => $this->input->post('nama_anggota3'),
			'nama_anggota4' => $this->input->post('nama_anggota4'),
			'nama_klinik' => $this->input->post('nama_klinik'),
			'kemampuan_pelayanan' => $this->input->post('kemampuan_pelayanan'),
			'jenis_pelayanan_klinik' => $this->input->post('jenis_pelayanan'),
			'alamat_klinik' => $this->input->post('alamat_klinik'),
			'id_kecamatan_klinik' => $this->input->post('nama_kecamatan'),
			'id_kelurahan_klinik' => $this->input->post('nama_kelurahan'),
			'tgl_penilaian' => $this->input->post('tgl_penilaian'),
			'status_penilaian' => "Belum",
		];
		$this->db->insert('tbl_klinik', $data);
	}
	function update()
	{
		$data = [
			'no_penilaian' => no_penilaian_pratama(),
			'nama_admin' => $this->session->userdata('nama_user'),
			'nama_anggota1' => $this->input->post('nama_anggota1'),
			'nama_anggota2' => $this->input->post('nama_anggota2'),
			'nama_anggota3' => $this->input->post('nama_anggota3'),
			'nama_anggota4' => $this->input->post('nama_anggota4'),
			'nama_klinik' => $this->input->post('nama_klinik'),
			'kemampuan_pelayanan' => $this->input->post('kemampuan_pelayanan'),
			'jenis_pelayanan_klinik' => $this->input->post('jenis_pelayanan'),
			'alamat_klinik' => $this->input->post('alamat_klinik'),
			'tgl_penilaian' => $this->input->post('tgl_penilaian'),
		];
		$no_penilaian = $this->input->post('no_penilaian');
		$this->db->where('no_penilaian', $no_penilaian);
		$this->db->update('tbl_klinik', $data);
	}
	public function get_data_all()
	{
		$query = $this->db->order_by('status_penilaian', 'DESC')
			->order_by('no_penilaian', 'DESC')
			->get_where('tbl_klinik', array('kemampuan_pelayanan' => "pratama"))->result();
		return $query;
	}
	public function get_anggota()
	{
		// $query = $this->db->get('tbl_anggota')->result();
		// return $query;
		return $this->db->get('tbl_anggota')->result();
	}
	public function get_setting()
	{
		$site = $this->db->get('tbl_klinik')->result();
		return $site;
	}
	public function get_rincian_penilaian()
	{
		$query = $this->db->get('tbl_rincian_penilaian_pratama')->result();
		return $query;
	}
	public function get_group_penilaian_pratama()
	{
		$query = $this->db->get('tbl_group_pratama')->result();
		return $query;
	}
	public function get_question_next()
	{
		$query = $this->db->query("SELECT tbl_group_pratama.group_name, tbl_deskripsi_penilaian_pratama.kriteria_penilaian_pratama, tbl_deskripsi_penilaian_pratama.jumlah_minimal_penilaian_pratama, tbl_deskripsi_penilaian_pratama.satuan_penilaian_pratama FROM tbl_deskripsi_penilaian_pratama INNER JOIN tbl_group_pratama ON tbl_group_pratama.id_group = tbl_deskripsi_penilaian_pratama.id_group")->result();
		return $query;
	}
	function getById($id)
	{
		return $this->db
			->get_where('tbl_klinik', ['no_penilaian' => $id])
			->row();
	}
	function get_data_kecamatan()
	{
		$query = $this->db->order_by('nama_kecamatan', 'ASC')->get('tbl_kecamatan')->result();
		return $query;
	}
	function get_data_kelurahan($id_kecamatan)
	{
		$query = $this->db->query("SELECT * FROM tbl_kelurahan WHERE tbl_kelurahan.id_kecamatan = '$id_kecamatan' ORDER BY tbl_kelurahan.nama_kelurahan ASC");
		return $query->result();
	}
	function simpan_penilaian()
	{
		$rincian = $_POST['rincian'];
		$no_penilaian = $_POST['no_penilaian'];
		$jawab_hasil = $_POST['hasil'];
		$jawab_hasil_verif = $_POST['hasil_verifikasi'];
		$catatan_penilaian = $_POST['catatan_penilaian'];
		$data = array();

		$i = 1;
		foreach ($rincian as $rinci) {
			array_push($data, array(
				'id_rincian_penilaian' => $rinci,
				'no_penilaian' => $no_penilaian,
				'catatan_hasil_penilaian' => $catatan_penilaian[$i],
				'jawab_hasil' => $jawab_hasil[$i],
				'jawab_hasil_verif' => $jawab_hasil_verif[$i]
			));
			$i++;
		}
		$this->db->insert_batch('tbl_penilaian_pratama', $data);
	}
}
