<?php
class Model_login extends CI_Model {

	public function login($username, $password){
		$cek = array('username' => $username, 'password' => $password );
		$log = $this->db->select('*')->from('account')->where($cek);
		$row = $this->db->get();
			if ($row->num_rows()==1) {
				return true;
			}else {
				return false;
			}
	}

	public function get_level($data){
 		$query = "SELECT level from account where username = ?";
 		$result = $this->db->query($query, array($data))->result_array();
 		foreach ($result as $row)
 		{
 			$leveluser = $row['level'];
 		}
 		return $leveluser;
	}

	public function get_id($data){
 		$query = "SELECT id_user from account where username = ?";
 		$result = $this->db->query($query, array($data))->result_array();
 		foreach ($result as $row)
 		{
 			$iduser = $row['id_user'];
 		}
 		return $iduser;
	}

}?>