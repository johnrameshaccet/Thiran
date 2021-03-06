<?php

/**
 * Helper class with shortcut functions to lookup URL
 */

// location of public asset folder
function asset_url()
{
	 return base_url().'assets/';
}

// location of uploaded files, normally managed from backend system
function upload_url($path)
{
	return base_url('assets/uploads/'.$path);
}

// location of post-processed assets (e.g. combined CSS / JS files)
function dist_url($path)
{
	return base_url('assets/dist/'.$path);
}

// location of post-processed images (i.e. optimized via Grunt)
function image_url($path)
{
	return base_url('assets/dist/images/'.$path);	
}