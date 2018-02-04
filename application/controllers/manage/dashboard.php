<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		loginCheck();
	}
	
	public function index()
	{
		$this->load->view('manage/dashboard');
	}
	
}