<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_controller extends CI_Controller 
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
                }
                else{
                       redirect(base_url());
                }             
       }

       public function index() 
       {
       	  $this->load->view('admin/header');
          $this->load->view('admin/sidebar');
          $this->load->view('admin/main_content');
          $this->load->view('admin/footer');
       } // redirects to admin dashboard

        public function allocations() 
       {
          $this->load->model('mentor_login_model');
          $data['sess_data'] =  $this->session->userdata();
          $data['sessData'] = $this->mentor_login_model->getMentoringStudents(2);
          
          $this->load->view('admin/header');
          $this->load->view('admin/sidebar');
          $this->load->view('admin/allocations',$data);
          $this->load->view('admin/footer');
       } // redirects to allocation page 

       public function users() 
       {
          $this->load->model('user_model');
          $data['students'] = $this->user_model->getStudentsInfo();
          $data['teachers'] = $this->user_model->getMentorsInfo();
          
          $this->load->view('admin/users_header');
          $this->load->view('admin/sidebar');
          if($_POST){
            echo "<pre>";
            print_r($_POST);
          }
          $this->load->view('admin/users',$data);
          $this->load->view('admin/footer');
       } // redirects to users page 

       public function logout()
       {
          $this->session->sess_destroy();
          redirect(base_url()."admin");
       } // admin logout 
}