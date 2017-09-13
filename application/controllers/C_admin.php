<?php
/**
* 
*/
class C_admin extends CI_Controller{
	
		public function __construct(){
		parent::__construct();
		$this->load->model("m_adminfoto");
		$this->load->model("m_adminEvent");
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/C_Login"));
	}
}

	function index(){
		$data['event'] = $this->m_adminEvent->get_event();
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\Adminindex',$data);
	}

	function Foto(){
		$data['foto'] = $this->m_adminfoto->get_image();
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\Foto',$data);
	}

	/*function Video(){
		//$data['products'] = $this->m_database->view_data()->result();
		//$this->load->view('v_admin',$data);
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\Video');
	}*/

	function Homestay(){
		//$data['products'] = $this->m_database->view_data()->result();
		//$this->load->view('v_admin',$data);
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\Homestay');
	}

	function Profil(){
		//$data['products'] = $this->m_database->view_data()->result();
		//$this->load->view('v_admin',$data);
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\Profil');
	}

	function FormAcara(){
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\FormAcara');
	}

	function FormFoto(){
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\FormFoto');
	}

	/*function FormVideo(){
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\FormVideo');
	}*/

	function TambahAcara(){
		$this->load->helper(array('form', 'file', 'url'));
        $config['upload_path'] = "./uploads/";
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['max_size'] = '5058';
        $this->load->library('upload', $config);
           $this->upload->do_upload();
            $data = array('upload_data' => $this->upload->data());
            // var_dump($data);
            $acara = $this->input->post('NamaAcara');
			//$kategori = $this->input->post('kategori');
			$deskripsi = $this->input->post('deskripsi');
			$date = date("d-m-Y h:i:s");

			$dataFoto = array(
	           'judul' => $acara,
				'link' => $data['upload_data']['file_name'],
				'deskripsi' => $deskripsi,
				'tgl' => $date
	         );
			// var_dump($dataFoto);
			// die();
			$this->m_adminEvent->input_event($dataFoto); //akses model untuk menyimpan ke database
        	redirect("C_admin/index");  
        
		
		     
	}

	function TambahFoto(){
		$acara = $this->input->post('NamaFoto');
		$kategori = $this->input->post('kategori');
		$pic='sendiki.jpg';
		$date = date("Y-m-d H:i:s");
		$data = array(
			'link' =>$pic,
			'tgl' => $date,
           'kategori' => $kategori,
			'judul' => $acara
			
         );
		$this->m_adminfoto->input_foto($data); //akses model untuk menyimpan ke database
		redirect ("C_admin/Foto");
	}

/*	function TambahVideo(){
		redirect ("C_admin/Video");
	}*/


	function EditAcara(){
		$id=$this->uri->segment(3);
		$data['event'] = $this->m_adminEvent->getdata_event($id)->row_array();
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\FormEditAcara',$data);	
	}

	function ProsesEditAcara(){
		$id=$this->uri->segment(3);
		$acara = $this->input->post('NamaAcara');
		//$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		$pic='sendiki.jpg';
		$date = date("Y-m-d H:i:s");
		$data = array(
           'judul' => $acara,
			'link' =>$pic,
			'deskripsi' => $deskripsi,
			'tgl' => $date
         );
		$this->m_adminEvent->edit_event($data,$id); //akses model untuk menyimpan ke database
        redirect ("C_admin/index");
	}

	function EditFoto(){
		$id=$this->uri->segment(3);
		$data['gambar'] = $this->m_adminfoto->getdata_foto($id)->row_array();
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\FormEditFoto',$data);
	}

	function ProsesEditFoto(){
		$id=$this->uri->segment(3);
		$acara = $this->input->post('NamaFoto');
		$kategori = $this->input->post('kategori');
		//$deskripsi = $this->input->post('deskripsi');
		$pic='sendiki.jpg';
		$date = date("Y-m-d H:i:s");
		$data = array(
			'link' =>$pic,
			'tgl' => $date,
           'kategori' => $kategori,
			'judul' => $acara
         );
		$this->m_adminfoto->edit_foto($data,$id); //akses model untuk menyimpan ke database
		redirect ("C_admin/Foto");
	}

		

	/*function EditVideo(){
		redirect ("C_admin/Video");
	}*/

	function HapusAcara(){
		$id=$this->uri->segment(3);
		$this->m_adminEvent->delete_event($id); 
        redirect ("C_admin/index");
	}

	function HapusFoto(){
		$id=$this->uri->segment(3);
		$this->m_adminfoto->delete_foto($id); 
		redirect ("C_admin/Foto");
	}

	/*function HapusVideo(){
		redirect ("C_admin/Video");
	}*/

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
}