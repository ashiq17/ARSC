<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Category_Model');
	}
	// =====Category Task start  here =========//
	public function add_category() {
		$this->load->view('add_category');
	} 
	
	public function add_category_info(){
		if ($_POST['submit'] == 'Save') {
			$UserName=$this->session->userdata("UserID");
				$category_info = array(
					'CategoryName'	  	=> $this->input->post('category_name'),
					'HomepageCategoryStatus'=> $this->input->post('homepage_category_status'),
					'CategoryStatus'	=> $this->input->post('category_status'),
					'CreateBy' 	  		=> $UserName,
					'created' 			=>date("d-m-Y H:i:s"),
					'modified' 			=>''
				);

			$this->db->insert('tbl_category',$category_info);
			$this->session->set_userdata('message','Category Add Successfully!');
			redirect(base_url().'category/category/all_category');
		}
	}
	
	public function all_category(){
		$data['all_category_find'] = $this->Category_Model->all_category_finding();
		$data['all_published_category_find'] = $this->Category_Model->all_published_category_finding();
		$data['all_unpublished_category_find'] = $this->Category_Model->all_unpublished_category_finding();
		
		$this->load->view('category_list',$data);
	}

	public function edit_category($id){
		$data['edit_category_find'] = $this->Category_Model->edit_category_finding($id);
		$this->load->view('edit_category',$data);
	}

	public function category_update(){
		$id=$this->input->post('CategoryID');
		$this->Category_Model->update_category($id);
		$this->session->set_userdata('message','Category updated Successfully!');
		redirect(base_url().'category/category/all_category');
	}

	public function category_delete(){
		$id = $this->input->post('deleteCategoryID');
		$this->Category_Model->delete_category($id);
		$this->session->set_userdata('message', ' Category is deleted!');
		redirect(base_url().'category/category/all_category');
		
	}
	
// =====Category End here =========//

// ===== Category Task  end  here =========//

	
}
