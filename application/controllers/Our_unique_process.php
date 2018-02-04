<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Our_unique_process extends CI_Controller
{

    public $data;

    public function __construct()
    {
        parent::__construct();

        $this->data['lang'] = langGet();
    }

    public function index()
    {
        $this->load->view('our-unique-process', $this->data);
    }

}