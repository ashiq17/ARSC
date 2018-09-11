<?php
set_time_limit(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Slider extends CTL_Controller {

    public function __construct(){ 
		parent::__construct();
		$this->load->model('Slider_Model');
	}
	function add_slider(){
		// $data['header_data'] = $this->Web_model->get_header_data();
		// $this->load->view('add_slider',$data);
		$this->load->view('add_slider');
	} 
	function list_slider(){
		$data['get_slider_data'] = $this->Slider_Model->find_slider_info();
		$this->load->view('slider_list',$data);
	} 
	function slider_add(){
		if (isset($_POST['submit']) == 'Save'){
			$this->Slider_Model->slider_add();
			$this->session->set_userdata('message','Slider added successfully!');
			redirect(base_url().'slider/slider/list_slider');
		}else{
			$this->session->set_userdata('message','Slider not added, Try again!');
			redirect(base_url().'slider/slider/list_slider');
		}
	}

	function slider_edit(){
		$this->Slider_Model->slider_edit();
		$this->session->set_userdata('message','Slider Updated successfully!');
		redirect(base_url().'slider/slider/list_slider');
	}

	function slider_info_search(){
		$json = array();
		$slider_id= ($this->input->get('slider_id'))?$this->input->get('slider_id'):"";
		$query = "SELECT * FROM tbl_sliders WHERE 1= 1  AND slider_id = $slider_id";
	   	$query_result = $this->db->query($query)->result_array();

	   	$slider_id = $query_result[0]['slider_id'];
	   	$slider_name = $query_result[0]['slider_name'];
	   	$slider_width = $query_result[0]['slider_width'];
	   	$slider_height = $query_result[0]['slider_height'];
	   	$slider_position = $query_result[0]['slider_position'];
	   	$slider_status = $query_result[0]['slider_status'];

    	$result = array('slider_id'=>$slider_id,'slider_name'=>$slider_name,'slider_width'=>$slider_width,'slider_height'=>$slider_height ,'slider_position'=>$slider_position ,'slider_status'=>$slider_status);
		array_push($json,$result);
	    echo json_encode($json, true);
	}

	function new_slider_content(){
		// $data['header_data'] = $this->Web_model->get_header_data();
		// $this->load->view('add_slider_image',$data);
		$this->load->view('add_slider_image');
	} 
	
	function slider_content_add(){
		if (isset($_POST['submit']) == 'Save'){
			$slider_id = $this->input->post('slider_id');
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
	            redirect(base_url().'slider/slider/slider_image_list');
	        }
	        else
	        {
	            $fdata = $this->upload->data();
	            $slider_image = $fdata['file_name'];
	        }
			# image uploading end #
			$this->Slider_Model->slider_content_add($slider_image);
			$this->session->set_userdata('message','Slider image added successfully!');
			redirect(base_url().'slider/slider/slider_image_list/'.$slider_id);
		}else{
			$this->session->set_userdata('message','Slider image not added, Try again!');
			redirect(base_url().'slider/slider/slider_image_list/'.$slider_id);
		}
	}

	function slider_image_edit(){
		// print_r($_POST);
		// die();
		$slider_content_id = $this->input->post('slider_content_id');
		$slider_id = $this->input->post('slider_id');
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
		$this->Slider_Model->slider_image_edit($image_name);
		$this->session->set_userdata('message','Slider Content Updated successfully!');
		redirect(base_url().'slider/slider/slider_image_list/'.$slider_id);
	}
	function slider_image_list($slider_id=''){
		$data['get_slider_image_list'] = $this->Slider_Model->slider_image_list($slider_id);
		$this->load->view('slider_content_list',$data);
	}


	function slider_content_search(){
		$json = array();
		$slider_content_id= ($this->input->get('slider_content_id'))?$this->input->get('slider_content_id'):"";
		$query = "SELECT * FROM  tbl_slider_contents WHERE 1= 1  AND slider_content_id = $slider_content_id";
	   	$query_result = $this->db->query($query)->result_array();

	   	$slider_content_id = $query_result[0]['slider_content_id'];
	   	$sc_image = $query_result[0]['sc_image'];
	   	$sc_caption = $query_result[0]['sc_caption'];
	   	$sc_description = $query_result[0]['sc_description'];
	   	$sc_order = $query_result[0]['sc_order'];
	   	$sc_status = $query_result[0]['sc_status'];

    	$result = array('slider_content_id'=>$slider_content_id,'sc_image'=>$sc_image,'sc_caption'=>$sc_caption,'sc_description'=>$sc_description ,'sc_order'=>$sc_order ,'sc_status'=>$sc_status);
		array_push($json,$result);
	    echo json_encode($json, true);
	}


	function delete_slider(){
		$data_id = $this->input->post('data_id');

		$this->db->where('slider_id', $data_id);
		$this->db->delete('tbl_sliders');

		$this->db->where('slider_id', $data_id);
		$this->db->delete('tbl_slider_contents');

		$this->session->set_userdata('message','Slider Deleted successfully!');
		redirect(base_url().'slider/slider/list_slider');
	}

	function delete_slider_image(){
		$slider_id = $this->input->post('slider_id');
		$data_id = $this->input->post('data_id');

		$this->db->where('slider_content_id', $data_id);
		$this->db->delete('tbl_slider_contents');

		$this->session->set_userdata('message','Slider image deleted successfully!');
		redirect(base_url().'slider/slider/slider_image_list/'.$slider_id);
	}













}
?>
