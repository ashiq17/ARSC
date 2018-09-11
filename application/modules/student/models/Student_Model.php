<?php
class Student_Model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
        // $this->load->library('Facebook');
    }

  public  function insert_mgt(){
        // echo "<pre>"; print_r($_POST);echo "</pre>";die();
        $error = '';
        $fdataa = array();
        $config['upload_path'] = 'images/student';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 5000;
        // $config['max_width']   = 1024;
        // $config['max_height']  = 768;
        $images = '';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $sdata['error_msg'] = $this->upload->display_errors();
            $this->session->set_userdata($sdata);
            // redirect(base_url().'blog/blogauthor/index');
        } else {
            $fdataa = $this->upload->data();
            $images = $fdataa['file_name'];
        }
        $data = array(
            // 'STD_UNQ_ID' =>'2018'.rand(),
            'STD_UNQ_ID'            => $this->input->post("STD_UNQ_ID"),
            'Std_Name'              => $this->input->post("Std_Name"),
            'Std_gender'            => $this->input->post("Std_gender"),
            'Std_birthday'          => $this->input->post("Std_birthday"),
            'Std_email'             => $this->input->post("Std_email"),
            'Std_address'           => $this->input->post("Std_address"),
            // 'Std_mobile'            => $this->input->post("Std_mobile"),
            'Std_registration_date' => $this->input->post("Std_registration_date"),
            'Std_parent'            => $this->input->post("Std_parent"),
            'Std_parent2'           => $this->input->post("Std_parent2"),
            'Std_birth_ID'          => $this->input->post("Std_birth_ID"),
            'Student_BloodGroup'    => $this->input->post("Student_BloodGroup"),
            'Std_parent_mobile'     => $this->input->post("Std_parent_mobile"),
            'Std_religion'          => $this->input->post("Std_religion"),
            'Std_academic_ID'       => $this->input->post("Std_academic_ID"),
            'Std_class_ID'          => $this->input->post("Std_class_ID"),
            'Std_section_ID'        => $this->input->post("Std_section_ID"),
            'Std_group_ID'          => $this->input->post("Std_group_ID"),
            'Std_medium_ID'            => $this->input->post("Std_medium_ID"),
            'Std_shift_ID'          => $this->input->post("Std_shift_ID"),
            'Std_roll'              => $this->input->post("Std_roll"),
            'Std_status'            => $this->input->post("Std_status"),
            'Image'                 => $images,
            'Created'               =>date("d-m-Y H:i:s"),
            'Modified'              =>''
        );
        $str = $this->db->insert_string("tbl_student", $data);
