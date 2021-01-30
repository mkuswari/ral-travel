<?php
class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('User_model');
	}

	public function index()
	{
		$data["title"] = "Kelola Users";
		$data["users"] = $this->User_model->getAllUser();
		$this->load->view("backend/users/index_view", $data);
	}

	public function create()
	{
		$data["title"] = "Tambah User Baru";

		$this->_validateCreateForm();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("backend/users/create_view", $data);
		} else {
			$name = htmlspecialchars($this->input->post("name"), true);
			$email = htmlspecialchars($this->input->post("email"), true);
			$phone = htmlspecialchars($this->input->post("phone"), true);
			$address = htmlspecialchars($this->input->post("address"), true);
			$avatar = $_FILES["avatar"];
			if ($avatar) {
				$config["allowed_types"] = "jpg|jpeg|png|bmp|gif";
				$config["max_size"] = 1024;
				$config["upload_path"] = "./assets/uploads/avatars/";
				$config["file_name"] = round(microtime(true) * 1000);
				$this->load->library("upload", $config);
				if ($this->upload->do_upload("avatar")) {
					$avatar = $this->upload->data("file_name");
				} else {
					$avatar = "default.jpg";
				}
			}
			$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
			$role = htmlspecialchars($this->input->post("role"), true);

			$userData = [
				"name" => $name,
				"email" => $email,
				"phone" => $phone,
				"address" => $address,
				"avatar" => $avatar,
				"password" => $password,
				"role" => $role
			];

			$this->User_model->insertUserData($userData);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data User berhasil ditambahkan</div>');
			redirect('kelola-users');
		}
	}

	public function update($id)
	{
		$data["title"] = "Update User";
		$data["user"] = $this->User_model->getUserById($id);

		$this->_validateUpdateForm();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("backend/users/update_view", $data);
		} else {
			$name = htmlspecialchars($this->input->post("name"), true);
			$email = htmlspecialchars($this->input->post("email"), true);
			$phone = htmlspecialchars($this->input->post("phone"), true);
			$address = htmlspecialchars($this->input->post("address"), true);
			$avatar = $_FILES["avatar"];
			if ($avatar) {
				$config["allowed_types"] = "jpg|jpeg|png|bmp|gif";
				$config["max_size"] = 1024;
				$config["upload_path"] = "./assets/uploads/avatars/";
				$config["file_name"] = round(microtime(true) * 1000);
				$this->load->library("upload", $config);
				if ($this->upload->do_upload("avatar")) {
					$user = $this->User_model->getUserById($id);
					$oldAvatar = $user["avatar"];
					if ($oldAvatar != "default.jpg") {
						unlink('./assets/uploads/avatars/' . $oldAvatar);
					}
					$newAvatar = $this->upload->data("file_name");
					$avatar = $newAvatar;
				} else {
					$user = $this->User_model->getUserById($id);
					$avatar = $user["avatar"];
				}
			}
			$role = htmlspecialchars($this->input->post("role"), true);

			$userData = [
				"name" => $name,
				"email" => $email,
				"phone" => $phone,
				"address" => $address,
				"avatar" => $avatar,
				"role" => $role
			];

			$this->User_model->updateUserData($userData);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data User berhasil diupdate</div>');
			redirect('kelola-users');
		}
	}

	public function delete($id)
	{
		$user = $this->User_model->getUserById($id);
		if (file_exists('./assets/uploads/avatars/' . $user["avatar"]) && $user["avatar"] != "default.jpg") {
			unlink('./assets/uploads/avatars/' . $user["avatar"]);
		}
		$this->User_model->deleteUserData($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Data User berhasil Dihapus</div>');
		redirect('kelola-users');
	}

	public function detail($id)
	{
		$data["title"] = "Detail User";
		$data["user"] = $this->User_model->getUserById($id);
		$this->load->view("backend/users/detail_view", $data);
	}

	// make a form validation
	private function _validateCreateForm()
	{
		$this->form_validation->set_rules("name", "Nama", "required|trim");
		$this->form_validation->set_rules("email", "E-mail", "required|trim|valid_email|is_unique[users.email]", [
			"is_unique" => "E-mail ini sudah terdaftar"
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]', [
			'min_length' => 'Password minimal harus 4 karakter'
		]);
		$this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|trim|matches[password]', [
			'matches' => 'Konfirmasi Password tidak sesuai'
		]);
	}

	private function _validateUpdateForm()
	{
		$this->form_validation->set_rules("name", "Nama", "required|trim");
		$this->form_validation->set_rules("email", "E-mail", "required|trim|valid_email");
	}
}
