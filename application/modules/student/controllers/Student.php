<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Student_Model');
		// $this->load->model('Student_add_model');
	}
	
	public function add_admission() {
		$data['all_student_find_summary'] = $this->Student_Model->all_student_finding_summary();
		$data['Class_Data']  = $this->Student_Model->get_classData();
		$data['Section_Data']  = $this->Student_Model->get_sectionData();
		$data['Group_Data']  = $this->Student_Model->get_groupData();
		$data['Year_Data']  = $this->Student_Model->get_yearData();
		$data['role_finding'] = $this->Student_Model->role_finding();

		$this->load->view('add_student',$data);
	}

	function student_info_add(){
        $inser_id = $this->Student_Model->insert_mgt();
      	$this->session->set_userdata('message','Student Admission Successfully!');
		redirect(base_url().'student/student/student_list');
    }



    public function get_student_data(){
    	if(isset($_POST['one'])){
	    	$json = array();
	    	$id =  trim($_POST['one']);

	    	$query =  $this->db->query(
	    			"SELECT tbl_class.Class_Name, tbl_section.Section_Name, tbl_group.Group_Name, tbl_student.Std_Name,tbl_student.STD_UNQ_ID,tbl_student.Std_email
	    			 FROM tbl_student 
	    			LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
            		LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
            		LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
	    			WHERE tbl_student.STD_UNQ_ID = '$id'
	    			");
	    	$result = $query->result_array(); 
	    	$class = $result[0]['Class_Name'];
	    	$section = $result[0]['Section_Name'];
	    	$group = $result[0]['Group_Name'];
	    	$name = $result[0]['Std_Name'];
	    	$email = $result[0]['Std_email'];


	    	$stu_unq_id = $result[0]['STD_UNQ_ID'];
	    	$password=(mt_rand(1234,9876));
	    	

	    	// check start
	    	$username= $id;
			$check = $this->db->get_where('tbl_user', array('UserName' => $username));
			$exist = 0;
			if($check->num_rows() > 0){
				$exist = 1;
			}
			//echo json_encode(array("exist"  => $exist ));
			// check start



	    	$result = array('Class_Name'=>$class,'Section_Name'=>$section,'Group_Name'=>$group,'Std_Name'=>$name,'STD_UNQ_ID'=>$stu_unq_id,'Std_email'=>$email, 'randPassword'=>$password,'exist'=>$exist);

	    	array_push($json,$result);
	    	echo json_encode($json, true);
	    	 //echo json_encode(array("exist"  => $exist ));

    	 }
    }

	public function student_user_info_add(){
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// die();
		if (isset($_POST['submit']) == 'Submit'){
			$this->Student_Model->student_user_info_adding();
			$this->session->set_userdata('message','User added Successfully!');
			redirect(base_url().'student/student/add_admission');
		}else{
			$this->session->set_userdata('message','User not added, Try again!');
			redirect(base_url().'users_role/users/user_list');
		}
	}

	public function student_list(){

		$total_student = $this->Student_Model->get_all_query_row_countall();

        $ts='';

        foreach ($total_student as $row){
            $total_student=$row->ts;
        }
          $data = array(
            'total_student' => $total_student      
        );

		$data['all_student_find'] = $this->Student_Model->all_student_finding();
		$data['all_active_student_find'] = $this->Student_Model->all_active_student_finding();
		$data['all_inactive_student_find'] = $this->Student_Model->all_inactive_student_finding();
		// $data['all_student_find_summary'] = $this->Student_Model->all_student_finding_summary();
		$this->load->view('student_list',$data);
	}
	
	public function print_student_single($id){
		$data['print_student_single_find'] = $this->Student_Model->print_student_single_finding($id);
		$this->load->view('report/print_single_student',$data);
	}

	public function edit_student($id){
		$data['edit_student_find'] = $this->Student_Model->edit_student_finding($id);
		$data['Class_Data']  = $this->Student_Model->get_classData();
		$data['Section_Data']  = $this->Student_Model->get_sectionData();
		$data['Group_Data']  = $this->Student_Model->get_groupData();
		$data['Year_Data']  = $this->Student_Model->get_yearData();
		$this->load->view('edit_student',$data);
	}

	public function student_update(){
		$id=$this->input->post('Std_ID');
		$this->Student_Model->update_student($id);
		$this->session->set_userdata('message','Student updated Successfully!');
		redirect(base_url().'student/student/student_list');
	}

	public function student_delete(){
		$id = $this->input->post('delete_Std_ID');
		$this->Student_Model->delete_student($id);
		$this->session->set_userdata('message', ' Student is deleted!');
		redirect(base_url().'student/student/student_list');
		
	}

	public function student_attendance(){
		$data['Class_select']  = $this->Student_Model->get_Class_name();
		$data['Section_select']  = $this->Student_Model->get_Section_name();
		$data['Group_select']  = $this->Student_Model->get_Group_name();
		$data['all_student_find_summary'] = $this->Student_Model->all_student_finding_summary();
		$this->load->view('student_attendance', $data);
		
	}

	public function student_summary() {
		$data['all_student_find_summary'] = $this->Student_Model->all_student_finding_summary();
		// $data['all_student_find_summary'] = $this->Student_Model->student_summary();
		$this->load->view('student_summary',$data);
	}

	public function student_attendance_search(){
		// $Std_attendance_date = date('d-m-Y');
		$Std_attendance_date = ($this->input->get('attendance_date'))?$this->input->get('attendance_date'):"";
		$Class_ID            = ($this->input->get('Class_ID'))?$this->input->get('Class_ID'):"";
		$Section_ID          = ($this->input->get('Section_ID'))?$this->input->get('Section_ID'):"";
		$Group_ID          	 = ($this->input->get('Group_ID'))?$this->input->get('Group_ID'):"";
		$Std_shift_ID        = ($this->input->get('Std_shift_ID'))?$this->input->get('Std_shift_ID'):"";
		$Std_medium_ID       = ($this->input->get('Std_medium_ID'))?$this->input->get('Std_medium_ID'):"";
		$query = "";
		$total_condition ="";

		// subject check start
        $query_atten_check = "SELECT *
            FROM tbl_student_attendance
            where 1=1
            ";

            if ($Std_attendance_date) {
                 $query_atten_check .= " AND tbl_student_attendance.Std_attendance_date='$Std_attendance_date'";
            }
            if ($Class_ID) {
                 $query_atten_check .= " AND tbl_student_attendance.Std_Attendance_class_ID='$Class_ID'";
            }
            if ($Section_ID) {
                 $query_atten_check .= " AND tbl_student_attendance.Std_Attendance_section_ID='$Section_ID'";
            }
            if ($Group_ID) {
                 $query_atten_check .= " AND tbl_student_attendance.Std_Attendance_group_ID='$Group_ID'";
            }
            if ($Std_medium_ID) {
                 $query_atten_check .= " AND tbl_student_attendance.Std_Attendance_medium_ID='$Std_medium_ID'";
            }
            if ($Std_shift_ID) {
                 $query_atten_check .= " AND tbl_student_attendance.Std_Attendance_shift_ID='$Std_shift_ID'";
            }
           
         $queryData_attendance_check = $this->db->query($query_atten_check)->result();
        // subject check end
	 		if (!empty( $queryData_attendance_check)) {
	 			$Std_attendance_date = ($this->input->get('attendance_date'))?$this->input->get('attendance_date'):"";

					$query_con = "SELECT tbl_student.*, tbl_class.Class_Name, tbl_section.Section_Name,tbl_group.Group_Name,tbl_student_attendance.Std_Attendance_Status
						FROM tbl_student
						LEFT JOIN tbl_student_attendance ON tbl_student_attendance.Std_Attendance_NameID=tbl_student.STD_UNQ_ID
						LEFT JOIN tbl_class ON tbl_class.Class_ID=tbl_student.Std_class_ID
						LEFT JOIN tbl_section  ON tbl_section.Section_ID=tbl_student.Std_section_ID
						LEFT JOIN tbl_group  ON tbl_group.Group_ID=tbl_student.Std_Group_ID
						where 1=1
						and tbl_class.Class_ID='$Class_ID' 
						and tbl_student_attendance.Std_Attendance_Date='$Std_attendance_date' 
						";

	 			        if ($Section_ID) {
	 			            $query_con .= " and  Section_ID='$Section_ID'";
	 			        } 
	 			        if ($Group_ID ) {
	 			            $query_con .= " and  Group_ID='$Group_ID'";
	 			        } 
	 			        if ($Std_shift_ID ) {
	 			            $query_con .= " and  Std_shift_ID='$Std_shift_ID'";
	 			        } 
	 			        if ($Std_medium_ID ) {
	 			            $query_con .= " and  Std_medium_ID='$Std_medium_ID'";
	 			        }



	 					
	 					$queryData = $this->db->query($query_con)->result();
	 					
	 					$total = 0;
	 					$student_attendance_List = array();
	 					foreach($queryData as $key=>$info){

	 						$total++;
					        if ($info->Std_Attendance_Status==1) {
			                	$Std_atten_Status = 'Present';
			           	 	} else{
			                	$Std_atten_Status = 'Absent';
			           		}
	 						$student_attendance_List[$total]['STD_UNQ_ID']             = $info->STD_UNQ_ID;
	 						$student_attendance_List[$total]['Student_Name']           = $info->Std_Name;
	 						$student_attendance_List[$total]['Std_class_ID']           = $info->Std_class_ID;
	 						$student_attendance_List[$total]['Class_Name']         	   = $info->Class_Name;
	 						$student_attendance_List[$total]['Std_section_ID']         = $info->Std_section_ID;
	 						$student_attendance_List[$total]['Section_Name']           = isset($info->Section_Name)?$info->Section_Name:'-';
	 						$student_attendance_List[$total]['Std_group_ID']           = $info->Std_group_ID;
	 						$student_attendance_List[$total]['Std_medium_ID']          = $info->Std_medium_ID;
	 						$student_attendance_List[$total]['Std_shift_ID']           = $info->Std_shift_ID;
	 						$student_attendance_List[$total]['Group_Name']             = isset($info->Group_Name)?$info->Group_Name:'-';
	 						$student_attendance_List[$total]['Std_roll']   			   = $info->Std_roll;
	 						$student_attendance_List[$total]['Std_status']      	   = $info->Std_status;
	 						$student_attendance_List[$total]['Std_attendance_date']    = $Std_attendance_date;
	 						$student_attendance_List[$total]['Std_Attendance_Status']  = isset($info->Std_Attendance_Status)?$info->Std_Attendance_Status:'';
	 						$student_attendance_List[$total]['Std_atten_Status']  	   = isset($Std_atten_Status)?$Std_atten_Status:'';
	 						}
	 						echo json_encode(array(
	 						"student_attendance_List" 	=> $student_attendance_List, 
	 						"queryData_attendance_check"=> $queryData_attendance_check, 
	 						"total" 	        		=> $total, 
	 						"queryData" 	        		=> $queryData, 
	 						"data_exit"   => 1, 
	 					)); 
	            // echo json_encode(array(
	            //     "data_exit"   => 1, 
	            // )); 

	        }else{
		
			$query_con = "SELECT tbl_student.*, tbl_class.Class_Name, tbl_section.Section_Name,tbl_group.Group_Name
				FROM tbl_student
				LEFT JOIN tbl_class ON tbl_class.Class_ID=tbl_student.Std_class_ID
				LEFT JOIN tbl_section  ON tbl_section.Section_ID=tbl_student.Std_section_ID
				LEFT JOIN tbl_group  ON tbl_group.Group_ID=tbl_student.Std_Group_ID
				where 1=1
				-- and tbl_class.Class_ID='$Class_ID' 
				";

	        if ($Class_ID) {
	            $query_con .= " and  Class_ID='$Class_ID'";
	        }
	          if ($Section_ID) {
	            $query_con .= " and  Section_ID='$Section_ID'";
	        } 
	        if ($Group_ID ) {
	            $query_con .= " and  Group_ID='$Group_ID'";
	        } 
	        if ($Std_shift_ID ) {
	            $query_con .= " and  Std_shift_ID='$Std_shift_ID'";
	        } 
	        if ($Std_medium_ID ) {
	            $query_con .= " and  Std_medium_ID='$Std_medium_ID'";
	        }
			
			$queryData = $this->db->query($query_con)->result();
			
			$total = 0;
			$student_attendance_List = array();//`id``ItemCode``BarCode`
			foreach($queryData as $key=>$info){
				$total++;
		       
                $Std_atten_Status = 'Present';
				$student_attendance_List[$total]['STD_UNQ_ID']             = $info->STD_UNQ_ID;
				$student_attendance_List[$total]['Student_Name']           = $info->Std_Name;
				$student_attendance_List[$total]['Std_class_ID']           = $info->Std_class_ID;
				$student_attendance_List[$total]['Class_Name']         	   = $info->Class_Name;
				$student_attendance_List[$total]['Std_section_ID']         = $info->Std_section_ID;
				$student_attendance_List[$total]['Section_Name']           = isset($info->Section_Name)?$info->Section_Name:'-';
				$student_attendance_List[$total]['Std_group_ID']           = $info->Std_group_ID;
				$student_attendance_List[$total]['Std_medium_ID']          = $info->Std_medium_ID;
				$student_attendance_List[$total]['Std_shift_ID']           = $info->Std_shift_ID;
				$student_attendance_List[$total]['Group_Name']             = isset($info->Section_Name)?$info->Section_Name:'-';
				$student_attendance_List[$total]['Std_roll']   			   = $info->Std_roll;
				$student_attendance_List[$total]['Std_status']      	   = $info->Std_status;
				$student_attendance_List[$total]['Std_attendance_date']    = $Std_attendance_date;
				$student_attendance_List[$total]['Std_Attendance_Status']  = isset($info->Std_Attendance_Status)?$info->Std_Attendance_Status:'1';
				$student_attendance_List[$total]['Std_atten_Status']  	   = isset($Std_atten_Status)?$Std_atten_Status:'';
				}
				echo json_encode(array(
				"student_attendance_List" 	=> $student_attendance_List, 
				"queryData_attendance_check"=> $queryData_attendance_check, 
				"total" 	        		=> $total, 
			)); 
		}
	}

	 public function get_section_data(){
	    	if(isset($_POST['one'])){
		    	$json = array();
		    	$id =  trim($_POST['one']);

		    	$query = $this->db->query(
		    			"SELECT tbl_section.*
				         FROM tbl_section
				         WHERE 1=1
				         AND Section_Status=1
				         AND Section_class_ID = '$id' ");
		    	$queryData = $query->result(); 
		    	$total = 0;
		    	$sectionList = array();
		    	foreach($queryData as $key=>$info){
		    		$sectionList[$total]['Section_ID']          = $info->Section_ID;
		    		$sectionList[$total]['Section_Name']   		= $info->Section_Name;
		    		$total++;
		    	}
		    	echo json_encode(array(
		    		"sectionList"  => $sectionList, 
		    		"total" 	    => $total, 
		    	));
	    	 }
	    }

	// student attendane task start here

	public function student_attendance_submit()
    {
  	//  	echo "<pre>";// print_r($_POST);// echo "</pre>";// die();
        $inser_id = $this->Student_Model->insert_student_attendance();
        $this->session->set_userdata('message','Attendance Data Save Successfully!');
           
            redirect(base_url().'student/student/student_attendance');
    }


	// student attendane task  end here


	// student report  task  start here
	public function student_report(){
		$data['all_student_find_summary'] = $this->Student_Model->all_student_finding_summary();
		$data['Class_Data']  = $this->Student_Model->get_classData();
		$data['Section_Data']  = $this->Student_Model->get_sectionData();
		$data['Group_Data']  = $this->Student_Model->get_groupData();
		$data['Year_Data']  = $this->Student_Model->get_yearData();
		// echo "<pre>"; print_r($data['all_union_data']);echo "</pre>";die();
		$this->load->view('report/print_all_student_index',$data);
	}

	public function print_all_student(){
		// if ($_POST['submit']=='Print') {
			// echo "<pre>";
		 // 	print_r($_POST);
			// echo "</pre>";die();
		$data['print_student_all_find'] = $this->Student_Model->print_student_all_finding();
		// echo "<pre>"; print_r($data['print_student_all_find']);echo "</pre>";die();
		$this->load->view('report/print_all_student',$data);
		//}
	}

	// student report  task  start here
	public function student_report_password(){
		$data['all_student_find_summary'] = $this->Student_Model->all_student_finding_summary();
		$data['Class_Data']  = $this->Student_Model->get_classData();
		$data['Section_Data']  = $this->Student_Model->get_sectionData();
		$data['Group_Data']  = $this->Student_Model->get_groupData();
		$data['Year_Data']  = $this->Student_Model->get_yearData();
		// echo "<pre>"; print_r($data['all_union_data']);echo "</pre>";die();
		$this->load->view('report/print_all_student_index_password',$data);
	}

	public function print_all_student_password(){
		// if ($_POST['submit']=='Print') {
			// echo "<pre>";
		 // 	print_r($_POST);
			// echo "</pre>";die();
		$data['print_student_all_find_password'] = $this->Student_Model->print_student_all_finding_password();
		// echo "<pre>"; print_r($data['print_student_all_find']);echo "</pre>";die();
		$this->load->view('report/print_all_student_password',$data);
		//}
	}

	public function student_attendance_report(){
		$data['all_student_find_summary'] = $this->Student_Model->all_student_finding_summary();
		$data['Class_Data']  = $this->Student_Model->get_classData();
		$data['Section_Data']  = $this->Student_Model->get_sectionData();
		$data['Group_Data']  = $this->Student_Model->get_groupData();
		$data['Year_Data']  = $this->Student_Model->get_yearData();
		// echo "<pre>"; print_r($data['all_union_data']);echo "</pre>";die();
		$this->load->view('report/print_all_student_attendance_index',$data);
	}

	public function print_all_student_attendance(){
		// if ($_POST['submit']=='Print') {
			// echo "<pre>";
		 // 	print_r($_POST);
			// echo "</pre>";die();
		$data['print_student_attendance_all_find'] = $this->Student_Model->print_student_attendance_all_finding();
		// echo "<pre>"; print_r($data['print_student_all_find']);echo "</pre>";die();
		$this->load->view('report/print_all_student_attendance',$data);
		//}
	}

 /*Mahbub Task Start*/

	    public function attendance_list()
	    {
	    	$data['id_card_list_finding'] = $this->Employee_model->superior_finding();
	    	$data['get_department'] = $this->Employee_model->get_department();
	    	$data['find_designation'] = $this->Employee_model->find_designation();
	    	$data['group_name_find'] = $this->Employee_model->find_group_name();
	    	$data['shift_name_find'] = $this->Employee_model->find_shift_name();
	    	$data['leave_type_name_find'] = $this->Employee_model->find_leave_type_name();
	    	$this->load->view('attendance_list',$data);

	    }


	    public function attendance_list_search(){
	    	if ($_POST['submit']=='Submit') {
	    		$data['search_date'] = $this->input->post('search_date');
	    		$data['file_no'] = $this->input->post('file_no');
	    		$data['group_name'] = $this->input->post('group_name');
	    		$data['group_name'] = $this->input->post('group_name');
	    		$data['employee_id'] = $this->input->post('employee_id');
	    		$data['department'] = $this->input->post('department');
	    		$data['designation'] = $this->input->post('designation');
	    		$data['shift'] = $this->input->post('shift');
	    		$data['search_check_in'] = $this->input->post('start_date');
	    		$data['search_check_out'] = $this->input->post('end_date');
	    		$data['total_duty_time'] = $this->input->post('total_duty_time');
	    		$data['remarks'] = $this->input->post('remarks');
	    		$data['company_basic_info'] = $this->Employee_model->find_company_basic_info();
	    	 	$data['attendance_list_search'] = $this->Employee_model->attendance_list_search();
	            $this->load->view('attendance_list_view',$data);
	    	}
	    }

	    # end of attendance list task


// student report  task  end here

	public function json_unique_username_check(){  

		$username= ($this->input->get('username'))?$this->input->get('username'):0;
		$check = $this->db->get_where('tbl_user', array('username' => $username));
		$exist = 0;
		if($check->num_rows() > 0){
			$exist = 1;
		}
		echo json_encode(array("exist"  => $exist ));
	}
	public function json_unique_email_check(){  

		$username= ($this->input->get('email'))?$this->input->get('email'):0;
		$check = $this->db->get_where('tbl_user', array('email' => $username));
		$exist = 0;
		if($check->num_rows() > 0){
			$exist = 1;
		}
		echo json_encode(array("exist"  => $exist ));
	}
	public function json_student_uniqueid_check(){  

		$teacher_uniqueid= ($this->input->get('student_uniqueid'))?$this->input->get('student_uniqueid'):0;
		$check = $this->db->get_where('tbl_student', array('student_uniqueid' => $student_uniqueid));
		$exist = 0;
		if($check->num_rows() > 0){
			$exist = 1;
		}
		echo json_encode(array("exist"  => $exist ));
	}
	
}
