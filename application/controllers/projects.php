<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Projects extends MY_Controller
{
 public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $this->mTitle="My Projects";
        $this->mViewFile="pages/my_project";
    }
}
