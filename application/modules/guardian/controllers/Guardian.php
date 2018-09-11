<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guardian extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Guardian_Model');
	}
	
	public function add_guardian() {
		$data['all_student_find'] = $this->Guardian_Model->all_student_finding();
		$data['all_guardian_find'] = $this->Guardian_Model->all_guardian_finding();
		$this->load->view('add_guardian',$data);
	}

	function guardian_info_add(){
	 	// echo "<pre>";
	 	// print_r($_POST);
	 	// echo "</pre>";
	 	// die();

        $inser_id = $this->Guardian_Model->insert_mgt();
      	$this->session->set_userdata('message','Guardian Add Successfully!');
			redirect(base_url().'guardian/guardian/guardian_list');

    }
	
	public function guardian_list(){
			$total_guardian = $this->Guardian_Model->get_all_query_row_countall();
          $tp='';
        foreach ($total_guardian as $row){
            $total_guardian=$row->tp;
        }
          $data = array(
            'total_guardian' => $total_guardian
        );

		$data['all_guardian_find'] = $this->Guardian_Model->all_guardian_finding();
		$this->load->view('guardian_list',$data);
	}

	public function edit_guardian($id){
		$data['all_student_find'] = $this->Guardian_Model->all_student_finding();
		$data['edit_guardian_find'] = $this->Guardian_Model->edit_guardian_finding($id);
		$this->load->view('edit_guardian',$data);
	}

	public function guardian_update(){
			// echo "<pre>";
	 	// print_r($_POST);
	 	// echo "</pre>";
	 	// die();
		$id=$this->input->post('Guardian_ID');
		$this->Guardian_Model->update_guardian($id);
		$this->session->set_userdata('message','guardian updated Successfully!');
		redirect(base_url().'guardian/guardian/guardian_list');
	}

	public function guardian_delete(){
		$id = $this->input->post('delete_Guardian_ID');
		$this->Guardian_Model->delete_guardian($id);
		$this->session->set_userdata('message', ' Guardian Data is deleted!');
		redirect(base_url().'guardian/guardian/guardian_list');
		
	}

	public function get_guardian_data(){
    	if(isset($_POST['one'])){
	    	$json = array();
	    	$id =  trim($_POST['one']);

	    	$query =  $this->db->query(
	    			"SELECT*
		            FROM tbl_guardian 
	    			WHERE tbl_guardian.Guardian_UNQ_ID = '$id'
	    			");
	 
	    	$result = $query->result_array(); 
	    	$name = $result[0]['Guardian_Name'];
	  	 	$email = $result[0]['Guardian_email'];
	
	    	$result = array('Guardian_Name'=>$name,'Guardian_email'=>$email);

	    	array_push($json,$result);
	    	echo json_encode($json, true);
//    	echo "<pre>";
		// print_r($query);
		// echo "</pre>";
		// die();
    	 }
    }

	public function guardian_user_info_add(){
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// die();
		if (isset($_POST['submit']) == 'Submit'){
			$this->Guardian_Model->guardian_user_info_adding();
			$this->session->set_userdata('message','User added Successfully!');
			redirect(base_url().'users_role/users/user_list');
		}else{
			$this->session->set_userdata('message','User not added, Try again!');
			redirect(base_url().'users_role/users/user_list');
		}
	}

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
	public function json_guardian_uniqueid_check(){  

		$guardian_uniqueid= ($this->input->get('guardian_uniqueid'))?$this->input->get('guardian_uniqueid'):0;
		$check = $this->db->get_where('tbl_guardian', array('guardian_uniqueid' => $guardian_uniqueid));
		$exist = 0;
		if($check->num_rows() > 0){
			$exist = 1;
		}
		echo json_encode(array("exist"  => $exist ));
	}
	


	
	// teacher report start here
	public function guardian_info_report(){
		$data['all_guardian_unique_id'] = $this->Guardian_Model->all_guardian_unique_id_finding();
		$this->load->view('report/print_all_guardian_index',$data);
	}

	public function print_guardian_single($id){
		$data['print_guardian_single_find'] = $this->Guardian_Model->print_guardian_single_finding($id);
		$this->load->view('report/print_single_guardian',$data);
	}

	public function print_all_guardian(){
		$data['print_guardian_all_find'] = $this->Guardian_Model->print_guardian_all_finding();
		$this->load->view('report/print_all_guardian',$data);
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



	
}
