<?php include_once APPPATH.'middlewares/Middleware.php';

class SignIn extends Middleware {

	protected $redirect_to = '/home';

	public function __construct($options = []) {
		
		parent::__construct($options);
	}

	public function execute() {


		if(authenticated()) {

			redirect($redirect_to);

		}

		return;
	}

}



 ?>