<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Auth {
	protected $CI;

	function __construct () {
		//Get CI instance for later use.
		$this->CI=&get_instance();
	}
	
	function is_logged_in() {
		//Check if user is logged in. Returns true or false

		$is_logged_in = $this->CI->session->userdata('is_logged_in');
		//$facebook_uid =  $this->CI->session->userdata('facebook_uid');
		if (!isset($is_logged_in) || $is_logged_in != "valid" )
                {
			return "invalid";
                }else{
		return "valid";
                }
	}

	
	function logout() {
		//Destroy CI and PHP sessions.
		//This does not logout the user from Facebook.
		$this->CI->session->sess_destroy();
		session_destroy();

		//Redirect to home page.
		redirect('welcome');
	}
}