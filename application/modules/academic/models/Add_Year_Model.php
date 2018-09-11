<?php
class Add_Year_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();	
    }


    public function get_yearData() {
    	$Query = "SELECT * FROM tbl_year
            WHERE 1=1  ORDER BY Year_ID ASC";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
    }

    public function upload_new_year() {
        $Year_Name       = $this->input->post('Year_Name');
		$publishStatus      = $this->input->post('pubstatus');

		$this->db->trans_start();
        $tbl_year_entry_Data = array(
            'Year_Name'     => $Year_Name,
            'Year_status'     => $publishStatus
        );
        $this->db->insert('tbl_year', $tbl_year_entry_Data);
        $this->db->trans_complete();
    }

    public function update_year() {
    	$id                 = $this->input->post('editID');
		$Year_Name       = $this->input->post('stnameEdit');
		$Year_status      = $this->input->post('pubstatusEdit');

		$this->db->trans_start();
        $tbl_year_updateData = array(
            'Year_Name'   => $Year_Name,
            'Year_status'   => $Year_status
        );
        $this->db->where('Year_ID', $id);
		$this->db->update('tbl_year', $tbl_year_updateData); 
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Year_ID', $Eid);
        $this->db->delete('tbl_year');
    }





    
}