<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: development
 * Date: 26/01/2018
 * Time: 20:42
 */
class Referance_model extends CI_Model
{

    public function getList()
    {

        if (isset($this->activate)) {
            $this->db->where('activate', $this->activate);
        }

        if (isset($this->lang)) {
            $this->db->where('lang_id', $this->lang);
        }

        $this->db->order_by('sort', 'asc');
        return $this->db->get('referance')->result_array();
    }

    public function getEdit()
    {
        $this->db->where('id', $this->id);
        $data = $this->db->get('referance')->result_array();
        return @$data[0];
    }

    public function getUpdate()
    {
        $this->db->where('id', $this->id);
        $this->db->update('referance', $this->data);
        return $this->db->affected_rows();
    }

    public function getInsert()
    {
        $this->db->insert('referance', $this->data);
        return $this->db->insert_id();
    }

    public function getRemove()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('referance');
        return $this->db->affected_rows();
    }

}