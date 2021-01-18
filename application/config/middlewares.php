<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['middlewares'] = array(
	'authenticated' => 'middlewares/Authenticated',
	'signin' => 'middlewares/SignIn'
);