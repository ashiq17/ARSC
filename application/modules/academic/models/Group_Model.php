<?php
class Group_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
		
    }

    public function get_classData() {
        $Query = "SELECT * FROM tbl_class
        WHERE 1=1  AND Class_Status=1";
        $query_result = $this->db->query($Query)->result();
        return $query_result;

    }

    public function get_sectionData() {
    	$Query = "SELECT * FROM tbl_section
        WHERE 1=1  AND Section_Status=1";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
    }


      public function get_groupData() {
        $Query = "SELECT * FROM tbl_group
        WHERE 1=1  AND Group_status=1";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
    }


    public function upload_new_group() {
        $groupName        = $this->input->post('stname');
		$publishStatus      = $this->input->post('pubstatus');
		$this->db->trans_start();
        $tbl_group_entry_Data = array(
 
            'Group_Name'          => $groupName,
            'Group_status'        => $publishStatus
        );
        $this->db->insert('tbl_group', $tbl_group_entry_Data);
        $this->db->trans_complete();
    }

    public function update_group() {
    	$id                 = $this->input->post('editID');
		$upazilaName        = $this->input->post('stnameEdit');
		$publishStatus      = $this->input->post('pubstatusEdit');

		$this->db->trans_start();
        $tbl_group_updateData = array(
            'Group_Name'    => $upazilaName,
            'Group_status'   => $publishStatus
        );
        $this->db->where('Group_ID', $id);
		$this->db->update('tbl_group', $tbl_group_updateData); 
        $this->db->trans_complete();

    }

     public function deleteInfo($Eid = NULL){
        $this->db->where('Group_ID', $Eid);
        $this->db->delete('tbl_group');
    }
    
}