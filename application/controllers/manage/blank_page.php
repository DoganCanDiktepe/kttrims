<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Blank_page extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('manage/blank_page');
	}
	
}