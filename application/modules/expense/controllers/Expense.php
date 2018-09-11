<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Expense extends CTL_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
        $this->load->model('Create_Expense_Category_Model');
	} 

    public function add_expense() {
            $data['expense_cat_Data']  = $this->Create_Expense_Category_Model->get_expensecatData();
			$this->load->view('add_new_expense_view',$data);
    }

    public function book_details(){
    	$this->load->view('Enter_Book_Details_view');
    }

    // public function book_list(){
    // 	$this->load->view('View_Book_List_view');
    // }

        function expense_add(){
        $inser_id = $this->Create_Expense_Category_Model->insert_mgt();
        $this->session->set_userdata('message','Expense Add Successfully!');
        redirect(base_url().'Expense/Expense/add_expense');

    }


    public function expense_list(){
            $total_expense = $this->Create_Expense_Category_Model->get_all_query_row_countall();
          $te='';
        foreach ($total_expense as $row){
            $total_expense=$row->te;
        }
          $data = array(
            'total_expense' => $total_expense
        );
        $data['all_expense_find'] = $this->Create_Expense_Category_Model->all_expense_finding();
        $this->load->view('expense_List_view',$data);
    }


    public function expense_delete(){
        $id = $this->input->post('delete_Guardian_ID');
        $this->Create_Expense_Category_Model->delete_expense($id);
        $this->session->set_userdata('message', 'Expense Data is deleted!');
        redirect(base_url().'Expense/Expense/expense_list');
        
    }


    public function edit_expense($id){
        $data['expense_cat_Data']  = $this->Create_Expense_Category_Model->get_catData();
        $data['all_expense_finding'] = $this->Create_Expense_Category_Model->all_expense_finding();
        $data['edit_expense_finding'] = $this->Create_Expense_Category_Model->edit_expense_finding($id);
        $this->load->view('edit_expense',$data);
    }


public function expense_update(){
  
        $id=$this->input->post('Expense_ID');
        $this->Create_Expense_Category_Model->update_expense($id);
        $this->session->set_userdata('message','Expense updated Successfully!');
      redirect(base_url().'Expense/Expense/expense_list');
    }


    public function print_all_expense(){
        // if ($_POST['submit']=='Print') {
            // echo "<pre>";
            //  print_r($_POST);
            // echo "</pre>";die();
        $data['print_expense_all_finding'] = $this->Create_Expense_Category_Model->print_expense_all_finding();
        // echo "<pre>"; print_r($data);echo "</pre>";die();
        $this->load->view('report/print_all_expense',$data);
        //}
    }

    public function expense_report(){
        $data['expense_cat_Data']  = $this->Create_Expense_Category_Model->expense_cat_Data();
        $this->load->view('report/print_all_expense_index',$data);
    }


   

}