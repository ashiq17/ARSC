<?php
class Create_Book_Category_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }

       	public function get_bookcatData() {
        $Query = "SELECT * FROM tbl_book_category
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
       
    } 

    public function get_catData() {
        $Query = "SELECT * FROM tbl_book_category
            WHERE 1=1  AND Book_cat_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
        
    }

      function insert_mgt()
    {


        $error = '';
        $fdataa = array();
        $config['upload_path'] = 'images/Book';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 5000;
        // $config['max_width']   = 1024;
        // $config['max_height']  = 768;
        $images = '';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $sdata['error_msg'] = $this->upload->display_errors();
            $this->session->set_userdata($sdata);
            // redirect(base_url().'blog/blogauthor/index');
        } else {
            $fdataa = $this->upload->data();
            $images = $fdataa['file_name'];
        }
        $data = array(

            'Lib_Book_Name'            => $this->input->post("Lib_Book_Name"),
            'Lib_Book_cat_ID'              => $this->input->post("Lib_Book_cat_ID"),
            'Lib_author_Name'            => $this->input->post("Lib_author_Name"),
            'Lib_Quantity'             => $this->input->post("Lib_Quantity"),
            'Lib_Book_details'          => $this->input->post("Lib_Book_details"),
            'Lib_status'            => $this->input->post("Guardian_status"),
            'Image'                      => $images,
            'Created'                    =>date("d-m-Y H:i:s"),
        );
        $str = $this->db->insert_string("tbl_library", $data);
//        echo "<pre>";
//        print_r($str);
//        die();
        $query = $this->db->query($str);
        $insert_id = $this->db->insert_id();
        return $this->db->affected_rows();

    }


     	public function all_books_finding(){
	 	$Query = "SELECT tbl_library.*, tbl_book_category.Book_cat_Name
            FROM tbl_library 
            LEFT JOIN tbl_book_category  on tbl_library.Lib_Book_cat_ID =tbl_book_category.Book_cat_ID
		    WHERE 1=1 
		    ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
     // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
	}


        public function all_active_lib_Book_finding(){
        $Query = "SELECT tbl_library.*, tbl_book_category.Book_cat_Name
            FROM tbl_library 
            LEFT JOIN tbl_book_category  on tbl_library.Lib_Book_cat_ID =tbl_book_category.Book_cat_ID
                  WHERE 1=1 
                  AND Lib_status=1
                  ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
     // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
    }
    public function all_inactive_lib_book_finding(){
        $Query = "SELECT tbl_library.*, tbl_book_category.Book_cat_Name
            FROM tbl_library 
            LEFT JOIN tbl_book_category  on tbl_library.Lib_Book_cat_ID =tbl_book_category.Book_cat_ID
                  WHERE 1=1 
                  AND Lib_status=0
                  ORDER BY Lib_Book_Name ASC ";
        $query_result = $this->db->query($Query)->result_array();
        return $query_result;
    }

        public function delete_library_book($id){
        $this->db->where('Lib_ID', $id);
        $this->db->delete('tbl_library');
    }


        public function edit_library_book_finding($id){
        $Query = "SELECT* 
                  FROM tbl_library 
                  WHERE 1=1 
                  AND tbl_library.Lib_ID=$id ";
        $query_result = $this->db->query($Query)->result_array();
   // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
    }


    function get_all_query_row_countall($search = NULL)
    {
        $str = "SELECT COUNT(Lib_ID) as tb FROM tbl_library WHERE Lib_status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }



        public function update_lib_book($id){

        // echo "<pre>"; print_r($_POST); echo "</pre>";die() ;
        if (isset($_POST['submit']) == 'Update'){

       $error = '';
        $fdataa = array();
        $config['upload_path'] = 'images/Book';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 5000;
        $images = '';
            if($_FILES['image']['name']!=""){
                     $config['upload_path'] = 'images/Book';
                    // $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
                    $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe';
                    $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload('image'))
                    {
                        $error = array('error' => $this->upload->display_errors());
                    }
                    else
                    {
                        $upload_data=$this->upload->data();
                        $image_name=$upload_data['file_name'];
                    }
                }
                else{
                    $image_name=$this->input->post('old_image');
                }

            $Book_info = array(
            'Lib_Book_Name'            => $this->input->post("Lib_Book_Name"),
            'Lib_Book_cat_ID'          => $this->input->post("Lib_Book_cat_ID"),
            'Lib_author_Name'          => $this->input->post("Lib_author_Name"),
            'Lib_Quantity'             => $this->input->post("Lib_Quantity"),
            'Lib_Book_details'         => $this->input->post("Lib_Book_details"),
            'Lib_status'               => $this->input->post("Lib_status"),
            'Image'                    => $image_name,
            'Modified'                 =>date("d-m-Y H:i:s"),
                );
            $this->db->where('Lib_ID',$id);
            $this->db->update('tbl_library',$Book_info);
        } 
    }
    



    
}