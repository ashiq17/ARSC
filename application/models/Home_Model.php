<?php
class Home_Model extends CI_Model {

     public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
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

    // student result login start here


  function gets_all_users(){
    $query = "select tbl_user.UserID, tbl_user.EmployeeId, tbl_user.Email,tbl_user.UserName,tbl_user.FullName, tbl_user.Password, tbl_user.Status, tbl_user.RoleID,tbl_roles.role_name
          from tbl_user
            LEFT JOIN tbl_roles ON  tbl_user.RoleID=tbl_roles.id";
    $result = $this->db->query($query)->result();
    return $result;
  }

  function gets_all_info($EmployeeId){


    $Query = "SELECT tbl_student.*, tbl_class.Class_Name,tbl_section.Section_Name
              FROM tbl_student 
              LEFT JOIN tbl_class   on tbl_student.Std_class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section   on tbl_student.Std_section_ID =tbl_section.Section_ID
              WHERE 1=1
               and STD_UNQ_ID=$EmployeeId
                  ";

    // $query = "select*
    //       from tbl_student
    //       where 1=1
    //        LEFT JOIN tbl_class   on tbl_student.Std_class_ID =tbl_class.Class_ID
    //       and STD_UNQ_ID=$EmployeeId
    //         ";
    $result_array = $this->db->query($Query)->result_array();
      // echo "<pre>";print_r($result_array);echo "</pre>"; die();
    return $result_array;
  }
    // student result login end here

    
    public function all_student_finding_unique_id(){
      $Query = "SELECT  tbl_student.STD_UNQ_ID
            FROM  tbl_student
            
        Where tbl_student.Std_status = 1 ";
       // $Query .= " GROUP BY tbl_student.Std_class_ID, tbl_student.Std_section_ID";
            $query_result = $this->db->query($Query)->result_array();
           
      // echo "<pre>"; print_r($query_result); echo "</pre>";die();
          return $query_result;
     }  

     

    public function get_notification_to_all(){
      $Query = "SELECT *
                  FROM tbl_notice_publish
                  WHERE 1=1 
                  ";
       $query_result = $this->db->query($Query)->result_array();
        // echo "<pre>"; print_r($query_result); echo "</pre>";die();
       return $query_result; 
    }

    public function get_top_student(){
      $Query = "SELECT tbl_student.*, tbl_class.Class_Name
              FROM tbl_student 
              LEFT JOIN tbl_class   on tbl_student.Std_class_ID =tbl_class.Class_ID
              WHERE 1=1 and  tbl_student.Std_roll=01
                  ";
       $query_result = $this->db->query($Query)->result_array();
       return $query_result; 
    }


    // shanto start   here
    // ==============shanto Contact start here=============///
    // ==============shanto Contact end here===============///
    // ==============shanto blog author find start here====///
   
    public function all_author_published_blog_finding(){
        $Query = "SELECT * 
                  FROM tbl_blog 
                  WHERE 1=1
                  AND BlogStatus=1 
                  ORDER BY BlogID DESC 
                  ";
        $query_result = $this->db->query($Query)->result_array(); 
        return $query_result;
    }

