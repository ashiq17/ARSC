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
	
	public function add_designation_info(){
		if ($_POST['submit'] == 'Save') {
			$UserName=$this->session->userdata("UserID");
				$designation_info = array(
					'DesignationName'	=> $this->input->post('designation_name'),
					'DesignationStatus'	=> $this->input->post('designation_status'),
					'Created' 			=>date("d-m-Y H:i:s"),
					'Modified' 			=>''
				);

			$this->db->insert('tbl_designation',$designation_info);
			$this->session->set_userdata('message','designation Add Successfully!');
			redirect(base_url().'teacher/designation/all_designation');
		}
	}
	
	public function all_designation(){
		$data['all_designation_find'] = $this->Designation_Model->all_designation_finding();
		 $data['all_active_designation_find'] = $this->Designation_Model->all_active_designation_finding();
		// $data['all_inactive_designation_find'] = $this->Designation_Model->all_inactive_designation_finding();
		
		$this->load->view('designation_list',$data);
	}

	public function edit_designation($id){
		$data['edit_designation_find'] = $this->Designation_Model->edit_designation_finding($id);
		$this->load->view('edit_designation',$data);
	}

	public function designation_update(){
		$id=$this->input->post('DesignationID');
		$this->Designation_Model->update_designation($id);
		$this->session->set_userdata('message','designation updated Successfully!');
		redirect(base_url().'teacher/designation/all_designation');
	}

	public function designation_delete(){
		$id = $this->input->post('deletedesignationID');
		$this->Designation_Model->delete_designation($id);
		$this->session->set_userdata('message', ' designation is deleted!');
		redirect(base_url().'teacher/designation/all_designation');
		
	}
	
// =====Designation End here =========//

	
// ===== Category Task  end  here =========//

	
}
