<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Events extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilEvents() {
        return $this->db->get('event')->result();
    }
}

?>