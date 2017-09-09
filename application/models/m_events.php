<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_events extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tampilEvents() {
        return $this->db->get('event')->result();
    }
}

?>