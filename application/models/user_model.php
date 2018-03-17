<?php

class User_model extends CI_Model 
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
    

    public function getStudentsInfo()
    {
       $dataQuery = 'SELECT sm_id,sm_name,sm_last_name,sm_email,sm_course_study FROM mp_student_master WHERE sm_flag=1  ORDER BY sm_id';
       $query = $this->db->query($dataQuery); 
       return  $row = $query->result();      
    }

    public function getMentorsInfo()
    {
       $dataQuery = 'SELECT mm_mentor_id,mm_mentor_name,mm_last_name,mm_email,dm_dept_name FROM mp_mentor_master,mp_department_master WHERE mm_flag=1 AND mm_department = dm_dept_id ORDER BY mm_mentor_id';
       $query = $this->db->query($dataQuery); 
       return  $row = $query->result(); 
    } 

/*
    public function storePersonalData(){}
    public function storeAcedemicData(){}
*/
}


