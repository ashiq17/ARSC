<?php
class Fees_Invoice_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }

  public function all_student_finding_summary(){

      $Query = "SELECT *, COUNT(tbl_student.Std_ID) as total_student, tbl_class.Class_ID, tbl_section.Section_ID
          FROM  tbl_student
         LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
         LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
          
        Where tbl_student.Std_status = 1 ";
       $Query .= " GROUP BY tbl_student.Std_class_ID, tbl_student.Std_section_ID";
           
       //    echo "<pre>";
        // print_r($Query);
        // echo "</pre>";
        // die();
          $query_result = $this->db->query($Query)->result_array();
          return $query_result;
           
     }  


         public function print_student_all_finding(){
         // echo '<pre>',print_r($_POST),'</pre>'; die();

            $Search_ID  = $this->input->post('search');


        $Query="SELECT * FROM addexamfeedetails,tbl_student
            WHERE 1=1 ";
            if(!empty($_POST['search'])) {
                $Query .= " AND tbl_student.STD_UNQ_ID=$Search_ID";
            }
 
        $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    }


  public function all_invoice_finding(){
    $Query="SELECT tbl_student_invoice.*, tbl_student.Std_Name,tbl_student.STD_UNQ_ID
    FROM tbl_student_invoice
    LEFT JOIN tbl_student on tbl_student_invoice.St_Student_ID = tbl_student.STD_UNQ_ID
    Where 1=1";
    $query_result = $this->db->query($Query)->result_array();
    // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
    return $query_result;
  }

        public function invoice_student_single_finding($Stu_ID){
         $Query="SELECT *
            FROM tbl_student 
              LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
              LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
              LEFT JOIN tbl_year   on tbl_student.Std_academic_ID =tbl_year.Year_ID
              LEFT JOIN tbl_invoice_print   on tbl_student.STD_UNQ_ID =tbl_invoice_print.Invoice_p_st_info_ID
              LEFT JOIN tbl_addexamfeedetails   on tbl_addexamfeedetails.Exam_fee_detils_class_ID =tbl_invoice_print.Invoice_p_cl_ID
              LEFT JOIN tbl_addfee   on tbl_addfee.Add_fee_ID =tbl_addexamfeedetails.Exam_fee_ID
              WHERE 1=1 
                AND tbl_student.Std_ID=$Stu_ID";
            $query_result = $this->db->query($Query)->result_array();
              // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
            return $query_result; 
      }

     public function get_item_list($student_id,$invoice_type_id) {

        //       echo "<pre>";
        // print_r($invoice_type_id);
        // echo "</pre>";
        // die();

        $query = "SELECT tbl_student_invoice.*,tbl_class.Class_Name,tbl_invoice_trans_details.Invoice_trans_ID,tbl_invoice_trans_details.Invoice_tdetails_cat_ID,tbl_invoice_trans_details.Invoice_tdetails_Amount,tbl_addfee.Add_fee_Name,tbl_student.STD_UNQ_ID,tbl_student.Std_Name,tbl_student.Std_roll,tbl_account_transaction.account_trn_payment_amount,tbl_invoice_trans.total_amount,tbl_invoice_type.Invoice_type_Name,tbl_section.Section_Name
            FROM tbl_student_invoice 
              LEFT JOIN tbl_invoice_trans_details  on tbl_student_invoice.St_Invoice_type_ID =tbl_invoice_trans_details.Invoice_trans_ID
              LEFT JOIN tbl_addfee  on tbl_invoice_trans_details.Invoice_tdetails_cat_ID =tbl_addfee.Add_fee_ID
              LEFT JOIN tbl_student  on tbl_student_invoice.St_Student_ID =tbl_student.STD_UNQ_ID
              LEFT JOIN tbl_account_transaction  on tbl_student_invoice.St_Student_ID =tbl_account_transaction.account_trn_Student_ID
              LEFT JOIN tbl_invoice_trans  on tbl_student_invoice.St_Invoice_type_ID =tbl_invoice_trans.Invoice_Type_ID
              LEFT JOIN tbl_invoice_type  on tbl_student_invoice.St_Invoice_type_ID =tbl_invoice_type.Invoice_type_ID
              LEFT JOIN tbl_class  on tbl_student_invoice.Invoice_Class_ID =tbl_class.Class_ID
              LEFT JOIN tbl_section  on tbl_student_invoice.Invoice_section_ID =tbl_section.Section_ID
              WHERE 1=1 AND tbl_student_invoice.St_Student_ID='$student_id' AND tbl_student_invoice.St_Invoice_type_ID='$invoice_type_id'";
        $result = $this->db->query($query)->result();
        return $result;
  }



 
    
}