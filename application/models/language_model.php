<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: development
 * Date: 26/01/2018
 * Time: 20:42
 */
class Language_model extends CI_Model
{

    public function getList()
    {
        return $this->db->get('language')->result_array();
    }

    public function getEdit()
    {
        $this->db->where('id', $this->id);
        $data = $this->db->get('language')->result_array();
        return @$data[0];
    }

    public function getUpdate()
    {
        $this->db->where('id', $this->id);
        $this->db->update('language', $this->data);
        return $this->db->affected_rows();
    }

    public function getInsert()
    {
        $this->db->insert('language', $this->data);
        return $this->db->insert_id();
    }

    public function getRemove()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('language');
        return $this->db->affected_rows();
    }

}