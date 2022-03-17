<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_session();
	}

	function index()
	{
		$nama_user['user'] = $this->db
			->get_where('tbl_user', [
				'id_user' => $this->session->userdata('id_user'),
			])
			->row_array();
		$this->template->load('template', 'dashboard/index', $nama_user);
	}
}
