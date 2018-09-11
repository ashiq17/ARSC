<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fees extends CTL_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
        $this->load->model('Add_fees_Model');
        $this->load->model('Fees_Collection_Model');
        $this->load->model('Fees_Invoice_Model');
        $this->load->model('Add_exam_fees_Model');
	} 


    public function fees_collection(){
        $data['all_teacher_find_summary'] = $this->Fees_Collection_Model->all_teacher_finding();
        $data['Class_select']             = $this->Fees_Collection_Model->get_Class_name();
        $data['Section_select']           = $this->Fees_Collection_Model->get_Section_name();
        $data['invoice_type_select']      = $this->Fees_Collection_Model->get_in_type_name();
        $data['Section_select']           = $this->Fees_Collection_Model->get_Section_name();

        // echo "<pre>";

        // print_r($data);
        // echo "</pre>";
        // die();
        $this->load->view('Fees_Collection_view',$data);
    }

    function exam_fees_add(){
        //     echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // die();
        // $inser_id = $this->Add_exam_fees_Model->insert_mgt1();
        $inser_id = $this->Add_exam_fees_Model->insert_fees_generate();
        $this->session->set_userdata('message',' Fess Add Successfully!');
        redirect(base_url().'fees/fees/add_exam_fees');
    }




    function fee_collection_add(){
        $this->Fees_Collection_Model->insert_mgt1();
        $this->session->set_userdata('message','Attachment files added Successfully!');
        redirect(base_url().'fees/fees/fees_collection');
    }


    public function print_all_student(){
        // if ($_POST['submit']=='Print') {
            // echo "<pre>";
         //     print_r($_POST);
            // echo "</pre>";die();
        $data['print_student_all_find'] = $this->Fees_Invoice_Model->print_student_all_finding();
        // echo "<pre>"; print_r($data['print_student_all_find']);echo "</pre>";die();
        $this->load->view('report/print_all_student',$data);
        //}
    }

    public function add_fees(){
        $data['add_fees_Data']  = $this->Add_fees_Model->get_add_feeData();
        $this->load->view('Add_Fees_view',$data);
    }

                                                                      
    public function add_exam_fees(){ 
        $data['Class_Data']  = $this->Add_exam_fees_Model->get_classData();
        $data['Section_Data']  = $this->Add_exam_fees_Model->get_sectionData();
        $data['Invoice_type_Data']  = $this->Add_exam_fees_Model->get_invoice_typeData();
        $data['Fee_categoryData']  = $this->Add_exam_fees_Model->get_add_fee_categoryData();
        // print_r( $data['Class_Data']);
        // die();
        $this->load->view('Add_Exam_Fees_view',$data);
    }



     public function add_exam_fees_list(){
        // $data['add_fees_Data']  = $this->Add_fees_Model->get_add_feeData();
         $data['all_invoice_find'] = $this->Add_exam_fees_Model->all_invoice_finding();
        $this->load->view('Add_Exam_Fees_List',$data);
    }

    public function fees_invoice(){
        $data['all_invoice_find'] = $this->Fees_Invoice_Model->all_invoice_finding();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die();
    	$this->load->view('Fees_Invoice_view',$data);
    }
    


    public function invoice_student_single(){


        $student_id =  $this->uri->segment(4);
        $invoice_type_id =  $this->uri->segment(5);
        // echo $class_id;
        // die();
        $data['reportdata'] = $this->Fees_Invoice_Model->get_item_list($student_id,$invoice_type_id);
       
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die();
        $this->load->view('report/invoice_single_student',$data);
    }



    public function new_add_fees_entry() {
        $this->Add_fees_Model->upload_new_class();
        redirect(base_url()."fees/fees/add_fees");    
    }

    public function update_add_fee_entry() {

        $this->Add_fees_Model->update_add_fees();

       redirect(base_url()."fees/fees/add_fees"); 
    }


