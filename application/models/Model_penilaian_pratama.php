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
        if ($this->input->post('hasil1') == 'Ya') {
            $data = [
                'no_penilaian' => $this->input->post('no_penilaian'),
                'id_rincian_penilaian' => $this->input->post('rincian1'),
                'p1' => $this->input->post('hasil1'),
                'p2' => $this->input->post('hasil_verifikasi1'),
                'p3' => $this->input->post('catatan_penilaian1'),
                'id_rincian_penilaian' => $this->input->post('rincian2'),
                'p4' => $this->input->post('hasil2'),
                'p5' => $this->input->post('hasil_verifikasi2'),
                'p6' => $this->input->post('catatan_penilaian2'),
            ];
            $this->db->insert('tbl_penilaian_pratama', $data);
        }
    }
}

?>