<?php
class Time_slot_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();	
    }
  function insert_mgt()
    {
        $data = array(
                   'Time_Day'                  => $this->input->post("Time_Day"),
                    'Time_Slot'                 => $this->input->post("Time_Slot"),
                    'Time_Class_ID'             => $this->input->post("Time_Class_ID"),
                    'Time_Section_ID'           => $this->input->post("Time_Section_ID"),
                    'Time_Subject'              => $this->input->post("Time_Subject"),
                    'Time_Teacher'              => $this->input->post("Time_Teacher"),
                    'Time_Class_Room'           => $this->input->post("Time_Class_Room"),
                    'Time_Status'            => $this->input->post("Time_Status"),
                    'Created'                   =>date("d-m-Y H:i:s"),
                    'Modified'                  =>''
        );
        $str = $this->db->insert_string("tbl_time_slot", $data);
        $query = $this->db->query($str);
        $insert_id = $this->db->insert_id();
        return $this->db->affected_rows();
    }

 	public function all_time_slot_finding(){


	 	$Query = "SELECT tbl_time_slot.*, tbl_class.Class_Name,tbl_section.Section_Name, tbl_subject.Subject_Name,tbl_teacher.Teacher_Name,tbl_classtime.ClassTime_Name,tbl_room.Room_Name
            FROM tbl_time_slot 
            LEFT JOIN tbl_class       on tbl_time_slot.Time_Class_ID =tbl_class.Class_ID
            LEFT JOIN tbl_section     on tbl_time_slot.Time_Section_ID =tbl_section.Section_ID
            LEFT JOIN tbl_subject     on tbl_time_slot.Time_Subject =tbl_subject.Subject_ID
            LEFT JOIN tbl_teacher     on tbl_time_slot.Time_Teacher =tbl_teacher.Teacher_ID
            LEFT JOIN tbl_classtime   on tbl_time_slot.Time_Slot =tbl_classtime.ClassTime_ID
            LEFT JOIN tbl_room        on tbl_time_slot.Time_Class_Room =tbl_room.Room_ID
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}



	public function edit_time_slot_finding($id){
		$Query = "SELECT* 
		          FROM tbl_time_slot 
		          WHERE 1=1 
		          AND tbl_time_slot.Time_ID=$id ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}
	public function update_time_slot($id){
		if (isset($_POST['submit']) == 'Update'){
			$time_slot_info = array(
					'Time_Day'                  => $this->input->post("Time_Day"),
		            'Time_Slot'                 => $this->input->post("Time_Slot"),
		            'Time_Class_ID'             => $this->input->post("Time_Class_ID"),
		            'Time_Section_ID'           => $this->input->post("Time_Section_ID"),
		            'Time_Subject'              => $this->input->post("Time_Subject"),
                    'Time_Teacher'              => $this->input->post("Time_Teacher"),
		            'Time_Class_Room'           => $this->input->post("Time_Class_Room"),
		            'Time_Status'            => $this->input->post("Time_Status"),
		            'Created'                   =>date("d-m-Y H:i:s"),
		            'Modified'                  =>''
				);
			$this->db->where('Time_ID',$id);
			$this->db->update('tbl_time_slot',$time_slot_info);
		} 
	}

      public function deleteInfo($Eid = NULL){
        $this->db->where('Time_ID', $Eid);
        $this->db->delete('tbl_time_slot');
    }

    public function get_Class_name() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();
        return $query_result;  
    } 

    public function get_Section_name() {
        $Query = "SELECT * FROM tbl_section
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
    }
     public function get_subjectData() {
        $Query = "SELECT * FROM tbl_subject
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }


    public function get_teacherData() {
        $Query = "SELECT * FROM tbl_teacher
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

      public function get_timeData() {
        $Query = "SELECT * FROM tbl_classtime
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }


      public function get_class_roomData() {
        $Query = "SELECT * FROM tbl_room
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

    public function get_classData() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1  AND Class_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        return $query_result;
        
    }

    public function get_sectionData() {
        $Query = "SELECT tbl_section.*,  tbl_class.Class_Name as C_Name
            FROM tbl_section
            LEFT JOIN tbl_class ON tbl_class.Class_ID = tbl_section.Section_class_ID
            WHERE 1=1 ORDER BY tbl_section.Section_ID ASC";
        $query_result = $this->db->query($Query)->result();
        return $query_result;
    }
	

	
}