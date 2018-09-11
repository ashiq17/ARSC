<?php
class Login_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }

	// function gets_all_users(){
	// 	$query = "select UserID, EmployeeId, Email,UserName,FullName, Password, Status, RoleID
	// 				from tbl_user";
	// 	$result = $this->db->query($query)->result();
	// 	return $result;
	// }
	

	function gets_all_users(){
		$query = "select tbl_user.UserID, tbl_user.EmployeeId, tbl_user.Email,tbl_user.UserName,tbl_user.FullName, tbl_user.Password, tbl_user.Status, tbl_user.RoleID,tbl_roles.role_name
					from tbl_user
						LEFT JOIN tbl_roles ON  tbl_user.RoleID=tbl_roles.id";
		$result = $this->db->query($query)->result();
		return $result;
	}
}

	// function gets_all_users(){
	// 	$query = "select UserID, EmployeeId, Email,UserName,FullName, Password, Status, RoleID,RoleName
	// 				from tbl_user
	// 					LEFT JION tbl_role ON  tbl_user.RoleID=tbl_role.RoleID";
	// 	$result = $this->db->query($query)->result();
	// 	return $result;
	// }



