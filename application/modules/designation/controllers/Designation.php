<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Designation_Model');
	}
	// =====Designation Task start  here =========//
	public function add_designation() {
		$this->load->view('add_designation');
	} 
	
	public function add_desigantion_info(){
		if ($_POST['submit'] == 'Save') {
			$UserName=$this->session->userdata("UserID");
				$desigantion_info = array(
					'desigantionName'	  	=> $this->input->post('desigantion_name'),
					'desigantionStatus'	=> $this->input->post('desigantion_status'),
					'Created' 			=>date("d-m-Y H:i:s"),
					'Modified' 			=>''
				);

			$this->db->insert('tbl_desigantion',$desigantion_info);
			$this->session->set_userdata('message','desigantion Add Successfully!');
			redirect(base_url().'desigantion/desigantion/all_desigantion');
		}
	}
	
	public function all_desigantion(){
		$data['all_desigantion_find'] = $this->Designation_Model->all_desigantion_finding();
		$data['all_active_desigantion_find'] = $this->Designation_Model->all_active_desigantion_finding();
		$data['all_inactive_desigantion_find'] = $this->Designation_Model->all_inactive_desigantion_finding();
		
		$this->load->view('desigantion_list',$data);
	}

	public function edit_desigantion($id){
		$data['edit_desigantion_find'] = $this->Designation_Model->edit_desigantion_finding($id);
		$this->load->view('edit_desigantion',$data);
	}

	public function desigantion_update(){
		$id=$this->input->post('desigantionID');
		$this->Designation_Model->update_desigantion($id);
		$this->session->set_userdata('message','desigantion updated Successfully!');
		redirect(base_url().'desigantion/desigantion/all_desigantion');
	}

	public function desigantion_delete(){
		$id = $this->input->post('deletedesigantionID');
		$this->Designation_Model->delete_desigantion($id);
		$this->session->set_userdata('message', ' desigantion is deleted!');
		redirect(base_url().'desigantion/desigantion/all_desigantion');
		
	}
	
// =====Designation End here =========//

	
}
