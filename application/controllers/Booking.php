<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Booking_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["title"] = "Kelola Data Booking";
		$data["bookings"] = $this->Booking_model->getAllBookings();

		$this->load->view("backend/bookings/index_view", $data);
	}

	public function detail($id)
	{
		$data["title"] = "Detail Informasi Booking";
		$data["booking"] = $this->Booking_model->getBookingDetail($id);
		$data["payment"] = $this->Booking_model->getPaymentInfo($id);

		$this->load->view("backend/bookings/detail_view", $data);
	}

	public function delete($id)
	{
		$payment = $this->Booking_model->getPaymentInfo($id);
		if (file_exists('./assets/uploads/transfers_slip/' . $payment["transfer_slip"]) && $payment["transfer_slip"] != "default.jpg") {
			unlink('./assets/uploads/transfers_slip/' . $payment["transfer_slip"]);
		}

		$this->Booking_model->deleteBooking($id);
		$this->session->set_flashdata('message', 'Dihapus');
		redirect('kelola-booking');
	}
}
