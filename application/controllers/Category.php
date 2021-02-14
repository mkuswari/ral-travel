<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
	}

	public function index()
	{
		$data["title"] = "Kelola Kategori";

		$this->load->view("backend/categories/index_view", $data);
	}

	public function ajaxList()
	{
		$list = $this->Category_model->getDatatables();
		$data = array();
		$no = $_POST['start'];
		$i = 1;
		foreach ($list as $category) {
			$no++;
			$row = array();
			$row[] = $i++;
			$row[] = $category->name;
			$row[] = $category->slug;
			$row[] = $category->created_at;
			$row[] = $category->updated_at;

			$row[] = '<a class="btn btn-icon btn-warning" href="javascript:void(0)" title="Edit" onclick="editCategory(' . "'" . $category->id . 			"'" . ')"><i class="fas fa-edit"></i></a>
				  <a class="btn btn-icon btn-danger" href="javascript:void(0)" title="Hapus" onclick="deleteCategory(' . "'" . $category->id . "'" . ')"><i class="fas fa-trash"></i></a>';

			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST["draw"],
			"recordsTotal" => $this->Category_model->countAll(),
			"recordsFiltered" => $this->Category_model->countFiltered(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function ajaxEdit($id)
	{
		$data = $this->Category_model->getById($id);
		echo json_encode($data);
	}

	public function ajaxAdd()
	{
		$this->_validate();
		$name = htmlspecialchars($this->input->post("name", true));
		//Buat slug
		$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name); //filter karakter unik dan replace dengan kosong ('')
		$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
		$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
		$slug = $pre_slug; // tambahkan ektensi .html pada slug

		$data = array(
			"name" => $name,
			"slug" => $slug,
		);

		$this->Category_model->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajaxUpdate()
	{
		$this->_validate();
		$name = htmlspecialchars($this->input->post("name", true));
		//Buat slug
		$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name); //filter karakter unik dan replace dengan kosong ('')
		$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
		$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
		$slug = $pre_slug; // tambahkan ektensi .html pada slug

		$data = array(
			"name" => $name,
			"slug" => $slug,
		);
		$this->Category_model->update(array("id" => $this->input->post("id")), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajaxDelete($id)
	{
		$this->Category_model->deleteById($id);
		echo json_encode("status", TRUE);
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if ($this->input->post('name') == '') {
			$data['inputerror'][] = 'name';
			$data['error_string'][] = 'Nama Kategori harus diisi';
			$data['status'] = FALSE;
		}
	}
}
