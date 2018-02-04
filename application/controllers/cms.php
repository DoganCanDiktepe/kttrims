<?php

/**
 * Created by PhpStorm.
 * User: development
 * Date: 04/02/2018
 * Time: 12:06
 */
class Cms extends CI_Controller
{

    public function index()
    {
        redirect(base_url('manage/login/'));
    }
}