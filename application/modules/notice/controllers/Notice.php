<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CTL_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Notice_Model');
		$this->load->model('users_role/Users_model');	
		// $this->load->model('employee/employee/Employee_model');	
	}
	// <---------------------------------hasib working start--------------->

	public function notice_notes(){
		$this->load->view('notice_notes');
	} 

	public function notice_add(){
		if (isset($_POST['submit']) == 'Submit'){
			$notice_info = array(
				'note_type' => '2',
				'note_title' => $this->input->post('note_title'),
				'noteBody' => $this->input->post('noteBody'),
				'status' 	=> $this->input->post('status'),
				'created' 	=> date("d-m-Y H:i:s"),
				'modified' 	=> date("d-m-Y H:i:s"),
			);
		// 			 echo "<pre>";
		// print_r($notice_info);
		// die();
			//Transfering data to Model
			$this->Notice_Model->notice_adding($notice_info);
			$this->session->set_userdata('message','Notice added Successfully!');
			redirect(base_url().'notice/notice/get_notice_list');
		}else{
			$this->session->set_userdata('message','Notice is not added, Try again!');
			redirect(base_url().'notice/notice/get_notice_list');
		}
	}

	public function get_notice_list(){
		$data['note_data'] = $this->Notice_Model->get_notice_list();
		$this->load->view('notice_list',$data);
	}
	public function notice_edit($notice_id){
		$data['find_notice_data'] = $this->Notice_Model->get_notice_data($notice_id);
		$this->load->view('notice_edit',$data);
	}
	public function edit_notice(){
		if (isset($_POST['submit']) == 'Submit'){
		
			$notice_update = array(
				'note_id' 		=> $this->input->post('note_id'),
				'note_title' => $this->input->post('note_title'),
				'noteBody' => $this->input->post('noteBody'),
				'status' 	=> $this->input->post('status'),
				'modified' 	=> date("d-m-Y H:i:s"),
			);
		// 			 echo "<pre>";
		// print_r($note_update);
		// die();
			//Transfering data to Model
			$this->Notice_Model->update_notice($notice_update);
			$this->session->set_userdata('message','Notice updated Successfully!');
			redirect(base_url().'notice/notice/get_notice_list');
		}else{
			$this->session->set_userdata('message','Notice is not updated, Try again!');
			redirect(base_url().'notice/notice/get_notice_list');
		}
	}


	public function getuser()
	{
		if (isset($_REQUEST['note_id'])) {
			
			
		$id = intval($_REQUEST['note_id']);
		// 	 echo "<pre>";
		// print_r($id);
		// die();
		$this->db->where('note_id',$id);
		$data = $this->db->get('tbl_notes');
		$query= $data->result();
		echo "<div class='table-responsive'>
		
		<table class='table table-striped table-bordered'>";
			  foreach($query as $row){


		    echo "<tr>
			    <th>Notice Title</th>
				<td>"; 
				 echo $row->note_title;
			echo "</td>
			</tr>";
			echo "<tr>
				<th>Notice Details</th>
				<td>";
				 echo $row->noteBody;
			echo "</td>
			</tr>";
			echo "<tr>
				<th>Status</th>
				<td>";
				 if($row->status == 1){
				 	echo "Active";
				 }
				  else{
				 	echo "Inactive";
				 }
			echo "</td>
			</tr>";
			
			}
			
		echo "</table>
			
		</div>";		
	       }
    }
    public function delete_notice(){
		$note_id = $this->input->post('note_id');
		$this->Notice_Model->delete_notice($note_id);
		$this->session->set_userdata('message','Notice is deleted!');
		redirect(base_url().'notice/notice/get_notice_list');
	}


  // <---------------------------------hasib working end--------------->

	public function add_notice(){
		$data['department_finding'] = $this->Notice_Model->get_department();
		$data['designation_finding'] = $this->Notice_Model->find_designation();
		$data['notice_title'] = $this->Notice_Model->get_notice_title();
		$this->load->view('add_notice',$data);
	}


	public function notice_info_add(){
		if (isset($_POST['submit']) == 'Submit'){
			$this->Notice_Model->notice_info_add();
			$this->session->set_userdata('message','Notice added Successfully!');
			redirect(base_url().'notice/notice/add_notice');
		}else{
			$this->session->set_userdata('message','Notice not added, Try again!');
			redirect(base_url().'notice/notice/add_notice');
		}
	}

	public function notice_list(){
		// $data['department_finding'] = $this->Employee_model->get_department();
		$data['notice_list'] = $this->Notice_Model->notice_list();
		$data['note_data'] = $this->Notice_Model->get_notice_list();
		$this->load->view('notice_list',$data);
		// $this->load->view('notice_list');
	}

	 public function get_notice_data(){
    	if(isset($_POST['one'])){
	    	$json = array();
	    	$id =  trim($_POST['one']);

	    	$query =  $this->db->query(
	    			"SELECT note_id,noteBody
			         FROM tbl_notes
			         WHERE 1=1
			         AND note_type=2
			         AND status=1
			         AND note_id = '$id'
	    			");
	    	$result = $query->result_array(); 
	    	$note_id = $result[0]['note_id'];
	    	$noteBody = strip_tags($result[0]['noteBody']);

	    	$result = array('note_id'=>$note_id,'noteBody'=>$noteBody);

	    	array_push($json,$result);
	    	echo json_encode($json, true);

    	 }
    }
	

}

?>
