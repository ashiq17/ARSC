<?php
class Staff_model extends CI_Model {

    function __construct(){
        parent::__construct();	
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
        $config['upload_path'] = 'images/Staff';
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
            // 'Staff_UNQ_ID' =>'2018'.rand(),
            'Staff_UniqueID'          => $this->input->post("Staff_UniqueID"),
            'Staff_Name'              => $this->input->post("Staff_Name"),
            'Staff_FathersName'       => $this->input->post("Staff_FathersName"),
            'Staff_MothersName'       => $this->input->post("Staff_MothersName"),
            'Staff_IndexNo'           => $this->input->post("Staff_IndexNo"),
            'Staff_NationalID'        => $this->input->post("Staff_NationalID"),
            'Staff_gender'            => $this->input->post("Staff_gender"),
            'Staff_DateOfBirth'       => $this->input->post("Staff_DateOfBirth"),
            'Staff_email'             => $this->input->post("Staff_email"),
            'Staff_address'           => $this->input->post("Staff_address"),
            'Staff_mobile'            => $this->input->post("Staff_mobile"),
            'Staff_joining_date'      => $this->input->post("Staff_joining_date"),
            'Staff_designation'       => $this->input->post("Staff_designation"),
            'Staff_marital_status'    => $this->input->post("Staff_marital_status"),
            'Staff_shift'             => $this->input->post("Staff_shift"),
            'Staff_medium'            => $this->input->post("Staff_medium"),
            'Staff_BloodGroup'        => $this->input->post("Staff_BloodGroup"),
            'Staff_religion'          => $this->input->post("Staff_religion"),
            'Staff_status'            => $this->input->post("Staff_status"),
            'Image'                     => $images,
            'Created'                   =>date("d-m-Y H:i:s"),
            'Modified'                  =>''
        );
        $str = $this->db->insert_string("tbl_staff", $data);  
        $query = $this->db->query($str);
        $insert_id = $this->db->insert_id();
        return $this->db->affected_rows();
    }


 	public function all_Staff_finding(){
         $Query="SELECT tbl_staff.*, tbl_designation.DesignationID,tbl_designation.DesignationName
            FROM tbl_staff 
            LEFT JOIN tbl_designation  on tbl_staff.Staff_designation =tbl_designation.DesignationID
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result;	
	}

    public function get_all_query_row_countall($search = NULL){
        $str = "SELECT COUNT(Staff_ID) as tt FROM tbl_staff WHERE Staff_status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }

	public function all_active_Staff_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_staff 
		          WHERE 1=1 
		          AND Staff_status=1
		          ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}
	public function all_staff_unique_id_finding(){
	 	$Query = "SELECT tbl_staff.Staff_UniqueID
		          FROM tbl_staff 
		          WHERE 1=1 
		          ORDER BY Staff_ID ASC ";
        $query_result = $this->db->query($Query)->result_array();
        // echo "<pre>"; print_r($query_result); echo "</pre>"; die(); 
        return $query_result;
	}

	public function edit_Staff_finding($id){
		$Query = "SELECT* 
		          FROM tbl_staff 
		          WHERE 1=1 
		          AND tbl_staff.Staff_ID=$id ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}
	public function update_Staff($id){
         // echo "<pre>"; print_r($_POST); echo "</pre>";die();
		if (isset($_POST['submit']) == 'Update'){

	$error = '';
        $fdataa = array();
        $config['upload_path'] = 'images/staff';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 5000;
        $images = '';
            if($_FILES['image']['name']!=""){
                     $config['upload_path'] = 'images/staff';
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

			$Staff_info = array(
            'Staff_UniqueID'          => $this->input->post("Staff_UniqueID"),
            'Staff_Name'              => $this->input->post("Staff_Name"),
            'Staff_FathersName'       => $this->input->post("Staff_FathersName"),
            'Staff_MothersName'       => $this->input->post("Staff_MothersName"),
            'Staff_IndexNo'           => $this->input->post("Staff_IndexNo"),
            'Staff_NationalID'        => $this->input->post("Staff_NationalID"),
            'Staff_gender'            => $this->input->post("Staff_gender"),
            'Staff_DateOfBirth'       => $this->input->post("Staff_DateOfBirth"),
            'Staff_email'             => $this->input->post("Staff_email"),
            'Staff_address'           => $this->input->post("Staff_address"),
            'Staff_mobile'            => $this->input->post("Staff_mobile"),
            'Staff_joining_date'      => $this->input->post("Staff_joining_date"),
            'Staff_designation'       => $this->input->post("Staff_designation"),
            'Staff_marital_status'    => $this->input->post("Staff_marital_status"),
            'Staff_shift'             => $this->input->post("Staff_shift"),
            'Staff_medium'            => $this->input->post("Staff_medium"),
            'Staff_BloodGroup'        => $this->input->post("Staff_BloodGroup"),
            'Staff_religion'          => $this->input->post("Staff_religion"),
            'Staff_status'            => $this->input->post("Staff_status"),
            'Image'                   => $image_name,
            'Modified'                =>date("d-m-Y H:i:s"),
        );
			$this->db->where('Staff_ID',$id);
			$this->db->update('tbl_staff',$Staff_info);
		} 
	}

	public function delete_Staff($id){
		$this->db->where('Staff_ID', $id);
		$this->db->delete('tbl_staff');
	}
    // report start here
    public function print_Staff_single_finding($Staff_ID){
        $Query="SELECT tbl_staff.*, tbl_designation.DesignationID,tbl_designation.DesignationName
            FROM tbl_staff 
            LEFT JOIN tbl_designation  on tbl_staff.Staff_designation =tbl_designation.DesignationID
            WHERE 1=1 
            AND tbl_staff.Staff_ID=$Staff_ID ";
        $query_result = $this->db->query($Query)->result_array();
            // echo '<pre>',print_r($query_result),'</pre>'; die();
        return $query_result;
    }

    public function print_Staff_all_finding(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();
            $search_check_inn   = $this->input->post('start_date');
            $search_check_in    = date("m/d/Y", strtotime($search_check_inn));
            $search_check_outt  = $this->input->post('end_date');
            $search_check_out   = date("m/d/Y", strtotime($search_check_outt));
            $Staff_shiftID    = $this->input->post('Staff_shiftID');
           
            $Staff_mediumID   = $this->input->post('Staff_mediumID');
            $Staff_UniqueID   = $this->input->post('Staff_UniqueID');
          
            $Staff_status      = $this->input->post('Staff_status');

            $Query="SELECT tbl_staff.*, tbl_designation.DesignationID,tbl_designation.DesignationName
            FROM tbl_staff 
            LEFT JOIN tbl_designation  on tbl_staff.Staff_designation =tbl_designation.DesignationID
            WHERE 1=1 ";

            if(!empty($_POST['Staff_shiftID'])) {
                $Query .= " AND tbl_staff.Staff_shift=$Staff_shiftID";
            }
            if(!empty($_POST['Staff_mediumID'])) {
                $Query .= " AND tbl_staff.Staff_medium=$Staff_mediumID";
            }
            if(!empty($_POST['Staff_UniqueID'])) {
                $Query .= " AND tbl_staff.Staff_UniqueID=$Staff_UniqueID";
            }
           
            if(!empty($_POST['Staff_status'])) {
                $Query .= " AND tbl_staff.Staff_status='$Staff_status'";
            }
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    } 
	
    public function insert_mgt_Staff_attendance(){
    // echo "<pre>"; print_r($_POST); echo "</pre>"; die();
      $Staff_nameID   = isset($_POST['Staff_ID']) ? $this->input->post('Staff_ID') : '';
      $Staff_UniqueID = isset($_POST['Staff_UniqueID']) ? $this->input->post('Staff_UniqueID') : '';
      $Staff_shift    = isset($_POST['Staff_shiftID']) ? $this->input->post('Staff_shiftID') : '';
      $Staff_medium   = isset($_POST['Staff_mediumID']) ? $this->input->post('Staff_mediumID') : '';
      // $Staff_intime   = isset($_POST['Staff_intime']) ? $this->input->post('Staff_intime') : '';
      // $Staff_outtime  = isset($_POST['Staff_outtime']) ? $this->input->post('Staff_outtime') : '';
      $Staff_attendance_date = isset($_POST['Staff_attendance_date']) ? $this->input->post('Staff_attendance_date') : '';
      $Staff_present_status = isset($_POST['Staff_present_status']) ? $this->input->post('Staff_present_status') : '';
      $count_Staff = count($Staff_nameID);
      for ($i=0; $i < $count_Staff; $i++) { 

         $data = array(
             'Staff_Attendance_NameID'    => trim($Staff_nameID[$i]),
             'Staff_UniqueID'             => trim($Staff_UniqueID[$i]),
             'Staff_Attendance_ShiftID'   => trim($Staff_shift[$i]),
             'Staff_Attendance_MediumID'  => trim($Staff_medium[$i]),
             // 'Staff_intime' => trim($Staff_intime[$i]),
             // 'Staff_outtime' => trim($Staff_outtime[$i]),
             'Staff_Attendance_Date'      => trim($Staff_attendance_date[$i]),
             'Staff_present_status'       => trim($Staff_present_status[$i]),
             'Created' => date("d-m-Y H:i:s"),
         );
         $str = $this->db->insert_string("tbl_staff_attendance", $data);
         $query = $this->db->query($str);
      }
    }

    public function print_Staff_attendance_all_finding(){
     // echo '<pre>',print_r($_POST),'</pre>'; die();
        // $search_check_month  = $this->input->post('month');
        $search_check_inn   = $this->input->post('start_date');
        $search_check_in    = date("d-m-Y", strtotime($search_check_inn));
        $search_check_outt  = $this->input->post('end_date');
        $search_check_out   = date("d-m-Y", strtotime($search_check_outt));
        $Staff_shiftID    = $this->input->post('Staff_shiftID');
        $Staff_mediumID   = $this->input->post('Staff_mediumID');
        $Staff_UniqueID   = $this->input->post('Staff_UniqueID');
        $Staff_status      = $this->input->post('Staff_status');

        $Query="SELECT tbl_staff_attendance.*,tbl_staff.Staff_Name,tbl_staff.Staff_mobile,tbl_designation.DesignationID,tbl_designation.DesignationName
        FROM tbl_staff_attendance 
        LEFT JOIN tbl_staff  on tbl_staff.Staff_ID =tbl_staff_attendance.Staff_Attendance_NameID
        LEFT JOIN tbl_designation  on tbl_staff.Staff_designation =tbl_designation.DesignationID
        WHERE 1=1 ";

        if(!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
         $Query .= " AND (STR_TO_DATE(tbl_staff_attendance.Staff_Attendance_Date, '%d-%m-%Y') >= STR_TO_DATE('$search_check_in', '%d-%m-%Y')) AND (STR_TO_DATE(tbl_staff_attendance.Staff_Attendance_Date, '%d-%m-%Y') <= STR_TO_DATE('$search_check_out', '%d-%m-%Y')) ";
        }
       if(!empty($_POST['Staff_shiftID'])) {
            $Query .= " AND tbl_staff_attendance.Staff_Attendance_ShiftID=$Staff_shiftID";
        }
        if(!empty($_POST['Staff_mediumID'])) {
            $Query .= " AND tbl_staff_attendance.Staff_Attendance_MediumID=$Staff_mediumID";
        }
        if(!empty($_POST['Staff_UniqueID'])) {
            $Query .= " AND tbl_staff_attendance.Staff_UniqueID=$Staff_UniqueID";
        }
        if(!empty($_POST['Staff_status'])) {
            $Query .= " AND tbl_staff_attendance.Staff_present_status='$Staff_status'";
        }  
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_array_result); echo "</pre>"; die();
        return $query_result; 
    }

   
    
    /*mahbub edning here*/


    public function Staff_user_info_adding(){
            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            // die();
         $users = array(
            'EmployeeId'  => $this->input->post('Staff_UniqueID'),
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