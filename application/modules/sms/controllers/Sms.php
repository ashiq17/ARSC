<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller {
    
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('Sms_model');
       
    } 
     // exam Marks input start here mahbub

    public function send_sms() {
        $data['Class_Data']    = $this->Sms_model->get_classData();
        $data['Section_Data']  = $this->Sms_model->get_sectionData();
        $data['Section_Data']  = $this->Sms_model->get_sectionData();
        $data['Group_Data']    = $this->Sms_model->get_groupData();
        $data['Sms_stu_attendance_Data']    = $this->Sms_model->get_Sms_Stu_attendance_Data();
        $data['Sms_Stu_general_Data']       = $this->Sms_model->get_Sms_Stu_general_Data();
        $data['Sms_Stu_result_Data']        = $this->Sms_model->get_Sms_Stu_result_Data();
        $data['Sms_teacher_general_Data']   = $this->Sms_model->get_Sms_Teacher_general_Data();
        $data['Exam_name_Data']             = $this->Sms_model->get_exam_nameData();
       
        $data['all_teacher_unique_id']      = $this->Sms_model->all_teacher_unique_id_finding();
        $data['all_student_unique_id']      = $this->Sms_model->all_student_unique_id_finding();
        // $this->load->view('sms_student_index',$data);
        $this->load->view('send_sms',$data);
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
                    "total"         => $total, 
                    "queryData"         => $queryData, 
                ));
             }
        }

    public function sms_search(){
            // echo "<pre>";print_r($_POST); echo "</pre>";die();
        $Class_ID          = ($this->input->get('Class_ID'))?$this->input->get('Class_ID'):"";
        $Section_ID        = ($this->input->get('Section_ID'))?$this->input->get('Section_ID'):"";
        $Group_ID          = ($this->input->get('Group_ID'))?$this->input->get('Group_ID'):"";
        $Std_shift_ID      = ($this->input->get('Std_shift_ID'))?$this->input->get('Std_shift_ID'):"";
        $Std_medium_ID     = ($this->input->get('Std_medium_ID'))?$this->input->get('Std_medium_ID'):"";
        $query = "";
        $total_condition ="";
         
        $query_con = "SELECT tbl_student.*, tbl_class.Class_Name, tbl_section.Section_Name, tbl_group.Group_Name
            FROM tbl_student
            LEFT JOIN tbl_class ON tbl_class.Class_ID=tbl_student.Std_class_ID
            LEFT JOIN tbl_section  ON tbl_section.Section_ID=tbl_student.Std_section_ID
            LEFT JOIN tbl_group  ON tbl_group.Group_ID=tbl_student.Std_Group_ID
            where 1=1
            and Class_ID='$Class_ID' 
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
           // echo "<pre>";print_r($queryData); echo "</pre>";die();
        
        $total = 0;
        $sms_search_List = array();//`id``ItemCode``BarCode`
        foreach($queryData as $key=>$info){

            $total++;

            $sms_search_List[$total]['Std_Name']                 = isset($info->Std_Name)?$info->Std_Name:'-';
            $sms_search_List[$total]['Std_class_ID']             = isset($info->Std_class_ID)?$info->Std_class_ID:'-';
            $sms_search_List[$total]['Class_Name']               = isset($info->Class_Name)?$info->Class_Name:'-';
            $sms_search_List[$total]['Std_medium_ID']            = isset($info->Std_medium_ID)?$info->Std_medium_ID:'-';
            $sms_search_List[$total]['Std_shift_ID']             = isset($info->Std_shift_ID)?$info->Std_shift_ID:'-';
            $sms_search_List[$total]['Std_group_ID']             = isset($info->Std_group_ID)?$info->Std_group_ID:'-';
            $sms_search_List[$total]['Group_Name']               = isset($info->Group_Name)?$info->Group_Name:'-';
            $sms_search_List[$total]['Std_section_ID']           = isset($info->Std_section_ID)?$info->Std_section_ID:'-';
            $sms_search_List[$total]['Section_Name']             = isset($info->Section_Name)?$info->Section_Name:'-';
            $sms_search_List[$total]['STD_UNQ_ID']               = isset($info->STD_UNQ_ID)? $info->STD_UNQ_ID:'-';
            $sms_search_List[$total]['Std_roll']                 = isset($info->Std_roll)? $info->Std_roll:'-';
            
            }
        echo json_encode(array(
            "sms_search_List"   => $sms_search_List, 
            "total"                   => $total, 
            "queryData"               => $query_con, 
        )); 
    }
        public function sms_creation(){
            //  echo "<pre>";print_r($_POST);echo "</pre>";die();
            $update_id = $this->Sms_model->update_sms_creation();
               $this->session->set_userdata('message','sms  added Successfully!');
            redirect(base_url().'sms/sms/send_sms');
        }

    //============= exam Marks input end here mahbub===============//
 
  
    //============= mahbub sms create  start here  ===============//
    public function sms_create(){
        $this->load->view('sms_create');
    } 

    public function sms_add(){
        if (isset($_POST['submit']) == 'Submit'){
            $sms_info = array(
                // 'note_type' => '2',
                'SMSTitle'       => $this->input->post('sms_title'),
                'SMSCategory'    => $this->input->post('sms_category'),
                'SMSBody'        => $this->input->post('smsBody'),
                'SMS_Status'     => $this->input->post('status'),
                'Modified'       => date("d-m-Y H:i:s"),
            );
            $this->Sms_model->sms_adding($sms_info);
            $this->session->set_userdata('message','sms added Successfully!');
            redirect(base_url().'sms/sms/get_sms_list');
        }else{
            $this->session->set_userdata('message','sms is not added, Try again!');
            redirect(base_url().'sms/sms/get_sms_list');
        }
    }

    public function get_sms_list(){
        $data['sms_data'] = $this->Sms_model->get_sms_list();
        $this->load->view('sms_list',$data);
    }

    public function sms_edit($sms_id){
        $data['find_sms_data'] = $this->Sms_model->get_sms_data($sms_id);
        $this->load->view('sms_edit',$data);
    }

    public function sms_update(){
        if (isset($_POST['submit']) == 'Submit'){
        
             $sms_update = array(
                // 'note_type' => '2',
                'SMSID'       => $this->input->post('SMSID'),
                'SMSTitle'       => $this->input->post('sms_title'),
                'SMSCategory'    => $this->input->post('sms_category'),
                'SMSBody'        => $this->input->post('smsBody'),
                'SMS_Status'     => $this->input->post('status'),
                'Modified'       => date("d-m-Y H:i:s"),
            );
            $this->Sms_model->update_sms($sms_update);
            $this->session->set_userdata('message','SMS updated Successfully!');
             redirect(base_url().'sms/sms/get_sms_list');
        }else{
            $this->session->set_userdata('message','SMS is not updated, Try again!');
              redirect(base_url().'sms/sms/get_sms_list');
        }
    }


    public function getSMSView()
    {
        if (isset($_REQUEST['SMSID'])) {
        $id = intval($_REQUEST['SMSID']);
        //   echo "<pre>";print_r($id); echo "</pre>"; die();
        $this->db->where('SMSID',$id);
        $data = $this->db->get('tbl_sms');
        $query= $data->result();
        echo "<div class='table-responsive'>
        
        <table class='table table-striped table-bordered'>";
              foreach($query as $row){


            echo "<tr>
                <th>Notice Title</th>
                <td>"; 
                 echo $row->SMSTitle;
            echo "</td>
            </tr>";
            echo "<tr>
                <th>Notice Details</th>
                <td>";
                 echo $row->SMSBody;
            echo "</td>
            </tr>";
            echo "<tr>
                <th>Status</th>
                <td>";
                 if($row->SMS_Status == 1){
                    echo "Active";
                 }
                  else{
                    echo "Inactive";
                 }
            echo "</td>
            </tr>";
            
            }
            
        echo "</table>
            
        </div>";        
           }
    }

    public function delete_sms(){
        $sms_id = $this->input->post('SMSID');
        $this->Sms_model->delete_sms($sms_id);
        $this->session->set_userdata('message','SMS is deleted!');
        redirect(base_url().'sms/sms/get_sms_list');
    }

  // <--==============mahbub  sms create working end=================---->


  
     public function get_sms_data(){
        if(isset($_POST['one'])){
            $json = array();
            $id =  trim($_POST['one']);

            $query =  $this->db->query(
                    "SELECT SMSID,SMSBody
                     FROM tbl_sms
                     WHERE 1=1
                     AND SMS_Status=1
                     AND SMSID = '$id'
                    ");
            $result = $query->result_array(); 
            $sms_id = $result[0]['SMSID'];
            $smsBody = strip_tags($result[0]['SMSBody']);
            $result = array('SMSID'=>$sms_id,'SMSBody'=>$smsBody);
            array_push($json,$result);
            echo json_encode($json, true);
        }
    }
    // <--==============mahbub  sms send student working start=================---->
    
  // SMS  start here for attendance succesfully done

     public function sms_student_search_attendance(){  
        $search_check_inn  = $this->input->get('attendance_date');
        $attendance_date   = date("d-m-Y", strtotime($search_check_inn));
        $student_status_attendance  = ($this->input->get('student_status_attendance'))?$this->input->get('student_status_attendance'):"";     
            // echo "<pre>";print_r($_POST); echo "</pre>";die();
        $Class_ID          = ($this->input->get('Class_ID'))?$this->input->get('Class_ID'):"";
        $Section_ID        = ($this->input->get('Section_ID'))?$this->input->get('Section_ID'):"";
        $Group_ID          = ($this->input->get('Group_ID'))?$this->input->get('Group_ID'):"";
        $Std_shift_ID      = ($this->input->get('Std_shift_ID'))?$this->input->get('Std_shift_ID'):"";
        $Std_medium_ID     = ($this->input->get('Std_medium_ID'))?$this->input->get('Std_medium_ID'):"";
        $smsBodyfind       = ($this->input->get('smsBodyfind'))?$this->input->get('smsBodyfind'):"";   
        $STD_UNQ_ID        = ($this->input->get('STD_UNQ_ID'))?$this->input->get('STD_UNQ_ID'):"";   
       
        $query = "";
        $total_condition ="";
         
        $query_con = "SELECT tbl_student.*, tbl_class.Class_Name, tbl_section.Section_Name, tbl_group.Group_Name,tbl_student_attendance.Std_Attendance_Date
            FROM tbl_student
            LEFT JOIN tbl_class ON tbl_class.Class_ID=tbl_student.Std_class_ID
            LEFT JOIN tbl_section  ON tbl_section.Section_ID=tbl_student.Std_section_ID
            LEFT JOIN tbl_group  ON tbl_group.Group_ID=tbl_student.Std_Group_ID
            LEFT JOIN tbl_student_attendance  ON tbl_student_attendance.Std_Attendance_NameID =tbl_student.STD_UNQ_ID
            where 1=1
           
            ";
            if(!empty($attendance_date)) {
             $query_con .= " AND tbl_student_attendance.Std_Attendance_Date='$attendance_date'";
            }

            if (!empty($student_status_attendance)) {
                 $query_con .= " AND tbl_student_attendance.Std_Attendance_Status='$student_status_attendance'";
            }
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
            if ($STD_UNQ_ID) {
                 $query_con .= " AND tbl_student_attendance.Std_Attendance_NameID='$STD_UNQ_ID'";
            }  

              $query_con .= " ORDER BY tbl_student.Std_class_ID ASC";
        
        $queryData = $this->db->query($query_con)->result();
           // echo "<pre>";print_r($queryData); echo "</pre>";die();
        
        $total = 0;
        $attendance_search_List = array();//`id``ItemCode``BarCode`
        foreach($queryData as $key=>$info){


            if ($info->Std_medium_ID==1) {
                $student_medium = 'Bangla';
            } else {
                $student_medium = 'English';
            }
            if ($info->Std_shift_ID==1) {
                $student_shift = 'Day';
            } else {
                $student_shift = 'Morning';
            }
                
            $total++;
            if ($info->Std_gender==1) {
                $smsBodyfind = str_replace('$', 'son', $smsBodyfind);
            }elseif($info->Std_gender==2){
                $smsBodyfind = str_replace('$', 'daughter', $smsBodyfind);
            } 
            $Std_Name=$info->Std_Name;

            $attendance_sms  = "Dear Parents, $Std_Name $smsBodyfind";

            $attendance_search_List[$total]['Std_Name']                 = isset($info->Std_Name)?$info->Std_Name:'-';
            $attendance_search_List[$total]['Std_gender']               = isset($info->Std_gender)?$info->Std_gender:'-';
            $attendance_search_List[$total]['Std_class_ID']             = isset($info->Std_class_ID)?$info->Std_class_ID:'-';
            $attendance_search_List[$total]['Class_Name']               = isset($info->Class_Name)?$info->Class_Name:'-';
            $attendance_search_List[$total]['Std_medium_ID']            = isset($info->Std_medium_ID)?$info->Std_medium_ID:'-';
            $attendance_search_List[$total]['student_medium']           = $student_medium;
            $attendance_search_List[$total]['Std_shift_ID']             = isset($info->Std_shift_ID)?$info->Std_shift_ID:'-';
            $attendance_search_List[$total]['student_shift']            = $student_shift;
            $attendance_search_List[$total]['student_status_attendance']= $student_status_attendance;
            $attendance_search_List[$total]['attendance_date']          = $attendance_date;
            $attendance_search_List[$total]['Std_group_ID']             = isset($info->Std_group_ID)?$info->Std_group_ID:'-';
            $attendance_search_List[$total]['Group_Name']               = isset($info->Group_Name)?$info->Group_Name:'-';
            $attendance_search_List[$total]['Std_section_ID']           = isset($info->Std_section_ID)?$info->Std_section_ID:'-';
            $attendance_search_List[$total]['Section_Name']             = isset($info->Section_Name)?$info->Section_Name:'-';
            $attendance_search_List[$total]['STD_UNQ_ID']               = isset($info->STD_UNQ_ID)? $info->STD_UNQ_ID:'-';
            $attendance_search_List[$total]['Std_roll']                 = isset($info->Std_roll)? $info->Std_roll:'-';
            $attendance_search_List[$total]['Std_parent_mobile']        = isset($info->Std_parent_mobile)? $info->Std_parent_mobile:'-';
            // $attendance_search_List[$total]['smsBodyfind']           = isset($smsBodyfind)?$smsBodyfind:'';
            $attendance_search_List[$total]['attendance_sms']           = isset($attendance_sms)?$attendance_sms:'';


            if ($info->Std_gender==1) {
                $smsBodyfind = str_replace('son', '$', $smsBodyfind);
            }elseif($info->Std_gender==2){
                $smsBodyfind = str_replace('daughter', '$', $smsBodyfind);
            } 
            
            }
        echo json_encode(array(
            "attendance_search_List"  => $attendance_search_List, 
            "total"                   => $total, 
            "queryData"               => $query_con, 
            "attendance_sms"          => $attendance_sms, 
            // "smsBodyfind"               => $smsBodyfind, 
        )); 
    }


  public function sms_send_student_ateendance(){
        $this->load->model('Sms_model'); # <- add this
        $this->Sms_model->sms_sending_attendance();
      // $this->Sms_model->sms_sending_attendance();
      $this->session->set_userdata('message',' Student attendance SMS Send Successfully!');
      // $this->send_sms();
       redirect(base_url().'sms/sms/send_sms');
      // $this->load->view('send_sms',$data);
  }   

  // SMS succesfully end here for attendance

  
  // // SMS  Start here for General


     public function sms_student_search_general(){       
        $Class_ID          = ($this->input->get('Class_ID_Gen'))?$this->input->get('Class_ID_Gen'):"";
        $Section_ID        = ($this->input->get('Section_ID_Gen'))?$this->input->get('Section_ID_Gen'):"";
        $Group_ID          = ($this->input->get('Group_ID_Gen'))?$this->input->get('Group_ID_Gen'):"";
        $Std_shift_ID      = ($this->input->get('Std_shift_ID_Gen'))?$this->input->get('Std_shift_ID_Gen'):"";
        $Std_medium_ID     = ($this->input->get('Std_medium_ID_Gen'))?$this->input->get('Std_medium_ID_Gen'):"";

        $smsBodyfindGeneral  = ($this->input->get('smsBodyfindGeneral'))?$this->input->get('smsBodyfindGeneral'):"";  
        $query = "";
        $total_condition ="";
        $query_con = "SELECT tbl_student.*, tbl_class.Class_Name, tbl_section.Section_Name, tbl_group.Group_Name
            FROM tbl_student
            LEFT JOIN tbl_class ON tbl_class.Class_ID=tbl_student.Std_class_ID
            LEFT JOIN tbl_section  ON tbl_section.Section_ID=tbl_student.Std_section_ID
            LEFT JOIN tbl_group  ON tbl_group.Group_ID=tbl_student.Std_Group_ID
            where 1=1
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
        $query_con .= " ORDER BY tbl_student.Std_class_ID ASC";

        $queryData = $this->db->query($query_con)->result();
           // echo "<pre>";print_r($queryData); echo "</pre>";die(); 
        $total = 0;
        $general_student_search_List = array();//`id``ItemCode``BarCode`
        foreach($queryData as $key=>$info){

            if ($info->Std_medium_ID==1) {
                $student_medium = 'Bangla';
            } else {
                $student_medium = 'English';
            }
            if ($info->Std_shift_ID==1) {
                $student_shift = 'Day';
            } else {
                $student_shift = 'Morning';
            }
                
            $total++;

            $general_student_search_List[$total]['Std_Name']                 = isset($info->Std_Name)?$info->Std_Name:'-';
            $general_student_search_List[$total]['Std_class_ID']             = isset($info->Std_class_ID)?$info->Std_class_ID:'-';
            $general_student_search_List[$total]['Class_Name']               = isset($info->Class_Name)?$info->Class_Name:'-';
            $general_student_search_List[$total]['Std_medium_ID']            = isset($info->Std_medium_ID)?$info->Std_medium_ID:'-';
            $general_student_search_List[$total]['student_medium']           = $student_medium;
            $general_student_search_List[$total]['Std_shift_ID']             = isset($info->Std_shift_ID)?$info->Std_shift_ID:'-';
            $general_student_search_List[$total]['student_shift']            = $student_shift;
            $general_student_search_List[$total]['Std_group_ID']             = isset($info->Std_group_ID)?$info->Std_group_ID:'-';
            $general_student_search_List[$total]['Group_Name']               = isset($info->Group_Name)?$info->Group_Name:'-';
            $general_student_search_List[$total]['Std_section_ID']           = isset($info->Std_section_ID)?$info->Std_section_ID:'-';
            $general_student_search_List[$total]['Section_Name']             = isset($info->Section_Name)?$info->Section_Name:'-';
            $general_student_search_List[$total]['STD_UNQ_ID']               = isset($info->STD_UNQ_ID)? $info->STD_UNQ_ID:'-';
            $general_student_search_List[$total]['Std_roll']                 = isset($info->Std_roll)? $info->Std_roll:'-';
            $general_student_search_List[$total]['Std_parent_mobile']        = isset($info->Std_parent_mobile)? $info->Std_parent_mobile:'-';
             $general_student_search_List[$total]['smsBodyfindGeneral']      = isset($smsBodyfindGeneral)?$smsBodyfindGeneral:'';
           
            }
        echo json_encode(array(
            "general_student_search_List"  => $general_student_search_List, 
            "total"                        => $total, 
            "queryData"                    => $query_con, 
            // "smsBodyfindGeneral"               => $smsBodyfindGeneral, 
        )); 
    }

      public function sms_send_student_general(){
        // echo "<pre>"; print_r($_POST); die();
          $this->Sms_model->sms_sending_general();
          $this->session->set_userdata('message','SMS Sent Successfully!');
          redirect(base_url().'sms/sms/send_sms');
      }   
 // <--============== Mahbub  sms send student working end=================---->



// test result start
      // row start

   public function print_exam_report11111111111(){

         // echo "<pre>";  print_r($_POST);echo "</pre>";die();
        $medium              = $this->input->post('Std_shift_ID');
        $shift              = $this->input->post('Std_medium_ID');
        $STD_UNQ_ID              = $this->input->post('STD_UNQ_ID');
        $class              = $this->input->post('Std_class_ID');
        $section            = $this->input->post('Std_section_ID');
        $data['Exam_term_ID']= $this->input->post('Exam_term_ID');
        $data['find_exam_name'] = $this->Exam_result_model->find_exam_name();
        $data['print_exam_report_all_find'] = $this->Exam_result_model->print_exam_report_all_finding();
        $data['class_wise_subject'] = $this->Exam_result_model->class_wise_subject($class,$section);
        $this->load->view('report/print_exam_report',$data);
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
               // $query_con .= " ORDER BY tbl_student.Std_class_ID ASC";   
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    }



// sms test start


    public function sms_student_search_result(){       
        $Class_ID          = ($this->input->get('Class_ID_Res'))?$this->input->get('Class_ID_Res'):"";
        $Section_ID        = ($this->input->get('Section_ID_Res'))?$this->input->get('Section_ID_Res'):"";
        $Group_ID          = ($this->input->get('Group_ID_Res'))?$this->input->get('Group_ID_Res'):"";
        $Std_medium_ID     = ($this->input->get('Std_medium_ID_Res'))?$this->input->get('Std_medium_ID_Res'):"";
        $Std_shift_ID      = ($this->input->get('Std_shift_ID_Res'))?$this->input->get('Std_shift_ID_Res'):"";
        $exam_ID           = ($this->input->get('exam_ID_Res'))?$this->input->get('exam_ID_Res'):"";
        $STD_UNQ_ID_Res    = ($this->input->get('STD_UNQ_ID_Res'))?$this->input->get('STD_UNQ_ID_Res'):"";

        $smsBodyfindResult  = ($this->input->get('smsBodyfindResult'))?$this->input->get('smsBodyfindResult'):"";  

        $Query="SELECT tbl_stu_marks_summary.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_student.Std_Name,tbl_student.STD_UNQ_ID,tbl_student.Std_parent_mobile,tbl_student.Std_medium_ID,tbl_student.Std_shift_ID,tbl_student.Std_roll,tbl_exam_term.Exam_term_Name
                    
            FROM tbl_stu_marks_summary 
            LEFT JOIN tbl_student  on tbl_stu_marks_summary.Marks_Sum_Student_ID =tbl_student.STD_UNQ_ID
             
            LEFT JOIN tbl_class   on tbl_stu_marks_summary.Marks_Sum_Class_ID =tbl_class.Class_ID
            LEFT JOIN tbl_section  on tbl_stu_marks_summary.Marks_Sum_Sectoin_ID =tbl_section.Section_ID
            LEFT JOIN tbl_group   on tbl_stu_marks_summary.Marks_Sum_Group_ID =tbl_group.Group_ID
            LEFT JOIN tbl_exam_term   on tbl_stu_marks_summary.Marks_Sum_Exam_code_ID =tbl_exam_term.Exam_term_ID
            WHERE 1=1 ";

            if($exam_ID) {
                $Query .= " AND tbl_stu_marks_summary.Marks_Sum_Exam_code_ID=$exam_ID";
            }
            if($Std_medium_ID) {
                $Query .= " AND tbl_stu_marks_summary.Marks_Sum_Medium_ID=$Std_medium_ID";
            }
            if($Std_shift_ID) {
                $Query .= " AND tbl_stu_marks_summary.Marks_Sum_Shift_ID=$Std_shift_ID";
            }
            if($Class_ID) {
                $Query .= " AND tbl_stu_marks_summary.Marks_Sum_Class_ID=$Class_ID";
            }
            if($Section_ID) {
                $Query .= " AND tbl_stu_marks_summary.Marks_Sum_Sectoin_ID=$Section_ID";
            }
            if($Group_ID) {
                $Query .= " AND tbl_stu_marks_summary.Marks_Sum_Group_ID=$Group_ID";
            }
             if($STD_UNQ_ID_Res) {
                $Query .= " AND tbl_stu_marks_summary.Marks_Sum_Student_ID=$STD_UNQ_ID_Res";
            } 
        // $query_con .= " ORDER BY tbl_student.Std_class_ID ASC";

        $query_result_exam = $this->db->query($Query)->result();
    
        $total = 0;
        $result_student_search_List = array();//`id``ItemCode``BarCode`
            foreach($query_result_exam as $key=>$result_info){  

            if ($result_info->Marks_Sum_Medium_ID==1) {
                $student_medium = 'Bangla';
            } else {
                $student_medium = 'English';
            }
            if ($result_info->Marks_Sum_Shift_ID==1) {
                $student_shift = 'Day';
            } else {
                $student_shift = 'Morning';
            }

             $stu_name=$result_info->Std_Name;
             $stu_id=$result_info->Marks_Sum_Student_ID;
             $stu_class=$result_info->Class_Name;
             $exam_term=$result_info->Exam_term_Name;

             // if(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='one' || trim((strtolower($result_info->Class_Name)))=='two'){
            if(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class))) =='play'){
                $bangla      = floatval($result_info->Marks_Sum_Bangla);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $english     = floatval($result_info->Marks_Sum_English);
                $arabic      = floatval($result_info->Marks_Sum_Arabic);
                $gknowledge  = floatval($result_info->Marks_Sum_GKnowledge);
                $practical   = floatval($result_info->Marks_Sum_Practical);
                //Total subject=6;
                $result_sms  = "$exam_term;$stu_name;ID:$stu_id;BAN=$bangla,ENG=$english,MATH=$mathematics,ARAB=$arabic,Gk=$gknowledge,PRAC=$practical;Principal,DCIS";
            }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='nursery'){
                
                $bangla      = floatval($result_info->Marks_Sum_Bangla);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $english     = floatval($result_info->Marks_Sum_English);
                $arabic      = floatval($result_info->Marks_Sum_Arabic);
                $gknowledge  = floatval($result_info->Marks_Sum_GKnowledge);
                $moktab      = floatval($result_info->Marks_Sum_Moktab);
                $drawing     = floatval($result_info->Marks_Sum_Drawing);
                $practical   = floatval($result_info->Marks_Sum_Practical);
                //$grand_total   = $result_info->Marks_Sum_Practical;
                  //Total subject=8;

                $result_sms  = "$exam_term;$stu_name;ID:$stu_id;BAN=$bangla,MATH=$mathematics,ENG=$english,ARAB=$arabic,GK=$gknowledge,MOKT=$moktab,DRAW=$drawing,PRAC=$practical;Principal,DCIS";

            }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='juniorone'){
                $bangla      = floatval($result_info->Marks_Sum_Bangla);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $english     = floatval($result_info->Marks_Sum_English);
                $arabic      = floatval($result_info->Marks_Sum_Arabic);
                $gknowledge  = floatval($result_info->Marks_Sum_GKnowledge);
                $moktab      = floatval($result_info->Marks_Sum_Moktab);
                $drawing     = floatval($result_info->Marks_Sum_Drawing);
                $practical   = floatval($result_info->Marks_Sum_Practical);
                //$grand_total   = $result_info->Marks_Sum_Practical;
                  //Total subject=8;

                $result_sms  = "$exam_term;$stu_name;ID:$stu_id;BAN=$bangla,MATH=$mathematics,ENG=$english,ARAB=$arabic,GK=$gknowledge,MOKT=$moktab,DRAW=$drawing,PRAC=$practical;Principal,DCIS";

            }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='one'){
                $bangla      = floatval($result_info->Marks_Sum_Bangla);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $english     = floatval($result_info->Marks_Sum_English);
                $arabic      = floatval($result_info->Marks_Sum_Arabic);
                $gknowledge  = floatval($result_info->Marks_Sum_GKnowledge);
                $moktab      = floatval($result_info->Marks_Sum_Moktab);
                $drawing     = floatval($result_info->Marks_Sum_Drawing);
                $practical   = floatval($result_info->Marks_Sum_Practical);
                //$grand_total   = $result_info->Marks_Sum_Practical;
                  //Total subject=8;

                $result_sms  = "$exam_term;$stu_name;ID:$stu_id;BAN=$bangla,MATH=$mathematics,ENG=$english,ARAB=$arabic,Gk=$gknowledge,MOKT=$moktab,DRAW=$drawing,PRAC=$practical;Principal,DCIS";

            }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='two'){
                $bangla      = floatval($result_info->Marks_Sum_Bangla);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $english     = floatval($result_info->Marks_Sum_English);
                $arabic      = floatval($result_info->Marks_Sum_Arabic);
                $environment = floatval($result_info->Marks_Sum_Environment);
                $gknowledge  = floatval($result_info->Marks_Sum_GKnowledge);
                $drawing     = floatval($result_info->Marks_Sum_Drawing);
                $moktab      = floatval($result_info->Marks_Sum_Moktab);
                $practical   = floatval($result_info->Marks_Sum_Practical);
                //$grand_total   = $result_info->Marks_Sum_Practical;
                  //Total subject=9;

                $result_sms = "$exam_term;$stu_name;ID:$stu_id;BAN=$bangla,MATH=$mathematics,ENG=$english,ARAB=$arabic,ENVI=$environment,Gk=$gknowledge,DRAW=$drawing,MOKT=$moktab,PRAC=$practical;Principal,DCIS";
            }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='three'){
                $bangla      = floatval($result_info->Marks_Sum_Bangla);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $english     = floatval($result_info->Marks_Sum_English);
                $b_g_science = floatval($result_info->Marks_Sum_B_G_Science);
                $science     = floatval($result_info->Marks_Sum_Science);
                $religion    = floatval($result_info->Marks_Sum_Religion);
                $moktab      = floatval($result_info->Marks_Sum_Moktab);
                $practical   = floatval($result_info->Marks_Sum_Practical);
                //$grand_total   = $result_info->Marks_Sum_Practical;
                  //Total subject=8;

                $result_sms  = "$exam_term;$stu_name;ID:$stu_id;BAN=$bangla,MATH=$mathematics,ENG=$english,BGS=$b_g_science,SCI=$science,RELG=$religion,MOKT=$moktab,PRAC=$practical;Principal,DCIS";

            }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='four'){
                $bangla      = floatval($result_info->Marks_Sum_Bangla);
                $english     = floatval($result_info->Marks_Sum_English);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $b_g_science = floatval($result_info->Marks_Sum_B_G_Science);
                $science     = floatval($result_info->Marks_Sum_Science);
                $religion    = floatval($result_info->Marks_Sum_Religion);
                $moktab      = floatval($result_info->Marks_Sum_Moktab);
                $practical   = floatval($result_info->Marks_Sum_Practical);
                   //Total subject=8;

                $result_sms  = "$exam_term;$stu_name;ID:$stu_id;BAN=$bangla,MATH=$mathematics,ENG=$english,BGS=$b_g_science,SCI=$science,RELG=$religion,MOKT=$moktab,PRAC=$practical;Principal,DCIS";

            }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='five'){
                $bangla      = floatval($result_info->Marks_Sum_Bangla);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $english     = floatval($result_info->Marks_Sum_English);
                $religion    = floatval($result_info->Marks_Sum_Religion);
                $computer    = floatval($result_info->Marks_Sum_Computer);
                $gknowledge  = floatval($result_info->Marks_Sum_Science);
                $moktab      = floatval($result_info->Marks_Sum_Moktab);
                $practical   = floatval($result_info->Marks_Sum_Practical);
                $drawing     = floatval($result_info->Marks_Sum_Drawing);
                $result_sms  = "$exam_term;$stu_name;ID:$stu_id;BAN=$bangla,ENG=$english,MATH=$mathematics,RELG=$religion,Comp=$computer,Gk=$gknowledge,MOKT=$moktab,PRAC=$practical,DRAW=$drawing;Principal,DCIS";

            }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='six'){
                $bangla_1st  = floatval($result_info->Marks_Sum_Bangla_Ist);
                $bangla_2nd  = floatval($result_info->Marks_Sum_Bangla_2nd);
                $english_1st = floatval($result_info->Marks_Sum_English_1st);
                $english_2nd = floatval($result_info->Marks_Sum_English_2nd);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $b_g_science = floatval($result_info->Marks_Sum_B_G_Science);
                $science     = floatval($result_info->Marks_Sum_Science);
                $religion    = floatval($result_info->Marks_Sum_Religion);
                $agri        = floatval($result_info->Marks_Sum_Agri_H_Science);
                $ict         = floatval($result_info->Marks_Sum_ICT);
                //Total sub=10;

               $result_sms = "$exam_term;$stu_name;ID:$stu_id;BAN-1=$bangla_1st,BAN-2=$bangla_2nd,ENG-1=$english_1st,ENG-2=$english_2nd,MATH=$mathematics,BGS=$b_g_science,SCI=$science,RELG=$religion,AG/HS=$agri,ICT=$ict;Principal,DCIS";

            }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $stu_class)))=='seven'){
                $bangla_1st  = floatval($result_info->Marks_Sum_Bangla_Ist);
                $bangla_2nd  = floatval($result_info->Marks_Sum_Bangla_2nd);
                $english_1st = floatval($result_info->Marks_Sum_English_1st);
                $english_2nd = floatval($result_info->Marks_Sum_English_2nd);
                $mathematics = floatval($result_info->Marks_Sum_Mathematics);
                $b_g_science = floatval($result_info->Marks_Sum_B_G_Science);
                $science     = floatval($result_info->Marks_Sum_Science);
                $religion    = floatval($result_info->Marks_Sum_Religion);
                $agri        = floatval($result_info->Marks_Sum_Agri_H_Science);
                $ict         = floatval($result_info->Marks_Sum_ICT);
                //Total sub=10;
               
                $result_sms = "$exam_term;$stu_name;ID:$stu_id;BAN-1=$bangla_1st,BAN-2=$bangla_2nd,ENG-1=$english_1st,ENG-2=$english_2nd,MATH=$mathematics,BGS=$b_g_science,SCI=$science,RELG=$religion,AG/HS=$agri,ICT=$ict;Principal,DCIS";
            }

        // for sms create end
        $total++;

        $result_student_search_List[$total]['Marks_Sum_Student_ID']     = isset($result_info->Marks_Sum_Student_ID)? $result_info->Marks_Sum_Student_ID:'-'; 
        $result_student_search_List[$total]['Std_Name']                 = isset($result_info->Std_Name)? $result_info->Std_Name:'-';
        $result_student_search_List[$total]['Class_Name']               = isset($result_info->Class_Name)? $result_info->Class_Name:'-';
        // $result_student_search_List[$total]['Class_ID']                 = isset($result_info->Class_Name)? $result_info->Class_ID:'-';
        
        $result_student_search_List[$total]['Std_roll']                 = isset($result_info->Std_roll)? $result_info->Std_roll:'-';
        $result_student_search_List[$total]['Std_parent_mobile']        = isset($result_info->Std_parent_mobile)? $result_info->Std_parent_mobile:'-';
        $result_student_search_List[$total]['Marks_Sum_Exam_code_ID']   = isset($result_info->Marks_Sum_Exam_code_ID)?$result_info->Marks_Sum_Exam_code_ID:'-';
        // $result_student_search_List[$total]['exam_ID_Res']              = $exam_ID_Res;
        $result_student_search_List[$total]['result_sms']               = $result_sms;
        $result_student_search_List[$total]['student_medium']           = $student_medium;
        $result_student_search_List[$total]['student_shift']            = $student_shift;
        $result_student_search_List[$total]['Marks_Sum_Class_ID']       = isset($result_info->Marks_Sum_Class_ID)?$result_info->Marks_Sum_Class_ID:'-';
        $result_student_search_List[$total]['Section_Name']             = isset($result_info->Section_Name)?$result_info->Section_Name:'-';
        $result_student_search_List[$total]['Group_Name']               = isset($result_info->Group_Name)?$result_info->Group_Name:'-';
        $result_student_search_List[$total]['Marks_Sum_Medium_ID']      = isset($result_info->Marks_Sum_Medium_ID)?$result_info->Marks_Sum_Medium_ID:'-';
        $result_student_search_List[$total]['Marks_Sum_Shift_ID']       = isset($result_info->Marks_Sum_Shift_ID)?$result_info->Marks_Sum_Shift_ID:'-';
        $result_student_search_List[$total]['Marks_Sum_Sectoin_ID']     = isset($result_info->Marks_Sum_Sectoin_ID)?$result_info->Marks_Sum_Sectoin_ID:'-';
        $result_student_search_List[$total]['Marks_Sum_Group_ID']       = isset($result_info->Marks_Sum_Group_ID)?$result_info->Marks_Sum_Group_ID:'-';
        }

        echo json_encode(array(
            // "result_student_basic_List"     => $result_student_basic_List, 
            "result_student_search_List"    => $result_student_search_List, 
            "total"                         => $total, 
            "queryData"                     => $Query, 
            "result_sms"                    => $result_sms, 
        )); 
    }


     public function sms_send_student_result(){
        // echo "<pre>"; print_r($_POST); die();
          $this->Sms_model->sms_sending_result();
          $this->session->set_userdata('message','SMS Sent Successfully!');
          redirect(base_url().'sms/sms/send_sms');
      }   

