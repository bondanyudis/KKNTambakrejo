<?php 

class m_login extends CI_Model{	

	function check_login($table,$login){		
		return $this->db->get_where($table,$login);
	}	

	function input_data($registration,$table){
		$this->db->insert($table,$registration);
	}
}