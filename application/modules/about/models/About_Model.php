<?php
class About_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // $this->load->library('Facebook');
    }
//========mahbub All Auther Blog starting here====///
 	public function all_about_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_about 
		          WHERE 1=1 
		          AND AboutEnglish=1 
		          ORDER BY  AboutID DESC";
        $query_result = $this->db->query($Query)->result_array();
        // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
	}
	public function all_about_published_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_about 
		          WHERE 1=1
		           AND AboutEnglish=1 
		          AND AboutStatus=1 
		          ORDER BY AboutID DESC ";
        $query_result = $this->db->query($Query)->result_array();
    	 // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
	}
	public function all_about_unpublished_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_about 
		          WHERE 1=1 
		          AND AboutEnglish=1 
		          AND AboutStatus=0
		          ORDER BY AboutID DESC ";
        $query_result = $this->db->query($Query)->result_array();
   	 // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
	}

	public function edit_about_finding($id){
		$Query = "SELECT *
		          FROM tbl_about 
		          WHERE 1=1 
		          AND tbl_about.AboutID=$id";
        $query_result = $this->db->query($Query)->result_array();
    // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
	}

	public function update_about($id){
		if (isset($_POST['submit']) == 'Update'){

			if($_FILES['image']['name']!=""){
				    $config['upload_path'] = 'assets/images/aboutImages/';
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

			$about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '0',
		            	'AboutEnglish' 	  	=> '1',
		            	'AboutBangla' 	  	=> '2',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $image_name,
		            	'Modified' 	        => date("d-m-Y H:i:s")
		            );
			// echo "<pre>"; print_r($id);print_r($blog_info);echo "</pre>";die();
 			
			$this->db->where('AboutID',$id);
			$this->db->update('tbl_about',$about_info);

		} else if (isset($_POST['published']) == 'Published'){

			if($_FILES['image']['name']!=""){
				    $config['upload_path'] = 'assets/images/aboutImages/';
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
			$about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '1',
		            	'AboutEnglish' 	  	=> '1',
		            	'AboutBangla' 	  	=> '2',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $image_name,
		            	'Modified' 	        => date("d-m-Y H:i:s")
		            );
			$this->db->where('AboutID',$id);
			$this->db->update('tbl_about',$about_info);

		}
	}

	public function delete_about($id){
		//  echo "<pre>";print_r($id);echo "</pre>";die();
		$this->db->where('AboutID', $id);
		$this->db->delete('tbl_about');
	}


		//==== About Bangla start here=====//


	public function all_about_finding_bangla(){
	 	$Query = "SELECT * 
		          FROM tbl_about 
		          WHERE 1=1 
		          AND AboutBangla=1
		          ORDER BY  AboutID DESC";
        $query_result = $this->db->query($Query)->result_array();
        // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
	}
	public function all_about_published_finding_bangla(){
	 	$Query = "SELECT * 
		          FROM tbl_about 
		          WHERE 1=1
		           AND AboutBangla=1
		          AND AboutStatus=1 
		          ORDER BY AboutID DESC ";
        $query_result = $this->db->query($Query)->result_array();
    	 // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
	}
	public function all_about_unpublished_finding_bangla(){
	 	$Query = "SELECT * 
		          FROM tbl_about 
		          WHERE 1=1 
		           AND AboutBangla=1
		          AND AboutStatus=0
		          ORDER BY AboutID DESC ";
        $query_result = $this->db->query($Query)->result_array();
   	 // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
	}

	public function edit_about_finding_bangla($id){
		$Query = "SELECT *
		          FROM tbl_about 
		          WHERE 1=1 
		          AND AboutBangla=1
		          AND tbl_about.AboutID=$id";
        $query_result = $this->db->query($Query)->result_array();
    // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
	}

	public function update_about_bangla($id){
		if (isset($_POST['submit']) == 'Update'){

			if($_FILES['image']['name']!=""){
				    $config['upload_path'] = 'assets/images/aboutImages/';
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
		            	'Image' 	  		=> $image_name,
		            	'Modified' 	        => date("d-m-Y H:i:s")
		            );
			// echo "<pre>"; print_r($id);print_r($blog_info);echo "</pre>";die();
 			
			$this->db->where('AboutID',$id);
			$this->db->update('tbl_about',$about_info);

		} else if (isset($_POST['published']) == 'Published'){

			if($_FILES['image']['name']!=""){
				    $config['upload_path'] = 'assets/images/aboutImages/';
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
			$about_info = array(
		            	'AboutName'	  		=> $this->input->post('aboutName'),
		            	'AboutDesignation'	=> $this->input->post('aboutDesignation'),
		            	'AboutBody' 	  	=> trim($this->input->post('aboutBody')),
		            	'AboutMission' 		=> trim($this->input->post('aboutMission')),
		            	'AboutVission' 	  	=> trim($this->input->post('aboutVission')),
		            	'AboutStatus' 	  	=> '1',
		            	'AboutEnglish' 	  	=> '2',
		            	'AboutBangla' 	  	=> '1',
		            	'UserName' 	  		=> $UserName,
		            	'Image' 	  		=> $image_name,
		            	'Modified' 	        => date("d-m-Y H:i:s")
		            );
			$this->db->where('AboutID',$id);
			$this->db->update('tbl_about',$about_info);

		}
	}

	public function delete_about_bangla($id){
		//  echo "<pre>";print_r($id);echo "</pre>";die();
		$this->db->where('AboutID', $id);
		$this->db->delete('tbl_about');
	}
	
///======mahbub All  About End here==========///

	/*mahbub ending here*/

	
}