//        echo "<pre>";
//        print_r($str);
//        die();
        $query = $this->db->query($str);
        $insert_id = $this->db->insert_id();
        return $this->db->affected_rows();
    }


    // attendance start here test 


   public   function insert_student_attendance(){

          // echo "<pre>";print_r($_POST);echo "</pre>"; die();

          
          $STD_UNQ_ID         = isset($_POST['STD_UNQ_ID']) ? $this->input->post('STD_UNQ_ID') : 0;
          $class_id           = isset($_POST['Std_class_ID']) ? $this->input->post('Std_class_ID') : 0;
          $section_id         = isset($_POST['Std_section_ID']) ? $this->input->post('Std_section_ID') : 0;
          $group_id           = isset($_POST['Std_group_ID']) ? $this->input->post('Std_group_ID') : 0;
          $Std_shift_ID       = isset($_POST['Std_shift_ID']) ? $this->input->post('Std_shift_ID') : 0;
          $Std_medium_ID      = isset($_POST['Std_medium_ID']) ? $this->input->post('Std_medium_ID') : 0;
          $Std_roll           = isset($_POST['Std_roll']) ? $this->input->post('Std_roll') : 0;
          $present_status     = isset($_POST['present_status']) ? $this->input->post('present_status') : 0;
          $Std_attendance_date= isset($_POST['Std_attendance_date']) ? $this->input->post('Std_attendance_date') : 0;
          
          $attendance_day     = date("d", strtotime($Std_attendance_date[0]));
          $attendance_month   = date("m", strtotime($Std_attendance_date[0]));
          $attendance_year    = date("Y", strtotime($Std_attendance_date[0]));
          
          // $Std_attendance_date
          /* Data process & save into stu attendance table start */
// echo "<pre>"; print_r($search_check_out); echo "<pre>"; die();
          $update_status      = isset($_POST['update_status']) ? $this->input->post('update_status') : 0;
          $Student_Name_count     = count($STD_UNQ_ID); 
//           die();

          if ($update_status==1) {
           
             for ($i=0; $i < $Student_Name_count; $i++) {   
           
                $update_data = array(
                 'Std_Attendance_Status'    => trim($present_status[$i]),
                 'Modified'                 => date("d-m-Y H:i:s"),
               );

           $this->db->where('Std_Attendance_NameID', $STD_UNQ_ID[$i]);
           $this->db->update("tbl_student_attendance", $update_data);
            }
          
          } else{
           
          
           $Student_Name_count     = count($STD_UNQ_ID); 
           for ($i=0; $i < $Student_Name_count; $i++) {   
            $Query = "SELECT * 
              FROM tbl_student_attendance
              WHERE 1=1  
              AND Std_Attendance_NameID=$STD_UNQ_ID[$i]
              AND Std_Attendance_Date='$Std_attendance_date[0]'
              ";
              $query_result = $this->db->query($Query)->result_array(); 

              if(empty($query_result)){
                $data = array(
                 'Std_Attendance_NameID'    => $STD_UNQ_ID[$i],
                 'Std_Attendance_class_ID'  => trim($class_id[$i]),
                 'Std_Attendance_section_ID'=> trim($section_id[$i]),
                 'Std_Attendance_group_ID'  => trim($group_id[$i]),
                 'Std_Attendance_shift_ID'  => trim($Std_shift_ID[$i]),
                 'Std_Attendance_medium_ID' => trim($Std_medium_ID[$i]),
                 'Std_Attendance_Roll'      => trim($Std_roll[$i]),
                 'Std_Attendance_Date'      => trim($Std_attendance_date[$i]),
                 'Std_Attendance_Status'    => trim($present_status[$i]),
                 'Created'                  => date("d-m-Y H:i:s"),
             );
                
            $str = $this->db->insert_string("tbl_student_attendance", $data);
                   $query = $this->db->query($str);
            }
          }
          }

          /* Data process & save into marks input table end */

          #######################################################################

          /* Data process & save or update into marks summary table start */
          $Student_Name_sum     = count($STD_UNQ_ID);
              $Date01 = 0; $Date02 = 0; $Date03 = 0; $Date04 = 0; $Date05 = 0; $Date06 = 0; $Date07 = 0; $Date08 = 0; 
              $Date09 = 0; $Date10 = 0; $Date11 = 0; $Date12 = 0; $Date13 = 0; $Date14 = 0; $Date15 = 0; $Date16 = 0; 
              $Date17 = 0; $Date18 = 0; $Date19 = 0; $Date20 = 0; $Date21 = 0; $Date22 = 0; $Date23 = 0; $Date24 = 0;
              $Date25 = 0; $Date26 = 0; $Date27 = 0; $Date28 = 0; $Date29 = 0; $Date30 = 0; $Date31 = 0; 



              for ($j=0; $j < $Student_Name_sum; $j++) {

              $Query = "SELECT * 
                FROM tbl_student_atten_summary
                WHERE 1=1
                AND Stu_atten_Sum_MonthName=$attendance_month
                AND Stu_atten_Sum_YearName=$attendance_year
                AND Stu_atten_Sum_Stu_ID=$STD_UNQ_ID[$j]
                ";
                $query_attendance_summary = $this->db->query($Query)->result_array(); 

                if(empty($query_attendance_summary)){
                  // echo "<pre>";print_r($attendance_day);echo "</pre>"; die();

       
                  if($attendance_day=='01'){
                    $Date01 = $present_status[$j];
                  }
                  elseif($attendance_day=='02'){
                     $Date02 = $present_status[$j];
                  } elseif($attendance_day=='03'){
                     $Date03 = $present_status[$j];
                  } elseif($attendance_day=='04'){
                     $Date04 = $present_status[$j];
                  } elseif($attendance_day=='05'){
                     $Date05 = $present_status[$j];
                  } elseif($attendance_day=='06'){
                     $Date06 = $present_status[$j];
                  } elseif($attendance_day=='07'){
                     $Date07 = $present_status[$j];
                  } elseif($attendance_day=='08'){
                     $Date08 = $present_status[$j];
                  } elseif($attendance_day=='09'){
                     $Date09 = $present_status[$j];
                  } elseif($attendance_day=='10'){
                     $Date10 = $present_status[$j];
                  } elseif($attendance_day=='11'){
                     $Date11 = $present_status[$j];
                  } elseif($attendance_day=='12'){
                     $Date12 = $present_status[$j];
                  } elseif($attendance_day=='13'){
                     $Date13 = $present_status[$j];
                  } elseif($attendance_day=='14'){
                     $Date14 = $present_status[$j];
                  } elseif($attendance_day=='15'){
                     $Date15 = $present_status[$j];
                  } elseif($attendance_day=='16'){
                     $Date16 = $present_status[$j];
                  } elseif($attendance_day=='17'){
                     $Date17 = $present_status[$j];
                  } elseif($attendance_day=='18'){
                     $Date18 = $present_status[$j];
                  } elseif($attendance_day=='19'){
                     $Date19 = $present_status[$j];
                  } elseif($attendance_day=='20'){
                     $Date20 = $present_status[$j];
                  } elseif($attendance_day=='21'){
                     $Date21 = $present_status[$j];
                  } elseif($attendance_day=='22'){
                     $Date22 = $present_status[$j];
                  } elseif($attendance_day=='23'){
                     $Date23 = $present_status[$j];
                  } elseif($attendance_day=='24'){
                     $Date24 = $present_status[$j];
                  } elseif($attendance_day=='25'){
                     $Date25 = $present_status[$j];
                  } elseif($attendance_day=='26'){
                     $Date26 = $present_status[$j];
                  } elseif($attendance_day=='27'){
                     $Date27 = $present_status[$j];
                  } elseif($attendance_day=='28'){
                     $Date28 = $present_status[$j];
                  } elseif($attendance_day=='29'){
                     $Date29 = $present_status[$j];
                  } elseif($attendance_day=='30'){
                     $Date30 = $present_status[$j];
                  } elseif($attendance_day=='31'){
                     $Date31 = $present_status[$j];
                  } 

                   $summary_data = array(

                       'Stu_atten_Sum_Stu_ID'         => $STD_UNQ_ID[$j],
                       'Stu_atten_Sum_Stu_Roll'       => $Std_roll[$j],
                       'Stu_atten_Sum_Medium_ID'      => trim($Std_medium_ID[$j]),
                       'Stu_atten_Sum_Shift_ID'       => trim($Std_shift_ID[$j]),
                       'Stu_atten_Sum_Group_ID'       => trim($group_id[$j]),
                       'Stu_atten_Sum_Stu_Class'      => trim($class_id[$j]),
                       'Stu_atten_Sum_Section_ID'     => trim($section_id[$j]),
                       'Stu_atten_Sum_MonthName'      => $attendance_month,
                       'Stu_atten_Sum_YearName'       => $attendance_year,
                       'Stu_atten_Sum_Date01'         =>$Date01,
                       'Stu_atten_Sum_Date02'         =>$Date02,
                       'Stu_atten_Sum_Date03'         =>$Date03,
                       'Stu_atten_Sum_Date04'         =>$Date04,
                       'Stu_atten_Sum_Date05'         =>$Date05,
                       'Stu_atten_Sum_Date06'         =>$Date06,
                       'Stu_atten_Sum_Date07'         =>$Date07,
                       'Stu_atten_Sum_Date08'         =>$Date08,
                       'Stu_atten_Sum_Date09'         =>$Date09,
                       'Stu_atten_Sum_Date10'         =>$Date10,
                       'Stu_atten_Sum_Date11'         =>$Date11,
                       'Stu_atten_Sum_Date12'         =>$Date12,
                       'Stu_atten_Sum_Date13'         =>$Date13,
                       'Stu_atten_Sum_Date14'         =>$Date14,
                       'Stu_atten_Sum_Date15'         =>$Date15,
                       'Stu_atten_Sum_Date16'         =>$Date16,
                       'Stu_atten_Sum_Date17'         =>$Date17,
                       'Stu_atten_Sum_Date18'         =>$Date18,
                       'Stu_atten_Sum_Date19'         =>$Date19,
                       'Stu_atten_Sum_Date20'         =>$Date20,
                       'Stu_atten_Sum_Date21'         =>$Date21,
                       'Stu_atten_Sum_Date22'         =>$Date22,
                       'Stu_atten_Sum_Date23'         =>$Date23,
                       'Stu_atten_Sum_Date24'         =>$Date24,
                       'Stu_atten_Sum_Date25'         =>$Date25,
                       'Stu_atten_Sum_Date26'         =>$Date26,
                       'Stu_atten_Sum_Date27'         =>$Date27,
                       'Stu_atten_Sum_Date28'         =>$Date28,
                       'Stu_atten_Sum_Date29'         =>$Date29,
                       'Stu_atten_Sum_Date30'         =>$Date30,
                       'Stu_atten_Sum_Date31'         =>$Date31,
                      
                       'Stu_atten_Sum_Created'        => date("d-m-Y H:i:s"),
                   );

                   $atten_sumamry = $this->db->insert("tbl_student_atten_summary", $summary_data);
                   // $query_summary_result = $this->db->query($atten_sumamry);
                }
                  //update start

                  // die(); 
              else
              {

                $Query = "SELECT * 
                  FROM tbl_student_atten_summary
                  WHERE 1=1
                  AND Stu_atten_Sum_MonthName=$attendance_month
                  AND Stu_atten_Sum_YearName=$attendance_year
                  AND Stu_atten_Sum_Stu_ID=$STD_UNQ_ID[$j]
                ";
                $query_atten_summary = $this->db->query($Query)->result_array(); 

                $Date01=$query_atten_summary[0]['Stu_atten_Sum_Date01'];
                $Date02=$query_atten_summary[0]['Stu_atten_Sum_Date02'];
                $Date03=$query_atten_summary[0]['Stu_atten_Sum_Date03'];
                $Date04=$query_atten_summary[0]['Stu_atten_Sum_Date04'];
                $Date05=$query_atten_summary[0]['Stu_atten_Sum_Date05'];
                $Date06=$query_atten_summary[0]['Stu_atten_Sum_Date06'];
                $Date07=$query_atten_summary[0]['Stu_atten_Sum_Date07'];
                $Date08=$query_atten_summary[0]['Stu_atten_Sum_Date08'];
                $Date09=$query_atten_summary[0]['Stu_atten_Sum_Date09'];
                $Date10=$query_atten_summary[0]['Stu_atten_Sum_Date10'];
                $Date11=$query_atten_summary[0]['Stu_atten_Sum_Date11'];
                $Date12=$query_atten_summary[0]['Stu_atten_Sum_Date12'];
                $Date13=$query_atten_summary[0]['Stu_atten_Sum_Date13'];
                $Date14=$query_atten_summary[0]['Stu_atten_Sum_Date14'];
                $Date15=$query_atten_summary[0]['Stu_atten_Sum_Date15'];
                $Date16=$query_atten_summary[0]['Stu_atten_Sum_Date16'];
                $Date17=$query_atten_summary[0]['Stu_atten_Sum_Date17'];
                $Date18=$query_atten_summary[0]['Stu_atten_Sum_Date18'];
                $Date19=$query_atten_summary[0]['Stu_atten_Sum_Date19'];
                $Date20=$query_atten_summary[0]['Stu_atten_Sum_Date20'];
                $Date21=$query_atten_summary[0]['Stu_atten_Sum_Date21'];
                $Date22=$query_atten_summary[0]['Stu_atten_Sum_Date22'];
                $Date23=$query_atten_summary[0]['Stu_atten_Sum_Date23'];
                $Date24=$query_atten_summary[0]['Stu_atten_Sum_Date24'];
                $Date25=$query_atten_summary[0]['Stu_atten_Sum_Date25'];
                $Date26=$query_atten_summary[0]['Stu_atten_Sum_Date26'];
                $Date27=$query_atten_summary[0]['Stu_atten_Sum_Date27'];
                $Date28=$query_atten_summary[0]['Stu_atten_Sum_Date28'];
                $Date29=$query_atten_summary[0]['Stu_atten_Sum_Date29'];
                $Date30=$query_atten_summary[0]['Stu_atten_Sum_Date30'];
                $Date31=$query_atten_summary[0]['Stu_atten_Sum_Date31'];
                 
                  if($attendance_day=='01'){
                    $Date01 = $present_status[$j];
                  }
                  elseif($attendance_day=='02'){
                     $Date02 = $present_status[$j];
                  } elseif($attendance_day=='03'){
                     $Date03 = $present_status[$j];
                  } elseif($attendance_day=='04'){
                     $Date04 = $present_status[$j];
                  } elseif($attendance_day=='05'){
                     $Date05 = $present_status[$j];
                  } elseif($attendance_day=='06'){
                     $Date06 = $present_status[$j];
                  } elseif($attendance_day=='07'){
                     $Date07 = $present_status[$j];
                  } elseif($attendance_day=='08'){
                     $Date08 = $present_status[$j];
                  } elseif($attendance_day=='09'){
                     $Date09 = $present_status[$j];
                  } elseif($attendance_day=='10'){
                     $Date10 = $present_status[$j];
                  } elseif($attendance_day=='11'){
                     $Date11 = $present_status[$j];
                  } elseif($attendance_day=='12'){
                     $Date12 = $present_status[$j];
                  } elseif($attendance_day=='13'){
                     $Date13 = $present_status[$j];
                  } elseif($attendance_day=='14'){
                     $Date14 = $present_status[$j];
                  } elseif($attendance_day=='15'){
                     $Date15 = $present_status[$j];
                  } elseif($attendance_day=='16'){
                     $Date16 = $present_status[$j];
                  } elseif($attendance_day=='17'){
                     $Date17 = $present_status[$j];
                  } elseif($attendance_day=='18'){
                     $Date18 = $present_status[$j];
                  } elseif($attendance_day=='19'){
                     $Date19 = $present_status[$j];
                  } elseif($attendance_day=='20'){
                     $Date20 = $present_status[$j];
                  } elseif($attendance_day=='21'){
                     $Date21 = $present_status[$j];
                  } elseif($attendance_day=='22'){
                     $Date22 = $present_status[$j];
                  } elseif($attendance_day=='23'){
                     $Date23 = $present_status[$j];
                  } elseif($attendance_day=='24'){
                     $Date24 = $present_status[$j];
                  } elseif($attendance_day=='25'){
                     $Date25 = $present_status[$j];
                  } elseif($attendance_day=='26'){
                     $Date26 = $present_status[$j];
                  } elseif($attendance_day=='27'){
                     $Date27 = $present_status[$j];
                  } elseif($attendance_day=='28'){
                     $Date28 = $present_status[$j];
                  } elseif($attendance_day=='29'){
                     $Date29 = $present_status[$j];
                  } elseif($attendance_day=='30'){
                     $Date30 = $present_status[$j];
                  } elseif($attendance_day=='31'){
                     $Date31 = $present_status[$j];
                  } 

                  // echo "<pre>"; print_r($Date01); echo "<pre>";  die();
                  $summary_data_update = array(
                       // 'Stu_atten_Sum_Stu_ID'         => $STD_UNQ_ID[$j],
                       'Stu_atten_Sum_Date01'         =>$Date01,
                       'Stu_atten_Sum_Date02'         =>$Date02,
                       'Stu_atten_Sum_Date03'         =>$Date03,
                       'Stu_atten_Sum_Date04'         =>$Date04,
                       'Stu_atten_Sum_Date05'         =>$Date05,
                       'Stu_atten_Sum_Date06'         =>$Date06,
                       'Stu_atten_Sum_Date07'         =>$Date07,
                       'Stu_atten_Sum_Date08'         =>$Date08,
                       'Stu_atten_Sum_Date09'         =>$Date09,
                       'Stu_atten_Sum_Date10'         =>$Date10,
                       'Stu_atten_Sum_Date11'         =>$Date11,
                       'Stu_atten_Sum_Date12'         =>$Date12,
                       'Stu_atten_Sum_Date13'         =>$Date13,
                       'Stu_atten_Sum_Date14'         =>$Date14,
                       'Stu_atten_Sum_Date15'         =>$Date15,
                       'Stu_atten_Sum_Date16'         =>$Date16,
                       'Stu_atten_Sum_Date17'         =>$Date17,
                       'Stu_atten_Sum_Date18'         =>$Date18,
                       'Stu_atten_Sum_Date19'         =>$Date19,
                       'Stu_atten_Sum_Date20'         =>$Date20,
                       'Stu_atten_Sum_Date21'         =>$Date21,
                       'Stu_atten_Sum_Date22'         =>$Date22,
                       'Stu_atten_Sum_Date23'         =>$Date23,
                       'Stu_atten_Sum_Date24'         =>$Date24,
                       'Stu_atten_Sum_Date25'         =>$Date25,
                       'Stu_atten_Sum_Date26'         =>$Date26,
                       'Stu_atten_Sum_Date27'         =>$Date27,
                       'Stu_atten_Sum_Date28'         =>$Date28,
                       'Stu_atten_Sum_Date29'         =>$Date29,
                       'Stu_atten_Sum_Date30'         =>$Date30,
                       'Stu_atten_Sum_Date31'         =>$Date31,
                       // 'Stu_atten_Sum_Modified'       =>date("d-m-Y H:i:s"),
                      
                   );
                  
                   $this->db->where('Stu_atten_Sum_Stu_ID', $STD_UNQ_ID[$j]);
                   $this->db->update("tbl_student_atten_summary", $summary_data_update);
                }
              }
          /* Data process & save or update into marks summary table end */
        }
      
  // attendance end here ok

    public function insert_student_attendance1(){
           // echo "<pre>";print_r($_POST);echo "</pre>";die();
          $student_name   = isset($_POST['STD_UNQ_ID']) ? $this->input->post('STD_UNQ_ID') : '';
          $class_id       = isset($_POST['Std_class_ID']) ? $this->input->post('Std_class_ID') : '';
          $section_id     = isset($_POST['Std_section_ID']) ? $this->input->post('Std_section_ID') : '';
          $group_id       = isset($_POST['Std_group_ID']) ? $this->input->post('Std_group_ID') : '';
          $Std_shift_ID   = isset($_POST['Std_shift_ID']) ? $this->input->post('Std_shift_ID') : '';
          $Std_medium_ID  = isset($_POST['Std_medium_ID']) ? $this->input->post('Std_medium_ID') : '';
          $roll           = isset($_POST['Std_roll']) ? $this->input->post('Std_roll') : '';
          $date           = isset($_POST['Std_attendance_date']) ? $this->input->post('Std_attendance_date') : '';
          $present_status = isset($_POST['present_status']) ? $this->input->post('present_status') : '';
          $count_student  = count($student_name);
          $today          = date('d-m-Y');
        
          for ($i=0; $i < $count_student; $i++) { 
             $data = array(
                 'Std_Attendance_NameID'    => trim($student_name[$i]),
                 'Std_Attendance_class_ID'  => trim($class_id[$i]),
                 'Std_Attendance_section_ID'=> trim($section_id[$i]),
                 'Std_Attendance_group_ID'  => trim($group_id[$i]),
                 'Std_Attendance_shift_ID'  => trim($Std_shift_ID[$i]),
                 'Std_Attendance_medium_ID' => trim($Std_medium_ID[$i]),
                 'Std_Attendance_Roll'      => trim($roll[$i]),
                 'Std_Attendance_Date'      => $today,
                 'Std_Attendance_Status'    => trim($present_status[$i]),
                 'Created' => date("d-m-Y H:i:s"),
             );
                
             $str = $this->db->insert_string("tbl_student_attendance", $data);
             $query = $this->db->query($str);
             // $insert_id = $this->db->insert_id();
             // return $this->db->affected_rows();
          }
   
       }
   

     public function edit_mgt(){
        $where = " Id='" . $this->input->post('eid') . "' and State='1' ";
        $data = array(
            'Name' => $this->input->post("Name"),
            'class_id' => $this->input->post("class_id"),
            'section_id' => $this->input->post("section_id"),
            'birthday' => $this->input->post("birthday"),
            'st_gender' => $this->input->post("st_gender"),
            'present_address' => $this->input->post("present_address"),
            'mobile' => $this->input->post("mobile"),
            'email' => $this->input->post("email"),
             'roll' => $this->input->post("roll"),
            'transport_id' => $this->input->post("transport_id"),
            'hostel_id' => $this->input->post("hostel_id"),
            'st_user' => $this->input->post("st_user"),
            'st_password' => $this->input->post("st_password"),

        );
        $str = $this->db->update_string("student_add", $data, $where);
        $query = $this->db->query($str);
        return $this->db->affected_rows();
    }

     public function get_all_info_by_id($eid = NULL)
    {
        $query = $this->db->get_where('student_add', array('Id' => $eid, 'State' => '1'));
        return $query->result();
    }

     public function getallpublication($class = NULL)
    {
        $str = "select * from section where State='1' and classId='$class' ";
        $query = $this->db->query($str);
        return $query->result();
    }

     public function getallpublication1($pclass = NULL)
    {
        $str = "select * from section where State='1' and classId='$pclass' ";
        $query = $this->db->query($str);
        return $query->result();

    }

     public function getname($table = NULL, $id = NULL)
    {
        $bat = 1;
        $str = "select Name   from  $table where Id='$id' ";
        $query = $this->db->query($str);
        foreach ($query->result() as $row) {
            $bat = $row->Name;
        }
        return $bat;
    }


