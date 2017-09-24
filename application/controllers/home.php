<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_galerigambar");
		$this->load->model("m_events");
	}
	public function index()
	{
		$data = array("sendiki" => $this->m_galerigambar->tampilGambarSendiki(),
			"tamban" => $this->m_galerigambar->tampilGambarTamban(),"event" => $this->m_events->tampilEventsHome(),"event2" => $this->m_events->tampilEventsHome2());
		$this->load->view('index',$data);
	}
}
