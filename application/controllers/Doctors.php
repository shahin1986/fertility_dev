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
		$this->load->view('doctors');
	}
	

	
	public function getDoctorsListFromDB(){
		$this->load->model('Model_doctors');
		$this->Model_doctors->getDoctorsListFromDB();
	}
	
	public function id($id){
		//$this->load->view('doctor_profile');
		$this->getDoctorProfileFromDB($id);
	}
	
	public function getDoctorProfileFromDB($id){
		//header("Access-Control-Allow-Origin: *");
		//header("Content-Type: application/json; charset=UTF-8");
		$dbh = new PDO("mysql:host=localhost;dbname=fertilitycounselors;charset=utf8", "fertility123", "Welcome#1");		
		$sql = "SELECT * FROM doctors WHERE doctors.id=".$id;
		//echo $sql;
		$result = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

		$return = [];
		foreach ($result as $row) {
			$return[] = [
					'full_name' => $row['full_name'],
					'address' => $row['address'],
					'zipcode' => $row['zipcode'],
					'city' => $row['city'],
					'state' => $row['state'],
					'phone' => $row['phone'],
					'bio' => $row['bio'],
					'specialty' => $row['specialty'],
					'photo_url' => 'http://fertilitycounselors.org/dev/assets/uploads/files/doctors/'.$row['photo_url'],
 					'clinic' => $row['clinic']
			];
		}
		$dbh = null;
		
		//header('Content-type: application/json');
		//echo json_encode($return);
		//print_r($return[0]);
		$this->load->view('doctor_profile', $return[0]);
	}

}
