<?php

/**
 * Created by PhpStorm.
 * User: development
 * Date: 29/01/2018
 * Time: 00:06
 */
class Admin_model extends CI_Model
{


    public function validation()
    {
        $this->db->where('activated', 1);
        $this->db->where('email', $this->email);
        $this->db->where('password', md5($this->password));
        $data = $this->db->get('admin')->result_array();
        return $data;
    }

}