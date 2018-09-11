<?php
class Designation_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // $this->load->library('Facebook');
		
    }
	//========mahbub Category starting here====///
    public function all_designation_finding(){
        $Query = "SELECT * 
                  FROM tbl_designation 
                  WHERE 1=1 
                  ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
     // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
    }
    public function all_active_designation_finding(){
        $Query = "SELECT * 
                  FROM tbl_designation 
                  WHERE 1=1 
                  AND DesignationStatus=1
                  ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }
    public function all_inactive_designation_finding(){
        $Query = "SELECT * 
                  FROM tbl_designation 
                  WHERE 1=1 
                  AND DesignationStatus=0
                  ORDER BY DesignationName ASC ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function edit_designation_finding($id){
        $Query = "SELECT* 
                  FROM tbl_designation 
                  WHERE 1=1 
                  AND tbl_designation.DesignationID=$id ";
        $query_result = $this->db->query($Query)->result_array();
   // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
    }
    public function update_designation($id){
        if (isset($_POST['submit']) == 'Update'){
            $designation_info = array(
                    'DesignationName'       => $this->input->post('designation_name'),
                    'DesignationStatus'     => $this->input->post('designation_status'),
                    'Modified'              =>date("d-m-Y H:i:s")
                );
            $this->db->where('DesignationID',$id);
            $this->db->update('tbl_designation',$designation_info);
        } 
    }
    public function delete_designation($id){
        $this->db->where('DesignationID', $id);
        $this->db->delete('tbl_designation');
    }
    
///======mahbub  Category Task End here==========///
    
    
    /*mahbub edning here*/

	


	
}