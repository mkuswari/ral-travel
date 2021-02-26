<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
	public function getAllBlogs()
	{
		$this->db->select('blogs.*, categories.name AS category_name');
		$this->db->from("blogs");
		$this->db->join("categories", "categories.category_id = blogs.category_id");
		return $this->db->get()->result_array();
	}

	public function getAllCategories()
	{
		return $this->db->get("categories")->result_array();
	}

	public function addNewArticle($postData)
	{
		$this->db->insert("blogs", $postData);
	}

	public function getBlogById($id)
	{
		$this->db->select('blogs.*, categories.name AS category_name');
		$this->db->from("blogs");
		$this->db->join("categories", "categories.category_id = blogs.category_id");
		$this->db->where("blog_id", $id);
		return $this->db->get()->row_array();
	}

	public function deleteBlog($id)
	{
		$this->db->where("blog_id", $id);
		$this->db->delete("blogs");
	}

	public function updateArticle($postData)
	{
		$this->db->set("title", $postData["title"]);
		$this->db->set("slug", $postData["slug"]);
		$this->db->set("thumbnail", $postData["thumbnail"]);
		$this->db->set("content", $postData["content"]);
		$this->db->set("author", $postData["author"]);
		$this->db->set("category_id", $postData["category_id"]);
		$this->db->where("blog_id", $this->input->post("blog_id"));
		$this->db->update("blogs", $postData);
	}
}
