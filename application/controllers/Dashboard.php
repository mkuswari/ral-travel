<?php
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
		is_logged_in();
		must_admin();
	}

	public function index()
	{
		$data["title"] = "Dashboard";
		$data["total_user"] = $this->Dashboard_model->countAllUsers();
		$data["total_destination"] = $this->Dashboard_model->countAllTravels();
		$data["total_booking"] = $this->Dashboard_model->countAllBookings();
		$data["total_blog"] = $this->Dashboard_model->countAllBlogs();

		$this->load->view("backend/dashboard_view", $data);
	}
}
