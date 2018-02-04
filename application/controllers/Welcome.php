<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public $data;

    public function __construct()
    {
        parent::__construct();

        $this->data['lang'] = langGet();
    }

    public function index()
    {
        $this->load->view('index', $this->data);
    }
}
