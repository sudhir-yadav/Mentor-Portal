<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Student_controller extends CI_Controller 
{    
       function __construct()
       {
                parent::__construct();//  $this->config->load('google');
                if ($this->session->userdata('logged_in')) 
                {
                    if($this->session->userdata('mp_login_type') == 'mentor')
                       redirect('mentor');
                     if($this->session->userdata('mp_login_type') == 'admin')
                       redirect('admin/dashboard');
                }
                else{redirect(base_url());} 
                  
       }
       
       public function index() 
       {
       	  if($this->session->userdata('userdata')['registration_status'] == 1){
            $this->student_personal_details();
          }
          else if($this->session->userdata('userdata')['registration_status'] == 2){
             $this->student_educational_details();
          }
          else{
            $data['userdata'] = $this->session->userdata('userdata');
            $this->load->view('student/header');
                    $this->load->view('student/sidebar',$data);
                    $this->load->view('student/main_content');
                    $this->load->view('student/footer');
              }
       }

       public function feedback() 
       {
          $this->load->model('meeting_model');
          $data['feedback_questions'] = $this->meeting_model->getfeedBackQuestions();
          $mentor_id = $this->session->userdata('userdata')['mentor'];
          $data['meeting_details'] = $this->meeting_model->getMeetings($mentor_id);
           $data['userdata'] = $this->session->userdata('userdata');
          $this->load->view('student/header',$data);
          $this->load->view('student/sidebar');
          $this->load->view('student/feedback',$data);
          $this->load->view('student/footer');
       }

       public function submit_feedback() 
       {
      
           $this->load->model('meeting_model');
          $mentor_id = $this->session->userdata('userdata')['mentor'];
          $student_id = $this->encrypt->decode($this->session->userdata('userdata')['user_id']);
          
           if(!in_array("",$_POST['questions']))
           {
             $feedb_data = array(
                                'questions' => $_POST['questions'],
                                'mentor' => $mentor_id,
                                'student'=>$student_id,
                                'meeting_id' =>$_POST['meeting_id']
                            ) ;
             
             $response = $this->meeting_model->storefeedBackReport($feedb_data);
               redirect('student/feedback');
           }else{
             redirect('student/feedback');
           }

     
       }

        public function meetings() 
       {
           $data['userdata'] = $this->session->userdata('userdata');
          $this->load->model('meeting_model');
          $mentor_id = $this->session->userdata('userdata')['mentor'];
          $data['meetings'] = $this->meeting_model->getMeetings($mentor_id);
          $data['problems'] = $this->meeting_model->getproblemTypes();
          $this->load->view('student/header',$data);
          $this->load->view('student/sidebar',$data);
          $this->load->view('student/meetings',$data);
          $this->load->view('student/footer');
       }

       public function studentProblem()
       {
          $this->load->model('meeting_model');
            if($_POST)
             {
              $this->form_validation->set_rules('problem', 'problem','required');
            // $this->form_validation->set_rules('desc', 'desc','required');
              $this->form_validation->set_rules('meeting_id', 'meeting_id','required');

             // $postvalues = $this->input->post();
             // print_r($postvalues);
               
               if ($this->form_validation->run())
                {
                  $postvalues = $this->input->post();
                 // print_r($postvalues);
                  if($postvalues['problem'] && $postvalues['meeting_id'])
                  {

                     $this->meeting_model->storeProblemDetails($postvalues);
                     redirect('student/meetings');
                  }

                }
                else
                {
                  redirect('student/meetings');
                }

             }   
       }

      public function student_personal_details()
       {
           $data['user_data'] = $this->session->userdata('userdata');
            $this->load->view('student/student_form_pinfo',$data);
       }
       
       public function get_personal_details(){
           echo "sudhir";
       }

       public function student_educational_details()
       {
            $this->load->view('student/student_form');
       }

       public function problems() 
       {
           $data['userdata'] = $this->session->userdata('userdata');
          $this->load->view('student/header',$data);
          $this->load->view('student/sidebar');
          $this->load->view('student/problems');
          $this->load->view('student/footer');
       }

        public function logout() 
       {
           $this->session->sess_destroy();
           redirect(base_url());
       }// Unset session and logout 
}
