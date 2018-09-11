<?php
class Add_Exam_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }


    public function get_examData() {
    	$Query = "SELECT * FROM tbl_exam_term
            WHERE 1=1  ORDER BY Exam_term_ID ASC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

    public function upload_new_exam() {
        $Exam_term_Name       = $this->input->post('Exam_term_Name');
        $Exam_term_Name_Result       = $this->input->post('Exam_term_Name_Result');
		$publishStatus      = $this->input->post('pubstatus');

		$this->db->trans_start();
        $tbl_exam_entry_Data = array(
            'Exam_term_Name'     => $Exam_term_Name,
            'Exam_term_Name_Result'     => $Exam_term_Name_Result,
            'Exam_term_Status'     => $publishStatus
        );
        $this->db->insert('tbl_exam_term', $tbl_exam_entry_Data);
        //echo '<pre>',print_r($tbl_division_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_exam() {
    	$id                 = $this->input->post('editID');
        $Exam_term_Name       = $this->input->post('stnameEdit');
		$Exam_term_Name_Result       = $this->input->post('Exam_term_Name_Result');
		$Exam_term_Status      = $this->input->post('pubstatusEdit');

		$this->db->trans_start();
        $tbl_exam_updateData = array(
            'Exam_term_Name'   => $Exam_term_Name,
            'Exam_term_Name_Result'     => $Exam_term_Name_Result,
            'Exam_term_Status'   => $Exam_term_Status
        );
        $this->db->where('Exam_term_ID', $id);
		$this->db->update('tbl_exam_term', $tbl_exam_updateData); 
        //echo '<pre>',print_r($tbl_division_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Exam_term_ID', $Eid);
        $this->db->delete('tbl_exam_term');
    }





    
}