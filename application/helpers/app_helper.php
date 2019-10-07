<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('dd')) {
    function dd($value)
    {
        die(var_dump($value));
    }
}

if(! function_exists('app_name')) {
    function app_name($name= '') {

        if($name != '') return $name;
        
        return getenv('APP_NAME');
    }
}