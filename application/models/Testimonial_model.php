<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial_model extends CI_Model
{

	public function getAllTestimonials()
	{
		$this->db->select('*');
		$this->db->from('testimonials');
		$this->db->join('users', 'users.user_id = testimonials.user_id');
		return $this->db->get()->result_array();
	}

	public function deleteTestimonial($id)
	{
		$this->db->where("testimonial_id", $id);
		$this->db->delete("testimonials");
	}

	public function getAllUsers()
	{
		return $this->db->get("users")->result_array();
	}

	public function addNewTestimonial($testimonialData)
	{
		$this->db->insert("testimonials", $testimonialData);
	}

	public function getTestimonialById($id)
	{
		return $this->db->get_where("testimonials", ["testimonial_id" => $id])->row_array();
	}

	public function updateTestimonial($testimonialData)
	{
		$this->db->set("user_id", $testimonialData["user_id"]);
		$this->db->set("content", $testimonialData["content"]);
		$this->db->where("testimonial_id", $this->input->post("testimonial_id"));
		$this->db->update("testimonials", $testimonialData);
	}
}
