<?php
set_time_limit(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Web extends CTL_Controller {

    public function __construct(){ 
		parent::__construct();
		$this->load->model('Web_Model');
	}
	public function header_inputs(){
		$data['header_data'] = $this->Web_Model->get_header_data();
		$this->load->view('header',$data);
	} 
	public function header_info_add(){
		$data['header_data'] = $this->Web_Model->get_header_data();
		if (empty($data['header_data'])) {
			if (isset($_POST['submit']) == 'Save'){
				# image uploading start #
				$fdata=array();
				$config['upload_path']    = './images/web_images/';
		        $config['allowed_types']  = 'gif|jpg|png|jpeg';
		        $config['max_size']       = 5000;
		        // $config['max_width']   = 1024;
		        // $config['max_height']  = 768;
		        $this->load->library('upload', $config);
		        if (!$this->upload->do_upload('image'))
		        {
		            $sdata['error_msg'] = $this->upload->display_errors();
		            $this->session->set_userdata($sdata);
		            redirect(base_url().'webbackend/web/header_inputs');
		        }
		        else
		        {
		            $fdata = $this->upload->data();
		            $header_image = $fdata['file_name'];
		        }
				# image uploading end #
				$this->Web_Model->header_info_add($header_image);
				$this->session->set_userdata('message','Header Info added successfully!');
				redirect(base_url().'webbackend/web/header_inputs');
			}else{
				$this->session->set_userdata('message','Header Info not added, Try again!');
				redirect(base_url().'webbackend/web/header_inputs');
			}
		}else{
			$this->session->set_userdata('message','<span style="color:#D8000C;">Header Info already added, Please update!</span>');
			redirect(base_url().'webbackend/web/header_inputs');
		}
	}

	function header_info_edit(){
		if($_FILES['image']['name']!=""){
		    $config['upload_path'] = './images/web_images/';
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
		$this->Web_Model->header_info_edit($image_name);
		$this->session->set_userdata('message','Header Info updated successfully!');
		redirect(base_url().'webbackend/web/header_inputs');
	}

	


















}
?>
