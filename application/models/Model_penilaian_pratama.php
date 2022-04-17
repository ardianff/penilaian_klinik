<?php

class Model_penilaian_pratama extends CI_Model
{
    public function add()
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
            'tgl_visitasi' => $this->input->post('tgl_visitasi'),
            'no_surat' => $this->input->post('no_surat'),
            'status_penilaian' => "Belum",
        ];
        $this->db->insert('tbl_klinik', $data);
    }
    public function update()
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
            'tgl_visitasi' => $this->input->post('tgl_visitasi'),
            'no_surat' => $this->input->post('no_surat'),
        ];
        $id_klinik = $this->input->post('id_klinik');
        $this->db->where('id_klinik', $id_klinik);
        $this->db->update('tbl_klinik', $data);
    }
    public function get_data_pratama()
    {
        $this->db->select('*');
        $this->db->from('tbl_klinik');
        $this->db->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan = tbl_klinik.id_kelurahan_klinik');
        $this->db->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_klinik.id_kecamatan_klinik');
        $this->db->order_by('status_penilaian', 'DESC');
        $this->db->order_by('id_klinik', 'DESC');
        $this->db->where_in('kemampuan_pelayanan', array('Pratama Umum', 'Utama Umum'));
        return $this->db->get();
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
    public function getById($id)
    {
        return $this->db
            ->get_where('tbl_klinik', ['no_penilaian' => $id])
            ->row();
    }
    public function get_data_kecamatan()
    {
        $query = $this->db->order_by('nama_kecamatan', 'ASC')->get('tbl_kecamatan')->result();
        return $query;
    }
    public function get_klinik_by_id($id_klinik)
    {
        $query = $this->db->get_where('tbl_klinik', array('id_klinik' => $id_klinik));
        return $query;
    }
    public function get_data_kelurahan($id_kecamatan)
    {
        $query = $this->db->query("SELECT * FROM tbl_kelurahan WHERE tbl_kelurahan.id_kecamatan = '$id_kecamatan' ORDER BY tbl_kelurahan.nama_kelurahan ASC");
        return $query->result();
    }
    public function get_data_by_id($id_klinik)
    {
        $query = $this->db->get_where('tbl_klinik', array('id_klinik' => $id_klinik));
        return $query;
    }
    public function simpan_penilaian_pratama_pertama()
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
                'jawab_hasil_verif' => $jawab_hasil_verif[$i],
            ));
            $i++;
        }
        $this->db->insert_batch('tbl_penilaian_pratama_form_satu', $data);


        $update = ['status_penilaian' => "Sedang"];
        $id_klinik = $this->input->post('id_klinik');
        $this->db->where('id_klinik', $id_klinik);
        $this->db->update('tbl_klinik', $update);
    }
    public function update_penilaian_pratama_pertama()
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
                'jawab_hasil_verif' => $jawab_hasil_verif[$i],
            );
            $i++;
            $array = array('id_klinik =' => $id_klinik, 'no_penilaian =' => $no_penilaian, 'id_rincian_penilaian =' => $rinci);
            $this->db->where($array);
            $this->db->update('tbl_penilaian_pratama_form_satu', $data);
        }
    }
    public function simpan_penilaian_pratama_kedua()
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
                'catatan_penilaian' => $catatan_penilaian[$i],
            ));
            $i++;
        }
        $this->db->insert_batch('tbl_penilaian_pratama_form_kedua', $data);
    }
    public function update_penilaian_pratama_kedua()
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
                'catatan_penilaian' => $catatan_penilaian[$i],
            );
            $i++;
            $array = array('id_klinik =' => $id_klinik, 'no_penilaian =' => $no_penilaian, 'id_deskripsi =' => $kt);
            $this->db->where($array);
            $this->db->update('tbl_penilaian_pratama_form_kedua', $data);
        }
    }
    // public function upload()
    // {
    //     $nama_klinik = $this->input->post('id_klinik');
    //     $naming = $nama_klinik . '_' . uniqid();
    //     $config = array(
    //         'upload_path' => "./assets/img/uploads/foto_klinik/",
    //         'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF",
    //         'overwrite' => true,
    //         'max_size' => "5120",
    //         'remove_space' => true,
    //         'file_name' => $naming,
    //     );
    //     // die();
    //     $this->load->library('upload', $config); // Load konfigurasi uploadnya
    //     if ($this->upload->do_upload('foto_klinik')) { // Lakukan upload dan Cek jika proses upload berhasil
    //         // Jika berhasil :
    //         $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    //         return $return;
    //     } else {
    //         // Jika gagal :
    //         $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    //         return $return;
    //     }
    // }
    public function simpan_penilaian_pratama_ketiga($uploadData, $image, $imagettd1, $imagettd2, $imagettd3, $imagettd4)
    {
        $foto_klinik = json_encode($uploadData);
        $result_foto = preg_replace("/[^a-zA-Z0-9-_.,]/", "", $foto_klinik);
        $data = [
            'no_penilaian' => $this->input->post('no_penilaian'),
            'id_klinik' => $this->input->post('id_klinik'),
            'usulan_rekomendasi' => $this->input->post('pilihan_jawaban'),
            'ttd_perwakilan_klinik' => $image,
            'foto_klinik' => $result_foto,
            'ttd_perwakilan_klinik' => $image,
            'ttd_penilai1' => $imagettd1,
            'ttd_penilai2' => $imagettd2,
            'ttd_penilai3' => $imagettd3,
            'ttd_penilai4' => $imagettd4,
            'uraian_penilaian' => $this->input->post('uraian_penilaian_klinik'),
            'tindak_lanjut_klinik' => $this->input->post('pilihan_jawaban_klinik'),
            'nama_perwakilan_pihak_klinik' => $this->input->post('nama_perwakilan_klinik'),
            'jabatan_perwakilan_pihak_klinik' => $this->input->post('jabatan_perwakilan_klinik'),

        ];
        $this->db->insert('tbl_penilaian_pratama_form_ketiga', $data);

        $update = [
            'status_penilaian' => "Sudah",
            'nama_perwakilan' => $this->input->post('nama_perwakilan_klinik'),
            'jabatan_perwakilan' =>  $this->input->post('jabatan_perwakilan_klinik')
        ];
        $id_klinik = $this->input->post('id_klinik');
        $this->db->where('id_klinik', $id_klinik);
        $this->db->update('tbl_klinik', $update);
    }
    public function update_penilaian_pratama_ketiga($uploadData, $image, $imagettd1, $imagettd2, $imagettd3, $imagettd4)
    {
        $foto_klinik = json_encode($uploadData);
        $result_foto = preg_replace("/[^a-zA-Z0-9-_.,]/", "", $foto_klinik);
        $input = [
            'usulan_rekomendasi' => $this->input->post('pilihan_jawaban'),
            'ttd_perwakilan_klinik' => $image,
            'foto_klinik' => $result_foto,
            'ttd_perwakilan_klinik' => $image,
            'ttd_penilai1' => $imagettd1,
            'ttd_penilai2' => $imagettd2,
            'ttd_penilai3' => $imagettd3,
            'ttd_penilai4' => $imagettd4,
            'uraian_penilaian' => $this->input->post('uraian_penilaian_klinik'),
            'tindak_lanjut_klinik' => $this->input->post('pilihan_jawaban_klinik'),
            'nama_perwakilan_pihak_klinik' => $this->input->post('nama_perwakilan_klinik'),
            'jabatan_perwakilan_pihak_klinik' => $this->input->post('jabatan_perwakilan_klinik'),
        ];
        $id_klinik = $this->input->post('id_klinik');
        $no_penilaian = $this->input->post('no_penilaian');
        $this->db->where('id_klinik', $id_klinik);
        $this->db->where('no_penilaian', $no_penilaian);
        $this->db->update('tbl_penilaian_pratama_form_ketiga', $input);

        $update = [
            'nama_perwakilan' => $this->input->post('nama_perwakilan_klinik'),
            'jabatan_perwakilan' =>  $this->input->post('jabatan_perwakilan_klinik')
        ];
        $this->db->where('id_klinik', $id_klinik);
        $this->db->update('tbl_klinik', $update);
    }
}