<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('admin_dashboard_home.php',$output);
	}


	public function index()
	{
		if($this->session->userdata('is_logged_in')){
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		} else{
			redirect('Admin/admin_dashboard_login');
		}
		
	}
	
	public function dashboard()
	{
		if($this->session->userdata('is_admin_logged_in')){
// 			$crud = new grocery_CRUD();
// 			$crud->set_table('doctors');
// 			$crud->columns('full_name','address','phone','email','education', 'clinic');
				
// 			$output = $crud->render();
				
// 			$this->_example_output($output);
			$crud = new grocery_CRUD();
			
			$crud->set_theme('datatables');
			$crud->set_table('doctors');
			//$crud->display_as('clinic','Clinic Name');
			$crud->set_subject('doctors');
			
			$crud->set_relation('clinic','clinics','name');
			
			$output = $crud->render();
			
			$this->_example_output($output);
		} else{
			redirect('Admin/admin_restricted');
		}
	
	}
	
	public function clinics()
	{
		if($this->session->userdata('is_admin_logged_in')){
			$crud = new grocery_CRUD();
			$crud->set_table('clinics');
			$crud->columns('name','address','phone', 'description', 'review', 'birthRateLess35', 'birthRate35To40', 'birthRateMore40', 'services');
	
			$output = $crud->render();
	
			$this->_example_output($output);
		} else{
			redirect('Admin/admin_restricted');
		}
	
	}
	
	public function registered_patients()
	{
		if($this->session->userdata('is_admin_logged_in')){
			$crud = new grocery_CRUD();
			$crud->set_table('patients');
			$crud->columns('email','password','name','birthYear','monthAttempt','healthCondition','registrationDate');
	
			$output = $crud->render();
	
			$this->_example_output($output);
		} else{
			redirect('Admin/admin_restricted');
		}
	
	}
	
	public function temp_patients()
	{
		if($this->session->userdata('is_admin_logged_in')){
			$crud = new grocery_CRUD();
			$crud->set_table('temp_patients');
			$crud->columns('email','password','name','birthYear','monthAttempt','healthCondition','registrationDate');
	
			$output = $crud->render();
	
			$this->_example_output($output);
		} else{
			redirect('Admin/admin_restricted');
		}
	
	}

	public function admin_dashboard_login(){
		$this->load->view('admin_dashboard_login');
	}
	
	public function admin_dashboard_home(){
		if($this->session->userdata('is_admin_logged_in')){
			$this->load->view('admin_dashboard_home');
		} else{
			redirect('Admin/admin_restricted');
		}	
	}
	
	public function admin_login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|callback_admin_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
	
		if($this->form_validation->run()){
			//This is for the session
			$data = array(
					'email' => $this->input->post('email'),
					'is_admin_logged_in' => 1
			);
			$this->session->set_userdata($data);
			// Redirecting the users to the member page
			redirect('Admin/dashboard');
		} else {
			$this->load->view('admin_dashboard_login');
		}
	}
	
	public function admin_validate_credentials(){
		$this->load->model('Model_admin');
	
		if($this->Model_admin->can_admin_log_in()){
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
			return false;
		}
	}
	
	public function admin_logout(){
		$this->session->sess_destroy();
		redirect('Admin/admin_dashboard_login');
	}
	
	public function admin_restricted(){
		$this->load->view('admin_restricted');
	}
	


}