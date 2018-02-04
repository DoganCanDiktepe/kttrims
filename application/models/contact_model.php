<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: development
 * Date: 26/01/2018
 * Time: 20:42
 */
class Contact_model extends CI_Model
{

    public function getList()
    {
        return $this->db->get('contact')->result_array();
    }

    public function getRemove()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('contact');
        return $this->db->affected_rows();
    }


}