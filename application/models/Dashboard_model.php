<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	public function countAllUsers()
	{
		return $this->db->get('users')->num_rows();
	}

	public function countAllTravels()
	{
		return $this->db->get('travels')->num_rows();
	}

	public function countAllBookings()
	{
		return $this->db->get('bookings')->num_rows();
	}

	public function countAllBlogs()
	{
		return $this->db->get('blogs')->num_rows();
	}
}
