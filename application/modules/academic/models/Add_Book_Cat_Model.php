<?php
class Add_Book_Cat_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }


    public function get_bookcatData() {
    	$Query = "SELECT * FROM tbl_book_category
            WHERE 1=1  ORDER BY Book_cat_ID ASC";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

    public function upload_new_book_cat() {
        $Class_Name       = $this->input->post('Book_cat_Name');
		$publishStatus      = $this->input->post('pubstatus');

		$this->db->trans_start();
        $tbl_book_cat_entry_Data = array(
            'Book_cat_Name'     => $Class_Name,
            'Book_cat_Status'     => $publishStatus
        );
        $this->db->insert('tbl_book_category', $tbl_book_cat_entry_Data);
        //echo '<pre>',print_r($tbl_division_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_bookId() {
    	$id                 = $this->input->post('editID');
		$Class_Name         = $this->input->post('stnameEdit');
		$Class_Status       = $this->input->post('pubstatusEdit');

		$this->db->trans_start();
        $tbl_book_cat_updateData = array(
            'Book_cat_Name'   => $Class_Name,
            'Book_cat_Status'   => $Class_Status
        );
        $this->db->where('Book_cat_ID', $id);
		$this->db->update('tbl_book_category', $tbl_book_cat_updateData); 
        //echo '<pre>',print_r($tbl_division_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Book_cat_ID', $Eid);
        $this->db->delete('tbl_book_category');
    }





    
}