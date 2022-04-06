<?php

class Penilaian_Utama extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_penilaian_utama');
		check_session();
	}

	function index()
	{
		$data['title'] = 'Data Klinik Pratama/Utama Gigi';
		$data['data'] = $this->Model_penilaian_utama->get_data_utama()->result();
		$this->template->load('template', 'penilaian/utama/list', $data);
	}

	function add()
	{
		$data['title'] = 'Input Data Klinik Utama';
		$data['kecamatan'] = $this->Model_penilaian_utama->get_data_kecamatan();
		$data['anggota'] = $this->Model_penilaian_utama->get_anggota();
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_utama->add();
			$this->session->set_flashdata(
				'add',
				'<div class="alert alert-success alert-dismissible fade show">
				Data Klinik Utama Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_utama');
		} else {
			$this->template->load('template', 'penilaian/utama/add', $data);
		}
	}
	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_utama->update();
			$this->session->set_flashdata(
				'update',
				'<div class="alert alert-warning alert-dismissible fade show">
				Data Penilaian Klinik Utama Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_utama');
		} else {
			$id_klinik = $this->uri->segment(3);
			$data['id_klinik'] = $this->db
				->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
				->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
				->get_where('tbl_klinik', ['id_klinik' => $id_klinik])
				->row_array();
			$data['title'] = 'Edit Data Klinik Utama';
			$data['anggota'] = $this->Model_penilaian_utama->get_anggota();
			$data['kecamatan'] = $this->Model_penilaian_utama->get_data_kecamatan();
			$this->template->load('template', 'penilaian/utama/edit', $data);
		}
	}
	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_klinik', $id);
		$this->db->delete('tbl_klinik');
		$this->session->set_flashdata(
			'delete',
			'<div class="alert alert-danger alert-dismissible fade show">
			Data Klinik Utama Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('penilaian_utama');
	}
	function nilai()
	{
		$data['title'] = 'Form Pertama Penilaian Klinik Utama';
		$id_klinik = $this->uri->segment(3);
		$cek_no_penilaian = $this->db->select('p.no_penilaian ,p.id_klinik as id_klinik_tbl_pen , k.id_klinik as id_klinik_tbl_klinik, k.nama_klinik, k.kemampuan_pelayanan,k.jenis_pelayanan_klinik, k.alamat_klinik, k.tgl_visitasi,
		k.status_penilaian, k.created_at,k.update_at')
			->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik', 'left')
			->join('tbl_penilaian_utama_form_satu as pfs', 'pfs.no_penilaian = p.no_penilaian', 'left')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'k.kemampuan_pelayanan' => 'Utama'])
			->row_array();
		if ($cek_no_penilaian['no_penilaian'] == null && $cek_no_penilaian['id_klinik_tbl_pen'] == null) {
			$url = base_url('penilaian_utama/nilai/') . $id_klinik;
			$url_now = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			if ($url == $url_now) {
				$input = [
					'id_klinik' => $id_klinik,
					'no_penilaian' => no_penilaian_utama(),
				];
				$this->db->insert('tbl_penilaian', $input);
			}
		}
		$data['rincian'] = $this->Model_penilaian_utama->get_rincian_penilaian();
		$data['cek_hasil'] = $this->db->select('pfs.id_penilaian,pr.id_rincian_penilaian, pr.rincian_penilaian, pr.keterangan_penilaian, pfs.no_penilaian, pfs.jawab_hasil, pfs.jawab_hasil_verif, pfs.catatan_hasil_penilaian')
			->join('tbl_penilaian_utama_form_satu as pfs', 'pfs.id_rincian_penilaian = pr.id_rincian_penilaian', 'left')
			->get_where('tbl_rincian_penilaian_utama pr', ['pfs.id_klinik' => $id_klinik])
			->result();
		$data['klinik'] = $this->db->select('p.no_penilaian  , k.id_klinik, k.nama_klinik , kel.nama_kelurahan, kel.kode_pos_kelurahan, kec.nama_kecamatan, k.kemampuan_pelayanan,k.jenis_pelayanan_klinik, k.alamat_klinik, k.tgl_visitasi,
			k .status_penilaian, k.created_at,k.update_at,pfs.jawab_hasil, pfs.jawab_hasil_verif, pfs.catatan_hasil_penilaian')
			->join('tbl_kecamatan as kec', 'kec.id_kecamatan = k.id_kecamatan_klinik')
			->join('tbl_kelurahan as kel', 'kel.id_kelurahan = k.id_kelurahan_klinik')
			->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik', 'left')
			->join('tbl_penilaian_utama_form_satu as pfs', 'pfs.id_klinik = p.id_klinik', 'left')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'k.kemampuan_pelayanan' => 'Utama'])
			->row_array();
		// print_r($this->db->last_query());
		$this->template->load('template', 'penilaian/utama/nilai', $data);

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ($_POST['form'] == 'add') {
				if (isset($_POST['submit'])) {
					$this->Model_penilaian_utama->simpan_penilaian_utama_pertama();
					$this->session->set_flashdata(
						'simpan',
						'<div class="alert alert-secondary alert-dismissible fade show">
						Penilaian Klinik Utama Form Pertama ' . $this->input->post('nama_klinik') . ' Berhasil Disimpan!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
					);
					$id_klinik = $this->input->post('id_klinik');
					redirect('penilaian_utama/nilai_kedua/' . $id_klinik);
				}
			} else if ($_POST['form'] == 'edit') {
				if (isset($_POST['submit'])) {
					$this->Model_penilaian_utama->update_penilaian_utama_pertama();
					$this->session->set_flashdata(
						'simpan',
						'<div class="alert alert-secondary alert-dismissible fade show">
						Penilaian Klinik Utama Form Pertama ' . $this->input->post('nama_klinik') . ' Berhasil Diupdate!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
					);
					$id_klinik = $this->input->post('id_klinik');
					redirect('penilaian_utama/nilai_kedua/' . $id_klinik);
				}
			}
		}
	}
	function nilai_kedua()
	{
		$data['title'] = 'Form Kedua Penilaian Klinik Utama';
		$id_klinik = $this->uri->segment(3);
		$data['klinik'] = $this->db->select('p.no_penilaian  , k.id_klinik, k.nama_klinik , kel.nama_kelurahan, kel.kode_pos_kelurahan, kec.nama_kecamatan, k.kemampuan_pelayanan,k.jenis_pelayanan_klinik, k.alamat_klinik, k.tgl_visitasi,
		k.status_penilaian, k.created_at,k.update_at,pfs.hasil_penilaian, pfs.jumlah_ketersediaan,pfs.satuan_penilaian, pfs.catatan_penilaian')
			->join('tbl_kecamatan as kec', 'kec.id_kecamatan = k.id_kecamatan_klinik')
			->join('tbl_kelurahan as kel', 'kel.id_kelurahan = k.id_kelurahan_klinik')
			->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik', 'left')
			->join('tbl_penilaian_utama_form_kedua as pfs', 'pfs.id_klinik = p.id_klinik', 'left')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'k.kemampuan_pelayanan' => 'Utama'])
			->row_array();
		$data['cek_hasil'] = $this->db->select('pfs.id_penilaian,pfs.no_penilaian,pfs.id_klinik, gp.group_name, pr.id_deskripsi as id_deskripsi_pr, pr.id_group,
		pr.kriteria_penilaian_utama, pr.jumlah_minimal_penilaian_utama, pr.satuan_penilaian_utama, 
		pfs.id_penilaian,pfs.no_penilaian, pfs.id_klinik, pfs.id_deskripsi as id_deskripsi_pfs, 
		pfs.hasil_penilaian, pfs.jumlah_ketersediaan, pfs.satuan_penilaian, pfs.catatan_penilaian')
			->join('tbl_group_utama as gp', 'gp.id_group = pr.id_group')
			->join('tbl_penilaian_utama_form_kedua as pfs', 'pfs.id_deskripsi = pr.id_deskripsi', 'left')
			->get_where('tbl_deskripsi_penilaian_utama as pr', ['pfs.id_klinik' => $id_klinik])
			->result();
		$data['rincian'] = $this->Model_penilaian_utama->get_question_next();
		$this->template->load('template', 'penilaian/utama/nilai-kedua', $data);

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ($_POST['form'] == 'add') {
				if (isset($_POST['submit'])) {
					$this->Model_penilaian_utama->simpan_penilaian_utama_kedua();
					$this->session->set_flashdata(
						'simpan',
						'<div class="alert alert-secondary alert-dismissible fade show">
						Penilaian Klinik Utama Form Kedua ' . $this->input->post('nama_klinik') . ' Berhasil Disimpan!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
					);
					$id_klinik = $this->input->post('id_klinik');
					redirect('penilaian_utama/nilai_ketiga/' . $id_klinik);
				}
			} else if ($_POST['form'] == 'edit') {
				if (isset($_POST['submit'])) {
					$this->Model_penilaian_utama->update_penilaian_utama_kedua();
					$this->session->set_flashdata(
						'simpan',
						'<div class="alert alert-secondary alert-dismissible fade show">
						Penilaian Klinik Utama Form Kedua ' . $this->input->post('nama_klinik') . ' Berhasil Diupdate!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
					);
					$id_klinik = $this->input->post('id_klinik');
					redirect('penilaian_utama/nilai_ketiga/' . $id_klinik);
				}
			}
		}
	}
	function nilai_ketiga()
	{
		$data['title'] = 'Form Ketiga Penilaian Klinik Utama';
		$id_klinik = $this->uri->segment(3);
		$data['klinik'] = $this->db->select('k.id_klinik,k.nama_klinik,k.kemampuan_pelayanan, k.jenis_pelayanan_klinik, k.alamat_klinik, kec.nama_kecamatan, kel.nama_kelurahan, kel.kode_pos_kelurahan, 
		pfk.no_penilaian, pfk.usulan_rekomendasi, pfk.uraian_penilaian, pfk.tindak_lanjut_klinik, pfk.nama_perwakilan_pihak_klinik,pfk.jabatan_perwakilan_pihak_klinik,
		p.no_penilaian,pfk.ttd_penilai')
			->join('tbl_kecamatan kec', 'kec.id_kecamatan=k.id_kecamatan_klinik')
			->join('tbl_kelurahan kel', 'kel.id_kelurahan=k.id_kelurahan_klinik')
			->join('tbl_penilaian p', 'p.id_klinik=k.id_klinik')
			->join('tbl_penilaian_utama_form_ketiga as pfk', 'pfk.id_klinik = k.id_klinik', 'left')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'kemampuan_pelayanan' => 'Utama'])
			->row_array();
		$this->template->load('template', 'penilaian/utama/nilai-ketiga', $data);
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ($_POST['form'] == 'add') {
				if (isset($_POST['submit'])) {
					$img = $this->input->post('signed');
					$img = str_replace('data:image/png;base64,', '', $img);
					$img = str_replace(' ', '+', $img);
					$data = base64_decode($img);
					$file = './assets/img/ttd/' . uniqid() . '.png';
					$success = file_put_contents($file, $data);
					$image = str_replace('./', '', $file);
					$this->Model_penilaian_utama->simpan_penilaian_utama_ketiga($image);
					$this->session->set_flashdata(
						'simpan',
						'<div class="alert alert-secondary alert-dismissible fade show">
						Penilaian Klinik Utama Form Ketiga ' . $this->input->post('nama_klinik') . ' Berhasil Disimpan!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
					);
					redirect('penilaian_utama');
				}
			} else if ($_POST['form'] == 'edit') {
				if (isset($_POST['submit'])) {
					$img = $this->input->post('signed');
					$img = str_replace('data:image/png;base64,', '', $img);
					$img = str_replace(' ', '+', $img);
					$data = base64_decode($img);
					$file = './assets/img/ttd/' . uniqid() . '.png';
					$success = file_put_contents($file, $data);
					$image = str_replace('./', '', $file);
					$this->Model_penilaian_utama->update_penilaian_utama_ketiga($image);
					$this->session->set_flashdata(
						'simpan',
						'<div class="alert alert-secondary alert-dismissible fade show">
						Penilaian Klinik Utama Form Ketiga ' . $this->input->post('nama_klinik') . ' Berhasil Diupdate!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
					);
					redirect('penilaian_utama');
				}
			}
		}
	}
	function print()
	{
		$id_klinik = $this->uri->segment(3);
		$data['penilaiansatu'] = $this->db
			->join('tbl_rincian_penilaian_utama', 'tbl_rincian_penilaian_utama.id_rincian_penilaian = tbl_penilaian_utama_form_satu.id_rincian_penilaian')
			->get_where('tbl_penilaian_utama_form_satu', array('id_klinik' => $id_klinik))
			->result();
		$data['peralatanklinik'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '1'))->result();
		$data['bahanhabis'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '2'))->result();
		// $data['perlengkapan'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
		// 	->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
		// 	->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
		// 	->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '3'))->result();
		$data['meubelair'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '3'))->result();
		$data['pencatatan'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '4'))->result();
		$data['ruangasi'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '5'))->result();
		$data['penilaian'] = $this->db
			->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik')
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=k.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=k.id_kelurahan_klinik')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'kemampuan_pelayanan' => 'utama'])
			->row_array();
		$cek_data = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['id_klinik' => $id_klinik, 'kemampuan_pelayanan' => 'utama'])
			->row_array();
		$data['klinik'] = $this->db->select('k.id_klinik,k.nama_klinik,k.kemampuan_pelayanan, k.jenis_pelayanan_klinik, k.alamat_klinik,
			pfk.no_penilaian, pfk.usulan_rekomendasi, pfk.uraian_penilaian, pfk.tindak_lanjut_klinik, pfk.nama_perwakilan_pihak_klinik,pfk.jabatan_perwakilan_pihak_klinik')
			->join('tbl_penilaian p', 'p.id_klinik=k.id_klinik')
			->join('tbl_penilaian_utama_form_ketiga as pfk', 'pfk.id_klinik = k.id_klinik', 'left')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'kemampuan_pelayanan' => 'utama'])
			->row_array();
		$data['title'] = 'Cetak Penilaian Klinik utama' . $data['penilaian']['nama_klinik'] . '';
		$data['anggota'] = $this->Model_penilaian_utama->get_anggota();
		$data['data'] = $this->Model_penilaian_utama->get_data_utama();
		if ($cek_data['status_penilaian'] == "Belum") {
			$this->session->set_flashdata(
				'nilai',
				'<div class="alert alert-danger alert-dismissible fade show">
				Tidak dapat mencetak. <b>' . $cek_data['nama_klinik'] . '</b> Belum dinilai!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_utama');
		} else {

			$this->load->view('penilaian/utama/print', $data);
		}
	}
	function export_pdf()
	{
		$id_klinik = $this->uri->segment(3);
		$data['penilaiansatu'] = $this->db
			->join('tbl_rincian_penilaian_utama', 'tbl_rincian_penilaian_utama.id_rincian_penilaian = tbl_penilaian_utama_form_satu.id_rincian_penilaian')
			->get_where('tbl_penilaian_utama_form_satu', array('id_klinik' => $id_klinik))
			->result();
		$data['peralatanklinik'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '1'))->result();
		$data['bahanhabis'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '2'))->result();
		// $data['perlengkapan'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
		// 	->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
		// 	->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
		// 	->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '3'))->result();
		$data['meubelair'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '3'))->result();
		$data['pencatatan'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '4'))->result();
		$data['ruangasi'] = $this->db->select('pp.id_deskripsi, pp.id_group,pp.kriteria_penilaian_utama,pp.jumlah_minimal_penilaian_utama,pp.satuan_penilaian_utama,gp.group_name, pfk.no_penilaian,pfk.id_klinik,pfk.hasil_penilaian,pfk.jumlah_ketersediaan,pfk.satuan_penilaian,pfk.catatan_penilaian')
			->join('tbl_group_utama gp', ' gp.id_group = pp.id_group')
			->join('tbl_penilaian_utama_form_kedua pfk', 'pfk.id_deskripsi = pp.id_deskripsi')
			->get_where('tbl_deskripsi_penilaian_utama pp', array('pfk.id_klinik' => $id_klinik, 'gp.id_group' => '5'))->result();
		$data['penilaian'] = $this->db
			->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik')
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=k.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=k.id_kelurahan_klinik')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'kemampuan_pelayanan' => 'utama'])
			->row_array();
		$cek_data = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['id_klinik' => $id_klinik, 'kemampuan_pelayanan' => 'utama'])
			->row_array();
		$data['klinik'] = $this->db->select('k.id_klinik,k.nama_klinik,k.kemampuan_pelayanan, k.jenis_pelayanan_klinik, k.alamat_klinik,
			pfk.no_penilaian, pfk.usulan_rekomendasi, pfk.uraian_penilaian, pfk.tindak_lanjut_klinik, pfk.nama_perwakilan_pihak_klinik,pfk.jabatan_perwakilan_pihak_klinik')
			->join('tbl_penilaian p', 'p.id_klinik=k.id_klinik')
			->join('tbl_penilaian_utama_form_ketiga as pfk', 'pfk.id_klinik = k.id_klinik', 'left')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'kemampuan_pelayanan' => 'utama'])
			->row_array();
		$data['title'] = 'Export PDF Berita Acara ' . $data['penilaian']['nama_klinik'] . '';
		$data['data'] = $this->Model_penilaian_utama->get_data_utama();
		$data['anggota'] = $this->Model_penilaian_utama->get_anggota();
		if ($cek_data['status_penilaian'] == "Belum") {
			$this->session->set_flashdata(
				'nilai',
				'<div class="alert alert-danger alert-dismissible fade show">
				Tidak dapat Export ke PDF. <b>' . $cek_data['nama_klinik'] . '</b> Belum dinilai!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_utama');
		} else {
			$mpdf = new \Mpdf\Mpdf(['orientation' => 'P', 'format' => 'Legal', 'allow_charset_conversion' => true]);
			$mpdf->debug = true;
			$html = $this->load->view('penilaian/utama/pdf', $data, true);
			$mpdf->WriteHTML($html);
			$mpdf->Output('Berita Acara ' . $data['penilaian']['nama_klinik'] . '.pdf', 'I');
		}
	}
}
