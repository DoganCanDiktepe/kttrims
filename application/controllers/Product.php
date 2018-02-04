<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Product extends CI_Controller
{

    public $data = [];

    public function __construct()
    {
        parent::__construct();

        $this->data['lang'] = langGet();
    }

    public function _remap($method)
    {
        if ($method) {
            $this->index($method);
        }
    }

    public function index($category)
    {
        $this->data['error'] = 0;

        if ($category) {
            $this->load->model('Category_model');
            $this->Category_model->seoUrl = $category;
            $this->Category_model->active = 1;
            $this->Category_model->lang = $this->data['lang']['id'];
            $this->data['categoryDetail'] = $this->Category_model->getEdit();

            if (count($this->data['categoryDetail'])) {
                $this->load->model('Product_model');
                $this->Product_model->lang_id = $this->data['lang']['id'];
                $this->Product_model->activate = 1;
                $this->Product_model->category_id = $this->data['categoryDetail']['id'];
                $this->data['productList'] = $this->Product_model->getCategoryProducts();
            }else{
                $this->data['categoryList'] = $this->Category_model->getList();
            }

        } else {
            $this->data['error'] = 1;
        }

        //print_r($this->data);

        $this->load->view('product', $this->data);
    }

}