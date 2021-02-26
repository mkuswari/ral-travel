<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Travel extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Travel_model');
		$this->load->library('form_validation');
		is_logged_in();
		must_admin();
	}

	public function index()
	{
		$data["title"] = "Kelola Paket Wisata";
		$data["travels"] = $this->Travel_model->getAllTravels();

		$this->load->view("backend/travels/index_view", $data);
	}

	public function create()
	{
		$data["title"] = "Tambah Paket Wisata";

		$this->_formValidationRules();
		if ($this->form_validation->run() == false) {
			$this->load->view("backend/travels/create_view", $data);
		} else {
			$name = htmlspecialchars($this->input->post("name"), true);
			//Buat slug
			$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name); //filter karakter unik dan replace dengan kosong ('')
			$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
			$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
			$slug = $pre_slug; // tambahkan ektensi .html pada slug
			$images = $_FILES["images"];
			if ($images) {
				$config["allowed_types"] = "jpg|jpeg|png|bmp|gif";
				$config["max_size"] = 1024;
				$config["upload_path"] = "./assets/uploads/travels/";
				$config["file_name"] = round(microtime(true) * 1000);
				$this->load->library("upload", $config);
				if ($this->upload->do_upload("images")) {
					$images = $this->upload->data("file_name");
				} else {
					$this->upload->display_errors();
				}
			}
			$location = htmlspecialchars($this->input->post("location"), true);
			$description = $this->input->post("description");
			$price = $this->input->post("price");

			$travelData = [
				"name" => $name,
				"slug" => $slug,
				"images" => $images,
				"location" => $location,
				"description" => $description,
				"price" => $price
			];

			$this->Travel_model->insertNewTravel($travelData);
			$this->session->set_flashdata('message', 'Ditambah');
			redirect('kelola-wisata');
		}
	}

	public function update($id)
	{
		$data["title"] = "Update Data Wisata";
		$data["travel"] = $this->Travel_model->getTravelById($id);

		$this->_formValidationRules();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("backend/travels/update_view", $data);
		} else {
			$name = htmlspecialchars($this->input->post("name"), true);
			//Buat slug
			$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name); //filter karakter unik dan replace dengan kosong ('')
			$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
			$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
			$slug = $pre_slug; // tambahkan ektensi .html pada slug
			$images = $_FILES["images"];
			if ($images) {
				$config["allowed_types"] = "jpg|jpeg|png|bmp|gif";
				$config["max_size"] = 1024;
				$config["upload_path"] = "./assets/uploads/travels/";
				$config["file_name"] = round(microtime(true) * 1000);
				$this->load->library("upload", $config);
				if ($this->upload->do_upload("images")) {
					$travel = $this->Travel_model->getTravelById($id);
					$oldimages = $travel["images"];
					if ($oldimages != "default.jpg") {
						unlink('./assets/uploads/travels/' . $oldimages);
					}
					$newimages = $this->upload->data("file_name");
					$images = $newimages;
				} else {
					$travel = $this->Travel_model->getTravelById($id);
					$images = $travel["images"];
				}
			}
			$location = htmlspecialchars($this->input->post("location"), true);
			$description = $this->input->post("description");
			$price = $this->input->post("price");

			$travelData = [
				"name" => $name,
				"slug" => $slug,
				"images" => $images,
				"location" => $location,
				"description" => $description,
				"price" => $price
			];

			$this->Travel_model->updateTravelData($travelData);
			$this->session->set_flashdata('message', 'Diubah');
			redirect('kelola-wisata');
		}
	}

	public function delete($id)
	{
		$travel = $this->Travel_model->getTravelById($id);
		if (file_exists('./assets/uploads/travels/' . $travel["images"]) && $travel["images"] != "default.jpg") {
			unlink('./assets/uploads/travels/' . $travel["images"]);
		}
		$this->Travel_model->deleteTravelData($id);
		$this->session->set_flashdata('message', 'Dihapus');
		redirect('kelola-wisata');
	}

	private function _formValidationRules()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('location', 'Lokasi', 'required|trim');
		$this->form_validation->set_rules('price', 'Harga', 'required');
	}
}
