<?php

class Student_login_model extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function getRegistrationStatus($userId)
    {
       $query = $this->db->get_where('student_master', array('sm_id' => $userId));
       $no_rows = $query->num_rows();

       if($no_rows == 0)
        return $no_rows;
       else
        return $query->row()->sm_reg_status;
        
        //return $reg_status = $this->db->get_where('student_master', array('sm_id' => $userId))->row()->sm_reg_status;
    }   // 0 if not registered , 1 if personal details , 2 if personal and educational 
    
    public function storeStudentInfo($userData)
    {
        $data = array(
                        'sm_id' => $userData['nu_id'],
                        'sm_google_id' =>$userData['g_id'], 
                        'sm_name' =>$userData['first_name'], 
                        'sm_last_name' =>$userData['last_name'], 
                        'sm_user_img' =>$userData['user_img'],  
                        'sm_email' =>$userData['email'], 
                        'sm_reg_time' =>$userData['mp_reg_time'], 
                        'sm_flag' =>1 ,
                        'sm_reg_status'=>1
                     );

       $this->db->insert('student_master', $data); 

       if($this->db->affected_rows() > 0)
         return true;
       else
         return false;

    }

    public function getStudentInfo($userId)
    {

      echo $userId;

      $dataQuery = "SELECT sm_id,sm_google_id,sm_name,sm_middle_name,sm_last_name,sm_user_img,sm_gender,sm_dob,sm_course_study, sm_email,sm_phone_no_p,sm_reg_status,ma_mentor_id FROM mp_student_master,mp_mentor_assignment WHERE sm_id = ma_student_id and sm_id ='$userId' and sm_flag=1";

       $query = $this->db->query($dataQuery);  
       $studentData = $query->result();
    /*     echo "<pre>";
       print_r($dataQuery);
       die;*/
       $studentData = $studentData[0];
  

      // $studentData1 = $this->db->get_where('student_master', array('sm_id' => $userId))->row();

     /*    echo "<pre>";
       print_r($studentData);
       die;*/

       $std_id = $this->encrypt->encode($studentData->sm_id);
       $gog_id = $this->encrypt->encode($studentData->sm_google_id);
       $user_email = $this->encrypt->encode($studentData->sm_email);
       return $pros_data = array(
                          'user_id'=>$std_id,
                          'google_id'=>$gog_id,
                          'email'=>$user_email,
                          'name'=>$studentData->sm_name,
                          'middle_name'=>$studentData->sm_middle_name,
                          'last_name'=>$studentData->sm_last_name,
                          'user_img'=>$studentData->sm_user_img,
                          'user_gender'=>$studentData->sm_gender,
                           'dob'=>$studentData->sm_dob,
                           'course_study'=>$studentData->sm_course_study,
                           'personal_phone'=>$studentData->sm_phone_no_p,
                           'registration_status'=>$studentData->sm_reg_status,
                           'mentor'=>$studentData->ma_mentor_id
                        );

    } 


}


