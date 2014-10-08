<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
public $profile_save = array();
	public function index()
	{
            $users=get_user();
            
             if($users['profile_notify']=="done")
             {
                  if($users['profile_use']!=NULL)
        {
                $table=array();
             $tables=$users['profile_use'];
             $table = explode(",", $tables);
             foreach ($table as $value) 
         {
                 $val = &$value;
              set_table($val);
             $this->load->model('user_model',$val);
              $this->profile_save=array_merge($this->profile_save,$this->$val->get_one(
                      array(
				'id'		=> $users['id'],
				'active'	=> 1
			)));
        }
        }
                 
             }
		$this->mTitle = "Home";
		$this->mViewFile = 'pages/home';
	       
        
        
         }

}