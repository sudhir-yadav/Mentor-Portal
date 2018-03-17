<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_login_controller extends CI_Controller 
{    
      function __construct()
      {
            parent::__construct();

            if ($this->session->userdata('logged_in'))
                { 
                    if($this->session->userdata('mp_login_type') == 'student')
                       redirect('student');
                    if($this->session->userdata('mp_login_type') == 'mentor')
                       redirect('mentor');
                     if($this->session->userdata('mp_login_type') == 'admin')
                       redirect('admin/dashboard');
                }                     
      } // checking session details 

      public function index() 
      {

       	  $this->load->view('admin/admin_login');
      } // admin login page 

      public function login()
      { 
            if($_POST)
            {
              $this->load->model('admin_model');
              $form_config = array(
                                  array(
                                            'field' => 'admin_uname',
                                            'label' => 'admin_uname',
                                            'rules' => 'required|min_length[4]',
                                            'errors' => array('required' => 'USERNAME REQUIRED','min_length' => 'INVALID USERNAME' )
                                    ),
                                    array(
                                            'field' => 'admin_password',
                                            'label' => 'admin_password',
                                            'rules' => 'required|min_length[4]',
                                            'errors' => array('required' => 'PASSWORD REQUIRED', 'min_length' => 'INVALID PASSWORD' )
                                    )
                                  );
              $this->form_validation->set_rules($form_config);

              if($this->form_validation->run())
              {
                  $postvalues = $this->input->post();
                  if($postvalues['admin_uname'] && $postvalues['admin_password'])
                  {

                     if($this->admin_model->login($postvalues))
                     {

                      $this->session->set_userdata('logged_in','true');
                      $this->session->set_userdata('mp_login_type','admin');
                      $this->session->set_userdata('mp_login_time',date("Y-m-d h:i:s",time()));
                      $this->session->set_userdata('userdata',$sessData);

                      redirect(base_url()."admin/dashboard");
                     }
                     else
                     {
                      $this->session->set_userdata('error',"INVALID USERNAME OR PASSWORD");
                      redirect(base_url()."admin");
                     }
                  }
              } 
              else
              {
                $this->session->set_userdata('error',"INVALID CREDENTIALS");
                redirect(base_url()."admin");
              }        
            }else{redirect(base_url()."admin");}
      } // Checking login credentials ;
              
}