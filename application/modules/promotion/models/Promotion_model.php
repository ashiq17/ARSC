<?php
class Promotion_model extends CI_Model {

    function __construct()
    {
     parent::__construct();
    }


  public function all_student_finding_summary(){
      $Query = "SELECT tbl_student.*, COUNT(tbl_student.Std_ID) as total_student, tbl_class.Class_Name ,tbl_section.Section_Name,tbl_group.Group_Name 
            FROM  tbl_student
            LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
            LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
            LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
        Where tbl_student.Std_status = 1 ";
       $Query .= " GROUP BY tbl_student.Std_class_ID, tbl_student.Std_section_ID";
            $query_result = $this->db->query($Query)->result_array();
           
      // echo "<pre>"; print_r($query_result); echo "</pre>";die();
          return $query_result;
     }  

      public function get_classData() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1  AND Class_Status=1";
        $query_result = $this->db->query($Query)->result();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
      }

      public function get_sectionData() {
        $Query = "SELECT * FROM tbl_section
            WHERE 1=1  AND Section_Status=1";
        $query_result = $this->db->query($Query)->result(); 
        return $query_result;
      }

      public function get_groupData() {
        $Query = "SELECT *
            FROM tbl_group
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();  
        return $query_result;
      }

      public function get_exam_nameData() {
        $Query = "SELECT * FROM tbl_exam_term
            WHERE 1=1  AND Exam_term_Status=1";
        $query_result = $this->db->query($Query)->result();   
        // $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
      } 
      //   public function get_exam_nameData1() {
      //   $Query = "SELECT * FROM tbl_exam_term
      //       WHERE 1=1  AND Exam_term_Status=1";
      //   $query_result = $this->db->query($Query)->result_array();   
      //   // echo '<pre>',print_r($query_result),'</pre>';die();
      //   return $query_result;
      // }


      public function update_promotion_creation(){
            // echo "<pre>";print_r($_POST);echo "</pre>";die();
          $Std_Name           = isset($_POST['Std_Name']) ? $this->input->post('Std_Name') : '';
          $STD_UNQ_ID         = isset($_POST['STD_UNQ_ID']) ? $this->input->post('STD_UNQ_ID') : '';
          $Std_roll           = isset($_POST['Std_roll']) ? $this->input->post('Std_roll') : '';
          $P_Class_ID         = isset($_POST['P_Class_ID']) ? $this->input->post('P_Class_ID') : '';
          $P_Section_ID       = isset($_POST['P_Section_ID']) ? $this->input->post('P_Section_ID') : '';
          $P_Group_ID         = isset($_POST['P_Group_ID']) ? $this->input->post('P_Group_ID') : '';
          $P_Std_medium_ID    = isset($_POST['P_Std_medium_ID']) ? $this->input->post('P_Std_medium_ID') : '';
          $P_Std_shift_ID     = isset($_POST['P_Std_shift_ID']) ? $this->input->post('P_Std_shift_ID') : '';
          $promotion_status   = isset($_POST['promotion_status']) ? $this->input->post('promotion_status') : '';
        
          $Student_count     = count($Std_Name);
          // $today            = date('d-m-Y');
          for ($i=0; $i < $Student_count; $i++) { 
            if($promotion_status[$i]==1){
             $promotion_info = array(
                 'STD_UNQ_ID'                 => $STD_UNQ_ID[$i],
                 'Std_Name'                   => $Std_Name[$i],
                 'Std_roll'                   => $Std_roll[$i],
                 'Std_class_ID'               => trim($P_Class_ID[$i]),
                 'Std_group_ID'               => trim($P_Group_ID[$i]),
                 'Std_section_ID'             => trim($P_Section_ID[$i]),
                 'Std_medium_ID'              => trim($P_Std_medium_ID[$i]),
                 'Std_shift_ID'               => trim($P_Std_shift_ID[$i]),
                 'Std_Promotion_Status'       => trim($promotion_status[$i]),
                 'Created'                    => date("d-m-Y H:i:s"),
             );
                
             $this->db->where('STD_UNQ_ID',$STD_UNQ_ID[$i]);
            $this->db->update('tbl_student',$promotion_info);
             }
          }
        }
    
      public function print_exam_report_all_finding(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();

            $class              = $this->input->post('Std_class_ID');
            $section            = $this->input->post('Std_section_ID');
            $group              = $this->input->post('Std_group_ID');
            $shift              = $this->input->post('Std_shift_ID');
            $medium              = $this->input->post('Std_medium_ID');
            $STD_UNQ_ID          = $this->input->post('STD_UNQ_ID');
          
            $student_status      = $this->input->post('student_status');

        $Query="SELECT tbl_stu_marks_input.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_student.Std_Name,tbl_student.Std_gender,tbl_student.STD_UNQ_ID,tbl_student.Std_parent_mobile,tbl_student.Std_email,tbl_student.Std_medium_ID,tbl_student.Std_shift_ID,tbl_student.Std_roll
            
              FROM tbl_stu_marks_input 
              LEFT JOIN tbl_student  on tbl_stu_marks_input.Marks_stu_UNQ_ID =tbl_student.STD_UNQ_ID
              -- LEFT JOIN tbl_student  on tbl_stu_marks_input.Std_Attendance_NameID =tbl_student.Std_ID
              LEFT JOIN tbl_class   on tbl_stu_marks_input.Marks_stu_class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_stu_marks_input.Marks_stu_section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_stu_marks_input.Marks_stu_group_ID =tbl_group.Group_ID
            WHERE 1=1 ";

            if(!empty($_POST['Std_medium_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_medium_ID=$medium";
            }
            if(!empty($_POST['Std_shift_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_shift_ID=$shift";
            }
            if(!empty($_POST['Std_class_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_class_ID=$class";
            }
            if(!empty($_POST['Std_section_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_section_ID=$section";
            }
            if(!empty($_POST['Std_group_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_group_ID=$group";
            }
            if(!empty($_POST['STD_UNQ_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_UNQ_ID=$STD_UNQ_ID";
            }
                
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    }

    public function print_exam_report_single_finding(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();
            $class              = $this->input->post('Std_class_ID');
            $section            = $this->input->post('Std_section_ID');
            $group              = $this->input->post('Std_group_ID');
            $shift              = $this->input->post('Std_shift_ID');
            $medium              = $this->input->post('Std_medium_ID');
            $STD_UNQ_ID          = $this->input->post('STD_UNQ_ID');
          
            $Exam_term_ID      = $this->input->post('Exam_term_ID');

      
        $Query="SELECT tbl_stu_marks_input.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_student.Std_Name,tbl_student.Std_gender,tbl_student.STD_UNQ_ID,tbl_student.Std_parent_mobile,tbl_student.Std_email,tbl_student.Std_medium_ID,tbl_student.Std_shift_ID,tbl_student.Std_roll,tbl_student.Image,Std_roll,tbl_student.Std_parent, tbl_subject.Subject_Name
            
              FROM tbl_stu_marks_input 
              LEFT JOIN tbl_student  on tbl_stu_marks_input.Marks_stu_UNQ_ID =tbl_student.STD_UNQ_ID
              -- LEFT JOIN tbl_student  on tbl_stu_marks_input.Std_Attendance_NameID =tbl_student.Std_ID
              LEFT JOIN tbl_class   on tbl_stu_marks_input.Marks_stu_class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_stu_marks_input.Marks_stu_section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_stu_marks_input.Marks_stu_group_ID =tbl_group.Group_ID
              LEFT JOIN tbl_subject   on tbl_stu_marks_input.Marks_stu_sub_code_ID =tbl_subject.Subject_ID
            WHERE 1=1 

           AND tbl_stu_marks_input.Marks_stu_UNQ_ID = $STD_UNQ_ID ";


            if(!empty($_POST['Std_medium_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_medium_ID=$medium";
            }
            if(!empty($_POST['Std_shift_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_shift_ID=$shift";
            }
            if(!empty($_POST['Std_class_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_class_ID=$class";
            }
            if(!empty($_POST['Std_section_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_section_ID=$section";
            }
            if(!empty($_POST['Std_group_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_group_ID=$group";
            }
            if(!empty($_POST['STD_UNQ_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_UNQ_ID=$STD_UNQ_ID";
            }
            if(!empty($_POST['Exam_term_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_exam_code_ID=$Exam_term_ID";
            }
           
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    }



    
}