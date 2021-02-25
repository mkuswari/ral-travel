<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{

	public function getAllCategories()
	{
		return $this->db->get("categories")->result_array();
	}

	public function deleteCategory($id)
	{
		$this->db->where("category_id", $id);
		$this->db->delete("categories");
	}

	public function addNewCategory($categoryData)
	{
		$this->db->insert("categories", $categoryData);
	}

	public function getCategoryById($id)
	{
		return $this->db->get_where("categories", ["category_id" => $id])->row_array();
	}

	public function updateCategory($categoryData)
	{
		$this->db->set("name", $categoryData["name"]);
		$this->db->set("slug", $categoryData["slug"]);
		$this->db->where("category_id", $this->input->post("category_id"));
		$this->db->update("categories", $categoryData);
	}
}