// sms Result end here successfully



// <--============== Mahbub  sms send Teacher working start=================---->

  public function sms_send_teacher(){
        //  echo "<pre>";print_r($_POST);echo "</pre>";die();
        $update_id = $this->Sms_model->update_sms_creation();
           $this->session->set_userdata('message','sms  Sent Successfully!');
        redirect(base_url().'sms/sms/send_sms');
    }

        // test start

    // public function teacher_attendance(){ 
    //     $data['all_teacher_unique_id'] = $this->Teacher_Model->all_teacher_unique_id_finding();
    //     $this->load->view('teacher_attendence', $data); 
    // }

  public function sms_teacher_search_general(){
        $Teacher_attendance_date   = date('d-m-Y');
        $Teacher_MediumID          = ($this->input->get('Teacher_MediumID'))?$this->input->get('Teacher_MediumID'):"";
        $Teacher_ShiftID           = ($this->input->get('Teacher_ShiftID'))?$this->input->get('Teacher_ShiftID'):"";
        $Teacher_UniqueID          = ($this->input->get('Teacher_UniqueID'))?$this->input->get('Teacher_UniqueID'):"";
        $smsBodyTeacherfindGeneral = ($this->input->get('smsBodyTeacherfindGeneral'))?$this->input->get('smsBodyTeacherfindGeneral'):""; 

        $query = "";
        $total_condition =""; 
        $query_con = "SELECT tbl_teacher.*, tbl_designation.DesignationName
            FROM tbl_teacher
            LEFT JOIN tbl_designation ON tbl_designation.DesignationID=tbl_teacher.Teacher_designation
            where 1=1
            -- AND Teacher_status=1
            ";
            if ($Teacher_MediumID) {
                $query_con .= " AND tbl_teacher.Teacher_medium='$Teacher_MediumID'";
            }
             if ($Teacher_ShiftID) {
                $query_con .= " AND tbl_teacher.Teacher_shift='$Teacher_ShiftID'";
            }
             if ($Teacher_UniqueID) {
                $query_con .= " AND tbl_teacher.Teacher_UniqueID='$Teacher_UniqueID'";
            }  
      // $query_con .= " ORDER BY tbl_student.Std_class_ID ASC";
        $queryData = $this->db->query($query_con)->result();
      
        $total = 0;
        $teacher_sms_List = array();//`id``ItemCode``BarCode`
        foreach($queryData as $key=>$info){

            if ($info->Teacher_medium==1) {
                $teacher_mediumName = 'Bangla';
            } else {
                $teacher_mediumName = 'English';
            }
            if ($info->Teacher_shift==1) {
                $teacher_shiftName = 'Day';
            } else {
                $teacher_shiftName = 'Morning';
            }
            
            $total++;
             $teacher_sms_List[$total]['Teacher_ID']            = isset($info->Teacher_ID)?$info->Teacher_ID:'-';
             $teacher_sms_List[$total]['Teacher_UniqueID']      = isset($info->Teacher_UniqueID)?$info->Teacher_UniqueID:'-';
             $teacher_sms_List[$total]['Teacher_Name']          = isset($info->Teacher_Name)?$info->Teacher_Name:'-';
             $teacher_sms_List[$total]['DesignationName']       = isset($info->DesignationName)?$info->DesignationName:
             $teacher_sms_List[$total]['Teacher_MediumID']      = isset($info->Teacher_medium)?$info->Teacher_medium:'-';
             $teacher_sms_List[$total]['Teacher_ShiftID']       = isset($info->Teacher_shift)?$info->Teacher_shift:'-';
             $teacher_sms_List[$total]['teacher_mediumName']    = $teacher_mediumName;
             $teacher_sms_List[$total]['teacher_shiftName']     = $teacher_shiftName;
             $teacher_sms_List[$total]['Teacher_mobile']        = isset($info->Teacher_mobile)?$info->Teacher_mobile:'-';
             $teacher_sms_List[$total]['smsBodyTeacherfindGeneral'] = isset($smsBodyTeacherfindGeneral)?$smsBodyTeacherfindGeneral:''; 
             
            
        }
        echo json_encode(array(
            "teacher_sms_List"   => $teacher_sms_List, 
            "total"                     => $total, 
            "Teacher_UniqueID" => $Teacher_UniqueID, 
        )); 
    }



     public function sms_send_teacher_general(){
        // echo "<pre>"; print_r($_POST); die();
          $this->Sms_model->sms_sending_teacher_general();
          $this->session->set_userdata('message','SMS Sent Successfully!');
          redirect(base_url().'sms/sms/send_sms');
      }   


  public function sms_teacher_search1(){
    $search_check_inn       = $this->input->post('attendance_date');
    $search_check_in        = date("d-m-Y", strtotime($search_check_inn));
    $teacher_status_absent  = ($this->input->get('teacher_status_absent'))?$this->input->get('teacher_status_absent'):"";
    // $Teacher_attendance_date = date('d-m-Y');
    $Teacher_ShiftID        = ($this->input->get('Teacher_ShiftID'))?$this->input->get('Teacher_ShiftID'):"";
    $Teacher_mobile       = ($this->input->get('Teacher_MediumID'))?$this->input->get('Teacher_MediumID'):"";
    $Teacher_UniqueID       = ($this->input->get('Teacher_UniqueID'))?$this->input->get('Teacher_UniqueID'):"";
    // $Teacher_Dept_ID        = ($this->input->get('Teacher_Dept_ID'))?$this->input->get('Teacher_Dept_ID'):"";
    $Teacher_Group_ID       = ($this->input->get('Teacher_Group_ID'))?$this->input->get('Teacher_Group_ID'):"";
    $query = "";
    $total_condition = "";


    $query_con = "SELECT tbl_teacher.*, tbl_designation.DesignationName
      FROM tbl_teacher
      LEFT JOIN tbl_designation ON tbl_designation.DesignationID=tbl_teacher.Teacher_designation 
       LEFT JOIN tbl_teacher_attendance  on tbl_teacher.Teacher_ID =tbl_teacher_attendance.Teacher_Attendance_NameID
    
      ";

     
    $queryData = $this->db->query($query_con)->result();
  
    $total = 0;
    $teacher_attendance_List = array();//`id``ItemCode``BarCode`
    foreach($queryData as $key=>$info){
      if ($info->Teacher_medium==1) {
        $teacher_medium = 'Bangla';
      } else {
        $teacher_medium = 'English';
      }
      if ($info->Teacher_shift==1) {
        $teacher_shift = 'Day';
      } else {
        $teacher_shift = 'Morning';
      }
      
      $total++;
      $teacher_attendance_List[$total]['Teacher_ID']            = $info->Teacher_ID;
      $teacher_attendance_List[$total]['DesignationName']       = $info->DesignationName;
      $teacher_attendance_List[$total]['Teacher_Name']          = $info->Teacher_Name;
      $teacher_attendance_List[$total]['Teacher_shift']         = $teacher_shift;
      $teacher_attendance_List[$total]['Teacher_shiftID']       = $info->Teacher_shift;
      $teacher_attendance_List[$total]['Teacher_medium']        = $teacher_medium;
      $teacher_attendance_List[$total]['Teacher_mediumID']      = $info->Teacher_medium;
      $teacher_attendance_List[$total]['Teacher_UniqueID']      = $info->Teacher_UniqueID;
      $teacher_attendance_List[$total]['Teacher_status']        = $info->Teacher_status;
      $teacher_attendance_List[$total]['Teacher_attendance_date'] = $Teacher_attendance_date;
    }
    echo json_encode(array(
      "teacher_attendance_List"   => $teacher_attendance_List, 
      "total"               => $total, 
      "queryData"            => $queryData, 
    )); 
  }

  

        // test end


        // <--==============mahbub  sms send Teacher working end=================---->

    //============= sms send end here mahbub===============//

 


}
?>