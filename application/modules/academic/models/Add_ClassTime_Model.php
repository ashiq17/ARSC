<?php
class  Add_ClassTime_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }

    public function get_classTimeData() {
        $Query = "SELECT * FROM tbl_classtime
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();

        // echo '<pre>',print_r($query_result),'</pre>';
        // die();
        return $query_result;
    }

    public function upload_new_classTime() {
        $ClassTime_Name       = $this->input->post('ClassTime_Name');
		$publishStatus      = $this->input->post('pubstatus');

		$this->db->trans_start();
        $tbl_classTime_entry_Data = array(
            'ClassTime_Name'     => $ClassTime_Name,
            'ClassTime_Status'     => $publishStatus
        );
        $this->db->insert('tbl_classtime', $tbl_classTime_entry_Data);
        echo '<pre>',print_r($tbl_division_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_classTime() {
    	$id                 = $this->input->post('editID');
		$ClassTime_Name       = $this->input->post('stnameEdit');
		$ClassTime_Status      = $this->input->post('pubstatusEdit');

		$this->db->trans_start();
        $tbl_classTime_updateData = array(
            'ClassTime_Name'   => $ClassTime_Name,
            'ClassTime_Status'   => $Class_Status
        );
        $this->db->where('ClassTime_ID', $id);
		$this->db->update('tbl_classTime', $tbl_classTime_updateData); 
        //echo '<pre>',print_r($tbl_division_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('ClassTime_ID', $Eid);
        $this->db->delete('tbl_classTime');
    }





    
}