<?php
class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Auth_model');
	}

	public function index()
	{
		$data["pageTitle"] = "Login";

		$this->_loginFormValidation();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("auth/login_view", $data);
		} else {
			$this->_loginAction();
		}
	}

	private function _loginAction()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$userData = $this->db->get_where("users", ["email" => $email])->row_array();
		if ($userData) {
			if (password_verify($password, $userData["password"])) {
				$setUserData = [
					"id" => $userData["id"],
					"name" => $userData["name"],
					"email" => $userData["email"],
					"phone" => $userData["phone"],
					"address" => $userData["address"],
					"avatar" => $userData["avatar"],
					"role" => $userData["role"],
					"created_at" => $userData["created_at"]
				];
				$this->session->set_userdata($setUserData);
				if ($setUserData["role"] == "admin") {
					redirect("dashboard");
				} else {
					redirect("home");
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Password yang kamu masukkan salah</div>');
				redirect("login");
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">E-mail kamu belum terdaftar</div>');
			redirect("login");
		}
	}

	public function register()
	{
		$data["pageTitle"] = "Register";

		$this->__registerFormValidation();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("auth/register_view", $data);
		} else {
			$name = htmlspecialchars($this->input->post("name", true));
			$email = htmlspecialchars($this->input->post("email", true));
			$avatar = "default.jpg";
			$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);

			// set data
			$userData = [
				"name" => $name,
				"email" => $email,
				"avatar" => $avatar,
				"password" => $password,
			];

			$this->Auth_model->userRegistration($userData);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Register! Silahkan Login</div>');
			redirect("login");
		}
	}

	private function _loginFormValidation()
	{
		$this->form_validation->set_rules("email", "E-mail", "required|trim|valid_email");
		$this->form_validation->set_rules("password", "Password", "required");
	}

	private function __registerFormValidation()
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
}
