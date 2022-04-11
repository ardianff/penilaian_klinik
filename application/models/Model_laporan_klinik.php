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
    $this->db->order_by('tbl_klinik.created_at', 'DESC');
    $this->db->where_in('status_penilaian', 'Sudah');
    return $this->db->get();
  }
  public function get_klinik($bulan, $tahun)
  {
    $query = $this->db->query("SELECT MONTH(kl.created_at) AS Bulan, YEAR(kl.created_at) AS Tahun, kl.id_klinik, pl.no_penilaian, kl.nama_user, kl.nama_anggota1, kl.nama_anggota2, kl.nama_anggota3, kl.nama_anggota4, kl.nama_klinik, kl.kemampuan_pelayanan, kl.jenis_pelayanan_klinik, kl.alamat_klinik, kec.nama_kecamatan, kel.nama_kelurahan, kel.kode_pos_kelurahan, kl.tgl_visitasi, kl.no_surat, kl.status_penilaian FROM tbl_klinik as kl JOIN tbl_kecamatan as kec ON kec.id_kecamatan = kl.id_kecamatan_klinik JOIN tbl_kelurahan as kel ON kel.id_kelurahan = kl.id_kelurahan_klinik JOIN tbl_penilaian as pl ON pl.id_klinik = kl.id_klinik 
    WHERE MONTH(kl.created_at)='$bulan' AND YEAR(kl.created_at)='$tahun' AND kl.status_penilaian='Sudah' ORDER BY DATE(kl.created_at) DESC")->result();

    return $query;
  }

  // ------------------------------------------------------------------------

}

/* End of file Model_laporan_klinik_model.php */
/* Location: ./application/models/Model_laporan_klinik_model.php */