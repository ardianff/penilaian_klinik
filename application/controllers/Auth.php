<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_auth');
    }

    function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|required'
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required'
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $this->check_login();
        }
    }

    function check_login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('tbl_user', ['username' => $username]);
        if ($user->num_rows() > 0) {
            $hasil = $user->row();
            if (password_verify($password, $hasil->password)) {
                $this->session->set_userdata('id', $hasil->id);
                $this->session->set_userdata('nama_user', $hasil->nama_user);
                $this->session->set_userdata(['status_login' => 'ok']);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show">
					Password yang Anda masukkan salah !
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show">
				Username tidak tersedia !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
            );
            redirect('auth');
        }
        // if (isset($_POST['submit'])) {
        //     $username = $this->input->post('username');
        //     $password = $this->input->post('password');
        //     $password = password_verify(
        //         $this->input->post('password'),
        //         PASSWORD_DEFAULT
        //     );
        //     $result = $this->Model_auth->check_login($username, $password);
        //     if (!empty($result)) {
        //         $this->session->set_userdata($result);
        //         $this->session->set_userdata(['status_login' => 'ok']);
        //         redirect('dashboard');
        //     } else {
        //         $this->session->set_flashdata(
        //             'message',
        //             // '<div class="alert alert-danger" role="alert">Username atau Password yang Anda masukkan salah</div>'
        //             '<div class="alert alert-danger alert-dismissible fade show">
        // 			Username atau Password yang Anda masukkan salah
        // 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        // 				<span aria-hidden="true">&times;</span>
        // 			</button>
        // 		</div>'
        //         );
        //         redirect('auth');
        //     }
        // } else {
        //     $this->load->view('auth/login');
        // }
    }
    function add()
    {
        if (isset($_POST['submit'])) {
            $this->Model_auth->add();
            redirect('dashboard');
        } else {
            $this->template->load('template', 'auth/add');
        }
    }

    function logout()
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
        redirect('auth');
    }
}

?>
