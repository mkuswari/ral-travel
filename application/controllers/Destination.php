<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Destination extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Destination_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["title"] = "Kelola Destinasi Wisata";
		$data["destinations"] = $this->Destination_model->getAll();

		$this->load->view("backend/destinations/index_view", $data);
	}

	public function create()
	{
		$data["title"] = "Tambah Data Destinasi";

		$this->load->view("backend/destinations/create_view", $data);
	}
}
