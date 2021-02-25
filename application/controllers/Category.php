<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["title"] = "Kelola Kategori";
		$data["categories"] = $this->Category_model->getAllCategories();

		$this->load->view("backend/categories/index_view", $data);
	}

	public function create()
	{
		$data["title"] = "Tambah Kategori Baru";

		$this->form_validation->set_rules('name', 'Nama kategori', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view("backend/categories/create_view", $data);
		} else {
			$name = $this->input->post("name");
			//Buat slug
			$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name); //filter karakter unik dan replace dengan kosong ('')
			$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
			$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
			$slug = $pre_slug; // tambahkan ektensi .html pada slug

			$categoryData = [
				"name" => $name,
				"slug" => $slug
			];

			$this->Category_model->addNewCategory($categoryData);
			$this->session->set_flashdata('message', 'Ditambah');
			redirect('kelola-kategori');
		}
	}

	public function update($id)
	{
		$data["title"] = "Update Kategori";
		$data["category"] = $this->Category_model->getCategoryById($id);

		$this->form_validation->set_rules('name', 'Nama kategori', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view("backend/categories/update_view", $data);
		} else {
			$name = $this->input->post("name");
			//Buat slug
			$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name); //filter karakter unik dan replace dengan kosong ('')
			$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
			$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
			$slug = $pre_slug; // tambahkan ektensi .html pada slug

			$categoryData = [
				"name" => $name,
				"slug" => $slug
			];

			$this->Category_model->updateCategory($categoryData);
			$this->session->set_flashdata('message', 'Diubah');
			redirect('kelola-kategori');
		}
	}

	public function delete($id)
	{
		$this->Category_model->deleteCategory($id);
		$this->session->set_flashdata('message', 'Dihapus');
		redirect('kelola-kategori');
	}
}
