<?php
class Web_Model extends CI_Model{

	function __construct() {
		parent::__construct();
	}
	
	function get_header_data(){
		$query = "SELECT * FROM tbl_header_info WHERE 1=1";
        $query_result = $this->db->query($query)->result_array();
        return $query_result;
	}

	function header_info_add($header_image){
		$header_info = array(
			'image'	  => $header_image,
			'mobile'	  => $this->input->post('mobile_no'),
			'email' 	  => $this->input->post('email'),
			'add_link' 	  => $this->input->post('add_link'),
			'extra_info' 	  => $this->input->post('extra_info'),
			'created' 	  => date("d-m-Y H:i:s"),
			'modified' 	  => date("d-m-Y H:i:s"),
		);
		$this->db->insert('tbl_header_info', $header_info);
	}

	function header_info_edit($header_image){
		$header_id = $this->input->post('header_id');
		$header_info = array(
			'image'	  => $header_image,
			'mobile'	  => $this->input->post('mobile_no'),
			'email' 	  => $this->input->post('email'),
			'add_link' 	  => $this->input->post('add_link'),
			'extra_info' 	  => $this->input->post('extra_info'),
			'modified' 	  => date("d-m-Y H:i:s"),
		);
		$this->db->where('header_info_id', $header_id);       
        $this->db->update('tbl_header_info', $header_info);
	}

	// function get_time_diff_smaller_to_greater($in_time,$out_time){
	// 	// $in_time = strtotime($in_time);
	// 	// $pd_time = strtotime('24:00:00') - 60*60;
	// 	// $result  = $pd_time - $in_time;
	// 	// $result = date("h:i:s",$result);
	// 	// $secs = strtotime($out_time)-strtotime("00:00:00");
	// 	// $final_result = date("H:i:s",strtotime($result)+$secs);
	// 	$final_result = $this->get_time_difference($in_time, $out_time);
	// 	return $final_result;
	// }

	// function get_time_difference($time1, $time2) {
	//     $time1 = strtotime("$time1");
	//     $time2 = strtotime("$time2");
	//     if ($time2 < $time1) {
	//         $time2 += 86400;
	//     }
	//     return date("H:i:s", strtotime("00:00:00") + ($time2 - $time1));
	// }

	// public function employee_finding(){
	// 	$Query = "SELECT tbl_employee_details.*, tbl_departments.id as depID, tbl_departments.department, tbl_designations.id as desgID, tbl_designations.designation
	// 	          FROM tbl_employee_details 
	// 	          LEFT JOIN tbl_departments	on tbl_departments.id = tbl_employee_details.department
	// 	          LEFT JOIN tbl_designations on tbl_designations.id = tbl_employee_details.designation
	// 	          WHERE 1=1 
	// 	          AND tbl_employee_details.status=1 
	// 	          ORDER BY tbl_employee_details.full_name
	// 	          ";
 //        $query_result = $this->db->query($Query)->result_array();
 //        return $query_result;
	// }
	// public function get_department(){
	// 	$Query = "SELECT p.* FROM tbl_departments p WHERE 1=1 AND status = 1 ORDER BY p.d_order asc";
 //        $query_result = $this->db->query($Query)->result_array();
 //        return $query_result;
	// }
	// public function find_designation(){
	// 	$Query = "SELECT *
	// 	          FROM tbl_designations
	// 	          WHERE 1=1
	// 	          AND tbl_designations.status=1
	// 	          ORDER BY tbl_designations.designation";
 //        $query_result = $this->db->query($Query)->result_array();
 //        return $query_result;
	// }

	// public function find_group(){
	// 	$Query = "SELECT *
	// 	          FROM tblhrm_group
	// 	          WHERE 1=1
	// 	          AND tblhrm_group.status=1
	// 	          ";
 //        $query_result = $this->db->query($Query)->result_array();
 //        return $query_result;
	// }

	// public function find_shift(){
	// 	$Query = "SELECT *
	// 	          FROM tbltas_shift
	// 	          WHERE 1=1
	// 	          ";
 //        $query_result = $this->db->query($Query)->result_array();
 //        return $query_result;
	// }
	
	// public function get_leave_list(){
	// 	$Query = "SELECT *
	// 	          FROM tbl_leaves
	// 	          WHERE 1=1 
	// 	          ORDER BY leave_type ASC";
 //        $query_result = $this->db->query($Query)->result_array();
 //        return $query_result;
	// }
	















}
?>
