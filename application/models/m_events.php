<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_events extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilEventsHome() {
    	$this->db->select('*');
		$this->db->from('event');
		$this->db->order_by('tgl','asc');
		$this->db->limit(3);
		return $this->db->get()->result();
        // return $this->db->get('event')->result();
    }
    public function tampilEventsHome2() {
    	$this->db->select('*');
		$this->db->from('event');
		$this->db->order_by('tgl','asc');
		$this->db->limit(3);
		return $this->db->get()->result();
        // return $this->db->get('event')->result();
    }
    public function news_where($id){
        $this->db->where('id',$id);
        return $this->db->get('event')->result();
    }
}

?>