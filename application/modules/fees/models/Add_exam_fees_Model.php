<?php
class Add_exam_fees_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();	
    }


    public function get_classData() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1  AND Class_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
        
    }

    public function get_sectionData() {
        $Query = "SELECT * FROM tbl_section
            WHERE 1=1  AND Section_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }


    public function get_invoice_typeData() {
        $Query = "SELECT * FROM tbl_invoice_type
            WHERE 1=1  AND Invoice_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }
    public function get_add_fee_categoryData() {
        $Query = "SELECT * FROM tbl_addfee
            WHERE 1=1  AND Add_fee_Status=1";
        $query_result = $this->db->query($Query)->result_array();   
        // echo '<pre>',print_r($query_result),'</pre>';die();
        return $query_result;
    }



    function insert_mgt32()
    {
    // echo "<pre>"; print_r($_POST);echo "</pre>";die();
            $data = array(

                'Addexamfee_class_ID' => $this->input->post("class_name"),
                'Addexamfee_section_ID' => $this->input->post("section_name"),
                'Addexamfee_examterm_ID' => $this->input->post("exam_name"),
                'date' => $this->input->post("date"),
                // 'EntryBy' => $this->session->userdata("eid"),
                 // 'EntryDateTime' => date('Y-m-d H:i:s'),

            );

            $str = $this->db->insert_string("addexamfee", $data);
            $query = $this->db->query($str);
            $insert_id = $this->db->insert_id();

       // echo "<pre>";
       // print_r($str);
       // die();


        for ($i = 1; $i <= $_POST['rowcount']; $i++) {

            $feeAmount = $this->input->post("fee" . $i);

            $data = array(
                'examFeeId' => $insert_id,
                'classId' => $this->input->post("class_name"),
                // 'feeDescription' => $this->input->post("addfee"),
                'feeAmount' => $this->input->post("fee".$i),
                'sectionId' => $this->input->post("section_name"),
                'examId' => $this->input->post("exam_name"),
                // 'EntryBy' => $this->session->userdata("eid"),
                // 'EntryDateTime' => date('Y-m-d H:i:s'),

             );

            $str = $this->db->insert_string("addexamfeeDetails", $data);
            $query = $this->db->query($str);

        }

        return $this->db->affected_rows();


    }

    public function insert_fees_generate(){

            $data = array(
                'Invoice_Number' => $this->input->post("Invoice_Number"),
                'Invoice_Date' => $this->input->post("Invoice_Date"),
                'Invoice_Month' => $this->input->post("Invoice_Month"),
                'Invoice_Type_ID' => $this->input->post("Invoice_Type_ID"),
                'Invoice_Medium_ID' => $this->input->post("Invoice_Medium_ID"),
                'Invoice_Shift_ID' => $this->input->post("Invoice_Shift_ID"),
                'Invoice_Class_ID' => $this->input->post("Invoice_Class_ID"),
                'Invoice_Section_ID' => $this->input->post("Invoice_Section_ID"),
                'total_amount' => $this->input->post("total_amount"),
                'Created'   => date("d-m-Y H:i:s"),
                // 'Modified'  => date("d-m-Y H:i:s"),
            );

            $str = $this->db->insert_string("tbl_invoice_trans", $data);
            $query = $this->db->query($str);
            $insert_id = $this->db->insert_id();


// In student account data insert//

            $In_Class_ID    = $this->input->post('Invoice_Class_ID');
            $Invoice_Medium_ID    = $this->input->post('Invoice_Medium_ID');
            $Invoice_Shift_ID    = $this->input->post('Invoice_Shift_ID');
            $total_amount   = $this->input->post("total_amount");


            $StudentQuery = "
            SELECT * from tbl_student
            where 1=1 
            and 
            Std_class_ID='$In_Class_ID'
            -- Std_medium_ID='$Invoice_Medium_ID'
            -- Std_shift_ID='$Invoice_Shift_ID'

            ";
            $query = $this->db->query($StudentQuery)->result_array();

            $count = count($query);

                for ($i=0; $i<$count; $i++) { 
                $data = array(
                    'St_Student_ID' =>$query[$i]['STD_UNQ_ID'],
                    'St_class_ID' => $this->input->post("Invoice_Class_ID"),
                    'St_medium_ID' => $this->input->post("Invoice_Medium_ID"),
                    'St_shift_ID' => $this->input->post("Invoice_Shift_ID"),
                    'St_Total_Amount' => $this->input->post("total_amount"),
                    'Created'   => date("d-m-Y H:i:s"),
                    'Modified'  => date("d-m-Y H:i:s"),
            );

            $this->db->insert('tbl_student_account', $data);
                
           }

      
            $count = count($query);

                for ($i=0; $i<$count; $i++) { 
                $data = array(
                    'account_trn_Student_ID' =>$query[$i]['STD_UNQ_ID'],
                    'account_trn_Invoice_number' => $this->input->post("Invoice_Number"),
                    'account_trn_Invoice_type' =>$this->input->post("Invoice_Type_ID"),
                    'account_trn_Amount' => $this->input->post("total_amount"),
                    'account_Class_ID' => $this->input->post("Invoice_Class_ID"),
                    'account_Medium_ID' => $this->input->post("Invoice_Medium_ID"),
                    'account_Shift_ID' => $this->input->post("Invoice_Shift_ID"),
                    'account_trn_collection_date' => $this->input->post("Invoice_Date"),
                    'account_trn_payment_amount' => $this->input->post("total_amount"),
                    'account_trn_Status' =>2,
                    'Created'   => date("d-m-Y H:i:s"),
                   
            );

            $this->db->insert('tbl_account_transaction', $data);
                
           }

           // In student data insert end //

           // In student tbl_student_invoice data insert//

            $In_Class_ID1    = $this->input->post('Invoice_Class_ID');
            $Invoice_Medium_ID    = $this->input->post('Invoice_Medium_ID');
            $Invoice_Shift_ID    = $this->input->post('Invoice_Shift_ID');
            // $total_amount1   = $this->input->post("total_amount");


            $StudentQuery1 = "
            SELECT * from tbl_student
            where 1=1 
            and 
            Std_class_ID='$In_Class_ID1'
            -- Std_medium_ID='$Invoice_Medium_ID'
            -- Std_shift_ID='$Invoice_Shift_ID'
            ";
            $query1 = $this->db->query($StudentQuery1)->result_array();

            $count2 = count($query);

                for ($i=0; $i<$count2; $i++) { 
                $data1 = array(
                    'St_Student_ID' =>$query1[$i]['STD_UNQ_ID'],
                    'St_Collect_Amount' => $this->input->post("total_amount"),
                    'St_Invoice_Amount' => $this->input->post("total_amount"),
                    'St_Invoice_number' => $this->input->post("Invoice_Number"),
                    'St_Invoice_type_ID' => $this->input->post("Invoice_Type_ID"),
                    'Invoice_Class_ID' => $this->input->post("Invoice_Class_ID"),
                    'Invoice_Medium_ID' => $this->input->post("Invoice_Medium_ID"),
                    'Invoice_Shift_ID' => $this->input->post("Invoice_Shift_ID"),
                    'Invoice_section_ID' => $this->input->post("Invoice_Section_ID"),
                    'St_Invoice_Moth' => $this->input->post("Invoice_Month"),
                    'St_invoice_date' => $this->input->post("Invoice_Date"),
                    'St_Invoice_Status' => '2',
                    'Created'   => date("d-m-Y H:i:s"),
                    // 'Modified'  => date("d-m-Y H:i:s"),
            );

            $this->db->insert('tbl_student_invoice', $data1);
                
           }

           // In tbl_student_invoice data insert end //


            $attachment_name    = $this->input->post('fees_cat_id');
            $attachment_file    = $this->input->post('amount');
            $count = count($attachment_name);


            $attachment_nameArray= array();
            $i=0;
            if(!empty($attachment_name)){           
                foreach($attachment_name as $check) {
                     $i++; 
                     $attachment_nameArray[$i] = $check; 
                }
            }

            $attachment_fileArray= array();
            $i=0;
            if(!empty($attachment_file)){           
                foreach($attachment_file as $check) {
                     $i++; 
                     $attachment_fileArray[$i] = $check; 
                }
            }

            // echo '<pre>',print_r($attachment_info),'</pre>';
            $attachment_info = array(
                        'Invoice_tdetails_cat_ID' =>$attachment_nameArray[$i],
                        'Invoice_tdetails_Amount' =>$attachment_fileArray[$i],
                      
                    );

                for ($i=0; $i<$count; $i++) { 
                    $attachment_info = array(

                        'Invoice_trans_ID' =>$insert_id,
                        'Invoice_tdetails_Number' => $this->input->post("Invoice_Number"),
                        'Invoice_tdetails_Date' => $this->input->post("Invoice_Date"),
                        'Invoice_tdetails_Month' => $this->input->post("Invoice_Month"),
                        'Invoice_tdetails_Type_ID' => $this->input->post("Invoice_Type_ID"),
                        'Invoice_tdetails_Class_ID' => $this->input->post("Invoice_Class_ID"),
                        'Invoice_tdetails_Medium_ID' => $this->input->post("Invoice_Medium_ID"),
                        'Invoice_tdetails_Shift_ID' => $this->input->post("Invoice_Shift_ID"),
                        'Invoice_tdetails_Section_ID' => $this->input->post("Invoice_Section_ID"),
                        'Invoice_tdetails_Amount' => $attachment_file[$i],
                        'Created'   => date("d-m-Y H:i:s"),
                        'Modified'  => date("d-m-Y H:i:s"),
                        'Invoice_tdetails_cat_ID' =>$attachment_name[$i],
                                        
                    );          
                $this->db->insert('tbl_invoice_trans_details', $attachment_info);
                
           }

        }






   

