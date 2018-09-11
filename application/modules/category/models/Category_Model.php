<?php
class Category_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // $this->load->library('Facebook');
		
    }

//========mahbub Category starting here====///
 	public function all_category_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_category 
		          WHERE 1=1 
		          ORDER BY created ASC ";
        $query_result = $this->db->query($Query)->result_array();
    //   		echo "<pre>";
				//  print_r($query_result);
				// echo "</pre>";
				// die();
        return $query_result;
	}
	public function all_published_category_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_category 
		          WHERE 1=1 
		          AND CategoryStatus=1
		          ORDER BY created ASC ";
        $query_result = $this->db->query($Query)->result_array();
    //   		echo "<pre>";
				//  print_r($query_result);
				// echo "</pre>";
				// die();
        return $query_result;
	}
	public function all_unpublished_category_finding(){
	 	$Query = "SELECT * 
		          FROM tbl_category 
		          WHERE 1=1 
		           AND CategoryStatus=0
		          ORDER BY created ASC ";
        $query_result = $this->db->query($Query)->result_array();
    //   		echo "<pre>";
				//  print_r($query_result);
				// echo "</pre>";
				// die();
        return $query_result;
	}

	public function edit_category_finding($id){
		$Query = "SELECT* 
		          FROM tbl_category 
		          WHERE 1=1 
		          AND tbl_category.CategoryID=$id
		          ";
        $query_result = $this->db->query($Query)->result_array();
    //     	echo "<pre>";
				//  print_r($query_result);
				// echo "</pre>";
				// die();
        return $query_result;
	}
	public function update_category($id){
		if (isset($_POST['submit']) == 'Update'){

			$category_info = array(

					'CategoryName'	  		=> $this->input->post('category_name'),
					'CategoryStatus'		=> $this->input->post('category_status'),
					'HomepageCategoryStatus'=> $this->input->post('homepage_category_status'),
					'CreateBy' 	  			=> $UserName,
					'created' 				=>'',
					'modified' 				=>date("d-m-Y H:i:s")
				);

			$this->db->where('CategoryID',$id);
			$this->db->update('tbl_category',$category_info);
		} 
	}

	public function delete_category($id){
		$this->db->where('CategoryID', $id);
		$this->db->delete('tbl_category');
	}
	
///======mahbub  Category Task End here==========///
    
	
	/*mahbub edning here*/

	

	


	
}