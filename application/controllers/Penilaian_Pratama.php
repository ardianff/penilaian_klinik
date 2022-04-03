<?php

class Penilaian_Pratama extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_penilaian_pratama');
		check_session();
	}

	function index()
	{
		// echo no_penilaian_pratama();
		$data['title'] = 'Penilaian Klinik Pratama';
		$data['data'] = $this->Model_penilaian_pratama->get_data_pratama();
		$this->template->load('template', 'penilaian/pratama/list', $data);
	}

	function add()
	{
		$data['title'] = 'Input Data Klinik Pratama';
		$data['kecamatan'] = $this->Model_penilaian_pratama->get_data_kecamatan();
		$data['anggota'] = $this->Model_penilaian_pratama->get_anggota();
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->add();
			$this->session->set_flashdata(
				'add',
				'<div class="alert alert-success alert-dismissible fade show">
				Data Penilaian Klinik Pratama Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_pratama');
		} else {
			$this->template->load('template', 'penilaian/pratama/add', $data);
		}
	}
	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->update();
			$this->session->set_flashdata(
				'update',
				'<div class="alert alert-warning alert-dismissible fade show">
				Data Klinik Pratama <b>' . $this->input->post('nama_klinik') . '</b> Berhasil Diubah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_pratama');
		} else {
			$id_klinik = $this->uri->segment(3);
			$data['id_klinik'] = $this->db
				->join('tbl_kecamatan as kec', 'kec.id_kecamatan = k.id_kecamatan_klinik')
				->join('tbl_kelurahan as kel', 'kel.id_kelurahan = k.id_kelurahan_klinik')
				->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'k.kemampuan_pelayanan' => 'Pratama'])
				->row_array();
			$data['title'] = 'Edit Data Klinik Pratama';
			$data['anggota'] = $this->Model_penilaian_pratama->get_anggota();
			$data['kecamatan'] = $this->Model_penilaian_pratama->get_data_kecamatan();
			$this->template->load('template', 'penilaian/pratama/edit', $data);
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
			Data Penilaian Klinik Pratama Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('penilaian_pratama');
	}
	function get_data_kelurahan()
	{
		$id_kecamatan = $this->input->post('kecamatan');
		$get_data_kel = $this->Model_penilaian_pratama->get_data_kelurahan($id_kecamatan);

		echo json_encode($get_data_kel);
	}
	function get_data_edit()
	{
		$id_klinik = $this->input->post('id_klinik', TRUE);
		$data = $this->Model_penilaian_pratama->get_data_by_id($id_klinik)->result();
		echo json_encode($data);
	}
	function nilai()
	{
		$data['title'] = 'Form Pertama Penilaian Klinik Pratama';
		$id_klinik = $this->uri->segment(3);
		$cek_no_penilaian = $this->db->select('p.no_penilaian ,p.id_klinik as id_klinik_tbl_pen , k.id_klinik as id_klinik_tbl_klinik, k.nama_klinik, k.kemampuan_pelayanan,k.jenis_pelayanan_klinik, k.alamat_klinik, k.tgl_penilaian,
		k.status_penilaian, k.created_at,k.update_at')
			->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik', 'left')
			->join('tbl_penilaian_pratama_form_satu as pfs', 'pfs.no_penilaian = p.no_penilaian', 'left')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'k.kemampuan_pelayanan' => 'Pratama'])
			->row_array();
		$data['penilaian'] = $this->db->select('p.no_penilaian  , k.id_klinik, k.nama_klinik , kel.nama_kelurahan, kel.kode_pos_kelurahan, kec.nama_kecamatan, k.kemampuan_pelayanan,k.jenis_pelayanan_klinik, k.alamat_klinik, k.tgl_penilaian,
			k .status_penilaian, k.created_at,k.update_at,pfs.jawab_hasil, pfs.jawab_hasil_verif, pfs.catatan_hasil_penilaian')
			->join('tbl_kecamatan as kec', 'kec.id_kecamatan = k.id_kecamatan_klinik')
			->join('tbl_kelurahan as kel', 'kel.id_kelurahan = k.id_kelurahan_klinik')
			->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik', 'left')
			->join('tbl_penilaian_pratama_form_satu as pfs', 'pfs.no_penilaian = p.no_penilaian', 'left')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'k.kemampuan_pelayanan' => 'Pratama'])
			->row_array();

		$data['cek_hasil'] = $this->db->select('pr.id_rincian_penilaian, pr.rincian_penilaian, pr.keterangan_penilaian, pfs.no_penilaian, pfs.jawab_hasil, pfs.jawab_hasil_verif, pfs.catatan_hasil_penilaian')
			->join('tbl_penilaian_pratama_form_satu as pfs', 'pfs.id_rincian_penilaian = pr.id_rincian_penilaian', 'left')
			->get_where('tbl_rincian_penilaian_pratama pr', ['pfs.id_klinik' => $id_klinik])
			->result();
		// $this->Model_penilaian_pratama->add_penilaian();

		// print_r($this->db->last_query());
		// print_r($data);
		// echo $data['penilaian']['no_penilaian'];
		// echo $data['penilaian']['nama_klinik'];
		// echo $data['penilaian']['nama_anggota1'];
		// echo $data['penilaian']['jawab_hasil'];
		// echo $data['penilaian']['jawab_hasil_verif'];

		// print_r($data);
		// print_r($this->db->last_query());
		$data['rincian'] = $this->Model_penilaian_pratama->get_rincian_penilaian();
		$this->template->load('template', 'penilaian/pratama/nilai', $data);
		if (isset($cek_no_penilaian['no_penilaian']) && isset($cek_no_penilaian['id_klinik_tbl_pen'])) {
			echo "sudah diinput";
		} else {

			$input = [
				'id_klinik' => $id_klinik,
				'no_penilaian' => no_penilaian_pratama(),
			];
			$this->db->insert('tbl_penilaian', $input);
		}
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ($_POST['form'] == 'add') {
				// $klinik = ($this->input->post('id_klinik'));
				// echo $klinik;
				if (isset($_POST['submit'])) {

					$this->Model_penilaian_pratama->simpan_penilaian_pratama_pertama();
					$this->session->set_flashdata(
						'simpan',
						'<div class="alert alert-secondary alert-dismissible fade show">
						Penilaian Klinik Pratama Form Pertama ' . $this->input->post('nama_klinik') . ' Berhasil Disimpan!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
					);
					$id_klinik = $this->input->post('id_klinik');
					redirect('penilaian_pratama/nilai_kedua/' . $id_klinik);
				}
			} else if ($_POST['form'] == 'edit') {
				$this->Model_penilaian_pratama->update_penilaian_pratama_pertama();
				$this->session->set_flashdata(
					'simpan',
					'<div class="alert alert-secondary alert-dismissible fade show">
					Penilaian Klinik Pratama Form Pertama ' . $this->input->post('nama_klinik') . ' Berhasil Diupdate!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>'
				);
				$id_klinik = $this->input->post('id_klinik');
				redirect('penilaian_pratama/nilai_kedua/' . $id_klinik);
			}
		}
	}
	function nilai_kedua()
	{
		$data['title'] = 'Form Kedua Penilaian Klinik Pratama';
		$id_klinik = $this->uri->segment(3);
		$data['penilaian'] = $this->db->select('p.no_penilaian  , k.id_klinik, k.nama_klinik , kel.nama_kelurahan, kel.kode_pos_kelurahan, kec.nama_kecamatan, k.kemampuan_pelayanan,k.jenis_pelayanan_klinik, k.alamat_klinik, k.tgl_penilaian,
		k.status_penilaian, k.created_at,k.update_at,pfs.hasil_penilaian, pfs.jumlah_ketersediaan,pfs.satuan_penilaian, pfs.catatan_penilaian')
			->join('tbl_kecamatan as kec', 'kec.id_kecamatan = k.id_kecamatan_klinik')
			->join('tbl_kelurahan as kel', 'kel.id_kelurahan = k.id_kelurahan_klinik')
			->join('tbl_penilaian as p', 'p.id_klinik = k.id_klinik', 'left')
			->join('tbl_penilaian_pratama_form_kedua as pfs', 'pfs.no_penilaian = p.no_penilaian', 'left')
			->get_where('tbl_klinik k', ['k.id_klinik' => $id_klinik, 'k.kemampuan_pelayanan' => 'Pratama'])
			->row_array();
		$data['rincian'] = $this->Model_penilaian_pratama->get_question_next();
		$this->template->load('template', 'penilaian/pratama/nilai-kedua', $data);

		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->simpan_penilaian_pratama_kedua();
			$this->session->set_flashdata(
				'simpan',
				'<div class="alert alert-secondary alert-dismissible fade show">
				Penilaian Klinik Pratama Form Kedua ' . $this->input->post('no_penilaian') . ' Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			$no_penilaian = $this->input->post('no_penilaian');
			redirect('penilaian_pratama/nilai_ketiga/' . $no_penilaian);
		} else {
			// show_404();
		}
	}

	function nilai_ketiga()
	{
		$data['title'] = 'Form Ketiga Penilaian Klinik Pratama';
		$no_penilaian = $this->uri->segment(3);
		$data['penilaian'] = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian, 'kemampuan_pelayanan' => 'Pratama'])
			->row_array();
		$this->template->load('template', 'penilaian/pratama/nilai-ketiga', $data);
		if (isset($_POST['submit'])) {
			$this->Model_penilaian_pratama->simpan_penilaian_pratama_ketiga();
			// $this->Model_penilaian_pratama->update_status();
			$this->session->set_flashdata(
				'simpan',
				'<div class="alert alert-secondary alert-dismissible fade show">
				Penilaian Klinik Pratama' . $this->input->post('no_penilaian') . ' Berhasil Disimpan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('penilaian_pratama');
		} else {
			// $this->template->load('template', 'penilaian/pratama/nilai-ketiga', $data);
		}
	}
	// public function upload()
	// {
	// 	$folderPath = "assets/tanda-tangan";
	// 	$image_parts = explode(";base64,", $this->input->post('signed'));
	// 	$image_type_aux = explode("image/", $image_parts[0]);
	// 	$image_type = $image_type_aux[1];
	// 	$image_base64 = base64_decode($image_parts[1]);
	// 	$file = $folderPath . uniqid() . '.' . $image_type;

	// 	file_put_contents($file, $image_base64);
	// 	echo "<h3><i>Upload Tanda Tangan Berhasil...</i></h3>";
	// }

	function print()
	{
		$data['title'] = 'Cetak Penilaian Klinik Pratama';
		$no_penilaian = $this->uri->segment(3);
		$data['penilaiansatu'] = $this->db
			->join('tbl_rincian_penilaian_pratama', 'tbl_rincian_penilaian_pratama.id_rincian_penilaian = tbl_penilaian_pratama_form_satu.id_rincian_penilaian')
			->get_where('tbl_penilaian_pratama_form_satu', array('no_penilaian' => $no_penilaian))
			->result();
		$data['penilaian'] = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian, 'kemampuan_pelayanan' => 'Pratama'])
			->row_array();
		$cek_data = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian, 'kemampuan_pelayanan' => 'Pratama'])
			->row_array();
		$data['anggota'] = $this->Model_penilaian_pratama->get_anggota();
		$data['data'] = $this->Model_penilaian_pratama->get_data_pratama();
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
			redirect('penilaian_pratama');
		} else {

			$this->load->view('penilaian/pratama/print', $data);
		}
	}
	function export_pdf()
	{
		$no_penilaian = $this->uri->segment(3);
		$data['penilaiansatu'] = $this->db
			->join('tbl_rincian_penilaian_pratama', 'tbl_rincian_penilaian_pratama.id_rincian_penilaian = tbl_penilaian_pratama_form_satu.id_rincian_penilaian')
			->get_where('tbl_penilaian_pratama_form_satu', array('no_penilaian' => $no_penilaian))
			->result();
		$cek_data = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian, 'kemampuan_pelayanan' => 'Pratama'])
			->row_array();
		$data['title'] = 'Export PDF Berita Acara ' . $cek_data['nama_klinik'] . '';
		$data['penilaian'] = $this->db
			->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_klinik.id_kecamatan_klinik')
			->join('tbl_kelurahan', 'tbl_kelurahan.id_kelurahan=tbl_klinik.id_kelurahan_klinik')
			->get_where('tbl_klinik', ['no_penilaian' => $no_penilaian, 'kemampuan_pelayanan' => 'Pratama'])
			->row_array();
		$data['data'] = $this->Model_penilaian_pratama->get_data_pratama();
		$data['anggota'] = $this->Model_penilaian_pratama->get_anggota();
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
			redirect('penilaian_pratama');
		} else {
			// $this->load->library('pdfgenerator');
			// $this->pdfgenerator->setPaper('Legal', 'portrait');
			// $this->pdfgenerator->filename = 'Berita Acara ' . $cek_data['nama_klinik'] . '.pdf';
			// $this->pdfgenerator->load_view('penilaian/pratama/pdf', $data);


			// $this->load->library('pdf');
			// $file_pdf = 'Berita Acara ' . $cek_data['nama_klinik'] . '.pdf';
			// $paper = 'A4';
			// $orientation = "potrait";
			// $html = $this->load->view('penilaian/pratama/pdf', $data);
			// $this->pdf->generate($html, $file_pdf,$paper,$orientation);

			// $this->load->library('mypdf');
			// $html = $this->load->view('penilaian/pratama/pdf', $data);
			// $this->mypdf->generate($html);

			$mpdf = new \Mpdf\Mpdf(['orientation' => 'P', 'format' => 'Legal', 'allow_charset_conversion' => true]);
			$mpdf->debug = true;
			$html = $this->load->view('penilaian/pratama/pdf', $data, true);
			$mpdf->WriteHTML($html);
			$mpdf->Output('Berita Acara ' . $cek_data['nama_klinik'] . '.pdf', 'I');
		}
	}
}
