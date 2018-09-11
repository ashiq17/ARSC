<?php
class Create_Expense_Category_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }

       	public function get_catData() {
        $Query = "SELECT * FROM tbl_expense_cat
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result_array();
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
       
    } 

    public function get_expensecatData() {
        $Query = "SELECT * FROM tbl_expense_cat
            WHERE 1=1  AND expense_cat_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }

      function insert_mgt()
        {


    
        $data = array(

            'Expense_Amount'            => $this->input->post("Expense_Amount"),
            'Expense_Date'              => $this->input->post("Expense_Date"),
            'Expense_cat_ID'            => $this->input->post("Expense_cat_ID"),
            'Expense_notes'             => $this->input->post("Expense_notes"),
            'Created'                    =>date("d-m-Y H:i:s"),
        );
        $str = $this->db->insert_string("tbl_expense", $data);
//        echo "<pre>";
//        print_r($str);
//        die();
        $query = $this->db->query($str);
        $insert_id = $this->db->insert_id();
        return $this->db->affected_rows();

    }


     	public function all_expense_finding(){
	 	$Query = "SELECT tbl_expense.*, tbl_expense_cat.expense_cat_Name
            FROM tbl_expense 
            LEFT JOIN tbl_expense_cat  on tbl_expense.Expense_cat_ID =tbl_expense_cat.expense_cat_ID
		    WHERE 1=1 
		    ORDER BY Created ASC ";
        $query_result = $this->db->query($Query)->result_array();
     // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
	}



        public function delete_expense($id){
        $this->db->where('Expense_ID', $id);
        $this->db->delete('tbl_expense');
    }


        public function edit_expense_finding($id){
        $Query = "SELECT* 
                  FROM tbl_expense 
                  WHERE 1=1 
                  AND tbl_expense.Expense_ID=$id ";
        $query_result = $this->db->query($Query)->result_array();
   // echo "<pre>"; print_r($query_result); echo "</pre>";die();
        return $query_result;
    }


    function get_all_query_row_countall($search = NULL)
    {
        $str = "SELECT COUNT(Expense_ID) as te FROM tbl_expense WHERE Expense_Status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }
        public function update_expense($id){

        // echo "<pre>"; print_r($_POST); echo "</pre>";die() ;
        if (isset($_POST['submit']) == 'Update'){



            $Expense_info = array(
            'Expense_Amount'            => $this->input->post("Expense_Amount"),
            'Expense_Date'              => $this->input->post("Expense_Date"),
            'Expense_cat_ID'            => $this->input->post("Expense_cat_ID"),
            'Expense_notes'             => $this->input->post("Expense_notes"),
            'Modified'                 =>date("d-m-Y H:i:s"),
                );
            $this->db->where('Expense_ID',$id);
            $this->db->update('tbl_expense',$Expense_info);
        } 
    }






     public function expense_cat_Data() {
        $Query = "SELECT *
            FROM tbl_expense_cat
            WHERE 1=1 AND expense_cat_Status=1
          ";
        $query_result = $this->db->query($Query)->result_array();
        // echo '<pre>',print_r($query_result),'</pre>'; die();
        return $query_result;
    } 



    public function print_expense_all_finding(){

         // echo '<pre>',print_r($_POST),'</pre>'; die();
            $search_check_inn   = $this->input->post('start_date');
            $search_check_in    = date("d-m-Y", strtotime($search_check_inn));
            // echo "<pre>"; print_r($search_check_in); echo "</pre>"; die();
            $search_check_outt  = $this->input->post('end_date');
            $search_check_out   = date("d-m-Y", strtotime($search_check_outt));
            $type              = $this->input->post('expense_cat_ID');


         $Query="SELECT tbl_expense.*,tbl_expense_cat.expense_cat_Name
            FROM tbl_expense 
             LEFT JOIN tbl_expense_cat  on tbl_expense.Expense_cat_ID =tbl_expense_cat.expense_cat_ID
            WHERE 1=1 ";


            if(!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
                $Query .= " AND (STR_TO_DATE(Expense_Date     , '%d-%m-%Y') >= STR_TO_DATE('$search_check_in', '%d-%m-%Y')) AND (STR_TO_DATE(Expense_Date    , '%d-%m-%Y') <= STR_TO_DATE('$search_check_out', '%d-%m-%Y'))";
            }

        
            if(!empty($_POST['expense_cat_ID'])) {
                $Query .= " AND tbl_expense.Expense_cat_ID=$type";
            }
        
            // echo "<pre>"; print_r($Query); echo "</pre>"; die();
                
            $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    }
 

    



    
}