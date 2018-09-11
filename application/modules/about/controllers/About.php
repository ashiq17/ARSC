<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('About_Model');
	}

	public function index() {
		$this->load->view('add_about');
	} 

// ========About Me English start  here =========//
	public function add_about_info(){
		 if ($_POST['submit'] == 'Save'){
			$UserName=$this->session->userdata("UserID");
			$error='';			
				$fdataa=array();
				$config['upload_path']    = 'assets/images/aboutImages/';
		        $config['allowed_types']  = 'jpg|jpeg|png|gif';
		        $config['max_size']       = 5000;
		        $images= '';

		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('image'))
		        {
		            $sdata['error_msg'] = $this->upload->display_errors();
		            $this->session->set_userdata($sdata);
		            $about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '0',
		            	'AboutBangla' 	  	=> '2',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_about',$about_info);
		            $this->session->set_userdata('message','About Me Submited Successfully!');
		            redirect(base_url().'about/about/index');
		           
		        }
		        else
		        {
		            $fdataa = $this->upload->data();
		            $images = $fdataa['file_name'];
		            $about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '0',
		            	'AboutBangla' 	  	=> '2',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_about',$about_info);
		            $this->session->set_userdata('message','About Me Submited Successfully!');
		           	redirect(base_url().'about/about/index');
		        }
  
		} else if ($_POST['submit'] == 'Published') {
   			 $UserName=$this->session->userdata("UserID");
	 	
				$error='';			
				$fdataa=array();
				$config['upload_path']    = 'assets/images/aboutImages/';
		        $config['allowed_types']  = 'jpg|jpeg|png|gif';
		        $config['max_size']       = 5000;
		        $images= '';
		       
		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('image'))
		        {
		            $sdata['error_msg'] = $this->upload->display_errors();
		            $this->session->set_userdata($sdata);
		             $about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '1',
		            	'AboutBangla' 	  	=> '2',
		            	'AboutEnglish' 	  	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_about',$about_info);
		            $this->session->set_userdata('message','about data Submited Successfully!');
		            redirect(base_url().'about/about/index');
		        }
		        else
		        {
		            $fdataa = $this->upload->data();
		            $images = $fdataa['file_name'];
		        }
				//image uploading end #

				 $about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '1',
		            	'AboutBangla' 	  	=> '2',
		            	'AboutEnglish' 	  	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
			$this->db->insert('tbl_about',$about_info);
			$this->session->set_userdata('message','About  Data Published Successfully!');
			redirect(base_url().'about/about/all_about');
			} else {
			    $this->session->set_userdata('message','About Data not Submited, Try again!');
				redirect(base_url().'about/about/all_about');
			}
	}

	
	public function all_about(){
		$data['all_about_find'] = $this->About_Model->all_about_finding();
		$data['all_about_published_find'] = $this->About_Model->all_about_published_finding();
		$data['all_about_unpublished_find'] = $this->About_Model->all_about_unpublished_finding();
		$this->load->view('all_about',$data);
	}

	public function edit_about($id){
		$data['edit_about_find'] = $this->About_Model->edit_about_finding($id);
		$this->load->view('edit_about',$data);
	}

	public function about_update(){
		$id=$this->input->post('AboutID');
		$this->About_Model->update_about($id);
		$this->session->set_userdata('message',' About Info updated Successfully!');
		redirect(base_url().'about/about/all_about');
	}

	public function about_delete(){
		$id = $this->input->post('deleteAboutId');
		$this->About_Model->delete_about($id);
		$this->session->set_userdata('message', ' About is deleted!');
		redirect(base_url().'about/about/all_about');
	}
	
// =====About English task End here =========//

// ===== About Bangla Task Start  here =========//

	public function index_bangla() {
		$this->load->view('add_about_bangla');
	} 

	public function add_about_info_bangla(){
		 if ($_POST['submit'] == 'Save'){
			$UserName=$this->session->userdata("UserID");
			$error='';			
				$fdataa=array();
				$config['upload_path']    = 'assets/images/aboutImages/';
		        $config['allowed_types']  = 'jpg|jpeg|png|gif';
		        $config['max_size']       = 5000;
		        $images= '';

		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('image'))
		        {
		            $sdata['error_msg'] = $this->upload->display_errors();
		            $this->session->set_userdata($sdata);
		            $about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '0',
		            	'AboutBangla' 	  	=> '1',
		            	'AboutEnglish' 	  	=> '2',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_about',$about_info);
		            $this->session->set_userdata('message','About Me Submited Successfully!');
		            redirect(base_url().'about/about/index');
		           
		        }
		        else
		        {
		            $fdataa = $this->upload->data();
		            $images = $fdataa['file_name'];
		            $about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '0',
		            	'AboutBangla' 	  	=> '1',
		            	'AboutEnglish' 	  	=> '2',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_about',$about_info);
		            $this->session->set_userdata('message','About Me Submited Successfully!');
		           	redirect(base_url().'about/about/index');
		        }
  
		} else if ($_POST['submit'] == 'Published') {
   			 $UserName=$this->session->userdata("UserID");
	 	
				$error='';			
				$fdataa=array();
				$config['upload_path']    = 'assets/images/aboutImages/';
		        $config['allowed_types']  = 'jpg|jpeg|png|gif';
		        $config['max_size']       = 5000;
		        $images= '';
		       
		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('image'))
		        {
		            $sdata['error_msg'] = $this->upload->display_errors();
		            $this->session->set_userdata($sdata);
		             $about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '1',
		            	'AboutBangla' 	  	=> '1',
		            	'AboutEnglish' 	  	=> '2',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_about',$about_info);
		            $this->session->set_userdata('message','about data Submited Successfully!');
		            redirect(base_url().'about/about/index');
		        }
		        else
		        {
		            $fdataa = $this->upload->data();
		            $images = $fdataa['file_name'];
		        }
				//image uploading end #

				 $about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '1',
		            	'AboutBangla' 	  	=> '1',
		            	'AboutEnglish' 	  	=> '2',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
					// 	echo "<pre>";
					// print_r($blog_info);
					// echo "</pre>";
					// die();
			$this->db->insert('tbl_about',$about_info);
			$this->session->set_userdata('message','About  Data Published Successfully!');
			redirect(base_url().'about/about/all_about_bangla');
			} else {
			    $this->session->set_userdata('message','About Data not Submited, Try again!');
				redirect(base_url().'about/about/all_about_bangla');
			}
	}

	public function all_about_bangla(){
		$data['all_about_find_bangla'] = $this->About_Model->all_about_finding_bangla();
		$data['all_about_published_find_bangla'] = $this->About_Model->all_about_published_finding_bangla();
		$data['all_about_unpublished_find_bangla'] = $this->About_Model->all_about_unpublished_finding_bangla();
		$this->load->view('all_about_bangla',$data);
	}

	public function edit_about_bangla($id){
		$data['edit_about_find'] = $this->About_Model->edit_about_finding_bangla($id);
		$this->load->view('edit_about_bangla',$data);
	}

	public function about_update_bangla(){
		$id=$this->input->post('AboutID');
		$this->About_Model->update_about_bangla($id);
		$this->session->set_userdata('message',' About Info updated Successfully!');
		redirect(base_url().'about/about/all_about_bangla');
	}

	public function about_delete_bangla(){
		$id = $this->input->post('deleteAboutId');
		$this->About_Model->delete_about($id);
		$this->session->set_userdata('message', ' About is deleted!');
		redirect(base_url().'about/about/all_about_bangla');
	}
	// ===== About Bangla Task End here =========//
	
}
