<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends MY_Controller {

	
	public function __construct() {

		parent::__construct();

		$this->middleware('signin', ['except' => ['post_signout']]);
		
	}

	public function index() {
		
		dd($this->session->userdata);

	}

	public function get_signin() {
		
		$data['title'] = 'EFI Truckscale Admin | Sign In';

		$data['content_view'] = 'views/pages/auth/signin.php';

		$this->load->view('layouts/app', $data);

	}

	public function post_signin() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');


		if($admin = $this->admin->check_credentials($username, $password)) {

			$this->setSession($admin);

			$this->session->set_flashdata('signin_success', "Welcome, {$username}");

			redirect('dashboard');
			
		} else {

			$this->session->set_flashdata('signin_failed', 'Invalid credentials.');

			redirect('signin');
		}

	}


	public function post_signout() {

		$this->session->set_flashdata('signout_success', 'You\'re successfully logged out!');

		$this->session->unset_userdata('user_data');

		redirect('signin');

	}


	private function setSession($data) {

		$this->session->set_userdata([
			'user_data' => [
				'isAuthenticated' => TRUE,
				'name' => $data->name,
				'username' => $data->username
			]
		]);

	}

}
