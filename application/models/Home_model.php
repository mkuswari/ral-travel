<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

	public function getAllBookings()
	{
		$this->db->select("bookings.*, travels.name AS travel_name");
		$this->db->from('bookings');
		$this->db->join("travels", "travels.travel_id = bookings.travel_id");
		$this->db->where("user_id", $this->session->userdata("user_id"));
		return $this->db->get()->result_array();
	}

	public function getBookingById($id)
	{
		$this->db->select("bookings.*, travels.name AS travel_name");
		$this->db->from('bookings');
		$this->db->join("travels", "travels.travel_id = bookings.travel_id");
		$this->db->where("user_id", $this->session->userdata("user_id"));
		$this->db->where("booking_id", $id);
		return $this->db->get()->row_array();
	}
}
