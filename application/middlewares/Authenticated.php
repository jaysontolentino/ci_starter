<?php include_once APPPATH.'middlewares/Middleware.php';

class Authenticated extends Middleware {

	protected $redirect_to = '/signin';

	public function __construct($options = []) {

		parent::__construct($options);
	}

	public function execute() {

		if(!authenticated()) {

			redirect($this->redirect_to);

		}

		return;
	}

}



 ?>