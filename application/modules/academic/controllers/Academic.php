<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Academic extends CTL_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
        $this->load->model('Add_Class_Model');
        $this->load->model('Add_Exam_Model');
        $this->load->model('Add_Room_Model');
        $this->load->model('Add_ClassTime_Model');
		$this->load->model('Add_Subject_Model');
		$this->load->model('Add_Section_Model');
        $this->load->model('Group_Model');
        $this->load->model('Add_Year_Model');
        $this->load->model('Add_fees_Model');
        $this->load->model('Add_invoice_type_Model');
        $this->load->model('Add_Book_Cat_Model');
		$this->load->model('Add_Expense_Cat_Model');
	} 

    public function add_class() {
            $data['Class_Data']  = $this->Add_Class_Model->get_divisionData();
            $this->load->view('Class_view', $data);
    } 

     public function add_exam() {
            $data['Exam_Data']  = $this->Add_Exam_Model->get_examData();
            $this->load->view('Exam_view', $data);
    } 



 public function new_exam_entry() {
        $this->Add_Exam_Model->upload_new_exam();
        redirect(base_url()."academic/academic/add_exam");     
    }




    public function update_exam_entry() {

       // print_r($_POST);
       // die();

        $this->Add_Exam_Model->update_exam();

        redirect(base_url()."academic/academic/add_exam"); 
    }
    function exam_delete($Eid = NULL)
        {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_Exam_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_Exam_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Exam category is deleted!');

        redirect(base_url()."academic/academic/add_exam"); 

    }



    public function add_book_category() {
            $data['bookCat_Data']  = $this->Add_Book_Cat_Model->get_bookcatData();
            $this->load->view('Book_cat_view', $data);
    }

    public function add_expence_cat() {
            $data['expenseCat_Data']  = $this->Add_Expense_Cat_Model->get_expensecatData();
            $this->load->view('Expense_cat_view', $data);
    }

    public function book_cat_entry(){
        $this->Add_Book_Cat_Model->upload_new_book_cat();
        redirect(base_url()."academic/academic/add_book_category");     
    }

public function expense_cat_entry(){
        $this->Add_Expense_Cat_Model->upload_new_expense_cat();
        redirect(base_url()."academic/academic/add_expence_cat");     
    }



function book_cat_delete($Eid = NULL)
        {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_Book_Cat_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_Book_Cat_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Book Category is deleted!');

        redirect(base_url()."academic/academic/add_book_category");

    }


    function expense_cat_delete($Eid = NULL)
        {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_Expense_Cat_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_Expense_Cat_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Expense Category is deleted!');

         redirect(base_url()."academic/academic/add_expence_cat"); 

    }

 public function update_book_cat_entry() {
        $this->Add_Book_Cat_Model->update_bookId();
        redirect(base_url()."academic/academic/add_book_category");
    }

public function update_expense_cat_entry() {

        $this->Add_Expense_Cat_Model->update_expenseId();
         redirect(base_url()."academic/academic/add_expence_cat");
    }


public function add_invoice_type(){
        $data['add_invoice_Data']  = $this->Add_invoice_type_Model->get_add_invoiceData();
        $this->load->view('Add_invoice_type_view',$data);
    }


public function new_add_invoice_type_entry() {
        $this->Add_invoice_type_Model->upload_new_invoice_type();
        redirect(base_url()."academic/academic/add_invoice_type");    
    }

public function add_fees(){
        $data['add_fees_Data']  = $this->Add_fees_Model->get_add_feeData();
        $this->load->view('Add_Fees_view',$data);
    }

    function add_invoice_type_delete($Eid = NULL)
    {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_fees_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_invoice_type_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Fees Category is deleted!');

      redirect(base_url()."academic/academic/add_invoice_type"); 

    }

    public function update_add_invoice_type_entry() {


        $this->Add_invoice_type_Model->update_add_invoice_type();

       redirect(base_url()."academic/academic/add_invoice_type"); 
    }


public function add_section() {
			$data['Class_Data']  = $this->Add_Section_Model->get_classData();
			$data['Section_Data']  = $this->Add_Section_Model->get_sectionData();
			$this->load->view('Section_view', $data);
		}

