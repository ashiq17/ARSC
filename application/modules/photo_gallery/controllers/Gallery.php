<?php
set_time_limit(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Gallery extends CTL_Controller {

    public function __construct(){ 
		parent::__construct();
		$this->load->model('Gallery_Model');
	}
	function gallery_list(){
		$data['get_gallery_data'] = $this->Gallery_Model->find_gallery_info();
		$this->load->view('gallery_list',$data);
		// $this->load->view('gallery_list');
	} 
	function add_gallery(){
		// $data['header_data'] = $this->Web_model->get_header_data();
		// $this->load->view('add_gallery',$data);
		$this->load->view('add_gallery');
	} 
	function gallery_add(){
		if (isset($_POST['submit']) == 'Save'){
			$this->Gallery_Model->gallery_add();
			$this->session->set_userdata('message','Gallery/Album successfully!');
			redirect(base_url().'photo_gallery/gallery/gallery_list');
		}else{
			$this->session->set_userdata('message','Gallery/Album not added, Try again!');
			redirect(base_url().'photo_gallery/gallery/gallery_list');
		}
	}

	// function slider_edit(){
	// 	$this->Gallery_Model->slider_edit();
	// 	$this->session->set_userdata('message','Slider Updated successfully!');
	// 	redirect(base_url().'slider/slider/list_slider');
	// }

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

	function new_gallery_content(){
		// $data['header_data'] = $this->Web_model->get_header_data();
		// $this->load->view('add_slider_image',$data);
		$this->load->view('add_gallery_image');
	} 
	
	function gallery_content_add(){
		if (isset($_POST['submit']) == 'Save'){
			$gallery_id = $this->input->post('gallery_id');
			# image uploading start #
			$fdata=array();
			$config['upload_path']    = './images/photo-gallery/';
	        $config['allowed_types']  = 'gif|jpg|png|jpeg';
	        $config['max_size']       = 5000;
	        // $config['max_width']   = 1024;
	        // $config['max_height']  = 768;
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('image'))
	        {
	            $sdata['error_msg'] = $this->upload->display_errors();
	            $this->session->set_userdata($sdata);
	            redirect(base_url().'photo_gallery/gallery/gallery_image_list');
	        }
	        else
	        {
	            $fdata = $this->upload->data();
	            $slider_image = $fdata['file_name'];
	        }
			# image uploading end #
			$this->Gallery_Model->gallery_content_add($slider_image);
			$this->session->set_userdata('message','Gallery Photo added successfully!');
			redirect(base_url().'photo_gallery/gallery/gallery_image_list/'.$gallery_id);
		}else{
			$this->session->set_userdata('message','Slider image not added, Try again!');
			redirect(base_url().'photo_gallery/gallery/gallery_image_list/'.$gallery_id);
		}
	}

	function gallery_image_edit(){
		$photos_id = $this->input->post('photos_id');
		$gallery_id = $this->input->post('gallery_id');
		if($_FILES['image']['name']!=""){
		    $config['upload_path'] = './images/photo-gallery/';
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
		$this->Gallery_Model->gallery_image_edit($image_name);
		$this->session->set_userdata('message','Gallery Photo Updated successfully!');
		redirect(base_url().'photo_gallery/gallery/gallery_image_list/'.$gallery_id);
	}
	function gallery_image_list($gallery_id=''){
		$data['get_gallery_image_list'] = $this->Gallery_Model->gallery_image_list($gallery_id);
		$this->load->view('gallery_content_list',$data);
	}


	function gallery_content_search(){
		$json = array();
		$photos_id= ($this->input->get('photos_id'))?$this->input->get('photos_id'):"";
		$query = "SELECT * FROM tbl_photos WHERE 1= 1  AND photos_id = $photos_id";
	   	$query_result = $this->db->query($query)->result_array();

	   	$photos_id = $query_result[0]['photos_id'];
	   	$ph_image = $query_result[0]['ph_image'];
	   	$ph_caption = $query_result[0]['ph_caption'];
	   	$photo_order = $query_result[0]['photo_order'];
	   	$ph_status = $query_result[0]['ph_status'];
	   	$ph_slider_images = $query_result[0]['ph_slider_images'];
	   	$ph_gallery1_image = $query_result[0]['ph_gallery1_image'];
	   	$ph_gallery2_image = $query_result[0]['ph_gallery2_image'];

    	$result = array('photos_id'=>$photos_id,'ph_image'=>$ph_image,'ph_caption'=>$ph_caption,'photo_order'=>$photo_order ,'ph_status'=>$ph_status,'ph_slider_images'=>$ph_slider_images, 'ph_gallery1_image'=>$ph_gallery1_image,'ph_gallery2_image'=>$ph_gallery2_image);
		array_push($json,$result);
	    echo json_encode($json, true);
	}


	function delete_slider(){
		$data_id = $this->input->post('data_id');

		$this->db->where('gallery_id', $data_id);
		$this->db->delete('tbl_photo_galleries');

		$this->db->where('photo_gallery_id', $data_id);
		$this->db->delete('tbl_photos');

		$this->session->set_userdata('message','Gallery Deleted successfully!');
		redirect(base_url().'photo_gallery/gallery/gallery_list');
	}

	function delete_gallery_image(){
		$gallery_id = $this->input->post('gallery_id');
		$data_id = $this->input->post('data_id');

		$this->db->where('photos_id', $data_id);
		$this->db->delete('tbl_photos');

		$this->session->set_userdata('message','Gallery photo deleted successfully!');
		redirect(base_url().'photo_gallery/gallery/gallery_image_list/'.$gallery_id);
	}













}
?>
