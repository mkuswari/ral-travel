<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Destination extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Destination_model');
		$this->load->library('form_validation');
		is_logged_in();
		must_admin();
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

		$this->_validateCreateForm();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("backend/destinations/create_view", $data);
		} else {
			$name = htmlspecialchars($this->input->post("name"), true);
			//Buat slug
			$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name); //filter karakter unik dan replace dengan kosong ('')
			$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
			$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
			$slug = $pre_slug; // tambahkan ektensi .html pada slug
			$description = $this->input->post("description");
			$images = $_FILES["images"];
			if ($images) {
				$config["allowed_types"] = "jpg|jpeg|png|bmp|gif";
				$config["max_size"] = 1024;
				$config["upload_path"] = "./assets/uploads/destinations/";
				$config["file_name"] = round(microtime(true) * 1000);
				$this->load->library("upload", $config);
				if ($this->upload->do_upload("images")) {
					$images = $this->upload->data("file_name");
				} else {
					$this->upload->display_errors();
				}
			}

			$destinationData = [
				"name" => $name,
				"slug" => $slug,
				"images" => $images,
				"description" => $description
			];

			$this->Destination_model->insertNewDestination($destinationData);
			$this->session->set_flashdata('message', 'Ditambah');
			redirect('kelola-destinasi');
		}
	}

	public function update($id)
	{
		$data["title"] = "Update Detail Destinasi";
		$data["destination"] = $this->Destination_model->getDestinationById($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view("backend/destinations/update_view", $data);
		} else {
			$name = htmlspecialchars($this->input->post("name"), true);
			//Buat slug
			$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name); //filter karakter unik dan replace dengan kosong ('')
			$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
			$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
			$slug = $pre_slug; // tambahkan ektensi .html pada slug
			$description = $this->input->post("description");
			$images = $_FILES["images"];
			if ($images) {
				$config["allowed_types"] = "jpg|jpeg|png|bmp|gif";
				$config["max_size"] = 1024;
				$config["upload_path"] = "./assets/uploads/destinations/";
				$config["file_name"] = round(microtime(true) * 1000);
				$this->load->library("upload", $config);
				if ($this->upload->do_upload("images")) {
					$destination = $this->User_model->getUserById($id);
					$oldImage = $destination["images"];
					if ($oldImage != "default.jpg") {
						unlink('./assets/uploads/destinations/' . $oldImage);
					}
					$newImage = $this->upload->data("file_name");
					$images = $newImage;
				} else {
					$destination = $this->Destination_model->getDestinationById($id);
					$images = $destination["images"];
				}
			}
		}
	}

	private function _validateCreateForm()
	{
		$this->form_validation->set_rules("name", "Nama", "required|trim");
		// $this->form_validation->set_rules("images", "Images", "required");
		$this->form_validation->set_rules("description", "Deskripsi", "required|trim");
	}
}
