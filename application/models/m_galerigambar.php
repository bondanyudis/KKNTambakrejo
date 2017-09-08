<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_GaleriGambar extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilGambarSendiki() {
        return $this->db->get('gambar')->result();
    }
    public function tampilGambarTamban() {
        return $this->db->get('gambar')->result();
    }
}

?>