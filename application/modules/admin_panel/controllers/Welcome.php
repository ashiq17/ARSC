<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Welcome_Model');
	} 
	public function index()
	{
		$data['empty'] = "";
		$err_msg= ($this->input->get('err_msg'))?$this->input->get('err_msg'):"";
		if($err_msg!=""){
			$data['err_msg'] = $err_msg;
		}
		$this->load->view('welcome_message');
	}
	
	
	public function dashboard(){
		// $this->session->set_userdata("UserID", $UserID);
		 $RoleID = $this->session->userdata("RoleID");
		 $RoleName = $this->session->userdata("role_name");
		//  echo "<pre>";
		//  // print_r($RoleID);
		//  print_r($RoleName);
		// echo "</pre>";
		 // die();
		if($this->session->userdata("userlogin") != "UserLogedIn!" ) {
			$err_msg = 'Login Required!';
			redirect(base_url()."admin/login/index?err_msg=$err_msg");
			} 
			elseif ($RoleName=='Super Admin') {

 		$total_fees = $this->Welcome_Model->get_all_query_row_countallfees();
 		$total_expense = $this->Welcome_Model->get_all_query_row_countallexpense();
 		$total_student = $this->Welcome_Model->get_all_query_row_countall();
        $total_teacher = $this->Welcome_Model->get_all_query_row_countallt();
		$total_parents = $this->Welcome_Model->get_all_query_row_countallp();
		$total_user = $this->Welcome_Model->get_all_query_row_countallu();

		 $tfe='';

        foreach ($total_fees as $row){
            $total_fees=$row->tfe;
        } 

        $texp='';

        foreach ($total_expense as $row){
            $total_expense=$row->texp;
        }

         $tu='';

        foreach ($total_user as $row){
            $total_user=$row->tu;
        }

        $tp='';

        foreach ($total_parents as $row){
            $total_parents=$row->tp;
        }


        $tt='';

        foreach ($total_teacher as $row){
            $total_teacher = $row->tt;
        }


        $con = '';

        foreach ($total_student as $row) {
            $total_student = $row->con;
        }

          $array = array(
            // 'msg' => $msg,
            'total_fees' => $total_fees,
            'total_expense' => $total_expense,
            'total_student' => $total_student,
            'total_teacher'=>$total_teacher,
            'total_parents'=>$total_parents,
            'total_user'=>$total_user,
            'title' => 'Cyberdyne School Management System',
            // 'operation' => 'add',
        );


			   $this->load->view('dashboard/index_superadmin',$array);
			} 
			elseif ($RoleName=='Admin') {

		$total_user = $this->Welcome_Model->get_all_query_row_countallu();
		$total_fees = $this->Welcome_Model->get_all_query_row_countallfees();
 		$total_expense = $this->Welcome_Model->get_all_query_row_countallexpense();
		$total_student = $this->Welcome_Model->get_all_query_row_countall();
        $total_teacher = $this->Welcome_Model->get_all_query_row_countallt();
		$total_parents = $this->Welcome_Model->get_all_query_row_countallp();

		 $tfe='';

        foreach ($total_fees as $row){
            $total_fees=$row->tfe;
        } 

        $texp='';

        foreach ($total_expense as $row){
            $total_expense=$row->texp;
        }

        $tp='';

        foreach ($total_parents as $row){
            $total_parents=$row->tp;
        }
        $tt='';

        foreach ($total_teacher as $row){
            $total_teacher = $row->tt;
        }

          $tu='';

        foreach ($total_user as $row){
            $total_user=$row->tu;
        }


        $con = '';

        foreach ($total_student as $row) {
            $total_student = $row->con;
        }

          $array = array(
            // 'msg' => $msg,
            'total_fees' => $total_fees,
            'total_expense' => $total_expense,
            'total_student' => $total_student,
            'total_teacher'=>$total_teacher,
            'total_parents'=>$total_parents,
            'total_user'=>$total_user,
            'title' => 'Welcome To School Management System ',
            // 'operation' => 'add',
        );
			   $this->load->view('dashboard/index_admin',$array);
			}
			elseif ($RoleName=='Parents') {
			   $this->load->view('dashboard/index_parents');
			}
			elseif ($RoleName=='Teacher') {
			   $this->load->view('dashboard/index_teacher');
			}
			elseif ($RoleName=='Student') {
			   $this->load->view('dashboard/index_student');
			}
		}
			
	
	public function log_out(){
		$this->session->sess_destroy();
		redirect(base_url()."admin_panel/welcome/index");
	}
	public function msg()
	{
		$this->load->view('welcome_message');
		//$this->load->view('template_views/Index');
	}

	// public function find_superadmin(){
	// 	$data['get_data'] = $this->Welcome_Model->get_superadmin();
	// 	$this->load->view('welcome_message', $data);
	// }
}
