
<?php
class Notice_Model extends CI_Model{

	function __construct() {
		parent::__construct();
	}
	//<--------------------------- Hasib model works starts------------------------------------------------>
	public function notice_adding($notice_info){
		$this->db->insert('tbl_notes', $notice_info);
	}
	public function get_notice_list(){
		$Query = "SELECT *
		          FROM tbl_notes where note_type = 2
		          AND status = 1
		          ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}
	public function get_notice_data($note_id){
		$Query = "SELECT *
		          FROM tbl_notes where tbl_notes.note_id = $note_id";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function update_notice($notice_update){

		// 			 echo "<pre>";
		// print_r($note_update);
		// die();

		$note_id = $notice_update['note_id'];

		$this->db->where('note_id', $note_id);       
        $this->db->update('tbl_notes', $notice_update);
	}

	public function delete_notice($note_id){
	  	$this->db->where('note_id', $note_id);
	  	$this->db->delete('tbl_notes');
	}

	//<--------------------------- shanto model works starts------------------------------------------------>

	public function notice_info_add(){

		$notice_view_type = $this->input->post('notice_view_type');
		if ($notice_view_type==2) {
			$department_or_designation = $this->input->post('department_list');
		}else{
			$department_or_designation = $this->input->post('designation_list');
		}

		// echo "<pre>";
		// print_r($department_or_designation);
		// echo "</pre>";
		// die();
		// $department_or_designation = rtrim(implode(',', $department_or_designation), ',');

		$notice_publish = array(
			'notice_date' => $this->input->post('notice_date'),
			'expired_date' => $this->input->post('expired_date'),
			// 'notice_view_type' => $notice_view_type,
			// 'department_or_designation_list' 	=> $department_or_designation,
			'notice_title' 	=> $this->input->post('notice_title'),
			'notice_body_details' 	=> $this->input->post('notice_body_details'),
			'status' 	=> $this->input->post('status'),
			'created' 	=> date("d-m-Y H:i:s"),
			'modified' 	=> date("d-m-Y H:i:s"),
		);

		$this->db->insert('tbl_notice_publish', $notice_publish);
		$insert_id = $this->db->insert_id();

		// echo "<pre>";
		// // print_r($insert_id);
		// print_r($notice_view_type);
		// echo "</pre>";
		// die();
		if ($notice_view_type==1) {
			$count = 1;
		}else{
			$count = count($department_or_designation);
		}
		for ($i=0; $i <$count ; $i++) { 
			$notice_publish2 = array(
				'notice_publish_id' => $insert_id,
				'notice_view_type' => $notice_view_type,
				'depart_or_desig' 	=> $department_or_designation[$i],
				'created' 	=> date("d-m-Y H:i:s"),
				'modified' 	=> date("d-m-Y H:i:s")
			);

			$this->db->insert('tbl_depart_desig_notice', $notice_publish2);
		}
	}

	public function notice_list(){   
	    $Query = "SELECT *
        FROM tbl_notice_publish
        -- left join tbl_notes on tbl_notes.leave_type=tbl_notice_publish.id
        -- left join tbl_designations on tbl_employee_details.designation=tbl_designations.id
        -- left join tbl_departments on tbl_employee_details.department=tbl_departments.id
        "; 

        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function get_notice_title(){
		$Query = "SELECT note_id,note_title
		          FROM tbl_notes
		          WHERE 1=1
		          AND note_type=2
		          AND status=1
		          ";
        $query_result = $this->db->query($Query)->result_array();

        return $query_result;
	}

	public function find_notice(){
        $Query = "SELECT tbl_notice_publish.*
                FROM tbl_notice_publish
                -- LEFT JOIN tbl_pages ON tbl_permissions.pages_actions_id = tbl_pages.id 
                WHERE 1=1 
                AND tbl_notice_publish.status = 1";
                
        $query_result = $this->db->query($Query)->result();
        //echo '<pre>',print_r($query_result),'</pre>';
        return $query_result;
    }

	
	// employee model function repeat
	public function get_department(){
		$Query = "SELECT p.*
		          FROM tbl_class p
		          -- LEFT JOIN tbl_pages_name pn ON p.pages_id = pn.id
		          WHERE 1=1 
		         ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function find_designation(){
		$Query = "SELECT *
		          FROM tbl_teacher
		          WHERE 1=1
		          -- AND tbl_designations.status=1
		          ORDER BY tbl_teacher.Teacher_Name";
        $query_result = $this->db->query($Query)->result_array();

        return $query_result;
	}
	// employee model function repeat
}
?>
