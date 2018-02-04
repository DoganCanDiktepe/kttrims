<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: development
 * Date: 04/02/2018
 * Time: 11:46
 */
class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        loginCheck();
    }

    public function index()
    {
        echo "asd";
    }


}