<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: development
 * Date: 26/01/2018
 * Time: 20:42
 */
class About_model extends CI_Model
{

    public function getList(){
        return $this->db->get('about')->result_array();
    }

    public function getEdit(){
        $this->db->where('id', $this->id);
        $data = $this->db->get('about')->result_array();
        return @$data[0];
    }

    public function getUpdate(){
        $this->db->where('id', $this->id);
        $this->db->update('about', $this->data);
        return $this->db->affected_rows();
    }

    public function getInsert(){
        $this->db->insert('about', $this->data);
        return $this->db->insert_id();
    }



}