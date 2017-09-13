<?php
class C_Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\Login');

	}

	function login_process(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$login = array(
			'username' => $username,
			'password' => $password
			);

		$check = $this->m_login->check_login("admin",$login)->num_rows();
		$pos = $this->m_login->check_login("admin",$login)->result();


		if($check > 0){
			$data_session = array(
				'username' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
					redirect(base_url().'index.php/C_Admin');

		}else{
			 $message = "Username atau password anda salah.\\nCoba Lagi.";
  			 echo "<script type='text/javascript'>alert('$message');</script>";
			 header("Refresh: 0.01; URL=http://localhost/KKNTambakrejo/index.php/C_login");
			
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/C_login'));
	}
}