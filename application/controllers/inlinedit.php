<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Inlinedit extends MY_Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function user_update()
 {
             $data=array();
             set_table('user_general');
             $this->load->model('user_model','user_general');
            $pk=  $this->input->post('pk');
            $name=  $this->input->post('name');
            $value=  $this->input->post('value');
            if(!empty($value))
            {
               $data[$name]=$value;
               $this->user_general->update($data,$pk);
               exit();
            }
            else{
                 header('HTTP 400 Bad Request', true, 400);
                 echo "This field is required!";
            }
 } 
}

