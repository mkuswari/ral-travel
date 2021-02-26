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
		$this->db->limit(8);
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

	public function addNewTestimonial($testimonialData)
	{
		$this->db->insert("testimonials", $testimonialData);
	}

	public function getNewTestimonials()
	{
		$this->db->limit(3);
		$this->db->select("*");
		$this->db->from('testimonials');
		$this->db->join("users", "users.user_id = testimonials.user_id");
		return $this->db->get()->result_array();
	}

	public function getAllTestimonials()
	{
		$this->db->select("*");
		$this->db->from('testimonials');
		$this->db->join("users", "users.user_id = testimonials.user_id");
		return $this->db->get()->result_array();
	}

	public function getLatestBlog()
	{
		$this->db->limit(3);
		return $this->db->get("blogs")->result_array();
	}

	public function getAllBlogs()
	{
		return $this->db->get("blogs")->result_array();
	}

	public function getBlogBySlug($slug)
	{
		// $this->db->select("*");
		// $this->db->from('blogs');
		// $this->db->where("slug", $slug);
		// $this->db->join("categories", "categories.category_id = blogs.category_id");
		// return $this->db->get()->row_array();
		return $this->db->get_where("blogs", ["slug" => $slug])->row_array();
	}
}
