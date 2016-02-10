<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clinics extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('clinics.php',$output);
	}


	public function index()
	{
		
		//$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		//$this->getClinicsInfo();
		$this->load->view('clinics');
	}
	
	public function getClinicsInfo()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('clinics');
		$crud->columns('name','address','phone', 'description', 'review', 'birthRateLess35', 'birthRate35To40', 'birthRateMore40', 'services');
		$output = $crud->render();
		
		$this->_example_output($output);
	}
	
	public function example(){
		$this->load->view('clinicExample');
	}
	
	public function searchResult(){
		$this->load->view('clinicsSearchResult');
	}
	
	public function getClinicsCoordinateFromDB(){
		header("Access-Control-Allow-Origin: *");
		header("Content-Type: application/json; charset=UTF-8");
		
		$conn = new mysqli("localhost", "fertility123", "Welcome#1", "fertilitycounselors");
		
		$result = $conn->query("SELECT name,lat,lng FROM clinics");
		$outp = "";
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
		    if ($outp != "") {$outp .= ",";}
		    $outp .= '{"Name":"'  . $rs["name"] . '",';
		    $outp .= '"Lat":"'   . $rs["lat"]        . '",';
		    $outp .= '"Lng":"'. $rs["lng"]     . '"}'; 
		}
		$outp ='{"records":['.$outp.']}';
		$conn->close();
		
		echo($outp);
	}
	

}