public function all_invoice_finding(){

    $Query="SELECT tbl_invoice_trans_details.*, tbl_class.Class_Name,tbl_section.Section_Name, tbl_invoice_type.Invoice_type_Name,tbl_addfee.Add_fee_Name,tbl_invoice_trans.total_amount FROM tbl_invoice_trans_details
    LEFT JOIN tbl_class on tbl_invoice_trans_details.Invoice_tdetails_Class_ID = tbl_class.Class_ID
    LEFT JOIN tbl_section on tbl_invoice_trans_details.Invoice_tdetails_Section_ID = tbl_section.Section_ID
    LEFT JOIN tbl_invoice_type on tbl_invoice_trans_details.Invoice_tdetails_Type_ID = tbl_invoice_type.Invoice_type_ID
    LEFT JOIN tbl_addfee on tbl_invoice_trans_details.Invoice_tdetails_cat_ID = tbl_addfee.Add_fee_ID
    LEFT JOIN tbl_invoice_trans on tbl_invoice_trans_details.Invoice_tdetails_Type_ID = tbl_invoice_trans.Invoice_Type_ID
    Where 1=1";
    $query_result = $this->db->query($Query)->result_array();
    // echo "<pre>"; print_r($query_result); echo "</pre>"; die();
    return $query_result;
    }



        public function fees_adding(){
         
            $card_no            = $this->input->post('employee_id');
            $attachment_name    = $this->input->post('attachment_name');
            $attachment_file    = $this->input->post('attachment_file');
            $count = count($attachment_name);
            
            $attachment_nameArray= array();
            $i=0;
            if(!empty($attachment_name)){           
                foreach($attachment_name as $check) {
                     $i++; 
                     $attachment_nameArray[$i] = $check; 
                }
            }

            $attachment_fileArray= array();
            $i=0;
            if(!empty($attachment_file)){           
                foreach($attachment_file as $check) {
                     $i++; 
                     $attachment_fileArray[$i] = $check; 
                }
            }

            // echo '<pre>',print_r($attachment_info),'</pre>';
     

                for ($i=0; $i<$number; $i++) { 
                    $attachment_info = array(
                        'attachment_name' =>$attachment_name[$i],
                        // 'attachment_file' =>$attachment_file[$i] ,
                        'attachment_file' => $employee_attachment[$i],
                        'card_no'   => $card_no ,
                        'created'   => date("d-m-Y H:i:s"),
                        'modified'  => date("d-m-Y H:i:s"),
                    );
                                
                    $this->db->insert('tbl_attachment', $attachment_info);
                }
            }
        }




    function insert_mgt()
    {
        $total = $this->input->post("total");
        $payment = $this->input->post("payment");

        $due = $total - $payment;

        $status = '';

        if ($total > $payment){

           $status = 'Due';
        }
//        elseif($total = $payment){
//            echo "paid";
//        }
        elseif($payment > $total){
            $status = 'Unpaid';
        }

        elseif ($total = $payment){
            $status = 'Paid';
        }





        $data = array(
            'class' =>  $this->input->post("class_name"),
            'student' =>  $this->input->post("student_name"),
            'title' => $this->input->post("title"),
            'description' => $this->input->post("description"),
            'date' => $this->input->post("date"),
            'total' =>  $this->input->post("total"),
            'payment' => $this->input->post("payment"),
            'due' => $due,
            'status' => $status,
            'method' => $this->input->post("method"),

        );

        $str = $this->db->insert_string("payment", $data);

//        echo "<pre>";
//        print_r($str);
//        die();

        $query = $this->db->query($str);
        $insert_id = $this->db->insert_id();
        return $this->db->affected_rows();

    }

