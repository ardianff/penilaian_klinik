<?php
Class Dashboard extends CI_Controller{
    
    
    
    function __construct() {
        parent::__construct();
        check_session();
    }
            
    function index(){
        $this->template->load('template','dashboard');
    }
}


?>


