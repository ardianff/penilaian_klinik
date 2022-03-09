<?php  
Class Model_auth extends CI_Model{
    
    
    function check_login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $user= $this->db->get('tbl_user')->row_array();
        return $user;
    }
	public function cek_login() {

		return $this->db->get_where('tbl_user',array('username' => $this->input->post('username')));
   
	}
	function add() {
        $data = array(
            'nama_user' => $this->input->post('nama_user'),
            'nip_user' => $this->input->post('nip_user'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'),$hash)  
        );
        $this->db->insert('tbl_user',$data);
    }
	function update() {
		// $data['password'] = password_hash(trim($this->input->post('password')), PASSWORD_DEFAULT);
		if($this->input->post('password') != ''){
			$data = array(
			'nama_user' => $this->input->post('nama_user'),
            'nip_user' => $this->input->post('nip_user'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT));
		}else{
			$data = array(
				'nama_user' => $this->input->post('nama_user'),
				'nip_user' => $this->input->post('nip_user'),
				'username' => $this->input->post('username')
			);
		}
        $nip_user= $this->input->post('nip_user');
        $this->db->where('nip_user',$nip_user);
        $this->db->update('tbl_user',$data);
    }
	function ubah_password() {
			$data = array(
				'password' => password_hash($this->input->post('password'),$hash)  
			);
			echo ($data);
        $nip_user= $this->input->post('nip_user');
        $this->db->where('nip_user',$nip_user);
        $this->db->update('tbl_user',$data);
    }
}



?>
