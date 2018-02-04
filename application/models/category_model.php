<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: development
 * Date: 26/01/2018
 * Time: 20:42
 */
class Category_model extends CI_Model
{

    public function getList()
    {

        if (isset($this->lang)) {
            $this->db->where('lang_id', $this->lang);
        }

        if (isset($this->active)) {
            $this->db->where('active', $this->active);
        }

        $this->db->order_by('sort', 'asc');
        $data = $this->db->get('category')->result_array();
        return $data;
    }

    public function getEdit()
    {

        if (isset($this->id)) {
            $this->db->where('id', $this->id);
        }

        if (isset($this->seoUrl)) {
            $this->db->where('seoUrl', $this->seoUrl);
        }

        if (isset($this->active)) {
            $this->db->where('active', $this->active);
        }

        $data = $this->db->get('category')->result_array();

        //echo $this->db->last_query();
        return @$data[0];
    }

    public function getUpdate()
    {
        $this->db->where('id', $this->id);
        $this->db->update('category', $this->data);
        return $this->db->affected_rows();
    }

    public function getInsert()
    {
        $this->db->insert('category', $this->data);
        return $this->db->insert_id();
    }

    public function getRemove()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('category');
        return $this->db->affected_rows();
    }

}