//========mahbub Category starting here====///


    public function all_student_finding(){
        $Query="SELECT tbl_student.*, tbl_class.Class_Name,tbl_section.Section_Name, tbl_group.Group_Name,tbl_year.Year_Name
            FROM tbl_student 
            LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
            LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
            LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
            LEFT JOIN tbl_year   on tbl_student.Std_academic_ID =tbl_year.Year_ID
            WHERE 1=1
            
            ORDER BY Std_ID DESC;";
        $query_result = $this->db->query($Query)->result_array();
        // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result;
    }

    public function print_student_single_finding($Stu_ID){
         $Query="SELECT tbl_student.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_year.Year_Name
            FROM tbl_student 
              LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
              LEFT JOIN tbl_year   on tbl_student.Std_academic_ID =tbl_year.Year_ID
              WHERE 1=1 
                AND tbl_student.Std_ID=$Stu_ID";
            $query_result = $this->db->query($Query)->result_array();
              // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
            return $query_result; 
      }
    public function all_active_student_finding(){
        $Query = "SELECT * 
                  FROM tbl_student 
                  WHERE 1=1 
                  AND Std_status=1
                  ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
     // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
    }
    public function all_inactive_student_finding(){
        $Query = "SELECT * 
                  FROM tbl_student 
                  WHERE 1=1 
                  AND Std_status=0
                  ORDER BY Std_Name ASC ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function edit_student_finding($id){
        $Query = "SELECT* 
                  FROM tbl_student 
                  WHERE 1=1 
                  AND tbl_student.Std_ID=$id ";
        $query_result = $this->db->query($Query)->result_array();
   // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
    }
    public function update_student($id){

         // echo "<pre>"; print_r($_POST); echo "</pre>";die();
        if (isset($_POST['submit']) == 'Update'){

                $error = '';
                $fdataa = array();
                 $images = '';

                if($_FILES['image']['name']!=""){
                     $config['upload_path'] = 'images/student';
                    // $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                    $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe';
                    $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload('image'))
                    {
                        $error = array('error' => $this->upload->display_errors());
                    }
                    else
                    {
                        $upload_data=$this->upload->data();
                        $image_name=$upload_data['file_name'];
                    }
                }
                else{
                    $image_name=$this->input->post('old_image');
                }

            $student_info = array(
                'STD_UNQ_ID'            => $this->input->post("STD_UNQ_ID"),
                'Std_Name'              => $this->input->post("Std_Name"),
                'Std_gender'            => $this->input->post("Std_gender"),
                'Std_birthday'          => $this->input->post("Std_birthday"),
                'Std_email'             => $this->input->post("Std_email"),
                'Std_address'           => $this->input->post("Std_address"),
                // 'Std_mobile'            => $this->input->post("Std_mobile"),
                'Std_registration_date' => $this->input->post("Std_registration_date"),
                'Std_parent'            => $this->input->post("Std_parent"),
                'Std_parent2'           => $this->input->post("Std_parent2"),
                'Std_birth_ID'          => $this->input->post("Std_birth_ID"),
                'Student_BloodGroup'    => $this->input->post("Student_BloodGroup"),
                'Std_parent_mobile'     => $this->input->post("Std_parent_mobile"),
                'Std_religion'          => $this->input->post("Std_religion"),
                'Std_academic_ID'       => $this->input->post("Std_academic_ID"),
                'Std_class_ID'          => $this->input->post("Std_class_ID"),
                'Std_section_ID'        => $this->input->post("Std_section_ID"),
                'Std_group_ID'          => $this->input->post("Std_group_ID"),
                'Std_medium_ID'         => $this->input->post("Std_medium_ID"),
                'Std_shift_ID'          => $this->input->post("Std_shift_ID"),
                'Std_roll'              => $this->input->post("Std_roll"),
                'Std_status'            => $this->input->post("Std_status"),
                'Image'                 => $image_name,
                'Created'               =>date("d-m-Y H:i:s"),
                'Modified'              =>''
                );
            $this->db->where('Std_ID',$id);
            $this->db->update('tbl_student',$student_info);
        } 
    }

    public function delete_student($id){
        $this->db->where('Std_ID', $id);
        $this->db->delete('tbl_student');
    }



    // user add for student

    public function student_user_info_adding(){
            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            // die();
         $users = array(
            'EmployeeId'  => $this->input->post('STD_UNQ_ID'),
            'UserName'    => $this->input->post('username'),
            'Email'       => $this->input->post('email'),
            'Password'    => md5($this->input->post('password')),
            'RoleID'      => $this->input->post('role'),
            'Status'      => $this->input->post('status'),
            'created'     => date("d-m-Y H:i:s"),
            'modified'    => date("d-m-Y H:i:s"),
        );
         $users_pass = array(
            'stu_pass_unique_id'   => $this->input->post('STD_UNQ_ID'),
            'stu_pass_username'    => $this->input->post('username'),
            'stu_pass_password'    => $this->input->post('password'),
            'stu_pass_role_id'     => $this->input->post('role'),
            'stu_pass_stutas'      => 1,
            'stu_pass_created'              => date("d-m-Y H:i:s"),
            'stu_pass_modified'             => date("d-m-Y H:i:s"),
        );
        //Transfering data to Model
        $this->db->insert('tbl_user', $users);
        $this->db->insert('tbl_stu_password', $users_pass);
        $this->session->set_userdata('message','System User Info added Successfully! You can Login now');

    }

    public function role_finding(){
        $Query = "SELECT *
                  FROM tbl_roles
                  WHERE 1=1 
                  AND status = 1
                  ORDER BY tbl_roles.id ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function all_student_finding_summary(){
          $Query = "SELECT *
            FROM  tbl_student
            Where tbl_student.Std_status = 1 ";
            $query_result = $this->db->query($Query)->result_array();
            // echo "<pre>"; print_r($query_result); echo "</pre>";die();
            return $query_result;
         }  
   //       public function all_student_finding_summary(){
         //  $Query = "SELECT tbl_student.*, COUNT(tbl_student.STD_UNQ_ID) as total_student, tbl_class.Class_Name ,tbl_section.Section_Name,tbl_group.Group_Name 
   //          FROM  tbl_student
   //          LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
   //          LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
   //          LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
         //     Where tbl_student.Std_status = 1 ";
            //  $Query .= " GROUP BY tbl_student.Std_class_ID, tbl_student.Std_section_ID";
   //          $query_result = $this->db->query($Query)->result_array();
               
            // echo "<pre>"; print_r($query_result); echo "</pre>";die();
      //       return $query_result;
         // }   

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
        $query_result = $this->db->query($Query)->result_array();   
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
        $query_result = $this->db->query($Query)->result_array();
        // echo '<pre>',print_r($query_result),'</pre>';
        // die();
        return $query_result;
    }
    
    public function get_groupData() {
        $Query = "SELECT *
            FROM tbl_group
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        // echo '<pre>',print_r($query_result),'</pre>'; die();
        return $query_result;
    }

 // student report start here

    public function get_header_data(){
        $query = "SELECT * 
                  FROM tbl_header 
                  WHERE 1=1 AND HeaderID=1";
        $query_result = $this->db->query($query)->result_array();
        // echo "<pre>";print_r($query_result);echo "</pre>"; die();
        return $query_result;
    }

    public function print_student_all_finding(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();

            $search_check_inn   = $this->input->post('start_date');
            $search_check_in    = date("d-m-Y", strtotime($search_check_inn));
            $search_check_outt  = $this->input->post('end_date');
            $search_check_out   = date("d-m-Y", strtotime($search_check_outt));
            $class              = $this->input->post('Std_class_ID');
            // echo "<pre>"; print_r($division); echo "</pre>"; die();
            $section            = $this->input->post('Std_section_ID');
            $group              = $this->input->post('Std_group_ID');
            $shift              = $this->input->post('Std_shift_ID');
            $medium              = $this->input->post('Std_medium_ID');
          
            $student_status      = $this->input->post('student_status');

        $Query="SELECT tbl_student.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_year.Year_Name
            FROM tbl_student 
              LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
              LEFT JOIN tbl_year   on tbl_student.Std_academic_ID =tbl_year.Year_ID
            WHERE 1=1 ";

             if(!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
                $Query .= " AND (STR_TO_DATE(tbl_student.Created, '%d-%m-%Y') >= STR_TO_DATE('$search_check_in', '%d-%m-%Y')) AND (STR_TO_DATE(tbl_student.Created, '%d-%m-%Y') <= STR_TO_DATE('$search_check_out', '%d-%m-%Y')) ";
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
            if(!empty($_POST['Std_shift_ID'])) {
                $Query .= " AND tbl_student.Std_shift_ID=$shift";
            }if(!empty($_POST['Std_medium_ID'])) {
                $Query .= " AND tbl_student.Std_medium_ID=$medium";
            }
            if(!empty($_POST['student_status'])) {
                $Query .= " AND tbl_student.Std_status='$student_status'";
            }
                
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    } 

    // for password  report start here

    public function print_student_all_finding_password(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();
            $class              = $this->input->post('Std_class_ID');
            $section            = $this->input->post('Std_section_ID');
            $group              = $this->input->post('Std_group_ID');
            $shift              = $this->input->post('Std_shift_ID');
            $medium              = $this->input->post('Std_medium_ID');
          
            $student_status      = $this->input->post('student_status');

        $Query="SELECT tbl_student.Std_Name,tbl_student.STD_UNQ_ID,tbl_student.Std_parent_mobile,tbl_student.Std_email,tbl_student.Std_medium_ID,tbl_student.Std_shift_ID,tbl_student.Std_roll, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_year.Year_Name, tbl_stu_password.stu_pass_unique_id,tbl_stu_password.stu_pass_username,tbl_stu_password.stu_pass_password
            FROM tbl_student 
              LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
              LEFT JOIN tbl_year   on tbl_student.Std_academic_ID =tbl_year.Year_ID
              LEFT JOIN tbl_stu_password   on tbl_stu_password.stu_pass_unique_id =tbl_student.STD_UNQ_ID
            WHERE 1=1 ";

            
            if(!empty($_POST['Std_class_ID'])) {
                $Query .= " AND tbl_student.Std_class_ID=$class";
            }
            if(!empty($_POST['Std_section_ID'])) {
                $Query .= " AND tbl_student.Std_section_ID=$section";
            }
            if(!empty($_POST['Std_group_ID'])) {
                $Query .= " AND tbl_student.Std_group_ID=$group";
            }
            if(!empty($_POST['Std_shift_ID'])) {
                $Query .= " AND tbl_student.Std_shift_ID=$shift";
            }if(!empty($_POST['Std_medium_ID'])) {
                $Query .= " AND tbl_student.Std_medium_ID=$medium";
            }
            if(!empty($_POST['student_status'])) {
                $Query .= " AND tbl_student.Std_status='$student_status'";
            }
                
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result);   echo "</pre>"; die();
        return $query_result; 
    } 

    // for password  report end here

    public function print_student_attendance_all_finding(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();

            $search_check_inn   = $this->input->post('start_date');
            $search_check_in    = date("d-m-Y", strtotime($search_check_inn));
            // echo "<pre>"; print_r($search_check_in); echo "</pre>"; die();
            $search_check_outt  = $this->input->post('end_date');
            $search_check_out   = date("d-m-Y", strtotime($search_check_outt));
            $class              = $this->input->post('Std_class_ID');
            $section            = $this->input->post('Std_section_ID');
            $group              = $this->input->post('Std_group_ID');
            $shift              = $this->input->post('Std_shift_ID');
            $medium              = $this->input->post('Std_medium_ID');
            $STD_UNQ_ID          = $this->input->post('STD_UNQ_ID');
          
            $student_status      = $this->input->post('student_status');

        $Query="SELECT tbl_student_attendance.*, tbl_class.Class_Name,tbl_section.Section_Name,tbl_group.Group_Name,tbl_student.Std_Name,tbl_student.Std_gender,tbl_student.STD_UNQ_ID,tbl_student.Std_parent_mobile,tbl_student.Std_email,tbl_student.Std_medium_ID,tbl_student.Std_shift_ID,tbl_student.Std_roll
            
              FROM tbl_student_attendance 
              LEFT JOIN tbl_student  on tbl_student_attendance.Std_Attendance_NameID =tbl_student.STD_UNQ_ID
              -- LEFT JOIN tbl_student  on tbl_student_attendance.Std_Attendance_NameID =tbl_student.Std_ID
              LEFT JOIN tbl_class   on tbl_student_attendance.Std_Attendance_class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_student_attendance.Std_Attendance_section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_student_attendance.Std_Attendance_group_ID =tbl_group.Group_ID
              -- LEFT JOIN tbl_year   on tbl_student_attendance.Std_academic_ID =tbl_year.Year_ID
            WHERE 1=1 ";

            if(!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
             $Query .= " AND (STR_TO_DATE(tbl_student_attendance.Std_Attendance_Date, '%d-%m-%Y') >= STR_TO_DATE('$search_check_in', '%d-%m-%Y')) AND (STR_TO_DATE(tbl_student_attendance.Std_Attendance_Date, '%d-%m-%Y') <= STR_TO_DATE('$search_check_out', '%d-%m-%Y')) ";
          }
            if(!empty($_POST['Std_class_ID'])) {
                $Query .= " AND tbl_student_attendance.Std_Attendance_class_ID=$class";
            }
            if(!empty($_POST['Std_section_ID'])) {
                $Query .= " AND tbl_student_attendance.Std_Attendance_section_ID=$section";
            }
            if(!empty($_POST['Std_group_ID'])) {
                $Query .= " AND tbl_student_attendance.Std_Attendance_group_ID=$group";
            }
            if(!empty($_POST['Std_shift_ID'])) {
                $Query .= " AND tbl_student_attendance.Std_Attendance_shift_ID=$shift";
            }
            if(!empty($_POST['Std_medium_ID'])) {
                $Query .= " AND tbl_student_attendance.Std_Attendance_medium_ID=$medium";
            }
            if(!empty($_POST['STD_UNQ_ID'])) {
                $Query .= " AND tbl_student_attendance.Std_Attendance_NameID=$STD_UNQ_ID";
            }
           
            if(!empty($_POST['student_status'])) {
                $Query .= " AND tbl_student_attendance.Std_Attendance_Status='$student_status'";
            }
            
            // echo "<pre>"; print_r($Query); echo "</pre>"; die();

             // $Query .= " order by STR_TO_DATE(tbl_member.Created, '%m/%d/%Y') ASC";
                
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    }


    
  
 // student report end here

    
}