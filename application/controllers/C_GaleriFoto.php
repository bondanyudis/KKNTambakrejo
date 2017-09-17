<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_GaleriFoto extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_galerigambar');
	}
	public function index()
	{
		$data = array("user" => $this->m_galerigambar->tampilGambar());
		$this->load->view('GaleriFoto', $data);
	}
}
