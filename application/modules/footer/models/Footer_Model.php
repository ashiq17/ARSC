<?php
class Footer_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // $this->load->library('Facebook');
    }
//========mahbub All Auther Blog starting here====///

    	 public function get_footer_data(){
    		$query = "SELECT * FROM tbl_footer 
    		WHERE 1=1
    		AND FooterID=1";
            $query_result = $this->db->query($query)->result_array();
              // echo "<pre>";print_r($query_result);echo "</pre>"; die();
            return $query_result;
    	}
  
		public function footer_info_update(){

		 if (isset($_POST['submit']) == 'Update'){


			if($_FILES['image']['name']!=""){
				    $config['upload_path'] = 'assets/images/footerImages/';
			        // $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
			        $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe';
			        $this->load->library('upload', $config);
			        if ( ! $this->upload->do_upload('image'))
			        {
			            $error = array('error' => $this->upload->display_errors());
			        }
			        else
			        {
			            $upload_data=$this->upload->data();
			            $image_name=$upload_data['file_name'];
			        }
			    }
			    else{
			        $image_name=$this->input->post('old_image');
			    }

			    $footer_id = $this->input->post('footer_id');
				$UserName=$this->session->userdata("UserID");
		
			  $footer_info = array(
		            	'MobileNo'	  		=> $this->input->post('mobile_no'),
		            	'TelephoneNo'	  	=> $this->input->post('telephone_no'),
		            	'Email'	  			=> $this->input->post('email'),
		            	'Website'	  		=> $this->input->post('website'),
		            	'Address1'			=> $this->input->post('address1'),
		            	'Address2' 	  		=> trim($this->input->post('address2')),
		            	'FacebookLink' 	  	=> trim($this->input->post('facebook_link')),
		            	'TwitterLink' 	  	=> trim($this->input->post('twitter_link')),
		            	'YouTubeLink' 	  	=> trim($this->input->post('youtube_link')),
		            	'AddLink1' 			=> trim($this->input->post('add_link1')),
		            	'AddLink2' 	  		=> trim($this->input->post('add_link2')),
		            	'ExtraInfo' 	  	=> trim($this->input->post('extra_info')),
		            	'FooterStatus' 	  	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $image_name,
		            	'Modified' 			=>date("d-m-Y H:i:s")
		            );
			  // echo "<pre>";($footer_info);echo "</pre>";die();
			$this->db->where('FooterID', $footer_id);       
	        $this->db->update('tbl_footer', $footer_info);
		}
	}


	
}
