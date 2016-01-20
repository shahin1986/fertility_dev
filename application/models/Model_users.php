<?php

class Model_users extends CI_Model{
	
	public function can_log_in(){
		//		echo $_POST['email'];
		// 		echo $this->input->post('email');
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('patients');
		
		if($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
		
	}
	
	public function add_temp_user($key){
		$curr_timestamp = date('Y-m-d H:i:s');
// 		echo $curr_timestamp;
		$data = array (
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'key' => $key,
				'name' => $this->input->post('name'),
				'birthYear' => $this->input->post('birthYear'),
				'monthAttempt' => $this->input->post('monthAttempt'),
				'healthCondition' => $this->input->post('healthCondition'),
				'registrationDate' => $curr_timestamp
		);
		$query = $this->db->insert('temp_patients', $data);
		if($query){
			return true;
		} else {
			return false;
		}
	}
	
	public function is_key_valid($key){
		$this->db->where('key', $key);
		$query = $this->db->get('temp_patients');
		
		if($query->num_rows() == 1){
			return true;
		} else return false;
	}
	
	public function add_user($key){
		$this->db->where('key', $key);
		$temp_patient = $this->db->get('temp_patients');
		
		if($temp_patient){
			$row = $temp_patient->row();
			$data = array(
					'email' => $row->email,
					'password' => $row->password,
					'name' => $row->name,
					'birthYear' => $row->birthYear,
					'monthAttempt' => $row->monthAttempt,
					'healthCondition' => $row->healthCondition,
					'registrationDate' => $row->registrationDate
			);
			$did_add_patient = $this->db->insert('patients', $data);
		}
		
		if($did_add_patient){
			$this->db->where('key', $key);
			$this->db->delete('temp_patients');
			//we need to return the email
			return $data['email'];
		}return false;
	}
	
}