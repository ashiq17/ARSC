<?php
class Add_invoice_type_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // $this->load->library('Facebook');
		
    }

    public function get_add_invoiceData() {
        $Query = "SELECT * FROM tbl_invoice_type
            WHERE 1=1  ORDER BY Invoice_type_ID ASC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

    public function upload_new_invoice_type() {
        $Invoice_type_Name       = $this->input->post('Invoice_type_Name');
        $publishStatus      = $this->input->post('pubstatus');

        $this->db->trans_start();
        $tbl_addfee_entry_Data = array(
            'Invoice_type_Name'     => $Invoice_type_Name,
            'Invoice_Status'     => $publishStatus
        );
        $this->db->insert('tbl_invoice_type', $tbl_addfee_entry_Data);
        // echo '<pre>',print_r($tbl_division_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_add_invoice_type() {
        $id                 = $this->input->post('editID');
        $Invoice_type_Name       = $this->input->post('stnameEdit');
        $Invoice_Status      = $this->input->post('pubstatusEdit');

        $this->db->trans_start();
        $tbl_addfee_updateData = array(
            'Invoice_type_Name'   => $Invoice_type_Name,
            'Invoice_Status'   => $Invoice_Status
        );
        $this->db->where('Invoice_type_ID', $id);
        $this->db->update('tbl_invoice_type', $tbl_addfee_updateData); 
        // echo '<pre>',print_r($tbl_addfee_updateData),'</pre>';
        // die();
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Invoice_type_ID', $Eid);
        $this->db->delete(' tbl_invoice_type');
    }




	
}