<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends MY_Controller
{
  var $data;
  public $profile_save = array();
    public function __construct() {
        parent::__construct();
        $this->load->model('default_model','user');
        $this->data = get_user();
    }

    public function index()
    {
        $data=  $this->data;
        if($data['profile_notify']!="done")
        {
            if($data['profile_notify']==1)
           {
                set_table('user_general');
             $this->load->model('user_model','user_general');
              $this->profile_save=$this->user_general->get_one(
                      array(
				'id'		=> $data['id'],
				'active'	=> 1
			));
           }
           if($data['profile_notify']==2)
           {
                set_table('user_general');
             $this->load->model('user_model','user_general');
              $this->profile_save=$this->user_general->get_one(
                      array(
				'id'		=> $data['id'],
				'active'	=> 1
			));
           }
            $this->mTitle = "Edit Profile";
	    $this->mViewFile = 'pages/edit_profile';
             
        }
 else {
      $this->mTitle = "View Profile";
      $this->mViewFile = 'pages/view_profile';
 }
       
    }
    
    public function general()
    {        
        set_table('user_general');
             $this->load->model('user_model','user_general');
            $details=$this->data;
            $user_gen = elements(['dob','gender','address','city','state','pincode'], $this->input->post());
            $user_gen['photo']= asset_url()."img/user.png";
            if($details['profile_notify']=="empty")
            {
             $user_gen['id']=$details['id'];
            $save_id=$this->user_general->insert($user_gen);
            if(isset($save_id))
            {
                $det['profile_notify']=1;
                $this->user->update($det,$details['id']);
                redirect('profile');
            }
            }
            else {
                $save_id=$this->user_general->update($user_gen,$details['id']); 
                if(isset($save_id))
            {
                     redirect('profile');
            }
            }
 }
 
    
    
    
}