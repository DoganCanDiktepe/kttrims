<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        loginCheck();
    }

    public function index()
    {
        $this->load->model('Contact_model');
        $data['list'] = $this->Contact_model->getList();
        $this->load->view('manage/contact', $data);
    }

    public function remove($id)
    {
        $this->load->model('Contact_model');
        $this->Contact_model->id = $id;
        $response = $this->Contact_model->getRemove();
        if ($response) {
            redirect(base_url('manage/contact'));
        }
    }
}