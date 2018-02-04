<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Referance extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        loginCheck();
    }

    public function index()
    {
        $this->load->model('Referance_model');
        $data['list'] = $this->Referance_model->getList();
        $this->load->view('manage/referance', $data);
    }

    public function edit($id)
    {

        $post = $this->input->post(null, true);
        $this->load->model('Referance_model');
        $this->Referance_model->id = $id;
        $data['detail'] = $this->Referance_model->getEdit();

        if (count($post)) {
            $post['activate'] = (isset($post['activate'])) ? 1 : 0;
	        unset($post['files']);
            $this->Referance_model->data = $post;
            $response = $this->Referance_model->getUpdate();
            if ($response) {
                $data['detail'] = $post;
            }
        }

        $this->load->view('manage/referance_edit', $data);

    }

    public function add()
    {
        $this->load->model('Referance_model');
        $data['detail'] = array(
            'id' => null,
            'sort' => 0,
            'activate' => 0,
            'picture' => [],
	        'lang_id' => -1
        );

        $post = $this->input->post(null, true);

        if (count($post)) {
            $post['update_at'] = date('Y-m-d H:i:s');
	        $post['activate'] = (isset($post['activate'])) ? 1 : 0;
	        unset($post['files']);
            $this->Referance_model->data = $post;
            $response = $this->Referance_model->getInsert();
            if ($response) {
                redirect(base_url('manage/referance/edit/' . $response));
            }
        }

        $this->load->view('manage/referance_edit', $data);

    }

    public function remove($id)
    {
        $this->load->model('Referance_model');
        $this->Referance_model->id = $id;
        $response = $this->Referance_model->getRemove();
        if ($response) {
            redirect(base_url('manage/referance/'));
        }
    }

}