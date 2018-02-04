<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        loginCheck();
    }

    public function index()
    {
        $this->load->model('Category_model');
        $data['list'] = $this->Category_model->getList();
        $this->load->view('manage/category', $data);
    }

    public function edit($id)
    {

        $post = $this->input->post(null, true);
        $this->load->model('Category_model');
        $this->Category_model->id = $id;
        $data['detail'] = $this->Category_model->getEdit();

        if (count($post)) {
            $post['active'] = (isset($post['active'])) ? 1 : 0;
            unset($post['files']);
            $this->Category_model->data = $post;
            $response = $this->Category_model->getUpdate();
            if ($response) {
                $data['detail'] = $post;
            }
        }

        $this->load->view('manage/category_edit', $data);

    }

    public function add()
    {
        $this->load->model('Category_model');
        $data['detail'] = array(
            'id' => null,
            'title' => '',
            'short_description' => '',
            'sort' => 0,
            'active' => 0,
            'picture' => [],
            'lang_id' => -1,
            'seoUrl' => '',
            'meta_title' => '',
            'meta_description' => '',
            'meta_keywords' => ''
        );

        $post = $this->input->post(null, true);

        if (count($post)) {
            $post['update_at'] = date('Y-m-d H:i:s');
            $post['active'] = (isset($post['active'])) ? 1 : 0;
            unset($post['files']);
            $this->Category_model->data = $post;
            $response = $this->Category_model->getInsert();
            if ($response) {
                redirect(base_url('manage/category/edit/' . $response));
            }
        }

        $this->load->view('manage/category_edit', $data);

    }

    public function remove($id)
    {
        $this->load->model('Category_model');
        $this->Category_model->id = $id;
        $response = $this->Category_model->getRemove();
        if ($response) {
            redirect(base_url('manage/category/'));
        }
    }

}