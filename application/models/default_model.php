<?php

class Default_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
	$this->load_table('users');
    }
}