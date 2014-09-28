<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends MY_Controller
{
public function logout()
	{
		logout_user();
		redirect('welcome');
	}
}