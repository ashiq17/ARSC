<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CTL_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Company_model');
	}


	public function company_basic_info(){
		$this->load->view('company_basic_info');
	}



	public function company_info_add(){

		if (isset($_POST['submit']) == 'Submit'){

			$fdata=array();
			$config['upload_path']    = './images/company_images/';
	        $config['allowed_types']  = 'gif|jpg|png|jpeg';
	        $config['max_size']       = 5000;

	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('company_logo'))
	        {
	            $sdata['error_msg'] = $this->upload->display_errors();
	            $this->session->set_userdata($sdata);
	            redirect(base_url().'company/company/company_basic_info');
	        }
	        else
	        {
	            $fdata = $this->upload->data();
	            $company_logo = $fdata['file_name'];
	        }
			# image uploading end #
			$company_info = array(
				
				'company_id' 	  => $this->input->post('company_info_id'),
				'company_name'	 	  => $this->input->post('company_name'),
				'website_address' 	  => $this->input->post('website_address'),
				'email_address' 	  => $this->input->post('email_address'),
				'mobile_no' 	  => $this->input->post('mobile_no'),
				'establishment_date' 	  => $this->input->post('establishment_date'),
				'address' 	  => $this->input->post('address'),
				'company_logo' 	  => $company_logo,
				'created' 	  => date("d-m-Y H:i:s"),
				'modified' 	  => date("d-m-Y H:i:s"),
			);
			//Transfering data to Model
	
			$this->Company_model->company_info_add($company_info);
			$this->session->set_userdata('message','Company Info Submitted Successfully!');
			redirect(base_url().'company/company/company_basic_info');

		}
		
	}
	public function edit_company_basic_info(){
		$data['company_basic_info_find'] = $this->Company_model->find_company_basic_info();
		$this->load->view('edit_company_basic_info',$data);
	}
	public function company_basic_info_update(){
		if (isset($_POST['submit']) == 'Submit'){
				$comapny_info_id	  = $this->input->post('company_info_id');
				if($_FILES['company_logo']['name']!=""){
					$config['upload_path']   = './images/company_images/';
			        $config['allowed_types'] =     'gif|jpg|png|jpeg|jpe';
			        $this->load->library('upload', $config);
			        if ( ! $this->upload->do_upload('company_logo'))
			        {
			            $error = array('error' => $this->upload->display_errors());
			        }
			        else
			        {
			            $upload_data=$this->upload->data();
			            $company_logo=$upload_data['file_name'];
			        }
			    }
			    else{
			        $company_logo=$this->input->post('old_image');
			    }
				$company_info = array(

					'company_id' 	  => $this->input->post('company_id'),
					'company_name'	 	  => $this->input->post('company_name'),
					'website_address' 	  => $this->input->post('website_address'),
					'email_address' 	  => $this->input->post('email_address'),
					'mobile_no' 	  => $this->input->post('mobile_no'),
					'establishment_date' 	  => $this->input->post('establishment_date'),
					'address' 	  => $this->input->post('address'),
					'company_logo' 	  => $company_logo,
					'created' 	  => date("d-m-Y H:i:s"),
					'modified' 	  => date("d-m-Y H:i:s"),
				);
			$this->Company_model->company_basic_info_update($company_info,$comapny_info_id);
			$this->session->set_userdata('message','Company Info updated Successfully!');
			redirect(base_url().'company/company/edit_company_basic_info');
		}
	}
	public function company_view(){
		$data['company_basic_info_find'] = $this->Company_model->find_company_basic_info();
		$this->load->view('company_view',$data);

	}



	}
?>