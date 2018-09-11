<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Library extends CTL_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
        $this->load->model('Create_Book_Category_Model');
	} 

    public function add_new_book() {
            $data['book_cat_Data']  = $this->Create_Book_Category_Model->get_bookcatData();
			$this->load->view('add_new_book_view',$data);
    }

    public function book_details(){
    	$this->load->view('Enter_Book_Details_view');
    }

    public function book_list(){
    	$this->load->view('View_Book_List_view');
    }

        function book_add(){
        $inser_id = $this->Create_Book_Category_Model->insert_mgt();
        $this->session->set_userdata('message','Book Add Successfully!');
        redirect(base_url().'library/library/add_new_book');

    }


    public function library_list(){
            $total_book = $this->Create_Book_Category_Model->get_all_query_row_countall();
          $tb='';
        foreach ($total_book as $row){
            $total_book=$row->tb;
        }
          $data = array(
            'total_book' => $total_book
        );
        $data['all_books_find'] = $this->Create_Book_Category_Model->all_books_finding();
        $data['all_active_lib_Book_finding'] = $this->Create_Book_Category_Model->all_active_lib_Book_finding();
        $data['all_inactive_lib_book_finding'] = $this->Create_Book_Category_Model->all_inactive_lib_book_finding();
        $this->load->view('book_List_view',$data);
    }


    public function library_delete(){
        $id = $this->input->post('delete_Guardian_ID');
        $this->Create_Book_Category_Model->delete_library_book($id);
        $this->session->set_userdata('message', 'Book Data is deleted!');
        redirect(base_url().'library/library/book_list');
        
    }


    public function edit_library_book($id){
        $data['book_cat_Data']  = $this->Create_Book_Category_Model->get_catData();
        $data['all_books_finding'] = $this->Create_Book_Category_Model->all_books_finding();
        $data['edit_library_book_finding'] = $this->Create_Book_Category_Model->edit_library_book_finding($id);
        $this->load->view('edit_library_book',$data);
    }


public function book_update(){
            // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // die();
        $id=$this->input->post('Lib_ID');
        $this->Create_Book_Category_Model->update_lib_book($id);
        $this->session->set_userdata('message','Book updated Successfully!');
        redirect(base_url().'library/library/library_list');
    }


   



}