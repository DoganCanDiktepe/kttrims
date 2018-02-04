<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        loginCheck();
    }

    public function index()
    {
        $this->load->model('About_model');
        $data['list'] = $this->About_model->getList();
        $this->load->view('manage/about', $data);
    }

    public function edit($id){
        $post = $this->input->post(null,true);
        $this->load->model('About_model');
        $this->About_model->id = $id;
        $data['detail'] = $this->About_model->getEdit();

        if(count($post)){
	        unset($post['files']);
            $this->About_model->data = $post;
            $response = $this->About_model->getUpdate();
            if($response) {
                $data['detail'] = $post;
            }
        }

        $this->load->view('manage/about_edit', $data);
    }

}