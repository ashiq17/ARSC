<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounting extends CI_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		// $this->load->model('Login_Model');
	} 
	public function index()
	{
		
		  redirect('http://cyberdynetechnologyltd.com/hr_management/');
	}
	public function index1(){
		
		redirect('http://cyberdynetechnologyltd.com/ctl_accounting/');
		
	}


}
