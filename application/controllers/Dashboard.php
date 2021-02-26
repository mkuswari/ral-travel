<?php
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		must_admin();
	}

	public function index()
	{
		$data["title"] = "Dashboard";
		$this->load->view("backend/dashboard_view", $data);
	}
}
