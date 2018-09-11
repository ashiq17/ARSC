<?php
class Sms_model extends CI_Model {

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
           
          return $query_result;
     }  
      public function all_student_unique_id_finding(){
    $Query = "SELECT tbl_student.STD_UNQ_ID
              FROM tbl_student 
              WHERE 1=1 
              ORDER BY Std_ID ASC ";
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

      public function get_Sms_Stu_attendance_Data() {
        $Query = "SELECT *
         FROM tbl_sms
            WHERE 1=1 
             AND SMS_Status=1
             AND SMSCategory=1
            ";
        $query_result = $this->db->query($Query)->result();   
     
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
      }   
       public function get_Sms_Stu_general_Data() {
        $Query = "SELECT *
         FROM tbl_sms
            WHERE 1=1 
             AND SMS_Status=1
             AND SMSCategory=2
            ";
        $query_result = $this->db->query($Query)->result();   
     
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
      }
      
      public function get_Sms_Stu_result_Data() {
        $Query = "SELECT *
         FROM tbl_sms
            WHERE 1=1 
             AND SMS_Status=1
             AND SMSCategory=3
            ";
        $query_result = $this->db->query($Query)->result();   
     
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
      } 

       public function get_Sms_Teacher_general_Data() {
        $Query = "SELECT *
         FROM tbl_sms
            WHERE 1=1 
             AND SMS_Status=1
             AND SMSCategory=4
            ";
        $query_result = $this->db->query($Query)->result();   
     
        // echo '<pre>',print_r($query_result),'</pre>';die();
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


  


  //<--------------------------- mahbub Sms Create works start ==========--------->

  public function sms_adding($sms_info){
    $this->db->insert('tbl_sms', $sms_info);
  }

  public function get_sms_list(){
    $Query = "SELECT *
              FROM tbl_sms where 1 = 1
              AND SMS_Status = 1 ";
    $query_result = $this->db->query($Query)->result_array();
     // echo "<pre>"; print_r($query_result);echo "</pre>";die();
    return $query_result;
  }

  public function get_sms_data($sms_id){
    $Query = "SELECT *
              FROM tbl_sms where tbl_sms.SMSID = $sms_id";
    $query_result = $this->db->query($Query)->result_array();
    return $query_result;
  }

  public function update_sms($sms_update){
    $SMSID = $sms_update['SMSID'];
    $this->db->where('SMSID', $SMSID);       
    $this->db->update('tbl_sms', $sms_update);
  }

  public function delete_sms($SMSID){
      $this->db->where('SMSID', $SMSID);
      $this->db->delete('tbl_sms');
  }


  // SMS succesfully stert here

      public function sms_sending_attendance(){
        
          $attendance_sms   = isset($_POST['attendance_sms']) ? $this->input->post('attendance_sms') : 0;
          $Student_Name     = isset($_POST['Std_Name']) ? $this->input->post('Std_Name') : 0;
          $Std_parent_mobile= isset($_POST['Std_parent_mobile']) ? $this->input->post('Std_parent_mobile') : 0;
          $STD_UNQ_ID       = isset($_POST['STD_UNQ_ID']) ? $this->input->post('STD_UNQ_ID') : 0;
          $Std_roll         = isset($_POST['Std_roll']) ? $this->input->post('Std_roll') : 0;
          $Std_class_ID     = isset($_POST['Std_class_ID']) ? $this->input->post('Std_class_ID') : 0;
          $Std_section_ID   = isset($_POST['Std_section_ID']) ? $this->input->post('Std_section_ID') : 0;
          $Std_group_ID     = isset($_POST['Std_group_ID']) ? $this->input->post('Std_group_ID') : 0;
          $Std_medium_ID    = isset($_POST['Std_medium_ID']) ? $this->input->post('Std_medium_ID') : 0;
          $Std_shift_ID     = isset($_POST['Std_shift_ID']) ? $this->input->post('Std_shift_ID') : 0;
          $student_status_attendance = isset($_POST['student_status_attendance']) ? $this->input->post('student_status_attendance') : 0;
          $attendance_date  = isset($_POST['attendance_date']) ? $this->input->post('attendance_date') : 0;

          $number             = $Std_parent_mobile;
          $Student_Name_Count = count($Student_Name);
          // echo "<pre>";print_r($Student_Name_Count);echo "</pre>";
          //   echo "<pre>";print_r($_POST);echo "</pre>"; die();
          // $Student_Name_Count = 105;
                        //if($i==83){
          //}
          for ($i=0; $i < $Student_Name_Count; $i++) { 
            $Query = "SELECT * 
              FROM tbl_sms_transactions
              WHERE 1=1 ";

           if(!empty($STD_UNQ_ID[$i])) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_UNQ_ID='$STD_UNQ_ID[$i]'";
            }
           if(!empty($SMS_stu_class_ID[$i])) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_class_ID='$Std_class_ID[$i]'";
            }
            if(!empty($Std_medium_ID[$i])) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_medium_ID='$Std_medium_ID[$i]'";
            }
            if(!empty($Std_shift_ID[$i])) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_shift_ID='$Std_shift_ID[$i]'";
            }
            

            if(!empty($SMS_stu_group_ID[$i])) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_group_ID='$SMS_stu_group_ID[$i]'";
            }
            if(!empty($Std_section_ID[$i])) {

             $Query .= " AND tbl_sms_transactions.SMS_stu_section_ID='$Std_section_ID[$i]'";
            }
            if(!empty($student_status_attendance[$i])) {
             $Query .= " AND tbl_sms_transactions.SMS_student_status_attendance='$student_status_attendance[$i]'";
            }
            if(!empty($attendance_date[$i])) {
             $Query .= " AND tbl_sms_transactions.SMS_attendance_date='$attendance_date[$i]'";
            }
            $query_result = $this->db->query($Query)->result_array();
            }
            
          if(empty($query_result)){
            $today  = date("d-m-Y H:i:s");



            for ($i=0; $i < $Student_Name_Count; $i++) { 
               $data = array(
                   'SMS_stu_UNQ_ID'           => trim($STD_UNQ_ID[$i]),
                   // 'SMS_Std_parent_mobile'    => trim($Std_parent_mobile[$i]),
                   // 'SMS_stu_class_ID'         => trim($Std_class_ID[$i]),
                   // 'SMS_stu_medium_ID'        => trim($Std_medium_ID[$i]),
                   // 'SMS_stu_shift_ID'         => trim($Std_shift_ID[$i]),
                   // 'SMS_stu_section_ID'       => trim($Std_section_ID[$i]),
                   // 'SMS_stu_group_ID'         => trim($Std_group_ID[$i]),
                   'SMS_student_status_attendance'=> trim($student_status_attendance[$i]),
                   'SMS_attendance_date'      => trim($attendance_date[$i]),
                   'SMS_attendance_sms'       => trim($attendance_sms[$i]),
                   'SMS_stu_craeted'          => $today,
               );
                  
            
                $this->db->insert("tbl_sms_transactions", $data);
                $this->session->set_userdata('message','SMS Data Sent Successfully in Database ');
               // $query = $this->db->query;

               // API start 
               $number     = $Std_parent_mobile[$i];
               $SmsText    = $attendance_sms[$i];
               
               $msg1       = str_replace(" ", "%20", $SmsText);
              //  $url="http://api.mimsms.com/api/v3/sendsms/plain?user=faruk.cse14@gmail.com&password=Cyberdyne123&sender=Cyberdyne&SMSText=$msg1&GSM=$number";
              // $response = file_get_contents($url);

               // $url = "http://api.zaman-it.com/api/sendsms/plain?user=01712738170&password=6VpTHEya&sender=BD017127381&SMSText=$msg1&GSM=$number";
               //  $response = file_get_contents($url); 
              // API end 
            }
          }else{
              $this->session->set_userdata('message','SMS already sent Today ! Please Try again different class or section');
            redirect(base_url().'sms/sms/send_sms');
          }

        }
    
  // SMS  end here for attendance succesfully done




        // test attendance start here

         public function sms_sending_attendance22(){



          $attendance_sms   = isset($_POST['attendance_sms']) ? $this->input->post('attendance_sms') : 0;
          $Student_Name     = isset($_POST['Std_Name']) ? $this->input->post('Std_Name') : 0;
          $Std_parent_mobile= isset($_POST['Std_parent_mobile']) ? $this->input->post('Std_parent_mobile') : 0;
          $STD_UNQ_ID       = isset($_POST['STD_UNQ_ID']) ? $this->input->post('STD_UNQ_ID') : 0;
          $Std_roll         = isset($_POST['Std_roll']) ? $this->input->post('Std_roll') : 0;
          $Std_class_ID     = isset($_POST['Std_class_ID']) ? $this->input->post('Std_class_ID') : 0;
          $Std_section_ID   = isset($_POST['Std_section_ID']) ? $this->input->post('Std_section_ID') : 0;
          $Std_group_ID     = isset($_POST['Std_group_ID']) ? $this->input->post('Std_group_ID') : 0;
          $Std_medium_ID    = isset($_POST['Std_medium_ID']) ? $this->input->post('Std_medium_ID') : 0;
          $Std_shift_ID     = isset($_POST['Std_shift_ID']) ? $this->input->post('Std_shift_ID') : 0;
          $student_status_attendance = isset($_POST['student_status_attendance']) ? $this->input->post('student_status_attendance') : 0;
          $attendance_date  = isset($_POST['attendance_date']) ? $this->input->post('attendance_date') : 0;

          $number            = $Std_parent_mobile;
          $Student_Name      = count($Student_Name);
          
          for ($i=0; $i < $Student_Name; $i++) { 
            $Query = "SELECT * 
              FROM tbl_sms_transactions
              WHERE 1=1 
              AND SMS_Stu_general_status=1
              ";

           if(!empty($STD_UNQ_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_UNQ_ID='$STD_UNQ_ID[$i]'";
            }

           if(!empty($SMS_stu_class_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_class_ID='$Std_class_ID[$i]'";
            }
            if(!empty($SMS_stu_group_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_group_ID='$SMS_stu_group_ID[$i]'";
            }
            if(!empty($Std_section_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_section_ID='$Std_section_ID[$i]'";
            }
            if(!empty($Std_medium_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_medium_ID='$Std_medium_ID[$i]'";
            }
            if(!empty($Std_shift_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_shift_ID='$Std_shift_ID[$i]'";
            }
           if(!empty($student_status_attendance[$i])) {
             $Query .= " AND tbl_sms_transactions.SMS_student_status_attendance='$student_status_attendance[$i]'";
            }
              if(!empty($attendance_date[$i])) {
             $Query .= " AND tbl_sms_transactions.SMS_attendance_date='$attendance_date[$i]'";
            }
              $query_result = $this->db->query($Query)->result_array(); 
              // echo "<pre>";print_r($query_result);echo "</pre>";die();
            }
            
          if(empty($query_result)){
            $today            = date("d-m-Y H:i:s");
            for ($i=0; $i < $Student_Name; $i++) { 
               $data = array(

                   'SMS_stu_UNQ_ID'           => trim($STD_UNQ_ID[$i]),
                   'SMS_Std_parent_mobile'    => trim($Std_parent_mobile[$i]),
                   'SMS_stu_class_ID'         => trim($Std_class_ID[$i]),
                   'SMS_stu_group_ID'         => trim($Std_group_ID[$i]),
                   'SMS_stu_section_ID'       => trim($Std_section_ID[$i]),
                   'SMS_stu_medium_ID'        => trim($Std_medium_ID[$i]),
                   'SMS_stu_shift_ID'         => trim($Std_shift_ID[$i]),
                   'SMS_attendance_sms'       => trim($attendance_sms[$i]),
                   'SMS_student_status_attendance' => trim($student_status_attendance[$i]),
                   'SMS_attendance_date'      => trim($attendance_date[$i]),
                   'SMS_stu_craeted'          => $today,
               );
                  
               $str = $this->db->insert_string("tbl_sms_transactions", $data);
                $this->session->set_userdata('message','SMS Data Sent Successfully in Database ');
               $query = $this->db->query($str);
               // API start 
               $number     = $Std_parent_mobile[$i];
               $SmsText    = $attendance_sms[$i]; 
               $msg1       = str_replace(" ", "%20", $SmsText);

               //  $url="http://api.mimsms.com/api/v3/sendsms/plain?user=faruk.cse14@gmail.com&password=Cyberdyne123&sender=Cyberdyne&SMSText=$msg1&GSM=$number";
              // $response = file_get_contents($url);
              //API end 
            }
          }else{
              $this->session->set_userdata('message',' Student General SMS already sent Today ! Please Try again different class or section');
            redirect(base_url().'sms/sms/send_sms');
          }

        }
        // test attendance end here

  // SMS start here for general

      public function sms_sending_general(){
        
          $smsBodyfindGeneral= isset($_POST['smsBodyfindGeneral']) ? $this->input->post('smsBodyfindGeneral') : 0;
          $Student_Name      = isset($_POST['Std_Name']) ? $this->input->post('Std_Name') : 0;
          $Std_parent_mobile = isset($_POST['Std_parent_mobile']) ? $this->input->post('Std_parent_mobile') : 0;
          $STD_UNQ_ID        = isset($_POST['STD_UNQ_ID']) ? $this->input->post('STD_UNQ_ID') : 0;
          $Std_roll          = isset($_POST['Std_roll']) ? $this->input->post('Std_roll') : 0;
          $Std_class_ID      = isset($_POST['Std_class_ID']) ? $this->input->post('Std_class_ID') : 0;
          $Std_section_ID    = isset($_POST['Std_section_ID']) ? $this->input->post('Std_section_ID') : 0;
          $Std_group_ID      = isset($_POST['Std_group_ID']) ? $this->input->post('Std_group_ID') : 0;
          $Std_medium_ID     = isset($_POST['Std_medium_ID']) ? $this->input->post('Std_medium_ID') : 0;
          $Std_shift_ID      = isset($_POST['Std_shift_ID']) ? $this->input->post('Std_shift_ID') : 0;
          $today_date        =  date("d-m-Y");

          $number            = $Std_parent_mobile;
          $Student_Name      = count($Std_shift_ID);
          // echo "<pre>";print_r($Student_Name);echo "</pre>";
          // echo "<pre>";print_r($Std_shift_ID);echo "</pre>";
          //   echo "<pre>";print_r($_POST);echo "</pre>"; die();
          
          for ($i=0; $i < $Student_Name; $i++) { 
            $Query = "SELECT * 
              FROM tbl_sms_transactions
              WHERE 1=1 
              AND SMS_Stu_general_status=1
              ";

           if(!empty($STD_UNQ_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_UNQ_ID='$STD_UNQ_ID[$i]'";
            }

           if(!empty($SMS_stu_class_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_class_ID='$Std_class_ID[$i]'";
            }
            if(!empty($SMS_stu_group_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_group_ID='$SMS_stu_group_ID[$i]'";
            }
            if(!empty($Std_section_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_section_ID='$Std_section_ID[$i]'";
            }
            if(!empty($Std_medium_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_medium_ID='$Std_medium_ID[$i]'";
            }
            if(!empty($Std_shift_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_shift_ID='$Std_shift_ID[$i]'";
            }
           
            if(!empty($today_date)) {
             $Query .= " AND tbl_sms_transactions.SMS_Stu_general_date='$today_date'";
            }
             
              $query_result = $this->db->query($Query)->result_array(); 
              // echo "<pre>";print_r($query_result);echo "</pre>";die();
            }
            
          if(empty($query_result)){
            $today            = date("d-m-Y H:i:s");
            for ($i=0; $i < $Student_Name; $i++) { 
               $data = array(

                   'SMS_stu_UNQ_ID'           => trim($STD_UNQ_ID[$i]),
                   'SMS_Std_parent_mobile'    => trim($Std_parent_mobile[$i]),
                   'SMS_stu_class_ID'         => trim($Std_class_ID[$i]),
                   'SMS_stu_group_ID'         => trim($Std_group_ID[$i]),
                   'SMS_stu_section_ID'       => trim($Std_section_ID[$i]),
                   'SMS_stu_medium_ID'        => trim($Std_medium_ID[$i]),
                   'SMS_stu_shift_ID'         => trim($Std_shift_ID[$i]),
                   'smsBodyfindGeneral'       => trim($smsBodyfindGeneral[$i]),
                   'SMS_Stu_general_date'     => $today_date,
                   'SMS_Stu_general_status'   => 1,
                   'SMS_stu_craeted'          => $today,
               );
                  
               $str = $this->db->insert_string("tbl_sms_transactions", $data);
                $this->session->set_userdata('message','SMS Data Sent Successfully in Database ');
               $query = $this->db->query($str);
               // API start 
               $number     = $Std_parent_mobile[$i];
               $SmsText    = $smsBodyfindGeneral[$i]; 
               $msg1       = str_replace(" ", "%20", $SmsText);

               //$url = "http://api.zaman-it.com/api/sendsms/plain?user=01712738170&password=6VpTHEya&sender=BD017127381&SMSText=$msg1&GSM=$number";
                //$response = file_get_contents($url); 
              //API end 
            }
          }else{
              $this->session->set_userdata('message',' Student General SMS already sent Today ! Please Try again different class or section');
            redirect(base_url().'sms/sms/send_sms');
          }

        }



        // SMS Result start here

        public function sms_sending_result(){
        
          $result_sms       = isset($_POST['result_sms']) ? $this->input->post('result_sms') : 0;
          $Student_Name     = isset($_POST['Std_Name']) ? $this->input->post('Std_Name') : 0;
          $Std_parent_mobile= isset($_POST['Std_parent_mobile']) ? $this->input->post('Std_parent_mobile') : 0;
          $STD_UNQ_ID       = isset($_POST['Marks_Sum_Student_ID']) ? $this->input->post('Marks_Sum_Student_ID') : 0;
          $Std_roll         = isset($_POST['Std_roll']) ? $this->input->post('Std_roll') : 0;
          $Std_class_ID     = isset($_POST['Marks_Sum_Class_ID']) ? $this->input->post('Marks_Sum_Class_ID') : 0;
          $Std_section_ID   = isset($_POST['Marks_Sum_Sectoin_ID']) ? $this->input->post('Marks_Sum_Sectoin_ID') : 0;
          $Std_group_ID     = isset($_POST['Marks_Sum_Group_ID']) ? $this->input->post('Marks_Sum_Group_ID') : 0;
          $Std_medium_ID    = isset($_POST['Marks_Sum_Medium_ID']) ? $this->input->post('Marks_Sum_Medium_ID') : 0;
          $Std_shift_ID     = isset($_POST['Marks_Sum_Shift_ID']) ? $this->input->post('Marks_Sum_Shift_ID') : 0;
          $Exam_code_ID     = isset($_POST['Marks_Sum_Exam_code_ID']) ? $this->input->post('Marks_Sum_Exam_code_ID') : 0;
// echo "<pre>";print_r($Exam_code_ID); echo "</pre>";die();
          $today_date      =  date("d-m-Y");

          $number          = $Std_parent_mobile;
          $Student_Name     = count($Student_Name);
          
          for ($i=0; $i < $Student_Name; $i++) { 
            $Query = "SELECT * 
              FROM tbl_sms_transactions
              WHERE 1=1 
              AND SMS_Result_Exam_Starus=1
              ";

           if(!empty($STD_UNQ_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_UNQ_ID='$STD_UNQ_ID[$i]'";
            }

           if(!empty($SMS_stu_class_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_class_ID='$Std_class_ID[$i]'";
            }
            if(!empty($SMS_stu_group_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_group_ID='$SMS_stu_group_ID[$i]'";
            }
            if(!empty($Std_section_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_section_ID='$Std_section_ID[$i]'";
            }
            if(!empty($Std_medium_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_medium_ID='$Std_medium_ID[$i]'";
            }
            if(!empty($Std_shift_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_stu_shift_ID='$Std_shift_ID[$i]'";
            }
            if(!empty($Exam_code_ID)) {
             $Query .= " AND tbl_sms_transactions.SMS_Result_Exam_ID='$Exam_code_ID[$i]'";
            }
            if(!empty($today_date)) {
             $Query .= " AND tbl_sms_transactions.SMS_Stu_general_date='$today_date'";
            }
             
              $query_result = $this->db->query($Query)->result_array(); 
              // echo "<pre>";print_r($query_result);echo "</pre>";die();
            }
            
          if(empty($query_result)){
            $today            = date("d-m-Y H:i:s");
            for ($i=0; $i < $Student_Name; $i++) { 
               $data = array(

                   'SMS_stu_UNQ_ID'           => trim($STD_UNQ_ID[$i]),
                   'SMS_Std_parent_mobile'    => trim($Std_parent_mobile[$i]),
                   'SMS_stu_class_ID'         => trim($Std_class_ID[$i]),
                   'SMS_stu_group_ID'         => trim($Std_group_ID[$i]),
                   'SMS_stu_section_ID'       => trim($Std_section_ID[$i]),
                   'SMS_stu_medium_ID'        => trim($Std_medium_ID[$i]),
                   'SMS_stu_shift_ID'         => trim($Std_shift_ID[$i]),
                   'SMS_Result_Exam_Body'     => trim($result_sms[$i]),
                   'SMS_Result_Exam_ID'       => trim($Exam_code_ID[$i]),
                   'SMS_Stu_general_date'     => $today_date,
                   'SMS_Result_Exam_Starus'   => 1,
                   'SMS_stu_craeted'          => $today,
               );
                  
               $str = $this->db->insert_string("tbl_sms_transactions", $data);
               $this->session->set_userdata('message','SMS Data Sent Successfully to Student & Database ');
               $query = $this->db->query($str);

               // API start 
               $number     = $Std_parent_mobile[$i];
               $SmsText    = $result_sms[$i];
               
               $msg1       = str_replace(" ", "%20", $SmsText);

              // $url="http://api.mimsms.com/api/v3/sendsms/plain?user=faruk.cse14@gmail.com&password=Cyberdyne123&sender=Cyberdyne&SMSText=$msg1&GSM=$number";
              // $response = file_get_contents($url);

                // $url = "http://api.zaman-it.com/api/sendsms/plain?user=01712738170&password=6VpTHEya&sender=BD017127381&SMSText=$msg1&GSM=$number";
                // $response = file_get_contents($url); 
              //API end 
            }
          }else{
              $this->session->set_userdata('message',' Student Result SMS already sent This Class ! Please Try again different class or section');
            redirect(base_url().'sms/sms/send_sms');
          }

        }

        // SMS Result End here
    
  // SMS succesfully end here for student


      // SMS succesfully start  here for teacher
      public function sms_sending_teacher_general(){
        
          $smsBodyTeacherfindGeneral = isset($_POST['smsBodyTeacherfindGeneral']) ? $this->input->post('smsBodyTeacherfindGeneral') : 0;
          $Teacher_Name     = isset($_POST['Teacher_Name']) ? $this->input->post('Teacher_Name') : 0;
          $Teacher_mobile   = isset($_POST['Teacher_mobile']) ? $this->input->post('Teacher_mobile') : 0;
          $Teacher_UniqueID = isset($_POST['Teacher_UniqueID']) ? $this->input->post('Teacher_UniqueID') : 0;
          $Teacher_mediumID = isset($_POST['Teacher_mediumID']) ? $this->input->post('Teacher_mediumID') : 0;
          $Teacher_shiftID  = isset($_POST['Teacher_shiftID']) ? $this->input->post('Teacher_shiftID') : 0;
          $today_date       =  date("d-m-Y");
// echo "<pre>";print_r($smsBodyTeacherfindGeneral); echo "</pre>";die();
// echo "<pre>";print_r($_POST); echo "</pre>";die();

          $number         = $Teacher_mobile;
          $Teacher_Name   = count($Teacher_Name);
          
          for ($i=0; $i < $Teacher_Name; $i++) { 
            $Query = "SELECT * 
              FROM tbl_sms_transactions
              WHERE 1=1 
              AND SMS_Teacher_general_status=1
              ";

             if(!empty($Teacher_UniqueID)) {
             $Query .= " AND tbl_sms_transactions.SMS_Teacher_UNQ_ID='$Teacher_UniqueID[$i]'";
            }
           
            if(!empty($Teacher_mediumID)) {
             $Query .= " AND tbl_sms_transactions.SMS_Teacher_medium_ID='$Teacher_mediumID[$i]'";
            }
            if(!empty($Teacher_shiftID)) {
             $Query .= " AND tbl_sms_transactions.SMS_Teacher_shift_ID='$Teacher_shiftID[$i]'";
            }
           
            if(!empty($today_date)) {
             $Query .= " AND tbl_sms_transactions.SMS_Teacher_general_date='$today_date'";
            }
             
              $query_result = $this->db->query($Query)->result_array(); 
              // echo "<pre>";print_r($query_result);echo "</pre>";die();
            }
            
          if(empty($query_result)){
            $today            = date("d-m-Y H:i:s");
            for ($i=0; $i < $Teacher_Name; $i++) { 
               $data = array(

                   'SMS_Teacher_UNQ_ID'         => trim($Teacher_UniqueID[$i]),
                   'SMS_Teacher_mobile'         => trim($Teacher_mobile[$i]),
                   'SMS_Teacher_medium_ID'      => trim($Teacher_mediumID[$i]),
                   'SMS_Teacher_shift_ID'       => trim($Teacher_shiftID[$i]),
                   'smsBodyTeacherfindGeneral'  => trim($smsBodyTeacherfindGeneral[$i]),
                   'SMS_Teacher_general_date'   => $today_date,
                   'SMS_Teacher_general_status' => 1,
                   'SMS_Teacher_craeted'        => $today,
               );
                  
               $str = $this->db->insert_string("tbl_sms_transactions", $data);
                $this->session->set_userdata('message','SMS Data Sent Successfully in Database ');
               $query = $this->db->query($str);

               // API start 
               $number     = $Teacher_mobile[$i];
               $SmsText    = $smsBodyTeacherfindGeneral[$i];
               
               $msg1       = str_replace(" ", "%20", $SmsText);

               // $url = "http://api.zaman-it.com/api/sendsms/plain?user=01712738170&password=6VpTHEya&sender=BD017127381&SMSText=$msg1&GSM=$number";
               //  $response = file_get_contents($url); 
              //API end 
            }
          }else{
              $this->session->set_userdata('message',' Teacher General SMS already sent Today ! Please Try again different class or section');
            redirect(base_url().'sms/sms/send_sms');
          }

        }
    
  // SMS succesfully end here




  //<----======   mahnub sms create works end=========--->

  // Teacher Task  start here

  public function all_teacher_unique_id_finding(){
    $Query = "SELECT tbl_teacher.Teacher_UniqueID
              FROM tbl_teacher 
              WHERE 1=1 
              ORDER BY Teacher_ID ASC ";
        $query_result = $this->db->query($Query)->result_array(); 
        return $query_result;
  }
  // Teacher Task  end here




 }
