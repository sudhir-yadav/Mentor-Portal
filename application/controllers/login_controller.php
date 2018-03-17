<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller 
{ 
       function __construct()
       {
                parent::__construct();//  $this->config->load('google');

               if ($this->session->userdata('logged_in'))
                { 
                    if($this->session->userdata('mp_login_type') == 'student')
                       redirect('student');
                    if($this->session->userdata('mp_login_type') == 'mentor')
                       redirect('mentor');
                     if($this->session->userdata('mp_login_type') == 'admin')
                       redirect('admin');
                }

                require_once 'application/libraries/gplus-verifytoken-php-master/google-api-php-client/src/Google_Client.php';
                require_once 'application/libraries/gplus-verifytoken-php-master/google-api-php-client/src/contrib/Google_Oauth2Service.php';
                date_default_timezone_set("Asia/Kolkata");
                $this->load->model('student_login_model');
       }// default function

       public function index() 
       {
             $client = $this->_googAuthGen();
             $oauth2 = new Google_Oauth2Service($client);
             if (isset($_GET['code'])) 
             {
               $this->_filterUserData($client);
             }
             else
             {
                 $authUrl = $client->createAuthUrl();
                 $this->load->view('login_view', array('authUrl' => $authUrl));
             }
       }// default class called

       public function getUserType($email)
       {
          $email_part = explode("@", $email);
          $user_id = $email_part[0];
          $email_domain = $email_part[1];
          $student_id_regex = '/[0-9]{2}[A-Za-z]{2,5}[0-9]{1,3}/';
          $mentor_id_regex = '/^[\w\-\.\+]+\@nirmauni.ac.in$/';
          
          if(preg_match($student_id_regex,$user_id))
          { 
            $role = "student";
            return $role;
          }
          elseif (preg_match($mentor_id_regex,$email)) 
          {
            $role = "mentor";
            return $role;
          }
          else
          {
              $this->session->set_userdata('error', 'INVALID USER ACCOUNT');
              $authUrl = $client->createAuthUrl();
              $this->load->view('login_view', array('authUrl' => $authUrl));
              return false;
          }
       }// returns user role (student,teacher,admin)

       private function _googAuthGen()
       {
            $client = new Google_Client();
            $client->setApplicationName("Mentor Portal");
            $client->setClientId('');
            $client->setClientSecret('');
            $client->setAccessType("offline");
            $client->setRedirectUri(base_url());
            return $client;
       }// creates client environment for google authentication 

       private function _filterUserData($client)
       {
          $oauth2 = new Google_Oauth2Service($client);
          try
          { 
               $client->authenticate($_GET['code']);
               $user = $oauth2->userinfo->get();
               
                  if(isset($user['hd']) && $user['hd'] == "nirmauni.ac.in")
                  {   
                          $usertype = $this->getUserType($user['email']);
                          $token = $client->getAccessToken();
                          $this->session->set_userdata('token',$token);
                          if($usertype == "student")
                          { 
                            $this->_setLoginData($user,$usertype);
                          }
                          elseif($usertype == "mentor")
                          {
                              $this->_setLoginData($user,$usertype);
                          }
                          else 
                          {  
                            $authUrl = $client->createAuthUrl();
                            $this->load->view('login_view', array('authUrl' => $authUrl));
                          } 
                  }
                  else
                  {
                           $this->session->set_userdata('error', 'ONLY NIRMA UNIVERSITY ACCOUNTS ALLOWED ');
                           $authUrl = $client->createAuthUrl();
                           $this->load->view('login_view', array('authUrl' => $authUrl));
                  }

          }
          catch(Exception $e)
          {
              $this->session->set_userdata('error', 'AUTHENTICATION ERROR');
              $authUrl = $client->createAuthUrl();
              $this->load->view('login_view', array('authUrl' => $authUrl));
          }
       }// filters user data given by google 
  
       private function _setLoginData($user,$user_type)
       {
          $email_part = explode("@", $user['email']);
          $user_id = $email_part[0];
          $sess_data = array('nu_id'=>$user_id,
                             'g_id'=>$user['id'],
                             'first_name'=>$user['given_name'],
                             'last_name'=>$user['family_name'],
                             'email'=>$user['email'],
                             'user_img'=>$user['picture'],
                             'gplus'=>$user['link'],
                             'mp_reg_time'=>date("Y-m-d h:i:s",time())
                             );

          if($user_type == 'student')
          {
               $reg_status = $this->student_login_model->getRegistrationStatus($user_id);
              if($reg_status == 0)
              {
                 $this->student_login_model->storeStudentInfo($sess_data);
              }
              
              $sessData = $this->student_login_model->getStudentInfo($user_id);
              $this->session->set_userdata('logged_in','true');
              $this->session->set_userdata('mp_login_type',$user_type);
              $this->session->set_userdata('gplus',$user['link']);
              $this->session->set_userdata('mp_login_time',date("Y-m-d h:i:s",time()));
              $this->session->set_userdata('userdata',$sessData);
            /*  if($sessData['registration_status'] == 1)
              {
                redirect('student/student-personal-details');
              }
              else if($sessData['registration_status'] == 2)
              {
                redirect('student/student-educational-details');
              }
              else
              {*/
                 redirect('student');
              /*}*/
              
          }
       }// would check login status and set login session

       public function logout() 
       {
           $this->session->sess_destroy();
           redirect(base_url());
       }// Unset session and logout 

} //LOGIN CONTROLLER FOR STUDENT AND MENTORS



