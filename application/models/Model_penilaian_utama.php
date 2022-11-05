<?php

class Model_penilaian_utama extends CI_Model
{
    private $table = 'tbl_klinik';
    public function add()
    {
        $data = [
            'id_klinik' => id_klinik_utama(),
            'nama_user' => $this->session->userdata('nama_user'),
            'nama_anggota1' => $this->input->post('nama_anggota1'),
            'nama_anggota2' => $this->input->post('nama_anggota2'),
            'nama_anggota3' => $this->input->post('nama_anggota3'),
            'nama_anggota4' => $this->input->post('nama_anggota4'),
            'nama_anggota5' => $this->input->post('nama_anggota5'),
            'nama_anggota6' => $this->input->post('nama_anggota6'),
            'nama_klinik' => $this->input->post('nama_klinik'),
            'kemampuan_pelayanan' => $this->input->post('kemampuan_pelayanan'),
            'jenis_pelayanan_klinik' => $this->input->post('jenis_pelayanan'),
            'alamat_klinik' => $this->input->post('alamat_klinik'),
            'id_kecamatan_klinik' => $this->input->post('nama_kecamatan'),
            'id_kelurahan_klinik' => $this->input->post('nama_kelurahan'),
            'tgl_visitasi' => $this->input->post('tgl_visitasi'),
            'no_surat' => $this->input->post('no_surat'),
            'no_bap' => $this->input->post('no_bap'),
            'status_penilaian' => 'Belum',
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
            'nama_anggota5' => $this->input->post('nama_anggota5'),
            'nama_anggota6' => $this->input->post('nama_anggota6'),
            'nama_klinik' => $this->input->post('nama_klinik'),
            'kemampuan_pelayanan' => $this->input->post('kemampuan_pelayanan'),
            'jenis_pelayanan_klinik' => $this->input->post('jenis_pelayanan'),
            'alamat_klinik' => $this->input->post('alamat_klinik'),
            'id_kecamatan_klinik' => $this->input->post('nama_kecamatan'),
            'id_kelurahan_klinik' => $this->input->post('nama_kelurahan'),
            'tgl_visitasi' => $this->input->post('tgl_visitasi'),
            'no_surat' => $this->input->post('no_surat'),
            'no_bap' => $this->input->post('no_bap'),
        ];
        $id_klinik = $this->input->post('id_klinik');
        $this->db->where('id_klinik', $id_klinik);
        $this->db->update('tbl_klinik', $data);
    }
    public function get_anggota()
    {
        $query = $this->db->get_where('tbl_anggota', ['delete' => 0])->result();
        return $query;
    }
    public function data_klinikutama($id_klinik)
    {
        $query = $this->db
            ->join(
                'tbl_kecamatan',
                'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik'
            )
            ->join(
                'tbl_kelurahan',
                'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik'
            )
            ->get_where('tbl_klinik', ['id_klinik' => $id_klinik])
            ->row_array();
        return $query;
    }
    public function data_updateklinikutama($id_klinik)
    {
        $query = $this->db
            ->join(
                'tbl_kecamatan as kec',
                'kec.id_kecamatan = k.id_kecamatan_klinik'
            )
            ->join(
                'tbl_kelurahan as kel',
                'kel.id_kelurahan = k.id_kelurahan_klinik'
            )
            ->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik])
            ->row_array();
        return $query;
    }
    public function delete_klinik($id)
    {
        $data = [
            'delete_at' => datetime_now(),
            'delete' => '1',
        ];
        return $this->db->update($this->table, $data, ['id_klinik' => $id]);
    }
    public function get_setting()
    {
        $site = $this->db->get('tbl_klinik')->result();
        return $site;
    }
    public function get_data_kecamatan()
    {
        $query = $this->db
            ->order_by('nama_kecamatan', 'ASC')
            ->get('tbl_kecamatan')
            ->result();
        return $query;
    }
    public function get_rincian_penilaian()
    {
        $query = $this->db
            ->get_where('tbl_rincian_penilaian_utama', ['delete' => '0'])
            ->result();
        return $query;
    }

    public function get_question_next()
    {
        // $query = $this->db->query("SELECT tbl_group_utama.group_name,tbl_deskripsi_penilaian_utama.id_deskripsi, tbl_deskripsi_penilaian_utama.kriteria_penilaian_utama, tbl_deskripsi_penilaian_utama.jumlah_minimal_penilaian_utama, tbl_deskripsi_penilaian_utama.satuan_penilaian_utama FROM tbl_deskripsi_penilaian_utama INNER JOIN tbl_group_utama ON tbl_group_utama.id_group = tbl_deskripsi_penilaian_utama.id_group")->result();
        $query = $this->db
            ->join(
                'tbl_group_utama as gu',
                'gu.id_group = dpu.id_group',
                'inner'
            )
            ->where(['gu.delete' => '0', 'dpu.delete' => '0'])
            ->get('tbl_deskripsi_penilaian_utama as dpu')
            ->result();
        return $query;
    }
    public function cek_no_penilaian($id_klinik)
    {
        $query = $this->db
            ->select(
                'p.no_penilaian ,p.id_klinik as id_klinik_tbl_pen , k.id_klinik as id_klinik_tbl_klinik, k.nama_klinik, k.kemampuan_pelayanan,k.jenis_pelayanan_klinik, k.alamat_klinik, k.tgl_visitasi,
		k.status_penilaian, k.created_at,k.update_at'
            )
            ->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik', 'left')
            ->join(
                'tbl_penilaian_utama_form_satu as pfs',
                'pfs.no_penilaian = p.no_penilaian',
                'left'
            )
            ->get_where('tbl_klinik k', [
                'k.id_klinik' => $id_klinik,
                'p.delete' => '0',
            ])
            ->row_array();
        return $query;
    }
    public function cek_hasil_penilaiansatu($id_klinik)
    {
        $query = $this->db
            ->select(
                'pfs.id_penilaian,pr.id_rincian_penilaian, pr.rincian_penilaian, pr.keterangan_penilaian, pfs.no_penilaian, pfs.jawab_hasil, pfs.jawab_hasil_verif, pfs.catatan_hasil_penilaian'
            )
            ->join(
                'tbl_penilaian_utama_form_satu as pfs',
                'pfs.id_rincian_penilaian = pr.id_rincian_penilaian',
                'left'
            )
            ->get_where('tbl_rincian_penilaian_utama pr', [
                'pfs.id_klinik' => $id_klinik,
                'pfs.delete' => '0',
            ])
            ->result();
        return $query;
    }
    public function cek_hasil_penilaiandua($id_klinik)
    {
        $query = $this->db
            ->select(
                'pfs.id_penilaian,pfs.no_penilaian,pfs.id_klinik, gp.group_name, pr.id_deskripsi as id_deskripsi_pr, pr.id_group,
		pr.kriteria_penilaian_utama, pr.jumlah_minimal_penilaian_utama, pr.satuan_penilaian_utama,
		pfs.id_penilaian,pfs.no_penilaian, pfs.id_klinik, pfs.id_deskripsi as id_deskripsi_pfs,
		pfs.hasil_penilaian, pfs.jumlah_ketersediaan, pfs.satuan_penilaian, pfs.catatan_penilaian'
            )
            ->join('tbl_group_utama as gp', 'gp.id_group = pr.id_group')
            ->join(
                'tbl_penilaian_utama_form_kedua as pfs',
                'pfs.id_deskripsi = pr.id_deskripsi',
                'left'
            )
            ->get_where('tbl_deskripsi_penilaian_utama as pr', [
                'pfs.id_klinik' => $id_klinik,
            ])
            ->result();
        return $query;
    }
    public function get_klinikwithpenilaiansatu($id_klinik)
    {
        $query = $this->db
            ->select(
                'p.no_penilaian  , k.id_klinik, k.nama_klinik , kel.nama_kelurahan, kel.kode_pos_kelurahan, kec.nama_kecamatan, k.kemampuan_pelayanan,k.jenis_pelayanan_klinik, k.alamat_klinik, k.tgl_visitasi,
        k .status_penilaian, k.created_at,k.update_at,pfs.jawab_hasil, pfs.jawab_hasil_verif, pfs.catatan_hasil_penilaian'
            )
            ->join(
                'tbl_kecamatan as kec',
                'kec.id_kecamatan = k.id_kecamatan_klinik'
            )
            ->join(
                'tbl_kelurahan as kel',
                'kel.id_kelurahan = k.id_kelurahan_klinik'
            )
            ->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik', 'left')
            ->join(
                'tbl_penilaian_utama_form_satu as pfs',
                'pfs.id_klinik = p.id_klinik',
                'left'
            )
            ->get_where('tbl_klinik k', [
                'k.id_klinik' => $id_klinik,
<<<<<<< HEAD
                'k.delete' => '0',
=======
<<<<<<< HEAD
                'k.delete' => '0',
=======
                'pfs.delete' => '0',
>>>>>>> df81f5d241c91f76152672a3ed13e95a3383298a
>>>>>>> 9c83f1c6dd9e6ac7ac191352efba175369100852
            ])
            ->row_array();
        return $query;
    }
    public function get_klinikwithpenilaiandua($id_klinik)
    {
        $query = $this->db
            ->select(
                'p.no_penilaian  , k.id_klinik, k.nama_klinik , kel.nama_kelurahan, kel.kode_pos_kelurahan, kec.nama_kecamatan, k.kemampuan_pelayanan,k.jenis_pelayanan_klinik, k.alamat_klinik, k.tgl_visitasi,
		k.status_penilaian, k.created_at,k.update_at,pfs.hasil_penilaian, pfs.jumlah_ketersediaan,pfs.satuan_penilaian, pfs.catatan_penilaian'
            )
            ->join(
                'tbl_kecamatan as kec',
                'kec.id_kecamatan = k.id_kecamatan_klinik'
            )
            ->join(
                'tbl_kelurahan as kel',
                'kel.id_kelurahan = k.id_kelurahan_klinik'
            )
            ->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik', 'left')
            ->join(
                'tbl_penilaian_utama_form_kedua as pfs',
                'pfs.id_klinik = p.id_klinik',
                'left'
            )
            ->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik])
            ->row_array();
        return $query;
    }
    public function get_klinikwithpenilaianketiga($id_klinik)
    {
        $query = $this->db
            ->select(
                'k.id_klinik,k.nama_klinik,k.nama_anggota1,k.nama_anggota2,k.nama_anggota3,k.nama_anggota4,k.nama_anggota5,k.nama_anggota6,k.kemampuan_pelayanan, k.jenis_pelayanan_klinik, k.alamat_klinik, kec.nama_kecamatan, kel.nama_kelurahan, kel.kode_pos_kelurahan,
		pfk.no_penilaian, pfk.usulan_rekomendasi, pfk.uraian_penilaian, pfk.tindak_lanjut_klinik, pfk.nama_perwakilan_pihak_klinik,pfk.jabatan_perwakilan_pihak_klinik,
		p.no_penilaian,pfk.ttd_perwakilan_klinik,pfk.ttd_penilai1,pfk.ttd_penilai2,pfk.ttd_penilai3,pfk.ttd_penilai4,pfk.ttd_penilai5,pfk.ttd_penilai6,pfk.update_at,pfk.foto_klinik  '
            )
            ->join(
                'tbl_kecamatan kec',
                'kec.id_kecamatan=k.id_kecamatan_klinik'
            )
            ->join(
                'tbl_kelurahan kel',
                'kel.id_kelurahan=k.id_kelurahan_klinik'
            )
            ->join('tbl_penilaian p', 'p.id_klinik=k.id_klinik')
            ->join(
                'tbl_penilaian_utama_form_ketiga as pfk',
                'pfk.id_klinik = k.id_klinik',
                'left'
            )
            ->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik])
            ->row_array();
        return $query;
    }
    public function get_data_utama()
    {
        $query = $this->db
            ->select('*')
            ->join(
                'tbl_kelurahan',
                'tbl_kelurahan.id_kelurahan = tbl_klinik.id_kelurahan_klinik'
            )
            ->join(
                'tbl_kecamatan',
                'tbl_kecamatan.id_kecamatan = tbl_klinik.id_kecamatan_klinik'
            )
            ->order_by('status_penilaian', 'DESC')
            ->order_by('id_klinik', 'DESC')
            ->where_in('kemampuan_pelayanan', ['Pratama Gigi', 'Utama Gigi'])
            ->get_where('tbl_klinik', ['tbl_klinik.delete' => '0'])
            ->result();
        return $query;
    }
    public function simpan_penilaian_utama_pertama($id_klinik, $no_penilaian)
    {
        $rincian = $_POST['rincian'];
        $no_penilaian = $no_penilaian;
        $id_klinik = $id_klinik;
        $jawab_hasil = $_POST['hasil'];
        $jawab_hasil_verif = $_POST['hasil_verifikasi'];
        $catatan_penilaian = $_POST['catatan_penilaian'];
        $data = [];

        $i = 1;
        foreach ($rincian as $rinci) {
            array_push($data, [
                'id_rincian_penilaian' => $rinci,
                'id_klinik' => $id_klinik,
                'no_penilaian' => $no_penilaian,
                'catatan_hasil_penilaian' => $catatan_penilaian[$i],
                'jawab_hasil' => $jawab_hasil[$i],
                'jawab_hasil_verif' => $jawab_hasil_verif[$i],
            ]);
            $i++;
        }
        $this->db->insert_batch('tbl_penilaian_utama_form_satu', $data);

        $update = ['status_penilaian' => 'Sedang'];
        $id_klinik = $id_klinik;
        $this->db->where('id_klinik', $id_klinik);
        $this->db->update('tbl_klinik', $update);
    }
    public function update_penilaian_utama_pertama($id_klinik, $no_penilaian)
    {
        $rincian = $_POST['rincian'];
        $no_penilaian = $no_penilaian;
        $id_klinik = $id_klinik;
        $jawab_hasil = $_POST['hasil'];
        $jawab_hasil_verif = $_POST['hasil_verifikasi'];
        $catatan_penilaian = $_POST['catatan_penilaian'];
        $data = [];

        $i = 1;
        foreach ($rincian as $rinci) {
            $data = [
                'id_rincian_penilaian' => $rinci,
                'id_klinik' => $id_klinik,
                'no_penilaian' => $no_penilaian,
                'catatan_hasil_penilaian' => $catatan_penilaian[$i],
                'jawab_hasil' => $jawab_hasil[$i],
                'jawab_hasil_verif' => $jawab_hasil_verif[$i],
            ];
            $i++;
            $array = [
                'id_klinik =' => $id_klinik,
                'no_penilaian =' => $no_penilaian,
                'id_rincian_penilaian =' => $rinci,
            ];
            $this->db->where($array);
            $this->db->update('tbl_penilaian_utama_form_satu', $data);
        }
        $update = ['status_penilaian' => 'Sedang'];
        $id_klinik = $id_klinik;
        $this->db->where('id_klinik', $id_klinik);
        $this->db->update('tbl_klinik', $update);
    }
    public function simpan_penilaian_utama_kedua($id_klinik, $no_penilaian)
    {
        $kriteria = $_POST['kriteria'];
        $id_klinik = $id_klinik;
        $no_penilaian = $no_penilaian;
        $hasil_penilaian = $_POST['hasil_nilai'];
        $jumlah_ketersediaan = $_POST['jumlah_ketersediaan'];
        $satuan_penilaian = $_POST['satuan_nilai'];
        $catatan_penilaian = $_POST['catatan_penilaian'];
        $data = [];

        $i = 1;
        foreach ($kriteria as $kt) {
            array_push($data, [
                'id_deskripsi' => $kt,
                'no_penilaian' => $no_penilaian,
                'id_klinik' => $id_klinik,
                'hasil_penilaian' => $hasil_penilaian[$i],
                'jumlah_ketersediaan' => $jumlah_ketersediaan[$i],
                'satuan_penilaian' => $satuan_penilaian[$i],
                'catatan_penilaian' => $catatan_penilaian[$i],
            ]);
            $i++;
        }
        $this->db->insert_batch('tbl_penilaian_utama_form_kedua', $data);
    }
    public function update_penilaian_utama_kedua($id_klinik, $no_penilaian)
    {
        $kriteria = $_POST['kriteria'];
        $id_klinik = $id_klinik;
        $no_penilaian = $no_penilaian;
        $hasil_penilaian = $_POST['hasil_nilai'];
        $jumlah_ketersediaan = $_POST['jumlah_ketersediaan'];
        $satuan_penilaian = $_POST['satuan_nilai'];
        $catatan_penilaian = $_POST['catatan_penilaian'];
        $data = [];

        $i = 1;
        foreach ($kriteria as $kt) {
            $data = [
                'id_deskripsi' => $kt,
                'no_penilaian' => $no_penilaian,
                'id_klinik' => $id_klinik,
                'hasil_penilaian' => $hasil_penilaian[$i],
                'jumlah_ketersediaan' => $jumlah_ketersediaan[$i],
                'satuan_penilaian' => $satuan_penilaian[$i],
                'catatan_penilaian' => $catatan_penilaian[$i],
            ];
            $i++;
            $array = [
                'id_klinik =' => $id_klinik,
                'no_penilaian =' => $no_penilaian,
                'id_deskripsi =' => $kt,
            ];
            $this->db->where($array);
            $this->db->update('tbl_penilaian_utama_form_kedua', $data);
        }
    }
    public function simpan_penilaian_utama_ketiga(
        $uploadData,
        $image,
        $imagettd1,
        $imagettd2,
        $imagettd3,
        $imagettd4,
        $imagettd5,
        $imagettd6,
        $id_klinik,
        $no_penilaian
    ) {
        $foto_klinik = json_encode($uploadData);
        $result_foto = preg_replace('/[^a-zA-Z0-9-_.,]/', '', $foto_klinik);
        $data = [
            'no_penilaian' => $no_penilaian,
            'id_klinik' => $id_klinik,
            'usulan_rekomendasi' => $this->input->post('pilihan_jawaban'),
            'ttd_perwakilan_klinik' => $image,
            'foto_klinik' => $result_foto,
            'ttd_perwakilan_klinik' => $image,
            'ttd_penilai1' => $imagettd1,
            'ttd_penilai2' => $imagettd2,
            'ttd_penilai3' => $imagettd3,
            'ttd_penilai4' => $imagettd4,
            'ttd_penilai5' => $imagettd5,
            'ttd_penilai6' => $imagettd6,
            'uraian_penilaian' => $this->input->post('uraian_penilaian_klinik'),
            'tindak_lanjut_klinik' => $this->input->post(
                'pilihan_jawaban_klinik'
            ),
            'nama_perwakilan_pihak_klinik' => $this->input->post(
                'nama_perwakilan_klinik'
            ),
            'jabatan_perwakilan_pihak_klinik' => $this->input->post(
                'jabatan_perwakilan_klinik'
            ),
        ];
        $this->db->insert('tbl_penilaian_utama_form_ketiga', $data);
        $update = [
            'status_penilaian' => 'Sudah',
            'nama_perwakilan' => $this->input->post('nama_perwakilan_klinik'),
            'jabatan_perwakilan' => $this->input->post(
                'jabatan_perwakilan_klinik'
            ),
        ];
        $id_klinik = $this->input->post('id_klinik');
        $this->db->where('id_klinik', $id_klinik);
        $this->db->update('tbl_klinik', $update);
    }
    public function update_penilaian_utama_ketiga(
        $uploadData,
        $image,
        $imagettd1,
        $imagettd2,
        $imagettd3,
        $imagettd4,
        $imagettd5,
        $imagettd6,
        $id_klinik,
        $no_penilaian
    ) {
        $foto_klinik = json_encode($uploadData);
        $result_foto = preg_replace('/[^a-zA-Z0-9-_.,]/', '', $foto_klinik);
        $data = [
            'usulan_rekomendasi' => $this->input->post('pilihan_jawaban'),
            'ttd_perwakilan_klinik' => $image,
            'foto_klinik' => $result_foto,
            'ttd_perwakilan_klinik' => $image,
            'ttd_penilai1' => $imagettd1,
            'ttd_penilai2' => $imagettd2,
            'ttd_penilai3' => $imagettd3,
            'ttd_penilai4' => $imagettd4,
            'ttd_penilai5' => $imagettd5,
            'ttd_penilai6' => $imagettd6,
            'uraian_penilaian' => $this->input->post('uraian_penilaian_klinik'),
            'tindak_lanjut_klinik' => $this->input->post(
                'pilihan_jawaban_klinik'
            ),
            'nama_perwakilan_pihak_klinik' => $this->input->post(
                'nama_perwakilan_klinik'
            ),
            'jabatan_perwakilan_pihak_klinik' => $this->input->post(
                'jabatan_perwakilan_klinik'
            ),
        ];
        $id_klinik = $id_klinik;
        $no_penilaian = $no_penilaian;
        $this->db->where('id_klinik', $id_klinik);
        // $this->db->where('no_penilaian', $no_penilaian);
        $this->db->update('tbl_penilaian_utama_form_ketiga', $data);
    }
    public function update_klinik_for_penilaian($id_klinik)
    {
        $update = [
            'nama_perwakilan' => $this->input->post('nama_perwakilan_klinik'),
            'jabatan_perwakilan' => $this->input->post(
                'jabatan_perwakilan_klinik'
            ),
            'status_penilaian' => 'Sudah'
        ];
        $id_klinik = $this->input->post('id_klinik');
        $this->db->where('id_klinik', $id_klinik);
        $this->db->update('tbl_klinik', $update);
    }
    public function penilaiansatu($id_klinik)
    {
        $query = $this->db
            ->join(
                'tbl_rincian_penilaian_utama',
                'tbl_rincian_penilaian_utama.id_rincian_penilaian = tbl_penilaian_utama_form_satu.id_rincian_penilaian'
            )
            ->get_where('tbl_penilaian_utama_form_satu', [
                'id_klinik' => $id_klinik,
            ])
            ->result();
        return $query;
    }
    public function peralatanklinik($id_klinik)
    {
        $query = $this->db
            ->select(
                'pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian'
            )
            ->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
            ->join(
                'tbl_penilaian_utama_form_kedua pfk',
                'pfk.id_deskripsi = pp.id_deskripsi'
            )
            ->get_where('tbl_deskripsi_penilaian_utama pp', [
                'pfk.id_klinik' => $id_klinik,
                'gp.id_group' => '1',
            ])
            ->result();
        return $query;
    }
    public function bahanhabis($id_klinik)
    {
        $query = $this->db
            ->select(
                'pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian'
            )
            ->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
            ->join(
                'tbl_penilaian_utama_form_kedua pfk',
                'pfk.id_deskripsi = pp.id_deskripsi'
            )
            ->get_where('tbl_deskripsi_penilaian_utama pp', [
                'pfk.id_klinik' => $id_klinik,
                'gp.id_group' => '2',
            ])
            ->result();
        return $query;
    }
    public function meubelair($id_klinik)
    {
        $query = $this->db
            ->select(
                'pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian'
            )
            ->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
            ->join(
                'tbl_penilaian_utama_form_kedua pfk',
                'pfk.id_deskripsi = pp.id_deskripsi'
            )
            ->get_where('tbl_deskripsi_penilaian_utama pp', [
                'pfk.id_klinik' => $id_klinik,
                'gp.id_group' => '3',
            ])
            ->result();
        return $query;
    }
    public function pencatatan($id_klinik)
    {
        $query = $this->db
            ->select(
                'pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian'
            )
            ->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
            ->join(
                'tbl_penilaian_utama_form_kedua pfk',
                'pfk.id_deskripsi = pp.id_deskripsi'
            )
            ->get_where('tbl_deskripsi_penilaian_utama pp', [
                'pfk.id_klinik' => $id_klinik,
                'gp.id_group' => '4',
            ])
            ->result();
        return $query;
    }
    public function ruangasi($id_klinik)
    {
        $query = $this->db
            ->select(
                'pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian'
            )
            ->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
            ->join(
                'tbl_penilaian_utama_form_kedua pfk',
                'pfk.id_deskripsi = pp.id_deskripsi'
            )
            ->get_where('tbl_deskripsi_penilaian_utama pp', [
                'pfk.id_klinik' => $id_klinik,
                'gp.id_group' => '5',
            ])
            ->result();
        return $query;
    }
    public function penilaian($id_klinik)
    {
        $query = $this->db
            ->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik')
            ->join(
                'tbl_kecamatan',
                'tbl_kecamatan.id_kecamatan=k.id_kecamatan_klinik'
            )
            ->join(
                'tbl_kelurahan',
                'tbl_kelurahan.id_kelurahan=k.id_kelurahan_klinik'
            )
            ->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik])
            ->row_array();
        return $query;
    }
    public function cek_data($id_klinik)
    {
        $query = $this->db
            ->join(
                'tbl_kecamatan',
                'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik'
            )
            ->join(
                'tbl_kelurahan',
                'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik'
            )
            ->get_where('tbl_klinik', ['id_klinik' => $id_klinik])
            ->row_array();
        return $query;
    }
    public function print_klinik($id_klinik)
    {
        $query = $this->db
            ->select(
                'k.id_klinik,k.nama_klinik,k.kemampuan_pelayanan, k.jenis_pelayanan_klinik, k.alamat_klinik,
        pfk.no_penilaian, pfk.usulan_rekomendasi, pfk.uraian_penilaian, pfk.tindak_lanjut_klinik, pfk.nama_perwakilan_pihak_klinik,pfk.jabatan_perwakilan_pihak_klinik, pfk.ttd_perwakilan_klinik,pfk.ttd_penilai1,
        pfk.ttd_penilai2,pfk.ttd_penilai3,pfk.ttd_penilai4,pfk.ttd_penilai5,pfk.ttd_penilai6'
            )
            ->join('tbl_penilaian p', 'p.id_klinik=k.id_klinik')
            ->join(
                'tbl_penilaian_utama_form_ketiga as pfk',
                'pfk.id_klinik = k.id_klinik',
                'left'
            )
            ->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik])
            ->row_array();
        return $query;
    }
    public function export_pdf_klinik($id_klinik)
    {
        $query = $this->db
            ->select(
                'k.id_klinik,k.nama_klinik,k.kemampuan_pelayanan, k.jenis_pelayanan_klinik, k.alamat_klinik,
        pfk.no_penilaian, pfk.usulan_rekomendasi, pfk.uraian_penilaian, pfk.tindak_lanjut_klinik, pfk.nama_perwakilan_pihak_klinik,pfk.jabatan_perwakilan_pihak_klinik, pfk.ttd_perwakilan_klinik,pfk.ttd_penilai1,
        pfk.ttd_penilai2,pfk.ttd_penilai3,pfk.ttd_penilai4,pfk.ttd_penilai5,pfk.ttd_penilai6'
            )
            ->join('tbl_penilaian p', 'p.id_klinik=k.id_klinik')
            ->join(
                'tbl_penilaian_utama_form_ketiga as pfk',
                'pfk.id_klinik = k.id_klinik',
                'left'
            )
            ->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik])
            ->row_array();
        return $query;
    }
}