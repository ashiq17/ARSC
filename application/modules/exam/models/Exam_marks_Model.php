<?php
class Exam_marks_Model extends CI_Model {

    function __construct()
    {
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
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
      } 

      public function insert_exam_marks_creation(){

          // echo "<pre>";print_r($_POST);echo "</pre>"; die();
          $Student_Name     = isset($_POST['Student_Name']) ? $this->input->post('Student_Name') : 0;
          $STD_UNQ_ID       = isset($_POST['STD_UNQ_ID']) ? $this->input->post('STD_UNQ_ID') : 0;
          $Std_roll         = isset($_POST['Std_roll']) ? $this->input->post('Std_roll') : 0;
          $Subject_ID       = isset($_POST['Subject_ID']) ? $this->input->post('Subject_ID') : 0;
          $Subject_Name     = isset($_POST['Subject_Name']) ? $this->input->post('Subject_Name') : 0;
          $Exam_term_ID     = isset($_POST['Exam_term_ID']) ? $this->input->post('Exam_term_ID') : 0;
          $full_marks       = isset($_POST['full_marks']) ? $this->input->post('full_marks') : 0;
          $ct_marks         = isset($_POST['ct_marks']) ? $this->input->post('ct_marks') : 0;
          $mt_marks         = isset($_POST['mt_marks']) ? $this->input->post('mt_marks') : 0;
          $mcq_marks        = isset($_POST['mcq_marks']) ? $this->input->post('mcq_marks') : 0;
          $cq_marks         = isset($_POST['cq_marks']) ? $this->input->post('cq_marks') : 0;
          $total_marks      = isset($_POST['total_marks']) ? $this->input->post('total_marks') : 0;
          $Std_class_ID     = isset($_POST['Std_class_ID']) ? $this->input->post('Std_class_ID') : 0;
          $Std_section_ID   = isset($_POST['Std_section_ID']) ? $this->input->post('Std_section_ID') : 0;
          $Std_group_ID     = isset($_POST['Std_group_ID']) ? $this->input->post('Std_group_ID') : 0;
          $Std_medium_ID    = isset($_POST['Std_medium_ID']) ? $this->input->post('Std_medium_ID') : 0;
          $Std_shift_ID     = isset($_POST['Std_shift_ID']) ? $this->input->post('Std_shift_ID') : 0;
          $marks_note       = isset($_POST['marks_note']) ? $this->input->post('marks_note') : 0;

          /* Data process & save into marks input table start */
          $Student_Name_count     = count($STD_UNQ_ID); //die();

           for ($i=0; $i < $Student_Name_count; $i++) {   
            $Query = "SELECT * 
              FROM tbl_stu_marks_input
              WHERE 1=1  
              AND Marks_stu_UNQ_ID=$STD_UNQ_ID[$i]
              AND Marks_stu_sub_code_ID=$Subject_ID
              AND Marks_stu_exam_code_ID=$Exam_term_ID
              ";
              $query_result = $this->db->query($Query)->result_array(); 
// echo "<pre>"; print_r($query_result); echo "<pre>"; die();
              if(empty($query_result)){
                   $data = array(
                       'Marks_stu_UNQ_ID'           => $STD_UNQ_ID[$i],
                       'Marks_stu_class_ID'         => trim($Std_class_ID[$i]),
                       'Marks_stu_group_ID'         => trim($Std_group_ID[$i]),
                       'Marks_stu_section_ID'       => trim($Std_section_ID[$i]),
                       'Marks_stu_medium_ID'        => trim($Std_medium_ID[$i]),
                       'Marks_stu_shift_ID'         => trim($Std_shift_ID[$i]),
                       'Marks_stu_sub_full_marks'   => trim($full_marks[$i]),
                       'Marks_stu_sub_mcq_marks'    => trim($mcq_marks[$i]),
                       'Marks_stu_sub_ct_marks'     => trim($ct_marks[$i]),
                       'Marks_stu_sub_mt_marks'     => trim($mt_marks[$i]),
                       'Marks_stu_sub_cq_marks'     => trim($cq_marks[$i]),
                       'Marks_stu_sub_total_marks'  => trim($total_marks[$i]),
                       'Marks_stu_sub_code_ID'      => trim($Subject_ID),
                       'Marks_stu_sub_name'         => trim($Subject_Name),
                       'Marks_stu_exam_code_ID'     => trim($Exam_term_ID),
                       'Marks_stu_sub_note'         => trim($marks_note[$i]),
                       'Marks_stu_craeted'          => date("d-m-Y H:i:s"),
                   );
                      
                   $str = $this->db->insert_string("tbl_stu_marks_input", $data);
                   $query = $this->db->query($str);
                } 
            }

            // echo "<pre>"; print_r($query_result); echo "<pre>"; die();
          /* Data process & save into marks input table end */

          #######################################################################
          #######################################################################
          #######################################################################

          /* Data process & save or update into marks summary table start */
          $Student_Name_sum     = count($STD_UNQ_ID);

             for ($j=0; $j < $Student_Name_sum; $j++) { 
                $bangla = 0;
                $bangla_1st = 0;
                $bangla_2nd = 0;
                $english = 0;
                $english_1st = 0;
                $english_2nd = 0;
                $mathematics = 0;
                $science = 0;
                $b_g_science = 0;
                $religion = 0;
                $ict = 0;
                $drawing = 0;
                $moktab = 0;
                $practical = 0;
                $computer = 0;
                $agri = 0;
                $gknowledge = 0;
                $environment = 0;
                $arabic = 0;

              $Query = "SELECT * 
                FROM tbl_stu_marks_summary
                WHERE 1=1
                AND Marks_Sum_Student_ID=$STD_UNQ_ID[$j]
                AND Marks_Sum_Exam_code_ID=$Exam_term_ID
                ";
                $query_result_summary = $this->db->query($Query)->result_array(); 

                  // echo "<pre>";print_r($STD_UNQ_ID);echo "</pre>";
                if(empty($query_result_summary)){

       
                  if(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name))) == 'bangla'){
                    $bangla = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'english'){
                     $english = $total_marks[$j];
                  }
                  elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'bangla1stpaper'){
                     $bangla_1st = $total_marks[$j];
                  }
                  elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'bangla2ndpaper'){
                     $bangla_2nd = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'english1stpaper'){
                     $english_1st = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'english2ndpaper'){
                     $english_2nd = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'mathematics'){
                     $mathematics = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'science'){
                     $science = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'bgscience'){
                     $b_g_science = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'religion'){
                     $religion = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'ict'){
                     $ict = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'drawing'){
                     $drawing = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'moktab'){
                     $moktab = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'practical'){
                     $practical = $total_marks[$j];
                  }
                  elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'computer'){
                     $computer = $total_marks[$j];
                  }
                  elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'agrihscience'){
                     $agri = $total_marks[$j];
                   // echo "<pre>";print_r($agri);echo "</pre>"; die();
                  } 
                  elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'gknowledge'){
                     $gknowledge = $total_marks[$j];
                   // echo "<pre>";print_r($agri);echo "</pre>"; die();
                  }
                   elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'environment'){
                     $environment = $total_marks[$j];
                   // echo "<pre>";print_r($agri);echo "</pre>"; die();
                  }
                   elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'arabic'){
                     $arabic = $total_marks[$j];
                   // echo "<pre>";print_r($agri);echo "</pre>"; die();
                  }

                   $summary_data = array(
                       'Marks_Sum_Student_ID'       => $STD_UNQ_ID[$j],
                       'Marks_Sum_Medium_ID'        => trim($Std_medium_ID[$j]),
                       'Marks_Sum_Shift_ID'         => trim($Std_shift_ID[$j]),
                       'Marks_Sum_Group_ID'         => trim($Std_group_ID[$j]),
                       'Marks_Sum_Class_ID'         => trim($Std_class_ID[$j]),
                       'Marks_Sum_Sectoin_ID'       => trim($Std_section_ID[$j]),
                       'Marks_Sum_Exam_code_ID'     => trim($Exam_term_ID),
                       'Marks_Sum_Bangla'           =>$bangla,
                       'Marks_Sum_Bangla_Ist'       =>$bangla_1st,
                       'Marks_Sum_Bangla_2nd'       =>$bangla_2nd,
                       'Marks_Sum_English'          =>$english,
                       'Marks_Sum_English_1st'      =>$english_1st,
                       'Marks_Sum_English_2nd'      =>$english_2nd,
                       'Marks_Sum_Mathematics'      =>$mathematics,
                       'Marks_Sum_Science'          =>$science,
                       'Marks_Sum_B_G_Science'      =>$b_g_science,
                       'Marks_Sum_Religion'         =>$religion,
                       'Marks_Sum_ICT'              =>$ict,
                       'Marks_Sum_Drawing'          =>$drawing,
                       'Marks_Sum_Moktab'           =>$moktab,
                       'Marks_Sum_Practical'        =>$practical,
                       'Marks_Sum_Computer'         =>$computer,
                       'Marks_Sum_Agri_H_Science'   =>$agri,
                       'Marks_Sum_GKnowledge'       =>$gknowledge,
                       'Marks_Sum_Environment'      =>$environment,
                       'Marks_Sum_Arabic'           =>$arabic,
                       'Marks_Sum_Created'          => date("d-m-Y H:i:s"),
                   );

                   $str_sumamry = $this->db->insert_string("tbl_stu_marks_summary", $summary_data);
                   $query_summary = $this->db->query($str_sumamry);
                }
                  //update start 
              else
              {
                 // $Student_Name_sum     = count($STD_UNQ_ID);
                $Query = "SELECT * 
                  FROM tbl_stu_marks_summary
                  WHERE 1=1
                  AND Marks_Sum_Student_ID=$STD_UNQ_ID[$j]
                  AND Marks_Sum_Exam_code_ID=$Exam_term_ID
                ";
                $query_result_summary = $this->db->query($Query)->result_array(); 
                  // echo "<pre>"; print_r($STD_UNQ_ID); echo "<pre>"; 

                $marks_english=$query_result_summary[0]['Marks_Sum_English'];
                $marks_english_1st=$query_result_summary[0]['Marks_Sum_English_1st'];
                $marks_english_2nd=$query_result_summary[0]['Marks_Sum_English_2nd'];
                $marks_bangla=$query_result_summary[0]['Marks_Sum_Bangla'];
                $marks_bangla_1st=$query_result_summary[0]['Marks_Sum_Bangla_Ist'];
                $marks_bangla_2nd=$query_result_summary[0]['Marks_Sum_Bangla_2nd'];
                $marks_mathematics=$query_result_summary[0]['Marks_Sum_Mathematics'];
                $marks_science=$query_result_summary[0]['Marks_Sum_Science'];
                $marks_b_g_science=$query_result_summary[0]['Marks_Sum_B_G_Science'];
                $marks_religion=$query_result_summary[0]['Marks_Sum_Religion'];
                $marks_ict=$query_result_summary[0]['Marks_Sum_ICT'];
                $marks_drawing=$query_result_summary[0]['Marks_Sum_Drawing'];
                $marks_moktab=$query_result_summary[0]['Marks_Sum_Moktab'];
                $marks_practical=$query_result_summary[0]['Marks_Sum_Practical'];
                $marks_computer=$query_result_summary[0]['Marks_Sum_Computer'];
                $marks_agri=$query_result_summary[0]['Marks_Sum_Agri_H_Science'];
                $marks_gknowledge=$query_result_summary[0]['Marks_Sum_GKnowledge'];
                $marks_environment=$query_result_summary[0]['Marks_Sum_Environment'];
                $marks_arabic=$query_result_summary[0]['Marks_Sum_Arabic'];
                 
                  if(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name))) == 'bangla'){
                    $marks_bangla = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'english'){
                     $marks_english = $total_marks[$j];
                  }
                  elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'bangla1stpaper'){
                     $marks_bangla_1st = $total_marks[$j];
                  }
                  elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'bangla2ndpaper'){
                     $marks_bangla_2nd = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'english1stpaper'){
                     $marks_english_1st = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'english2ndpaper'){
                     $marks_english_2nd = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'mathematics'){
                     $marks_mathematics = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'science'){
                     $marks_science = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'bgscience'){
                     $marks_b_g_science = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'religion'){
                     $marks_religion = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'ict'){
                     $marks_ict = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'drawing'){
                     $marks_drawing = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'moktab'){
                     $marks_moktab = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'practical'){
                     $marks_practical = $total_marks[$j];
                  }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'computer'){
                     $marks_computer = $total_marks[$j];
                  }
                  elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'agrihscience'){
                     $marks_agri = $total_marks[$j];
                  }
                   elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'gknowledge'){
                     $marks_gknowledge = $total_marks[$j];
                   // echo "<pre>";print_r($agri);echo "</pre>"; die();
                  }
                  elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'environment'){
                     $marks_environment = $total_marks[$j];
                   // echo "<pre>";print_r($agri);echo "</pre>"; die();
                  }
                elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $Subject_Name)))== 'arabic'){
                     $marks_arabic = $total_marks[$j];
                   // echo "<pre>";print_r($agri);echo "</pre>"; die();
                  }


                  $summary_data_update = array(
                       'Marks_Sum_Bangla'           =>$marks_bangla,
                       'Marks_Sum_Bangla_Ist'       =>$marks_bangla_1st,
                       'Marks_Sum_Bangla_2nd'       =>$marks_bangla_2nd,
                       'Marks_Sum_English_1st'      =>$marks_english_1st,
                       'Marks_Sum_English'          =>$marks_english,
                       'Marks_Sum_English_2nd'      =>$marks_english_2nd,
                       'Marks_Sum_Mathematics'      =>$marks_mathematics,
                       'Marks_Sum_Science'          =>$marks_science,
                       'Marks_Sum_B_G_Science'      =>$marks_b_g_science,
                       'Marks_Sum_Religion'         =>$marks_religion,
                       'Marks_Sum_ICT'              =>$marks_ict,
                       'Marks_Sum_Drawing'          =>$marks_drawing,
                       'Marks_Sum_Moktab'           =>$marks_moktab,
                       'Marks_Sum_Practical'        =>$marks_practical,
                       'Marks_Sum_Computer'         =>$marks_computer,
                       'Marks_Sum_Agri_H_Science'   =>$marks_agri,
                       'Marks_Sum_GKnowledge'       =>$marks_gknowledge,
                       'Marks_Sum_Environment'      =>$marks_environment,
                       'Marks_Sum_Arabic'           =>$marks_arabic,
                       'Marks_Sum_Modified'         => date("d-m-Y H:i:s"),
                   );
                  
                   $this->db->where('Marks_Sum_Student_ID', $STD_UNQ_ID[$j]);
                   $this->db->update("tbl_stu_marks_summary", $summary_data_update);
                }
              }
          /* Data process & save or update into marks summary table end */
        }

    
      public function print_exam_report_all_finding(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();

            $class              = $this->input->post('Std_class_ID');
            $section            = $this->input->post('Std_section_ID');
            $group              = $this->input->post('Std_group_ID');
            $shift              = $this->input->post('Std_shift_ID');
            $medium             = $this->input->post('Std_medium_ID');
            $STD_UNQ_ID         = $this->input->post('STD_UNQ_ID');
            $student_status     = $this->input->post('student_status');

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



    
}