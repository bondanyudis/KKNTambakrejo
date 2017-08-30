<?php
/**
* 
*/
class admin extends CI_Controller{
	
	/*function __construct(){
		parent::__construct();
		$this->load->model('M_database');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}*/

	function index(){
		//$data['products'] = $this->M_database->view_data()->result();
		$this->load->view('v_admin',$data);
		$this->load->view('V_admin');
	}
/*
	function create(){
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