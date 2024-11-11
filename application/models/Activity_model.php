<?php

class Activity_model extends CI_Model {

    public function get_activity()
	{
		$sql = "SELECT * FROM dt_activity";
		$result = $this->db->query($sql)->result();
		return $result;
	}

	// Login
    public function login($username, $password){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1){
            return $query->result();
        }else {
            return false;
        }
    }

	// register
	public function insertUser($data){
		$this->db->insert('users', $data);
	}

}