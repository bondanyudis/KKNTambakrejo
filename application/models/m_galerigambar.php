<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_galerigambar extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function tampilGambar(){
    	return $this->db->get('gambar')->result();
    }
    public function tampilGambarSendiki() {
        return $this->db->get('gambar')->result();
    }
    public function tampilGambarTamban() {
        return $this->db->get('gambar')->result();
    }
}

?>