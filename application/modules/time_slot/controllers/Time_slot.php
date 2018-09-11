<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_slot extends CTL_Controller {
	
	 public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Time_slot_Model');
	}
	
	public function add_time_slots() {
		$data['Class_Data']  = $this->Time_slot_Model->get_classData();
		$data['Section_Data']  = $this->Time_slot_Model->get_sectionData();
		$data['Subject_Data']  = $this->Time_slot_Model->get_subjectData();
		$data['Teacher_Data']  = $this->Time_slot_Model->get_teacherData();
		$data['Class_time_Data']  = $this->Time_slot_Model->get_timeData();
		$data['Class_room_Data']  = $this->Time_slot_Model->get_class_roomData();
		$this->load->view('add_time_slot',$data);
	}


	public function view_time_slots(){
		$data['all_time_slot_find'] = $this->Time_slot_Model->all_time_slot_finding();
		$this->load->view('time_slot_list',$data);
	}

	function time_slot_info_add(){
        $inser_id = $this->Time_slot_Model->insert_mgt();
      	$this->session->set_userdata('message','Time Slot Add Successfully!');
		redirect(base_url().'time_slot/time_slot/time_slot_list');
    }
	
	public function time_slot_list(){
		$data['all_time_slot_find'] = $this->Time_slot_Model->all_time_slot_finding();
		$this->load->view('time_slot_list',$data);
	}


	public function edit_time_slot($id){
		$data['edit_time_slot_find'] = $this->Time_slot_Model->edit_time_slot_finding($id);
		$this->load->view('edit_time_slot',$data);
	}

	public function time_slot_update(){
		$id=$this->input->post('Time_ID');
		$this->Time_slot_Model->update_time_slot($id);
		$this->session->set_userdata('message','Time Slot updated Successfully!');
		redirect(base_url().'time_slot/time_slot/time_slot_list');
	}



	function delete_time_slot($Eid = NULL)
    {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Time_slot_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Time_slot_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Time Slot Data is deleted!');

        redirect(base_url().'time_slot/time_slot/time_slot_list');

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


		public function student_attendance(){
		$data['Class_select']  = $this->Student_Model->get_Class_name();
		$data['Section_select']  = $this->Student_Model->get_Section_name();
		$this->load->view('student_attendance', $data);
		
	}

	


	
}
