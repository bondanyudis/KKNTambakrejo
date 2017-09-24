<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_news extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_events');
	}
	public function index()
	{
		$id = $this->uri->segment(3);

		$data = array("news"=>$this->m_events->news_where($id));
		$this->load->view('news',$data);
	}

}

/* End of file C_news.php */
/* Location: ./application/controllers/C_news.php */