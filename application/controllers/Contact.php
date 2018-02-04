<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Contact extends CI_Controller
{

	public $data;

	public function __construct()
	{
		parent::__construct();

		$this->data['lang'] = langGet();
	}
	
	public function index()
	{
		$this->load->view('contact', $this->data);
	}
	
}