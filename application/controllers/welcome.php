<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
 public $profile_view = array();	
    public function __construct()
	{
		parent::__construct();
		$this->load->model('default_model','user');
		$this->load->helper('email');
	}
	public function index()
	{
		//Check if user is logged in
            $check=$this->auth->is_logged_in();
		if($check=="valid"){
                    redirect('home');
                }
                else
                {
		    $this->mViewFile='startup';
                }
	}
        public function login_t()
        {
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
$this->form_validation->set_rules('password', 'Password', 'required');
if ($this->form_validation->run()!= FALSE)
		{
           
    if($this->input->post('ulogin') == "true"){
         
                        $email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->user->get_one(array(
				'email'		=> $email,
				'active'	=> 1
			));
                       if ( !empty($user) )
			{
             
				// check password
				if ( verify_pw($password, $user['password']) )
				{
					// limited fields to store in session
					$fields = array('id');
					$user_data = elements($fields, $user);
					login_user($user_data);

					// success
					set_alert('success', 'Login success.');
					redirect('home');
					exit;
				}
                                 else {
                    set_alert('danger','password doesn\'t match with your account.');
                    redirect('welcome/login_t');
                           } 
			}
                      else {
                    set_alert('danger','email doesn\'t exist or account currently not active.');
                    redirect('welcome/login_t');
                           }  
             }
                }
               else {
                    $this->mViewFile='pages/user_login';
                }
        }
        public function signup_t()
        {
            $this->mViewFile='pages/user_signup';
        }

        public function signup()
        {
 $this->form_validation->set_error_delimiters('<div class="err">', '</div>');
$this->form_validation->set_rules('first_name','Firstname','trim|required|min_length[4]|max_length[10]|xss_clean');
$this->form_validation->set_rules('last_name','Lastname','trim|required|min_length[4]|max_length[10]|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[conf_password]');
$this->form_validation->set_rules('conf_password', 'Password Confirmation', 'trim|required');
$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
$this->form_validation->set_rules('phone_no', 'Phone no', 'trim|required|is_natural|min_length[10]');
if ($this->form_validation->run()!= FALSE)
		{
           $user_data = elements(['first_name', 'last_name', 'email', 'password','college_id','phone_no','ypassout','role','company_name'], $this->input->post(),NULL);
           $user_data['password'] = md5($user_data['password']);
           $user_data['activation_code'] = generate_unique_code();
           
           //confirm to create user
           $user_id= $this->user->insert($user_data);
      
           if ( !empty($user_id) )
			{
				// get newly created user (with activation code)
				$user = $this->user->get($user_id);

				// send activation email (make sure config/email.php is properly set first)
				/*
				$to_name = $user['first_name'].' '.$user['last_name'];
				$subject = 'Account Activation';
				send_email($user['email'], $to_name, $subject, 'signup', $user);
				*/

				// redirect with success message
				set_alert('success', 'Thanks for signing up! You will receive a email shortly to activate your account.');
                           $data['status']="success";
                            echo json_encode($data);
                        }
        } 
 else {
    $data = array(
            'first_name' => form_error('first_name'),
            'last_name' => form_error('last_name'),
            'email' => form_error('email'),
            'password' => form_error('password'),
            'conf_password' => form_error('conf_password'),
            'phone_no' => form_error('phone_no') 
        );
        echo json_encode($data);    
 }

        }
       public function session_auth()
         {
             $data['login']=$this->auth->is_logged_in();
             log_message('debug',  print_r($data,TRUE));
             echo json_encode($data);
         }
         public function profile($pid=FALSE)
         {
             if ($pid != FALSE) {
        //check if profile id is passed 
        $email_id = urldecode($pid);
        //then query on that email_id in the database
         $users = $this->user->get_one(array(
                 'email'=>$email_id,
                 'active'=>1
             ));
         if ( !empty($users) )
           {
             if($this->session->userdata('is_logged_in')!="valid")
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
              $this->profile_view=array_merge($this->profile_view,$this->$val->get_one(
                      array(
				'id'		=> $users['id'],
				'active'	=> 1
			)));
        }
        }
        $this->profile_view=array_merge($this->profile_view,$users);
        $this->mViewFile='pages/profile_view';
                 }
           }
          
         }
         
         
        }
}

