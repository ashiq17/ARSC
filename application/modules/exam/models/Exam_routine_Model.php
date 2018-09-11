<?php
class Exam_routine_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();	
    }


    //  public function get_Group_name() {
    //     $Query = "SELECT * FROM tbl_group
    //         WHERE 1=1 ";
    //     $query_result = $this->db->query($Query)->result();

    //     // echo '<pre>',print_r($query_result),'</pre>';die();
    //     return $query_result;
    // }

    public function get_classData() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1  AND Class_Status=1";
        $query_result = $this->db->query($Query)->result();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
        
    }

     public function get_sectionData() {
        $Query = "SELECT tbl_section.*,  tbl_class.Class_Name as C_Name
            FROM tbl_section
            LEFT JOIN tbl_class ON tbl_class.Class_ID = tbl_section.Section_class_ID
            WHERE 1=1 ORDER BY tbl_section.Section_ID ASC";
        $query_result = $this->db->query($Query)->result();
        // echo '<pre>',print_r($query_result),'</pre>'; die();
        return $query_result;
    }

    // public function get_sectionData() {
    //     $Query = "SELECT * 
    //       FROM tbl_section
    //         WHERE 1=1  
    //         -- AND Section_Status=1";
    //     $query_result = $this->db->query($Query)->result();   
    //     echo '<pre>',print_r($query_result),'</pre>';die();
    //     return $query_result;
    // }
    public function get_groupData() {
        $Query = "SELECT *
            FROM tbl_group
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();  
        // echo '<pre>',print_r($query_result),'</pre>'; die();
        return $query_result;
    }
    public function get_exam_nameData() {
        $Query = "SELECT * FROM tbl_exam_term
            WHERE 1=1  AND Exam_term_Status=1";
        $query_result = $this->db->query($Query)->result();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }


    public function get_invoice_typeData() {
        $Query = "SELECT * FROM tbl_invoice_type
            WHERE 1=1  AND Invoice_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }
    public function get_add_fee_categoryData() {
        $Query = "SELECT * FROM tbl_addfee
            WHERE 1=1  AND Add_fee_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }


      public function insert_exam_routine(){

           // echo "<pre>";print_r($_POST);echo "</pre>";
          // echo "<pre>";print_r($Class_ID);echo "</pre>";
           // die();
         
          $exam_unique_id   = isset($_POST['Exam_term_ID']) ? $this->input->post('Exam_term_ID') : '';
          $Class_ID         = isset($_POST['Class_ID']) ? $this->input->post('Class_ID') : '';
          $Group_ID         = isset($_POST['Group_ID']) ? $this->input->post('Group_ID') : '';
          $Section_ID       = isset($_POST['Section_ID']) ? $this->input->post('Section_ID') : '';
          $Medium_ID        = isset($_POST['Medium_ID']) ? $this->input->post('Medium_ID') : '';
          $Shift_ID         = isset($_POST['Shift_ID']) ? $this->input->post('Shift_ID') : '';
          $Subject_Name     = isset($_POST['Subject_Name']) ? $this->input->post('Subject_Name') : '';
          // $Subject_ID       = isset($_POST['Subject_ID']) ? $this->input->post('Subject_ID') : '';
          $Subject_Code     = isset($_POST['Subject_Code']) ? $this->input->post('Subject_Code') : '';
          $exam_date        = isset($_POST['exam_date']) ? $this->input->post('exam_date') : '';
          $exam_day         = isset($_POST['exam_day']) ? $this->input->post('exam_day') : '';
          $exam_start_time  = isset($_POST['exam_start_time']) ? $this->input->post('exam_start_time') : '';
          $exam_end_time    = isset($_POST['exam_end_time']) ? $this->input->post('exam_end_time') : '';
          $exam_invigilator_name= isset($_POST['exam_invigilator_name']) ? $this->input->post('exam_invigilator_name') : '';
          $exam_room_no     = isset($_POST['exam_room_no']) ? $this->input->post('exam_room_no') : '';
          $Subject_Name_count     = count($Subject_Name);
          $today            = date('d-m-Y');
 // echo "<pre>";print_r($Subject_Name);echo "</pre>";die();
          for ($i=0; $i < $Subject_Name_count; $i++) { 
             $data = array(
          
                 'Exam_routine_UNQ_ID'          => $exam_unique_id,
                 'Exam_routine_Class_ID'        => trim($Class_ID[$i]),
                 'Exam_routine_Group_ID'        => trim($Group_ID[$i]),
                 'Exam_routine_Section_ID'      => trim($Section_ID[$i]),
                 'Exam_routine_Medium_ID'       => trim($Medium_ID[$i]),
                 'Exam_routine_Shift_ID'        => trim($Shift_ID[$i]),
                 'Exam_routine_Subject_Name'    => trim($Subject_Name[$i]),
                 'Exam_routine_Subject_Code'    => trim($Subject_Code[$i]),
                 'Exam_routine_Exam_Date'       => trim($exam_date[$i]),
                 'Exam_routine_Exam_Day'        => trim($exam_day[$i]),
                 'Exam_routine_Exam_Start_Time' => trim($exam_start_time[$i]),
                 'Exam_routine_Exam_End_Time'   => trim($exam_end_time[$i]),
                 'Exam_routine_Invigilator_Name'=> trim($exam_invigilator_name[$i]),
                 'Exam_routine_Room_Name'       => trim($exam_room_no[$i]),
                 'Created'                      => date("d-m-Y H:i:s"),
             );
                
             $str = $this->db->insert_string("tbl_exam_routine", $data);
             $query = $this->db->query($str);
          }
    }




  public function print_exam_routine_all_finding(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();

            $class              = $this->input->post('Std_class_ID');
            $section            = $this->input->post('Std_section_ID');
            $group              = $this->input->post('Std_group_ID');
            $medium             = $this->input->post('Std_medium_ID');
            $shift              = $this->input->post('Std_shift_ID');
            $Exam_term_ID          = $this->input->post('Exam_term_ID');

        $Query="SELECT tbl_exam_routine.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_exam_term.Exam_term_Name
              FROM tbl_exam_routine 
              LEFT JOIN tbl_class   on tbl_exam_routine.Exam_routine_Class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_exam_routine.Exam_routine_Section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_exam_routine.Exam_routine_Group_ID =tbl_group.Group_ID  
              LEFT JOIN tbl_exam_term   on tbl_exam_routine.Exam_routine_UNQ_ID =tbl_exam_term.Exam_term_ID
            
            WHERE 1=1 
           AND Exam_term_ID=2
           "

            ;

            if(!empty($_POST['Std_class_ID'])) {
                $Query .= " AND tbl_exam_routine.Exam_routine_Class_ID=$class";
            }
            if(!empty($_POST['Std_section_ID'])) {
                $Query .= " AND tbl_exam_routine.Exam_routine_Section_ID=$section";
            }
            if(!empty($_POST['Std_group_ID'])) {
                $Query .= " AND tbl_exam_routine.Exam_routine_Group_ID=$group";
            }
            // if(!empty($_POST['Exam_term_ID'])) {
            //     $Query .= " AND tbl_exam_routine.Exam_routine_UNQ_ID=2";
            // }

            if(!empty($_POST['Std_medium_ID'])) {
                $Query .= " AND tbl_exam_routine.Exam_routine_Medium_ID=$medium";
            }
            if(!empty($_POST['Std_shift_ID'])) {
                $Query .= " AND tbl_exam_routine.Exam_routine_Shift_ID=$shift";
            }
             
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    }

    


public function get_header_data(){
        $query = "SELECT * 
                  FROM tbl_header 
                  WHERE 1=1 AND HeaderID=1";
        $query_result = $this->db->query($query)->result_array();
        // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
    }
  public function get_footer_data(){
        $query = "SELECT *
                  FROM tbl_footer 
                  WHERE 1=1 AND FooterID=1";
        $query_result = $this->db->query($query)->result_array();
        return $query_result;
    }










    }










     


   


