<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Penilaian_klinik_gigi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_penilaian_utama');
        check_session();
    }

    public function index()
    {
        $data['title'] = 'Data Klinik Pratama/Utama Gigi';
        $data['data'] = $this->Model_penilaian_utama->get_data_utama();
        $this->template->load('template', 'penilaian/klinik_gigi/list', $data);
    }

    public function add()
    {

        $this->form_validation->set_rules(
            'nama_anggota1',
            'Nama Anggota 1',
            'required',
            [
                'required' => 'Nama Anggota 1 Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'nama_anggota2',
            'Nama Anggota 2',
            'required',
            [
                'required' => 'Nama Anggota 2 Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'kemampuan_pelayanan',
            'Kemampuan Pelayanan',
            'required',
            [
                'required' => 'Kemampuan Pelayanan Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'jenis_pelayanan',
            'Jenis Pelayanan',
            'required',
            [
                'required' => 'Jenis Pelayanan Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'nama_kecamatan',
            'Nama Kecamatan',
            'required',
            [
                'required' => 'Kecamatan Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'nama_kelurahan',
            'Nama Kelurahan',
            'required',
            [
                'required' => 'Kelurahan Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'alamat_klinik',
            'Alamat Klinik',
            'required|trim|min_length[5]|max_length[200]',
            [
                'required' => 'Alamat Klinik Wajib di isi',
                'min_length' => 'Alamat Klinik yang diinputkan minimal 5 karakter',
                'max_length' =>
                'Alamat Klinik yang diinputkan maksimal 200 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'nama_klinik',
            'Nama',
            'required|trim|min_length[5]|max_length[100]',
            [
                'required' => 'Nama Klinik Wajib di isi',
                'min_length' => 'Nama Klinik yang diinputkan minimal 5 karakter',
                'max_length' =>
                'Nama Klinik yang diinputkan maksimal 100 karakter',
            ]
        );
        $this->form_validation->set_rules('tgl_visitasi', 'Tanggal Visitasi', 'required', [
            'required' => 'Tanggal Visitasi Wajib di isi',
        ]);
        $this->form_validation->set_rules(
            'no_surat',
            'Nomor Surat',
            'trim|min_length[3]|max_length[20]',
            [
                'required' => 'Nomor Surat Wajib di isi',
                'min_length' => 'Nomor Surat wajib berisi minimal 3 karakter',
                'max_length' => 'Nomor Surat wajib berisi maksimal 50 karakter',
                'is_unique' => 'Nomor Surat yang diinputkan sudah ada',
            ]
        );
        $this->form_validation->set_rules(
            'no_bap',
            'Nomor BSP',
            'trim|min_length[3]|max_length[20]',
            [
                'required' => 'Nomor BAP Wajib di isi',
                'min_length' => 'Nomor BAP wajib berisi minimal 3 karakter',
                'max_length' => 'Nomor BAP wajib berisi maksimal 50 karakter',
                'is_unique' => 'Nomor BAP yang diinputkan sudah ada',
            ]
        );
        $data['title'] = 'Input Data Klinik Pratma/Utama Gigi';
        $data['kecamatan'] = $this->Model_penilaian_utama->get_data_kecamatan();
        $data['anggota'] = $this->Model_penilaian_utama->get_anggota();

        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'penilaian/klinik_gigi/add', $data);
        } else {
            if (isset($_POST['submit'])) {
                $this->Model_penilaian_utama->add();
                $this->session->set_flashdata(
                    'add',
                    '<div class="alert alert-success alert-dismissible fade show">
                    Data Klinik Pratama/Utama Gigi. <b>' . $this->input->post('nama_klinik') . '</b> Berhasil Disimpan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('penilaian_klinik_gigi');
            } else {
                $this->template->load('template', 'penilaian/klinik_gigi/add', $data);
            }
        }
    }

    public function edit()
    {
        // $id_klinik = $this->input->get('id');
        $id_klinik = $this->uri->segment(3);
        $klinik = $this->db->where_in('kemampuan_pelayanan', array('Pratama Gigi', 'Utama Gigi'))->get_where('tbl_klinik', ['id_klinik =' => $id_klinik]);
        if ($klinik->num_rows() > 0) {
            $cek = $klinik->row();
            if ($cek->delete != 1) {
                $data['id_klinik'] = $this->Model_penilaian_utama->data_klinikutama($id_klinik);
                $data['title'] = 'Edit Data Klinik Utama';
                $data['anggota'] = $this->Model_penilaian_utama->get_anggota();
                $data['kecamatan'] = $this->Model_penilaian_utama->get_data_kecamatan();
                $this->template->load('template', 'penilaian/klinik_gigi/edit', $data);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }
    public function update()
    {
        $this->form_validation->set_rules(
            'nama_anggota1',
            'Nama Anggota 1',
            'required',
            [
                'required' => 'Nama Anggota 1 Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'nama_anggota2',
            'Nama Anggota 2',
            'required',
            [
                'required' => 'Nama Anggota 2 Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'kemampuan_pelayanan',
            'Kemampuan Pelayanan',
            'required',
            [
                'required' => 'Kemampuan Pelayanan Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'jenis_pelayanan',
            'Jenis Pelayanan',
            'required',
            [
                'required' => 'Jenis Pelayanan Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'nama_kecamatan',
            'Nama Kecamatan',
            'required',
            [
                'required' => 'Kecamatan Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'nama_kelurahan',
            'Nama Kelurahan',
            'required',
            [
                'required' => 'Kelurahan Wajib di pilih',
            ]
        );
        $this->form_validation->set_rules(
            'alamat_klinik',
            'Alamat Klinik',
            'required|trim|min_length[5]|max_length[200]',
            [
                'required' => 'Alamat Klinik Wajib di isi',
                'min_length' => 'Alamat Klinik yang diinputkan minimal 5 karakter',
                'max_length' =>
                'Alamat Klinik yang diinputkan maksimal 200 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'nama_klinik',
            'Nama',
            'required|trim|min_length[5]|max_length[100]',
            [
                'required' => 'Nama Klinik Wajib di isi',
                'min_length' => 'Nama Klinik yang diinputkan minimal 5 karakter',
                'max_length' =>
                'Nama Klinik yang diinputkan maksimal 100 karakter',
            ]
        );
        $this->form_validation->set_rules('tgl_visitasi', 'Tanggal Visitasi', 'required', [
            'required' => 'Tanggal Visitasi Wajib di isi',
        ]);
        $this->form_validation->set_rules(
            'no_surat',
            'Nomor Surat',
            'trim|min_length[3]|max_length[20]',
            [
                'required' => 'Nomor Surat Wajib di isi',
                'min_length' => 'Nomor Surat wajib berisi minimal 3 karakter',
                'max_length' => 'Nomor Surat wajib berisi maksimal 50 karakter',
            ]
        );
        $this->form_validation->set_rules(
            'no_bap',
            'Nomor Surat',
            'trim|min_length[3]|max_length[20]',
            [
                'required' => 'Nomor BAP Wajib di isi',
                'min_length' => 'Nomor BAP wajib berisi minimal 3 karakter',
                'max_length' => 'Nomor BAP wajib berisi maksimal 50 karakter',
            ]
        );
        $id_klinik = $this->input->post('id_klinik');
        $data['id_klinik'] = $this->Model_penilaian_utama->data_updateklinikutama($id_klinik);
        $data['title'] = 'Edit Data Klinik Pratama/Utama Gigi';
        $data['anggota'] = $this->Model_penilaian_utama->get_anggota();
        $data['kecamatan'] = $this->Model_penilaian_utama->get_data_kecamatan();
        $klinik = $this->Model_penilaian_utama->data_klinikutama($id_klinik);
        if ($this->form_validation->run() == true) {
            if (isset($_POST['submit'])) {
                $this->Model_penilaian_utama->update();
                $this->session->set_flashdata(
                    'update',
                    '<div class="alert alert-warning alert-dismissible fade show">
                    Data Klinik Pratama/Utama Gigi. <b>' . $this->input->post('nama_klinik') . '</b> Berhasil Diubah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('penilaian_klinik_gigi');
            }
        } else {
            $this->template->load('template', 'penilaian/klinik_gigi/edit', $data);
        }
    }
    public function hapus()
    {
        $id = $this->uri->segment(3);
        // $this->db->where('id_klinik', $id);
        // $this->db->delete('tbl_klinik');
        $this->Model_penilaian_utama->delete_klinik($id);
        $this->session->set_flashdata(
            'delete',
            '<div class="alert alert-danger alert-dismissible fade show">
			Data Klinik Pratama/Utama Gigi. <b>' . $this->input->post('nama_klinik') . '</b> Berhasil Dihapus!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>'
        );
        redirect('penilaian_klinik_gigi');
    }
    public function nilai()
    {
        // $id_klinik = $this->input->get('id');
        $id_klinik = $this->uri->segment(3);
        $klinik = $this->db->where_in('kemampuan_pelayanan', array('Pratama Gigi', 'Utama Gigi'))->get_where('tbl_klinik', ['id_klinik =' => $id_klinik]);
        if ($klinik->num_rows() > 0) {
            $cek = $klinik->row();
            if ($cek->delete != 1) {
                $data['title'] = 'Form Pertama Penilaian Klinik Pratama/Utama Gigi';
                $cek_no_penilaian = $this->Model_penilaian_utama->cek_no_penilaian($id_klinik);
                if ($cek_no_penilaian['no_penilaian'] == null && $cek_no_penilaian['id_klinik_tbl_pen'] == null) {
                    $url = base_url('penilaian_klinik_gigi/nilai/') . $id_klinik;
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
                $data['cek_hasil'] = $this->Model_penilaian_utama->cek_hasil_penilaiansatu($id_klinik);
                $data['klinik'] = $this->Model_penilaian_utama->get_klinikwithpenilaiansatu($id_klinik);
                // print_r($this->db->last_query());
                $this->template->load('template', 'penilaian/klinik_gigi/nilai', $data);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }

    public function prosesnilai()
    {
        // $id_klinik = $this->input->get('id');
        $id_klinik = $this->uri->segment(3);
        $klinik = $this->Model_penilaian_utama->get_klinikwithpenilaiansatu($id_klinik);
        $no_penilaian = $klinik['no_penilaian'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['form'] == 'add') {
                if (isset($_POST['submit'])) {
                    $this->Model_penilaian_utama->simpan_penilaian_utama_pertama($id_klinik, $no_penilaian);
                    $this->session->set_flashdata(
                        'simpan',
                        '<div class="alert alert-secondary alert-dismissible fade show">
						Penilaian Klinik Pratama/Utama Gigi Form Pertama. <b>' . $klinik['nama_klinik'] . '</b> Berhasil Disimpan!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
                    );
                    // $id_klinik = $this->input->post('id_klinik');
                    redirect('penilaian_klinik_gigi/nilai_kedua/' . $id_klinik);
                }
            } else if ($_POST['form'] == 'edit') {
                if (isset($_POST['submit'])) {
                    $this->Model_penilaian_utama->update_penilaian_utama_pertama($id_klinik, $no_penilaian);
                    $this->session->set_flashdata(
                        'simpan',
                        '<div class="alert alert-warning alert-dismissible fade show">
						Penilaian Klinik Pratama/Utama Gigi Form Pertama. <b>' . $klinik['nama_klinik'] . '</b> Berhasil Diupdate!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
                    );
                    // $id_klinik = $this->input->post('id_klinik');
                    redirect('penilaian_klinik_gigi/nilai_kedua/' . $id_klinik);
                }
            }
        }
    }
    public function nilai_kedua()
    {
        // $id_klinik = $this->input->get('id');
        $id_klinik = $this->uri->segment(3);
        $klinik = $this->db->where_in('kemampuan_pelayanan', array('Pratama Gigi', 'Utama Gigi'))->get_where('tbl_klinik', ['id_klinik =' => $id_klinik]);
        if ($klinik->num_rows() > 0) {
            $cek = $klinik->row();
            if ($cek->delete != 1) {
                $data['title'] = 'Form Kedua Penilaian Klinik Pratama/Utama Gigi';
                $data['rincian'] = $this->Model_penilaian_utama->get_question_next();
                $data['klinik'] = $this->Model_penilaian_utama->get_klinikwithpenilaiandua($id_klinik);
                $data['cek_hasil'] = $this->Model_penilaian_utama->cek_hasil_penilaiandua($id_klinik);
                $this->template->load('template', 'penilaian/klinik_gigi/nilai-kedua', $data);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }
    public function prosesnilaikedua()
    {
        // $id_klinik = $this->input->get('id');
        $id_klinik = $this->uri->segment(3);
        $klinik = $this->Model_penilaian_utama->get_klinikwithpenilaiandua($id_klinik);
        $no_penilaian = $klinik['no_penilaian'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['form'] == 'add') {
                if (isset($_POST['submit'])) {
                    $this->Model_penilaian_utama->simpan_penilaian_utama_kedua($id_klinik, $no_penilaian);
                    $this->session->set_flashdata(
                        'simpan',
                        '<div class="alert alert-secondary alert-dismissible fade show">
						Penilaian Klinik Pratama/Utama Gigi Form Kedua. <b>' . $klinik['nama_klinik'] . '</b> Berhasil Disimpan!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
                    );
                    // $id_klinik = $this->input->post('id_klinik');
                    redirect('penilaian_klinik_gigi/nilai_ketiga/' . $id_klinik);
                }
            } else if ($_POST['form'] == 'edit') {
                if (isset($_POST['submit'])) {
                    $this->Model_penilaian_utama->update_penilaian_utama_kedua($id_klinik, $no_penilaian);
                    $this->session->set_flashdata(
                        'simpan',
                        '<div class="alert alert-warning alert-dismissible fade show">
						Penilaian Klinik Pratama/Utama Gigi Form Kedua. <b>' . $klinik['nama_klinik'] . '</b> Berhasil Diupdate!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>'
                    );
                    // $id_klinik = $this->input->post('id_klinik');
                    redirect('penilaian_klinik_gigi/nilai_ketiga/' . $id_klinik);
                }
            }
        }
    }
    public function nilai_ketiga()
    {
        $id_klinik = $this->uri->segment(3);
        $klinik = $this->db->where_in('kemampuan_pelayanan', array('Pratama Gigi', 'Utama Gigi'))->get_where('tbl_klinik', ['id_klinik =' => $id_klinik]);
        if ($klinik->num_rows() > 0) {
            $cek = $klinik->row();
            if ($cek->delete != 1) {
                $data['title'] = 'Form Ketiga Penilaian Klinik Pratama/Utama Gigi';
                $data['klinik'] = $this->Model_penilaian_utama->get_klinikwithpenilaianketiga($id_klinik);
                $this->template->load('template', 'penilaian/klinik_gigi/nilai-ketiga', $data);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }
    public function prosesnilaiketiga()
    {
        $id_klinik = $this->uri->segment(3);
        $klinik = $this->Model_penilaian_utama->get_klinikwithpenilaianketiga($id_klinik);
        $no_penilaian = $klinik['no_penilaian'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['form'] == 'add') {
                if (isset($_POST['submit']) && !empty($_FILES['upload_Files']['name'])) {
                    $nama_klinik = $this->input->post('nama_klinik');
                    $data = array();
                    $filesCount = count($_FILES['upload_Files']['name']);
                    $no = 1;
                    for ($i = 0; $i < $filesCount; $i++) {
                        $_FILES['upload_File']['name'] = $_FILES['upload_Files']['name'][$i];
                        $_FILES['upload_File']['type'] = $_FILES['upload_Files']['type'][$i];
                        $_FILES['upload_File']['tmp_name'] = $_FILES['upload_Files']['tmp_name'][$i];
                        $_FILES['upload_File']['error'] = $_FILES['upload_Files']['error'][$i];
                        $_FILES['upload_File']['size'] = $_FILES['upload_Files']['size'][$i];
                        $uploadPath = './assets/img/uploads/foto_klinik/';
                        $config['upload_path'] = $uploadPath;
                        $config['allowed_types'] = 'jpg|jpeg|png';
                        $config['overwrite'] = true;
                        $config['max_size'] = 5120;
                        $config['file_name'] = $nama_klinik . '_foto_klinik_' . $no;
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        if (!$this->upload->do_upload('upload_File')) {
                            $data['error'] = $this->upload->display_errors();
                        } else {
                            $fileData = $this->upload->data();
                            $uploadData[$i] = $fileData['file_name'];
                        }
                        $no++;
                    }
                    $img = $this->input->post('signed');
                    $imgttd1 = $this->input->post('ttd-1');
                    $imgttd2 = $this->input->post('ttd-2');
                    $imgttd3 = $this->input->post('ttd-3');
                    $imgttd4 = $this->input->post('ttd-4');
                    $imgttd5 = $this->input->post('ttd-5');
                    $imgttd6 = $this->input->post('ttd-6');

                    $img = str_replace('data:image/png;base64,', '', $img);
                    $img = str_replace(' ', '+', $img);
                    $data = base64_decode($img);
                    $file = './assets/img/uploads/ttd/' . uniqid() . '.png';
                    $success = file_put_contents($file, $data);
                    $image = str_replace('./assets/img/uploads/ttd/', '', $file);

                    $imgttd1 = str_replace('data:image/png;base64,', '', $imgttd1);
                    $imgttd1 = str_replace(' ', '+', $imgttd1);
                    $datattd1 = base64_decode($imgttd1);
                    $filettd1 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                    $success = file_put_contents($filettd1, $datattd1);
                    $imagettd1 = str_replace('./assets/img/uploads/ttd/', '', $filettd1);

                    $imgttd2 = str_replace('data:image/png;base64,', '', $imgttd2);
                    $imgttd2 = str_replace(' ', '+', $imgttd2);
                    $datattd2 = base64_decode($imgttd2);
                    $filettd2 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                    $success = file_put_contents($filettd2, $datattd2);
                    $imagettd2 = str_replace('./assets/img/uploads/ttd/', '', $filettd2);

                    $imgttd3 = str_replace('data:image/png;base64,', '', $imgttd3);
                    $imgttd3 = str_replace(' ', '+', $imgttd3);
                    $datattd3 = base64_decode($imgttd3);
                    $filettd3 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                    $success = file_put_contents($filettd3, $datattd3);
                    $imagettd3 = str_replace('./assets/img/uploads/ttd/', '', $filettd3);

                    $imgttd4 = str_replace('data:image/png;base64,', '', $imgttd4);
                    $imgttd4 = str_replace(' ', '+', $imgttd4);
                    $datattd4 = base64_decode($imgttd4);
                    $filettd4 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                    $success = file_put_contents($filettd4, $datattd4);
                    $imagettd4 = str_replace('./assets/img/uploads/ttd/', '', $filettd4);

                    $imgttd5 = str_replace('data:image/png;base64,', '', $imgttd5);
                    $imgttd5 = str_replace(' ', '+', $imgttd5);
                    $datattd5 = base64_decode($imgttd5);
                    $filettd5 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                    $success = file_put_contents($filettd5, $datattd5);
                    $imagettd5 = str_replace('./assets/img/uploads/ttd/', '', $filettd5);

                    $imgttd6 = str_replace('data:image/png;base64,', '', $imgttd6);
                    $imgttd6 = str_replace(' ', '+', $imgttd6);
                    $datattd6 = base64_decode($imgttd6);
                    $filettd6 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                    $success = file_put_contents($filettd6, $datattd6);
                    $imagettd6 = str_replace('./assets/img/uploads/ttd/', '', $filettd6);

                    $this->Model_penilaian_utama->simpan_penilaian_utama_ketiga($uploadData, $image, $imagettd1, $imagettd2, $imagettd3, $imagettd4, $imagettd5, $imagettd6, $id_klinik, $no_penilaian);

                    $this->session->set_flashdata(
                        'simpan',
                        '<div class="alert alert-secondary alert-dismissible fade show">
                    Penilaian Klinik Pratama/Utama Gigi Form Ketiga. Data <b>' . $this->input->post('nama_klinik') . '</b> Berhasil Disimpan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                    );
                    redirect('penilaian_klinik_gigi');
                }
            } else if ($_POST['form'] == 'edit') {
                if (isset($_POST['submit']) && !empty($_FILES['upload_Files']['name'])) {
                    $nama_klinik = $this->input->post('nama_klinik');
                    $data = array();
                    $filesCount = count($_FILES['upload_Files']['name']);
                    $no = 1;
                    for ($i = 0; $i < $filesCount; $i++) {
                        $_FILES['upload_File']['name'] = $_FILES['upload_Files']['name'][$i];
                        $_FILES['upload_File']['type'] = $_FILES['upload_Files']['type'][$i];
                        $_FILES['upload_File']['tmp_name'] = $_FILES['upload_Files']['tmp_name'][$i];
                        $_FILES['upload_File']['error'] = $_FILES['upload_Files']['error'][$i];
                        $_FILES['upload_File']['size'] = $_FILES['upload_Files']['size'][$i];
                        $uploadPath = './assets/img/uploads/foto_klinik/';
                        $config['upload_path'] = $uploadPath;
                        $config['allowed_types'] = 'jpg|jpeg|png';
                        $config['overwrite'] = true;
                        $config['max_size'] = 5120;
                        $config['file_name'] = $nama_klinik . '_foto_klinik_' . $no;
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        if (!$this->upload->do_upload('upload_File')) {
                            $data['error'] = $this->upload->display_errors();
                        } else {
                            $fileData = $this->upload->data();
                            $uploadData[$i] = $fileData['file_name'];
                        }
                        $no++;
                    }
                    if (empty($uploadData)) {
                        $uploadData = $this->input->post('old_photo');
                    }
                    $img = $this->input->post('signed');
                    $imgttd1 = $this->input->post('ttd-1');
                    $imgttd2 = $this->input->post('ttd-2');
                    $imgttd3 = $this->input->post('ttd-3');
                    $imgttd4 = $this->input->post('ttd-4');
                    $imgttd5 = $this->input->post('ttd-5');
                    $imgttd6 = $this->input->post('ttd-6');


                    if ($img == "" or $imgttd1 == "" or $imgttd2 == "" or $imgttd3 == "" or $imgttd4 == "" or $imgttd5 == "" or $imgttd6 == "") {
                        $image = $this->input->post('old_ttd_perwakilan');
                        $imagettd1 = $this->input->post('old_ttd_penilai1');
                        $imagettd2 = $this->input->post('old_ttd_penilai2');
                        $imagettd3 = $this->input->post('old_ttd_penilai3');
                        $imagettd4 = $this->input->post('old_ttd_penilai4');
                        $imagettd5 = $this->input->post('old_ttd_penilai5');
                        $imagettd6 = $this->input->post('old_ttd_penilai6');
                        $this->Model_penilaian_utama->update_penilaian_utama_ketiga($uploadData, $image, $imagettd1, $imagettd2, $imagettd3, $imagettd4, $imagettd5, $imagettd6, $id_klinik, $no_penilaian);
<<<<<<< HEAD
                        $this->Model_penilaian_utama->update_klinik_for_penilaian($id_klinik);
=======
                        $this->Model_penilaian_utama->update_klinik_for_penilaian()($id_klinik);
>>>>>>> df81f5d241c91f76152672a3ed13e95a3383298a
                        $this->session->set_flashdata(
                            'simpan',
                            '<div class="alert alert-warning alert-dismissible fade show">
                    Penilaian Klinik Pratama/Utama Gigi Form Ketiga. Data <b>' . $this->input->post('nama_klinik') . '</b> Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>'
                        );
                        redirect('penilaian_klinik_gigi');
                    } else {

                        $nama_klinik = $this->input->post('nama_klinik');
                        $data = array();
                        $filesCount = count($_FILES['upload_Files']['name']);
                        $no = 1;
                        for ($i = 0; $i < $filesCount; $i++) {
                            $_FILES['upload_File']['name'] = $_FILES['upload_Files']['name'][$i];
                            $_FILES['upload_File']['type'] = $_FILES['upload_Files']['type'][$i];
                            $_FILES['upload_File']['tmp_name'] = $_FILES['upload_Files']['tmp_name'][$i];
                            $_FILES['upload_File']['error'] = $_FILES['upload_Files']['error'][$i];
                            $_FILES['upload_File']['size'] = $_FILES['upload_Files']['size'][$i];
                            $uploadPath = './assets/img/uploads/foto_klinik/';
                            $config['upload_path'] = $uploadPath;
                            $config['allowed_types'] = 'jpg|jpeg|png';
                            $config['overwrite'] = true;
                            $config['max_size'] = 5120;
                            $config['file_name'] = $nama_klinik . '_foto_klinik_' . $no;
                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);
                            if (!$this->upload->do_upload('upload_File')) {
                                $data['error'] = $this->upload->display_errors();
                            } else {
                                $fileData = $this->upload->data();
                                $uploadData[$i] = $fileData['file_name'];
                            }
                            $no++;
                        }

                        $img = str_replace('data:image/png;base64,', '', $img);
                        $img = str_replace(' ', '+', $img);
                        $data = base64_decode($img);
                        $file = './assets/img/uploads/ttd/' . uniqid() . '.png';
                        $success = file_put_contents($file, $data);
                        $image = str_replace('./assets/img/uploads/ttd/', '', $file);

                        $imgttd1 = str_replace('data:image/png;base64,', '', $imgttd1);
                        $imgttd1 = str_replace(' ', '+', $imgttd1);
                        $datattd1 = base64_decode($imgttd1);
                        $filettd1 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                        $success = file_put_contents($filettd1, $datattd1);
                        $imagettd1 = str_replace('./assets/img/uploads/ttd/', '', $filettd1);

                        $imgttd2 = str_replace('data:image/png;base64,', '', $imgttd2);
                        $imgttd2 = str_replace(' ', '+', $imgttd2);
                        $datattd2 = base64_decode($imgttd2);
                        $filettd2 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                        $success = file_put_contents($filettd2, $datattd2);
                        $imagettd2 = str_replace('./assets/img/uploads/ttd/', '', $filettd2);

                        $imgttd3 = str_replace('data:image/png;base64,', '', $imgttd3);
                        $imgttd3 = str_replace(' ', '+', $imgttd3);
                        $datattd3 = base64_decode($imgttd3);
                        $filettd3 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                        $success = file_put_contents($filettd3, $datattd3);
                        $imagettd3 = str_replace('./assets/img/uploads/ttd/', '', $filettd3);

                        $imgttd4 = str_replace('data:image/png;base64,', '', $imgttd4);
                        $imgttd4 = str_replace(' ', '+', $imgttd4);
                        $datattd4 = base64_decode($imgttd4);
                        $filettd4 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                        $success = file_put_contents($filettd4, $datattd4);
                        $imagettd4 = str_replace('./assets/img/uploads/ttd/', '', $filettd4);

                        $imgttd5 = str_replace('data:image/png;base64,', '', $imgttd5);
                        $imgttd5 = str_replace(' ', '+', $imgttd5);
                        $datattd5 = base64_decode($imgttd5);
                        $filettd5 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                        $success = file_put_contents($filettd5, $datattd5);
                        $imagettd5 = str_replace('./assets/img/uploads/ttd/', '', $filettd5);

                        $imgttd6 = str_replace('data:image/png;base64,', '', $imgttd6);
                        $imgttd6 = str_replace(' ', '+', $imgttd6);
                        $datattd6 = base64_decode($imgttd6);
                        $filettd6 = './assets/img/uploads/ttd/' . uniqid() . '.png';
                        $success = file_put_contents($filettd6, $datattd6);
                        $imagettd6 = str_replace('./assets/img/uploads/ttd/', '', $filettd6);

                        $this->Model_penilaian_utama->update_penilaian_utama_ketiga($uploadData, $image, $imagettd1, $imagettd2, $imagettd3, $imagettd4, $imagettd5, $imagettd6, $id_klinik, $no_penilaian);
                        $this->Model_penilaian_utama->update_klinik_for_penilaian($id_klinik);
                        $this->session->set_flashdata(
                            'simpan',
                            '<div class="alert alert-warning alert-dismissible fade show">
                        Penilaian Klinik Pratama/Utama Gigi Form Ketiga. Data <b>' . $this->input->post('nama_klinik') . '</b> Berhasil Diupdate!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>'
                        );
                        redirect('penilaian_klinik_gigi');
                    }
                }
            }
        }
    }
    function print()
    {
        $id_klinik = $this->uri->segment(3);
        $data['penilaiansatu'] = $this->Model_penilaian_utama->penilaiansatu($id_klinik);
        $data['peralatanklinik'] = $this->Model_penilaian_utama->peralatanklinik($id_klinik);
        $data['bahanhabis'] = $this->Model_penilaian_utama->bahanhabis($id_klinik);
        $data['meubelair'] = $this->Model_penilaian_utama->meubelair($id_klinik);
        $data['pencatatan'] = $this->Model_penilaian_utama->pencatatan($id_klinik);
        $data['ruangasi'] = $this->Model_penilaian_utama->ruangasi($id_klinik);
        $data['penilaian'] = $this->Model_penilaian_utama->penilaian($id_klinik);
        $cek_data = $this->Model_penilaian_utama->cek_data($id_klinik);
        $data['klinik'] = $this->Model_penilaian_utama->print_klinik($id_klinik);
        $data['title'] = 'Cetak Penilaian Klinik utama' . $data['penilaian']['nama_klinik'] . '';
        $data['anggota'] = $this->Model_penilaian_utama->get_anggota();
        $data['data'] = $this->Model_penilaian_utama->get_data_utama();
        if ($cek_data['status_penilaian'] == "Belum") {
            $this->session->set_flashdata(
                'nilai',
                '<div class="alert alert-danger alert-dismissible fade show">
				Tidak dapat Mencetak. <b>' . $cek_data['nama_klinik'] . '</b> Belum dinilai!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
            );
            redirect('penilaian_utama');
        } else if ($cek_data['status_penilaian'] == "Sedang") {
            $this->session->set_flashdata(
                'nilai',
                '<div class="alert alert-danger alert-dismissible fade show">
				Tidak dapat Mencetak. <b>' . $cek_data['nama_klinik'] . '</b> Belum selesai dinilai!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
            );
            redirect('penilaian_klinik_gigi');
        } else {

            $this->load->view('penilaian/klinik_gigi/print', $data);
        }
    }
    public function export_pdf()
    {
        $id_klinik = $this->uri->segment(3);
        $data['penilaiansatu'] = $this->Model_penilaian_utama->penilaiansatu($id_klinik);
        $data['peralatanklinik'] = $this->Model_penilaian_utama->peralatanklinik($id_klinik);
        $data['bahanhabis'] = $this->Model_penilaian_utama->bahanhabis($id_klinik);
        $data['meubelair'] = $this->Model_penilaian_utama->meubelair($id_klinik);
        $data['pencatatan'] = $this->Model_penilaian_utama->pencatatan($id_klinik);
        $data['ruangasi'] = $this->Model_penilaian_utama->ruangasi($id_klinik);
        $data['penilaian'] = $this->Model_penilaian_utama->penilaian($id_klinik);
        $cek_data = $this->Model_penilaian_utama->cek_data($id_klinik);
        $data['klinik'] = $this->Model_penilaian_utama->export_pdf_klinik($id_klinik);
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
            redirect('penilaian_klinik_gigi');
        } else if ($cek_data['status_penilaian'] == "Sedang") {
            $this->session->set_flashdata(
                'nilai',
                '<div class="alert alert-danger alert-dismissible fade show">
				Tidak dapat Export ke PDF. <b>' . $cek_data['nama_klinik'] . '</b> Belum selesai dinilai!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
            );
            redirect('penilaian_klinik_gigi');
        } else {
            $mpdf = new \Mpdf\Mpdf(['orientation' => 'P', 'format' => 'Legal', 'allow_charset_conversion' => true]);
            $mpdf->shrink_tables_to_fit = 0;
            $mpdf->debug = true;
            $mpdf->showImageErrors = true;
            $mpdf->curlAllowUnsafeSslRequests = true;
            $html = $this->load->view('penilaian/klinik_gigi/pdf', $data, true);
            $mpdf->WriteHTML($html);
            $mpdf->Output('Berita Acara ' . $data['penilaian']['nama_klinik'] . '.pdf', 'I');
        }
    }
}