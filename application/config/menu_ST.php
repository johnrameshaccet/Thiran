<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Menu
| -------------------------------------------------------------------------
| This file lets you define navigation menu items on sidebar.
|
*/

$config['menu'] = array(

         'home' => array(
		'name'      => 'Home',
		'url'       => site_url('home'),
		'icon'      => 'fa fa-home'
	),
        'profile' => array(
		'name'      => 'Profile',
		'url'       => site_url('profile/me'),
		'icon'      => 'fa fa-male'
	),
    
	'projects' => array(
		'name'      => 'Projects',
		'url'       => site_url('projects'),
		'icon'      => 'fa fa-folder-open'
	)
);