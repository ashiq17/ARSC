<?php
class Dashboard extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();        
    }   

    public function findSuperAdmin(){
        $this->db->where('RoleID', 1);
        $query = $this->db->get('tbl_user');
        return $result = $query->result_array();
    }

    public function user($user_id){
        $this->db->select("user.*,role.role_name, Udetails.*");
        $this->db->from("tbl_user user");
        $this->db->join("tbl_roles role", "user.RoleID = role.id",'left');
        $this->db->join("tbl_user_details Udetails", "Udetails.user_id = user.UserID",'left');
        // $this->db->join("tbl_employee_details emdetails", "emdetails.id = user.EmployeeId",'left');
        $this->db->where('user.UserID', $user_id);
        $query = $this->db->get();
        // print_r($query);
        // die();
        return $query->result_array();
    }

    public function findPermissions($RoleID){
        $Query = "SELECT tbl_permissions.pages_actions_id, tbl_pages_name.name,tbl_pages.pages_id, tbl_pages.title, tbl_pages.page_url
                  FROM tbl_permissions
                  LEFT JOIN tbl_pages ON tbl_permissions.pages_actions_id = tbl_pages.id
                  LEFT JOIN tbl_pages_name ON tbl_pages_name.id = tbl_pages.pages_id
                  WHERE 1=1 
                  AND tbl_permissions.role_id = $RoleID";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function findPages($RoleID){
        $Query = "SELECT DISTINCT(tbl_pages_name.name), tbl_pages_name.id, tbl_pages.*
                  FROM tbl_pages_name
                  LEFT JOIN tbl_pages ON tbl_pages_name.id = tbl_pages.pages_id
                  LEFT JOIN tbl_permissions ON tbl_permissions.role_id = $RoleID
                  WHERE 1=1 
                  ORDER BY tbl_pages_name.p_order 
                  -- AND tbl_permissions.role_id = $RoleID";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
    }

    public function findMenuPages($RoleID){

        $Query = "SELECT tbl_pages.*, tbl_permissions.pages_actions_id, tbl_permissions.role_id
                FROM tbl_pages
                -- LEFT JOIN tbl_pages_name ON tbl_pages_name.id = tbl_pages.pages_id
                LEFT JOIN tbl_permissions ON tbl_pages.id=tbl_permissions.pages_actions_id
                WHERE 1=1 
                -- ORDER BY tbl_pages.parent_id, tbl_pages.page_order
                AND tbl_pages.status = 1
                -- AND (tbl_permissions.role_id = $RoleID AND tbl_pages.is_group=0)
                AND (CASE WHEN tbl_pages.is_group=0 THEN tbl_permissions.role_id = $RoleID ELSE 1=1 END)
                ORDER BY tbl_pages.parent_id ASC, tbl_pages.page_order ASC
                -- ORDER BY CASE WHEN parent_id=0 THEN page_order ELSE parent_id END, page_order
                -- tbl_pages.parent_id = 0, tbl_pages.parent_id, tbl_pages.page_order
                ";
        $query_result = $this->db->query($Query)->result();
        // echo "<pre>";
        // print_r($query_result);
        // die();
        //echo '<pre>',print_r($query_result),'</pre>';
        return $query_result;
    }

    public function findPagess($RoleID,$currentUrlID){
        $Query = "SELECT tbl_permissions.*, tbl_pages.*
                FROM tbl_permissions
                LEFT JOIN tbl_pages ON tbl_permissions.pages_actions_id = tbl_pages.id 
                WHERE 1=1 
                AND tbl_pages.status = 1
                AND tbl_permissions.role_id = '$RoleID'
                AND tbl_permissions.pages_actions_id = '$currentUrlID'";
                
        $query_result = $this->db->query($Query)->result();
        //echo '<pre>',print_r($query_result),'</pre>';
        return $query_result;
    }

    // public function find_notice(){
    //     $Query = "SELECT tbl_notice_publish.* , tbl_notes.note_title, tbl_depart_desig_notice.*
    //             FROM tbl_notice_publish
    //             LEFT JOIN tbl_notes ON tbl_notes.note_id = tbl_notice_publish.notice_title 
    //             LEFT JOIN tbl_depart_desig_notice ON tbl_depart_desig_notice.notice_publish_id = tbl_notice_publish.notice_id
    //             WHERE 1=1 
    //             AND tbl_notice_publish.status = 1 
    //             ORDER BY tbl_notice_publish.notice_date desc limit 4
    //             ";
    //     $query_result = $this->db->query($Query)->result_array();
    //     return $query_result;
    // }

    // public function find_noticee($department,$designation){
    //     $Query = "SELECT tbl_notice_publish.* , tbl_notes.note_title, tbl_depart_desig_notice.*
    //             FROM tbl_notice_publish
    //             LEFT JOIN tbl_notes ON tbl_notes.note_id = tbl_notice_publish.notice_title 
    //             LEFT JOIN tbl_depart_desig_notice ON tbl_depart_desig_notice.notice_publish_id = tbl_notice_publish.notice_id
    //             WHERE 1=1 
    //             AND tbl_notice_publish.status = 1 
    //             AND (tbl_depart_desig_notice.depart_or_desig = $department or tbl_depart_desig_notice.depart_or_desig = $designation)
    //             OR tbl_depart_desig_notice.notice_view_type = 1
    //             ORDER BY tbl_notice_publish.notice_date desc limit 4
    //             ";
    //             // echo $Query;
    //     $query_result = $this->db->query($Query)->result_array();
    //     return $query_result;
    // }
    
}