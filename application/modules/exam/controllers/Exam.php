<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Exam extends CI_Controller {
    
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('Exam_result_model');
        $this->load->model('Exam_routine_Model');
        $this->load->model('Exam_marks_Model');
        // $this->load->model('Student_Model');
        
    } 

    // exam routine start here

    public function exam_routine() {
       $data['Class_Data']    = $this->Exam_routine_Model->get_classData();
       $data['Section_Data']  = $this->Exam_routine_Model->get_sectionData();
       $data['Exam_name_Data']  = $this->Exam_routine_Model->get_exam_nameData();
       $data['Group_Data']  = $this->Exam_routine_Model->get_groupData();
      $this->load->view('add_exam_routine_view',$data);
    }

    public function exam_routine_search(){
        $Std_invoice_date  = date('d-M-Y');
        $Shift_ID          = ($this->input->get('Shift_ID'))?$this->input->get('Shift_ID'):"";
        $Class_ID          = ($this->input->get('Class_ID'))?$this->input->get('Class_ID'):"";
        $Section_ID        = ($this->input->get('Section_ID'))?$this->input->get('Section_ID'):"";
        $Medium_ID         = ($this->input->get('Medium_ID'))?$this->input->get('Medium_ID'):"";
        $query = "";
        $total_condition ="";
        $query_con = "SELECT tbl_subject.*, tbl_class.Class_Name,  tbl_section.Section_Name
            FROM tbl_subject
              LEFT JOIN tbl_class  on tbl_subject.Class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_subject.Section_ID =tbl_section.Section_ID
            WHERE 1=1";
          if ($Shift_ID) {
                 $query_con .= " AND tbl_subject.Shift_ID='$Shift_ID'";
            }

            if($Medium_ID) {
                $query_con .= " AND tbl_subject.Medium_ID='$Medium_ID'";
            }

            if ($Class_ID) {
                 $query_con .= " AND tbl_subject.Class_ID='$Class_ID'";
            }

            if ($Section_ID) {
                 $query_con .= " AND tbl_subject.Section_ID='$Section_ID'";
            }  
        // print_r($query_con);
        // die();
        $queryData = $this->db->query($query_con)->result();
        
        $total = 0;
        $exam_routine_List = array();//`id``ItemCode``BarCode`
        foreach($queryData as $key=>$info){

            $total++;
            $exam_routine_List[$total]['Shift_ID']                 = isset($info->Shift_ID)?$info->Shift_ID:'-';
            $exam_routine_List[$total]['Medium_ID']                = isset($info->Medium_ID)?$info->Medium_ID:'-';
            $exam_routine_List[$total]['Class_ID']                 = isset($info->Class_ID)?$info->Class_ID:'-';
            $exam_routine_List[$total]['Group_ID']                 = isset($info->Group_ID)?$info->Group_ID:'-';
            $exam_routine_List[$total]['Section_ID']               = isset($info->Section_ID)?$info->Section_ID:'-';
            $exam_routine_List[$total]['Subject_Name']             = isset($info->Subject_Name)?$info->Subject_Name:'-';
            $exam_routine_List[$total]['Subject_Code']             = isset($info->Subject_Code)?$info->Subject_Code:'-';
            $exam_routine_List[$total]['Subject_Status']           = isset($Subject_Status)? $Subject_Status:'-';
            // $exam_routine_List[$total]['timestamp']                  = isset($timestamp)? $timestamp:'-';
            
            }
        echo json_encode(array(
            "exam_routine_List"   => $exam_routine_List, 
            "total"               => $total, 
        )); 
    }

    public function exam_routine_creation(){
            $inser_id = $this->Exam_routine_Model->insert_exam_routine();
            $this->session->set_userdata('message','Exam Routine added Successfully!');
            redirect(base_url().'exam/exam/exam_routine');
    }

    public function exam_routine_print(){
        // $data['all_student_find_summary'] = $this->Exam_routine_Model->all_student_finding_summary();
        $data['Class_Data']  = $this->Exam_routine_Model->get_classData();
        $data['Section_Data']  = $this->Exam_routine_Model->get_sectionData();
        $data['Group_Data']  = $this->Exam_routine_Model->get_groupData();
        $data['Exam_name_Data']  = $this->Exam_routine_Model->get_exam_nameData();
       $this->load->view('report/print_exam_routine_index',$data);
    }

    public function print_exam_routine(){
            // echo "<pre>"; print_r($_POST); echo "</pre>";die();
        $data['print_exam_routine_all_find'] = $this->Exam_routine_Model->print_exam_routine_all_finding();
        $this->load->view('report/print_exam_routine',$data);
    }
     
    // exam routine end here

    public function exam_notice() {
            $this->load->view('Exam_Notice_view');
    }

     // exam Marks input start here mahbub

    public function exam_marks() {
        $data['Class_Data']    = $this->Exam_marks_Model->get_classData();
        $data['Section_Data']  = $this->Exam_marks_Model->get_sectionData();
        $data['Section_Data']  = $this->Exam_marks_Model->get_sectionData();
        $data['Group_Data']    = $this->Exam_marks_Model->get_groupData();
        $data['Exam_name_Data']  = $this->Exam_marks_Model->get_exam_nameData();
        $this->load->view('exam_marks_input',$data);
    }

     public function get_exam_subject_data(){
            if(isset($_POST['Class_ID']) && isset($_POST['Std_medium_ID']) && isset($_POST['Std_shift_ID'])){
                $json = array();
                $Class_ID =  trim($_POST['Class_ID']);
                $Std_medium_ID =  trim($_POST['Std_medium_ID']);
                $Std_shift_ID =  trim($_POST['Std_shift_ID']);

                $query = $this->db->query(
                        "SELECT tbl_subject.*
                         FROM tbl_subject
                         WHERE 1=1
                         AND Class_ID = '$Class_ID'
                         AND  Medium_ID = '$Std_medium_ID'
                         AND  Shift_ID = '$Std_shift_ID'
                         AND  Subject_Exam_Status =1   
                          ");
                $queryData = $query->result();
                $total = 0;
                $subjectList = array();
                foreach($queryData as $key=>$info){
                    $subjectList[$total]['Subject_ID']          = $info->Subject_ID;
                    $subjectList[$total]['Subject_Name']        = $info->Subject_Name;
                    $total++;
                }
                echo json_encode(array(
                    "subjectList"  => $subjectList, 
                    "total"        => $total, 
                    "queryData"    => $queryData, 
                ));
             }
        }

    public function exam_marks_input_search(){
            // echo "<pre>";print_r($_POST); echo "</pre>";die();
        $Class_ID          = ($this->input->get('Class_ID'))?$this->input->get('Class_ID'):"";
        $Section_ID        = ($this->input->get('Section_ID'))?$this->input->get('Section_ID'):"";
        $Group_ID          = ($this->input->get('Group_ID'))?$this->input->get('Group_ID'):"";
        $Std_shift_ID      = ($this->input->get('Std_shift_ID'))?$this->input->get('Std_shift_ID'):"";
        $Std_medium_ID     = ($this->input->get('Std_medium_ID'))?$this->input->get('Std_medium_ID'):"";
        $Exam_term_ID      = ($this->input->get('Exam_term_ID'))?$this->input->get('Exam_term_ID'):"";
        $Subject_ID        = ($this->input->get('Subject_ID'))?$this->input->get('Subject_ID'):"";
        $query = "";
        $total_condition ="";
        $total_data = array();

        // subject check start
        $query_sub_check = "SELECT *
            FROM tbl_stu_marks_input
            where 1=1
            ";

            if ($Class_ID) {
                 $query_sub_check .= " AND tbl_stu_marks_input.Marks_stu_class_ID='$Class_ID'";
            }
            if ($Subject_ID) {
                 $query_sub_check .= " AND tbl_stu_marks_input.Marks_stu_sub_code_ID='$Subject_ID'";
            }
            if ($Section_ID) {
                 $query_sub_check .= " AND tbl_stu_marks_input.Marks_stu_section_ID='$Section_ID'";
            }
            if ($Group_ID) {
                 $query_sub_check .= " AND tbl_stu_marks_input.Marks_stu_group_ID='$Group_ID'";
            }
            if ($Std_medium_ID) {
                 $query_sub_check .= " AND tbl_stu_marks_input.Marks_stu_medium_ID='$Std_medium_ID'";
            }
            if ($Std_shift_ID) {
                 $query_sub_check .= " AND tbl_stu_marks_input.Marks_stu_shift_ID='$Std_shift_ID'";
            }
            if ($Exam_term_ID) {
                 $query_sub_check .= " AND tbl_stu_marks_input.Marks_stu_exam_code_ID='$Exam_term_ID'";
            }
         $queryData_subject_check = $this->db->query($query_sub_check)->result();
        // subject check end

         if (!empty( $queryData_subject_check)) {
            echo json_encode(array(
                "data_exit"   => 1, 
            )); 
         }else{
             /* Class wise subject find start */
                $query_sub = "SELECT *
                FROM tbl_subject
                where 1=1
                and tbl_subject.Subject_ExamID=$Exam_term_ID
                and tbl_subject.Subject_Exam_Status=1
                ";

                if ($Class_ID) {
                     $query_sub .= " AND tbl_subject.Class_ID='$Class_ID'";
                }
                if ($Subject_ID) {
                     $query_sub .= " AND tbl_subject.Subject_ID='$Subject_ID'";
                }
                if ($Std_medium_ID) {
                     $query_sub .= " AND tbl_subject.Medium_ID='$Std_medium_ID'";
                }
                if ($Std_shift_ID) {
                     $query_sub .= " AND tbl_subject.Shift_ID='$Std_shift_ID'";
                }
               $queryData_subject = $this->db->query($query_sub)->result();
               /* Class wise subject find end */


               /* All Student Info find start*/
                $query_con = "SELECT tbl_student.*, tbl_class.Class_Name, tbl_section.Section_Name,tbl_group.Group_Name
                    FROM tbl_student
                    LEFT JOIN tbl_class ON tbl_class.Class_ID=tbl_student.Std_class_ID
                    LEFT JOIN tbl_section  ON tbl_section.Section_ID=tbl_student.Std_section_ID
                    LEFT JOIN tbl_group  ON tbl_group.Group_ID=tbl_student.Std_Group_ID
                    where 1=1
                    and tbl_class.Class_ID='$Class_ID' 
                ";
            
                if ($Std_shift_ID) {
                     $query_con .= " AND tbl_student.Std_shift_ID='$Std_shift_ID'";
                }

                if($Std_medium_ID) {
                    $query_con .= " AND tbl_student.Std_medium_ID='$Std_medium_ID'";
                }

                if ($Group_ID) {
                     $query_con .= " AND tbl_student.Std_group_ID='$Group_ID'";
                }
                if ($Class_ID) {
                     $query_con .= " AND tbl_student.Std_class_ID='$Class_ID'";
                }

                if ($Section_ID) {
                     $query_con .= " AND tbl_student.Std_section_ID='$Section_ID'";
                }  
            
            $queryData = $this->db->query($query_con)->result();
             /* All Student Info find end */
            
            $total = 0;
            $exam_marks_input_List = array();
            foreach($queryData as $key=>$info){

                $total++;

                $exam_marks_input_List[$total]['Std_class_ID']             = isset($info->Std_class_ID)?$info->Std_class_ID:'-';
                $exam_marks_input_List[$total]['Student_Name']             = isset($info->Std_Name)?$info->Std_Name:'-';
                $exam_marks_input_List[$total]['Class_Name']               = isset($info->Class_Name)?$info->Class_Name:'-';
                $exam_marks_input_List[$total]['Std_medium_ID']            = isset($info->Std_medium_ID)?$info->Std_medium_ID:'-';
                $exam_marks_input_List[$total]['Std_shift_ID']             = isset($info->Std_shift_ID)?$info->Std_shift_ID:'-';
                $exam_marks_input_List[$total]['Std_group_ID']             = isset($info->Std_group_ID)?$info->Std_group_ID:'-';
                $exam_marks_input_List[$total]['Group_Name']               = isset($info->Group_Name)?$info->Group_Name:'-';
                $exam_marks_input_List[$total]['Std_section_ID']           = isset($info->Std_section_ID)?$info->Std_section_ID:'-';
                $exam_marks_input_List[$total]['Section_Name']             = isset($info->Section_Name)?$info->Section_Name:'-';
                $exam_marks_input_List[$total]['Subject_ID']               = isset($info->Subject_ID)?$info->Subject_ID:'-';
                $exam_marks_input_List[$total]['Subject_Name']             = isset($info->Subject_Name)?$info->Subject_Name:'-';
                $exam_marks_input_List[$total]['Exam_term_ID']             = isset($info->Exam_term_ID)?$info->Exam_term_ID:'-';
                $exam_marks_input_List[$total]['Std_academic_ID']          = isset($info->Std_academic_ID)? $info->Std_academic_ID:'-';
                $exam_marks_input_List[$total]['STD_UNQ_ID']               = isset($info->STD_UNQ_ID)? $info->STD_UNQ_ID:'-';
                $exam_marks_input_List[$total]['Std_roll']                 = isset($info->Std_roll)? $info->Std_roll:'-';
                
                }
            echo json_encode(array(
                "exam_marks_input_List"   => $exam_marks_input_List, 
                "total"                   => $total, 
                "queryData_subject"       => $queryData_subject, 
                "queryData_subject_check" => $queryData_subject_check, 
                // "Subject_ID"      => $Subject_ID, 
            )); 
        }
    }
        public function exam_marks_input_creation(){
            //  echo "<pre>";print_r($_POST);echo "</pre>";die();
            $inser_id = $this->Exam_marks_Model->insert_exam_marks_creation();
            $this->session->set_userdata('message','Exam Marks  added Successfully!');
            redirect(base_url().'exam/exam/exam_marks');
        }

    //============= exam Marks input end here mahbub===============

 
    //============ exam reasult  start  here mahbub === =========

    //     public function exam_report_create_position(){
    //     $data['all_student_find_summary'] = $this->Exam_result_model->all_student_finding_summary();
    //     $data['Class_Data']  = $this->Exam_result_model->get_Class_name();
    //     $data['Section_Data']  = $this->Exam_result_model->get_sectionData();
    //     $data['Group_Data']  = $this->Exam_result_model->get_groupData();
    //     $data['Exam_name_Data']  = $this->Exam_result_model->get_exam_nameData();
    //     // $data['class_subject_list']  = $this->Exam_result_model->get_class_subject();
    //     $this->load->view('report/student_exam_marks_create_position_index',$data);
    // }

    //  public function create_exam_report_position(){

    //      // echo "<pre>";  print_r($_POST);echo "</pre>";die();
    //     $medium              = $this->input->post('Std_shift_ID');
    //     $shift              = $this->input->post('Std_medium_ID');
    //     // $STD_UNQ_ID              = $this->input->post('STD_UNQ_ID');
    //     $class              = $this->input->post('Std_class_ID');
    //     $section            = $this->input->post('Std_section_ID');
    //     $data['Exam_term_ID']= $this->input->post('Exam_term_ID');
    //     $data['find_exam_name'] = $this->Exam_result_model->find_exam_name();
    //     $data['print_exam_report_all_find'] = $this->Exam_result_model->print_exam_report_all_finding();
    //     $data['class_wise_subject'] = $this->Exam_result_model->class_wise_subject($class,$section);
    //     $this->load->view('report/print_exam_report',$data);
    // }

    public function exam_report_all(){
        $data['all_student_find_summary'] = $this->Exam_result_model->all_student_finding_summary();
        $data['Class_Data']  = $this->Exam_result_model->get_Class_name();
        $data['Section_Data']  = $this->Exam_result_model->get_sectionData();
        $data['Group_Data']  = $this->Exam_result_model->get_groupData();
        $data['Exam_name_Data']  = $this->Exam_result_model->get_exam_nameData();
        // $data['class_subject_list']  = $this->Exam_result_model->get_class_subject();
        $this->load->view('report/print_student_exam_marks_index',$data);
    }

   
    public function print_exam_report_all(){

         // echo "<pre>";  print_r($_POST);echo"</pre>";die();
        $class_name                 = $this->input->post('class_name');
        $medium                     = $this->input->post('Std_shift_ID');
        $shift                      = $this->input->post('Std_medium_ID');
        $STD_UNQ_ID                 = $this->input->post('STD_UNQ_ID');
        $class                      = $this->input->post('Std_class_ID');
        $section                    = $this->input->post('Std_section_ID');
        $group                      = $this->input->post('Std_group_ID');
        $data['shift']              = $shift;
        $data['group']              = $group;
        $data['section']            = $section;
        $data['Exam_term_ID']       = $this->input->post('Exam_term_ID');
        $data['find_exam_name']     = $this->Exam_result_model->find_exam_name();
        $data['print_exam_report_all_find'] = $this->Exam_result_model->print_exam_report_all_finding();
        $data['class_wise_subject'] = $this->Exam_result_model->class_wise_subject($class,$section);
       if(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='play'){
        $this->load->view('report/print_result_class_play',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='nursery'){

        //echo "hello";
        $this->load->view('report/print_result_class_nursery',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='juniorone'){
         //echo "hello";
        $this->load->view('report/print_result_class_juniorone',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='one'){
        $this->load->view('report/print_result_class_one',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='two'){
        $this->load->view('report/print_result_class_two',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='three'){
        $this->load->view('report/print_result_class_three',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='four'){
        $this->load->view('report/print_result_class_four',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='five'){
        $this->load->view('report/print_result_class_five',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='six'){
        $this->load->view('report/print_result_class_six',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='seven'){
        $this->load->view('report/print_result_class_seven',$data);
       }
       // elseif(

       //  redirect(base_url().'exam/exam/exam_report_all');
       // )
        
    }

    //===== exam reasult single  start  here mahbub================

      public function exam_report_single(){
        $data['all_student_find_unique_id'] = $this->Exam_result_model->all_student_finding_unique_id();
        $data['Class_Data']  = $this->Exam_result_model->get_classData();
        $data['Section_Data']  = $this->Exam_result_model->get_sectionData();
        $data['Group_Data']  = $this->Exam_result_model->get_groupData();
        $data['Exam_name_Data']  = $this->Exam_result_model->get_exam_nameData();
        $this->load->view('report/print_single_exam_marks_index',$data);
    }

    public function print_exam_report_single(){
        // echo "<pre>";  print_r($_POST);echo "</pre>";die();
        $class_name       = $this->input->post('class_name');
        $data['print_exam_report_single_find'] = $this->Exam_result_model->print_exam_report_single_finding();
        $data['print_exam_report_all_find'] = $this->Exam_result_model->print_exam_report_all_finding();


       if(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='play'){
        $this->load->view('report/print_single_result_class_play',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='nursery'){
        // echo "hello";
        $this->load->view('report/print_single_result_class_nursery',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='juniorone'){
         //echo "hello";
        $this->load->view('report/print_single_result_class_juniorone',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='one'){
        $this->load->view('report/print_single_result_class_one',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='two'){
        $this->load->view('report/print_single_result_class_two',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='three'){
        $this->load->view('report/print_single_result_class_three',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='four'){
        $this->load->view('report/print_single_result_class_four',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='five'){
        $this->load->view('report/print_single_result_class_five',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='six'){
        $this->load->view('report/print_single_result_class_six',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='seven'){
        $this->load->view('report/print_single_result_class_seven',$data);
       }
        
        // $this->load->view('report/print_single_exam_marks',$data);
    }

     //======== exam reasult  start  here mahbub================




   //  public function exam_result() {
            // $this->load->view('Exam_Notice_view');
   //  }

   //  public function add_exam() {
            // $this->load->view('Exam_Notice_view');
   //  }


}