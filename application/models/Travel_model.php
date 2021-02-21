<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Travel_model extends CI_Model
{

	public function getAllTravels()
	{
		return $this->db->get("travels")->result_array();
	}

	public function getTravelById($id)
	{
		return $this->db->get_where("travels", ["travel_id" => $id])->row_array();
	}

	public function insertNewTravel($travelData)
	{
		$this->db->insert("travels", $travelData);
	}

	public function updateTravelData($travelData)
	{
		$this->db->set("name", $travelData["name"]);
		$this->db->set("slug", $travelData["slug"]);
		$this->db->set("images", $travelData["images"]);
		$this->db->set("location", $travelData["location"]);
		$this->db->set("description", $travelData["description"]);
		$this->db->set("price", $travelData["price"]);
		$this->db->where("travel_id", $this->input->post("travel_id"));
		$this->db->update("travels", $travelData);
	}

	public function deleteTravelData($id)
	{
		$this->db->where("travel_id", $id);
		$this->db->delete("travels");
	}
}
