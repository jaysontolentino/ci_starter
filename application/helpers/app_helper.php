<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

if (!function_exists('dd')) {
	function dd($value) {
		echo '<pre>';
		die(var_dump($value));
		echo '</pre>';
	}
}

if (!function_exists('app_name')) {
	function app_name($name = '') {

		if ($name != '') {
			return $name;
		}

		return getenv('APP_NAME');
	}
}

if (!function_exists('authenticated')) {
	function authenticated() {
		$ci =& get_instance();
		return $ci->session->user_data ? TRUE : FALSE;
	}
}


if (!function_exists('auth')) {

	function auth() {

		$ci =& get_instance();

		return (object) $ci->session->user_data;
	}
}


if (!function_exists('alert')) {
	function alert($type = 'success', $name = '') {

		$ci =& get_instance();
		$className = "alert-{$type}"; 

		if($type == 'error') {
			$className = 'alert-danger';
		}

		if($message = $ci->session->flashdata($name)) {
			return "<div class='alert {$className} mt-4' role='alert'>
			{$message}
			</div>";
		}

		return;
	}
}