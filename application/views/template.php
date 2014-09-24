<?php

if(!isset($header_data))
{ 
	$header_data = array(
	'title' => 'Thiran | A Project Driven'
	);
}

//load header, page and footer views
$this->load->view('include/header',$header_data);
$this->load->view('pages/'.$page);
$this->load->view('include/footer');