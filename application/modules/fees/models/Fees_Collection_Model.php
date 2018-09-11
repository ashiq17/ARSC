<?php
class Fees_Collection_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
      public function get_exam_termData() {
        $Query = "SELECT * FROM tbl_exam_term
            WHERE 1=1  AND Exam_term_Status=1";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }





  public function all_teacher_finding(){
         $Query="SELECT STD_UNQ_ID from tbl_student
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();
        // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
  }



    
  public function upload_new_fees_collection() {
        // $BranchID           = $this->input->post('BranchID');
        $Exam_fee_ID         = $this->input->post('Exam_fee_ID');
        $Section_Name       = $this->input->post('stname');
        $publishStatus      = $this->input->post('pubstatus');

        $this->db->trans_start();
        $tbl_section_entry_Data = array(
            // 'BranchID'         => $BranchID,
            'Section_Exam_fee_ID'       => $Exam_fee_ID,
            'Section_Name'     => $Section_Name,
            'Section_Status'     => $publishStatus
        );
        $this->db->insert('tbl_section', $tbl_section_entry_Data);
        // echo '<pre>',print_r($tbl_district_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_section() {
        $id                 = $this->input->post('editID');
        $Exam_fee_ID         = $this->input->post('Exam_fee_ID');
        $Section_Name       = $this->input->post('stnameEdit');
        $publishStatus      = $this->input->post('pubstatusEdit');

        $this->db->trans_start();
        $tbl_section_updateData = array(
            'Section_Exam_fee_ID'     => $Exam_fee_ID,
            'Section_Name'   => $Section_Name,
            'Section_Status'   => $publishStatus
        );
        $this->db->where('Section_ID', $id);
        $this->db->update('tbl_section', $tbl_section_updateData); 
        //echo '<pre>',print_r($tbl_district_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Section_ID', $Eid);
        $this->db->delete('tbl_section');
    }



    public function all_exam_fees_finding_summary(){

          $Query = "SELECT tbl_addexamfeedetails.*, sum(tbl_addexamfeedetails.Exam_fee_detils_feeAmount) as total_exam_fee, tbl_class.Class_Name,tbl_section.Section_Name,tbl_exam_term.Exam_term_Name
              FROM  tbl_addexamfeedetails

            LEFT JOIN tbl_class  on tbl_addexamfeedetails.Exam_fee_detils_class_ID =tbl_class.Class_ID
            LEFT JOIN tbl_section  on tbl_addexamfeedetails.Exam_fee_detils_section_ID =tbl_section.Section_ID
            LEFT JOIN tbl_exam_term  on tbl_addexamfeedetails.Exam_fee_detils_exam_ID =tbl_exam_term.Exam_term_ID

            Where tbl_addexamfeedetails.Exam_fee_detils_Status = 1 ";
             $Query .= " GROUP BY tbl_addexamfeedetails.Exam_fee_detils_class_ID, tbl_addexamfeedetails.Exam_fee_detils_section_ID";
               
               
            $query_result = $this->db->query($Query)->result_array();

             // echo "<pre>";
             //    print_r($query_result);
             //    echo "</pre>";
             //    die();
            return $query_result;


               
         }  


        public function all_student_finding_summary(){
          $Query = "SELECT tbl_student.*, sum(tbl_addexamfeedetails.Exam_fee_detils_feeAmount) as total_exam_fee, tbl_class.Class_Name ,tbl_section.Section_Name,tbl_group.Group_Name 
            FROM  tbl_student
            LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
            LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
            LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
            LEFT JOIN tbl_addexamfeedetails   on tbl_student.Std_class_ID =tbl_addexamfeedetails.Exam_fee_detils_class_ID
            Where tbl_student.Std_status = 1 ";
             $Query .= " GROUP BY tbl_student.Std_class_ID, tbl_student.Std_section_ID";
            $query_result = $this->db->query($Query)->result_array();
               
            // echo "<pre>"; print_r($query_result); echo "</pre>";die();
            return $query_result;
               
         }  


    public function get_Class_name() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
       
    }


    public function get_Section_name() {
        $Query = "SELECT * FROM tbl_section
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();

        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }

    public function get_in_type_name() {
        $Query = "SELECT * FROM tbl_invoice_type
            WHERE 1=1 ";
        $query_result = $this->db->query($Query)->result();

        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    } 


        function insert_mgt_student_fees(){
          // echo "<pre>";
          // print_r($_POST);
          // echo "</pre>";
          // die();
          $student_id = isset($_POST['STD_UNQ_ID']) ? $this->input->post('STD_UNQ_ID') : '';
          $St_payment_Amount = isset($_POST['St_payment_Amount']) ? $this->input->post('St_payment_Amount') : '';
          if(empty($student_id)){
            $this->session->set_userdata('error_msg','Please find Student first!');
            redirect(base_url().'fees/fees/fees_collection');
          }
          $Class_ID = isset($_POST['Class_ID']) ? $this->input->post('Class_ID') : '';
          $present_status = isset($_POST['present_status']) ? $this->input->post('present_status') : '';
          $count_student = count($student_id);
          $today = date('d-m-Y');

          for ($i=0; $i < $count_student; $i++) { 

           
               $data = array(
                   'account_trn_payment_amount'   => trim($St_payment_Amount[$i]),
                   'account_trn_collection_date'  => $today,
                   'account_trn_Status'           => trim($present_status[$i]),
                   'Modified'                      => date("d-m-Y H:i:s"),
               );
                  
              $condition_array = array('account_trn_Student_ID' => $student_id[$i], 'account_Class_ID' => $Class_ID[$i]);
              $this->db->where($condition_array);     
              $this->db->update('tbl_account_transaction',$data);
             
          }


          //   for ($i=0; $i < $count_student; $i++) { 
           
          //      $data = array(
          //          'St_Paid_Amount'              => trim($St_payment_Amount[$i]),
          //          'Modified'                      => date("d-m-Y H:i:s"),
          //      );
                  
          //     $condition_array = array('St_Student_ID' => $student_id[$i], 'St_class_ID' => $Class_ID[$i]);
          //     $this->db->where($condition_array);     
          //     $this->db->update('tbl_student_account',$data);
             
          // }


          //   for ($i=0; $i < $count_student; $i++) { 
              
          //      $data = array(
          //          'St_Invoice_Amount'        => trim($St_payment_Amount[$i]),
          //          'St_Invoice_Status'    => trim($present_status[$i]),
          //          'Modified'              => date("d-m-Y H:i:s"),
          //      );
                  
          //     $condition_array = array('St_Student_ID' => $student_id[$i], 'Invoice_Class_ID' => $Class_ID[$i]);
          //     $this->db->where($condition_array);     
          //     $this->db->update('tbl_student_invoice',$data);
             
          // }


              $StudentQuery = "
          SELECT * from tbl_student_account";
          $query_result = $this->db->query($StudentQuery)->result_array();

          for ($j=0; $j<$count_student; $j++) { 
            if($student_id[$j] == $query_result[$j]['St_Student_ID']){
                $data = array(
                    'St_Total_Amount' => $query_result[$j]['St_Total_Amount'] - $St_payment_Amount[$j],
                    'St_Paid_Amount'   => trim($St_payment_Amount[$j]),
                    'Modified'  => date("d-m-Y H:i:s"),
                );
                $this->db->where('St_Student_ID',$student_id[$j]);
                $this->db->update('tbl_student_account',$data);
            }
        }


        $StudentQuery1 = "
        SELECT * from tbl_student_invoice";
        $query_result1 = $this->db->query($StudentQuery1)->result_array();

          for ($k=0; $k<$count_student; $k++) { 
            if($student_id[$k] == $query_result1[$k]['St_Student_ID']){
                $data1 = array(
                    'St_Collect_Amount' => $query_result1[$k]['St_Collect_Amount'] - $St_payment_Amount[$k],
                    'St_Invoice_Status'           => trim($present_status[$k]),
                    'Modified'  => date("d-m-Y H:i:s"),
                );

                   $condition_array = array('St_Student_ID' => $student_id[$k], 'Invoice_Class_ID' => $Class_ID[$k]);
              $this->db->where($condition_array);  
                // $this->db->where('St_Student_ID',$student_id[$k]);
                $this->db->update('tbl_student_invoice',$data1);
            }
        }
        


    }


  public function all_student_finding_summary1(){
      $Query = "SELECT tbl_student.*, COUNT(tbl_student.Std_ID) as total_student, tbl_class.Class_Name ,tbl_section.Section_Name,tbl_group.Group_Name 
            FROM  tbl_student
            LEFT JOIN tbl_class  on tbl_student.Std_class_ID =tbl_class.Class_ID
            LEFT JOIN tbl_section  on tbl_student.Std_section_ID =tbl_section.Section_ID
            LEFT JOIN tbl_group   on tbl_student.Std_group_ID =tbl_group.Group_ID
        Where tbl_student.Std_status = 1 ";
       $Query .= " GROUP BY tbl_student.Std_class_ID, tbl_student.Std_section_ID";
            $query_result = $this->db->query($Query)->result_array();
           
      // echo "<pre>"; print_r($query_result); echo "</pre>";die();
          return $query_result;
     }


       public function get_classData() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1  AND Class_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
        
    }

      public function get_sectionData() {
        $Query = "SELECT tbl_section.*,  tbl_class.Class_Name as C_Name
            FROM tbl_section
            LEFT JOIN tbl_class ON tbl_class.Class_ID = tbl_section.Section_class_ID
            WHERE 1=1 ORDER BY tbl_section.Section_ID ASC";
        $query_result = $this->db->query($Query)->result_array();
        // echo '<pre>',print_r($query_result),'</pre>';
        // die();
        return $query_result;
    }


     public function get_invoiceTypeData() {
        $Query = "SELECT *
            FROM tbl_invoice_type
            WHERE 1=1 AND Invoice_Status=1
          ";
        $query_result = $this->db->query($Query)->result_array();
        // echo '<pre>',print_r($query_result),'</pre>'; die();
        return $query_result;
    }  



    public function print_student_account_all_finding(){

         // echo '<pre>',print_r($_POST),'</pre>'; die();

            $student_id   = $this->input->post('student_id');
            $search_check_inn   = $this->input->post('start_date');
            $search_check_in    = date("d-m-Y", strtotime($search_check_inn));
            // echo "<pre>"; print_r($search_check_in); echo "</pre>"; die();
            $search_check_outt  = $this->input->post('end_date');
            $search_check_out   = date("d-m-Y", strtotime($search_check_outt));
            $class              = $this->input->post('Std_class_ID');
            $section            = $this->input->post('Std_section_ID');
            $type              = $this->input->post('Std_cattype_ID');
            $Invoice_month          = $this->input->post('Invoice_month');
            $student_status      = $this->input->post('student_status');

         $Query="SELECT tbl_student_invoice.*,tbl_class.Class_Name,tbl_student.Std_Name,tbl_student.Std_roll,tbl_section.Section_Name,tbl_addfee.Add_fee_Name,tbl_account_transaction.account_trn_payment_amount
            FROM tbl_student_invoice 
            LEFT JOIN tbl_class  on tbl_student_invoice.Invoice_Class_ID =tbl_class.Class_ID
             LEFT JOIN tbl_student  on tbl_student_invoice.St_Student_ID =tbl_student.STD_UNQ_ID
             LEFT JOIN tbl_section  on tbl_student_invoice.Invoice_section_ID =tbl_section.Section_ID
             LEFT JOIN tbl_addfee  on tbl_student_invoice.St_Invoice_type_ID =tbl_addfee.Add_fee_ID
             LEFT JOIN tbl_account_transaction  on tbl_student_invoice.St_Student_ID =tbl_account_transaction.account_trn_Student_ID
            WHERE 1=1 ";


            if(!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
                $Query .= " AND (STR_TO_DATE(St_invoice_date  , '%d-%m-%Y') >= STR_TO_DATE('$search_check_in', '%d-%m-%Y')) AND (STR_TO_DATE(St_invoice_date  , '%d-%m-%Y') <= STR_TO_DATE('$search_check_out', '%d-%m-%Y'))";
            }

            if(!empty($_POST['student_id'])) {
                $Query .= " AND tbl_student_invoice.St_Student_ID=$student_id";
            } 
            if(!empty($_POST['Std_class_ID'])) {
                $Query .= " AND tbl_student_invoice.Invoice_Class_ID=$class";
            }
            if(!empty($_POST['Std_section_ID'])) {
                $Query .= " AND tbl_student_invoice.Invoice_section_ID=$section";
            }
            if(!empty($_POST['Std_cattype_ID'])) {
                $Query .= " AND tbl_student_invoice.St_Invoice_type_ID=$type";
            }
            if(!empty($_POST['Invoice_month'])) {
                $Query .= " AND tbl_student_invoice.St_Invoice_Moth=$Invoice_month";
            }
            if(!empty($_POST['student_status'])) {
                $Query .= " AND tbl_student_invoice.St_Invoice_Status='$student_status'";
            }
            
            // echo "<pre>"; print_r($Query); echo "</pre>"; die();
                
            $query_result = $this->db->query($Query)->result_array();
         // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
        return $query_result; 
    }






    
}