public function add_subject() {
            $data['Class_Dat']  = $this->Add_Subject_Model->get_classDat();
            $data['Section_Dat']  = $this->Add_Subject_Model->get_sectionDat();
            $data['get_groupDat']  = $this->Add_Subject_Model->get_groupDat();
            $data['Subject_Data']  = $this->Add_Subject_Model->get_subjectData();
            $data['Exam_Data']  = $this->Add_Subject_Model->get_examData();
            // echo "<pre>";
            // print_r($data['Subject_Data']);

            // echo "</pre>";
            // die();
            $this->load->view('Subject_view', $data);
        }


    public function new_class_entry() {
        $this->Add_Class_Model->upload_new_class();
        redirect(base_url()."academic/academic/add_class");     
    }



    public function new_subject_entry() {
        $this->Add_Subject_Model->adding_new_subject();
        redirect(base_url()."academic/academic/add_subject");     
    }

	public function new_section_entry() {

		$this->Add_Section_Model->upload_new_section();

		redirect(base_url()."academic/academic/add_section");		
	}

    public function update_class_entry() {

        $this->Add_Class_Model->update_class();

        redirect(base_url()."academic/academic/add_class"); 
    }

    public function update_subject_entry() {
       // print_r($_POST);
       // die();
        $this->Add_Subject_Model->update_subject();
        redirect(base_url()."academic/academic/add_subject"); 
    }

	public function update_section_entry() {

		$this->Add_Section_Model->update_section();

		redirect(base_url()."academic/academic/add_section");
	}


    function class_delete($Eid = NULL)
        {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_Class_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_Class_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Class is deleted!');

        redirect(base_url()."academic/academic/add_class"); 

    }




function subject_delete($Eid = NULL)
    {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_Subject_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_Subject_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Subject is deleted!');

        redirect(base_url()."academic/academic/add_subject"); 

    }


 function section_delete($Eid = NULL)
    {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_Section_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_Section_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Section is deleted!');

        redirect(base_url()."academic/academic/add_section");	

    }


     function group_delete($Eid = NULL)
    {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Group_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Group_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Group is deleted!');

        redirect(base_url()."academic/academic/add_group");	
    }

    

 function year_delete($Eid = NULL)
    {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_Year_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_Year_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Year is deleted!');

         redirect(base_url()."academic/academic/add_academic_year");  

    }


    // Grop Code Start  by shanto

    public function add_group() {
            // $this->session->set_userdata('message', 'Group Create Successfully!');
			$data['Class_Data']  = $this->Group_Model->get_classData();
			$data['Section_Data']  = $this->Group_Model->get_sectionData();
			$data['Group_Data']   = $this->Group_Model->get_groupData();
			$this->load->view('Group_view', $data);
	} 

	public function new_group_entry() {
		$this->Group_Model->upload_new_group();
		redirect(base_url()."academic/academic/add_group");		
	}

	public function update_group_entry() {
         $this->session->set_userdata('message', ' Group Update Successfully!');
		$this->Group_Model->update_group();
		redirect(base_url()."academic/academic/add_group");
	}

    // Add Year in system Code Start  by shanto

    public function add_academic_year() {
        $data['Year_Data']   = $this->Add_Year_Model->get_yearData();
        $this->load->view('Add_year_view', $data);
    } 

    public function new_year_entry() {
        $this->Add_Year_Model->upload_new_year();
        redirect(base_url()."academic/academic/add_academic_year");     
    }

    public function update_year_entry() {
        $this->Add_Year_Model->update_year();
        redirect(base_url()."academic/academic/add_academic_year");
    }
    // mahbub  start here

    public function add_room() {
            $data['Room_Data']  = $this->Add_Room_Model->get_roomData();
            $this->load->view('Room_view', $data);
            // $this->load->view('Room_view');
    }
    public function new_room_entry() {

        $this->Add_Room_Model->upload_new_room();

        redirect(base_url()."academic/academic/add_room");     
    }

    public function update_room_entry() {

        $this->Add_Room_Model->update_room();

        redirect(base_url()."academic/academic/add_room"); 
    }

      public function room_delete($Eid = NULL)
        {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_Room_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_Room_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Room is deleted!');

        redirect(base_url()."academic/academic/add_room"); 

    }

 // shanto  start here class Time

    public function  add_classTime() {
        $data['Year_Data']   = $this->Add_ClassTime_Model->get_classTimeData();
        $this->load->view('ClassTime_view',$data);
    }

    public function new_classTime_entry() {

       
        $this->Add_ClassTime_Model->upload_new_classTime();

        redirect(base_url()."academic/academic/add_classTime");     
    }

    public function update_classTime_entry() {

        $this->Add_ClassTime_Model->update_classTime();

        redirect(base_url()."academic/academic/add_classTime"); 
    }

      public function classTime_delete($Eid = NULL)
        {
        if ($Eid == "") {
            if (isset($_POST['allvalue'])) {
                for ($i = 0; $i < $_POST['allvalue']; $i++) {
                    if (isset($_POST['chk_' . $i])) {
                        $this->Add_ClassIime_Model->deleteInfo($_POST['chk_' . $i]);
                    }
                }
            }

        } else {

            $this->Add_ClassTime_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' ClassTime is deleted!');

        redirect(base_url()."academic/academic/add_classTime"); 

    }







}