    public function all_author_published_recent_blog_finding(){
        $Query = "SELECT * 
                  FROM tbl_blog 
                  WHERE 1=1
                  AND BlogStatus=1
                  ORDER BY created ASC  
                  LIMIT 4 ";
        $query_result = $this->db->query($Query)->result_array();
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

        public function get_groupData1() {
        $Query = "SELECT *
            FROM tbl_group
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();  
        // echo '<pre>',print_r($query_result),'</pre>'; die();
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

      public function find_exam_name(){
         $Exam_term_ID       = $this->input->post('Exam_term_ID');
        $str = "SELECT  tbl_exam_term.Exam_term_Name
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
            $Exam_term_ID       = $this->input->post('Exam_term_ID');
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

        // return array(
        //     'query_result' => $query_result,
        //     'exam_name_result' => $exam_name_result,
        // );
    }

    public function class_wise_subject($class='',$section=''){
        $Query = "SELECT * FROM tbl_subject
            WHERE 1=1  AND Class_ID=$class" ;
        $query_result = $this->db->query($Query)->result_array();  
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result;
    }

     public function print_exam_report_single_finding11(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();
            $class              = $this->input->post('Std_class_ID');
            $section            = $this->input->post('Std_section_ID');
            $group              = $this->input->post('Std_group_ID');
            $shift              = $this->input->post('Std_shift_ID');
            $medium              = $this->input->post('Std_medium_ID');
            $STD_UNQ_ID          = $this->input->post('STD_UNQ_ID');
          
            $Exam_term_ID      = $this->input->post('Exam_term_ID');

      
        $Query="SELECT tbl_stu_marks_input.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_student.Std_Name,tbl_student.Std_gender,tbl_student.STD_UNQ_ID,tbl_student.Std_parent_mobile,tbl_student.Std_email,tbl_student.Std_medium_ID,tbl_student.Std_shift_ID,tbl_student.Std_roll,tbl_student.Image,tbl_student.Std_parent, tbl_subject.Subject_Name
            
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





// public function print_exam_report_single_finding(){
//          // echo '<pre>',print_r($_POST),'</pre>'; die();
//             $class              = $this->input->post('Std_class_ID');
//             $section            = $this->input->post('Std_section_ID');
//             $group              = $this->input->post('Std_group_ID');
//             $shift              = $this->input->post('Std_shift_ID');
//             $medium              = $this->input->post('Std_medium_ID');
//             $STD_UNQ_ID          = $this->input->post('STD_UNQ_ID');
//             $Exam_term_ID      = $this->input->post('Exam_term_ID');
      
//         $Query="SELECT tbl_stu_marks_input.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_student.Std_Name,tbl_student.Std_gender,tbl_student.STD_UNQ_ID,tbl_student.Std_parent_mobile,tbl_student.Std_email,tbl_student.Std_medium_ID,tbl_student.Std_shift_ID,tbl_student.Std_roll,tbl_student.Image,tbl_student.Std_roll,tbl_student.Std_parent, tbl_subject.Subject_Name,tbl_subject.Subject_Result_Order,tbl_exam_term.Exam_term_Name_Result
            
//               FROM tbl_stu_marks_input 
//               LEFT JOIN tbl_student  on tbl_stu_marks_input.Marks_stu_UNQ_ID =tbl_student.STD_UNQ_ID
//               LEFT JOIN tbl_exam_term  on tbl_stu_marks_input.Marks_stu_exam_code_ID =tbl_exam_term.Exam_term_ID
//               LEFT JOIN tbl_class   on tbl_stu_marks_input.Marks_stu_class_ID =tbl_class.Class_ID
//               LEFT JOIN tbl_section  on tbl_stu_marks_input.Marks_stu_section_ID =tbl_section.Section_ID
//               LEFT JOIN tbl_group   on tbl_stu_marks_input.Marks_stu_group_ID =tbl_group.Group_ID
//               LEFT JOIN tbl_subject   on tbl_stu_marks_input.Marks_stu_sub_code_ID =tbl_subject.Subject_ID
//             WHERE 1=1 
//            AND tbl_stu_marks_input.Marks_stu_UNQ_ID = $STD_UNQ_ID 
          
//            ";

//             // if(!empty($_POST['Std_medium_ID'])) {
//             //     $Query .= " AND tbl_stu_marks_input.Marks_stu_medium_ID=$medium";
//             // }
//             // if(!empty($_POST['Std_shift_ID'])) {
//             //     $Query .= " AND tbl_stu_marks_input.Marks_stu_shift_ID=$shift";
//             // }
//             // if(!empty($_POST['Std_class_ID'])) {
//             //     $Query .= " AND tbl_stu_marks_input.Marks_stu_class_ID=$class";
//             // }
//             // if(!empty($_POST['Std_section_ID'])) {
//             //     $Query .= " AND tbl_stu_marks_input.Marks_stu_section_ID=$section";
//             // }
//             // if(!empty($_POST['Std_group_ID'])) {
//             //     $Query .= " AND tbl_stu_marks_input.Marks_stu_group_ID=$group";
//             // }
//             if(!empty($_POST['STD_UNQ_ID'])) {
//                 $Query .= " AND tbl_stu_marks_input.Marks_stu_UNQ_ID=$STD_UNQ_ID";
//             }
//             if(!empty($_POST['Exam_term_ID'])) {
//                 $Query .= " AND tbl_stu_marks_input.Marks_stu_exam_code_ID=$Exam_term_ID";
//             }
//             $Query .= " ORDER BY tbl_subject.Subject_Result_Order ASC";
//         $query_result = $this->db->query($Query)->result_array();
//         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
//         return $query_result; 
//     }



//     function find_sub_highest_marks($subject_id='',$exam_code_ID='',$class_ID='',$medium_ID='',$shift_ID='',$section_ID=''){
//         $Query = "SELECT MAX(Marks_stu_sub_total_marks) as sub_highest_marks
//         FROM tbl_stu_marks_input
//         WHERE 1=1";

//         if(!empty($subject_id)) {
//             $Query .= " AND tbl_stu_marks_input.Marks_stu_sub_code_ID=$subject_id";
//         }
//         if(!empty($exam_code_ID)) {
//             $Query .= " AND tbl_stu_marks_input.Marks_stu_exam_code_ID=$exam_code_ID";
//         }
//         if(!empty($class_ID)) {
//             $Query .= " AND tbl_stu_marks_input.Marks_stu_class_ID=$class_ID";
//         }
//         if(!empty($medium_ID)) {
//             $Query .= " AND tbl_stu_marks_input.Marks_stu_medium_ID=$medium_ID";
//         }
//         if(!empty($shift_ID)) {
//             $Query .= " AND tbl_stu_marks_input.Marks_stu_shift_ID=$shift_ID";
//         }
//         if(!empty($section_ID)) {
//             $Query .= " AND tbl_stu_marks_input.Marks_stu_section_ID=$section_ID";
//         }
//         $query_result = $this->db->query($Query)->result_array();  
//          // echo "<pre>"; print_r($query_result); echo "</pre>"; 
//         return $query_result;
//     }

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
            //$Query .= " ORDER BY tbl_subject.Subject_Result_Order ASC";
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









    // public function class_wise_subject($class='',$section=''){
    //     $Query = "SELECT * FROM tbl_subject
    //         WHERE 1=1  AND Class_ID=$class" ;
    //     $query_result = $this->db->query($Query)->result_array();  
    //      // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
    //     return $query_result;
    // }



  public function print_exam_routine_all_finding(){

            $class              = $this->input->post('Std_class_ID');
            $section            = $this->input->post('Std_section_ID');
            $group              = $this->input->post('Std_group_ID');
            $medium             = $this->input->post('Std_medium_ID');
            $shift              = $this->input->post('Std_shift_ID');
            $exam_term          = $this->input->post('Exam_term_ID');

        $Query="SELECT tbl_exam_routine.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_exam_term.Exam_term_Name
              FROM tbl_exam_routine 
              LEFT JOIN tbl_class   on tbl_exam_routine.Exam_routine_Class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_exam_routine.Exam_routine_Section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_exam_routine.Exam_routine_Group_ID =tbl_group.Group_ID  
              LEFT JOIN tbl_exam_term   on tbl_exam_routine.Exam_routine_UNQ_ID =tbl_exam_term.Exam_term_ID
            
            WHERE 1=1 ";

            if(!empty($_POST['Std_class_ID'])) {
                $Query .= " AND tbl_exam_routine.Exam_routine_Class_ID=$class";
            }
            if(!empty($_POST['Std_section_ID'])) {
                $Query .= " AND tbl_exam_routine.Exam_routine_Section_ID=$section";
            }
            if(!empty($_POST['Std_group_ID'])) {
                $Query .= " AND tbl_exam_routine.Exam_routine_Group_ID=$group";
            }
            if(!empty($_POST['Exam_term_ID'])) {
                $Query .= " AND tbl_exam_routine.Exam_routine_UNQ_ID=$exam_term";
            }

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


    public function get_exam_nameData() {
        $Query = "SELECT * FROM tbl_exam_term
            WHERE 1=1  AND Exam_term_Status=1";
        $query_result = $this->db->query($Query)->result();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }


    public function all_author_published_comments_blog_finding(){
        $Query = "SELECT * 
                  FROM tbl_blog 
                  WHERE 1=1
                  AND BlogStatus=1
                  AND CommentCount=(SELECT max(CommentCount) FROM tbl_blog LIMIT 4)
                  ORDER BY created ASC  
                  ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

     public function all_author_published_poem_finding($id){
        $Query = "SELECT * 
                  FROM tbl_blog 
                  WHERE 1=1
                  AND BlogCategory=$id
                  ORDER BY created ASC  
                  ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }
  

    public function all_home_published_category_finding(){
        $Query = "SELECT * 
                  FROM tbl_category 
                  WHERE 1=1 
                  AND CategoryStatus=1
                  AND HomepageCategoryStatus=1
                  ORDER BY created ASC ";
        $query_result = $this->db->query($Query)->result_array();
    //          echo "<pre>";
                //  print_r($query_result);
                // echo "</pre>";
                // die();
        return $query_result;
    }

    public function categoryWiseData($id){
        $Query = "SELECT * 
                  FROM tbl_blog 
                  WHERE 1=1 
                  AND BlogCategory=$id
                  ORDER BY created ASC ";
        $query_result = $this->db->query($Query)->result_array();
             // echo "<pre>";
             //     print_r($query_result);
             //    echo "</pre>";
             //    die();
        return $query_result;
    }

    public function all_author_published_article_finding($id){
                //   echo "<pre>";
                //  print_r($id);
                // echo "</pre>";
                // die();
        $Query = "SELECT * 
                  FROM tbl_blog 
                  WHERE 1=1
                  AND BlogCategory=$id
                  ORDER BY created ASC  
                  ";
        $query_result = $this->db->query($Query)->result_array();
          // echo "<pre>";
          //        print_r($query_result);
          //       echo "</pre>";
          //       die();
        return $query_result;
    }

    public function all_author_published_myblog_finding(){
        $Query = "SELECT * 
                  FROM tbl_blog 
                  WHERE 1=1
                  AND BlogCategory=3
                  ORDER BY created ASC  
                  ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function get_blog_single_data($id) {
        $Query = "SELECT *
                  FROM tbl_blog
                  WHERE 1=1
                  AND tbl_blog.BlogID='$id'";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
    }
    
    public function get_blog_comments_data($id) {
        $Query = "SELECT * FROM tbl_blog_comments
                  where 1=1 AND BlogID='$id' 
                  ORDER BY CommentDateTime DESC";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
    }

    public function get_recent_comments_data() {
        $Query = "SELECT * FROM tbl_blog_comments
            where 1=1  ORDER BY CommentID ASC
            LIMIT 4";
        $query_result = $this->db->query($Query)->result();
        // echo "<pre>";
        // print_r($query_result);
        // echo "</pre>";
        // die();
        return $query_result;
    }

    public function blog_submit_comment(){
        $BlogID     = $this->input->post('BlogID');
        $author     = ($this->input->post('author'))?$this->input->post('author'):'None';
        $email      = ($this->input->post('email'))?$this->input->post('email'):'';
        $url        = ($this->input->post('url'))?$this->input->post('url'):'';
        $comment    = ($this->input->post('comment'))?$this->input->post('comment'):'';
        date_default_timezone_set('Asia/dhaka');
        $commentDatetime    = date("d-m-Y H:i");
        $ipAddress  = $this->input->ip_address();;
        $macAddress = $this->mac();

        $this->db->trans_start();
        $tbl_comment_Data = array(
            'BlogID' => $BlogID,
            'AuthorName' => $author,
            'AuthorEmail' => $email,
            'AuthorUrl' => $url,
            'Comment' => $comment,
            'CommentDateTime' => $commentDatetime,
            'ipAddress' => $ipAddress,
            'macAddress' => $macAddress,
        );

        $this->db->insert('tbl_blog_comments', $tbl_comment_Data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();

        $commentCount_update = "UPDATE tbl_blog
                        SET CommentCount=CommentCount+1
                        WHERE BlogID=$BlogID";
        $this->db->query($commentCount_update);
        return $insert_id;
    }

    public function blog_submit_comment_reply(){
        $BlogID     = $this->input->post('BlogID');
        $CommentReplyID  = $this->input->post('CommentID');
        $author     = ($this->input->post('author'))?$this->input->post('author'):'None';
        $email      = ($this->input->post('email'))?$this->input->post('email'):'';
        $url        = ($this->input->post('url'))?$this->input->post('url'):'';
        $comment_reply    = ($this->input->post('comment_reply'))?$this->input->post('comment_reply'):'';
        date_default_timezone_set('Asia/dhaka');
        $commentDatetime    = date("d-m-Y H:i");
        $ipAddress  = $this->input->ip_address();;
        $macAddress = $this->mac();

        $this->db->trans_start();
        $tbl_comment_Data = array(
            'BlogID' => $BlogID,
            'AuthorName' => $author,
            'AuthorEmail' => $email,
            'AuthorUrl' => $url,
            'CommentReply' => $comment_reply,
            'CommentReplyID' => $CommentReplyID,
            'CommentDateTime' => $commentDatetime,
            'ipAddress' => $ipAddress,
            'macAddress' => $macAddress,
        );

        $this->db->insert('tbl_blog_comments', $tbl_comment_Data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();

        $commentCount_update = "UPDATE tbl_blog
                        SET CommentCount=CommentCount+1
                        WHERE BlogID=$BlogID";
        $this->db->query($commentCount_update);
        return $insert_id;
    }

    // ==============mahbub blog author find end here===============///

    ///=============photo Gallery Task start here============////
    
    public function find_gallery_slider_image(){
     $Query = "SELECT *
                FROM tbl_photos
                WHERE 1=1
                AND tbl_photos.ph_slider_images=1";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function find_teachers_profile(){
     $Query = "SELECT tbl_teacher.*, tbl_designation.DesignationName
        FROM tbl_teacher 
        LEFT JOIN tbl_designation  on tbl_teacher.Teacher_designation =tbl_designation.DesignationID
        AND tbl_teacher.Teacher_status=1";
        $query_result = $this->db->query($Query)->result_array();
        // print_r($query_result);
        // die();
        return $query_result;
    }


    
     public function get_teacher_single($teacher_id) {

        $query = "SELECT tbl_teacher.*,tbl_designation.DesignationName
            FROM tbl_teacher 
            LEFT JOIN tbl_designation  on tbl_teacher.Teacher_designation =tbl_designation.DesignationID
              WHERE 1=1 AND tbl_teacher.Teacher_ID='$teacher_id'";
        $result = $this->db->query($query)->result();
        return $result;
  }

    public function find_gallery_all_image(){
     $Query = "SELECT *
                FROM tbl_photos
                WHERE 1=1
                AND tbl_photos.ph_status=1";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function find_about_all_info(){
     $Query = "SELECT *
                FROM tbl_about
                WHERE 1=1
                AND tbl_about.AboutStatus=1";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function find_gallery1_image(){
     $Query = "SELECT *
                FROM tbl_photos
                WHERE 1=1
                AND tbl_photos.ph_gallery1_image=1";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function find_gallery2_image(){
     $Query = "SELECT *
                FROM tbl_photos
                WHERE 1=1
                AND tbl_photos.ph_gallery2_image=1";
        $query_result = $this->db->query($Query)->result_array();
       return $query_result;
    }

    ///=============// photo Gallery task End here============////

    // mahbub end  here

     public function find_slider_image(){
        $Query = "SELECT *
            FROM tbl_slider_contents
            WHERE 1=1 
            AND sc_status = 1 
            AND slider_position = 1 
            ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

     public function get_header_slider(){
        $Query = "SELECT *
            FROM tbl_slider_contents
            WHERE 1=1 
            AND sc_status = 1 
            AND slider_position = 3 
            ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }
    
     public function get_header(){
        $Query = "SELECT *
            FROM tbl_header_info
            WHERE 1=1 
            ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

     public function get_photo_gallery(){
       $Query = "SELECT *
           FROM tbl_photos
           WHERE 1=1 
           ";
       $query_result = $this->db->query($Query)->result_array();
       return $query_result; 
    }

    public function find_notice(){
        $Query = "SELECT tbl_notice_publish.* 
                FROM tbl_notice_publish
                WHERE 1=1 
                AND tbl_notice_publish.status = 1 
                ORDER BY tbl_notice_publish.notice_date desc limit 1
                ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }


    // mahbub cv submission start here

    public function member_finding(){
       $Query = "SELECT *
                 FROM tbl_team_member 
                 WHERE 1=1  ";
       $query_result = $this->db->query($Query)->result_array();
       return $query_result;
   }
// -------------------mahbub task end here-----------------//
    
    public function get_menus() {
        $Query = "select HeadID, HeadName, MenuSlug, PtnID, OrderID, GroupID, IsTransactable, PtnGroupCode, 0 as process_status, 0 as process_statusaa 
            from tbl_news_menu
            where 1=1 and HeadID != 1 order by PtnID, OrderID ASC";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_news_headlines() {
        $Query = "SELECT NewsID, NewsTitle, NewsSlug
            FROM tbl_news
            WHERE 1=1 AND NewsHeadLine = 1 ORDER BY NewsID DESC LIMIT 15";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_pageWidget_data() {
        $Query = "SELECT * FROM tbl_widgets_page
            where 1=1 AND PublishStatus=1 ORDER BY ID ASC";
        $query_result = $this->db->query($Query)->result();

        // echo '<pre>',print_r($query_result),'</pre>'; 
        return $query_result;
    }

    public function get_newOfTheDay() {
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 and tbl_news.NewsOfTheDay = 1 AND tbl_news.PublishStatus = 1 ORDER BY cast(tbl_news.NewsID as SIGNED) DESC LIMIT 1";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_topEighteenNews() {
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 and tbl_news.TopEighteenNews = 1 AND tbl_news.PublishStatus = 1 ORDER BY cast(tbl_news.NewsID as SIGNED) DESC LIMIT 18";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

    public function get_pageCategories($pageCategoryID) {
        $Query = "SELECT tbl_news.*, tbl_links.LinkID, tbl_links.NewsID, tbl_links.PageCategoryID, tbl_page_category.*,tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_page_category on tbl_links.PageCategoryID=tbl_page_category.ID
            where 1=1 AND tbl_news.PublishStatus=1 AND tbl_links.PageCategoryID ='$pageCategoryID' ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC LIMIT 6";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function menu_news_data($pageWidgetMenuID) {

        $Query = "SELECT tbl_news.*, tbl_news_menu.HeadID, tbl_news_menu.HeadName, tbl_news_menu.PtnGroupCode, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            where 1=1 AND tbl_news_menu.PtnGroupCode like '$ptnGrpCode%' AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_mostViewsNews($limit,$start) {
        date_default_timezone_set('Asia/dhaka');
        $todaysDate          = date("d-m-Y");        
        $previous10days      = date('d-m-Y', strtotime($todaysDate .' -10 day'));
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news            
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news.PublishStatus=1 AND (STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') BETWEEN STR_TO_DATE('$previous10days', '%d-%m-%Y') AND STR_TO_DATE('$todaysDate', '%d-%m-%Y')) ORDER BY tbl_news.ViewCount DESC LIMIT $start, $limit";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function count_mostViewsNews($limit){
        date_default_timezone_set('Asia/dhaka');
        $todaysDate          = date("d-m-Y");        
        $previous10days      = date('d-m-Y', strtotime($todaysDate .' -10 day'));
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news            
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news.PublishStatus=1 AND (STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') BETWEEN STR_TO_DATE('$previous10days', '%d-%m-%Y') AND STR_TO_DATE('$todaysDate', '%d-%m-%Y')) ORDER BY tbl_news.ViewCount DESC LIMIT $limit";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

    public function get_latestNews($limit,$start) {
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news            
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC LIMIT $start, $limit";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function count_latestNews($limit){
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
                   FROM tbl_news            
                   left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
                   left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
                   where 1=1 AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC LIMIT $limit";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

    public function get_mostCommenttNews($limit,$start) {
        date_default_timezone_set('Asia/dhaka');
        $todaysDate          = date("d-m-Y");        
        $previous10days      = date('d-m-Y', strtotime($todaysDate .' -10 day'));
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news            
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news.PublishStatus=1 AND (STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') BETWEEN STR_TO_DATE('$previous10days', '%d-%m-%Y') AND STR_TO_DATE('$todaysDate', '%d-%m-%Y')) ORDER BY tbl_news.CommentCount DESC LIMIT $start, $limit";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function count_mostCommenttNews($limit){
        date_default_timezone_set('Asia/dhaka');
        $todaysDate          = date("d-m-Y");        
        $previous10days      = date('d-m-Y', strtotime($todaysDate .' -10 day'));
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news            
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news.PublishStatus=1 AND (STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') BETWEEN STR_TO_DATE('$previous10days', '%d-%m-%Y') AND STR_TO_DATE('$todaysDate', '%d-%m-%Y')) ORDER BY tbl_news.CommentCount DESC LIMIT $limit";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    // public $query_result;
    public function get_menu_data($ptnGrpCode,$limit, $start) {
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_links.LinkID, tbl_links.NewsID, tbl_links.MenuCategoryID, tbl_news_menu.HeadID, tbl_news_menu.HeadName, tbl_news_menu.PtnGroupCode,tbl_news_menu.FacebookShare, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_news_menu on tbl_links.MenuCategoryID=tbl_news_menu.HeadID
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news_menu.PtnGroupCode like '$ptnGrpCode%' AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC LIMIT $start, $limit";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    // Count all record of table "contact_info" in database.
    public function record_count($ptnGrpCode) {
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_links.LinkID, tbl_links.NewsID, tbl_links.MenuCategoryID, tbl_news_menu.HeadID, tbl_news_menu.HeadName, tbl_news_menu.PtnGroupCode,tbl_news_menu.FacebookShare, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_news_menu on tbl_links.MenuCategoryID=tbl_news_menu.HeadID
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news_menu.PtnGroupCode like '$ptnGrpCode%' AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function fb_data(){
        // $query ="select * from pagination order by id DESC limit 1";
        $query ="SELECT tbl_news.*, tbl_news_meta_data.*, tbl_links.LinkID, tbl_links.NewsID, tbl_links.MenuCategoryID, tbl_news_menu.HeadID, tbl_news_menu.HeadName, tbl_news_menu.PtnGroupCode,tbl_news_menu.FacebookShare, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_news_menu on tbl_links.MenuCategoryID=tbl_news_menu.HeadID
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC limit 1";

            $res = $this->db->query($query);

            if($res->num_rows() > 0) {
                   return $res->result("array");
           }
           return array();
           
    }

    public function get_pageWidgetData_data($pageWidgetID, $limit, $start) {
        $PageWidgetQuery = $this->db->get_where('tbl_page_category', array('PageWidgetID' => $pageWidgetID))->result_array();
        $pageCategoryID = isset($PageWidgetQuery[0]["ID"]) ? $PageWidgetQuery[0]["ID"] : "";

        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_links.LinkID, tbl_links.NewsID, tbl_links.PageCategoryID, tbl_page_category.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_page_category on tbl_links.PageCategoryID=tbl_page_category.ID
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_page_category.ID='$pageCategoryID' AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC LIMIT $start, $limit";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function count_pageWidgetData_data($pageWidgetID) {
        $PageWidgetQuery = $this->db->get_where('tbl_page_category', array('PageWidgetID' => $pageWidgetID))->result_array();
        $pageCategoryID = isset($PageWidgetQuery[0]["ID"]) ? $PageWidgetQuery[0]["ID"] : "";

        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_links.LinkID, tbl_links.NewsID, tbl_links.PageCategoryID, tbl_page_category.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_page_category on tbl_links.PageCategoryID=tbl_page_category.ID
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_page_category.ID='$pageCategoryID' AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';  
    }

    public function get_PageWidgetmenu_data($ptnGrpCode) {
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_links.LinkID, tbl_links.NewsID, tbl_links.MenuCategoryID, tbl_news_menu.HeadID, tbl_news_menu.HeadName, tbl_news_menu.PtnGroupCode, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_news_menu on tbl_links.MenuCategoryID=tbl_news_menu.HeadID
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news_menu.PtnGroupCode like '$ptnGrpCode%' AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC LIMIT 6";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_PageWidgetmenu_data_country($ptnGrpCode) {
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_links.LinkID, tbl_links.NewsID, tbl_links.MenuCategoryID, tbl_news_menu.HeadID, tbl_news_menu.HeadName, tbl_news_menu.PtnGroupCode, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_news_menu on tbl_links.MenuCategoryID=tbl_news_menu.HeadID
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news_menu.PtnGroupCode like '$ptnGrpCode%' AND tbl_news.PublishStatus=1 ORDER BY STR_TO_DATE(tbl_news.NewsUpdateDate, '%d-%m-%Y') DESC, tbl_news.NewsUpdateTime DESC LIMIT 8";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_news_data($id) {
        $Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news.NewsID='$id'";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_newsLink_data($id) {
        $Query = "SELECT tbl_news.*, tbl_links.LinkID, tbl_links.NewsID, tbl_links.MenuCategoryID, tbl_news_menu.HeadID, tbl_news_menu.HeadName, tbl_news_menu.MenuSlug, tbl_news_menu.PtnGroupCode
            FROM tbl_news
            left join tbl_links on tbl_news.NewsID=tbl_links.NewsID
            left join tbl_news_menu on tbl_links.MenuCategoryID=tbl_news_menu.HeadID
            where 1=1 AND tbl_news.NewsID='$id' AND tbl_links.MenuCategoryID != 0";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_comments_data($id) {
        $Query = "SELECT * FROM tbl_comments
            where 1=1 AND NewsID='$id' ORDER BY CommentID ASC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function mac(){ 
        //Simple & effective way to get client mac address
        // Turn on output buffering
        ob_start();
        //Get the ipconfig details using system commond
        system('ipconfig /all');

        // Capture the output into a variable

        $mycom=ob_get_contents();

        // Clean (erase) the output buffer

        ob_clean();

        $findme = "Physical";
        //Search the "Physical" | Find the position of Physical text
        $pmac = strpos($mycom, $findme);

        // Get Physical Address
        $mac=substr($mycom,($pmac+36),17);
        //Display Mac Address
        // echo $mac;

        return $mac;
       }


    public function get_sidbarwidgetData() {
        $Query = "SELECT * FROM tbl_widgets_sidebar
            where 1=1 AND IsEditable=1 AND PublishStatus=1";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_onlineVote_Data() {
        $Query = "SELECT tbl_news.*, tbl_online_vote.ID, tbl_online_vote.NewsID as onlinevoteNewsID, tbl_online_vote.TotalVote
            FROM tbl_news
            left join tbl_online_vote on tbl_news.NewsID=tbl_online_vote.NewsID
            where 1=1 and tbl_news.OnlineVote = 1 AND tbl_news.PublishStatus = 1 ORDER BY cast(tbl_news.NewsID as SIGNED) DESC LIMIT 1";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_vote_data($newsId) {
        $Query = "SELECT tbl_news.*, tbl_online_vote.ID, tbl_online_vote.NewsID as onlinevoteNewsID, tbl_online_vote.PositiveVote, tbl_online_vote.NegetiveVote, tbl_online_vote.NoVote, tbl_online_vote.TotalVote
            FROM tbl_news
            left join tbl_online_vote on tbl_news.NewsID=tbl_online_vote.NewsID
            where 1=1 and tbl_news.OnlineVote = 1 AND tbl_news.PublishStatus = 1 ORDER BY cast(tbl_news.NewsID as SIGNED) DESC";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    // public function submit_comment(){
    //     $newsID     = $this->input->post('newsID');
    //     $author     = ($this->input->post('author'))?$this->input->post('author'):'None';
    //     $email      = ($this->input->post('email'))?$this->input->post('email'):'';
    //     $url        = ($this->input->post('url'))?$this->input->post('url'):'';
    //     $comment    = ($this->input->post('comment'))?$this->input->post('comment'):'';
    //     date_default_timezone_set('Asia/dhaka');
    //     $commentDatetime    = date("d-m-Y H:i");
    //     $ipAddress  = $this->input->ip_address();;
    //     $macAddress = $this->mac();

    //     $this->db->trans_start();
    //     $tbl_comment_Data = array(
    //         'NewsID' => $newsID,
    //         'AuthorName' => $author,
    //         'AuthorEmail' => $email,
    //         'AuthorUrl' => $url,
    //         'Comment' => $comment,
    //         'CommentDateTime' => $commentDatetime,
    //         'ipAddress' => $ipAddress,
    //         'macAddress' => $macAddress,
    //     );

        

    //     $this->db->insert('tbl_comments', $tbl_comment_Data);
    //     $insert_id = $this->db->insert_id();
    //     $this->db->trans_complete();

    //     $commentCount_update = "UPDATE tbl_news
    //                     SET CommentCount=CommentCount+1
    //                     WHERE NewsID=$newsID";
    //     $this->db->query($commentCount_update);

    //     return $insert_id;
    // }

    public function facebook_info_save() {

        // echo "<pre>";
        // echo print_r($_POST);
        // die();
       
        $ApplicationId      = $this->input->post('ApplicationId');
        $ApplicationSecret  = $this->input->post('ApplicationSecret');
        // $PostMessage        = $this->input->post('PostMessage');
        // $AutoPost           = $this->input->post('AutoPost');
        $LoginUrl           = $this->input->post('loginUrl');
        $fbPage             = $this->input->post('facebookPage');
      

        $this->db->trans_start();
        $tbl_facebook_Post = array(
            'ApplicationId' => $ApplicationId,
            'ApplicationSecret' => $ApplicationSecret,
            // 'PostMessage' => $PostMessage,
            // 'AutoPost' => $AutoPost,
            'LoginUrl' => $LoginUrl,
            'fbPage'    => $fbPage,
        );

       
        if (empty($tbl_facebook_Post['fbPage'])) {
            # code...
            $this->db->insert('tbl_facebook_post', $tbl_facebook_Post);
       }else{

        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();

        $query = $this->db->get('tbl_facebook_post');
        $result = $query->result();

        $id = $result[0]->FacebookPostID;


        $tbl_facebook_Postt_update = "UPDATE tbl_facebook_post
                        SET ApplicationId       ='$ApplicationId', 
                            ApplicationSecret   ='$ApplicationSecret', 
                            LoginUrl            ='$LoginUrl',
                            FacebookPage        ='$fbPage'

                        WHERE FacebookPostID=$id";
        $this->db->query($tbl_facebook_Postt_update);
        }

        return $insert_id;
    }

    public function fb_info_retrieve(){
        // $this->db->select('*');
        // $this->db->from('tbl_facebook_post');
        $query = $this->db->get('tbl_facebook_post');
        return $result = $query->result();
    }

    public function findSuperAdmin(){
        $this->db->where('RoleID', 1);
        $query = $this->db->get('tbl_user');
        return $result = $query->result_array();
    }
    
}