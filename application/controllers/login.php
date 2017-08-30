<?php
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
	}

	function index(){
		$this->load->helper('url');
		$this->load->view('V_login');

	}

	function login_process(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$login = array(
			'username' => $username,
			'password' => md5($password)
			);

		$check = $this->M_login->check_login("user",$login)->num_rows();
		$pos = $this->M_login->check_login("user",$login)->result();


		if($check > 0){
			$data_session = array(
				'username' => $username,
				'status' => "login"
				);
		foreach ($pos as $p) {
			$posi = $p->position;
				if ( $posi == 'member') {
					$this->session->set_userdata($data_session);
					redirect(base_url().'home');
				}else{
					$this->session->set_userdata($data_session);
					redirect(base_url().'admin');
				}
		}

		}else{
			 $message = "Username atau password anda salah.\\nCoba Lagi.";
  			 echo "<script type='text/javascript'>alert('$message');</script>";
			 header("Refresh: 0.01; URL=http://localhost/KKNTambakrejo/V_admin.php/login");
			
		}
	}

	function registration_process(){
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$position = $this->input->post('position');

		$check = $this->m_login->check_login("user",$login)->num_rows();

		if ($check > 0 && $check<=1) {
			$registration = array(
			'name' => $name,
			'username' => $username,
			'email' => $email,
			'password' => md5($password), 
			'position' => "member"
			);

		$this->m_login->input_data($registration,'user');
		redirect(base_url().'login');
		}else{
			$message = "Registrasi gagal, username anda sudah dipakai.\\nCoba Lagi.";
  			 echo "<script type='text/javascript'>alert('$message');</script>";
			 header("Refresh: 0.01; URL=http://localhost/sipeva/index.php/login");
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}