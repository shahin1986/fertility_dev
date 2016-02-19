<?php

class Model_doctors extends CI_Model{
	
	public function getDoctorsListFromDB(){
		header("Access-Control-Allow-Origin: *");
		header("Content-Type: application/json; charset=UTF-8");
	
// 		$conn = new mysqli("localhost", "fertility123", "Welcome#1", "fertilitycounselors");
	
// 		$result = $conn->query("SELECT doctors.*,clinics.name AS clinic_name FROM doctors LEFT JOIN clinics ON doctors.clinic=clinics.id");
// 		$outp = "";
// 		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
// 			if ($outp != "") {$outp .= ",";}
// 			$outp .= '{"full_name":"'  . $rs["full_name"] . '",';
// 			$outp .= '"address":"'   . $rs["address"]        . '",';
// 			$outp .= '"zipcode":"'  . $rs["zipcode"] . '",';
// 			$outp .= '"city":"'   . $rs["city"]        . '",';
// 			$outp .= '"state":"'  . $rs["state"] . '",';
// 			$outp .= '"phone":"'   . $rs["phone"]        . '",';
// 			$outp .= '"bio":"'   . $rs["bio"]        . '",';
// 			$outp .= '"specialty":"'   . $rs["specialty"]        . '",';
// 			$outp .= '"photo_url":"http://localhost:8888/dev/assets/uploads/files/doctors/'   . $rs["photo_url"]        . '",';
// 			$outp .= '"clinic":"'. $rs["clinic_name"]     . '"}';
// 		}
// 		$outp ='{"records":['.$outp.']}';
// 		$conn->close();
	
// 		echo($outp);
		$dbh = new PDO("mysql:host=localhost;dbname=fertilitycounselors;charset=utf8", "fertility123", "Welcome#1");
		
		$sql = "SELECT doctors.*,clinics.name AS clinic_name FROM doctors LEFT JOIN clinics ON doctors.clinic=clinics.id";
		
		$result = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		//To output as-is json data result
		//header('Content-type: application/json');
		//echo json_encode($result);
		
		//Or if you need to edit/manipulate the result before output
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
					'id' => $row['id'],
					'specialty' => $row['specialty'],
					'photo_url' => 'http://localhost:8888/dev/assets/uploads/files/doctors/'.$row['photo_url'],
					'clinic' => $row['clinic']
			];
		}
		$dbh = null;
		
		header('Content-type: application/json');
		echo json_encode($return);
		
		
	}

}