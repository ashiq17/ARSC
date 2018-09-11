<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CTL_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Users_model');		
		// $this->load->model('employee/Employee_model');		
	}

	public function add_user() {
		$data['role_finding'] = $this->Users_model->role_finding();
		// $data['superior_finding'] = $this->Employee_model->superior_finding();
		$this->load->view('add_user',$data);
	}

	public function user_add(){	
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('user_type', 'user_type', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == TRUE && isset($_POST['submit']) == TRUE){
			$data['message'] = 'Some problems occured, please try again.';
            // $this->load->view('host_signup');
        }
        else{

        	// print_r($_POST);
        	// die();

			$users = array(
				'FullName' 		=> $this->input->post('full_name'),
				// 'Designation' 	=> $this->input->post('designation'),
				'EmployeeId' 	=> $this->input->post('card_no'),
				'Username' 		=> $this->input->post('username'),
				'Email' 		=> $this->input->post('email'),
				'Password' 		=> md5($this->input->post('password')),
				'RoleID' 		=> $this->input->post('role'),
				'Status' 		=> $this->input->post('status'),
				'created' 		=> date("d-m-Y H:i:s"),
				'modified' 		=> date("d-m-Y H:i:s"),
			);
			# image uploading start #
			$error='';
			$fdata=array();
			$config['upload_path']    = './images/users/';
	        $config['allowed_types']  = 'gif|jpg|png|jpeg';
	        $config['max_size']       = 5000;
	        // $config['max_width']   = 1024;
	        // $config['max_height']  = 768;

	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('image'))
	        {
	            $sdata['error_msg'] = $this->upload->display_errors();
	            $sdata['success_msg'] = ' But user basic info added Successfully!';
	            $this->session->set_userdata($sdata);

	            $this->Users_model->user_adding($users);
	            redirect('users_role/users/user_list');
	        }
	        else
	        {
	            $fdata = $this->upload->data();
	            $user_image = $fdata['file_name'];
	        }
			# image uploading end #
			$error='';
			$users_details='';
			$users_details = array(
				'image'				=> $user_image,
				'present_address' 	=> $this->input->post('present_address'),
				'permanent_address' => $this->input->post('permanent_address'),
				'mobile' 			=> $this->input->post('mobile'),
				'employee_id' 		=> $this->input->post('employee_id'),
				'joining_date' 		=> $this->input->post('joining_date'),
				'date_birth' 		=> $this->input->post('date_birth'),
				'gender' 			=> $this->input->post('gender'),
				'marital_status' 	=> $this->input->post('marital_status'),
				'created' 			=> date("d-m-Y H:i:s"),
				'modified' 			=> date("d-m-Y H:i:s"),
			);
			//Transfering data to Model
			$this->Users_model->user_adding($users, $users_details);
			$this->session->set_userdata('message','User added Successfully!');
			redirect(base_url().'users_role/users/user_list');
		}
	}


	public function json_unique_username_check(){  

		$username= ($this->input->get('username'))?$this->input->get('username'):0;
		$check = $this->db->get_where('tbl_user', array('username' => $username));
		$exist = 0;
		if($check->num_rows() > 0){
			$exist = 1;
		}
		echo json_encode(array("exist"  => $exist ));
	}

	 public function json_unique_employee_id_check(){  

	    $employee_id= ($this->input->get('employee_id'))?$this->input->get('employee_id'):0;
	    $check = $this->db->get_where('tbl_user', array('EmployeeId' => $employee_id));
	    $existt = 0;
	    if($check->num_rows() > 0){
	        $existt = 1;
	    }
	    echo json_encode(array("existt"  => $existt ));
	}

	public function user_list() {
		$data['user_data'] = $this->Users_model->get_user_list();
		$this->load->view('user_list', $data);
	}
	public function edit_user($id=null) {
		$data['user_data'] = $this->Users_model->get_user($id);
		$data['role_data'] = $this->Users_model->get_role_list();
		// $data['superior_finding'] = $this->Employee_model->superior_finding();
		$this->load->view('edit_user', $data);
	}

	public function user_edit(){
		if (isset($_POST['submit']) == 'Submit'){

			$user_update = array(
				'UserID'	  => $this->input->post('id'),
				'EmployeeId'	  => $this->input->post('employee_id'),
				'FullName' 	  => $this->input->post('full_name'),
				// 'Designation' => $this->input->post('designation'),
				'UserName' 	  => $this->input->post('username'),
				'Email' 	  => $this->input->post('email'),
				'RoleID' 	  => $this->input->post('role'),
				'Status' 	  => $this->input->post('status'),
				'modified' 	  => date("d-m-Y H:i:s"),
			);
			//Transfering data to Model
			$this->Users_model->update_user($user_update);
			$this->session->set_userdata('message','User updated Successfully!');
			redirect(base_url().'users_role/users/user_list');
		}else{
			$this->session->set_userdata('message','User is not Updated, Try again!');
			redirect(base_url().'users_role/users/user_list');
		}
	}

	public function add_role(){
		$this->load->view('add_role');
	}

	public function role_add(){
		if (isset($_POST['submit']) == 'Submit'){

			$role_info = array(
				'role_name'            => $this->input->post('role_name'),
				'status' 	           => $this->input->post('status'),
				'edit_permission' 	   => $this->input->post('editPermission'),
				'created' 	           => date("d-m-Y H:i:s"),
				'modified' 	           => date("d-m-Y H:i:s"),
			);

			//Transfering data to Model
			$this->Users_model->add_role($role_info);
			$this->session->set_userdata('message','Role added Successfully!');
			redirect(base_url().'users_role/users/role_list');
		}else{
			$this->session->set_userdata('message','Role is not added, Try again!');
			redirect(base_url().'users_role/users/role_add');
		}
	}

	public function edit_role($id){
		$data['role_data'] = $this->Users_model->get_role($id);
		$this->load->view('edit_role',$data);
	}
	public function role_edit(){
		if (isset($_POST['submit']) == 'Submit'){			
			//Transfering data to Model
			$this->Users_model->update_role();
			$this->session->set_userdata('message','Role updated Successfully!');
			redirect(base_url().'users_role/users/role_list');
		}else{
			$this->session->set_userdata('message','Role is not updated, Try again!');
			redirect(base_url().'users_role/users/role_list');
		}
	}

	public function role_list(){
		$data['role_data'] = $this->Users_model->get_role_list();
		$this->load->view('role_list',$data);
	}

	public function user_delete(){
		$user_id = $this->input->post('deleteUserID');
		$this->Users_model->did_delete_user($user_id);
		$this->session->set_userdata('message','User is deleted!');
		redirect(base_url().'users_role/users/user_list');
	}

	public function role_delete(){
		$role_id = $this->input->post('deleteRoleID');
		$this->Users_model->did_delete_role($role_id);
		$this->session->set_userdata('message','Role is deleted!');
		redirect(base_url().'users_role/users/role_list');
	}

	public function page_add(){
		$data['pName_data'] = $this->Users_model->get_pName_list();
		// echo '<pre>',print_r($data['pName_data']),'</pre>';die();
		$this->load->view('add_page',$data);
	}

	public function add_page(){
		if (isset($_POST['submit']) == 'Submit'){
			$parentID = ($this->input->post('pages_id'))?$this->input->post('pages_id'):0;

			if($parentID != 0) {
				$Query = "select * from tbl_pages where id=$parentID";
				$QueryData = $this->db->query($Query)->result_array();
				$parent_order_level = isset($QueryData[0]['order_level'])?$QueryData[0]['order_level']:0;
			} else {
				$parent_order_level = 0;
			}

			$order_level = $parent_order_level+1;
			$page_info = array(
				'parent_id'    => $parentID, 
				'title' 	   => $this->input->post('title'),
				'page_url' 	   => ($this->input->post('page_url'))?$this->input->post('page_url'):'',
				'is_group'     => $this->input->post('is_group'),
				'page_order'   => $this->input->post('order'),
				'order_level'  => $order_level,
				'status' 	   => $this->input->post('status'),
				'created' 	   => date("d-m-Y H:i:s"),
				'modified' 	   => date("d-m-Y H:i:s"),
			);
			//echo '<pre>',print_r($page_info),'</pre>';
			//Transfering data to Model
			$this->Users_model->page_adding($page_info);
			$this->session->set_userdata('message','Page added Successfully!');
			redirect(base_url().'users_role/users/page_list');
		}else{
			$this->session->set_userdata('message','Page is not added, Try again!');
			redirect(base_url().'users_role/users/page_add');
		}
	}

	public function page_list(){
		$data['page_data'] = $this->Users_model->get_page_list();
		// echo '<pre>',print_r($data['page_data']),'</pre>';die();
		$this->load->view('page_list',$data);
	}

	public function edit_page($id){
		$data['pName_data'] = $this->Users_model->get_pName_list();
		$data['page_data'] = $this->Users_model->get_page($id);
		$this->load->view('edit_page',$data);
	}
	public function page_edit(){
		if (isset($_POST['submit']) == 'Submit'){

			$parentID = ($this->input->post('pages_id'))?$this->input->post('pages_id'):0;

			if($parentID != 0) {
				$Query = "select * from tbl_pages where id=$parentID";
				$QueryData = $this->db->query($Query)->result_array();
				$parent_order_level = isset($QueryData[0]['order_level'])?$QueryData[0]['order_level']:0;
			} else {
				$parent_order_level = 0;
			}

			$order_level = $parent_order_level+1;

			$page_update = array(
				'id' 		   => $this->input->post('id'),
				'parent_id'    => $parentID,
				'title' 	   => $this->input->post('title'),
				'page_url'     => ($this->input->post('page_url'))?$this->input->post('page_url'):'',
				'is_group'     => $this->input->post('is_group'),
				'page_order'   => $this->input->post('order'),
				'order_level'  => $order_level,
				'status' 	   => $this->input->post('status'),
				'modified' 	   => date("d-m-Y H:i:s"),
			);
			//echo '<pre>',print_r($page_update),'</pre>';
			//Transfering data to Model
			$this->Users_model->update_page($page_update);
			$this->session->set_userdata('message','Page updated Successfully!');
			redirect(base_url().'users_role/users/page_list');
		}else{
			$this->session->set_userdata('message','Page is not updated, Try again!');
			redirect(base_url().'users_role/users/page_list');
		}
	}

	public function page_delete(){
		$page_id = $this->input->post('deletePageID');
		$this->Users_model->did_delete_page($page_id);
		$this->session->set_userdata('message','Page is deleted!');
		redirect(base_url().'users_role/users/page_list');
	}

	public function permissions(){
		$data['role_finding'] = $this->Users_model->role_finding();
		$data['get_page_list'] = $this->Users_model->get_pn_list();
		// $data['get_page_list'] = $this->Users_model->get_page_list();
		$data['pageNaction'] = $this->Users_model->pageNaction();
		$this->load->view('add_permissions',$data);
	}

	public function pages_name_list(){
		$data['pages_name'] = $this->Users_model->pages_name_list();
		$this->load->view('pages_name_list',$data);
	}

	public function add_page_name(){
		$this->load->view('add_page_name');
	}

	public function adding_page_name(){
		if (isset($_POST['submit']) == 'Submit'){
			$page_name = array(
				'name' => $this->input->post('name'),
				'p_order' 	=> $this->input->post('p_order'),
				'status' 	=> $this->input->post('status'),
				'created' 	=> date("d-m-Y H:i:s"),
				'modified' 	=> date("d-m-Y H:i:s"),
			);
			//Transfering data to Model
			$this->Users_model->page_name_adding($page_name);
			$this->session->set_userdata('message','Page Name added Successfully!');
			redirect(base_url().'users_role/users/pages_name_list');
		}else{
			$this->session->set_userdata('message','Page Name is not added, Try again!');
			redirect(base_url().'users_role/users/add_page_name');
		}
	}

	public function edit_page_name($id){
		$data['page_name'] = $this->Users_model->get_page_name($id);
		$this->load->view('edit_page_name',$data);
	}

	public function editing_page_name(){
		if (isset($_POST['submit']) == 'Submit'){
			$page_name = array(
				'id' 		=> $this->input->post('id'),
				'name' 		=> $this->input->post('name'),
				'p_order' 	=> $this->input->post('p_order'),
				'status' 	=> $this->input->post('status'),
				'created' 	=> date("d-m-Y H:i:s"),
				'modified' 	=> date("d-m-Y H:i:s"),
			);
			//Transfering data to Model
			$this->Users_model->page_name_update($page_name);
			$this->session->set_userdata('message','Page name edited Successfully!');
			redirect(base_url().'users_role/users/pages_name_list');
		}else{
			$this->session->set_userdata('error_msg','Page name is not edited, Try again!');
			redirect(base_url().'users_role/users/pages_name_list');
		}
	}

	public function page_name_delete(){
		$page_id = $this->input->post('deletePageID');
		$this->Users_model->did_delete_pName($page_id);
		$this->session->set_userdata('message','Page name is deleted!');
		redirect(base_url().'users_role/users/pages_name_list');
	}

	public function action_permissions(){

		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// die();

		if (isset($_POST['submit']) == 'Submit'){
			$user_id =$this->session->has_userdata('UserID');
			$role_id = $this->input->post('role_id');
			$actions_id = $this->input->post('actions_id');
			$actions_no_count = count($actions_id);

			$selectedPageArray= array();
			$i=0;
			if(!empty($actions_id)){			
				foreach($actions_id as $check) {
					$i++; 
					$selectedPageArray[$i] = $check; 
				}
			}

			$PageQuery = "select * from tbl_pages where is_group=0";
			$PageQueryResult = $this->db->query($PageQuery)->result();

			$PermissionQuery = "select * from tbl_permissions where 1=1 and user_id=$user_id and role_id=$role_id";
			$PermissionQueryResult = $this->db->query($PermissionQuery)->result();
			//echo '<pre>',print_r($PermissionQueryResult),'</pre>';

			$page_permissions = array(
				'role_id' => $this->input->post('role_id'),
				'user_id' => $user_id,
				'pages_actions_id' =>$actions_id[$i],
				'created' => date("d-m-Y H:i:s"),
				'modified'=> date("d-m-Y H:i:s"),
			);

			if(!empty($PageQueryResult)){
				//echo "hello";
				//$i = 0;	
				$deleteID= 0;
				foreach($PageQueryResult as $key=>$info) {
					$exist = 0;
					$permissionExist = 0;
					$pageId = $info->id;
					foreach($PermissionQueryResult as $key=>$permissionInfo) {
						$PermissionpageId = $permissionInfo->pages_actions_id;
						if($pageId == $PermissionpageId) {
							$permissionExist = 1;	
							$deleteID = $permissionInfo->id;						
						} 
					}

					if($permissionExist == 1) {
						for($i=1; $i<=$actions_no_count; $i++){
							if($pageId == $selectedPageArray[$i]) {		
								$exist = 1;
								break;
							}							
						}						

					} else {
						for($i=1; $i<=$actions_no_count; $i++){
							if($pageId == $selectedPageArray[$i]) {		
								$exist = 2;
								break;
							}
							
						}
						if($exist != 2) {
							$exist = 1;
						}
						
					}
					
					if($exist == 2) {
						$page_permissions = array(
							'role_id' => $this->input->post('role_id'),
							'user_id' => $user_id,
							'pages_actions_id' => $pageId,
							'created' => date("d-m-Y H:i:s"),
							'modified'=> date("d-m-Y H:i:s"),
						);
						$this->Users_model->page_action_adding($page_permissions);
						//echo '<pre>',print_r($page_permissions),'</pre>';
					} elseif($exist == 0) {
						//echo $pageId . "delete";
						$this->db->where('id', $deleteID);
						$this->db->delete('tbl_permissions'); 
					}
				}
			}

			$this->session->set_userdata('message','Page actions added Successfully!');
			redirect(base_url().'users_role/users/permissions');
		}else{
			$this->session->set_userdata('error_msg','Something wrong! Page actions is not added, Try again!');
			redirect(base_url().'users_role/users/permissions');
		}
	}

	public function get_permission_page_list(){
		$roleid= ($this->input->get('roleid'))?$this->input->get('roleid'):0;
		$this->db->trans_start();
		$this->db->where('is_group =', 0);
		//$queryData = $this->db->get_where('tbl_pages', array('ActiveStatus' => 0, 'IsGroup' => 1))->result_array();
		$queryData = $this->db->get('tbl_pages')->result(); //$this->db->get_where('tbl_pages', array('ActiveStatus' => 0))->result(); //
		//$query = "select tbl_pages.* from tbl_pages where tbl_pages.ParentID != 0 and tbl_pages.ActiveStatus = 0";
		//$queryData = $this->db->query($query)->result();
		$total = 0;
		$page_array = array();
		foreach($queryData as $key=>$info){
			$total++;
			$page_array[$total] = $info->id;
		}
		$this->db->trans_complete();
		
		$queryData = $this->db->get_where('tbl_permissions', array('role_id' => $roleid))->result();
		$selected_total = 0;
		$selected_page_array = array();
		foreach($queryData as $key=>$info){
			$selected_total++;
			$selected_page_array[$selected_total] = $info->pages_actions_id;
		}
		echo json_encode(array(
					"page_array" 	=> $page_array, 
					"total" 	=> $total,
					"selected_page_array" 	=> $selected_page_array, 
					"selected_total" 	=> $selected_total,
					)); 
	}

}

?>
