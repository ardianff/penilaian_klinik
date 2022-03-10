<?php

class Model_penilaian_utama extends CI_Model
{
    function add()
    {
        $data = [
            'no_penilaian' => no_penilaian(),
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
            'nama_pasien' => $this->input->post('nama_pasien'),
            'no_ktp' => $this->input->post('no_ktp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'gol_dar' => $this->input->post('gol_dar'),
            'status_pernikahan' => $this->input->post('status_pernikahan'),
            'agama' => $this->input->post('agama_pasien'),
            'alamat_pasien' => $this->input->post('alamat_pasien'),
            'keluhan_pasien' => $this->input->post('keluhan_pasien'),
            'tgl_kedatangan_pasien' => $this->input->post(
                'tgl_kedatangan_pasien'
            ),
            'tgl_lahir_pasien' => $this->input->post('tgl_lahir_pasien'),
        ];
        $no_cm = $this->input->post('no_cm');
        $this->db->where('no_cm', $no_cm);
        $this->db->update('tbl_pasien', $data);
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
}

?>
