<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Destination_model extends CI_Model
{

	public function getAll()
	{
		return $this->db->get("destinations")->result_array();
	}

	public function getDestinationById($id)
	{
		return $this->db->get_where("destinations", ["id" => $id])->row_array();
	}

	public function insertNewDestination($destinationData)
	{
		$this->db->insert("destinations", $destinationData);
	}
}
