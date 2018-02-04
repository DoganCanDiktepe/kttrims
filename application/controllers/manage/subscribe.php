<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Subscribe extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        loginCheck();
    }

    public function index()
    {
        $this->load->model('Subscribe_model');
        $data['list'] = $this->Subscribe_model->getList();
        $this->load->view('manage/subscribe', $data);
    }

    public function remove($id)
    {
        $this->load->model('Subscribe_model');
        $this->Subscribe_model->id = $id;
        $response = $this->Subscribe_model->getRemove();
        if ($response) {
            redirect(base_url('manage/subscribe'));
        }
    }
}