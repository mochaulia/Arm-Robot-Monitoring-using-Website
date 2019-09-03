<?php
class Mposition extends CI_Model {
 
    function __construct()
    {
        parent:: __construct();
		$this->load->database();
		$this->position_table = 'position';
    }
 
    function get_all()
    {
        $position = $this->db->get('position')->result_array();
        return $position;
    }
    
	public function get_rows($params = array()) {
		$this->db->select('
			position.id as id_position,
			position.position_x as pos_x,
			position.position_y as pos_y,
			position.position_z as pos_z,
			position.position_r as pos_r,
			position.pump_state as pump,
			position.speed_val as speed,
		');
		$this->db->from($this->position_table);
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

	function get_last_row() {
        $q = $this->db->get('position');
		return $this->get_rows(array(
			'return_type' => 'one_row',
			'where' => array(
				'position.id' => $q -> num_rows()
			)
		));
	}

	public function row_akhir(){
		$this->load->database();
		$last_row = $this->db->order_by('id',"desc")
			->limit(1)
			->get('position')
			->row();
		return $last_row;
	}

    public function delete_position()
    {
        $this->db->from($this->position_table);
        $this->db->truncate();
    }

}