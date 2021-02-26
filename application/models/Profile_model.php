<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
	public function updateProfileData($profileData)
	{
		$this->db->set("name", $profileData["name"]);
		$this->db->set("email", $profileData["email"]);
		$this->db->set("phone", $profileData["phone"]);
		$this->db->set("address", $profileData["address"]);
		$this->db->where("user_id", $this->session->userdata("user_id"));
		$this->db->update("users");
	}

	public function updatePassword($passwordHash)
	{
		$this->db->set("password", $passwordHash);
		$this->db->where("user_id", $this->session->userdata("user_id"));
		$this->db->update("users");
	}
}
