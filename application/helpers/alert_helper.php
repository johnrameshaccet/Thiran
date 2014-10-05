<?php

/**
 * Helper class to handle alerts
 */

// Alert box
function alert_box()
{
	$alert = get_alert();
	
	if ( !empty($alert) )
	{
		$type = $alert['type'];
                $icon = $alert['icon'];
		$msg = $alert['msg'];
		return "<div class='alert alert-$type' style='margin-left:0'><i class='fa fa-$icon'></i><button style='margin-top:0px' type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>$msg</div>";
	}
}

// Callout box
// Remark: AdminLTE has no styling for "success" type
function callout_box()
{
	$alert = get_alert();

	if ( !empty($alert) )
	{
		$type = $alert['type'];
		$msg = $alert['msg'];
		$title = empty($alert['title']) ? '' : "<h4>".$alert['title']."</h4>";
		return "<div class='callout callout-$type'>$title<p>$msg</p></div>";
	}
}

// Save to flashdata
// Remark: title is optional and only display in callout box
function set_alert($type, $msg, $icon = '')
{
	$CI =& get_instance();
	$CI->session->set_flashdata('alert_type', $type);
	$CI->session->set_flashdata('alert_icon', $icon);
	$CI->session->set_flashdata('alert_msg', $msg);
}

// Get from flashdata
function get_alert()
{
	$CI =& get_instance();
	$type = $CI->session->flashdata('alert_type');
	$icon = $CI->session->flashdata('alert_icon');
	$msg = $CI->session->flashdata('alert_msg');

	if ( !empty($type) && !empty($msg) )
		return array('type' => $type, 'msg' => $msg,'icon' => $icon);
	else
		return NULL;
}
