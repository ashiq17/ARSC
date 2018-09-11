<?php
class Slider_Model extends CI_Model{

	function __construct() {
		parent::__construct();
	}
	
	function find_slider_info(){
		$query = "SELECT * FROM tbl_sliders WHERE 1=1";
        $query_result = $this->db->query($query)->result_array();
        return $query_result;
	}

	function slider_add(){
		$sliders = array(
			'slider_name'	=> $this->input->post('slider_name'),
			'slider_width' 	  => $this->input->post('slider_width'),
			'slider_height	' => $this->input->post('slider_height'),
			'slider_position' => $this->input->post('slider_position'),
			'slider_status' => $this->input->post('slider_status'),
			'created' 	=> date("d-m-Y H:i:s"),
			'modified' 	=> date("d-m-Y H:i:s"),
		);
		$this->db->insert('tbl_sliders', $sliders);
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


	function slider_content_add($slider_image){
		
		$sliders_content = array(
			'slider_id'	=> $this->input->post('slider_id'),
			'slider_position'	=> '1',
			'sc_image'	=> $slider_image,
			'sc_caption' 	  => $this->input->post('sc_caption'),
			'sc_description	' => $this->input->post('sc_description'),
			'sc_order' => $this->input->post('sc_order'),
			'sc_status' => $this->input->post('sc_status'),
			'created' 	=> date("d-m-Y H:i:s"),
			'modified' 	=> date("d-m-Y H:i:s"),
		);
		$this->db->insert('tbl_slider_contents', $sliders_content);
	}

	function slider_image_list($slider_id){
		$query = "SELECT * FROM tbl_slider_contents
				LEFT JOIN tbl_sliders ON tbl_sliders.slider_id = tbl_slider_contents.slider_id
				WHERE 1=1
				AND tbl_slider_contents.slider_id = $slider_id;
				";
        $query_result = $this->db->query($query)->result_array();
        return $query_result;
	}

	function slider_image_edit($image_name){
		$slider_content_id = $this->input->post('slider_content_id');
		$sliders_content = array(
			// 'slider_id'	=> $this->input->post('slider_id'),
			'sc_image'	=> $image_name,
			'sc_caption' 	  => $this->input->post('sc_caption'),
			'sc_description	' => $this->input->post('sc_description'),
			'sc_order' => $this->input->post('sc_order'),
			'sc_status' => $this->input->post('sc_status'),
			'created' 	=> date("d-m-Y H:i:s"),
			'modified' 	=> date("d-m-Y H:i:s"),
		);
		$this->db->where('slider_content_id', $slider_content_id);       
        $this->db->update('tbl_slider_contents', $sliders_content);
	}
	
	















}
?>
