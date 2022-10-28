<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Freedy - Digital Bank";

		$this->load->view('tamplate/header', $data);
		$this->load->view('auth/index');
		$this->load->view('tamplate/footer');
	}

	public function login()
	{
		$data['title'] = "Freedy - Login";

		$this->load->view('tamplate/header', $data);
		$this->load->view('auth/login');
		$this->load->view('tamplate/footer');
	}

	public function signup()
	{
		$data['title'] = "Freedy - Signup";

		$this->load->view('tamplate/header', $data);
		$this->load->view('auth/signup');
		$this->load->view('tamplate/footer');
	}

	public function signup_notif()
	{
		$data['title'] = "Freedy - Succes Signup";

		$this->load->view('tamplate/header', $data);
		$this->load->view('auth/signup-notif');
		$this->load->view('tamplate/footer');
	}

	public function forget_pass()
	{
		$data['title'] = "Freedy - Forget Password";

		$this->load->view('tamplate/header', $data);
		$this->load->view('auth/forget-pass');
		$this->load->view('tamplate/footer');
	}
}