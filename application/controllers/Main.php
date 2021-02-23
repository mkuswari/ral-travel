<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["title"] = "Temukan Beragam Paket Wisata sesuai dengan kebutuhan anda";
		$data["travels"] = $this->Main_model->getNewTravel();
		$this->load->view('landing_view', $data);
	}

	public function travelCatalog()
	{
		$data["title"] = "Katalog Paket Wisata";
		$data["travels"] = $this->Main_model->getAllTravels();

		$this->load->view('pages/catalogs_view', $data);
	}

	public function detail($slug)
	{
		$getTitle = $this->Main_model->getTitleBySlug($slug);
		$data["title"] = $getTitle["name"];
		$data["travel"] = $this->Main_model->getTravelBySlug($slug);
		$data["travels"] = $this->Main_model->getOtherTravel();

		$this->load->view('pages/detail_view', $data);
	}

	public function bookingTravel($id)
	{
		$data["title"] = "Booking Information";
		$data["travel"] = $this->Main_model->getTravelById($id);
		$data["duration"] = $this->input->post("duration");
		$data["travel_date"] = $this->input->post("travel_date");

		$this->load->view('pages/booking_view', $data);
	}

	public function processBooking($id)
	{
		$data["title"] = "Proses Booking Wisata";
		$data["travel"] = $this->Main_model->getTravelById($id);
		$data["duration"] = $this->input->post("duration");
		$data["travel_date"] = $this->input->post("travel_date");

		$this->_validateOnBooking();
		if ($this->form_validation->run() == false) {
			$this->load->view('pages/booking_view', $data);
		} else {
			$bookingCode = uniqid();
			$name = $this->input->post("name");
			$email = $this->input->post("email");
			$phone = $this->input->post("phone");
			$duration = $this->input->post("duration");
			$totalPayment = $this->input->post("total_payment");
			$travelDate = $this->input->post("travel_date");
			$userId = $this->input->post("user_id");
			$travelId = $this->input->post("travel_id");

			$bookingData = [
				"booking_code" => $bookingCode,
				"name" => $name,
				"email" => $email,
				"phone" => $phone,
				"duration" => $duration,
				"total_payment" => $totalPayment,
				"travel_date" => $travelDate,
				"user_id" => $userId,
				"travel_id" => $travelId
			];

			$this->Main_model->addNewBooking($bookingData);
			redirect('konfirmasi-pembayaran/' . $bookingCode);
		}
	}


	public function paymentConfirmation($bookingCode)
	{
		$data["title"] = "Halaman Pembayaran";
		$data["booking"] = $this->Main_model->getBookingByCode($bookingCode);

		$this->_validateOnConfirmPayment();
		if ($this->form_validation->run() == false) {
			$this->load->view("pages/payment_view", $data);
		} else {
			$booking_id = $this->input->post("booking_id");
			$transfer_slip = $_FILES["transfer_slip"];
			if ($transfer_slip) {
				$config["allowed_types"] = "jpg|jpeg|png|bmp|gif";
				$config["max_size"] = 1024;
				$config["upload_path"] = "./assets/uploads/transfers_slip/";
				$config["file_name"] = round(microtime(true) * 1000);
				$this->load->library("upload", $config);
				if ($this->upload->do_upload("transfer_slip")) {
					$transfer_slip = $this->upload->data("file_name");
				} else {
					$transfer_slip = "default.jpg";
				}
			}
			$origin_bank = $this->input->post("origin_bank");
			$sender_name = $this->input->post("sender_name");

			$paymentData = [
				"booking_id" => $booking_id,
				"transfer_slip" => $transfer_slip,
				"origin_bank" => $origin_bank,
				"sender_name" => $sender_name
			];

			$this->Main_model->addConfirmPayment($paymentData);
			redirect('pembayaran-berhasil');
		}
	}

	public function paymentSucessfully()
	{
		$data["title"] = "Pembayaran Berhasil";

		$this->load->view("pages/payment_success_view", $data);
	}

	private function _validateOnConfirmPayment()
	{
		$this->form_validation->set_rules('origin_bank', 'Asal Bank', 'required');
		$this->form_validation->set_rules('sender_name', 'Nama Pengirim', 'required');
	}

	private function _validateOnBooking()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required|trim');
		$this->form_validation->set_rules('duration', 'Durasi', 'required|trim');
		$this->form_validation->set_rules('travel_date', 'Tanggal Traveling', 'required');
	}
}
