<?php

class Model_clinics extends CI_Model{
	
	public function getClinicsListFromDB(){
		header("Access-Control-Allow-Origin: *");
		header("Content-Type: application/json; charset=UTF-8");

		$dbh = new PDO("mysql:host=localhost;dbname=fertilitycounselors;charset=utf8", "fertility123", "Welcome#1");
		
		$sql = "SELECT clinics.*,doctors.full_name AS d_name, doctors.address AS d_address, doctors.city AS d_city, doctors.state AS d_state, doctors.zipcode AS d_zipcode FROM clinics LEFT JOIN doctors ON doctors.clinic=clinics.id";
		
		$result = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		//To output as-is json data result
		//header('Content-type: application/json');
		//echo json_encode($result);
		
		//Or if you need to edit/manipulate the result before output
		$return = [];
		foreach ($result as $row) {
			$return[] = [
					'name' => $row['name'],
					'address' => $row['address'],
					'zipcode' => $row['zipcode'],
					'city' => $row['city'],
					'state' => $row['state'],
					'phone' => $row['phone'],
					'description' => $row['description'],
					'speciality' => $row['speciality'],
					'non_donor_fresh_less35' => $row['non-donor-fresh-less35'],
					'non_donor_fresh_35to37' => $row['non-donor-fresh-35to37'],
					'non_donor_fresh_38to40' => $row['non-donor-fresh-38to40'],
					'non_donor_fresh_41to42' => $row['non-donor-fresh-41to42'],
					'doctor_name' => $row['d_name'],
					'doctor_address' => $row['d_address'],
					'doctor_city' => $row['d_city'],
					'doctor_state' => $row['d_state'],
					'doctor_zipcode' => $row['d_zipcode']
			];
		}
		$dbh = null;
		
		header('Content-type: application/json');
		echo json_encode($return);
		
		
	}

}