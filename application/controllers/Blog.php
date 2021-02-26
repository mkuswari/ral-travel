<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
		$this->load->library('form_validation');
		is_logged_in();
		must_admin();
	}

	public function index()
	{
		$data["title"] = "Kelola Artikel Blog";
		$data["blogs"] = $this->Blog_model->getAllBlogs();

		$this->load->view('backend/blogs/index_view', $data);
	}

	public function create()
	{
		$data["title"] = "Tambah Artikel";
		$data["categories"] = $this->Blog_model->getAllCategories();

		$this->_validateOnCreate();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('backend/blogs/create_view', $data);
		} else {
			$title = $this->input->post('title');
			//Buat slug
			$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
			$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
			$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
			$slug = $pre_slug; // tambahkan ektensi .html pada slug
			$thumbnail = $_FILES["thumbnail"];
			if ($thumbnail) {
				$config["allowed_types"] = "jpg|jpeg|png|bmp|gif";
				$config["max_size"] = 1024;
				$config["upload_path"] = "./assets/uploads/blogs/";
				$config["file_name"] = round(microtime(true) * 1000);
				$this->load->library("upload", $config);
				if ($this->upload->do_upload("thumbnail")) {
					$thumbnail = $this->upload->data("file_name");
				} else {
					$this->upload->display_errors();
				}
			}
			$content = $this->input->post("content");
			$author = $this->input->post("author");
			$category_id = $this->input->post("category_id");

			$postData = [
				"title" => $title,
				"slug" => $slug,
				"thumbnail" => $thumbnail,
				"content" => $content,
				"author" => $author,
				"category_id" => $category_id
			];

			$this->Blog_model->addNewArticle($postData);
			$this->session->set_flashdata('message', 'Ditambah');
			redirect('kelola-blog');
		}
	}

	public function update($id)
	{
		$data["title"] = "Update Artikel";
		$data["blog"] = $this->Blog_model->getBlogById($id);
		$data["categories"] = $this->Blog_model->getAllCategories();

		$this->_validateOnUpdate();
		if ($this->form_validation->run()  == FALSE) {
			$this->load->view("backend/blogs/update_view", $data);
		} else {
			$title = $this->input->post("title");
			//Buat slug
			$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
			$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
			$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
			$slug = $pre_slug; // tambahkan ektensi .html pada slug
			$thumbnail = $_FILES["thumbnail"];
			if ($thumbnail) {
				$config["allowed_types"] = "jpg|jpeg|png|bmp|gif";
				$config["max_size"] = 1024;
				$config["upload_path"] = "./assets/uploads/blogs/";
				$config["file_name"] = round(microtime(true) * 1000);
				$this->load->library("upload", $config);
				if ($this->upload->do_upload("thumbnail")) {
					$thumbnail = $this->upload->data("file_name");
				} else {
					$blog = $this->Blog_model->getBlogById($id);
					$thumbnail = $blog["thumbnail"];
					// $this->upload->display_errors();
				}
			}
			$content = $this->input->post("content");
			$author = $this->input->post("author");
			$category_id = $this->input->post("category_id");

			$postData = [
				"title" => $title,
				"slug" => $slug,
				"thumbnail" => $thumbnail,
				"content" => $content,
				"author" => $author,
				"category_id" => $category_id
			];

			$this->Blog_model->updateArticle($postData);
			$this->session->set_flashdata('message', 'Diupdate');
			redirect('kelola-blog');
		}
	}

	public function delete($id)
	{
		$blog = $this->Blog_model->getBlogById($id);
		if (file_exists('./assets/uploads/blogs/' . $blog["thumbnail"]) && $blog["thumbnail"] != "default.jpg") {
			unlink('./assets/uploads/blogs/' . $blog["thumbnail"]);
		}
		$this->Blog_model->deleteBlog($id);
		$this->session->set_flashdata('message', 'Dihapus');
		redirect('kelola-blog');
	}

	private function _validateOnCreate()
	{
		$this->form_validation->set_rules('title', 'Judul', 'required');
		$this->form_validation->set_rules('category_id', 'Kategori', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
	}

	private function _validateOnUpdate()
	{
		$this->form_validation->set_rules('title', 'Judul', 'required');
		$this->form_validation->set_rules('category_id', 'Kategori', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
	}
}
