<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_auth');
        $this->id_user = $this->session->userdata('id_user');
    }

    public function index()
    {
        check_sudah_login();
        $this->load->view('auth/login');
    }

    public function check_login()
    {
        check_sudah_login();
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|xss_clean|trim|min_length[5]',
            [
                'required' => 'Username wajib diisi',
                'min_length' => 'Username berisi minimal 5 karakter'
            ]
        );
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]', [
            'required' => 'Password wajib diisi',
            'min_length' => 'Password berisi minimal 5 karakter'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);

            $user = $this->db->get_where('tbl_user', ['BINARY (username) =' => $username]);
            if ($user->num_rows() > 0) {
                $hasil = $user->row();
                if (password_verify($password, $hasil->password)) {
                    $this->session->set_userdata([
                        'id_user' => $hasil->id_user,
                        'nama_user' => $hasil->nama_user,
                        'level_user' => $hasil->level_user,
                        'status_login' => 'ok'
                    ]);

                    if ($this->session->userdata('level_user') == 'Admin') {
                        redirect('dashboard');
                    } elseif ($this->session->userdata('level_user') == 'Penilai') {
                        redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger alert-dismissible fade show">
						Password yang Anda masukkan tidak sesuai !
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
                    );
                    $this->session->set_flashdata('user', $username);
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show">
					Username & Password yang Anda masukkan tidak sesuai !
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
                );
                $this->session->set_flashdata('user', $username);
                redirect('auth');
            }
        }
    }
    public function add()
    {
        if (isset($_POST['submit'])) {
            $this->Model_auth->add();
            redirect('dashboard');
        } else {
            $this->template->load('template', 'auth/add');
        }
    }

    public function logout()
    {
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show">
			Anda berhasil Log out
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>'
        );
        // $this->session->sess_destroy();
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->set_userdata(['status_login' => 'logout']);
        session_destroy();
        redirect('auth');
    }
}