<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Teaching extends REST_Controller {
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $teaching = $this->db->get('teaching')->result();
        } else {
            $this->db->where('id', $id);
            $teaching = $this->db->get('teaching')->result();
        }
        $this->response($teaching, 200);
    }

    function index_post() {
        $data = array(
                    'id'=> $this->post('id'),
                    'data_x'=> $this->post('data_x'),
                    'data_y'=> $this->post('data_y'),
                    'data_z'=> $this->post('data_z'),
                    'data_r'=> $this->post('data_r'),
                    'data_pump'=> $this->post('data_pump'),
                    'data_speed'=> $this->post('data_speed'));
        $insert = $this->db->insert('teaching', $data);
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
                    'data_x'=> $this->put('data_x'),
                    'data_y'=> $this->put('data_y'),
                    'data_z'=> $this->put('data_z'),
                    'data_r'=> $this->put('data_r'),
                    'data_pump'=> $this->put('data_pump'),
                    'data_speed'=> $this->put('data_speed'));
        $this->db->where('id', $id);
        $update = $this->db->update('teaching', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('teaching');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>