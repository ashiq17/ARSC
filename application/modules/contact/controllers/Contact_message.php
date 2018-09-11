<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_message extends CI_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Contact_message_Model');
		if($this->session->userdata("userlogin") != "UserLogedIn!" ) {
			$err_msg = 'Login Required!';
			redirect(base_url()."admin/login/index?err_msg=$err_msg");
		}
	}

	

	public function all_message() {
		$data['read_message'] = $this->Contact_message_Model->get_read_message();
		$data['unread_message'] = $this->Contact_message_Model->get_unread_message();
		$data['all_message'] = $this->Contact_message_Model->get_all_message();
		$this->load->view('all_messages', $data);
	}

	public function read_status_change() {
		$contactID = ($this->input->post('one'))?$this->input->post('one'):0;
		// 		 echo "<pre>";
		// print_r($msgID);
		//  echo  "</pre>";
		// die();
		$data = array(
				'ReadStatus' => 1
			);

		$this->db->where('ContactID', $contactID);
     	$this->db->update('tbl_contact_message', $data); 
	}

	public function delete_read_message() {
		$deleteID = $this->input->post('deleteID');		

		$this->db->where('ContactID', $deleteID);
     	$this->db->delete('tbl_contact_message'); 

     	redirect(base_url()."contact/contact_message/read_message");
	}

	public function delete_unread_message() {
		$deleteID = $this->input->post('deleteID');		

		$this->db->where('ContactID', $deleteID);
     	$this->db->delete('tbl_contact_message'); 

     	redirect(base_url()."contact/contact_message/read_message");
	}
}
