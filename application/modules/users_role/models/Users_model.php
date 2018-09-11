
<?php
class Users_model extends CI_Model{

	function __construct() {
		parent::__construct();
	}

	function user_adding($users){
		// $error='';
		// $users_details='';
		$this->db->insert('tbl_user', $users);
		$users_details['user_id'] = $this->db->insert_id();
		$this->db->insert('tbl_user_details', $users_details);
	}

	public function add_role($role_info){
		$this->db->insert('tbl_roles', $role_info);
	}

	public function get_user_list(){
		$this->db->select("user.*,role.role_name");
		$this->db->from("tbl_user user");
		$this->db->join("tbl_roles role", "user.RoleID = role.id",'left');
		$this->db->order_by("id","desc");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_user($id){
		$Query = "SELECT *
		          FROM tbl_user
		          WHERE 1=1 
		          AND tbl_user.UserID = $id;
		          -- ORDER BY tbl_user.UserID DESC";
        $query_result = $this->db->query($Query)->result_array();

        return $query_result;
	}

	public function get_role_list(){
		$Query = "SELECT *
		          FROM tbl_roles
		          where 1=1 ORDER BY tbl_roles.id DESC";
        $query_result = $this->db->query($Query)->result_array();

        return $query_result;
	}
	public function role_finding(){
		$Query = "SELECT id,role_name
		          FROM tbl_roles
		          where 1=1 ORDER BY tbl_roles.id ASC";
        $query_result = $this->db->query($Query)->result_array();

        return $query_result;
	}

	public function update_user($user_update){
		$UserID   	 = $user_update['UserID'];
		$EmployeeId   	 = $user_update['EmployeeId'];
		$FullName 	 = $user_update['FullName'];
		// $Designation = $user_update['Designation'];
		$UserName 	 = $user_update['UserName'];
		$Email 		 = $user_update['Email'];
		$RoleID      = $user_update['RoleID'];
		$Status      = $user_update['Status'];
		$modified    = $user_update['modified'];
		$Query = "UPDATE tbl_user
				  SET 
			  		RoleID   = '$RoleID',
			  		EmployeeId   = '$EmployeeId',
			  		FullName   = '$FullName',
			  		UserName = '$UserName',
			  		Email 	 = '$Email',
			  		Status   = '$Status',
			  		modified = '$modified'
				  WHERE UserID = $UserID";

				  // echo $Query;
        $query_result = $this->db->query($Query);

        return $query_result;
	}

	public function get_role($id){
		$Query = "SELECT *
		          FROM tbl_roles
		          WHERE 1=1 
		          AND tbl_roles.id = $id";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function update_role(){
		$id   	           = $this->input->post('id');
		$role_name         = $this->input->post('role_name');
		$edit_permission   = $this->input->post('editPermission');
		$status            = $this->input->post('status');
		$modified          = date("d-m-Y H:i:s");
		$Query 	   = "UPDATE tbl_roles
				  	  SET 
			  			role_name   = '$role_name',
			  			status   = '$status',			  					
						edit_permission  = $edit_permission,
			  			modified = '$modified'
				  	  WHERE id = $id";
        $query_result = $this->db->query($Query);
        return $query_result;
	}

	public function did_delete_user($id){
	  	$this->db->where('UserID', $id);
	  	$this->db->delete('tbl_user');
	}

	public function did_delete_role($id){
	  	$this->db->where('id', $id);
	  	$this->db->delete('tbl_roles');
	}

	public function page_adding($pages){
		$this->db->insert('tbl_pages', $pages);
	}

	public function get_page_list(){
		$Query = "SELECT p.*
		          FROM tbl_pages p
		          -- LEFT JOIN tbl_pages_name pn ON p.pages_id = pn.id
		          WHERE 1=1 
		          ORDER BY p.id DESC";
        $query_result = $this->db->query($Query)->result_array();
		        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
	}

	public function get_pn_list(){
		$Query = "SELECT *
		          FROM tbl_pages
		          where 1=1 ORDER BY tbl_pages.parent_id ASC, tbl_pages.page_order";
        $query_result = $this->db->query($Query)->result();
          // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
	}

	public function get_page($id){
		$Query = "SELECT *
		          FROM tbl_pages
		          WHERE 1=1 
		          AND tbl_pages.id = $id";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function update_page($page_update){
		$id   	     = $page_update['id'];
		$pages_id    = $page_update['pages_id'];
		$parent_id   = $page_update['parent_id'];
		$title 	     = $page_update['title'];
		$page_url    = $page_update['page_url'];
		$is_group    = $page_update['is_group'];
		$page_order  = $page_update['page_order'];
		$order_level = $page_update['order_level'];
		$status      = $page_update['status'];
		$modified    = $page_update['modified'];
		$Query 	     = "UPDATE tbl_pages
				  	  SET 
			  			pages_id   	= '$pages_id',
			  			parent_id   = '$parent_id',
			  			title   	= '$title',
			  			page_url   	= '$page_url',
			  			is_group   	= '$is_group',
			  			page_order  = '$page_order',
			  			order_level = '$order_level',
			  			status   	= '$status',
			  			modified 	= '$modified'
				  	  WHERE id = $id";
        $query_result = $this->db->query($Query);
        return $query_result;
	}

	public function did_delete_page($id){
	  	$this->db->where('id', $id);
	  	$this->db->delete('tbl_pages');
	}


	public function pageNaction(){
		$Query = "SELECT *
		          FROM tbl_pages
		          where 1=1 ORDER BY tbl_pages.id DESC";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function pages_name_list(){
		$Query = "SELECT *
		          FROM tbl_pages_name
		          where 1=1 ORDER BY tbl_pages_name.id DESC";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function page_name_adding($page_name){
		$this->db->insert('tbl_pages_name', $page_name);
	}

	public function get_page_name($id){
		$Query = "SELECT *
		          FROM tbl_pages_name
		          WHERE 1=1 
		          AND tbl_pages_name.id = $id";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function page_name_update($page_name){
		$id   	   = $page_name['id'];
		$name 	   = $page_name['name'];
		$p_order   = $page_name['p_order'];
		$status    = $page_name['status'];
		$modified  = $page_name['modified'];
		$Query 	   = "UPDATE tbl_pages_name
				  	  SET 
			  			name   	 = '$name',
			  			p_order  = '$p_order',
			  			status   = '$status',
			  			modified = '$modified'
				  	  WHERE id = $id";
        $query_result = $this->db->query($Query);
        return $query_result;
	}

	public function did_delete_pName($id){
	  	$this->db->where('id', $id);
	  	$this->db->delete('tbl_pages_name');
	}

	public function get_pName_list(){
		$Query = "SELECT *, 0 as process_statusaa, 0 as IsTransactable 
		          FROM tbl_pages
		          WHERE 1=1 ORDER BY parent_id ASC, page_order ASC";
        $query_result = $this->db->query($Query)->result();
        // echo '<pre>',print_r($query_result),'</pre>';
        return $query_result;
	}

	public function page_action_adding($page_permissions){
		$this->db->insert('tbl_permissions', $page_permissions);
	}


	public function findPermissions($RoleID){
        $Query = "SELECT tbl_permissions.pages_actions_id, tbl_pages_name.name, tbl_pages.title, tbl_pages.page_url
                  FROM tbl_permissions
                  LEFT JOIN tbl_pages ON tbl_permissions.pages_actions_id = tbl_pages.id
                  LEFT JOIN tbl_pages ON tbl_pages_name.id = tbl_pages.pages_id
                  WHERE 1=1 
                  AND tbl_permissions.role_id = $RoleID";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function select_parent(){
    	// $Query = "SELECT p.id, pn.parent_id 
	    //          FROM tbl_pages p
	    //          INNER JOIN tbl_pages pn ON p.id = pn.parent_id";

	    $Query = "SELECT * 
	             FROM tbl_pages 
	             WHERE tbl_pages.id = tbl_pages.parent_id";

    	$query_result = $this->db->query($Query)->result_array();
        return $query_result;            

    }
}
?>
