<?php
class Dashboard extends CI_Controller
{

	public function index()
	{
		$data["pageTitle"] = "Dashboard";
		$this->load->view("backend/dashboard_view", $data);
	}
}
