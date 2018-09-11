<?php
class Add_Expense_Cat_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }


    public function get_expensecatData() {
    	$Query = "SELECT * FROM tbl_expense_cat
            WHERE 1=1  ORDER BY expense_cat_ID ASC";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

    public function upload_new_expense_cat() {
        $Expense_Name       = $this->input->post('expense_cat_Name');
		$publishStatus      = $this->input->post('pubstatus');

		$this->db->trans_start();
        $tbl_expense_cat_entry_Data = array(
            'expense_cat_Name'     => $Expense_Name,
            'expense_cat_Status'   => $publishStatus
        );
        $this->db->insert('tbl_expense_cat', $tbl_expense_cat_entry_Data);
        //echo '<pre>',print_r($tbl_division_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_expenseId() {
    //        print_r($_POST);
    // die();
    	$id                 = $this->input->post('editID');
		$Expense_Name         = $this->input->post('stnameEdit');
		$Expense_Status       = $this->input->post('pubstatusEdit');

		$this->db->trans_start();
        $tbl_expense_cat_updateData = array(
            'expense_cat_Name'   => $Expense_Name,
            'expense_cat_Status'   => $Expense_Status
        );
        $this->db->where('expense_cat_ID', $id);
		$this->db->update('tbl_expense_cat', $tbl_expense_cat_updateData); 
        // echo '<pre>',print_r($tbl_division_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('expense_cat_ID', $Eid);
        $this->db->delete('tbl_expense_cat');
    }





    
}