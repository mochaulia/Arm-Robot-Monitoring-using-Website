<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rtposition extends CI_Controller {
	public function __construct() {
        parent:: __construct();
		$this->load->model('Mposition');
    }

	public function index()
	{
        $data = array();
        $data['last'] = $this->Mposition->row_akhir();
        $dataJson = file_get_contents('http://localhost/c3men/api/position');
        $data['arr'] = json_decode($dataJson, true);
		$this->load->view('landing/position', $data);
    }


	function json(){
        $this->load->library('datatables');
        $this->datatables->select('*');
        $this->datatables->from('position');
        return print_r($this->datatables->generate());
    }

    function data()
    {
        $position = $this->Mposition->get_all();
        $arr = array();
        $arr['data'] = array();
        if(!empty($position)):
            foreach($position as $row):
                $arr['data'][] = array(
                    $row['id'],
                    $row['position_x'],
                    $row['position_y'],
                    $row['position_z'],
                    $row['position_r'],
                    $row['pump_state'],
                    $row['speed_val']
                );
            endforeach;
        endif;
		$json = json_encode($arr);
		echo $json;
    }

    function ajax_position_data(){
        $this->load->view('landing/_position_data');
    }

    function ajax_graph(){
        $this->load->view('landing/_graph_tigad');
    }
}
