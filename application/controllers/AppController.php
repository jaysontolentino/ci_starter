<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AppController extends MY_Controller {

	public function __construct() {

		parent::__construct();

		$this->middleware('authenticated');

	}

	public function index() {

		$data['content_view'] = 'views/pages/dashboard.php';

		$this->load->view('layouts/app', $data);
	}

	public function about() {

		$data['content_view'] = 'views/pages/about.php';

		$this->load->view('layouts/app', $data);

	}
}
