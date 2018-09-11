<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Contact_Model');
	}

	public function index() {
		$data['contact_data'] = $this->Contact_Model->get_contact_data();
		$this->load->view('add_contact',$data);
	} 

// ========contact  start  here =========//
	public function add_contact_info(){
		  // echo "<pre>";($_POST);echo "</pre>";die();
		 if ($_POST['submit'] == 'Save'){
			$UserName=$this->session->userdata("UserID");
			$error='';			
				$fdataa=array();
				$config['upload_path']    = 'assets/images/contactImages/';
		        $config['allowed_types']  = 'jpg|jpeg|png|gif';
		        $config['max_size']       = 5000;
		        $images= '';

		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('image'))
		        {
		            $sdata['error_msg'] = $this->upload->display_errors();
		            $this->session->set_userdata($sdata);
		            $contact_info = array(
		            	'ContactTitle'	    => $this->input->post('contact_title'),
		            	'MobileNo'	  		=> $this->input->post('mobile_no'),
		            	'TelephoneNo'	  	=> $this->input->post('telephone_no'),
		            	'Email'	  			=> $this->input->post('email'),
		            	'Website'	  		=> $this->input->post('website'),
		            	'Address1'			=> $this->input->post('address1'),
		            	'Address2' 	  		=> trim($this->input->post('address2')),
		            	'AddLink1' 		    => trim($this->input->post('add_link1')),
		            	'AddLink2' 	  		=> trim($this->input->post('add_link2')),
		            	'FacebookLink' 	  	=> trim($this->input->post('facebook_link')),
		            	'TwitterLink' 	  	=> trim($this->input->post('twitter_link')),
		            	'YouTubeLink' 	  	=> trim($this->input->post('youtube_link')),
		            	'ExtraInfo' 	  	=> trim($this->input->post('extra_info')),
		            	'ContactStatus' 	  	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_contact',$contact_info);
		            $this->session->set_userdata('message','contact Info Submited Successfully!');
		            redirect(base_url().'contact/contact/index');
		           
		        }
		        else
		        {
		            $fdataa = $this->upload->data();
		            $images = $fdataa['file_name'];
		            $contact_info = array(
		            	'ContactTitle'	    => $this->input->post('contact_title'),
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
		            	'ContactStatus' 	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_contact',$contact_info);
		             // echo "<pre>";($contact_info);echo "</pre>";die();
		            $this->session->set_userdata('message','contact Data Submited Successfully!');
		           	redirect(base_url().'contact/contact/index');
		        }
  
			} else {
			    $this->session->set_userdata('message','contact Data not Submited, Try again!');
				redirect(base_url().'contact/contact/index');
			}
		}


		 public function contact_info_edit(){
			$this->Contact_Model->contact_info_update();
			$this->session->set_userdata('message','  contact Data updated successfully!');
			redirect(base_url().'contact/contact/index');
		}

}
?>
