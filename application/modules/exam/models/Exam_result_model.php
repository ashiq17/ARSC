<?php
class Exam_result_model extends CI_Model {

   
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
             // $Query .= " GROUP BY tbl_student.Std_class_ID, tbl_student.Std_section_ID";
            $query_result = $this->db->query($Query)->result_array();
               
            // echo "<pre>"; print_r($query_result); echo "</pre>";die();
            return $query_result;
         }  

    public function all_student_finding_unique_id(){
		  $Query = "SELECT  tbl_student.STD_UNQ_ID
            FROM  tbl_student
            
		   	Where tbl_student.Std_status = 1 ";
			 // $Query .= " GROUP BY tbl_student.Std_class_ID, tbl_student.Std_section_ID";
            $query_result = $this->db->query($Query)->result_array();
		       
			// echo "<pre>"; print_r($query_result); echo "</pre>";die();
	        return $query_result;
		 }	


   	public function get_Class_name() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
       
    } 

    public function get_Section_name() {
        $Query = "SELECT * FROM tbl_section
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();

        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }
    public function get_Group_name() {
        $Query = "SELECT * FROM tbl_group
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();

        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }
     public function get_yearData() {
        $Query = "SELECT * FROM tbl_year
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();

        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }

    public function get_classData() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1  AND Class_Status=1";
        $query_result = $this->db->query($Query)->result();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
        
    }

      function get_all_query_row_countall($search = NULL)
    {
        $str = "SELECT COUNT(Std_ID) as ts FROM tbl_student WHERE Std_status='1'";
        $query=$this->db->query($str);

        return $query->result();
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
        // $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
      } 
       public function find_exam_name(){
         $Exam_term_ID       = $this->input->post('Exam_term_ID');
        $str = "SELECT  tbl_exam_term.Exam_term_Name_Result
                  FROM tbl_exam_term 
                  WHERE 1=1
                 AND Exam_term_ID='$Exam_term_ID'
                 ";
        $exam_name_result=$this->db->query($str)->result_array();
        return $exam_name_result;
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


            $Query="SELECT *
                  FROM tbl_student 
                  LEFT JOIN tbl_class   on tbl_student.Std_class_ID =tbl_class.Class_ID
                  LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
                  LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
                WHERE 1=1 ";

            if(!empty($_POST['Std_medium_ID'])) {
                $Query .= " AND tbl_student.Std_medium_ID=$medium";
            }
            if(!empty($_POST['Std_shift_ID'])) {
                $Query .= " AND tbl_student.Std_shift_ID=$shift";
            }
            if(!empty($_POST['Std_class_ID'])) {
                $Query .= " AND tbl_student.Std_class_ID=$class";
            }
            if(!empty($_POST['Std_section_ID'])) {
                $Query .= " AND tbl_student.Std_section_ID=$section";
            }
            if(!empty($_POST['Std_group_ID'])) {
                $Query .= " AND tbl_student.Std_group_ID=$group";
            }
            if(!empty($_POST['STD_UNQ_ID'])) {
                $Query .= " AND tbl_student.STD_UNQ_ID=$STD_UNQ_ID";
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
            $medium             = $this->input->post('Std_medium_ID');
            $STD_UNQ_ID         = $this->input->post('STD_UNQ_ID');
            $Exam_term_ID       = $this->input->post('Exam_term_ID');
      
        $Query="SELECT tbl_stu_marks_input.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_student.Std_Name,tbl_student.Std_gender,tbl_student.STD_UNQ_ID,tbl_student.Std_parent_mobile,tbl_student.Std_email,tbl_student.Std_medium_ID,tbl_student.Std_shift_ID,tbl_student.Std_roll,tbl_student.Image,tbl_student.Std_roll,tbl_student.Std_parent, tbl_subject.Subject_Name,tbl_subject.Subject_Result_Order,tbl_exam_term.Exam_term_Name_Result
            
              FROM tbl_stu_marks_input 
              LEFT JOIN tbl_student  on tbl_stu_marks_input.Marks_stu_UNQ_ID =tbl_student.STD_UNQ_ID
              LEFT JOIN tbl_exam_term  on tbl_stu_marks_input.Marks_stu_exam_code_ID =tbl_exam_term.Exam_term_ID
              LEFT JOIN tbl_class   on tbl_stu_marks_input.Marks_stu_class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_stu_marks_input.Marks_stu_section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_stu_marks_input.Marks_stu_group_ID =tbl_group.Group_ID
              LEFT JOIN tbl_subject   on tbl_stu_marks_input.Marks_stu_sub_code_ID =tbl_subject.Subject_ID
            WHERE 1=1 
           AND tbl_stu_marks_input.Marks_stu_UNQ_ID = $STD_UNQ_ID 
          
           ";
           
            if(!empty($_POST['STD_UNQ_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_UNQ_ID=$STD_UNQ_ID";
            }
            if(!empty($_POST['Exam_term_ID'])) {
                $Query .= " AND tbl_stu_marks_input.Marks_stu_exam_code_ID=$Exam_term_ID";
            }
            $Query .= " ORDER BY tbl_subject.Subject_Result_Order ASC";
        $query_result = $this->db->query($Query)->result_array();
        // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    }

    function find_sub_highest_marks($subject_id='',$exam_code_ID='',$class_ID='',$medium_ID='',$shift_ID='',$section_ID=''){
        $Query = "SELECT MAX(Marks_stu_sub_total_marks) as sub_highest_marks
        FROM tbl_stu_marks_input
        WHERE 1=1";

        if(!empty($subject_id)) {
            $Query .= " AND tbl_stu_marks_input.Marks_stu_sub_code_ID=$subject_id";
        }
        if(!empty($exam_code_ID)) {
            $Query .= " AND tbl_stu_marks_input.Marks_stu_exam_code_ID=$exam_code_ID";
        }
        if(!empty($class_ID)) {
            $Query .= " AND tbl_stu_marks_input.Marks_stu_class_ID=$class_ID";
        }
        if(!empty($medium_ID)) {
            $Query .= " AND tbl_stu_marks_input.Marks_stu_medium_ID=$medium_ID";
        }
        if(!empty($shift_ID)) {
            $Query .= " AND tbl_stu_marks_input.Marks_stu_shift_ID=$shift_ID";
        }
        if(!empty($section_ID)) {
            $Query .= " AND tbl_stu_marks_input.Marks_stu_section_ID=$section_ID";
        }
        $query_result = $this->db->query($Query)->result_array();  
         // echo "<pre>"; print_r($query_result); echo "</pre>"; 
        return $query_result;
    }

    public function class_wise_subject($class='',$section=''){
        $Query = "SELECT * FROM tbl_subject
            WHERE 1=1  AND Class_ID=$class" ;
        $query_result = $this->db->query($Query)->result_array();  
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result;
    }



    
}