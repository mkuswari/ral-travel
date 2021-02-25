<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{
	public function getAllBookings()
	{
		$this->db->select("bookings.*, travels.name AS travel_name");
		$this->db->from('bookings');
		$this->db->join("travels", "travels.travel_id = bookings.travel_id");
		return $this->db->get()->result_array();
	}

	public function getBookingDetail($id)
	{
		$this->db->select("bookings.*, travels.name AS travel_name");
		$this->db->from('bookings');
		$this->db->where('booking_id', $id);
		$this->db->join("travels", "travels.travel_id = bookings.travel_id");
		return $this->db->get()->row_array();
	}

	public function getPaymentInfo($id)
	{
		return $this->db->get_where('payment_confirmations', ['booking_id' => $id])->row_array();
	}

	public function deleteBooking($id)
	{
		$this->db->where("booking_id", $id);
		$this->db->delete("bookings");
	}

	public function deletePayement($id)
	{
		$this->db->where("booking_id", $id);
		$this->db->delete("payment_confirmations");
	}
}
