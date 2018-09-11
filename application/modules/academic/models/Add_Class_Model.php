<?php
class Add_Class_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }


    public function get_divisionData() {
    	$Query = "SELECT * FROM tbl_class
            WHERE 1=1  ORDER BY Class_ID ASC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

    public function upload_new_class() {
        $Class_Name       = $this->input->post('Class_Name');
		$publishStatus      = $this->input->post('pubstatus');

		$this->db->trans_start();
        $tbl_class_entry_Data = array(
            'Class_Name'     => $Class_Name,
            'Class_Status'     => $publishStatus
        );
        $this->db->insert('tbl_class', $tbl_class_entry_Data);
        //echo '<pre>',print_r($tbl_division_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_class() {
    	$id                 = $this->input->post('editID');
		$Class_Name       = $this->input->post('stnameEdit');
		$Class_Status      = $this->input->post('pubstatusEdit');

		$this->db->trans_start();
        $tbl_class_updateData = array(
            'Class_Name'   => $Class_Name,
            'Class_Status'   => $Class_Status
        );
        $this->db->where('Class_ID', $id);
		$this->db->update('tbl_class', $tbl_class_updateData); 
        //echo '<pre>',print_r($tbl_division_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Class_ID', $Eid);
        $this->db->delete('tbl_class');
    }





    
}