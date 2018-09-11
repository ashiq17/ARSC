<?php
class Add_fees_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // $this->load->library('Facebook');
		
    }

    public function get_add_feeData() {
        $Query = "SELECT * FROM tbl_addfee
            WHERE 1=1  ORDER BY Add_fee_ID ASC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

    public function upload_new_class() {
        $Add_fee_Name       = $this->input->post('Add_fee_Name');
        $publishStatus      = $this->input->post('pubstatus');

        $this->db->trans_start();
        $tbl_addfee_entry_Data = array(
            'Add_fee_Name'     => $Add_fee_Name,
            'Add_fee_Status'     => $publishStatus
        );
        $this->db->insert('tbl_addfee', $tbl_addfee_entry_Data);
        //echo '<pre>',print_r($tbl_division_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_add_fees() {
        $id                 = $this->input->post('editID');
        $Add_fee_Name       = $this->input->post('stnameEdit');
        $Add_fee_Status      = $this->input->post('pubstatusEdit');

        $this->db->trans_start();
        $tbl_addfee_updateData = array(
            'Add_fee_Name'   => $Add_fee_Name,
            'Add_fee_Status'   => $Add_fee_Status
        );
        $this->db->where('Add_fee_ID', $id);
        $this->db->update('tbl_addfee', $tbl_addfee_updateData); 
        //echo '<pre>',print_r($tbl_division_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Add_fee_ID', $Eid);
        $this->db->delete('tbl_addfee');
    }




	
}