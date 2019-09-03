<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Position extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }


    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $position = $this->db->get('position')->result();
        } else {
            $this->db->where('id', $id);
            $position = $this->db->get('position')->result();
        }
        $this->response($position, 200);
    }

    function index_post() {
        $data = array(
                    'id'=> $this->post('id'),
                    'position_x'=> $this->post('position_x'),
                    'position_y'=> $this->post('position_y'),
                    'position_z'=> $this->post('position_z'),
                    'position_r'=> $this->post('position_r'),
                    'pump_state'=> $this->post('pump_state'),
                    'speed_val'=> $this->post('speed_val'));
        $insert = $this->db->insert('position', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'=> $this->put('id'),
                    'position_x'=> $this->put('position_x'),
                    'position_y'=> $this->put('position_y'),
                    'position_z'=> $this->put('position_z'),
                    'position_r'=> $this->put('position_r'),
                    'pump_state'=> $this->put('pump_state'),
                    'speed_val'=> $this->put('speed_val'));
        $this->db->where('id', $id);
        $update = $this->db->update('position', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('position');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>