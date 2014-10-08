<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    
class Social extends CI_Controller {
    
    var $info;
    public function __construct()
	{
		parent::__construct();
		$this->load->model('default_model','user');
		$this->load->helper('email');
	}
        
   public function session($provider) { 
         //facebook
         if($provider == 'facebook') {
                $app_id = $this->config->item('facebook_id');
		$app_secret = $this->config->item('facebook_secret');		
		$provider	= $this->oauth2->provider($provider, array(
			'id' => $app_id,
			'secret' => $app_secret,
			));			
		}
	//google
		else if($provider == 'google'){

			$app_id 		= $this->config->item('google_id');
			$app_secret 	= $this->config->item('google_secret');
			$provider 		= $this->oauth2->provider($provider, array(
				'id' => $app_id,
				'secret' => $app_secret,
			)); 			
		}
                
	if ( ! $this->input->get('code'))
        {  
            // By sending no options it'll come back here
            $provider->authorize();
            redirect('welcome');
        }
        else
        {
            // Howzit?
            try
            {
                $token = $provider->access($_GET['code']);
                $user = $provider->get_user_info($token);
                $this->info=array(
					'uid' => $user['uid'], 
					'first_name' => $user['first_name'],
                                        'last_name' => $user['last_name'],
					'email' => $user['email']
				);
                $data=  $this->info;
               $login_type = $this->user->get_one(array('uid'=>$data['uid'],'active'	=> 1));
                if(isset($login_type['uid'])&& $login_type['active']==1){
			 $user = $this->user->get_one(array(
                                'uid'           => $data['uid'],
				'email'		=> $data['email'],
				'active'	=> 1
			));
                       $fields = array('id', 'role', 'first_name', 'last_name', 'email', 'college_id','profile_notify');
		       $user_data = elements($fields, $user);
                       login_user($user_data);
                       // redirect with home
                                redirect('home');
			}
             else{
			//to read first-time details
                            $this->signup();
             }
                      
            }

            catch (OAuth2_Exception $e)
            {
                show_error('That didnt work: '.$e);
            }

        }
    }
    public function signup() {
		//check if signup form was submitted
		if($this->input->post('signup') == "true"){
			//Enter details into database
                        $user_data = elements(['first_name','last_name','uid','email','college_id','phone_no','ypassout','role','company_name'], $this->input->post(),NULL);
                        $user_data['active']=1; 
                        
                        //confirm to create user
              $user_id= $this->user->insert($user_data);

		if ( !empty($user_id) )
			{
				// get newly created user (with activation code)
				$user = $this->user->get_one(array('id'=>$user_id,'active'=> 1));

				// send activation email (make sure config/email.php is properly set first)
				/*
				$to_name = $user['first_name'].' '.$user['last_name'];
				$subject = 'Account Activation';
				send_email($user['email'], $to_name, $subject, 'signup', $user);
				*/
                                
                                $fields = array('id', 'role', 'first_name', 'last_name', 'email', 'college_id','profile_notify');
				$user_data = elements($fields, $user);
                                  login_user($user_data);
				// redirect with home
                                redirect('home');
                                
                          }	
		}
                else{
                    
                        $this->mViewFile='pages/social_signup';
		}
	}

    
    }

