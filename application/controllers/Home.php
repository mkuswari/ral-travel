<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->library('form_validation');
		is_logged_in();
	}

	public function index()
	{
		$data["title"] = "Akun Saya";
		$data["bookings"] = $this->Home_model->getAllBookings();

		$this->load->view("frontend/home_view", $data);
	}

	public function detail($id)
	{
		$data["title"] = "Detail Data Bookings";
		$data["booking"] = $this->Home_model->getBookingById($id);

		var_dump($data["booking"]);
		die;
		// $this->load->view("frontend/booking_detail_view", $data);
	}
}
