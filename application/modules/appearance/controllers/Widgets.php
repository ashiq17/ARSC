<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widgets extends CI_Controller {
	
    public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Widgets_Model');
		if($this->session->userdata("userlogin") != "UserLogedIn!" ) {
			$err_msg = 'Login Required!';
			redirect(base_url()."admin/login/index?err_msg=$err_msg");
		}
	}

	// *********  sidebar widget ********* //

	public function sidebar_widget() {
		$data['sidebar_widget'] = $this->Widgets_Model->get_sidebar_widget();
		$this->load->view('Sidebar_widget_view', $data);
	}

	public function new_sidebar_widget() {
		$this->load->view('Add_sidebar_widget');
	}

	public function addnew_sidebar_widget() {
		$this->Widgets_Model->upload_sidebar_widget();

		redirect(base_url()."appearance/widgets/sidebar_widget");
	}

	public function edit_sidebar_widget($id) {
		$data['sidebar_widget_data'] = $this->Widgets_Model->get_sidebar_widget_data($id);
		$this->load->view('Edit_sidebar_widget_view', $data);
	}

	public function update_sidebar_widget() {
		$this->Widgets_Model->update_sidebar_widget_data();

		redirect(base_url()."appearance/widgets/sidebar_widget");
	}

	// *********  page widget ********* //

	public function page_widget() {
		$data['page_widget'] = $this->Widgets_Model->get_page_widget();
		$this->load->view('Page_widget_view', $data);
	}

	public function new_page_widget() {
		$data['news_menus'] = $this->Widgets_Model->get_news_menus();
		$this->load->view('Add_page_widget', $data);
	}

	public function addnew_page_widget() {
		$this->Widgets_Model->upload_page_widget();

		redirect(base_url()."appearance/widgets/page_widget");
	}

	public function edit_page_widget($id) {
		$data['page_widget_data'] = $this->Widgets_Model->get_page_widget_data($id);
		$data['news_menus'] = $this->Widgets_Model->get_news_menus();
		$this->load->view('Edit_page_widget_view', $data);
	}

	public function update_page_widget() {
		$this->Widgets_Model->update_page_widget_data();

		redirect(base_url()."appearance/widgets/page_widget");
	}
}