function add_fees_delete($Eid = NULL)
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

            $this->Add_fees_Model->deleteInfo($Eid);
        }

       $this->session->set_userdata('message', ' Fees Category is deleted!');

        redirect(base_url()."fees/fees/add_fees"); 

    }


    // Add fee collection by shanto//


     public function fees_allocation(){
        // $data['add_fees_Data']  = $this->Fees_Collection_Model->get_add_feeData();
        $this->load->view('Fees_Collection_view');
    }

    public function student_invoice_search(){
        
        
        $Std_invoice_date = date('d-M-Y');
        $student_id          = ($this->input->get('student_id'))?$this->input->get('student_id'):"";
        $Class_ID            = ($this->input->get('Class_ID'))?$this->input->get('Class_ID'):"";
        $Section_ID          = ($this->input->get('Section_ID'))?$this->input->get('Section_ID'):"";
        $Invoice_type_ID     = ($this->input->get('Invoice_type_ID'))?$this->input->get('Invoice_type_ID'):"";
        $Invoice_month     = ($this->input->get('Invoice_month'))?$this->input->get('Invoice_month'):"";
        $query = "";
        $total_condition ="";
        
        $query_con = "SELECT tbl_student_invoice.*,tbl_student_invoice.St_Collect_Amount,tbl_student_invoice.St_Invoice_Status,tbl_student_invoice.St_Invoice_number, tbl_class.Class_Name,tbl_class.Class_ID, tbl_student.STD_UNQ_ID, tbl_student.Std_Name, tbl_section.Section_Name,tbl_invoice_type.Invoice_type_Name
            FROM tbl_student_invoice 
              LEFT JOIN tbl_class  on tbl_student_invoice.Invoice_Class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_student_invoice.Invoice_section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_student   on tbl_student_invoice.St_Student_ID =tbl_student.STD_UNQ_ID
              LEFT JOIN tbl_invoice_type   on tbl_student_invoice.St_Invoice_type_ID =tbl_invoice_type.Invoice_type_ID
            WHERE 1=1";


          if ($student_id) {
                 $query_con .= " AND tbl_student_invoice.St_Student_ID='$student_id'";
            }

            if($Invoice_type_ID) {
                $query_con .= " AND tbl_student_invoice.St_Invoice_type_ID='$Invoice_type_ID'";
            }

            if ($Class_ID) {
                 $query_con .= " AND tbl_student_invoice.Invoice_Class_ID='$Class_ID'";
            }

            if ($Section_ID) {
                 $query_con .= " AND tbl_student_invoice.Invoice_section_ID='$Section_ID'";
            }  

            if ($Invoice_month) {
                 $query_con .= " AND tbl_student_invoice.St_Invoice_Moth='$Invoice_month'";
            }

        // print_r($query_con);
        // die();
        
        $queryData = $this->db->query($query_con)->result();

        
        $total = 0;
        $student_invoice_List = array();//`id``ItemCode``BarCode`
        foreach($queryData as $key=>$info){

            if($info->St_Invoice_Status==2){
                $status_text = 'Due';
            }else{
                $status_text = 'Paid';
            }

         

            $total++;
            $student_invoice_List[$total]['STD_UNQ_ID']                 = isset($info->STD_UNQ_ID)?$info->STD_UNQ_ID:'-';
            $student_invoice_List[$total]['Std_Name']                   = isset($info->Std_Name)?$info->Std_Name:'-';
            $student_invoice_List[$total]['Class_Name']                 = isset($info->Class_Name)?$info->Class_Name:'-';
            $student_invoice_List[$total]['Class_ID']                 = isset($info->Class_ID)?$info->Class_ID:'-';
            $student_invoice_List[$total]['St_Collect_Amount']          = isset($info->St_Collect_Amount)?$info->St_Collect_Amount:'-';
            $student_invoice_List[$total]['St_Invoice_Amount']          = isset($info->St_Invoice_Amount)?$info->St_Invoice_Amount:'-';
            $student_invoice_List[$total]['Section_Name']               = isset($info->Section_Name)?$info->Section_Name:'-';
            $student_invoice_List[$total]['Invoice_type_Name']          = isset($info->Invoice_type_Name)?$info->Invoice_type_Name:'-';
            $student_invoice_List[$total]['St_Invoice_number']          = isset($info->St_Invoice_number)?$info->St_Invoice_number:'-';
             $student_invoice_List[$total]['St_Invoice_Status']          = isset($info->St_Invoice_Status)?$info->St_Invoice_Status:'-';
             $student_invoice_List[$total]['status_text']          = isset($status_text)? $status_text:'-';
            
            }
        echo json_encode(array(
            "student_invoice_List"   => $student_invoice_List, 
            "total"                  => $total, 
        )); 
    }



    public function exam_fees_summary() {
        $data['all_exam_fees_summary'] = $this->Fees_Collection_Model->all_exam_fees_finding_summary();
        $this->load->view('exam_fees_summary',$data);
    }

    
    public function get_student_data(){
        if(isset($_POST['one'])){
            $json = array();
            $id =  trim($_POST['one']);

            $query =  $this->db->query(
                    "SELECT tbl_class.*, sum(tbl_addexamfeedetails.Exam_fee_detils_feeAmount) as total_exam_fee, tbl_section.Section_Name, tbl_group.Group_Name, tbl_student.Std_Name,tbl_student.Std_email
                     FROM tbl_student 
                    LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
                    LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
                    LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
                    LEFT JOIN tbl_addexamfeedetails   on tbl_student.Std_class_ID =tbl_addexamfeedetails.Exam_fee_detils_class_ID
                    WHERE tbl_student.STD_UNQ_ID = '$id'
                    ");
            $result = $query->result_array(); 
            $class = $result[0]['Class_Name'];
            $Class_ID = $result[0]['Class_ID'];
            $section = $result[0]['Section_Name'];
            $group = $result[0]['Group_Name'];
            $name = $result[0]['Std_Name'];
            $email = $result[0]['Std_email'];
            $fee = $result[0]['total_exam_fee'];

            $result = array(
                    'Class_Name'=>$class,
                    'Class_ID'=>$Class_ID,
                    'Section_Name'=>$section,
                    'Group_Name'=>$group,
                    'Std_Name'=>$name,
                    'Std_email'=>$email,
                    'total_exam_fee'=>$fee
                );

            array_push($json,$result);
            echo json_encode($json, true);

         }
    }



    public function student_fees_collection()
    {
        $inser_id = $this->Fees_Collection_Model->insert_mgt_student_fees();
        redirect(base_url().'fees/fees/fees_collection');
    } 




    public function print_all_student_account(){
        // if ($_POST['submit']=='Print') {
            // echo "<pre>";
            //  print_r($_POST);
            // echo "</pre>";die();
        $data['print_student_attendance_all_find'] = $this->Fees_Collection_Model->print_student_account_all_finding();
        // echo "<pre>"; print_r($data);echo "</pre>";die();
        $this->load->view('report/print_all_student_account',$data);
        //}
    }

    public function fees_collection_report(){

        $data['all_student_find_summary'] = $this->Fees_Collection_Model->all_student_finding_summary1();
        $data['Class_Data']  = $this->Fees_Collection_Model->get_classData();
        $data['Section_Data']  = $this->Fees_Collection_Model->get_sectionData();
        $data['Invoice_Type_Data']  = $this->Fees_Collection_Model->get_invoiceTypeData();
        // $data['Year_Data']  = $this->Student_Model->get_yearData();
        // echo "<pre>"; print_r($data['Invoice_Type_Data']);echo "</pre>";die();
        $this->load->view('report/print_all_student_account_index',$data);
    }




}