<?php
//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class CTL_Controller extends CI_Controller {


	public function __construct() { 
		parent::__construct();
		$this->load->model('Dashboard');
		if($this->session->userdata("userlogin") != "UserLogedIn!" ) {
			$err_msg = 'Login Required!';
			redirect(base_url()."admin/login/index?err_msg=$err_msg");
		}
		$RoleID = $this->session->userdata('RoleID');

		// $EditDeletePermissionQuery = $this->db->get_where('tbl_roles', array('id' => $RoleID))->result_array();
		// $EditPermission = isset($EditDeletePermissionQuery[0]["edit_permission"]) ? $EditDeletePermissionQuery[0]["edit_permission"] : 0;
		//$DeletePermission = isset($EditDeletePermissionQuery[0]["delete_permission"]) ? $EditDeletePermissionQuery[0]["delete_permission"] : 0;

		$currentUrl = $this->uri->uri_string();

		$PageExistQuery = $this->db->get_where('tbl_pages', array('page_url' => $currentUrl, 'status' => 1))->result_array();
		$PageExistID = isset($PageExistQuery[0]["id"]) ? $PageExistQuery[0]["id"] : 0;


		if($PageExistID != 0) {
			$PagePermissionQuery = $this->db->get_where('tbl_permissions', array('role_id' => $RoleID, 'pages_actions_id' => $PageExistID))->result_array();
			$PagePermmission = isset($PagePermissionQuery[0]["id"]) ? $PagePermissionQuery[0]["id"] : "";
			if($PagePermmission != "") {
				return true;
			} else {
				redirect(base_url()."admin/login/system_error");
			}
		} 
		// else {
		// 	if($EditPermission != 0 ) {
		// 		return true;
		// 	} else {				
		// 		redirect(base_url()."admin/login/system_error");
		// 	}
		// }
	}

}

?>
