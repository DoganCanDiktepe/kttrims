<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        loginCheck();
    }

    public function index()
    {
        $this->load->model('Product_model');

        $this->load->model('Category_model');

        $data['categoryList'] = $this->Category_model->getList();

        $data['list'] = $this->Product_model->getList();

        $this->load->view('manage/product', $data);
    }


    public function edit($id)
    {
        $post = $this->input->post(null, true);
        $this->load->model('Product_model');
        $this->load->model('Category_model');

        $this->Product_model->id = $id;
        $data['detail'] = $this->Product_model->getEdit();
        $data['categoryList'] = $this->Category_model->getList();


        if (count($post)) {
            $post['activate'] = (isset($post['activate'])) ? 1 : 0;
            unset($post['files']);
            $this->Product_model->data = $post;
            $response = $this->Product_model->getUpdate();

            if ($response) {
                $data['detail'] = $post;
            }
        }

        $this->load->view('manage/product_edit', $data);

    }

    public function add()
    {
        $data['detail'] = array(
            'id' => null,
            'title' => '',
            'short_description' => '',
            'activate' => 0,
            'sort' => 0,
            'picture' => [],
            'category_id' => -1,
            'lang_id' => -1,
            'seoUrl' => '',
            'meta_title' => '',
            'meta_description' => '',
            'meta_keywords' => ''
        );
        $post = $this->input->post(null, true);
        $this->load->model('Category_model');
        $data['categoryList'] = $this->Category_model->getList();

        if (count($post)) {
            $this->load->model('Product_model');
            $post['update_at'] = date('Y-m-d H:i:s');
            $post['activate'] = (isset($post['activate'])) ? 1 : 0;
            unset($post['files']);
            $this->Product_model->data = $post;
            $response = $this->Product_model->getInsert();

            if ($response) {
                redirect(base_url('manage/product/edit/' . $response));
            }
        }

        $this->load->view('manage/product_edit', $data);
    }

    public function remove($id)
    {
        $this->load->model('Product_model');
        $this->Product_model->id = $id;
        $response = $this->Product_model->getRemove();
        if ($response) {
            redirect(base_url('manage/product/'));
        }
    }

}