<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graph extends CI_Controller {
	public function __construct() {
        parent:: __construct();
    }

	public function index()
	{
		$this->load->view('landing/_graph');
	}
	
    function ajax_tiga_d(){
        $this->load->view('landing/_graph');
    }
}
