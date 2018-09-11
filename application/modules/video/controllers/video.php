<?php
set_time_limit(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Video extends CTL_Controller {

    public function __construct(){ 
		parent::__construct();
		$this->load->model('Video_Model');
	}
	
	public function add_video(){
		$this->load->view('add_video');
	}
	public function video_info_add(){
		if (isset($_POST['submit']) == 'Submit'){
			
			$error='';			

				$video_info = array(
					'VideoTitle'	  			=> $this->input->post('VideoTitle'),
					'VideoSlug' 	  			=> $this->input->post('VideoSlug'),
					'VideoUrl' 	  				=> trim($this->input->post('VideoUrl')),
					'VideoGallarySilderStatus'	=> $this->input->post('VideoGallarySilderStatus'),
					'VideoGallery1Status' 	  	=> $this->input->post('VideoGallery1Status'),
					'VideoGallery2Status' 	  	=> $this->input->post('VideoGallery2Status'),
					'VideoStatus' 	  			=> $this->input->post('VideoStatus'),
					'created' 	       			=> date("d-m-Y H:i:s"),
					'modified' 	        		=> date("d-m-Y H:i:s"),
				);
		
				$this->Video_Model->video_info_add($video_info);
				$this->session->set_userdata('message','Video Info Submitted Successfully!');
				redirect(base_url().'video/video/add_video');
			}
		}


	public function video_list() {
		$data['video_list'] = $this->Video_Model->find_video_list();
		$this->load->view('video_list', $data);
	}

	public function video_delete(){
		$VideoID = $this->input->post('deleteVideoID');
		$this->Video_Model->did_delete_video($VideoID);
		$this->session->set_userdata('message','Video is deleted!');
		redirect(base_url().'video/video/video_list');
	}

	public function edit_video($id=null) {
		$data['video_data'] = $this->Video_Model->get_video($id);
		$this->load->view('edit_video', $data);
	}

	public function video_update(){
		$id=$this->input->post('VideoID');
		// echo "<pre>";
		// print_r($id);
		// echo "</pre>";
		// die();
		$this->Video_Model->update_video($id);
		$this->session->set_userdata('message','Video updated Successfully!');
		redirect(base_url().'video/video/video_list');
	}
	
}
?>
