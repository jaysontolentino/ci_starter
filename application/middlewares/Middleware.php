<?php 

class Middleware {

	protected $ci;

	protected $options;

	protected $requestedMethod;

	public function __construct($options) {

		$this->ci =& get_instance();

		$this->requestedMethod = $this->ci->router->fetch_method();

		$this->options = $options;
	}

	protected function execute() {

		$message = 'Something went wrong!';

		$statusCode = 403;

		show_error($message, $statusCode);
	}


	public function run() {

		//run middleware here ...
		$exceptions = [];

		if(isset($this->options['except'])) {

			$exceptions = $this->options['except'];

		}
		
		if(!in_array($this->requestedMethod, $exceptions)) {

			// invoke the execute method from custom middleware ...
			$this->execute();
			
		}
		
	}

}
