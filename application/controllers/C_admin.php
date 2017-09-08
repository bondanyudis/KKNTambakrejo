<?php
/**
* 
*/
class C_admin extends CI_Controller{
	
		public function __construct()
	{
		parent::__construct();
		$this->load->model("m_adminfoto");
		$this->load->model("m_adminEvent");
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

	function Video(){
		//$data['products'] = $this->m_database->view_data()->result();
		//$this->load->view('v_admin',$data);
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\Video');
	}

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

	function FormVideo(){
		$this->load->view('partials\HeadAdmin');
		$this->load->view('Admin\FormVideo');
	}

	function TambahAcara(){
		
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
		$this->m_adminEvent->input_event($data); //akses model untuk menyimpan ke database
        redirect ("C_admin/index");
		// $this->load->library('upload');
  //       $config['upload_path'] = base_url().'uploads'; //path folder
  //       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
  //       $config['max_size'] = '2048'; //maksimum besar file 2M
  //       $config['max_width']  = '1288'; //lebar maksimum 1288 px
  //       $config['max_height']  = '768'; //tinggi maksimu 768 px

  //       $this->upload->initialize($config);

        
    //     if($_FILES['picture']['name']){
    //         if ($this->upload->do_upload('picture')){
    //             $pic = $this->upload->data();
    //             $data = array(
    //             'judul' => $acara,
				// 'picture' =>$pic['file_name'],
				// 'kategori' => $kategori,
				// 'tanggal' => $date,
				// 'deskripsi' => $deskripsi
    //             );
    //             // $this->m_database->input_data($data,'products'); //akses model untuk menyimpan ke database
    //             redirect ("C_admin/index");
    //         }else{
    //         	echo $config['upload_path'];
    //             // redirect(base_url().'index.php/C_admin/index'); //jika gagal maka akan ditampilkan form upload
    //         }
    //     }        
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

	function TambahVideo(){
		redirect ("C_admin/Video");
	}


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

		

	function EditVideo(){
		redirect ("C_admin/Video");
	}

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

	function HapusVideo(){
		redirect ("C_admin/Video");
	}

	/*function create(){
		$this->load->view('v_createVaksin');
	}

	function create_process(){
		$productname = $this->input->post('productname');
		$price = $this->input->post('price');
		$stock = $this->input->post('stock') ; 
		$description = $this->input->post('description') ;

		//untuk upload gambar
		$this->load->library('upload');
        $config['upload_path'] = './assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
 
        $this->upload->initialize($config);

 		if($_FILES['picture']['name']){
            if ($this->upload->do_upload('picture')){
                $pic = $this->upload->data();
                $data = array(
                'product_name' => $productname,
				'picture' =>$pic['file_name'],
				'price' => $price,
				'stock' => $stock,
				'description' => $description
                );
 
                $this->m_database->input_data($data,'products'); //akses model untuk menyimpan ke database
                redirect(base_url().'admin');
            }else{
                redirect(base_url().'admin/create'); //jika gagal maka akan ditampilkan form upload
            }
        }

	}

	function delete_vaksin($id){
		$delete = array('id' => $id);
		$this->m_database->delete_data($delete,'products');
		redirect(base_url().'admin');
	}

	function edit_vaksin($id){
		$where = array('id' => $id);
		$data['products'] = $this->m_database->edit_data($where,'products')->result();
		$this->load->view('v_editVaksin',$data);
	}

	function update_vaksin(){
		$id = $this->input->post('id');
		$productname = $this->input->post('productname');
		$price = $this->input->post('price');
		$stock = $this->input->post('stock') ; 
		$description = $this->input->post('description') ;

		//untuk upload gambar
		$this->load->library('upload');
        $config['upload_path'] = './assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
 
        $this->upload->initialize($config);

 		if($_FILES['picture']['name']){
            if ($this->upload->do_upload('picture')){
                $pic = $this->upload->data();
                	$where = array(
					'id' => $id 
					);
                $data = array(
                	'product_name' => $productname,
					'picture' =>$pic['file_name'],
					'price' => $price,
					'stock' => $stock,
					'description' => $description
                );
 
                $this->m_database->update_data($where, $data,'products'); 
                redirect(base_url().'admin'); 
            }else{
                redirect(base_url().'admin/create'); 
            }

		$this->m_database->update_data($where, $edit, 'products');
		redirect(base_url().'admin');
		}

	}*/
}