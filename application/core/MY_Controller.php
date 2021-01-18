<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $middlewares;

	public function __construct() {

		parent::__construct();

		$this->load->config('middlewares');

		$this->middlewares = $this->config->item('middlewares');

	}

	protected function middleware($middleware, $options = []) {

		//get all middleware files
		//check if is in the middleware alias arrays

		if(array_key_exists($middleware, $this->middlewares)) {

			$filename = $this->middlewares[$middleware];

			$className = explode('/', $filename)[1];

			include_once APPPATH.$filename.'.php';

			$m = new $className($options);

			$m->run();

		} else {

			$message = 'Access Forbidden!';
			
			$statusCode = 403;

			show_error($message, $statusCode);
		}

	}
}
