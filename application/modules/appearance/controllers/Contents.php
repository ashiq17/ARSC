<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends CTL_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Content_Model');
		if($this->session->userdata("userlogin") != "UserLogedIn!" ) {
			$err_msg = 'Login Required!';
			redirect(base_url()."admin/login/index?err_msg=$err_msg");
		}
	}

	public function index() {
		$data['news_categories'] = $this->Content_Model->get_categories();
		$data['page_categories'] = $this->Content_Model->get_page_categories();
		$this->load->view('News_view', $data);
	}

	public function content_manage() { #all news
		$data['news_data'] = $this->Content_Model->get_news_data();
		$data['news_link_data'] = $this->Content_Model->get_news_link_data();
		$this->load->view('all_content_view', $data);
	}

	public function add_content() {
		$data['news_categories'] = $this->Content_Model->get_categories();
		$data['page_categories'] = $this->Content_Model->get_page_categories();
		$this->load->view('add_content_view', $data);
	}

	public function content_edit($id) {
		$data['news_categories'] = $this->Content_Model->get_categories();
		$data['page_categories'] = $this->Content_Model->get_page_categories();
		$data['news_update_data'] = $this->Content_Model->get_news_update_data($id);
		$data['newslink_update_data'] = $this->Content_Model->get_newslink_update_data($id);
		$this->load->view('Edit_Content_view', $data);
	}

	public function image_upload() {		
		header("Content-type: application/json");
		$allowed = ['mp4', 'png', 'jpg', 'jpeg', 'gif'];
		$processed = [];
		foreach($_FILES['files']['name'] as $key => $name) {
			if($_FILES['files']['error'][$key] === 0 ) {

				$temp = $_FILES['files']['tmp_name'][$key];
				//list($w, $h) = getimagesize($_FILES['files']['tmp_name'][$key]);
				

				$ext = explode('.', $name);
				$ext = strtolower(end($ext));

				$filename = pathinfo($name, PATHINFO_FILENAME);

				$file = uniqid('', true) . time() . '.' . $ext;

				$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
				// thumbnail sizes
				$sizes = array(150 => 150, 220 => 110, 300 => 150, 720 => 360);

				if(in_array($ext, $valid_exts)) {
					foreach ($sizes as $w => $h) {
				        $files[] = $this->Content_Model->get_resize($w, $h, $temp, $file, $ext);
			      	}
			    }

		      	$this->Content_Model->file_upload($file, $ext);
				if(in_array($ext, $allowed) && move_uploaded_file($temp, 'assets/uploads/' . $file)) {
					$processed[] = array(
						'name' => $name,
						'file' => $file,
						'uploaded' => true
					);
				} else {
					$processed[] = array(
						'name' => $name,
						'uploaded' => false
					);
				}
			}
		}

		echo json_encode($processed);
	}

	public function get_media_data() {
		$lastMediaID= ($this->input->get('lastMediaID'))?$this->input->get('lastMediaID'):0;

		$query = "SELECT * FROM tbl_media WHERE MediaID > $lastMediaID ORDER BY STR_TO_DATE(FileCreatedDate, '%d-%m-%Y'), cast(MediaID as SIGNED) ASC";

		$queryData = $this->db->query($query)->result();

		/*if ($QueryResult->num_rows() > 0){
		   foreach ($QueryResult->result() as $row){
				$data_array = array(
					"MediaID" 	      => $row->MediaID,
					"FileName" 	      => $row->FileName,
					"FileType"        => $row->FileType,
					"FileTitle"       => $row->FileTitle,
					"FileCaption" 	  => $row->FileCaption,
					"FileDescription" => $row->FileDescription,
					"FileCreatedDate" => $row->FileCreatedDate,
				);	
		   }
		}*/

		//$queryData = $this->db->get($table_name)->result();
		$total = 0;
		$mediaInfo = array();//`id``ItemCode``BarCode`
		foreach($queryData as $key=>$info){
			$total++;
			$mediaInfo[$total]['MediaID'] = $info->MediaID;
			$mediaInfo[$total]['FileName'] = $info->FileName;
			$mediaInfo[$total]['FileType'] = $info->FileType;
			$mediaInfo[$total]['FileTitle'] = $info->FileTitle;
			$mediaInfo[$total]['FileCaption'] = $info->FileCaption;
			$mediaInfo[$total]['FileAltText'] = $info->FileAltText;
			$mediaInfo[$total]['FileDescription'] = $info->FileDescription;
			$mediaInfo[$total]['FileCreatedDate'] = $info->FileCreatedDate;
		}
		/* */
		echo json_encode(array(
					"mediaInfo" 	=> $mediaInfo, 
					"total" 	=> $total, 
					));


		//echo json_encode($data_array);
	}

	public function news_upload() {
		$this->Content_Model->upload_news();

		redirect(base_url()."appearance/contents/content_manage");
	}

	public function news_update() {
		$this->Content_Model->update_news();

		redirect(base_url()."appearance/contents/content_manage");
	}

	public function news_delete() {
		$newsId = $this->input->post('deleteNewsID');

		if($newsId != "") {
			$this->Content_Model->delete_news($newsId);
		}
		redirect(base_url()."appearance/contents/content_manage");
	}
}
