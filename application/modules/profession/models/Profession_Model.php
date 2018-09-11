<?php
class Profession_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // $this->load->library('Facebook');
		
    }

//========mahbub Category starting here====///
 	public function all_profession_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_profession 
		          WHERE 1=1 
		          ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
     // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
	}
	public function all_active_profession_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_profession 
		          WHERE 1=1 
		          AND ProfessionStatus=1
		          ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
     // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
	}
	public function all_inactive_profession_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_profession 
		          WHERE 1=1 
		          AND ProfessionStatus=0
		          ORDER BY ProfessionName ASC ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
	}

	public function edit_profession_finding($id){
		$Query = "SELECT* 
		          FROM tbl_profession 
		          WHERE 1=1 
		          AND tbl_profession.ProfessionID=$id ";
        $query_result = $this->db->query($Query)->result_array();
   // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
	}
	public function update_profession($id){
		if (isset($_POST['submit']) == 'Update'){

			$profession_info = array(
					'ProfessionName'	  	=> $this->input->post('profession_name'),
					'ProfessionStatus'		=> $this->input->post('profession_status'),
					'Modified' 				=>date("d-m-Y H:i:s")
				);
			$this->db->where('ProfessionID',$id);
			$this->db->update('tbl_profession',$profession_info);
		} 
	}

	public function delete_profession($id){
		$this->db->where('ProfessionID', $id);
		$this->db->delete('tbl_profession');
	}
	
///======mahbub  Category Task End here==========///
    
	
	/*mahbub edning here*/

	

	


	
}