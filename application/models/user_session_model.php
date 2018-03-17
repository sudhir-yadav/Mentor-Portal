<?php

class User_session_model extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();

    }

    public function login($postvalues)
    {
    	$conditions = array('am_user_id' => $postvalues['admin_uname'],'am_password' => sha1($postvalues['admin_password']));
        $query = $this->db->get_where('admin',$conditions);
        return $query->num_rows();
    }

}

 
