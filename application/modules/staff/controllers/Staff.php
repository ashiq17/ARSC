<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CTL_Controller {
	
	public function __construct(){ 
		parent::__construct();
		$this->load->model('Staff_model');
	}
	
	public function add_staff() {
		// $data['all_staff_find_summary'] = $this->Staff_model->all_staff_finding();
		$data['all_active_designation_find'] = $this->Staff_model->all_active_designation_finding();
		$this->load->view('add_staff',$data);
	}

	public function staff_info_add(){
	 	// echo "<pre>";print_r($_POST);echo "</pre>";die();
        $inser_id = $this->Staff_model->insert_mgt();
      	$this->session->set_userdata('message','staff Add Successfully!');
		redirect(base_url().'staff/staff/staff_list');
    }
	
	public function staff_list(){
		$total_staff = $this->Staff_model->get_all_query_row_countall();
        $tt='';
        foreach ($total_staff as $row){
            $total_staff=$row->tt;
        }
          $data = array(
            'total_staff' => $total_staff   
        );
		$data['all_staff_find'] = $this->Staff_model->all_staff_finding();
		$this->load->view('staff_list',$data);
	}

	public function edit_staff($id){
		$data['all_active_designation_find'] = $this->Staff_model->all_active_designation_finding();
		$data['edit_staff_find'] = $this->Staff_model->edit_staff_finding($id);
		$this->load->view('edit_staff',$data);
	}

	public function staff_update(){
		$id=$this->input->post('Staff_ID');
		$this->Staff_model->update_staff($id);
		$this->session->set_userdata('message','Staff updated Successfully!');
		redirect(base_url().'staff/staff/staff_list');
	}

	public function staff_delete(){
		$id = $this->input->post('delete_Staff_ID');
		$this->Staff_model->delete_staff($id);
		$this->session->set_userdata('message', ' Staff Information is deleted!');
		redirect(base_url().'staff/staff/staff_list');	
	}
	// system user staff start here
	public function print_staff_single_finding($Staff_ID){
        $Query="SELECT tbl_staff.*, tbl_designation.DesignationID,tbl_designation.DesignationName
            FROM tbl_staff 
            LEFT JOIN tbl_designation  on tbl_staff.staff_designation =tbl_designation.DesignationID
            WHERE 1=1 
            AND tbl_staff.Staff_ID=$Staff_ID ";
        $query_result = $this->db->query($Query)->result_array();;
        return $query_result;
    }

    public function get_staff_data(){
    	if(isset($_POST['one'])){
	    	$json = array();
	    	$id =  trim($_POST['one']);

	    	$query =  $this->db->query(
	    			"SELECT tbl_staff.*, tbl_designation.DesignationID,tbl_designation.DesignationName
		            FROM tbl_staff 
		            LEFT JOIN tbl_designation  on tbl_staff.staff_designation =tbl_designation.DesignationID
	    			WHERE tbl_staff.staff_UniqueID = '$id'
	    			");
	    	$result = $query->result_array(); 
	    	$designation = $result[0]['DesignationName'];
	    	$shift = $result[0]['staff_shift'];
	    	$medium = $result[0]['staff_medium'];
	    	$name = $result[0]['staff_Name'];
	    	$email = $result[0]['staff_email'];
	    	if ($medium==1) {
				$staff_medium = 'Bangla';
			} else {
				$staff_medium = 'English';
			}
			if ($shift==1) {
				$staff_shift = 'Day';
			} else {
				$staff_shift = 'Morning';
			}
	    	$result = array('DesignationName'=>$designation,'staff_shift'=>$staff_shift,'staff_medium'=>$staff_medium,'staff_Name'=>$name,'staff_email'=>$email);

	    	array_push($json,$result);
	    	echo json_encode($json, true);

    	 }
    }

	public function staff_user_info_add(){
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// die();
		if (isset($_POST['submit']) == 'Submit'){
			$this->Staff_model->staff_user_info_adding();
			$this->session->set_userdata('message','User added Successfully!');
			redirect(base_url().'users_role/users/user_list');
		}else{
			$this->session->set_userdata('message','User not added, Try again!');
			redirect(base_url().'users_role/users/user_list');
		}
	}

	// system user staff start here
	public function staff_attendance(){	
		$data['all_staff_unique_id'] = $this->Staff_model->all_staff_unique_id_finding();
		$this->load->view('staff_attendence', $data);	
	}

	public function staff_attendence_search(){
		$Staff_attendance_date = date('d-m-Y');
		$Staff_ShiftID            = ($this->input->get('Staff_ShiftID'))?$this->input->get('Staff_ShiftID'):"";
		$Staff_MediumID          = ($this->input->get('Staff_MediumID'))?$this->input->get('Staff_MediumID'):"";
		$Staff_UniqueID          = ($this->input->get('Staff_UniqueID'))?$this->input->get('Staff_UniqueID'):"";
		$query = "";
		$total_condition = "";

		$query_con = "SELECT tbl_staff.*, tbl_designation.DesignationName
			FROM tbl_staff
			LEFT JOIN tbl_designation ON tbl_designation.DesignationID=tbl_staff.Staff_designation ";
		if($Staff_ShiftID) {
			$Staff_ShiftID_condition = "and tbl_staff.Staff_shift=$Staff_ShiftID ";
			$total_condition = $total_condition . $Staff_ShiftID_condition;
		}
		if($Staff_MediumID) {
			$Staff_MediumID_condition = "and tbl_staff.Staff_medium=$Staff_MediumID ";
			$total_condition = $total_condition . $Staff_MediumID_condition;			
		}
		if($Staff_UniqueID) {
			$Staff_UniqueID_condition = "and tbl_staff.Staff_UniqueID=$Staff_UniqueID ";
			$total_condition = $total_condition . $Staff_UniqueID_condition;			
		}
		 $query = "$query_con 
                    where 1=1  $total_condition";       
		$queryData = $this->db->query($query)->result();
	
		$total = 0;
		$staff_attendance_List = array();//`id``ItemCode``BarCode`
		foreach($queryData as $key=>$info){
			if ($info->Staff_medium==1) {
				$staff_medium = 'Bangla';
			} else {
				$staff_medium = 'English';
			}
			if ($info->Staff_shift==1) {
				$staff_shift = 'Day';
			} else {
				$staff_shift = 'Morning';
			}
			
			$total++;
			$staff_attendance_List[$total]['Staff_ID']          	= $info->Staff_ID;
			$staff_attendance_List[$total]['DesignationName']    	= $info->DesignationName;
			$staff_attendance_List[$total]['Staff_Name']         	= $info->Staff_Name;
			$staff_attendance_List[$total]['Staff_shift']        	= $staff_shift;
			$staff_attendance_List[$total]['Staff_shiftID']        	= $info->Staff_shift;
			$staff_attendance_List[$total]['Staff_medium']       	= $staff_medium;
			$staff_attendance_List[$total]['Staff_mediumID']       	= $info->Staff_medium;
			$staff_attendance_List[$total]['Staff_UniqueID']   	    = $info->Staff_UniqueID;
			$staff_attendance_List[$total]['Staff_status']          = $info->Staff_status;
			$staff_attendance_List[$total]['Staff_attendance_date'] = $Staff_attendance_date;
		}
		echo json_encode(array(
			"staff_attendance_List" 	=> $staff_attendance_List, 
			"total" 	        		=> $total, 
			"queryData" 	        	=> $queryData, 
		)); 
	}

	public function Staff_attendance_submit(){
	     $inser_id = $this->Staff_model->insert_mgt_Staff_attendance();
	     redirect(base_url().'staff/staff/staff_attendance');
    }

	// staff report start here
	public function staff_info_report(){
		$data['all_staff_unique_id'] = $this->Staff_model->all_staff_unique_id_finding();
		$this->load->view('report/print_all_staff_index',$data);
	}

	public function print_staff_single($id){
		$data['print_staff_single_find'] = $this->Staff_model->print_staff_single_finding($id);
		$this->load->view('report/print_single_staff',$data);
	}

	public function print_all_staff(){
		$data['print_staff_all_find'] = $this->Staff_model->print_staff_all_finding();
		$this->load->view('report/print_all_staff',$data);
	}

	public function staff_attendance_report(){
		$data['all_staff_unique_id'] = $this->Staff_model->all_staff_unique_id_finding();
		$this->load->view('report/print_all_staff_attendance_index',$data);
	}

	public function print_all_staff_attendance(){
		$data['print_staff_attendance_all_find'] = $this->Staff_model->print_staff_attendance_all_finding();
		// echo "<pre>"; print_r($data['print_staff_attendance_all_find']);echo "</pre>";die();
		$this->load->view('report/print_all_staff_attendance',$data);
		
	}
// staff report end here

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
	public function json_staff_uniqueid_check(){  

		$staff_uniqueid= ($this->input->get('staff_uniqueid'))?$this->input->get('staff_uniqueid'):0;
		$check = $this->db->get_where('tbl_staff', array('staff_uniqueid' => $staff_uniqueid));
		$exist = 0;
		if($check->num_rows() > 0){
			$exist = 1;
		}
		echo json_encode(array("exist"  => $exist ));
	}
	
}
