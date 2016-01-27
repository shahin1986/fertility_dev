<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctors extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('doctors.php',$output);
	}


	public function index()
	{
		
		//$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		//$this->getClinicsInfo();
		$this->load->view('doctors');
	}
	
	public function getDoctorsList()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('doctors');
		$crud->columns('name','address','phone', 'description', 'review', 'birthRateLess35', 'birthRate35To40', 'birthRateMore40', 'services');
		$output = $crud->render();
		
		$this->_example_output($output);
	}
	

}
