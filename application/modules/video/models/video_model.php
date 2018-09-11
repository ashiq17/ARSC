<?php
class Video_Model extends CI_Model{

	function __construct() {
		parent::__construct();
	}
	
	public function video_info_add($video_info){
		$this->db->insert('tbl_video',$video_info);
	}

	public function find_video_list(){
		$Query = "SELECT *
		          FROM tbl_video
		          WHERE 1=1
		          AND tbl_video.VideoStatus=1 ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function did_delete_video($id){
	  	$this->db->where('VideoID', $id);
	  	$this->db->delete('tbl_video');
	}

	public function get_video($id){
		$Query = "SELECT *
		          FROM tbl_video
		          WHERE 1=1 
		          AND tbl_video.VideoID = $id";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function update_video($id){
		if (isset($_POST['submit']) == 'Update'){
			$video_info = array(
					'VideoTitle'	  			=> $this->input->post('VideoTitle'),
					'VideoSlug' 	  			=> $this->input->post('VideoSlug'),
					'VideoUrl' 	  				=> trim($this->input->post('VideoUrl')),
					'VideoGallarySilderStatus'	=> $this->input->post('VideoGallarySilderStatus'),
					'VideoGallery1Status' 	  	=> $this->input->post('VideoGallery1Status'),
					'VideoGallery2Status' 	  	=> $this->input->post('VideoGallery2Status'),
					'VideoStatus' 	  			=> $this->input->post('VideoStatus'),
					'modified' 	        		=> date("d-m-Y H:i:s")
				);
 				//  echo "<pre>";
				//  print_r($id);
				//   print_r($video_info);
				// echo "</pre>";
				// die();
			$this->db->where('VideoID',$id);
			$this->db->update('tbl_video',$video_info);
		}
	}

}
?>
