<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: development
 * Date: 26/01/2018
 * Time: 20:42
 */
class Subscribe_model extends CI_Model
{

    public function getList()
    {
        return $this->db->get('subscribe')->result_array();
    }

    public function getRemove()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('subscribe');
        return $this->db->affected_rows();
    }


}