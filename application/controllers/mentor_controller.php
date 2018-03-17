<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mentor_controller extends CI_Controller 
{    
       function __construct()
       {
                parent::__construct();//  $this->config->load('google'); 
                 $sessData = array(
                             'mentor_id'=>2,
                             'first_name'=>'Smita',
                             'last_name'=>'Agarwal',
                             'email'=>'smita.agrawal@nirmauni.ac.in',
                             'user_img'=>"1.jpg"
                             ); 

                 $this->session->set_userdata('userdata',$sessData); 
                 $data = $this->session->userdata(); 
                 $this->load->model('mentor_login_model'); 

                 $data['title'] = 'MENTOR DASHBOARD';
       }

       public function index() 
       {
          $data['sess_data'] =  $this->session->userdata();
         // echo $this->headerText;
         // die;
          $data['title'] = ' <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i> &nbsp;DASHBOARD';
       	  $this->load->view('mentor/header',$data);
          $this->load->view('mentor/sidebar');
          $this->load->view('mentor/main_content',$data);
          $this->load->view('mentor/footer');
       }

       public function setMeetingDetails()
       {

             if($_POST)
             {
              $this->form_validation->set_rules('title', 'title','required');
              $this->form_validation->set_rules('date', 'date','required');
              $this->form_validation->set_rules('time', 'time','required');
               
               if ($this->form_validation->run())
                {

                  $postvalues = $this->input->post();
                  if($postvalues['title']&& $postvalues['date'] && $postvalues['time'] )
                  {
                     $this->mentor_login_model->storeMeetingDetails($postvalues);
                     redirect('mentor/schedule-meeting');
                  }

                }
                else
                {
                  redirect('mentor/schedule-meeting');
                }

             }        
       }

       public function schedule_meeting() 
       {
          $data['sess_data'] =  $this->session->userdata();
          $data['title'] = '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">today</i>&nbsp;&nbsp; MEETING';
          $this->load->view('mentor/header',$data);
          $this->load->view('mentor/sidebar');
          $this->load->view('mentor/schedule_meeting',$data);
          $this->load->view('mentor/footer');
       }

       public function acedemics() 
       {
          $data['title'] = '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>&nbsp;&nbsp; ACADEMICS';
          $data['sess_data'] =  $this->session->userdata();
          $this->load->view('mentor/header',$data);
          $this->load->view('mentor/sidebar');
          $this->load->view('mentor/acedemics',$data);
          $this->load->view('mentor/footer');
       }

       public function problems() 
       {
          $data['sess_data'] =  $this->session->userdata();
          $data['sessData'] = $this->mentor_login_model->getStudentProblems(2);

          $data['title'] = '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>&nbsp;&nbsp;PROBLEMS';
         
          $this->load->view('mentor/header',$data);
          $this->load->view('mentor/sidebar');
          $this->load->view('mentor/problems',$data);
          $this->load->view('mentor/footer');
       }

       public function students()
       {

          $data['sess_data'] =  $this->session->userdata();
          $data['sessData'] = $this->mentor_login_model->getMentoringStudents(2);
          $data['title'] = ' <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i> &nbsp;&nbsp;STUDENTS';
          $sessData = "";
          $this->load->view('mentor/header',$data);
          $this->load->view('mentor/sidebar');
          $this->load->view('mentor/students',$data);
          $this->load->view('mentor/footer');
       }


       public function feedback()
       {
          $this->load->model('meeting_model');
          $data['feedback_details'] = $this->meeting_model->getQuestionStat(2,32);
          $data['sess_data'] =  $this->session->userdata();
          $data['sessData'] = $this->mentor_login_model->getMentoringStudents(2);
          $data['title'] = ' <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">feedback</i> &nbsp;&nbsp;FEEDBACK';
          $sessData = "";
          $this->load->view('mentor/header',$data);
          $this->load->view('mentor/sidebar');
          $this->load->view('mentor/feedback',$data);
          $this->load->view('mentor/footer');
       }
}
