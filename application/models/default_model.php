<?php

class Default_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
	$this->load_table('users');
    }
    
    public function get_profile($name,$id)
    {
$query = 'UPDATE  `users` SET `profile_use` = CONCAT(`profile_use`, ' ;
$query .=  "',','$name'";
$query .= ') WHERE `id` = ' . $id;
$this->db->query($query);
    }
}