<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_controller extends Admin_controller 
{    
       function __construct()
       {
                parent::__construct();              
       }


        public function allocations() 
       {
          $this->load->model('mentor_login_model');
          $data['sess_data'] =  $this->session->userdata();
          $data['sessData'] = $this->mentor_login_model->getMentoringStudents(2);
          
          $this->load->view('admin/header');
          $this->load->view('admin/sidebar');
          $this->load->view('admin/allocations',$data);
          $this->load->view('admin/footer');
       }


}