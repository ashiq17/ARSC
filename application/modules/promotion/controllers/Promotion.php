
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Promotion extends CI_Controller {
    
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('Promotion_model');
       
    } 
     // exam Marks input start here mahbub

    public function add_promotion() {
        $data['Class_Data']    = $this->Promotion_model->get_classData();
        $data['Section_Data']  = $this->Promotion_model->get_sectionData();
        $data['Section_Data']  = $this->Promotion_model->get_sectionData();
        $data['Group_Data']    = $this->Promotion_model->get_groupData();
        $data['Exam_name_Data']  = $this->Promotion_model->get_exam_nameData();
        $this->load->view('promotion_student_index',$data);
    }

     public function get_exam_subject_data(){
            if(isset($_POST['Class_ID']) && isset($_POST['Std_medium_ID']) && isset($_POST['Std_shift_ID'])){
                $json = array();
                $Class_ID =  trim($_POST['Class_ID']);
                $Std_medium_ID =  trim($_POST['Std_medium_ID']);
                $Std_shift_ID =  trim($_POST['Std_shift_ID']);

                $query = $this->db->query(
                        "SELECT tbl_subject.*
                         FROM tbl_subject
                         WHERE 1=1
                         AND Class_ID = '$Class_ID'
                         AND  Medium_ID = '$Std_medium_ID'
                         AND  Shift_ID = '$Std_shift_ID'
                         ");
                $queryData = $query->result();
                $total = 0;
                $subjectList = array();
                foreach($queryData as $key=>$info){
                    $subjectList[$total]['Subject_ID']          = $info->Subject_ID;
                    $subjectList[$total]['Subject_Name']        = $info->Subject_Name;
                    $total++;
                }
                echo json_encode(array(
                    "subjectList"  => $subjectList, 
                    "total"         => $total, 
                    "queryData"         => $queryData, 
                ));
             }
        }

    public function promotion_search(){
            // echo "<pre>";print_r($_POST); echo "</pre>";die();
        $Class_ID          = ($this->input->get('Class_ID'))?$this->input->get('Class_ID'):"";
        $Section_ID        = ($this->input->get('Section_ID'))?$this->input->get('Section_ID'):"";
        $Group_ID          = ($this->input->get('Group_ID'))?$this->input->get('Group_ID'):"";
        $Std_shift_ID      = ($this->input->get('Std_shift_ID'))?$this->input->get('Std_shift_ID'):"";
        $Std_medium_ID     = ($this->input->get('Std_medium_ID'))?$this->input->get('Std_medium_ID'):"";
        $Exam_term_ID      = ($this->input->get('Exam_term_ID'))?$this->input->get('Exam_term_ID'):"";
        $Subject_ID        = ($this->input->get('Subject_ID'))?$this->input->get('Subject_ID'):"";
        $query = "";
        $total_condition ="";
         
        $query_con = "SELECT tbl_student.*, tbl_class.Class_Name, tbl_section.Section_Name, tbl_group.Group_Name
            FROM tbl_student
            LEFT JOIN tbl_class ON tbl_class.Class_ID=tbl_student.Std_class_ID
            LEFT JOIN tbl_section  ON tbl_section.Section_ID=tbl_student.Std_section_ID
            LEFT JOIN tbl_group  ON tbl_group.Group_ID=tbl_student.Std_Group_ID
            where 1=1
            and Class_ID='$Class_ID' 
            ";
        
          if ($Std_shift_ID) {
                 $query_con .= " AND tbl_student.Std_shift_ID='$Std_shift_ID'";
            }

            if($Std_medium_ID) {
                $query_con .= " AND tbl_student.Std_medium_ID='$Std_medium_ID'";
            }

            if ($Group_ID) {
                 $query_con .= " AND tbl_student.Std_group_ID='$Group_ID'";
            }
            if ($Class_ID) {
                 $query_con .= " AND tbl_student.Std_class_ID='$Class_ID'";
            }

            if ($Section_ID) {
                 $query_con .= " AND tbl_student.Std_section_ID='$Section_ID'";
            }  
        
        $queryData = $this->db->query($query_con)->result();
           // echo "<pre>";print_r($queryData); echo "</pre>";die();
        
        $total = 0;
        $promotion_search_List = array();//`id``ItemCode``BarCode`
        foreach($queryData as $key=>$info){

            $total++;

            $promotion_search_List[$total]['Std_Name']                 = isset($info->Std_Name)?$info->Std_Name:'-';
            $promotion_search_List[$total]['Std_class_ID']             = isset($info->Std_class_ID)?$info->Std_class_ID:'-';
            $promotion_search_List[$total]['Class_Name']               = isset($info->Class_Name)?$info->Class_Name:'-';
            $promotion_search_List[$total]['Std_medium_ID']            = isset($info->Std_medium_ID)?$info->Std_medium_ID:'-';
            $promotion_search_List[$total]['Std_shift_ID']             = isset($info->Std_shift_ID)?$info->Std_shift_ID:'-';
            $promotion_search_List[$total]['Std_group_ID']             = isset($info->Std_group_ID)?$info->Std_group_ID:'-';
            $promotion_search_List[$total]['Group_Name']               = isset($info->Group_Name)?$info->Group_Name:'-';
            $promotion_search_List[$total]['Std_section_ID']           = isset($info->Std_section_ID)?$info->Std_section_ID:'-';
            $promotion_search_List[$total]['Section_Name']             = isset($info->Section_Name)?$info->Section_Name:'-';
            $promotion_search_List[$total]['STD_UNQ_ID']               = isset($info->STD_UNQ_ID)? $info->STD_UNQ_ID:'-';
            $promotion_search_List[$total]['Std_roll']                 = isset($info->Std_roll)? $info->Std_roll:'-';
            
            }
        echo json_encode(array(
            "promotion_search_List"   => $promotion_search_List, 
            "total"                   => $total, 
            "queryData"               => $query_con, 
        )); 
    }
        public function promotion_creation(){
            //  echo "<pre>";print_r($_POST);echo "</pre>";die();
            $update_id = $this->Promotion_model->update_promotion_creation();
               $this->session->set_userdata('message','Promotion  added Successfully!');
            redirect(base_url().'promotion/promotion/add_promotion');
        }

    //============= exam Marks input end here mahbub===============

 

}