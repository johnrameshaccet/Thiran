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
    
	'projects' => array(
		'name'      => 'Projects',
		'url'       => site_url('projects'),
		'icon'      => 'fa fa-folder-open'
	),
        
        'tasks' => array(
		'name'      => 'ToDo & Timeline',
		'url'       => site_url('tasks'),
		'icon'      => 'fa fa-tasks'
	),
	'profile' => array(
		'name'      => 'Profile',
		'url'       => site_url('profile/me'),
		'icon'      => 'fa fa-male'
	),
    'help' => array(
		'name'      => 'Help',
		'url'       => site_url(),
		'icon'      => 'fa fa-info'
	)
);