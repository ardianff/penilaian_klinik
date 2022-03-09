<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

         public function __construct() {
   	     parent::__construct();
   	     $this->load->model('Model_auth');
         }

	public function index(){
        
        if($this->session->userdata('is_login')==TRUE)
          {
          redirect('dashboard','refresh');
          }

		$this->load->view('auth/login');
		
	}

	public function register() {

		if($this->session->userdata('is_login')==TRUE)
          {
          redirect('user/securepage','refresh');
          }

		$this->template->load('role','user/form_register');
		
	}

	public function register_proses(){

	$this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[3]|max_length[22]');
	$this->form_validation->set_rules('email', 'E-mail', 'trim|required|min_length[3]|max_length[45]|is_unique[user.email]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]');

	if ($this->form_validation->run() == TRUE ) {

		   if($this->m_user->m_register()){
           
           $this->session->set_flashdata('pesan', 'Register berhasil, silahkan  Sign In.');
           redirect('/','refresh');

		   }else{

           $this->session->set_flashdata('pesan', 'Register user gagal!');
           redirect('/','refresh');

		   }

	} else {
		
		$this->template->load('role','user/form_register');
	}

	
		
	}

	public function login_proses() {

	$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]|max_length[45]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]');

    if ($this->form_validation->run() == TRUE) {
    	
          if($this->Model_auth->cek_login()->num_rows()==1) {
          
             $db=$this->Model_auth->cek_login()->row();
             if(hash_verified($this->input->post('password'),$db->password)) {

                     $data_login=array('is_login'=>TRUE,
                             'username'  =>$db->username,
                             'nama_user'   =>$db->nama_user,
                             'nip_user'   =>$db->nip_user
							);
             
                     $this->session->set_userdata($data_login);
                     redirect('dashboard');

                        } else {

                        $this->session->set_flashdata('pesan', 'Login gagal: Password salah!');
                        redirect('/');

                        }

          } else { // jika email tidak terdaftar!
           
           $this->session->set_flashdata('pesan', 'Login gagal: Username salah!');
           redirect('/');

          }

    } else { 

    	$this->template->load('role','user/form_login');
    }

	}


	public function securepage() {

		if($this->session->userdata('is_login')==FALSE)
          {
          redirect('/');
          }

        $this->template->load('role','user/securepage');

	}


	public function logout() {

		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');

		session_destroy();
		//$this->session->set_flashdata('pesan', 'Sign Out Berhasil!');
		redirect('/','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
