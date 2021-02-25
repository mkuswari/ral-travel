<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Testimonial_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["title"] = "Kelola Testimoni";
		$data["testimonials"] = $this->Testimonial_model->getAllTestimonials();

		$this->load->view("backend/testimonials/index_view", $data);
	}

	public function create()
	{
		$data["title"] = "Tambah Testimoni";
		$data["users"] = $this->Testimonial_model->getAllUsers();

		$this->form_validation->set_rules('user_id', 'User', 'required');
		$this->form_validation->set_rules('content', 'Testimoni', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("backend/testimonials/create_view", $data);
		} else {
			$userId = $this->input->post("user_id");
			$content = $this->input->post("content");

			$testimonialData = [
				"user_id" => $userId,
				"content" => $content
			];

			$this->Testimonial_model->addNewtestimonial($testimonialData);
			$this->session->set_flashdata('message', 'Ditambah');
			redirect('kelola-testimoni');
		}
	}

	public function update($id)
	{
		$data["title"] = "Update Testimonial";
		$data["users"] = $this->Testimonial_model->getAllUsers();
		$data["testimonial"] = $this->Testimonial_model->getTestimonialById($id);

		$this->form_validation->set_rules('user_id', 'User', 'required');
		$this->form_validation->set_rules('content', 'Testimoni', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("backend/testimonials/update_view", $data);
		} else {
			$userId = $this->input->post("user_id");
			$content = $this->input->post("content");

			$testimonialData = [
				"user_id" => $userId,
				"content" => $content
			];

			$this->Testimonial_model->updateTestimonial($testimonialData);
			$this->session->set_flashdata('message', 'Diubah');
			redirect('kelola-testimoni');
		}
	}

	public function delete($id)
	{
		$this->Testimonial_model->deleteTestimonial($id);
		$this->session->set_flashdata('message', 'Dihapus');
		redirect('kelola-testimoni');
	}
}
