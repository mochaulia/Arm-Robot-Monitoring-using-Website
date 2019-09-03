<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('MUsers');
		$this->load->model('Mposition');
		$this->load->model('MTeaching');
	}

	public function index() {
		$data = array();
		if ($this->session->userdata('is_logged_in')) {
			$data['user'] = $this->MUsers->get_row_aktif();
			$data['last'] = $this->Mposition->get_last_row();
			$this->load->view('dashboard/dashboard', $data);
		}
		else {
			redirect('users/login');
		}
	}

	public function teaching() {
		$data = array();
		if ($this->session->userdata('is_logged_in')) {
			$data['user'] = $this->MUsers->get_row_aktif();
			$data['last'] = $this->Mposition->get_last_row();
			$this->load->view('dashboard/teaching', $data);
		}
		else {
			redirect('users/login');
		}
	}

    function dataTable_teaching(){
		if ($this->session->userdata('is_logged_in')) {
			$teaching = $this->MTeaching->get_all();
			$arr = array();
			$arr['data'] = array();
			if(!empty($teaching)):
				foreach($teaching as $row):
					$arr['data'][] = array(
						$row['id'],
						$row['data_x'],
						$row['data_y'],
						$row['data_z'],
						$row['data_r'],
						$row['data_pump'],
						$row['data_speed']
					);
				endforeach;
			endif;
			$json = json_encode($arr);
			echo $json;
		}
		else {
			redirect('users/login');
		}
	}

	function delete_all_position_rows(){
		if ($this->session->userdata('is_logged_in')) {
			$this->Mposition->delete_position();
		}
		else {
			redirect('users/login');
		}
	}

	function delete_all_teaching_rows(){
		if ($this->session->userdata('is_logged_in')) {
			$this->MTeaching->delete_teaching();
		}
		else {
			redirect('users/login');
		}
	}

    function ajax_recent_status_dashboard(){
        $this->load->view('dashboard/_recent_status_dashboard');
    }
}
