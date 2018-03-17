<?php

class Admin_model extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();

    } // ADMIN CI MODEL EXTENDS THE MAIN 

    public function login($postvalues)
    {
    	$conditions = array('am_user_id' => $postvalues['admin_uname'],'am_password' => sha1($postvalues['admin_password']));
        $query = $this->db->get_where('admin',$conditions);
        return $query->num_rows();

        if($no_rows == 0)
        return $no_rows;
       else
        return $query->row()->am_user_id;

    } //admin login 

}

 
