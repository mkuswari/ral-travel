<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
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

	public function bookingWisata()
	{
		$data["title"] = "Booking Information";

		$this->load->view('pages/booking_view', $data);
	}
}
