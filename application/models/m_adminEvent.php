<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_adminevent extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_event() {
        return $this->db->get('event')->result();
    }
       public function input_event($DataEvent) {
        $this->db->insert('event',$DataEvent);
    }
       public function delete_event($DataEvent) {
       	$this->db->where('id',$DataEvent);
       return $this->db->delete('event');
    }
        public function getdata_event($DataEvent) {
       return $this->db->get_where('event',array('id'=>$DataEvent));
    }
        public function edit_event($DataEvent,$id) {
        $this->db->where('id',$id);
        return $this->db->update('event',$DataEvent);
    }
}

?>