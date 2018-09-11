<?php
class Contact_message_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }

	

	public function get_read_message() {
		$query = "SELECT * FROM tbl_contact_message 
		where ReadStatus=1 
		ORDER BY STR_TO_DATE(Date, '%d-%m-%Y')
		 DESC";

		$result = $this->db->query($query)->result();
		return $result;
	}
	public function get_unread_message() {
		$query = "SELECT * FROM tbl_contact_message 
		where ReadStatus=0 
		ORDER BY STR_TO_DATE(Date, '%d-%m-%Y')
		 DESC";

		$result = $this->db->query($query)->result();
			//  echo "<pre>";
		// print_r($result);
		//  echo  "</pre>";
		// die();
		return $result;
	}
	public function get_all_message() {
		$query = "SELECT * FROM tbl_contact_message 
		where 1=1
		ORDER BY STR_TO_DATE(Date, '%d-%m-%Y')
		 DESC";

		$result = $this->db->query($query)->result();
			//  echo "<pre>";
		// print_r($result);
		//  echo  "</pre>";
		// die();
		return $result;
	}
	
	
}