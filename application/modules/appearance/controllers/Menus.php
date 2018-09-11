<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Menus_Model');
		if($this->session->userdata("userlogin") != "UserLogedIn!" ) {
			$err_msg = 'Login Required!';
			redirect(base_url()."admin/login/index?err_msg=$err_msg");
		}
	}

	public function first_menu() {
		$this->load->view('First_menu_view');
	}

	public function second_menu() {
		$data['itemQueryResult'] = $this->Menus_Model->gets_items_names();
		$data['content_list'] = $this->Menus_Model->find_content_list();
		$this->load->view('Second_menu_view', $data);
	}

	public function group_category_data() {
		$HeadID = ($this->input->get('HeadID'))?$this->input->get('HeadID'):0;

		$queryData = $this->db->get_where('tbl_news_menu', array('HeadID' => $HeadID))->result_array();
		
		echo json_encode(array("HeadID" 	=> $queryData[0]['HeadID'], 
								"HeadName" 	=> $queryData[0]['HeadName'], 
								"MenuSlug" 	=> $queryData[0]['MenuSlug'], 
							   ));
	}

	public function group_category_insert() {
		$insert_id = $this->Menus_Model->group_category_insert_model();
		echo  $insert_id;
	}

	public function group_category_update() {
		$this->Menus_Model->group_category_Update_model();
		return 0;
	}

	public function category_data() {
		$HeadID = ($this->input->get('HeadID'))?$this->input->get('HeadID'):0;

		$queryData = $this->db->get_where('tbl_news_menu', array('HeadID' => $HeadID))->result_array();
		
		echo json_encode(array("HeadID" 		=> $queryData[0]['HeadID'], 
								"HeadName" 		=> $queryData[0]['HeadName'], 
								"MenuSlug" 		=> $queryData[0]['MenuSlug']
							   ));
	}

	public function category_insert() {
		$insert_id = $this->Menus_Model->category_insert_model();
		echo  $insert_id;
	}

	public function category_edit() {
		$this->Menus_Model->category_Update_model();
		return 0;
	}

	public function sort_group_category() {
		$this->Menus_Model->sort_group_category_model();
		//return 0;
		redirect(base_url()."appearance/menus/second_menu");
	}

	public function get_sort_data() {
		$sortHeadID = ($this->input->get('sortHeadID'))?$this->input->get('sortHeadID'):0; 
		
		$this->db->order_by('GroupID', 'asc');
		$this->db->where('PtnID', $sortHeadID);
		$queryData = $this->db->get('tbl_news_menu')->result();
		$total = 0;
		$sortCategoryList = array();//`id``ItemCode``BarCode`
		foreach($queryData as $key=>$info){
			$total++;
			$sortCategoryList[$total]['HeadID'] = $info->HeadID;
			$sortCategoryList[$total]['HeadName'] = $info->HeadName;
			$sortCategoryList[$total]['PtnID'] = $info->PtnID;
		}
		/* */
		echo json_encode(array(
					"sortCategoryList" 	=> $sortCategoryList, 
					"total" 	=> $total, 
					)); 
	}
}
