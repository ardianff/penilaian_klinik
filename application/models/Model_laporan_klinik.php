<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Model_laporan_klinik_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Model_laporan_klinik extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function update()
  {
    $data = [

      'masa_berlaku_ijin' => $this->input->post('masa_berlaku'),
      'nomor_siop' => $this->input->post('nomor_siop'),
    ];
    $id_klinik = $this->input->post('id_klinik');
    $this->db->where('id_klinik', $id_klinik);
    $this->db->update('tbl_klinik', $data);
  }
  public function get_data_kecamatan()
  {
    $query = $this->db->order_by('nama_kecamatan', 'ASC')->get('tbl_kecamatan')->result();
    return $query;
  }
  public function get_anggota()
  {
    $query = $this->db->get('tbl_anggota')->result();
    return $query;
  }
  public function get_data_klinik()
  {
    $this->db->select('*');
    $this->db->from('tbl_klinik');
    $this->db->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan = tbl_klinik.id_kelurahan_klinik');
    $this->db->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_klinik.id_kecamatan_klinik');
    $this->db->order_by('tbl_klinik.tgl_visitasi', 'DESC');
    $this->db->where_in('status_penilaian', 'Sudah');
    return $this->db->get();
  }
  public function get_klinik_all($bulan, $tahun)
  {
    $query = $this->db->query("SELECT MONTH(kl.tgl_visitasi) AS Bulan, YEAR(kl.tgl_visitasi) AS Tahun, kl.id_klinik, kl.nomor_siop, pl.no_penilaian, kl.nama_user, kl.nama_anggota1, kl.nama_anggota2, kl.nama_anggota3, kl.nama_anggota4, kl.nama_klinik, kl.kemampuan_pelayanan, kl.jenis_pelayanan_klinik, kl.alamat_klinik, kec.nama_kecamatan, kel.nama_kelurahan, kel.kode_pos_kelurahan, kl.tgl_visitasi, kl.no_surat, kl.status_penilaian, kl.masa_berlaku_ijin, kl.nama_perwakilan, kl.jabatan_perwakilan FROM tbl_klinik as kl 
    JOIN tbl_kecamatan as kec ON kec.id_kecamatan = kl.id_kecamatan_klinik 
    JOIN tbl_kelurahan as kel ON kel.id_kelurahan = kl.id_kelurahan_klinik JOIN tbl_penilaian as pl ON pl.id_klinik = kl.id_klinik 
    WHERE MONTH(kl.tgl_visitasi)='$bulan' AND YEAR(kl.tgl_visitasi)='$tahun' AND kl.status_penilaian='Sudah' ORDER BY DATE(kl.tgl_visitasi) DESC")->result();
    return $query;
  }
  public function get_klinik_by_filter($bulan, $tahun, $kemampuan_pelayanan)
  {
    $query = $this->db->query("SELECT MONTH(kl.tgl_visitasi) AS Bulan, YEAR(kl.tgl_visitasi) AS Tahun, kl.id_klinik, kl.nomor_siop, pl.no_penilaian, kl.nama_user, kl.nama_anggota1, kl.nama_anggota2, kl.nama_anggota3, kl.nama_anggota4, kl.nama_klinik, kl.kemampuan_pelayanan, kl.jenis_pelayanan_klinik, kl.alamat_klinik, kec.nama_kecamatan, kel.nama_kelurahan, kel.kode_pos_kelurahan, kl.tgl_visitasi, kl.no_surat, kl.status_penilaian, kl.masa_berlaku_ijin, kl.nama_perwakilan, kl.jabatan_perwakilan FROM tbl_klinik as kl 
    JOIN tbl_kecamatan as kec ON kec.id_kecamatan = kl.id_kecamatan_klinik 
    JOIN tbl_kelurahan as kel ON kel.id_kelurahan = kl.id_kelurahan_klinik 
    JOIN tbl_penilaian as pl ON pl.id_klinik = kl.id_klinik 
    WHERE MONTH(kl.tgl_visitasi)='$bulan' AND YEAR(kl.tgl_visitasi)='$tahun' AND kl.status_penilaian='Sudah' AND kl.kemampuan_pelayanan='$kemampuan_pelayanan' ORDER BY DATE(kl.tgl_visitasi) DESC")->result();
    return $query;
  }
  public function get_count_klinik_pratama_gigi($bulan, $tahun)
  {
    $query = $this->db->query("SELECT COUNT(kemampuan_pelayanan) as total_klinik_pratama_gigi, kemampuan_pelayanan, 
    MONTH(tgl_visitasi) AS bulan, YEAR(tgl_visitasi) AS tahun FROM tbl_klinik WHERE kemampuan_pelayanan='Pratama Gigi' AND MONTH(tgl_visitasi)='$bulan' AND YEAR(tgl_visitasi)='$tahun' AND status_penilaian='Sudah'")->result();
    return $query;
  }
  public function get_count_klinik_utama_gigi($bulan, $tahun)
  {
    $query = $this->db->query("SELECT COUNT(kemampuan_pelayanan) as total_klinik_utama_gigi, kemampuan_pelayanan, 
    MONTH(tgl_visitasi) AS bulan, YEAR(tgl_visitasi) AS tahun FROM tbl_klinik WHERE kemampuan_pelayanan='Utama Gigi' AND MONTH(tgl_visitasi)='$bulan' AND YEAR(tgl_visitasi)='$tahun' AND status_penilaian='Sudah'")->result();
    return $query;
  }
  public function get_count_klinik_pratama_umum($bulan, $tahun)
  {
    $query = $this->db->query("SELECT COUNT(kemampuan_pelayanan) as total_klinik_pratama_umum, kemampuan_pelayanan, 
    MONTH(tgl_visitasi) AS bulan, YEAR(tgl_visitasi) AS tahun FROM tbl_klinik WHERE kemampuan_pelayanan='Pratama Umum' AND MONTH(tgl_visitasi)='$bulan' AND YEAR(tgl_visitasi)='$tahun' AND status_penilaian='Sudah'")->result();
    return $query;
  }
  public function get_count_klinik_utama_umum($bulan, $tahun)
  {
    $query = $this->db->query("SELECT COUNT(kemampuan_pelayanan) as total_klinik_utama_umum, kemampuan_pelayanan, 
    MONTH(tgl_visitasi) AS bulan, YEAR(tgl_visitasi) AS tahun FROM tbl_klinik WHERE kemampuan_pelayanan='Utama Umum' AND MONTH(tgl_visitasi)='$bulan' AND YEAR(tgl_visitasi)='$tahun' AND status_penilaian='Sudah'")->result();
    return $query;
  }
  public function get_count_all($bulan, $tahun)
  {
    $query = $this->db->query("SELECT COUNT(kemampuan_pelayanan) as total_klinik_semua,
    MONTH(tgl_visitasi) AS bulan, YEAR(tgl_visitasi) AS tahun FROM tbl_klinik WHERE  MONTH(tgl_visitasi)='$bulan' AND YEAR(tgl_visitasi)='$tahun' AND status_penilaian='Sudah'")->result();
    return $query;
  }

  // ------------------------------------------------------------------------

}

/* End of file Model_laporan_klinik_model.php */
/* Location: ./application/models/Model_laporan_klinik_model.php */