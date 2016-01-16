<?php

class Model_admin extends CI_Model{
	
	public function can_admin_log_in(){
		//		echo $_POST['email'];
		// 		echo $this->input->post('email');
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('admin');
	
		if($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	
	}
}