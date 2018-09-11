<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Footer_Model');
	}

	public function index() {
		$data['footer_data'] = $this->Footer_Model->get_footer_data();
		$this->load->view('add_footer',$data);
	} 

// ========About Me English start  here =========//
	public function add_footer_info(){
		 if ($_POST['submit'] == 'Save'){
			$UserName=$this->session->userdata("UserID");
			$error='';			
				$fdataa=array();
				$config['upload_path']    = 'assets/images/footerImages/';
		        $config['allowed_types']  = 'jpg|jpeg|png|gif';
		        $config['max_size']       = 5000;
		        $images= '';

		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('image'))
		        {
		            $sdata['error_msg'] = $this->upload->display_errors();
		            $this->session->set_userdata($sdata);
		            $footer_info = array(
		            	'MobileNo'	  		=> $this->input->post('mobile_no'),
		            	'TelephoneNo'	  	=> $this->input->post('telephone_no'),
		            	'Email'	  			=> $this->input->post('email'),
		            	'Website'	  		=> $this->input->post('website'),
		            	'Address1'			=> $this->input->post('address1'),
		            	'Address2' 	  		=> trim($this->input->post('address2')),
		            	'AddLink1' 		=> trim($this->input->post('add_link1')),
		            	'AddLink2' 	  	=> trim($this->input->post('add_link2')),
		            	'FacebookLink' 	  	=> trim($this->input->post('facebook_link')),
		            	'TwitterLink' 	  	=> trim($this->input->post('twitter_link')),
		            	'YouTubeLink' 	  	=> trim($this->input->post('youtube_link')),
		            	'ExtraInfo' 	  	=> trim($this->input->post('extra_info')),
		            	'FooterStatus' 	  	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_footer',$footer_info);
		            $this->session->set_userdata('message','About Me Submited Successfully!');
		            redirect(base_url().'footer/footer/index');
		           
		        }
		        else
		        {
		            $fdataa = $this->upload->data();
		            $images = $fdataa['file_name'];
		            $footer_info = array(
		            	'MobileNo'	  		=> $this->input->post('mobile_no'),
		            	'TelephoneNo'	  	=> $this->input->post('telephone_no'),
		            	'Email'	  			=> $this->input->post('email'),
		            	'Website'	  		=> $this->input->post('website'),
		            	'Address1'			=> $this->input->post('address1'),
		            	'Address2' 	  		=> trim($this->input->post('address2')),
		            	'AddLink1' 			=> trim($this->input->post('add_link1')),
		            	'AddLink2' 	  		=> trim($this->input->post('add_link2')),
		            	'FacebookLink' 	  	=> trim($this->input->post('facebook_link')),
		            	'TwitterLink' 	  	=> trim($this->input->post('twitter_link')),
		            	'YouTubeLink' 	  	=> trim($this->input->post('youtube_link')),
		            	'ExtraInfo' 	  	=> trim($this->input->post('extra_info')),
		            	'FooterStatus' 	  	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_footer',$footer_info);
		            $this->session->set_userdata('message','footer Info Submited Successfully!');
		           	redirect(base_url().'footer/footer/index');
		        }
  
			} else {
			    $this->session->set_userdata('message','Footer Data not Submited, Try again!');
				redirect(base_url().'footer/footer/index');
			}
		}


		 public function footer_info_edit(){
			// echo "<pre>";
			// print_r($_POST);
			// echo "</pre>";
			// die();

		// if($_FILES['image']['name']!=""){
		//     $config['upload_path'] = 'assets/images/footerImages/';
	 //        $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe';
	 //        $this->load->library('upload', $config);
	 //        if ( ! $this->upload->do_upload('image'))
	 //        {
	 //            $error = array('error' => $this->upload->display_errors());
	 //        }
	 //        else
	 //        {
	 //            $upload_data=$this->upload->data();
	 //            $image_name=$upload_data['file_name'];
	 //        }
	 //    }
	 //    else{
	 //        $image_name=$this->input->post('old_image');
	 //    }
		$this->Footer_Model->footer_info_update();
		$this->session->set_userdata('message','Footer Info updated successfully!');
		redirect(base_url().'footer/footer/index');
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

}
?>
