<?php
class Gallery_Model extends CI_Model{

	function __construct() {
		parent::__construct();
	}
	
	function find_gallery_info(){
		$query = "SELECT * FROM tbl_photo_galleries WHERE 1=1";
        $query_result = $this->db->query($query)->result_array();
        return $query_result;
	}

	function gallery_add(){
		$data = array(
			'gallery_title'	=> $this->input->post('gallery_title'),
			// 'slider_position' => $this->input->post('slider_position'),
			'gallery_status' => $this->input->post('gallery_status')
			// 'ph_slider_images' => $this->input->post('ph_slider_images'),
			// 'ph_gallery1_image' => $this->input->post('ph_gallery1_image'),
			// 'ph_gallery2_image' => $this->input->post('ph_gallery2_image')
		);
		$this->db->insert('tbl_photo_galleries', $data);
	}

	function slider_edit(){
		$slider_id = $this->input->post('slider_id');
		$header_info = array(
			'slider_name'	  => $this->input->post('slider_name'),
			'slider_width' 	  => $this->input->post('slider_width'),
			'slider_height' 	  => $this->input->post('slider_height'),
			'slider_position' 	  => $this->input->post('slider_position'),
			'slider_status' 	  => $this->input->post('slider_status'),
			'modified' 	  => date("d-m-Y H:i:s"),
		);
		$this->db->where('slider_id', $slider_id);       
        $this->db->update('tbl_sliders', $header_info);
	}


	function gallery_content_add($image){
		
		$data = array(
			'photo_gallery_id'	=> $this->input->post('gallery_id'),
			// 'slider_position'	=> $this->input->post('slider_position'),
			'ph_image'	=> $image,
			'ph_caption' 	  => $this->input->post('sc_caption'),
			// 'ph_description	' => $this->input->post('sc_description'),
			'photo_order' => $this->input->post('sc_order'),
			'ph_slider_images' => $this->input->post('ph_slider_images'),
			'ph_gallery1_image' => $this->input->post('ph_gallery1_image'),
			'ph_gallery2_image' => $this->input->post('ph_gallery2_image'),
			'ph_status' => $this->input->post('sc_status')
		);
		$this->db->insert('tbl_photos', $data);
	}

	function gallery_image_list($gallery_id){
		$query = "SELECT * FROM tbl_photos
				LEFT JOIN tbl_photo_galleries ON tbl_photo_galleries.gallery_id = tbl_photos.photo_gallery_id
				WHERE 1=1
				AND tbl_photos.photo_gallery_id = $gallery_id;
				";
        $query_result = $this->db->query($query)->result_array();
        return $query_result;
	}

	function gallery_image_edit($image_name){
		$photos_id = $this->input->post('photos_id');
		$data = array(
			// 'slider_id'	=> $this->input->post('slider_id'),
			'ph_image'	=> $image_name,
			'ph_caption' 	  => $this->input->post('ph_caption'),
			'photo_order' => $this->input->post('photo_order'),
			'ph_slider_images' => $this->input->post('ph_slider_images'),
			'ph_gallery1_image' => $this->input->post('ph_gallery1_image'),
			'ph_gallery2_image' => $this->input->post('ph_gallery2_image'),
			'ph_status' => $this->input->post('ph_status')
		);
		$this->db->where('photos_id', $photos_id);       
        $this->db->update('tbl_photos', $data);
	}
	
	















}
?>
