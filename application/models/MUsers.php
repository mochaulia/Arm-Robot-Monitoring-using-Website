<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUsers extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->users_table = 'users';
	}

	public function get_rows($params = array()) {
		$this->db->select('
			users.id as id_user,
			users.username as username,
		');
		$this->db->from($this->users_table);
		if (array_key_exists('where', $params)) {
			foreach ($params['where'] as $column => $value) {
				$this->db->where($column, $value);
			}
		}
		$query = $this->db->get();
		if (array_key_exists('return_type', $params)) {
			if ($params['return_type'] == 'num_rows') {
				$result = $query->num_rows();
			}
			elseif ($params['return_type'] == 'one_row') {
				$result = ($query->num_rows() == 1) ? $query->row() : false;
			}
			elseif ($params['return_type'] == 'all') {
				$result = ($query->num_rows() > 0) ? $query->result() : false;
			}
		}
		return $result;
	}

	public function get_row_aktif() {
		return $this->get_rows(array(
			'return_type' => 'one_row',
			'where' => array(
				'users.id' => $this->session->userdata('id_user'),
			),
		));
	}
}