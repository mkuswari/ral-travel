<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_model extends CI_Model
{

	public function getAllTravels()
	{
		return $this->db->get("travels")->result_array();
	}

	public function getNewTravel()
	{
		$this->db->limit(4);
		return $this->db->get("travels")->result_array();
	}

	public function getOtherTravel()
	{
		$this->db->limit(3);
		return $this->db->get("travels")->result_array();
	}

	public function getTitleBySlug($slug)
	{
		$this->db->select("name");
		$this->db->from("travels");
		$this->db->where("slug", $slug);
		return $this->db->get()->row_array();
	}

	public function getTravelBySlug($slug)
	{
		return $this->db->get_where("travels", ["slug" => $slug])->row_array();
	}

	public function getTravelById($id)
	{
		return $this->db->get_where("travels", ["travel_id" => $id])->row_array();
	}

	public function addNewBooking($bookingData)
	{
		$this->db->insert("bookings", $bookingData);
	}

	public function getBookingByCode($bookingCode)
	{
		return $this->db->get_where("bookings", ["booking_code" => $bookingCode])->row_array();
	}

	public function addConfirmPayment($paymentData)
	{
		$this->db->insert("payment_confirmations", $paymentData);
	}
}
