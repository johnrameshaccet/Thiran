<?php

class User_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $name=get_table();
	$this->load_table($name);
    }
}