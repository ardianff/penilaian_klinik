<?php

class Model_penilaian_utama extends CI_Model
{
	function add()
	{
		$data = [
			'id_klinik' => id_klinik_utama(),
			'nama_user' => $this->session->userdata('nama_user'),
			'nama_anggota1' => $this->input->post('nama_anggota1'),
			'nama_anggota2' => $this->input->post('nama_anggota2'),
			'nama_anggota3' => $this->input->post('nama_anggota3'),
			'nama_anggota4' => $this->input->post('nama_anggota4'),
			'nama_klinik' => $this->input->post('nama_klinik'),
			'kemampuan_pelayanan' => $this->input->post('kemampuan_pelayanan'),
			'jenis_pelayanan_klinik' => $this->input->post('jenis_pelayanan'),
			'alamat_klinik' => $this->input->post('alamat_klinik'),
			'tgl_penilaian' => $this->input->post('tgl_penilaian'),
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
			'nama_user' => $this->session->userdata('nama_user'),
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
		];
		$id_klinik = $this->input->post('id_klinik');
		$this->db->where('id_klinik', $id_klinik);
		$this->db->update('tbl_klinik', $data);
	}
	public function get_anggota()
	{
		$query = $this->db->get('tbl_anggota')->result();
		return $query;
	}
	public function get_klinik_utama()
	{
		$query = $this->db->order_by('status_penilaian', 'DESC')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan = tbl_klinik.id_kelurahan_klinik')
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_klinik.id_kecamatan_klinik')
			->order_by('id_klinik', 'DESC')
			->get_where('tbl_klinik', array('kemampuan_pelayanan' => "Utama"))->result();
		return $query;
	}
	public function get_setting()
	{
		$site = $this->db->get('tbl_klinik')->result();
		return $site;
	}
	function get_data_kecamatan()
	{
		$query = $this->db->order_by('nama_kecamatan', 'ASC')->get('tbl_kecamatan')->result();
		return $query;
	}
	public function get_rincian_penilaian()
	{
		$query = $this->db->get('tbl_rincian_penilaian_utama')->result();
		return $query;
	}
	public function get_question_next()
	{
		$query = $this->db->query("SELECT tbl_group_utama.group_name,tbl_deskripsi_penilaian_utama.id_deskripsi, tbl_deskripsi_penilaian_utama.kriteria_penilaian_utama, tbl_deskripsi_penilaian_utama.jumlah_minimal_penilaian_utama, tbl_deskripsi_penilaian_utama.satuan_penilaian_utama FROM tbl_deskripsi_penilaian_utama INNER JOIN tbl_group_utama ON tbl_group_utama.id_group = tbl_deskripsi_penilaian_utama.id_group")->result();
		return $query;
	}
	function simpan_penilaian_utama_pertama()
	{
		$rincian = $_POST['rincian'];
		$no_penilaian = $_POST['no_penilaian'];
		$id_klinik = $_POST['id_klinik'];
		$jawab_hasil = $_POST['hasil'];
		$jawab_hasil_verif = $_POST['hasil_verifikasi'];
		$catatan_penilaian = $_POST['catatan_penilaian'];
		$data = array();

		$i = 1;
		foreach ($rincian as $rinci) {
			array_push($data, array(
				'id_rincian_penilaian' => $rinci,
				'id_klinik' => $id_klinik,
				'no_penilaian' => $no_penilaian,
				'catatan_hasil_penilaian' => $catatan_penilaian[$i],
				'jawab_hasil' => $jawab_hasil[$i],
				'jawab_hasil_verif' => $jawab_hasil_verif[$i]
			));
			$i++;
		}
		$this->db->insert_batch('tbl_penilaian_utama_form_satu', $data);
	}
	function update_penilaian_utama_pertama()
	{
		$rincian = $_POST['rincian'];
		$no_penilaian = $_POST['no_penilaian'];
		$id_klinik = $_POST['id_klinik'];
		$jawab_hasil = $_POST['hasil'];
		$jawab_hasil_verif = $_POST['hasil_verifikasi'];
		$catatan_penilaian = $_POST['catatan_penilaian'];
		$data = array();

		$i = 1;
		foreach ($rincian as $rinci) {
			array_push($data, array(
				'id_rincian_penilaian' => $rinci,
				'id_klinik' => $id_klinik,
				'no_penilaian' => $no_penilaian,
				'catatan_hasil_penilaian' => $catatan_penilaian[$i],
				'jawab_hasil' => $jawab_hasil[$i],
				'jawab_hasil_verif' => $jawab_hasil_verif[$i]
			));
			$i++;
		}
		$this->db->update_batch('tbl_penilaian_utama_form_satu', $data, 'id_rincian_penilaian');
	}
	function simpan_penilaian_utama_kedua()
	{
		$kriteria = $_POST['kriteria'];
		$id_klinik = $_POST['id_klinik'];
		$no_penilaian = $_POST['no_penilaian'];
		$hasil_penilaian = $_POST['hasil_nilai'];
		$jumlah_ketersediaan = $_POST['jumlah_ketersediaan'];
		$satuan_penilaian = $_POST['satuan_nilai'];
		$catatan_penilaian = $_POST['catatan_penilaian'];
		$data = array();

		$i = 1;
		foreach ($kriteria as $kt) {
			array_push($data, array(
				'id_deskripsi' => $kt,
				'no_penilaian' => $no_penilaian,
				'id_klinik' => $id_klinik,
				'hasil_penilaian' => $hasil_penilaian[$i],
				'jumlah_ketersediaan' => $jumlah_ketersediaan[$i],
				'satuan_penilaian' => $satuan_penilaian[$i],
				'catatan_penilaian' => $catatan_penilaian[$i]
			));
			$i++;
		}
		$this->db->insert_batch('tbl_penilaian_utama_form_kedua', $data);
	}
	function simpan_penilaian_utama_ketiga()
	{
		$data = [
			'no_penilaian' => $this->input->post('no_penilaian'),
			'id_klinik' => $this->input->post('id_klinik'),
			'usulan_rekomendasi' => $this->input->post('pilihan_jawaban'),
			'uraian_penilaian' => $this->input->post('uraian_penilaian_klinik'),
			'tindak_lanjut_klinik' => $this->input->post('pilihan_jawaban_klinik'),
			'nama_perwakilan_pihak_klinik' => $this->input->post('nama_perwakilan_klinik'),
			'jabatan_perwakilan_pihak_klinik' => $this->input->post('jabatan_perwakilan_klinik'),
		];
		$this->db->insert('tbl_penilaian_utama_form_ketiga', $data);

		$update = ['status_penilaian' => "Sudah"];
		$id_klinik = $this->input->post('id_klinik');
		$this->db->where('id_klinik', $id_klinik);
		$this->db->update('tbl_klinik', $update);
	}
	function update_penilaian_utama_ketiga()
	{
		$data = [
			'usulan_rekomendasi' => $this->input->post('pilihan_jawaban'),
			'uraian_penilaian' => $this->input->post('uraian_penilaian_klinik'),
			'tindak_lanjut_klinik' => $this->input->post('pilihan_jawaban_klinik'),
			'nama_perwakilan_pihak_klinik' => $this->input->post('nama_perwakilan_klinik'),
			'jabatan_perwakilan_pihak_klinik' => $this->input->post('jabatan_perwakilan_klinik'),
		];
		$id_klinik = $this->input->post('id_klinik');
		$no_penilaian = $this->input->post('no_penilaian');
		$this->db->where('id_klinik', $id_klinik);
		$this->db->where('no_penilaian', $no_penilaian);
		$this->db->update('tbl_penilaian_utama_form_ketiga', $data);
	}
}
