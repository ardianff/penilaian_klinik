<?php
class Model_auth extends CI_Model
{
	private $table = 'tbl_user';
	public function check_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$user = $this->db->get('tbl_user')->row_array();
		return $user;
	}
	function add()
	{
		$data = [
			'kode_user' => kode_user(),
			'nama_user' => $this->input->post('nama_user'),
			'nip_user' => $this->input->post('nip_user'),
			'level_user' => $this->input->post('level_user'),
			'username' => $this->input->post('username'),
			'password' => password_hash(
				$this->input->post('password'),
				PASSWORD_BCRYPT
			),
		];
		$this->db->insert('tbl_user', $data);
	}
	function ubah()
	{
		if ($this->input->post('password') != '') {
			$data = [
				'nama_user' => $this->input->post('nama_user'),
				'nip_user' => $this->input->post('nip_user'),
				'username' => $this->input->post('username'),
				'password' => password_hash(
					$this->input->post('password'),
					PASSWORD_BCRYPT
				),
			];
		} else {
			$data = [
				'nama_user' => $this->input->post('nama_user'),
				'nip_user' => $this->input->post('nip_user'),
				'username' => $this->input->post('username'),
			];
		}
		$nip_user = $this->input->post('nip_user');
		$this->db->where('nip_user', $nip_user);
		$this->db->update('tbl_user', $data);
	}
	public function update($data, $id)
	{
		return $this->db->update($this->table, $data, ['kode_user' => $id]);
	}
	public function delete($id)
	{
		$data = [
			'delete_at' => datetime_now(),
			'delete' => '1'
		];
		return $this->db->update($this->table, $data, ['kode_user' => $id]);
	}
	function ubah_password()
	{
		$data = [
			'password' => password_hash(
				$this->input->post('password'),
				PASSWORD_BCRYPT
			),
		];
		// echo $data;
		$nip_user = $this->input->post('nip_user');
		$this->db->where('nip_user', $nip_user);
		$this->db->update('tbl_user', $data);
	}
	function getById($id)
	{
		return $this->db->get_where($this->table, ['kode_user' => $id])->row();
	}
	function getAll()
	{
		return $this->db->get_where($this->table, ['delete' => '0'])->result();
	}
}