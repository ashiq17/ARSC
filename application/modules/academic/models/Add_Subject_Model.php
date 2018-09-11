<?php
class Add_Subject_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }


    public function get_subjectData() {
    	$Query = "SELECT tbl_subject.*, tbl_class.Class_Name,tbl_section.Section_Name, tbl_group.Group_Name,tbl_exam_term.Exam_term_Name
            FROM tbl_subject 
            LEFT JOIN tbl_class  on tbl_subject.Class_ID =tbl_class.Class_ID
            LEFT JOIN tbl_section  on tbl_subject.Section_ID =tbl_section.Section_ID
            LEFT JOIN tbl_group   on tbl_subject.Group_ID =tbl_group.Group_ID
            LEFT JOIN tbl_exam_term   on tbl_subject.Subject_ExamID  = tbl_exam_term.Exam_term_ID
            WHERE 1=1  ORDER BY Subject_ID ASC";
        $query_result = $this->db->query($Query)->result();
        // echo '<pre>',print_r($query_result),'</pre>';
        return $query_result;
    }

    public function adding_new_subject() {
        // echo '<pre>',print_r($_POST),'</pre>'; die();
        
        // die();
        $Subject_Name            = $this->input->post('Subject_Name');
        $Class_ID                = $this->input->post('Class_ID');
        $Section_ID              = $this->input->post('Section_ID');
        $Group_ID                = $this->input->post('Group_ID');
        $Shift_ID                = $this->input->post('Shift_ID');
        $Medium_ID               = $this->input->post('Medium_ID');
        $Subject_Code            = $this->input->post('Subject_Code');
        $Subject_ExamID          = $this->input->post('Subject_ExamID');
        $Subject_Full_Marks      = $this->input->post('Subject_Full_Marks');
        $Subject_CT_Marks        = $this->input->post('Subject_CT_Marks');
        $Subject_MT_Marks        = $this->input->post('Subject_MT_Marks');
        $Subject_CQ_Marks        = $this->input->post('Subject_CQ_Marks');
        $Subject_MCQ_Marks       = $this->input->post('Subject_MCQ_Marks');
        $Subject_Result_Order    = $this->input->post('Subject_Result_Order');
        $Subject_Exam_Status     = $this->input->post('Subject_Exam_Status');
		$publishStatus           = $this->input->post('pubstatus');

		$this->db->trans_start();
        $tbl_subject_entry_Data = array(
            'Subject_Name'              => $Subject_Name,
            'Class_ID'                  => $Class_ID,
            'Section_ID'                => $Section_ID,
            'Group_ID'                  => $Group_ID,
            'Shift_ID'                  => $Shift_ID,
            'Medium_ID'                 => $Medium_ID,
            'Subject_Code'              => $Subject_Code,
            'Subject_ExamID'            => $Subject_ExamID,
            'Subject_Full_Marks'        => $Subject_Full_Marks,
            'Subject_CT_Marks'          => $Subject_CT_Marks,
            'Subject_MT_Marks'          => $Subject_MT_Marks,
            'Subject_CQ_Marks'          => $Subject_CQ_Marks,
            'Subject_MCQ_Marks'         => $Subject_MCQ_Marks,
            'Subject_Result_Order'      => $Subject_Result_Order,
            'Subject_Exam_Status'       => $Subject_Exam_Status,
            'Subject_Status'            => $publishStatus,
            'Subject_Created'           => date("d-m-Y H:i:s"),
            // 'Subject_Modified'          => date("d-m-Y H:i:s"); 
            
        );
        $this->db->insert('tbl_subject', $tbl_subject_entry_Data);
        //echo '<pre>',print_r($tbl_division_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_subject() {
        // echo '<pre>',print_r($_POST),'</pre>'; die();
    
    	$id                   = $this->input->post('editID');
		$Subject_Name         = $this->input->post('stnameEdit');
        $Class_ID             = $this->input->post('Class_ID');
        $Section_ID           = $this->input->post('Section_ID');
        $Group_ID             = $this->input->post('Group_ID');
        $Shift_ID             = $this->input->post('Shift_ID');
        $Medium_ID            = $this->input->post('Medium_ID');
        $Subject_Code         = $this->input->post('sub_codeEdit');
        $Subject_ExamID       = $this->input->post('Subject_ExamID');
        $Subject_Full_Marks   = $this->input->post('Subject_Full_Marks');
        $Subject_CT_Marks     = $this->input->post('Subject_CT_Marks');
        $Subject_MT_Marks     = $this->input->post('Subject_MT_Marks');
        $Subject_CQ_Marks     = $this->input->post('Subject_CQ_Marks');
        $Subject_MCQ_Marks    = $this->input->post('Subject_MCQ_Marks');
        $Subject_Result_Order = $this->input->post('Subject_Result_Order');
        $Subject_Exam_Status  = $this->input->post('Subject_Exam_Status');
      
		$Subject_Status       = $this->input->post('pubstatusEdit');

		$this->db->trans_start();
        $tbl_subject_updateData = array(
            'Subject_Name'              => $Subject_Name,
            'Class_ID'                  => $Class_ID,
            'Section_ID'                => $Section_ID,
            'Group_ID'                  => $Group_ID,
            'Shift_ID'                  => $Shift_ID,
            'Medium_ID'                 => $Medium_ID,
            'Subject_Code'              => $Subject_Code,
            'Subject_ExamID'            => $Subject_ExamID,
            'Subject_Full_Marks'        => $Subject_Full_Marks,
            'Subject_CT_Marks'          => $Subject_CT_Marks,
            'Subject_MT_Marks'          => $Subject_MT_Marks,
            'Subject_CQ_Marks'          => $Subject_CQ_Marks,
            'Subject_MCQ_Marks'         => $Subject_MCQ_Marks,
            'Subject_Result_Order'      => $Subject_Result_Order,
            'Subject_Exam_Status'       => $Subject_Exam_Status,
            'Subject_Status'            => $Subject_Status,
            'Subject_Modified'          => date("d-m-Y H:i:s")
        );
        $this->db->where('Subject_ID', $id);
		$this->db->update('tbl_subject', $tbl_subject_updateData); 
        //echo '<pre>',print_r($tbl_division_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Subject_ID', $Eid);
        $this->db->delete('tbl_subject');
    }


    public function get_classDat() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1  AND Class_Status=1";
        $query_result = $this->db->query($Query)->result_array();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }
    public function get_examData() {
        $Query = "SELECT * FROM tbl_exam_term
            WHERE 1=1  AND Exam_term_Status=1"

            ;
        $query_result = $this->db->query($Query)->result_array();

        // echo '<prev(array)>',print_r($query_result), echo '</pre>'; die();
        return $query_result;
    }

       public function get_sectionDat() {
        $Query = "SELECT * FROM tbl_section
            WHERE 1=1  AND Section_Status=1";
        $query_result = $this->db->query($Query)->result_array();

        return $query_result;
        // echo '<pre>',print_r($query_result),'</pre>';
    } 

       public function get_groupDat() {
        $Query = "SELECT * FROM tbl_group
            WHERE 1=1  AND Group_status=1";
        $query_result = $this->db->query($Query)->result_array();

        return $query_result;
        // echo '<pre>',print_r($query_result),'</pre>';
    }




    
}