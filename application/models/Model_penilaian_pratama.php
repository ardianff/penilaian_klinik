<?php

class Model_penilaian_pratama extends CI_Model
{
	function add()
	{
		$data = [
			'id_klinik' => id_klinik_pratama(),
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
	public function get_data_pratama()
	{
		$query = $this->db->order_by('status_penilaian', 'DESC')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan = tbl_klinik.id_kelurahan_klinik')
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_klinik.id_kecamatan_klinik')
			->order_by('id_klinik', 'DESC')
			->get_where('tbl_klinik', array('kemampuan_pelayanan' => "Pratama"))->result();
		return $query;
	}
	public function get_anggota()
	{
		$query = $this->db->get('tbl_anggota')->result();
		return $query;
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
	public function get_no_penilaian()
	{
		$query = $this->db->get('tbl_penilaian')->result();
		return $query;
	}
	public function get_question_next()
	{
		$query = $this->db->query("SELECT tbl_group_pratama.group_name,tbl_deskripsi_penilaian_pratama.id_deskripsi, tbl_deskripsi_penilaian_pratama.kriteria_penilaian_pratama, tbl_deskripsi_penilaian_pratama.jumlah_minimal_penilaian_pratama, tbl_deskripsi_penilaian_pratama.satuan_penilaian_pratama FROM tbl_deskripsi_penilaian_pratama INNER JOIN tbl_group_pratama ON tbl_group_pratama.id_group = tbl_deskripsi_penilaian_pratama.id_group")->result();
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
	function get_klinik_by_id($id_klinik)
	{
		$query = $this->db->get_where('tbl_klinik', array('id_klinik' =>  $id_klinik));
		return $query;
	}
	function get_data_kelurahan($id_kecamatan)
	{
		$query = $this->db->query("SELECT * FROM tbl_kelurahan WHERE tbl_kelurahan.id_kecamatan = '$id_kecamatan' ORDER BY tbl_kelurahan.nama_kelurahan ASC");
		return $query->result();
	}
	function get_data_by_id($id_klinik)
	{
		$query = $this->db->get_where('tbl_klinik', array('id_klinik' =>  $id_klinik));
		return $query;
	}
	function simpan_penilaian_pratama_pertama()
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
		// print_r($data);
		$this->db->insert_batch('tbl_penilaian_pratama_form_satu', $data);
	}
	function update_penilaian_pratama_pertama()
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
			$data = array(
				'id_rincian_penilaian' => $rinci,
				'id_klinik' => $id_klinik,
				'no_penilaian' => $no_penilaian,
				'catatan_hasil_penilaian' => $catatan_penilaian[$i],
				'jawab_hasil' => $jawab_hasil[$i],
				'jawab_hasil_verif' => $jawab_hasil_verif[$i]
			);
			$i++;
			$array = array('id_klinik =' => $id_klinik, 'no_penilaian =' => $no_penilaian, 'id_rincian_penilaian =' => $rinci);
			$this->db->where($array);
			$this->db->update('tbl_penilaian_pratama_form_satu', $data);
		}
	}
	function simpan_penilaian_pratama_kedua()
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
				'id_klinik' => $id_klinik,
				'no_penilaian' => $no_penilaian,
				'hasil_penilaian' => $hasil_penilaian[$i],
				'jumlah_ketersediaan' => $jumlah_ketersediaan[$i],
				'satuan_penilaian' => $satuan_penilaian[$i],
				'catatan_penilaian' => $catatan_penilaian[$i]
			));
			$i++;
		}
		$this->db->insert_batch('tbl_penilaian_pratama_form_kedua', $data);
	}
	function update_penilaian_pratama_kedua()
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
			$data = array(
				'id_deskripsi' => $kt,
				'id_klinik' => $id_klinik,
				'no_penilaian' => $no_penilaian,
				'hasil_penilaian' => $hasil_penilaian[$i],
				'jumlah_ketersediaan' => $jumlah_ketersediaan[$i],
				'satuan_penilaian' => $satuan_penilaian[$i],
				'catatan_penilaian' => $catatan_penilaian[$i]
			);
			$i++;
			$array = array('id_klinik =' => $id_klinik, 'no_penilaian =' => $no_penilaian, 'id_deskripsi =' => $kt);
			$this->db->where($array);
			$this->db->update('tbl_penilaian_pratama_form_kedua', $data);
		}
	}
	function simpan_penilaian_pratama_ketiga($image)
	{
		$data = [
			'no_penilaian' => $this->input->post('no_penilaian'),
			'id_klinik' => $this->input->post('id_klinik'),
			'usulan_rekomendasi' => $this->input->post('pilihan_jawaban'),
			'ttd_penilai' => $image,
			'uraian_penilaian' => $this->input->post('uraian_penilaian_klinik'),
			'tindak_lanjut_klinik' => $this->input->post('pilihan_jawaban_klinik'),
			'nama_perwakilan_pihak_klinik' => $this->input->post('nama_perwakilan_klinik'),
			'jabatan_perwakilan_pihak_klinik' => $this->input->post('jabatan_perwakilan_klinik'),
		];
		$this->db->insert('tbl_penilaian_pratama_form_ketiga', $data);

		$update = ['status_penilaian' => "Sudah"];
		$id_klinik = $this->input->post('id_klinik');
		$this->db->where('id_klinik', $id_klinik);
		$this->db->update('tbl_klinik', $update);
	}
	function update_penilaian_pratama_ketiga($image)
	{
		$data = [
			'usulan_rekomendasi' => $this->input->post('pilihan_jawaban'),
			'uraian_penilaian' => $this->input->post('uraian_penilaian_klinik'),
			'ttd_penilai' => $image,
			'tindak_lanjut_klinik' => $this->input->post('pilihan_jawaban_klinik'),
			'nama_perwakilan_pihak_klinik' => $this->input->post('nama_perwakilan_klinik'),
			'jabatan_perwakilan_pihak_klinik' => $this->input->post('jabatan_perwakilan_klinik'),
		];
		$id_klinik = $this->input->post('id_klinik');
		$no_penilaian = $this->input->post('no_penilaian');
		$this->db->where('id_klinik', $id_klinik);
		$this->db->where('no_penilaian', $no_penilaian);
		$cek_data = $this->db->update('tbl_penilaian_pratama_form_ketiga', $data);
		// print_r($this->db->last_query($cek_data));
	}
}
