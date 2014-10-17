<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends MY_Controller
{
  var $data,$users;
  public $profile_save = array();
    public function __construct() {
        parent::__construct();
        $this->load->model('default_model','user');
        $this->data = get_user();      
    }

    public function index()
    {  
        $users=$this->data;
         if ( !empty($users) )
        {
             if($this->session->userdata('is_logged_in')=="valid")
                 {
        if($users['profile_notify']!="done")
        {
            $this->edit_profile();
        }
 else {
      
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
      $this->mTitle = "View Profile";
      $this->mViewFile = 'pages/view_profile';
       }
       }
         }
         else{
             redirect('welcome/login_t');
         }
         
    }
    
    public function edit_profile()
    {
        if($this->session->userdata('is_logged_in')=="valid")
                 {
        $data=  $this->data;
         $users = $this->user->get_one(array(
                 'id'=>$data['id']
             ));
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
				'id'		=> $data['id'],
				'active'	=> 1
			)));
        }
        }
            $this->mTitle = "Edit Profile";
	    $this->mViewFile = 'pages/edit_profile';
    }
    }

        public function general()
    {        
        set_table('user_general');
             $this->load->model('user_model','user_general');
            $details=$this->data;
            $user_gen = elements(['dob','gender','address','city','state','pincode'], $this->input->post());
            $user_gen['photo']= asset_url()."img/5.jpg";
              $check_id=$this->user_general->get_one(array('id'=>$details['id']));
            if(empty($check_id['id']))
            {
             $user_gen['id']=$details['id'];
            $save_id=$this->user_general->insert($user_gen);
            if(isset($save_id))
            {
                $det=array(
                    'profile_notify'=>'done',
                    'profile_use'=>get_table(),
                    'profile_created' =>'NOW()'
                    );
                $this->user->update($det,$details['id']);
                refresh_user($det);
                redirect('profile/edit_profile');
            }
            }
               else {
                $save_id=$this->user_general->update($user_gen,$details['id']); 
                if(isset($save_id))
            {
                     redirect('profile/edit_profile');
            }
            }
            
           
 }
  public function education()
    {        
        set_table('user_education');
             $this->load->model('user_model','user_education');
            $details=$this->data;
            $user_gen = elements(['tenth','twelvth','diploma','degree','type_degree','college','university_regno','specialization','duration','cgpa','is_current_stud'], $this->input->post());
            
          
            $check_id=$this->user_education->get_one(array('id'=>$details['id']));
            if(empty($check_id['id']))
            {
             $user_gen['id']=$details['id'];
            $save_id=$this->user_education->insert($user_gen);
            if(isset($save_id))
            {
                $name=get_table();
                $this->user->get_profile($name,$details['id']);
                redirect('profile/edit_profile');
            }
            }
            else {
                $save_id=$this->user_education->update($user_gen,$details['id']); 
                if(isset($save_id))
            {
                     redirect('profile/edit_profile');
            }
            }
 }
    

 
 public function user_skils()
 {
     
 }
 
 
 public function extra_curr_achievements()
 {
     
 }
 
}