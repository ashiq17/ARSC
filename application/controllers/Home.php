<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Home_Model');
		// $this->load->model('Exam_routine_Model');
	}
	
	public function index() {
		// $data['header_data'] = $this->Home_Model->get_header_data();
		$this->load->view('home');
	}

	public function aimsAndObjective(){
		$data['about_info']  = $this->Home_Model->find_about_all_info();
		// print_r($data);
		// die();
		$this->load->view('common/aimsAndObjective',$data);
	}

	public function keyFetures(){
		$this->load->view('common/keyFetures');
	}
	public function TeachersAndStaffs(){
		$this->load->view('common/TeachersAndStaffs');
	}
        public function bodCollege(){
		$this->load->view('common/bodCollege');
	}
	public function TeachersMoreInfo(){
		$teacher_id =$this->uri->segment(3);
	
		 $data['teacherdata'] = $this->Home_Model->get_teacher_single($teacher_id);

    // echo "<pre>";
    //  print_r($data);
    //  echo "</pre>";
    // die();
	
		$this->load->view('common/TeachersMoreInfo',$data);
	}
	public function PrincipalStatment(){
		$this->load->view('common/PrincipalStatment');
	}	
	public function ContactUs(){
		$this->load->view('common/ContactUs');
	}
	public function AcademicClaender(){
		$this->load->view('common/AcademicClaender');
	}
	public function ClassSchedule(){
		$this->load->view('common/ClassSchedule');
	}
	public function ExamSchedule(){
		$data['Class_Data']  = $this->Home_Model->get_classData();
        $data['Section_Data']  = $this->Home_Model->get_sectionData();
        $data['Group_Data']  = $this->Home_Model->get_groupData();
        $data['Exam_name_Data']  = $this->Home_Model->get_exam_nameData();
        // echo"<pre>";
        // print_r($data);
        // echo"</pre>";
        // die();
		$this->load->view('common/ExamSchedule',$data);
	}
	public function print_exam_routine(){
            // echo "<pre>";
         //   print_r($_POST);
            // echo "</pre>";die();
        $data['print_exam_routine_all_find'] = $this->Home_Model->print_exam_routine_all_finding();
        $this->load->view('common/print_exam_routine',$data);
        // $this->load->view('report/print_exam_routine');
    }
    
	public function SchoolDressInfo(){
		$this->load->view('common/SchoolDressInfo');
	}
	public function SchoolSessionInfo(){
		$this->load->view('common/SchoolSessionInfo');
	}
	public function AdmissionProcedure(){
		$this->load->view('common/AdmissionProcedure');
	}
	public function Fees(){
		$this->load->view('common/Fees');
	}
	public function subjects(){
		$this->load->view('common/subjects');
	}
	public function evaluation(){
		$this->load->view('common/evaluation');
	}
	public function HowToApply(){
		$this->load->view('common/HowToApply');
	}
	public function IctLab(){
		$this->load->view('common/IctLab');
	}
	public function Library(){
		$this->load->view('common/Library');
	}
	public function PlayingFacelite(){
		$this->load->view('common/PlayingFacelite');
	}
    public function SchoolTransport(){
		$this->load->view('common/SchoolTransport');
	}
	public function ScienceLab(){
		$this->load->view('common/ScienceLab');
	}
	public function Achievement(){
		$this->load->view('common/Achievement');
	}

	 // single student result end here

	public function ExamResult_index(){
		
		$this->load->view('common/report/ExamResult_index');
	}
	public function ExamResult(){
		$data['all_student_find_summary'] = $this->Home_Model->all_student_finding_summary();
		$data['all_student_find_unique_id'] = $this->Home_Model->all_student_finding_unique_id();
        $data['Class_Data']  = $this->Home_Model->get_classData();
        $data['Section_Data']  = $this->Home_Model->get_sectionData();
        $data['Group_Data']  = $this->Home_Model->get_groupData1();
        // $data['Year_Data']  = $this->Home_Model->get_yearData();
        $data['Exam_name_Data']  = $this->Home_Model->get_exam_nameData();
		$this->load->view('common/report/ExamResult',$data);
	}
	public function print_exam_report_single(){
        // echo "<pre>";  print_r($_POST);echo "</pre>";die();
        $class_name       = $this->input->post('class_name');
        $data['print_exam_report_single_find'] = $this->Home_Model->print_exam_report_single_finding();
        $data['print_exam_report_all_find'] = $this->Home_Model->print_exam_report_all_finding();


       if(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='play'){
        $this->load->view('common/report/print_single_result_class_play',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='nursery'){
        // echo "hello";
        $this->load->view('common/report/print_single_result_class_nursery',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='juniorone'){
         //echo "hello";
        $this->load->view('common/report/print_single_result_class_juniorone',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='one'){
        $this->load->view('common/report/print_single_result_class_one',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='two'){
        $this->load->view('common/report/print_single_result_class_two',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='three'){
        $this->load->view('common/report/print_single_result_class_three',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='four'){
        $this->load->view('common/report/print_single_result_class_four',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='five'){
        $this->load->view('common/report/print_single_result_class_five',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='six'){
        $this->load->view('common/report/print_single_result_class_six',$data);
       }elseif(trim(strtolower(str_replace(array('/', ' ','.','&'), array(''), $class_name))) =='seven'){
        $this->load->view('common/report/print_single_result_class_seven',$data);
       }
        
    }
    // public function print_exam_report_single(){
    //     if ($_POST['submit']=='Print') {
    //         echo "<pre>";
    //          print_r($_POST);
    //         echo "</pre>";die();
    //     $data['print_exam_report_single_find'] = $this->Home_Model->print_exam_report_single_finding();
    //     // $data['print_exam_report_all_find'] = $this->Home_Model->print_exam_report_all_finding();
    //     $this->load->view('common/report/print_single_exam_marks',$data);
    //     }
    // }
    
    // all student result start here
	public function ExamResult_all_index(){
		$data['Class_Data']  = $this->Home_Model->get_classData();
        $data['Section_Data']  = $this->Home_Model->get_sectionData();
        $data['Group_Data']  = $this->Home_Model->get_groupData();
        // $data['Year_Data']  = $this->Home_Model->get_yearData();
        $data['Exam_name_Data']  = $this->Home_Model->get_exam_nameData();
		$this->load->view('common/report/ExamResult_all_index',$data);
	}

	public function print_exam_report_all(){
        $class              = $this->input->post('Std_class_ID');
        $section            = $this->input->post('Std_section_ID');
        $data['Exam_term_ID']= $this->input->post('Exam_term_ID');
        $data['print_exam_report_all_find'] = $this->Home_Model->print_exam_report_all_finding();
        $data['find_exam_name'] = $this->Home_Model->find_exam_name();
         // echo "<pre>";  print_r($data['print_exam_report_all_find']);echo "</pre>";die();
        $data['class_wise_subject'] = $this->Home_Model->class_wise_subject($class,$section);
        $this->load->view('common/report/print_all_exam_marks',$data);
    }
	
    // all student result end here

	public function NoticeAndAnnouncement(){
		$this->load->view('common/NoticeAndAnnouncement');
	}	
	public function UpcomingEvent(){
		$this->load->view('common/UpcomingEvent');
	}
	  // student result login start here

	public function student_result_login(){
		
		$userid = $this->input->post('userid');
		$Password = md5($this->input->post('password'));
		$checkID = 0;
		$UserID = 0;
		$all_users = $this->Home_Model->gets_all_users();
					
		foreach($all_users as $key=>$info){
		// echo "<pre>";
		//  print_r($info);
		// echo "</pre>";
		//  die();
			if (($info->Email == $userid) || ($info->UserName == $userid) ||($info->EmployeeId == $userid)) {
				if(($info->Password == $Password) && ($info->Status == 1)){
					$checkID = 1;
					$UserID = $info->UserID;
					$RoleID = $info->RoleID;
					$role_name = $info->role_name;
					$EmployeeId = $info->EmployeeId;
					break;
				}
			}
		}
		if($checkID == 1){//authorized user
			//$this->Login_Model->gets_session_data($UserID);	
			$this->session->set_userdata("userlogin", "UserLogedIn!");
			$this->session->set_userdata("UserID", $UserID);
			$this->session->set_userdata("RoleID", $RoleID);
			$this->session->set_userdata("role_name", $role_name);
			$this->session->set_userdata("EmployeeId", $EmployeeId);
			$this->session->set_userdata("userid", $userid);
			$this->session->set_userdata("Password", $Password);
			//$this->load->view('template_views/Index');
			$this->session->set_userdata('message','You are successfully Login ! ');
			redirect(base_url()."home/ExamResult");
		}else{//unauthorized user
			$this->session->set_userdata('message','User Name Or ID or email or password are not valid ! Please enter correct Id and password ');
            
			redirect(base_url()."home/ExamResult_index");
			
		}
	}



  // student result login end here



	public function login_Check() 
	{
		$email = $this->input->post('email');
		$Password = md5($this->input->post('password'));
		$checkID = 0;
		$UserID = 0;
		$all_users = $this->Login_Model->gets_all_users();
					
		foreach($all_users as $key=>$info){
		// echo "<pre>";
		//  print_r($info);
		// echo "</pre>";
		//  die();
			if (($info->Email == $email) || ($info->UserName == $email)) {
				if(($info->Password == $Password) && ($info->Status == 1)){
					$checkID = 1;
					$UserID = $info->UserID;
					$RoleID = $info->RoleID;
					$role_name = $info->role_name;
					$EmployeeId = $info->EmployeeId;
					break;
				}
			}
		}
		if($checkID == 1){//authorized user
			//$this->Login_Model->gets_session_data($UserID);	
			$this->session->set_userdata("userlogin", "UserLogedIn!");
			$this->session->set_userdata("UserID", $UserID);
			$this->session->set_userdata("RoleID", $RoleID);
			$this->session->set_userdata("role_name", $role_name);
			$this->session->set_userdata("EmployeeId", $EmployeeId);
			$this->session->set_userdata("email", $email);
			$this->session->set_userdata("Password", $Password);
			//$this->load->view('template_views/Index');
			redirect(base_url()."admin_panel/welcome/dashboard");
		}else{//unauthorized user
			$err_msg = "Log In failed!";
			redirect(base_url()."admin/login/index?err_msg=$err_msg");
		}
	}		
	
	
	public function system_error() {
		$data['alert'] = "Page Not Found OR You are not Authorized for this page!";
		$data['voucherName'] = "Dashboard?";
		$data['backUrl'] = "admin_panel/welcome/dashboard";
		$this->load->view('dashboard/common/alert', $data);
	}
	
	
	public function log_out(){
		$this->session->sess_destroy();
		redirect(base_url()."home/index");
	}
	public function msg()
	{
		$this->load->view('welcome_message');
		//$this->load->view('template_views/Index');
	}
















}
