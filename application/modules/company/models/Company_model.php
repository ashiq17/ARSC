
<?php
class Company_model extends CI_Model{

	function __construct() {
		parent::__construct();
	}

	 public function company_info_add($company_info){
		$this->db->insert('tbl_company_info', $company_info);
	}



	public function find_company_basic_info(){
		$Query = "SELECT *
		      FROM tbl_company_info
		      ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}	

	public function company_basic_info_update($data,$company_info_id){

		// echo "<pre>";
		// print_r($data);
		// print_r($company_info_id);
		// echo "</pre>";
		// die();

        $this->db->where('company_info_id', $company_info_id);       
        $this->db->update('tbl_company_info', $data);
        
	}
}
?>
