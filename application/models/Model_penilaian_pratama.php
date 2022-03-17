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
            'tgl_penilaian' => $this->input->post('tgl_penilaian'),
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
        $query = $this->db->get_where('tbl_klinik', array('kemampuan_pelayanan'=="pratama"))->result();
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
    function getById($id)
    {
        return $this->db
            ->get_where('tbl_klinik', ['no_penilaian' => $id])
            ->row();
    }
    function simpan_penilaian()
    {
        // $data = array(
		// 	array(
		// 	   'no_penilaian' => $this->input->post('no_penilaian') ,
		// 	   'id_rincian_penilaian' => $this->input->post('rincian1'), 
		// 	   'jawab_hasil' => $this->input->post('hasil1'),
		// 	   'jawab_hasil_verif' => $this->input->post('hasil_verifikasi1'),
		// 	   'catatan_hasil_penilaian' => $this->input->post('catatan_penilaian1')
		// 	),
		// 	array(
		// 		'no_penilaian' => $this->input->post('no_penilaian') ,
		// 		'id_rincian_penilaian' => $this->input->post('rincian2'),
		// 		'jawab_hasil' => $this->input->post('hasil2'),
		// 		'jawab_hasil_verif' => $this->input->post('hasil_verifikasi2'),
		// 		'catatan_hasil_penilaian' => $this->input->post('catatan_penilaian2')
		// 	)
		//  );
		$rincian = $_POST['rincian'];
		$no_penilaian = $_POST['no_penilaian'];
		$jawab_hasil = $_POST['hasil'];
		$jawab_hasil_verif = $_POST['hasil_verifikasi'];
		$catatan_penilaian = $_POST['catatan_penilaian'];
		$data = array();

		$i = 1;
		foreach ($rincian as $rinci){
			array_push($data,array(
				'id_rincian_penilaian'=>$rinci,
				'no_penilaian'=>$no_penilaian,
				'catatan_hasil_penilaian' => $catatan_penilaian[$i],
				'jawab_hasil' => $jawab_hasil[$i],
				'jawab_hasil_verif' => $jawab_hasil_verif[$i]
			));
			$i++;
		}
		$this->db->insert_batch('tbl_penilaian_pratama', $data);
		// if($this->db->insert_batch('tbl_penilaian_pratama', $data) == true){ // Jika sukses
		// 	echo "<script>alert('Data berhasil disimpan');window.location = '".base_url('penilaian_pratama')."';</script>";
		// }else{ // Jika gagal
		// 	echo "<script>alert('Data gagal disimpan');window.location = '".base_url('penilaian_pratama')."';</script>";
		// }
    }
}

?>
