<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Login_Model');
	} 
	public function index()
	{
		
		//$this->load->view('login');
		$data['empty'] = "";
		$err_msg= ($this->input->get('err_msg'))?$this->input->get('err_msg'):"";
		if($err_msg!=""){
			$data['err_msg'] = $err_msg;
		}
		$this->load->view('login',$data);
	}

	// public function login_Check() 
	// {
	// 	//Loading Authorized Pages into sessions
	// 	/*  */
	// 	$date = date("Y");
	// 	//$date_con = '$date';
	// 	$todate = "2018";
	// 	if($date >= $todate) {
	// 		$data['alert'] = "Your Software License has expired! Please Contact To Cyberdyne Technology Ltd.";
	// 		$data['voucherName'] = "Login Page?";
	// 		$data['backUrl'] = "admin/login/index";
	// 		$this->load->view('alert', $data);

	// 	} else {
	// 		//echo $date;
	// 		// print_r($this->input->post('email'))
	// 		$email = $this->input->post('email');
	// 		$Password = md5($this->input->post('password'));
	// 		$checkID = 0;
	// 		$UserID = 0;
	// 		$all_users = $this->Login_Model->gets_all_users();


	// 		foreach($all_users as $key=>$info){
	// 			if (($info->Email == $email) || ($info->UserName == $email)) {
	// 				if(($info->Password == $Password) && ($info->Status == 1)){
	// 					$checkID = 1;
	// 					$UserID = $info->UserID;
	// 					$RoleID = $info->RoleID;
	// 					$EmployeeId = $info->EmployeeId;

	// 					// die();
	// 					// print_r($info);
	// 					break;
	// 				}

	// 			}
	// 		}
	// 		if($checkID == 1){//authorized user
	// 			//$this->Login_Model->gets_session_data($UserID);	
	// 			$this->session->set_userdata("userlogin", "UserLogedIn!");
	// 			$this->session->set_userdata("UserID", $UserID);
	// 			$this->session->set_userdata("RoleID", $RoleID);
	// 			$this->session->set_userdata("EmployeeId", $EmployeeId);
	// 			$this->session->set_userdata("email", $email);
	// 			$this->session->set_userdata("Password", $Password);
	// 			//$this->load->view('template_views/Index');
	// 			redirect(base_url()."admin_panel/welcome/dashboard");
	// 		}else{//unauthorized user
	// 			$err_msg = "Log In failed!";
	// 			redirect(base_url()."admin/login/index?err_msg=$err_msg");
	// 		}
	// 	}		
	// }

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
		redirect(base_url()."admin/login/index");
	}
	public function msg()
	{
		$this->load->view('welcome_message');
		//$this->load->view('template_views/Index');
	}
}
