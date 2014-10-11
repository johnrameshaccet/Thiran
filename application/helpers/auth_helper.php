<?php

/**
 * Helper class to handle authentication
 */

// Generate random password (e.g. for newly created user)
function random_pw($length = 10)
{
	$CI =& get_instance();
	$CI->load->helper('string');
	return random_string('alnum', $length);
}


// Verify password
function verify_pw($plain_pw, $hashed_pw)
{
	// (optional) change logic here for different hash algorithm
    if(md5($plain_pw)==$hashed_pw)
    { return true;}
    else
    {  return false;}
}

// Activation / Forgot Password code
function generate_unique_code()
{
	$CI =& get_instance();
	$CI->load->helper('string');
	return random_string('unique');
}

// Store user data to session
function login_user($user)
{
	$CI =& get_instance();
	$CI->session->set_userdata('thiran_user', $user);
        $CI->session->set_userdata(array( 'is_logged_in' =>"valid"));
}

// Get user data from session
function get_user()
{
	$CI =& get_instance();
	return $CI->session->userdata('thiran_user');
}

// Partially update user data in current session
function refresh_user($data)
{
	$CI =& get_instance();
	$user = get_user();
	foreach ($data as $key => $value)
	{
		$user[$key] = $value;
	}

	// store updated users to session
	$CI->session->set_userdata('thiran_user', $user);
}

// Destroy user data from session
function logout_user()
{
	$CI =& get_instance();
	$CI->session->unset_userdata('thiran_user');
        $CI->session->sess_destroy();
}

// Verify login user role(s)
// [Optional] if $target_user is not set, will check from user data stored in session
function verify_role($role, $target_user = NULL)
{
	$user = empty($target_user) ? get_user() : $target_user;

	if ( !empty($user) && !empty($user['role']) )
	{
		if ( is_string($role) )
			return $user['role'] == $role;
		else if ( is_array($role) )
			return in_array($user['role'], $role);
	}

	return FALSE;
}

function set_table($val)
{
    $CI =& get_instance();
	$CI->session->set_userdata('table_name', $val);
}

function get_table()
{
	$CI =& get_instance();
	$name = $CI->session->userdata('table_name');
        return $name;
}