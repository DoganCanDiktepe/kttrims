<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: development
 * Date: 26/01/2018
 * Time: 20:42
 */
class Product_model extends CI_Model
{

    public function getList()
    {
        return $this->db->get('product')->result_array();
    }

    public function getEdit()
    {
        $this->db->where('id', $this->id);
        $data = $this->db->get('product')->result_array();
        return @$data[0];
    }

    public function getCategoryProducts()
    {

        $this->db->where('lang_id', $this->lang_id);
        $this->db->where('activate', $this->activate);
        $this->db->where('category_id', $this->category_id);
        $this->db->order_by('sort', 'asc');
        $data = $this->db->get('product')->result_array();

        return $data;
    }

    public function getUpdate()
    {
        $this->db->where('id', $this->id);
        $this->db->update('product', $this->data);
        return $this->db->affected_rows();
    }

    public function getInsert()
    {
        $this->db->insert('product', $this->data);
        return $this->db->insert_id();
    }

    public function getRemove()
    {
        $this->db->where('id', $this->id);
        $this->db->delete('product');
        return $this->db->affected_rows();
    }

}