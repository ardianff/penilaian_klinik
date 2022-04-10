<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define CI_Controller path

/**
 *
 * Controller Laporan_Penilaian
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller REST
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Laporan_Penilaian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_session();
    }

    public function index()
    {
        $data['title'] = 'Laporan Penilaian';
        $this->template->load(
            'template',
            'laporan-penilaian/data',
            $data
        );
    }

}

/* End of file Laporan_Penilaian.php */
/* Location: ./application/controllers/Laporan_Penilaian.php */