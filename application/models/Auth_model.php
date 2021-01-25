<?php
class Auth_model extends CI_Model
{
	public function userRegistration($userData)
	{
		$this->db->insert('users', $userData);
	}
}
