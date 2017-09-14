<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_adminfoto extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function jumlahdata(){
        return $this->db->get('gambar')->num_rows();
    }
    public function get_image($number,$offset) {
        return $this->db->get('gambar',$number,$offset)->result();
    }
    public function input_foto($DataFoto) {
        return $this->db->insert('gambar',$DataFoto);
    }
    public function delete_foto($DataFoto) {
       	$this->db->where('id',$DataFoto);
       return $this->db->delete('gambar');
    }
     public function getdata_foto($DataFoto) {
       return $this->db->get_where('gambar',array('id'=>$DataFoto));
    }
     public function edit_foto($DataFoto,$id) {
        $this->db->where('id',$id);
        return $this->db->update('gambar',$DataFoto);
    }

}

?>