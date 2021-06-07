<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Payment_model');
		is_logged_in();
		must_admin();
	}

	public function  index()
	{
		$data["title"] = "Kelola Konfirmasi Pembayaran";
		$data["payments"] =  $this->Payment_model->getAllPayments();

		$this->load->view("backend/payments/index_view", $data);
	}

	public function changePaymentStatus($id)
	{
		$data["title"] = "Update Status Pembayaran";
		$data["payment"] = $this->Payment_model->getPaymentById($id);

		$this->load->view("backend/payments/changestatus_view", $data);
	}

	public function actionChangePaymentStatus($id)
	{
		$paymentStatus = $this->input->post("status");

		$this->db->set("status", $paymentStatus);
		$this->db->where("id_payment_confirmation", $id);
		$this->db->update("payment_confirmations");
		$this->session->set_flashdata('message', 'Diupdate');
		redirect('kelola-pembayaran');
	}
}
