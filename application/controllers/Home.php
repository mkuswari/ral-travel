<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] = "Akun Saya";
		$this->load->view("frontend/home_view", $data);
	}
}
