<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->login();
	}
	
	public function login(){
		$this->load->view('login');
	}
	
	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
		
		if($this->form_validation->run()){
			//This is for the session
			$data = array(
					'email' => $this->input->post('email'),
					'is_logged_in' => 1
			);
			$this->session->set_userdata($data);
			// Redirecting the users to the member page
			redirect('Main/members');
		} 		
	}
	
	public function validate_credentials(){
		$this->load->model('Model_users');
		
		if($this->Model_users->can_log_in()){
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
			return false;
		}
	}
	
	public function restricted(){
		$this->load->view('restricted');
	}
	
	public function members(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('members');
		} else{
			redirect('Main/restricted');
		}
	}
	
	public function signup_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[patients.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');
	
		$this->form_validation->set_message('is_unique', "That email address already exist");
	
		if($this->form_validation->run()){
			///Generate a random key//
			$key = md5(uniqid());
	
			//Send and email to the user///
			//By default mail type is text, but we want to change it to HTML
			// http://stackoverflow.com/questions/1555145/sending-email-with-gmail-smtp-with-codeigniter-email-library
			$this->load->library('email', array('mailtype'=>'html'));
			$this->load->model('Model_users');
			$this->email->from('service@fertilitycounselors.org', 'confirm');
			$this->email->to($this->input->post('email'));
			$this->email->subject("Confirm your account");
			//The contecnt will be HTML
			$message = "<p>Thank you for signing up!</p>";
			$message .= "<p><a href='".base_url()."Main/register_user/$key'>Click here</a> to confirm your account</p>";
				
			$this->email->message($message);
			////Add them to the temp_users db///			
			if($this->Model_users->add_temp_user($key)){
				if ($this->email->send()){
					echo "The email has been sent!";
				} else echo "Could not send the email!";
			} else echo "Problem adding to database.";
				

		} else {
			echo "You shall not pass!";
			$this->load->view('signup');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('main/login');
	}
	
	public function signup(){
		$this->load->view('signup');
	}
	
	// After patients confirm their accound, in move them from temp to the main database
	public function register_user($key){
		$this->load->model('Model_users');
		if($this->Model_users->is_key_valid($key)){
			//  echo "Checks if the key is valid, then move the patient from temp to main DB";
			if($newemail = $this->Model_users->add_user($key)){
				//key is valid and patient moved from temp to the main DB, now we let them login
				$data = array(
						'email' => $newemail,
						'is_logged_in' => 1
						);
				$this->session->set_userdata($data);
				redirect('Main/members');
			}
		} else echo "Failed to add user, please try again.";
		
	}
///////////////////////// Admin dashboard ///////////////////////////////////////////////
	public function admin_dashboard_login(){
		$this->load->view('admin_dashboard_login');
	}
	
	public function admin_dashboard_home(){
		if($this->session->userdata('is_admin_logged_in')){
			$this->load->view('admin_dashboard_home');
		} else{
			redirect('main/admin_restricted');
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
			redirect('Main/admin_dashboard_home');
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
		redirect('main/admin_dashboard_login');
	}
	
	public function admin_restricted(){
		$this->load->view('admin_restricted');
	}
}
