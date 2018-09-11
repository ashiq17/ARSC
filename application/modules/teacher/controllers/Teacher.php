<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CTL_Controller {
	
	public function __construct(){ 
		parent::__construct();
		$this->load->model('Teacher_Model');
	}
	
	public function add_teacher() {
		$data['all_teacher_find_summary'] = $this->Teacher_Model->all_teacher_finding();
		$data['all_active_designation_find'] = $this->Teacher_Model->all_active_designation_finding();
		$this->load->view('add_teacher',$data);
	}

	public function teacher_info_add(){
	 	// echo "<pre>";print_r($_POST);echo "</pre>";die();
        $inser_id = $this->Teacher_Model->insert_mgt();
      	$this->session->set_userdata('message','Teacher Add Successfully!');
		redirect(base_url().'teacher/teacher/teacher_list');
    }
	
	public function teacher_list(){
		$total_teacher = $this->Teacher_Model->get_all_query_row_countall();
        $tt='';
        foreach ($total_teacher as $row){
            $total_teacher=$row->tt;
        }
          $data = array(
            'total_teacher' => $total_teacher   
        );
		$data['all_teacher_find'] = $this->Teacher_Model->all_teacher_finding();
		$this->load->view('teacher_list',$data);
	}

	public function edit_teacher($id){
		$data['all_active_designation_find'] = $this->Teacher_Model->all_active_designation_finding();
		$data['edit_teacher_find'] = $this->Teacher_Model->edit_teacher_finding($id);
		$this->load->view('edit_teacher',$data);
	}

	public function teacher_update(){
		$id=$this->input->post('Teacher_ID');
		$this->Teacher_Model->update_teacher($id);
		$this->session->set_userdata('message','Teacher updated Successfully!');
		redirect(base_url().'teacher/teacher/teacher_list');
	}

	public function teacher_delete(){
		$id = $this->input->post('delete_Teacher_ID');
		$this->Teacher_Model->delete_teacher($id);
		$this->session->set_userdata('message', ' Teacher Information is deleted!');
		redirect(base_url().'teacher/teacher/teacher_list');	
	}
	// system user teacher start here
	public function print_teacher_single_finding($Teacher_ID){
        $Query="SELECT tbl_teacher.*, tbl_designation.DesignationID,tbl_designation.DesignationName
            FROM tbl_teacher 
            LEFT JOIN tbl_designation  on tbl_teacher.Teacher_designation =tbl_designation.DesignationID
            WHERE 1=1 
            AND tbl_teacher.Teacher_ID=$Teacher_ID ";
        $query_result = $this->db->query($Query)->result_array();;
        return $query_result;
    }

    public function get_teacher_data(){
    	if(isset($_POST['one'])){
	    	$json = array();
	    	$id =  trim($_POST['one']);

	    	$query =  $this->db->query(
	    			"SELECT tbl_teacher.*, tbl_designation.DesignationID,tbl_designation.DesignationName
		            FROM tbl_teacher 
		            LEFT JOIN tbl_designation  on tbl_teacher.Teacher_designation =tbl_designation.DesignationID
	    			WHERE tbl_teacher.Teacher_UniqueID = '$id'
	    			");
	    	$result = $query->result_array(); 
	    	$designation = $result[0]['DesignationName'];
	    	$shift = $result[0]['Teacher_shift'];
	    	$medium = $result[0]['Teacher_medium'];
	    	$name = $result[0]['Teacher_Name'];
	    	$email = $result[0]['Teacher_email'];
	    	if ($medium==1) {
				$teacher_medium = 'Bangla';
			} else {
				$teacher_medium = 'English';
			}
			if ($shift==1) {
				$teacher_shift = 'Day';
			} else {
				$teacher_shift = 'Morning';
			}
	    	$result = array('DesignationName'=>$designation,'Teacher_shift'=>$teacher_shift,'Teacher_medium'=>$teacher_medium,'Teacher_Name'=>$name,'Teacher_email'=>$email);

	    	array_push($json,$result);
	    	echo json_encode($json, true);

    	 }
    }

	public function teacher_user_info_add(){
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// die();
		if (isset($_POST['submit']) == 'Submit'){
			$this->Teacher_Model->teacher_user_info_adding();
			$this->session->set_userdata('message','User added Successfully!');
			redirect(base_url().'users_role/users/user_list');
		}else{
			$this->session->set_userdata('message','User not added, Try again!');
			redirect(base_url().'users_role/users/user_list');
		}
	}

	// system user teacher start here
	public function teacher_attendance(){	
		$data['all_teacher_unique_id'] = $this->Teacher_Model->all_teacher_unique_id_finding();
		$this->load->view('teacher_attendence', $data);	
	}

	public function teacher_attendence_search(){
		$Teacher_attendance_date = date('d-m-Y');
		$Teacher_ShiftID            = ($this->input->get('Teacher_ShiftID'))?$this->input->get('Teacher_ShiftID'):"";
		$Teacher_MediumID          = ($this->input->get('Teacher_MediumID'))?$this->input->get('Teacher_MediumID'):"";
		$Teacher_UniqueID          = ($this->input->get('Teacher_UniqueID'))?$this->input->get('Teacher_UniqueID'):"";
		$query = "";
		$total_condition = "";

		$query_con = "SELECT tbl_teacher.*, tbl_designation.DesignationName
			FROM tbl_teacher
			LEFT JOIN tbl_designation ON tbl_designation.DesignationID=tbl_teacher.Teacher_designation ";
		if($Teacher_ShiftID) {
			$Teacher_ShiftID_condition = "and tbl_teacher.Teacher_shift=$Teacher_ShiftID ";
			$total_condition = $total_condition . $Teacher_ShiftID_condition;
		}
		if($Teacher_MediumID) {
			$Teacher_MediumID_condition = "and tbl_teacher.Teacher_medium=$Teacher_MediumID ";
			$total_condition = $total_condition . $Teacher_MediumID_condition;			
		}
		if($Teacher_UniqueID) {
			$Teacher_UniqueID_condition = "and tbl_teacher.Teacher_UniqueID=$Teacher_UniqueID ";
			$total_condition = $total_condition . $Teacher_UniqueID_condition;			
		}
		 $query = "$query_con 
                    where 1=1  $total_condition";       
		$queryData = $this->db->query($query)->result();
	
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
			$teacher_attendance_List[$total]['Teacher_ID']          	= $info->Teacher_ID;
			$teacher_attendance_List[$total]['DesignationName']    		= $info->DesignationName;
			$teacher_attendance_List[$total]['Teacher_Name']         	= $info->Teacher_Name;
			$teacher_attendance_List[$total]['Teacher_shift']        	= $teacher_shift;
			$teacher_attendance_List[$total]['Teacher_shiftID']        	= $info->Teacher_shift;
			$teacher_attendance_List[$total]['Teacher_medium']       	= $teacher_medium;
			$teacher_attendance_List[$total]['Teacher_mediumID']       	= $info->Teacher_medium;
			$teacher_attendance_List[$total]['Teacher_UniqueID']   	    = $info->Teacher_UniqueID;
			$teacher_attendance_List[$total]['Teacher_status']          = $info->Teacher_status;
			$teacher_attendance_List[$total]['Teacher_attendance_date'] = $Teacher_attendance_date;
		}
		echo json_encode(array(
			"teacher_attendance_List" 	=> $teacher_attendance_List, 
			"total" 	        		=> $total, 
			// "queryData" 	        	=> $queryData, 
		)); 
	}

	public function teacher_attendance_submit(){
	     $inser_id = $this->Teacher_Model->insert_mgt_teacher_attendance();
	     redirect(base_url().'teacher/teacher/teacher_attendance');
    }

	// teacher report start here
	public function teacher_info_report(){
		$data['all_teacher_unique_id'] = $this->Teacher_Model->all_teacher_unique_id_finding();
		$this->load->view('report/print_all_teacher_index',$data);
	}

	public function print_teacher_single($id){
		$data['print_teacher_single_find'] = $this->Teacher_Model->print_teacher_single_finding($id);
		$this->load->view('report/print_single_teacher',$data);
	}

	public function print_all_teacher(){
		$data['print_teacher_all_find'] = $this->Teacher_Model->print_teacher_all_finding();
		$this->load->view('report/print_all_teacher',$data);
	}

	public function teacher_attendance_report(){
		$data['all_teacher_unique_id'] = $this->Teacher_Model->all_teacher_unique_id_finding();
		$this->load->view('report/print_all_teacher_attendance_index',$data);
	}

	public function print_all_teacher_attendance(){
		$data['print_teacher_attendance_all_find'] = $this->Teacher_Model->print_teacher_attendance_all_finding();
		// echo "<pre>"; print_r($data['print_teacher_attendance_all_find']);echo "</pre>";die();
		$this->load->view('report/print_all_teacher_attendance',$data);
		
	}
// teacher report end here

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
	public function json_teacher_uniqueid_check(){  

		$teacher_uniqueid= ($this->input->get('teacher_uniqueid'))?$this->input->get('teacher_uniqueid'):0;
		$check = $this->db->get_where('tbl_teacher', array('teacher_uniqueid' => $teacher_uniqueid));
		$exist = 0;
		if($check->num_rows() > 0){
			$exist = 1;
		}
		echo json_encode(array("exist"  => $exist ));
	}
	
}
