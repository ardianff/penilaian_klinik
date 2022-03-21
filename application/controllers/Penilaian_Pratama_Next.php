<?php

class Penilaian_Pratama_Next extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Model_penilaian_pratama');
		check_session();
	}

	function index()
	{
		$data['title'] = 'Penilaian Klinik Pratama';
		$data['data'] = $this->Model_penilaian_pratama->get_data_all();
		$this->template->load('template', 'penilaian/pratama/nilai-next', $data);
	}
}
