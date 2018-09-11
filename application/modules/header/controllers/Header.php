<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Header_Model');
	}

	public function index() {
		$data['header_data'] = $this->Header_Model->get_header_data();
		$this->load->view('add_header',$data);
	} 

// ========Header  start  here =========//
	public function add_header_info(){
		 if ($_POST['submit'] == 'Save'){
			$UserName=$this->session->userdata("UserID");
			$error='';			
				$fdataa=array();
				$config['upload_path']    = 'assets/images/headerImages/';
		        $config['allowed_types']  = 'jpg|jpeg|png|gif';
		        $config['max_size']       = 5000;
		        $images= '';

		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('image'))
		        {
		            $sdata['error_msg'] = $this->upload->display_errors();
		            $this->session->set_userdata($sdata);
		            $header_info = array(
		            	'HeaderTitle'	    => $this->input->post('header_title'),
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
		            	'HeaderStatus' 	  	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_header',$header_info);
		            $this->session->set_userdata('message','Header Info Submited Successfully!');
		            redirect(base_url().'header/header/index');
		           
		        }
		        else
		        {
		            $fdataa = $this->upload->data();
		            $images = $fdataa['file_name'];
		            $header_info = array(
		            	'HeaderTitle'	    => $this->input->post('header_title'),
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
		            	'HeaderStatus' 	  	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $images,
		            	'Created' 			=>date("d-m-Y H:i:s")
		            );
		            $this->db->insert('tbl_header',$header_info);
		            $this->session->set_userdata('message','Header Data Submited Successfully!');
		           	redirect(base_url().'header/header/index');
		        }
  
			} else {
			    $this->session->set_userdata('message','Header Data not Submited, Try again!');
				redirect(base_url().'header/header/index');
			}
		}


		 public function header_info_edit(){
			$this->Header_Model->header_info_update();
			$this->session->set_userdata('message','  Header Data updated successfully!');
			redirect(base_url().'header/header/index');
		}

}
?>
