<?php

class Mentor_login_model extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function getMentorStatus($emailId)
    {
       $query = $this->db->get_where('mentor_master', array('mm_email' => $emailId))->row()->mm_email;
       $no_rows = $query->num_rows();
       return $no_rows;
    } // 0 if not registered , 1 if registered
    
    public function storeMentorInfo($emailId)
    {
          $data = array(
                          'sm_id' => $userData['nu_id'],
                          'mm_google_id' =>$userData['g_id'], 
                          'mm_user_img' =>$userData['user_img'],
                          'mm_reg_time' =>$userData['mp_reg_time'], 
                          'mm_flag' =>1 ,
                          'mm_reg_status'=>1
                       );

         $this->db->insert('mentor_master', $data); 

         if($this->db->affected_rows() > 0)
           return true;
         else
           return false;
    }

    public function storeMeetingDetails($formData)
    {
        
        $data =  $this->session->userdata();

        $meetingData = Array(
                              'ms_title' => $formData['title'],
                              'ms_meeting_date' => $formData['date'],
                              'ms_meeting_time' => $formData['time'],
                              'ms_mentor_id' => $data['userdata']['mentor_id'],
                              'ms_description' => $formData['summary'],
                              'ms_flag' => 1
                            );

        $str = $this->db->insert_string('meeting_schedule', $meetingData);
        $result = $this->db->query($str);
        $meeting_id = $this->db->insert_id();

        /*$reportData = Array(
                              'mr_meeting_id' => $meeting_id,
                              'mr_flag' => 1
                            );

        $str2 = $this->db->insert_string('mentoring_report', $reportData);
        $result2 = $this->db->query($str2);*/

/*        echo $result2;
        die;*/
        return $meeting_id;
    }

    public function getMentoringStudents($mentor_id = 2)
    {
  
      $dataQuery = 'SELECT  ma_student_id,sm.* FROM mp_student_master sm,mp_mentor_assignment WHERE ma_student_id = sm_id AND ma_mentor_id ='.$mentor_id .' ORDER BY sm.sm_id';
      //echo $dataQuery;
      $query = $this->db->query($dataQuery); 
      return  $row = $query->result();      
    }

     public function getStudentProblems($mentor_id = 2)
    {
      /*
       $query = "SELECT * FROM STUDENT LEFT OUTER JOIN PROBLEMS ON STUDENT.ID = PROBLEMS.ID";
       mp_student_master - id,name,
       mp_student_problems - problem_desc,prob_id,stud_id,meeting_id (multiple)
       mp_problem_types - p_id,problem_name 
       mp_meeting_schedule - meeting name
       */ 
  
      /*$dataQuery = 'SELECT  sm_id,sm_name,sm_last_name,sm_user_img,pt_problem_name,ms_title,sp_id 
                    FROM mp_student_master,mp_student_problems,mp_problem_types,mp_meeting_schedule 
                    WHERE sp_problem_id = pt_id AND 
                          sp_student_id = sm_id AND 
                          sp_meeting_id = ms_id AND 
                          sp_mentor_id ='.$mentor_id .'   
                    GROUP BY sp_id 
                    ORDER BY sp_meeting_id';*/

     /* $dataQuery = 'SELECT  sm_id,sm_name,sp_problem_desc,ms_title
                    FROM mp_student_problems
                    LEFT OUTER JOIN mp_student_master 
                    ON sp_student_id = sm_id
                    INNER JOIN mp_problem_types 
                    ON sp_problem_id = pt_id
                    LEFT OUTER JOIN mp_meeting_schedule 
                    ON sp_meeting_id = ms_id';*/

       $dataQuery = 'SELECT  sm_id,sm_name,sp_problem_desc
                     FROM mp_student_problems
                     RIGHT OUTER JOIN mp_student_master 
                     ON sp_student_id = sm_id';

      $query = $this->db->query($dataQuery); 
      return  $row = $query->result();      
    }

    public function getStudentInfo($emailId)
    {
    } 

/*
    public function storePersonalData(){}
    public function storeAcedemicData(){}
*/
}


