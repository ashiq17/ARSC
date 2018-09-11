<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profession extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Profession_Model');
	}
	// =====Category Task start  here =========//
	public function index() {
		$this->load->view('add_profession');
	} 
	
	public function add_profession_info(){
		if ($_POST['submit'] == 'Save') {
			$UserName=$this->session->userdata("UserID");
				$profession_info = array(
					'ProfessionName'	  	=> $this->input->post('profession_name'),
					'ProfessionStatus'	=> $this->input->post('profession_status'),
					'Created' 			=>date("d-m-Y H:i:s"),
					'Modified' 			=>''
				);

			$this->db->insert('tbl_profession',$profession_info);
			$this->session->set_userdata('message','Profession Add Successfully!');
			redirect(base_url().'profession/profession/all_profession');
		}
	}
	
	public function all_profession(){
		$data['all_profession_find'] = $this->Profession_Model->all_profession_finding();
		$data['all_active_profession_find'] = $this->Profession_Model->all_active_profession_finding();
		$data['all_inactive_profession_find'] = $this->Profession_Model->all_inactive_profession_finding();
		
		$this->load->view('profession_list',$data);
	}

	public function edit_profession($id){
		$data['edit_profession_find'] = $this->Profession_Model->edit_profession_finding($id);
		$this->load->view('edit_profession',$data);
	}

	public function profession_update(){
		$id=$this->input->post('ProfessionID');
		$this->Profession_Model->update_profession($id);
		$this->session->set_userdata('message','Profession updated Successfully!');
		redirect(base_url().'profession/profession/all_profession');
	}

	public function profession_delete(){
		$id = $this->input->post('deleteProfessionID');
		$this->Profession_Model->delete_profession($id);
		$this->session->set_userdata('message', ' Profession is deleted!');
		redirect(base_url().'profession/profession/all_profession');
		
	}
	
// =====Category End here =========//

// ===== Category Task  end  here =========//

	
}
