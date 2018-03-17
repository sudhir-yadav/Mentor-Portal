<?php

class Meeting_model extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function getMeetings($mentor_id = 2)
    {
      $query = $this->db->get_where('meeting_schedule', array('ms_mentor_id' => $mentor_id,'ms_flag' => 1));
      return  $row = $query->result();
    }

     public function meetingFeedback($mentor_id)
    {
      //$query = "SELE"
      $query = $this->db->get_where('meeting_schedule', array('ms_mentor_id' => $mentor_id,'ms_flag' => 1));
      return  $row = $query->result();
    }

    public function getproblemTypes()
    {
      $query = $this->db->get_where('problem_types',array('pt_flag' => 1)); 
      return  $row = $query->result(); 
    }


    public function storeProblemDetails($problems)
    {
       $sessdata =  $this->session->userdata();

       $data = array(
                          'sp_meeting_id' =>$problems['meeting_id'], 
                          'sp_problem_desc' =>$problems['desc'],
                          'sp_problem_id' =>$problems['problem'],
                          'sp_student_id' =>$this->encrypt->decode($sessdata['userdata']['user_id']) , 
                          'sp_mentor_id' =>2 ,
                          'sp_flag' =>1 
                       );

         $this->db->insert('student_problems', $data); 

         if($this->db->affected_rows() > 0)
           return true;
         else
           return false; 
    }


    public function getfeedBackQuestions()
    {
  
      $query = $this->db->get_where('feedback_questions',array('fq_flag' => 1)); 
      return  $row = $query->result();
      
    }


    public function getMeetingReports()
    {

       $dataQuery = 'SELECT  ma_student_id,sm.* FROM mp_student_master sm,mp_mentor_assignment WHERE ma_student_id = sm_id AND ma_mentor_id ='.$mentor_id .' ORDER BY sm.sm_id';
      $query = $this->db->query($dataQuery); 
      return  $row = $query->result();      
    
      
    }



    public function storefeedBackReport($arr)
    {
       $data = array(
                          'mr_meeting_id' =>$arr['meeting_id'], 
                          'mr_student_id' =>$arr['student'],
                          'mr_flag' =>1 
                       );

         $this->db->insert('mp_mentoring_report', $data); 
         $report_id = $this->db->insert_id();

         if($report_id)
         {
              foreach ($arr['questions'] as $question_id => $question_ans) 
              {
                $question_data = array(
                          'fr_question' =>$question_id, 
                          'fr_report_id' =>$report_id,
                          'fr_report_feedback' =>$question_ans,
                          'fr_flag' =>1 
                       );
                  $this->db->insert('mp_feedback_report',$question_data);
              }
           return true; 
         }
         else
           return false; 
    }


    public function getQuestionStat($mentor = 2,$meeting_id = 32)
    {

      $dataQuery = "SELECT fq_id,fq_text,avg(fr_report_feedback) as avg_of_ques,sum(fr_report_feedback) as sum_of_ques FROM mp_feedback_questions,mp_feedback_report, mp_mentoring_report,mp_meeting_schedule WHERE ms_mentor_id=$mentor and ms_id=$meeting_id and fr_question = fq_id group by fr_question";
       $query = $this->db->query($dataQuery); 
       return  $row = $query->result(); 

    }



}


