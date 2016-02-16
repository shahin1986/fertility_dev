<?php

class Model_clinics extends CI_Model{
	
	public function getClinicsListFromDB(){
		header("Access-Control-Allow-Origin: *");
		header("Content-Type: application/json; charset=UTF-8");

		$dbh = new PDO("mysql:host=localhost;dbname=fertilitycounselors;charset=utf8", "fertility123", "Welcome#1");
		
		$sql = "SELECT clinics.*,doctors.full_name AS doctor_name FROM clinics LEFT JOIN doctors ON doctors.clinic=clinics.id";
		
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
					//'specialty' => $row['specialty'],
					'non-donor-fresh-less35' => 'non-donor-fresh-less35',
					'non-donor-fresh-35to37' => 'non-donor-fresh-35to37',
					'non-donor-fresh-38to40' => 'non-donor-fresh-38to40',
					'non-donor-fresh-41to42' => 'non-donor-fresh-41to42'
			];
		}
		$dbh = null;
		
		header('Content-type: application/json');
		echo json_encode($return);
		
		
	}

}