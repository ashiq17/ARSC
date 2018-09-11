<?php
class Teacher_Model extends CI_Model {

    function __construct(){
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
    public function all_active_designation_finding(){
        $Query = "SELECT * 
                  FROM tbl_designation 
                  WHERE 1=1 
                  AND DesignationStatus=1
                  ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function insert_mgt(){
        $error = '';
        $fdataa = array();
        $config['upload_path'] = 'images/teacher';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 5000;
        $images = '';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $sdata['error_msg'] = $this->upload->display_errors();
            $this->session->set_userdata($sdata);
        } else {
            $fdataa = $this->upload->data();
            $images = $fdataa['file_name'];
        }
        $data = array(
            // 'Teacher_UNQ_ID' =>'2018'.rand(),
            'Teacher_UniqueID'          => $this->input->post("Teacher_UniqueID"),
            'Teacher_Name'              => $this->input->post("Teacher_Name"),
            'Teacher_FathersName'       => $this->input->post("Teacher_FathersName"),
            'Teacher_MothersName'       => $this->input->post("Teacher_MothersName"),
            'Teacher_IndexNo'           => $this->input->post("Teacher_IndexNo"),
            'Teacher_NationalID'        => $this->input->post("Teacher_NationalID"),
            'Teacher_gender'            => $this->input->post("Teacher_gender"),
            'Teacher_DateOfBirth'       => $this->input->post("Teacher_DateOfBirth"),
            'Teacher_email'             => $this->input->post("Teacher_email"),
            'Teacher_address'           => $this->input->post("Teacher_address"),
            'Teacher_mobile'            => $this->input->post("Teacher_mobile"),
            'Teacher_joining_date'      => $this->input->post("Teacher_joining_date"),
            'Teacher_designation'       => $this->input->post("Teacher_designation"),
            'Teacher_marital_status'    => $this->input->post("Teacher_marital_status"),
            'Teacher_shift'             => $this->input->post("Teacher_shift"),
            'Teacher_medium'            => $this->input->post("Teacher_medium"),
            'Teacher_BloodGroup'        => $this->input->post("Teacher_BloodGroup"),
            'Teacher_religion'          => $this->input->post("Teacher_religion"),
            'Teacher_status'            => $this->input->post("Teacher_status"),
            'Image'                     => $images,
            'Created'                   =>date("d-m-Y H:i:s"),
            'Modified'                  =>''
        );
        $str = $this->db->insert_string("tbl_teacher", $data);  
        $query = $this->db->query($str);
        $insert_id = $this->db->insert_id();
        return $this->db->affected_rows();
    }


 	public function all_teacher_finding(){
         $Query="SELECT tbl_teacher.*, tbl_designation.DesignationID,tbl_designation.DesignationName
            FROM tbl_teacher 
            LEFT JOIN tbl_designation  on tbl_teacher.Teacher_designation =tbl_designation.DesignationID
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result;	
	}

    public function get_all_query_row_countall($search = NULL){
        $str = "SELECT COUNT(Teacher_ID) as tt FROM tbl_teacher WHERE Teacher_status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }

	public function all_active_teacher_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_teacher 
		          WHERE 1=1 
		          AND Teacher_status=1
		          ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}
	public function all_teacher_unique_id_finding(){
	 	$Query = "SELECT tbl_teacher.Teacher_UniqueID
		          FROM tbl_teacher 
		          WHERE 1=1 
		          ORDER BY Teacher_ID ASC ";
        $query_result = $this->db->query($Query)->result_array(); 
        return $query_result;
	}

	public function edit_teacher_finding($id){
		$Query = "SELECT* 
		          FROM tbl_teacher 
		          WHERE 1=1 
		          AND tbl_teacher.Teacher_ID=$id ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}
	public function update_teacher($id){
         // echo "<pre>"; print_r($_POST); echo "</pre>";die();
		if (isset($_POST['submit']) == 'Update'){

	$error = '';
        $fdataa = array();
        $config['upload_path'] = 'images/teacher';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 5000;
        $images = '';
            if($_FILES['image']['name']!=""){
                     $config['upload_path'] = 'images/teacher';
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

			$teacher_info = array(
            'Teacher_UniqueID'          => $this->input->post("Teacher_UniqueID"),
            'Teacher_Name'              => $this->input->post("Teacher_Name"),
            'Teacher_FathersName'       => $this->input->post("Teacher_FathersName"),
            'Teacher_MothersName'       => $this->input->post("Teacher_MothersName"),
            'Teacher_IndexNo'           => $this->input->post("Teacher_IndexNo"),
            'Teacher_NationalID'        => $this->input->post("Teacher_NationalID"),
            'Teacher_gender'            => $this->input->post("Teacher_gender"),
            'Teacher_DateOfBirth'       => $this->input->post("Teacher_DateOfBirth"),
            'Teacher_email'             => $this->input->post("Teacher_email"),
            'Teacher_address'           => $this->input->post("Teacher_address"),
            'Teacher_mobile'            => $this->input->post("Teacher_mobile"),
            'Teacher_joining_date'      => $this->input->post("Teacher_joining_date"),
            'Teacher_designation'       => $this->input->post("Teacher_designation"),
            'Teacher_marital_status'    => $this->input->post("Teacher_marital_status"),
            'Teacher_shift'             => $this->input->post("Teacher_shift"),
            'Teacher_medium'            => $this->input->post("Teacher_medium"),
            'Teacher_BloodGroup'        => $this->input->post("Teacher_BloodGroup"),
            'Teacher_religion'          => $this->input->post("Teacher_religion"),
            'Teacher_status'            => $this->input->post("Teacher_status"),
            'Image'                     => $image_name,
            'Modified'                   =>date("d-m-Y H:i:s"),
        );
			$this->db->where('Teacher_ID',$id);
			$this->db->update('tbl_teacher',$teacher_info);
		} 
	}

	public function delete_teacher($id){
		$this->db->where('Teacher_ID', $id);
		$this->db->delete('tbl_teacher');
	}
    // report start here
    public function print_teacher_single_finding($Teacher_ID){
        $Query="SELECT tbl_teacher.*, tbl_designation.DesignationID,tbl_designation.DesignationName
            FROM tbl_teacher 
            LEFT JOIN tbl_designation  on tbl_teacher.Teacher_designation =tbl_designation.DesignationID
            WHERE 1=1 
            AND tbl_teacher.Teacher_ID=$Teacher_ID ";
        $query_result = $this->db->query($Query)->result_array();
            // echo '<pre>',print_r($query_result),'</pre>'; die();
        return $query_result;
    }

    public function print_teacher_all_finding(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();
            $search_check_inn   = $this->input->post('start_date');
            $search_check_in    = date("m/d/Y", strtotime($search_check_inn));
            $search_check_outt  = $this->input->post('end_date');
            $search_check_out   = date("m/d/Y", strtotime($search_check_outt));
            $Teacher_shiftID    = $this->input->post('Teacher_shiftID');
           
            $Teacher_mediumID   = $this->input->post('Teacher_mediumID');
            $Teacher_UniqueID   = $this->input->post('Teacher_UniqueID');
          
            $teacher_status      = $this->input->post('teacher_status');

            $Query="SELECT tbl_teacher.*, tbl_designation.DesignationID,tbl_designation.DesignationName
            FROM tbl_teacher 
            LEFT JOIN tbl_designation  on tbl_teacher.Teacher_designation =tbl_designation.DesignationID
            WHERE 1=1 ";

            if(!empty($_POST['Teacher_shiftID'])) {
                $Query .= " AND tbl_teacher.Teacher_shift=$Teacher_shiftID";
            }
            if(!empty($_POST['Teacher_mediumID'])) {
                $Query .= " AND tbl_teacher.Teacher_medium=$Teacher_mediumID";
            }
            if(!empty($_POST['Teacher_UniqueID'])) {
                $Query .= " AND tbl_teacher.Teacher_UniqueID=$Teacher_UniqueID";
            }
           
            if(!empty($_POST['teacher_status'])) {
                $Query .= " AND tbl_teacher.Teacher_status='$teacher_status'";
            }
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    } 
	
    public function insert_mgt_teacher_attendance(){
    // echo "<pre>"; print_r($_POST); echo "</pre>"; die();
      $Teacher_nameID   = isset($_POST['Teacher_ID']) ? $this->input->post('Teacher_ID') : '';
      $Teacher_UniqueID = isset($_POST['Teacher_UniqueID']) ? $this->input->post('Teacher_UniqueID') : '';
      $Teacher_shift    = isset($_POST['Teacher_shiftID']) ? $this->input->post('Teacher_shiftID') : '';
      $Teacher_medium   = isset($_POST['Teacher_mediumID']) ? $this->input->post('Teacher_mediumID') : '';
      // $Teacher_intime   = isset($_POST['Teacher_intime']) ? $this->input->post('Teacher_intime') : '';
      // $Teacher_outtime  = isset($_POST['Teacher_outtime']) ? $this->input->post('Teacher_outtime') : '';
      $Teacher_attendance_date = isset($_POST['Teacher_attendance_date']) ? $this->input->post('Teacher_attendance_date') : '';
      $Teacher_present_status = isset($_POST['Teacher_present_status']) ? $this->input->post('Teacher_present_status') : '';
      $count_teacher = count($Teacher_nameID);
      for ($i=0; $i < $count_teacher; $i++) { 

         $data = array(
             'Teacher_Attendance_NameID'    => trim($Teacher_nameID[$i]),
             'Teacher_UniqueID'             => trim($Teacher_UniqueID[$i]),
             'Teacher_Attendance_ShiftID'   => trim($Teacher_shift[$i]),
             'Teacher_Attendance_MediumID'  => trim($Teacher_medium[$i]),
             // 'Teacher_intime' => trim($Teacher_intime[$i]),
             // 'Teacher_outtime' => trim($Teacher_outtime[$i]),
             'Teacher_Attendance_Date'      => trim($Teacher_attendance_date[$i]),
             'Teacher_present_status'       => trim($Teacher_present_status[$i]),
             'Created' => date("d-m-Y H:i:s"),
         );
         $str = $this->db->insert_string("tbl_teacher_attendance", $data);
         $query = $this->db->query($str);
      }
    }

    public function print_teacher_attendance_all_finding(){
     // echo '<pre>',print_r($_POST),'</pre>'; die();
        // $search_check_month  = $this->input->post('month');
        $search_check_inn   = $this->input->post('start_date');
        $search_check_in    = date("d-m-Y", strtotime($search_check_inn));
        $search_check_outt  = $this->input->post('end_date');
        $search_check_out   = date("d-m-Y", strtotime($search_check_outt));
        $Teacher_shiftID    = $this->input->post('Teacher_shiftID');
        $Teacher_mediumID   = $this->input->post('Teacher_mediumID');
        $Teacher_UniqueID   = $this->input->post('Teacher_UniqueID');
        $teacher_status      = $this->input->post('teacher_status');

        $Query="SELECT tbl_teacher_attendance.*,tbl_teacher.Teacher_Name,tbl_teacher.Teacher_mobile,tbl_designation.DesignationID,tbl_designation.DesignationName
        FROM tbl_teacher_attendance 
        LEFT JOIN tbl_teacher  on tbl_teacher.Teacher_ID =tbl_teacher_attendance.Teacher_Attendance_NameID
        LEFT JOIN tbl_designation  on tbl_teacher.Teacher_designation =tbl_designation.DesignationID
        WHERE 1=1 ";

        if(!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
         $Query .= " AND (STR_TO_DATE(tbl_teacher_attendance.Teacher_Attendance_Date, '%d-%m-%Y') >= STR_TO_DATE('$search_check_in', '%d-%m-%Y')) AND (STR_TO_DATE(tbl_teacher_attendance.Teacher_Attendance_Date, '%d-%m-%Y') <= STR_TO_DATE('$search_check_out', '%d-%m-%Y')) ";
        }
       if(!empty($_POST['Teacher_shiftID'])) {
            $Query .= " AND tbl_teacher_attendance.Teacher_Attendance_ShiftID=$Teacher_shiftID";
        }
        if(!empty($_POST['Teacher_mediumID'])) {
            $Query .= " AND tbl_teacher_attendance.Teacher_Attendance_MediumID=$Teacher_mediumID";
        }
        if(!empty($_POST['Teacher_UniqueID'])) {
            $Query .= " AND tbl_teacher_attendance.Teacher_UniqueID=$Teacher_UniqueID";
        }
        if(!empty($_POST['teacher_status'])) {
            $Query .= " AND tbl_teacher_attendance.Teacher_present_status='$teacher_status'";
        }  
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_array_result); echo "</pre>"; die();
        return $query_result; 
    }

   
    
    /*mahbub edning here*/


    public function teacher_user_info_adding(){
            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            // die();
         $users = array(
            'EmployeeId'  => $this->input->post('Teacher_UniqueID'),
            'UserName'    => $this->input->post('username'),
            'Email'       => $this->input->post('email'),
            'Password'    => md5($this->input->post('password')),
            'RoleID'      => $this->input->post('role'),
            'Status'      => $this->input->post('status'),
            'created'     => date("d-m-Y H:i:s"),
            'modified'    => date("d-m-Y H:i:s"),
        );
        //Transfering data to Model
        $this->db->insert('tbl_user', $users);
        $this->session->set_userdata('message','System User Info Submitted Successfully!');

    }

}