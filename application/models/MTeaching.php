<?php
class MTeaching extends CI_Model {
 
    function __construct()
    {
        parent:: __construct();
		$this->load->database();
		$this->teaching_table = 'teaching';
    }
 
    function get_all()
    {
        $position = $this->db->get('teaching')->result_array();
        return $position;
    }
    
	public function get_rows($params = array()) {
		$this->db->select('
			teaching.id as id_position,
			teaching.data_x as pos_x,
			teaching.data_y as pos_y,
			teaching.data_z as pos_z,
			teaching.data_r as pos_r,
			teaching.data_pump as pump,
			teaching.data_speed as speed,
		');
		$this->db->from($this->teaching_table);
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
        $q = $this->db->get('teaching');
		return $this->get_rows(array(
			'return_type' => 'one_row',
			'where' => array(
				'teaching.id' => $q -> num_rows()
			)
		));
	}

	public function row_akhir(){
		$this->load->database();
		$last_row = $this->db->order_by('id',"desc")
			->limit(1)
			->get('teaching')
			->row();
		return $last_row;
	}

    public function delete_teaching()
    {
        $this->db->from($this->teaching_table);
        $this->db->truncate();
    }
}