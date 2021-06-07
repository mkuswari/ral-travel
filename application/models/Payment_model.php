<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_model extends CI_Model
{

	public function getAllPayments()
	{
		$this->db->select('*');
		$this->db->from("payment_confirmations");
		$this->db->join("bookings", "bookings.booking_id = payment_confirmations.booking_id");
		return $this->db->get()->result_array();
	}

	public function getPaymentById($id)
	{
		return $this->db->get_where("payment_confirmations", ["id_payment_confirmation" => $id])->row_array();
	}
}
