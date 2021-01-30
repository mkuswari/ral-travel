<?php
class User_model extends CI_Model
{

	public function getAllUser()
	{
		return $this->db->get("users")->result_array();
	}

	public function getUserById($id)
	{
		return $this->db->get_where("users", ["id" => $id])->row_array();
	}

	public function insertUserData($userData)
	{
		$this->db->insert("users", $userData);
	}

	public function updateUserData($userData)
	{
		$this->db->set("name", $userData["name"]);
		$this->db->set("email", $userData["email"]);
		$this->db->set("phone", $userData["phone"]);
		$this->db->set("address", $userData["address"]);
		$this->db->set("avatar", $userData["avatar"]);
		$this->db->set("role", $userData["role"]);
		$this->db->where("id", $this->input->post("id"));
		$this->db->update("users", $userData);
	}

	public function deleteUserData($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("users");
	}
}
