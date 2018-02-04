<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('manage/login');
    }

    public function enter()
    {
        $post = $this->input->post(null, true);
        $this->load->model('Admin_model');
        $this->Admin_model->email = $post['email'];
        $this->Admin_model->password = $post['password'];
        $response = $this->Admin_model->validation();

        if (count($response)) {
            $this->session->set_userdata('admin', 1);
            redirect(base_url('manage/category'));
        }else{
            redirect(base_url('manage/login'));
        }
    }

}